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


}
add_action('after_setup_theme', 'wpdocs_theme_setup');



function harry_header(){
	get_template_part( 'template-parts/header/header-1' );
}

include_once('inc/common/scripts.php');
include_once('inc/harry-kirki.php');

