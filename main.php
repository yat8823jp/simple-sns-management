<?php
/*
 * Plugin Name: Simple SNS Account Management
 * Plugin URI:
 * Description: A simple plugin that just manages your SNS account
 * Version: 1.1.8
 * Author: YAT
 * Author URI: //wp.yat-net.com
 * Text Domain: simple-sns-management
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */


// Action hook callback function
function ssam_menu () {
	add_options_page( 'SNS management', 'SNS', 'manage_options', __FILE__, 'ssam_regist' );
}
add_action('admin_menu', 'ssam_menu');

//Optional item registration
function ssam_register_sns_settings() {
	register_setting( 'sns', 'facebook' );
	register_setting( 'sns', 'X(twitter)' );
	register_setting( 'sns', 'instagram' );
	register_setting( 'sns', 'youtube' );
}
add_action( 'admin_init', 'ssam_register_sns_settings' );

// View the contents of the plugin page
function ssam_regist () {
?>
	<div class="wrap">
		<h2> <?php _e( 'SNS account management', 'simple-sns-management' ); ?></h2>
		<form method="post" action="options.php">
			<?php
				wp_nonce_field('update-options');
				settings_fields( 'sns' );
				do_settings_sections( 'sns' );
			?>
			<table class="form-table">
				<tr valign="top">
					<th scope="row"><label for="facebook">Facebook<br>
					<span style="color: #6e6e6e; font-size: 12px;">※ <?php _e( 'Please enter your Facebook ID.', 'ssam_register_sns_settings' ); ?> </span></label></th>
					<td>
						<input type="text" name="facebook" value="<?php echo esc_attr( get_option( 'facebook' ) ); ?>">
						<span style="color: #333;"><?php _e( 'example）https://www.facebook.com/**** : Part ****' ); ?></span>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="x_twitter">Twitter<br>
					<span style="color: #6e6e6e; font-size: 12px;">※ <?php _e( 'Please enter your X(Twitter) ID.', 'ssam_register_sns_settings' ); ?> </span></label></th>
					<td>
						<input type="text" name="x_twitter" value="<?php echo esc_attr( get_option( 'twitter' ) ); ?>">
						<span style="color: #333;"><?php _e( 'example）https://twitter.com/**** : Part ****' ); ?></span>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="instagram">Instagram<br>
					<span style="color: #6e6e6e; font-size: 12px;">※ <?php _e( 'Please enter your Instagram ID.', 'ssam_register_sns_settings' ); ?> </span></label></th>
					<td>
						<input type="text" name="instagram" value="<?php echo esc_attr( get_option( 'instagram' ) ); ?>">
						<span style="color: #333;"><?php _e( 'example）https://www.instagram.com/**** : Part ****' ); ?></span>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="youtube">YouTube<br>
					<span style="color: #6e6e6e; font-size: 12px;">※ <?php _e( 'Please enter your YouTube ID.', 'ssam_register_sns_settings' ); ?> </span></label></th>
					<td>
						<input type="text" name="youtube" value="<?php echo esc_attr( get_option( 'youtube' ) ); ?>">
						<span style="color: #333;"><?php _e( 'example）https://www.youtube.com/user/**** */ : Part ****' ); ?></span>
					</td>
				</tr>
			</table>
			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}

function ssam_uninstall_hook_sns () {
	delete_option( 'facebook' );
	delete_option( 'twitter' );
	delete_option( 'instagram' );
	delete_option( 'youtube' );
}
//Hook when uninstalling
if ( function_exists( 'ssam_register_uninstall_hook' ) ) {
	register_uninstall_hook( __FILE__, 'ssam_uninstall_hook_sns' );
}

//Output
function ssam_account_arrangement () {
	return array( get_option( 'facebook' ),get_option( 'twitter' ), get_option( 'instagram' ), get_option( 'youtube' ) );
}
add_action( 'admin_footer', 'ssam_account' );

//Output
function ssam_account () {
	return array( 'facebook' => get_option( 'facebook' ), 'twitter' => get_option( 'twitter' ), 'instagram' => get_option( 'instagram' ), 'youtube' => get_option( 'youtube' ) );
}
add_action( 'admin_footer', 'ssam_account' );

//Output
function ssam_url () {
	if( get_option( 'facebook' ) ) {
		$facebook  = '//www.facebook.com/' . get_option( 'facebook' );
	} else {
		$facebook = get_option( 'facebook' );
	}
	if( get_option( 'twitter' ) ) {
		$twitter  = '//twitter.com/' . get_option( 'twitter' );
	} else {
		$twitter = get_option( 'twitter' );
	}
	if( get_option( 'instagram' ) ) {
		$instagram = '//www.instagram.com/' . get_option( 'instagram' );
	} else {
		$instagram = get_option( 'instagram' );
	}
	if( get_option( 'youtube' ) ) {
		$youtube   = '//www.youtube.com/user/' . get_option( 'youtube' );
	} else {
		$youtube = get_option( 'youtube' );
	}

	return array( 'facebook' => $facebook, 'twitter' => $twitter, 'instagram' => $instagram, 'youtube' => $youtube );
}
add_action( 'admin_footer', 'ssam_url' );
