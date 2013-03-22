<?php
/**
 * Define Theme Metaboxes
 * 
 * Using the WPAlchemy Metabox Class create meta boxes for this theme to manage
 * complex templates.
 */

// Simple demo
$simple_metabox = new WPAlchemy_MetaBox( array(
	'id' => '_simple_meta',
	'title' => 'Simple Meta Box',
	'template' => get_stylesheet_directory() . '/metabox/simple.php',
	'exclude_template' => 'page-biographies.php'
) );

// Full spec demo
$full_media_access = new WPAlchemy_MediaAccess();
$full_metabox = new WPAlchemy_MetaBox( array(
	'id' => '_full_meta',
	'title' => 'Full Spec Box',
	'exclude_template' => 'page-biographies.php',
	'template' => get_stylesheet_directory() . '/metabox/full-spec.php'
) );

// Team biographies
$biographies_media_access = new WPAlchemy_MediaAccess();
$biographies_metabox = new WPAlchemy_MetaBox( array(
	'id' => '_biographies_meta',
	'title' => 'Biographies',
	'include_template' => 'page-biographies.php',
	'template' => get_stylesheet_directory() . '/metabox/biographies.php'
) );

/**
 * Admin JS
 */
function _roots_load_wp_admin_scripts() {
	wp_enqueue_script(
		'roots-admin',
		get_stylesheet_directory_uri() . '/assets/js/admin.js',
		array( 'jquery' )
	);
}
add_action( 'admin_enqueue_scripts', '_roots_load_wp_admin_scripts' );
