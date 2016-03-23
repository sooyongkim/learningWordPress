<?php
	function learningWordPress_css_import(){
		wp_enqueue_style('style', get_stylesheet_uri());
	}
add_action('wp_enqueue_scripts', 'learningWordPress_css_import');

//Register Menus
register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu')
));