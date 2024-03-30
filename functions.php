<?php

// ======== after setup theme 
function wpdocs_theme_setup()
{
	load_theme_textdomain('wpdocs_textdemain');

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	add_theme_support(
		'post-formats',
		array(
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat',
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
		)
	);
	register_nav_menus( array(
		'main_menu' => __( 'Primary Menu', 'text_domain' ),
		'side-menu' => __('Side Menu','harry'),
		'footer-menu' => __('Footer copyright Menu','harry'),
	) );

	
    remove_theme_support( 'widgets-block-editor' );


}
add_action('after_setup_theme', 'wpdocs_theme_setup');

// harry_widgets
function harry_widgets(){

    register_sidebar( array(
		'name'          => __( 'Footer Widget 01', 'harry' ),
		'id'            => 'footer-widget-01',
		'description'   => __( 'Widgets in this area will be shown footer', 'harry' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-1 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Widget 02', 'harry' ),
		'id'            => 'footer-widget-02',
		'description'   => __( 'Widgets in this area will be shown footer', 'harry' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-2 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Widget 03', 'harry' ),
		'id'            => 'footer-widget-03',
		'description'   => __( 'Widgets in this area will be shown footer', 'harry' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-3 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Widget 04', 'harry' ),
		'id'            => 'footer-widget-04',
		'description'   => __( 'Widgets in this area will be shown footer', 'harry' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-4 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'harry_widgets' );
	
include_once('inc/template_function.php');
include_once('inc/common/scripts.php');

if(class_exists('kirki')){
	include_once('inc/harry-kirki.php');
}

include_once('inc/nav-walker.php');

