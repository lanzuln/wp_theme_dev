<?php 

    $format_url = function_exists('get_field') ? get_field('post_format_url') : null;

?>


<article id="post-<?php the_id(); ?>" <?php post_class('tp-format-audio postbox__item mb-50 transition-3'); ?>>
    
    <div class="postbox__thumb postbox__audio w-img p-relative">
        <?php echo wp_oembed_get($format_url); ?>
    </div>

    <div class="postbox__content">
        <!-- blog meta  -->
        <?php echo get_template_part('template-parts/blog/post-meta'); ?>

        <h3 class="postbox__title">
        <a href="<?php the_permalink( ); ?>"><?php the_title(); ?></a>
        </h3>
        <div class="postbox__text">
        <?php the_excerpt(); ?>
        </div>
        <div class="postbox__read-more">
            <a href="<?php the_permalink( ); ?>" class="tp-btn">read more</a>                               
        </div>
    </div>
</article>