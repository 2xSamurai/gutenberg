<?php
/**
 * Fonts API BC Layer helpers.
 *
 * BACKPORT NOTE: Do not backport this file to Core.
 * This file is now part of the API's Backwards-Compatibility (BC) layer.
 *
 * @package    Gutenberg
 * @subpackage Fonts API
 * @since      15.7.0
 */

/**
 * Class Gutenberg_Fonts_API_BC_Layer
 *
 * BACKPORT NOTE: Do not backport this file to Core.
 */
class Gutenberg_Fonts_API_BC_Layer {

	/**
	 * Determines if the given fonts array is the deprecated array structure.
	 *
	 * @param array $fonts Array of fonts to check.
	 * @return bool True when deprecated structure, else false.
	 */
	public static function is_deprecated_structure( array $fonts ) {
		// Checks the first key to determine if it's empty or non-string.
		foreach ( array_keys( $fonts ) as $font_family ) {
			return ! WP_Fonts_Utils::is_defined( $font_family );
		}
	}

	/**
	 * Migrates deprecated fonts structure into new API data structure,
	 * i.e. variations grouped by their font-family.
	 *
	 * @param array $fonts Array of fonts to migrate.
	 * @return array
	 */
	public static function migrate_deprecated_structure( array $fonts ) {
		if ( ! self::is_deprecated_structure( $fonts ) ) {
			return $fonts;
		}

		_deprecated_argument(
			__METHOD__,
			'14.9.1',
			'A deprecated fonts array structure passed to wp_register_fonts(). Variations must be grouped and keyed by their font family.'
		);

		$new_fonts = array();
		foreach ( $fonts as $font ) {
			$font_family = WP_Fonts_Utils::get_font_family_from_variation( $font );
			if ( ! $font_family ) {
				continue;
			}

			if ( ! isset( $new_fonts[ $font_family ] ) ) {
				$new_fonts[ $font_family ] = array();
			}

			$new_fonts[ $font_family ][] = $font;
		}

		return $new_fonts;
	}

	/**
	 * Handle the deprecated fonts structure.
	 *
	 * @param array  $font    Font for extracting font family.
	 * @param string $message Deprecation message to throw.
	 * @return string|null The font family slug if successfully registered. Else null.
	 */
	protected static function extract_font_family_from_deprecated_fonts_structure( array $font, $message ) {
		_deprecated_argument( __METHOD__, '14.9.1', $message );

		$font_family = WP_Fonts_Utils::get_font_family_from_variation( $font );
		if ( ! $font_family ) {
			return null;
		}

		return WP_Fonts_Utils::convert_font_family_into_handle( $font_family );
	}
}
