<?php  
	if (function_exists('register_sidebar')) 
	register_sidebar();
	register_nav_menus( array(
  		'primary' => __( 'Menu 1', 'Dreams Consulting' ),
 	) );

	// Soporte imagenes destacadas (featured images)
	add_theme_support( 'post-thumbnails' );