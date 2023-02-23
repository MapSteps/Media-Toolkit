<?php
/**
 * Rename uploaded image field.
 *
 * @package MediaToolkit
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

/**
 * Output "rename uploaded image" field.
 *
 * @param array $settings The setting values.
 */
return function ( $settings ) {

	$rename_structure = isset( $settings['image_rename_format'] ) ? $settings['image_rename_format'] : '';
	?>

	<input
		type="text"
		id="mediatoolkit_settings--rename-uploaded-image"
		name="mediatoolkit_settings[image_rename_format]"
		class="regular-text"
		value="<?php echo esc_attr( $rename_structure ); ?>" placeholder=""
	/>

	<p class="description">
		<?php _e( 'You can use the template tags here.', 'media-toolkit' ); ?>
	</p>

	<?php
};
