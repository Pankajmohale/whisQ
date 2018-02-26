<?php
/* Enqueue onepage Js */
add_action( 'wp_enqueue_scripts', 'spa_enqueue_script' );
function spa_enqueue_script() {
	/* ======== Bootstrap ======== */
    wp_register_style( 'bootstrap_css', get_template_directory_uri() .'/css/bootstrap.min.css', array(), '21');
    wp_enqueue_style( 'bootstrap_css' );
    wp_register_style( 'bootstrap_theme_css', get_template_directory_uri() .'/css/bootstrap-theme.min.css', array(), '21');
    wp_enqueue_style( 'bootstrap_theme_css' );
    wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_script( 'bootstrap_js' );


	/* ======== SPA ======== */
    wp_register_style( 'spa_css', get_template_directory_uri() .'/js/jquery.fullpage.min.css', array(), '21');
    wp_enqueue_style( 'spa_css' );
    
    wp_register_script( 'spa_js', get_template_directory_uri() . '/js/jquery.fullpage.min.js', array(), '1.0.0', true);
    wp_enqueue_script( 'spa_js' );
    
    wp_register_script( 'spa_scrolloverflow', get_template_directory_uri() . '/js/scrolloverflow.min.js', array(), '1.0.0', true);
    wp_enqueue_script( 'spa_scrolloverflow' );

    wp_register_script( 'spa_js_easings', get_template_directory_uri() . '/js/jquery.easings.min.js', array(), '1.0.0', true);
    wp_enqueue_script( 'spa_js_easings' );
	
	/* ======== Custom Js ======== */
	wp_register_script( 'custom_js', get_template_directory_uri() . '/js/custom_js.js', array(), '1.0.0', true);
    wp_enqueue_script( 'custom_js' );
	
}