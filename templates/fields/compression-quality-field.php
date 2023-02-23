<?php
/**
 * Compression quality field.
 *
 * @package MediaToolkit
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

/**
 * Output "compression quality" field.
 *
 * @param array $settings The setting values.
 */
return function ( $settings ) {

	$quality = isset( $settings['compression_quality'] ) ? $settings['compression_quality'] : '';
	?>

	<input
		type="number"
		id="mediatoolkit_settings--compression-quality"
		name="mediatoolkit_settings[compression_quality]"
		class="mediatk-size-field"
		value="<?php echo esc_attr( $quality ); ?>" placeholder="83"
	/>

	<?php
};
