/**
 * WordPress dependencies
 */
import { useMemo } from '@wordpress/element';

/**
 * Internal dependencies
 */
import { useContextSystem } from '../../ui/context';
import { cx } from '../../utils';

/**
 * @param {import('../../ui/context').PolymorphicComponentProps<import('../../divider').DividerProps, 'hr', false>} props
 */
export function useCardDivider( props ) {
	const { className, ...otherProps } = useContextSystem(
		props,
		'CardDivider'
	);

	const classes = useMemo(
		() =>
			cx(
				// This classname is added for legacy compatibility reasons.
				'components-card__divider',
				className
			),
		[ className ]
	);

	return {
		...otherProps,
		className: classes,
	};
}
