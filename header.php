<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <?php if (is_singular() && pings_open(get_queried_object())): ?>
    <?php endif; ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Harry - Creative Agency & Portfoilo Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <!-- // <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>assets/img/logo/favicon.png"> -->

    <!-- CSS here -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

    <!-- pre loader area start -->
    <?php get_template_part('template-parts/header/preloader') ?>
    <!-- pre loader area end -->
    
    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <!-- back to top end -->
    <?php harry_header(); ?>