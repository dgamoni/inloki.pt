<?php
add_action( 'wp_enqueue_scripts', 'inloki_scripts_method' ); 
function inloki_scripts_method() {


    wp_register_style('photoswipe_css', get_stylesheet_directory_uri() .'/css/photoswipe.css', array(),null, 'all');
    wp_enqueue_style('photoswipe_css');
    wp_register_style('default_skin_css', get_stylesheet_directory_uri() .'/css/default-skin/default-skin.css', array(),null, 'all');
    wp_enqueue_style('default_skin_css');

	wp_register_script('photoswipe_js', get_stylesheet_directory_uri() .'/css/photoswipe.min.js', array('jquery'), '', true);
	wp_enqueue_script('photoswipe_js');
	wp_register_script('photoswipe_default_js', get_stylesheet_directory_uri() .'/css/photoswipe-ui-default.min.js', array('jquery'), '', true);
	wp_enqueue_script('photoswipe_default_js');

	wp_register_script('custom_js', get_stylesheet_directory_uri() .'/js/custom.js', array('jquery'), '', true);
	wp_enqueue_script('custom_js');

	// for ie11
	// wp_register_script('grayscale_js', get_stylesheet_directory_uri() .'/js/grayscale.js', array('jquery'), '', true);
	// wp_enqueue_script('grayscale_js');
	// wp_register_script('functions_js', get_stylesheet_directory_uri() .'/js/functions.js', array('jquery'), '', true);
	// wp_enqueue_script('functions_js');

	//wp_localize_script( 'product_scripts', 'localize_var', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
} 