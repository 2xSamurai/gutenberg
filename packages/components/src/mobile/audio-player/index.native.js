/**
 * External dependencies
 */
import { Text, TouchableWithoutFeedback, Linking, Alert } from 'react-native';

/**
 * WordPress dependencies
 */
import { View } from '@wordpress/primitives';
import { Icon } from '@wordpress/components';
import { withPreferredColorScheme } from '@wordpress/compose';
import { __ } from '@wordpress/i18n';
import { audio, warning } from '@wordpress/icons';
import { PlainText } from '@wordpress/block-editor';

/**
 * Internal dependencies
 */
import styles from './styles.scss';

function Player( {
	getStylesFromColorScheme,
	source,
	isUploadInProgress,
	fileName,
	isUploadFailed,
	retryMessage,
} ) {
	const onPressListen = () => {
		if ( source ) {
			Linking.canOpenURL( source )
				.then( ( supported ) => {
					if ( ! supported ) {
						Alert.alert(
							__( 'Problem opening the audio' ),
							__( 'No application can handle this request.' )
						);
					} else {
						return Linking.openURL( source );
					}
				} )
				.catch( () => {
					Alert.alert(
						__( 'Problem opening the audio' ),
						__( 'An unknown error occurred. Please try again.' )
					);
				} );
		}
	};

	const containerStyle = getStylesFromColorScheme(
		styles.container,
		styles.containerDark
	);

	const iconStyle = getStylesFromColorScheme( styles.icon, styles.iconDark );

	const iconDisabledStyle = getStylesFromColorScheme(
		styles.iconDisabled,
		styles.iconDisabledDark
	);

	const isIconDisabled = isUploadFailed || isUploadInProgress;

	const dimmedIconStyle = isIconDisabled && iconDisabledStyle;

	const finalIconStyle = Object.assign( {}, iconStyle, dimmedIconStyle );

	const iconContainerStyle = getStylesFromColorScheme(
		styles.iconContainer,
		styles.iconContainerDark
	);

	const titleStyle = getStylesFromColorScheme(
		styles.title,
		styles.titleDark
	);

	const subtitleStyle = getStylesFromColorScheme(
		styles.subtitle,
		styles.subtitleDark
	);

	const uploadFailedStyle = getStylesFromColorScheme(
		styles.uploadFailed,
		styles.uploadFailedDark
	);

	let title = '';
	let extension = '';

	if ( fileName ) {
		const [ _title, _extension ] = fileName.split( '.' );
		title = _title;
		extension = _extension.toUpperCase();
	}

	return (
		<View style={ containerStyle }>
			<View style={ iconContainerStyle }>
				<Icon icon={ audio } style={ finalIconStyle } size={ 24 } />
			</View>
			<View style={ styles.titleContainer }>
				<Text style={ titleStyle }>{ title }</Text>
				<Text style={ subtitleStyle }>
					{ isUploadInProgress && __( 'Uploading…' ) }
					{ ! isUploadInProgress &&
						! isUploadFailed &&
						// translators: displays audio file extension. e.g. MP3 audio file
						extension + __( ' audio file' ) }
				</Text>
				{ isUploadFailed && (
					<View style={ styles.errorContainer }>
						<Icon icon={ warning } style={ uploadFailedStyle } />
						<PlainText
							editable={ false }
							value={ retryMessage }
							style={ uploadFailedStyle }
							multiline={ true }
						/>
					</View>
				) }
			</View>
			<TouchableWithoutFeedback
				accessibilityLabel={ __( 'Audio Player' ) }
				accessibilityRole={ 'button' }
				accessibilityHint={ __(
					'Double tap to listen the audio file'
				) }
				onPress={ onPressListen }
			>
				<Text style={ styles.buttonText }>{ __( 'Listen' ) }</Text>
			</TouchableWithoutFeedback>
		</View>
	);
}

export default withPreferredColorScheme( Player );
