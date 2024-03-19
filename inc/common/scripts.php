<?php
// ======== css js call 
function harry_add_theme_scripts()
{

	// css file 
	wp_enqueue_style( 'harry-fonts', harry_fonts_url(), array(), '1.0.0', 'all' );
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', [], 1.0, 'all');
	wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', [], 1.0, 'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', [], 1.0, 'all');
	wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css', [], 1.0, 'all');
	wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', [], 1.0, 'all');
	wp_enqueue_style('nouislider', get_template_directory_uri() . '/assets/css/nouislider.css', [], 1.0, 'all');
	wp_enqueue_style('backtotop', get_template_directory_uri() . '/assets/css/backtotop.css', [], 1.0, 'all');
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', [], 1.0, 'all');
	wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', [], 1.0, 'all');
	wp_enqueue_style('font-awesome-pro', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', [], 1.0, 'all');
	wp_enqueue_style('elegant-icon', get_template_directory_uri() . '/assets/css/elegant-icon.css', [], 1.0, 'all');
	wp_enqueue_style('hover-reveal', get_template_directory_uri() . '/assets/css/hover-reveal.css', [], 1.0, 'all');
	wp_enqueue_style('spacing', get_template_directory_uri() . '/assets/css/spacing.css', [], 1.0, 'all');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [], 1.0, 'all');

	wp_enqueue_style('style', get_stylesheet_uri());

	// js file 
	
	wp_enqueue_script('harry-js-waypoints', get_template_directory_uri() . '/assets/js/vendor/waypoints.js', ['jquery'], 1.0, true);
	wp_enqueue_script('harry-js-bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', [], 1.0, true);
	wp_enqueue_script('harry-js-meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', [], 1.0, true);
	wp_enqueue_script('harry-js-swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', [], 6.5, true);
	wp_enqueue_script('harry-js-slick', get_template_directory_uri() . '/assets/js/slick.js', [], 1.0, true);
	wp_enqueue_script('harry-js-nouislider', get_template_directory_uri() . '/assets/js/nouislider.js', [], 1.0, true);
	wp_enqueue_script('harry-js-magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', [], 1.0, true);
	wp_enqueue_script('harry-js-parallax', get_template_directory_uri() . '/assets/js/parallax.js', [], 1.0, true);
	wp_enqueue_script('harry-js-backtotop', get_template_directory_uri() . '/assets/js/backtotop.js', [], 1.0, true);
	wp_enqueue_script('harry-js-nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', [], 1.0, true);
	wp_enqueue_script('harry-js-purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', [], 1.0, true);
	wp_enqueue_script('harry-js-wow', get_template_directory_uri() . '/assets/js/wow.js', [], 1.0, true);
	wp_enqueue_script('harry-js-isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', [], 1.0, true);
	wp_enqueue_script('harry-js-imagesloaded-pkgd', get_template_directory_uri() . '/assets/js/imagesloaded-pkgd.js', [], 1.0, true);
	wp_enqueue_script('harry-js-charming', get_template_directory_uri() . '/assets/js/charming.js', [], 1.0, true);
	wp_enqueue_script('harry-js-hover-reveal', get_template_directory_uri() . '/assets/js/hover-reveal.js', [], 1.0, true);
	wp_enqueue_script('harry-js-tween-max', get_template_directory_uri() . '/assets/js/tween-max.js', [], 1.0, true);
	wp_enqueue_script('harry-js-ajax-form', get_template_directory_uri() . '/assets/js/ajax-form.js', [], 1.0, true);
	wp_enqueue_script('harry-js-main', get_template_directory_uri() . '/assets/js/main.js', [], 1.0, true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'harry_add_theme_scripts');



/*
Register Fonts
 */
function harry_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'harry' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?'. urlencode('family=Inter:wght@300;400;500;600;700;800&family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700;800&family=Rajdhani:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&family=Space+Grotesk:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap');
    }
    return $font_url;
}