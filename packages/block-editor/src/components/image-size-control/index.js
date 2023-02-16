/**
 * WordPress dependencies
 */
import {
	Button,
	ButtonGroup,
	SelectControl,
	__experimentalNumberControl as NumberControl,
	__experimentalHStack as HStack,
} from '@wordpress/components';
import { __ } from '@wordpress/i18n';

/**
 * Internal dependencies
 */
import useDimensionHandler from './use-dimension-handler';

const IMAGE_SIZE_PRESETS = [ 25, 50, 75, 100 ];
const noop = () => {};

export default function ImageSizeControl( {
	imageSizeHelp,
	imageWidth,
	imageHeight,
	imageSizeOptions = [],
	isResizable = true,
	slug,
	width,
	height,
	onChange,
	onChangeImage = noop,
} ) {
	const { currentHeight, currentWidth, updateDimension, updateDimensions } =
		useDimensionHandler( height, width, imageHeight, imageWidth, onChange );

	return (
		<>
			{ imageSizeOptions && imageSizeOptions.length > 0 && (
				<SelectControl
					__nextHasNoMarginBottom
					label={ __( 'Image size' ) }
					value={ slug }
					options={ imageSizeOptions }
					onChange={ onChangeImage }
					help={ imageSizeHelp }
				/>
			) }
			{ isResizable && (
				<div className="block-editor-image-size-control">
					<p>{ __( 'Image dimensions' ) }</p>

					<HStack align="baseline" spacing="3">
						<NumberControl
							className="block-editor-image-size-control__width"
							label={ __( 'Width' ) }
							value={ currentWidth }
							min={ 1 }
							onChange={ ( value ) =>
								updateDimension( 'width', value )
							}
						/>
						<NumberControl
							className="block-editor-image-size-control__height"
							label={ __( 'Height' ) }
							value={ currentHeight }
							min={ 1 }
							onChange={ ( value ) =>
								updateDimension( 'height', value )
							}
						/>
					</HStack>
					<HStack>
						<ButtonGroup aria-label={ __( 'Image size presets' ) }>
							{ IMAGE_SIZE_PRESETS.map( ( scale ) => {
								const scaledWidth = Math.round(
									imageWidth * ( scale / 100 )
								);
								const scaledHeight = Math.round(
									imageHeight * ( scale / 100 )
								);

								const isCurrent =
									currentWidth === scaledWidth &&
									currentHeight === scaledHeight;

								return (
									<Button
										key={ scale }
										isSmall
										variant={
											isCurrent ? 'primary' : undefined
										}
										isPressed={ isCurrent }
										onClick={ () =>
											updateDimensions(
												scaledHeight,
												scaledWidth
											)
										}
									>
										{ scale }%
									</Button>
								);
							} ) }
						</ButtonGroup>
						<Button isSmall onClick={ () => updateDimensions() }>
							{ __( 'Reset' ) }
						</Button>
					</HStack>
				</div>
			) }
		</>
	);
}
