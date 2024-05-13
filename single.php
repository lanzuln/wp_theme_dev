<?php

get_header();

?>


<section class="postbox__area grey-bg-4 pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="postbox__wrappers">
                    <div class="postbox__mains">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="postbox__main-wrapper">
                                    <?php if (have_posts()): ?>
                                        <?php while (have_posts()):
                                            the_post(); ?>
                                            <?php echo get_template_part('template-parts/content', get_post_format());
                                            $prev_post = get_previous_post();
                                            $next_post = get_next_post();
                                            ?>

                                            <?php if (!empty($prev_post) && !empty($next_post)): ?>
                                                <div
                                                    class="postbox__more-navigation white-bg d-none d-md-flex justify-content-between flex-wrap mb-40">
                                                    <div class="postbox__more-left d-flex align-items-center">
                                                        <div class="postbox__more-icon">
                                                            <a href="<?php echo get_the_permalink($prev_post); ?>">
                                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M7 12.9718L2.06061 8.04401C1.47727 7.46205 1.47727 6.50975 2.06061 5.92778L7 1"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="postbox__more-content">
                                                            <p>Previous Article</p>
                                                            <h4>
                                                                <a
                                                                    href="<?php echo get_the_permalink($prev_post); ?>"><?php echo get_the_title($prev_post); ?></a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="postbox__more-right d-flex align-items-center">
                                                        <div class="postbox__more-content">
                                                            <p>Next Article</p>
                                                            <h4>
                                                                <a
                                                                    href="<?php echo get_the_permalink($next_post); ?>"><?php echo get_the_title($next_post); ?></a>
                                                            </h4>
                                                        </div>
                                                        <div class="postbox__more-icon">
                                                            <a href="<?php echo get_the_permalink($next_post); ?>">
                                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M1 12.9718L5.93939 8.04401C6.52273 7.46205 6.52273 6.50975 5.93939 5.92778L1 1"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php echo get_template_part('template-parts/biography') ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                    <div class="postbox__related mb-65">
                                        <h3 class="postbox__related-title">You may also like</h3>

                                        <div class="row">
                                            <?php
                                            // Get the current post ID
                                            $current_post_id = get_the_ID();

                                            // Get the categories of the current post
                                            $categories = get_the_category($current_post_id);


                                            // If the post has categories, get related posts based on the first category
                                            if ($categories):
                                                // $category_id = $categories[0]->term_id;
                                            
                                                $related_cat = [];
                                                foreach ($categories as $category) {
                                                    $related_cat[] = $category->term_id;
                                                }

                                                // Define custom query parameters
                                                $args = array(
                                                    'post_type' => 'post', // Adjust post type if needed
                                                    'posts_per_page' => 2, // Number of related posts to display
                                                    'post__not_in' => array($current_post_id), // Exclude the current post
                                                    'category__in' => $related_cat, // Include posts from the current post's category
                                                    'orderby' => 'rand', // Order by random; you can adjust this based on your preference
                                                );



                                                $related_posts_query = new WP_Query($args);

                                                if ($related_posts_query->have_posts()):
                                                    while ($related_posts_query->have_posts()):
                                                        $related_posts_query->the_post();

                                                        $author_id = get_the_author_meta('ID');
                                                        // Get the author's avatar
                                                        $author_avatar = 25;
                                                        $categories = get_the_category();

                                                        ?>
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="blog__grid-item">
                                                                <div class="blog__item-10 white-bg transition-3 mb-30 fix">
                                                                    <div class="blog__thumb-10 w-img fix">
                                                                        <a href="<?php the_permalink(); ?>">
                                                                            <?php
                                                                            $format_url = function_exists('get_field') ? get_field('post_format_url') : null;
                                                                            $format_gallery = function_exists('get_field') ? get_field('post_gallery_images') : null;
                                                                            if (has_post_format('audio')): ?>
                                                                                <div
                                                                                    class="postbox__thumb postbox__audio w-img p-relative mb-30">
                                                                                    <?php echo wp_oembed_get($format_url); ?>
                                                                                </div>
                                                                            <?php elseif (has_post_format('quote')): ?>
                                                                                <div class="blog__grid-quote-icon">
                                                                                    <span>
                                                                                        <svg width="24" height="20" viewBox="0 0 24 20"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                d="M18.1161 0C19.2516 0 20.1806 0.232258 20.9032 0.696775C21.6258 1.16129 22.2194 1.75484 22.6839 2.47742C23.2516 3.30323 23.6129 4.20646 23.7677 5.1871C23.9226 6.16775 24 6.96775 24 7.5871C24 10.1161 23.3548 12.4129 22.0645 14.4774C20.7742 16.5419 18.7613 18.2194 16.0258 19.5097L15.329 18.1161C16.929 17.4452 18.2968 16.3871 19.4323 14.9419C20.6194 13.4968 21.2129 12.0258 21.2129 10.529C21.2129 9.90968 21.1355 9.36774 20.9806 8.90323C20.1548 9.5742 19.2 9.90968 18.1161 9.90968C16.7742 9.90968 15.6129 9.47097 14.6323 8.59355C13.6516 7.71613 13.1613 6.50323 13.1613 4.95484C13.1613 3.50968 13.6516 2.32258 14.6323 1.39355C15.6129 0.464517 16.7742 0 18.1161 0ZM4.95484 0C6.09032 0 7.01936 0.232258 7.74194 0.696775C8.46452 1.16129 9.05807 1.75484 9.52258 2.47742C10.0903 3.30323 10.4516 4.20646 10.6065 5.1871C10.7613 6.16775 10.8387 6.96775 10.8387 7.5871C10.8387 10.1161 10.1935 12.4129 8.90323 14.4774C7.6129 16.5419 5.6 18.2194 2.86452 19.5097L2.16774 18.1161C3.76774 17.4452 5.13548 16.3871 6.27097 14.9419C7.45806 13.4968 8.05161 12.0258 8.05161 10.529C8.05161 9.90968 7.97419 9.36774 7.81936 8.90323C6.99355 9.5742 6.03871 9.90968 4.95484 9.90968C3.6129 9.90968 2.45161 9.47097 1.47097 8.59355C0.490323 7.71613 0 6.50323 0 4.95484C0 3.50968 0.490323 2.32258 1.47097 1.39355C2.45161 0.464517 3.6129 0 4.95484 0Z"
                                                                                                fill="currentColor" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </div>
                                                                            <?php else: ?>
                                                                                <?php the_post_thumbnail(); ?>
                                                                            <?php endif; ?>
                                                                        </a>
                                                                        <?php if (!empty($categories)): ?>
                                                                            <div class="blog__tag-10">
                                                                                <a
                                                                                    href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>"><?php echo esc_html($categories[0]->name); ?></a>
                                                                            </div>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <div class="blog__content-10">
                                                                        <div class="blog__content-10-top">
                                                                            <div
                                                                                class="blog__meta-10-wrapper d-flex align-items-center">
                                                                                <div class="blog__meta-10 has-date">
                                                                                    <span>
                                                                                        <svg width="15" height="15"
                                                                                            viewBox="0 0 15 15" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                            <path
                                                                                                d="M7.5 3.59961V7.49961L10.1 8.79961"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                        </svg> <?php echo get_the_date(); ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <h3 class="blog__title-10">
                                                                                <a
                                                                                    href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                                            </h3>

                                                                            <p><?php echo wp_trim_words(get_the_content(), 9, '...'); ?>
                                                                            </p>
                                                                        </div>
                                                                        <div
                                                                            class="blog__content-10-bottom d-flex align-items-center justify-content-between">
                                                                            <div
                                                                                class="blog__meta-author-10 d-flex align-items-center">
                                                                                <div class="blog__meta-author-thumb-10">
                                                                                    <a
                                                                                        href="<?php echo esc_url(get_author_posts_url($author_id)); ?>">
                                                                                        <?php echo get_avatar(get_the_author_meta('user_email'), $author_avatar, '', '', ['class' => 'media-object img-circle']); ?>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="blog__meta-author-content-10">
                                                                                    <span>By<a
                                                                                            href="<?php echo esc_url(get_author_posts_url($author_id)); ?>">
                                                                                            <?php echo get_the_author(); ?></a></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="blog__meta-10 blog-meta-10-2">
                                                                                <span>
                                                                                    <svg width="14" height="14" viewBox="0 0 14 14"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M12.9718 6.66668C12.9741 7.54659 12.769 8.4146 12.3732 9.20001C11.9039 10.1412 11.1825 10.9328 10.2897 11.4862C9.39697 12.0396 8.36813 12.3329 7.31844 12.3333C6.4406 12.3356 5.57463 12.13 4.79106 11.7333L1 13L2.26369 9.20001C1.86791 8.4146 1.66281 7.54659 1.6651 6.66668C1.66551 5.61452 1.95815 4.58325 2.51025 3.68838C3.06236 2.79352 3.85211 2.0704 4.79106 1.60002C5.57463 1.20331 6.4406 0.997725 7.31844 1.00002H7.65099C9.03729 1.07668 10.3467 1.66319 11.3284 2.64726C12.3102 3.63132 12.8953 4.94378 12.9718 6.33334V6.66668Z"
                                                                                            stroke="currentColor" stroke-width="1.5"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                    </svg><?php echo get_comments_number(); ?>
                                                                                </span>
                                                                                <span>
                                                                                    <svg width="17" height="14" viewBox="0 0 17 14"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M11.0443 7.00397C11.0443 8.43962 9.88694 9.59974 8.45466 9.59974C7.02238 9.59974 5.86499 8.43962 5.86499 7.00397C5.86499 5.56832 7.02238 4.4082 8.45466 4.4082C9.88694 4.4082 11.0443 5.56832 11.0443 7.00397Z"
                                                                                            stroke="currentColor" stroke-width="1.5"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path
                                                                                            d="M8.45466 13C11.0082 13 13.3881 11.4918 15.0446 8.88157C15.6956 7.85921 15.6956 6.14078 15.0446 5.11843C13.3881 2.50816 11.0082 1 8.45466 1C5.90115 1 3.52126 2.50816 1.86474 5.11843C1.21371 6.14078 1.21371 7.85921 1.86474 8.88157C3.52126 11.4918 5.90115 13 8.45466 13Z"
                                                                                            stroke="currentColor" stroke-width="1.5"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                    </svg><?php display_post_views(); ?>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php if (have_posts()): ?>
                                        <?php while (have_posts()):
                                            the_post(); ?>

                                            <?php if (comments_open() || get_comments_number()):
                                                comments_template();
                                            endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="sidebar__wrapper pl-40">
                                    <div class="sidebar__widget mb-20">
                                        <div class="sidebar__widget-content">
                                            <div class="sidebar__search">
                                                <form action="#">
                                                    <div class="sidebar__search-input">
                                                        <input type="text" placeholder="Enter your keywords...">
                                                        <button type="submit">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M19.0002 19.0002L17.2002 17.2002"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar__widget mb-45">
                                        <div class="sidebar__widget-content">
                                            <div class="sidebar__author">
                                                <div class="sidebar__author-thumb">
                                                    <img src="assets/img/blog/sidebar/sidebar-author.jpg" alt="">
                                                </div>
                                                <div class="sidebar__author-content">
                                                    <h3 class="sidebar__author-title">Colene Landin</h3>
                                                    <p>Lorem ipsum dolor ametare elit consectetur adipiscing Aenean
                                                        pellentesque.</p>

                                                    <div
                                                        class="sidebar__author-social d-flex align-items-center justify-content-center">
                                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar__widget mb-45">
                                        <h3 class="sidebar__widget-title">Category</h3>
                                        <div class="sidebar__widget-content">
                                            <ul>
                                                <li><a href="blog.html">Business <span>10</span></a></li>
                                                <li><a href="blog.html">Cleaning <span>08</span></a></li>
                                                <li><a href="blog.html">Consultant <span>24</span></a></li>
                                                <li><a href="blog.html">Creative <span>37</span></a></li>
                                                <li><a href="blog.html">Technology <span>103</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sidebar__widget mb-45">
                                        <h3 class="sidebar__widget-title">Recent Post</h3>
                                        <div class="sidebar__widget-content">
                                            <div class="sidebar__post">
                                                <div class="rc__post d-flex align-items-center">
                                                    <div class="rc__post-thumb">
                                                        <a href="blog-details.html"><img
                                                                src="assets/img/blog/sidebar/blog-sm-1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="rc__post-content">
                                                        <h3 class="rc__post-title">
                                                            <a href="blog-details.html">Business meeting 2021 in San
                                                                Francisco</a>
                                                        </h3>
                                                        <div class="rc__meta">
                                                            <span>
                                                                <svg width="15" height="15" viewBox="0 0 15 15"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M7.5 3.59961V7.49961L10.1 8.79961"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>July 21, 2022
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rc__post d-flex align-items-center">
                                                    <div class="rc__post-thumb">
                                                        <a href="blog-details.html"><img
                                                                src="assets/img/blog/sidebar/blog-sm-2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="rc__post-content">
                                                        <h3 class="rc__post-title">
                                                            <a href="blog-details.html">Developing privacy user-centric
                                                                apps</a>
                                                        </h3>
                                                        <div class="rc__meta">
                                                            <span>
                                                                <svg width="15" height="15" viewBox="0 0 15 15"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M7.5 3.59961V7.49961L10.1 8.79961"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>July 21, 2022
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rc__post d-flex align-items-center">
                                                    <div class="rc__post-thumb">
                                                        <a href="blog-details.html"><img
                                                                src="assets/img/blog/sidebar/blog-sm-3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="rc__post-content">
                                                        <h3 class="rc__post-title">
                                                            <a href="blog-details.html">Starting and Growing Web Design
                                                                in 2022</a>
                                                        </h3>
                                                        <div class="rc__meta">
                                                            <span>
                                                                <svg width="15" height="15" viewBox="0 0 15 15"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M7.5 3.59961V7.49961L10.1 8.79961"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>July 21, 2022
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar__widget mb-40">
                                        <h3 class="sidebar__widget-title">Tags</h3>
                                        <div class="sidebar__widget-content">
                                            <div class="tagcloud">
                                                <a href="#">Techology</a>
                                                <a href="#">Food</a>
                                                <a href="#">Personality</a>
                                                <a href="#">Life Style</a>
                                                <a href="#">Travel</a>
                                                <a href="#">Nature</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php

get_footer();