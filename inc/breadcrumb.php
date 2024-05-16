<?php

function harry_breadcrumb()
{
    global $post;
    $breadcrumb_class = '';
    $breadcrumb_show = 1;

    if (is_front_page() && is_home()) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog xd', 'shofy'));
        $breadcrumb_class = 'home_front_page';
    } elseif (is_front_page()) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog sss', 'shofy'));
        $breadcrumb_show = 0;
    } elseif (is_home()) {
        if (get_option('page_for_posts')) {
            $title = get_the_title(get_option('page_for_posts'));
        }
    } elseif (is_single() && 'post' == get_post_type()) {
        $title = get_the_title();
    } elseif (is_single() && 'service' == get_post_type()) {
        $title = get_the_title();
    } elseif (is_single() && 'product' == get_post_type()) {
        $title = get_theme_mod('breadcrumb_product_details', __('Shop', 'shofy'));
    } elseif (is_search()) {
        $title = esc_html__('Search Results for : ', 'shofy') . get_search_query();
    } elseif (is_404()) {
        $title = esc_html__('Page not Found', 'shofy');
    } elseif (is_archive()) {
        $title = get_the_archive_title();
    } else {
        $title = get_the_title();
    }



    $breadcrumb_bg_img = get_theme_mod('harry_breadcrumb_bg');
    $breadcrumbSwitch = function_exists('get_field') ? get_field('breadcrumb') : null;

    ?>
<?php if(!empty($breadcrumbSwitch)): ?>
    <section class="breadcrumb__area pt-130 pb-115 breadcrumb__style-10 black-bg p-relative z-index-1">
        <div class="breadcrumb__bg-4 breadcrumb__bg-overlay m-img include-bg"
            data-background="<?php echo esc_url($breadcrumb_bg_img); ?>"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="breadcrumb__content text-center">
                        <h3 class="breadcrumb__title">
                            <?php echo esc_html($title); ?>
                        </h3>
                        <div class="breadcrumb__list">
                            <?php bcn_display(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif;?>



    <?php
}