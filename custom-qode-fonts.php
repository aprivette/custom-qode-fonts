<?php
/*
Plugin Name: Custom Qode Fonts
Version: 1.0
Description: Enables users of Qode themes to install custom fonts and make them accessible from theme settings.
Author: Adam Privette
Author URI: http://ironistic.com
*/

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

function cqf_warning() {
	echo "<div class='notice notice-error'><p>Warning: The plugin Custom Qode Fonts requires <a href='https://wordpress.org/plugins/advanced-custom-fields/' target='blank'>Advanced Custom Fields</a> and ACF Options Page or ACF Pro.</p></div>";
}

function cqf_add_custom_fonts_css() {
	wp_register_style( 'childfonts', '/wp-content/plugins/custom-qode-fonts/style.php'  );
	wp_enqueue_style( 'childfonts' );
}

function cqf_add_custom_fonts($fonts) {
	
	if (get_field('fonts', 'option')) {
		
		$font_data = get_field('fonts', 'option');
	
		foreach($font_data as $key => $value) :
			$custom_fonts[] = $value['name'];
		endforeach;
		
		if (is_array($fonts) && count($custom_fonts)) :
			$fonts = array_merge($fonts, $custom_fonts);
		endif;
		
	}
	
	return $fonts;

}

function cqf_custom_font_load_classes() {
	if (is_plugin_active('advanced-custom-fields-pro/acf.php') || is_plugin_active('acf-options-page/acf-options-page.php') && is_plugin_active('acf-repeater/acf-repeater.php') && is_plugin_active('advanced-custom-fields/acf.php')) {
		include(plugin_dir_path(__FILE__).'acf.php');
		add_action( 'wp_enqueue_scripts', 'cqf_add_custom_fonts_css', 11);
		add_filter('qode_native_fonts_list', 'cqf_add_custom_fonts');
	} else {
		add_action( 'admin_notices', 'cqf_warning' );
	}
}
add_action('plugins_loaded', 'cqf_custom_font_load_classes');

?>