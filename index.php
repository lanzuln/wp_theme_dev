<?php get_header();
// $col= is_active_sidebar( 'blog-sidebar' ) ? 'col-xxl-8 col-lg-8' : 'col-xxl-12 col-lg-12';
// if ( true == get_theme_mod( 'sidebar_switch_setting', 'on' ) ) 
$sidebar_on_of = get_theme_mod( 'sidebar_switch_setting', 'on' );
$col = $sidebar_on_of == true  ? 'col-xxl-8 col-lg-8' : 'col-xxl-12 col-lg-12'

?>
<section class="postbox__area grey-bg-4 pt-120 pb-120">
   <div class="container">
      <div class="row">
         <div class="<?php echo esc_attr($col);?>">
            <div class="postbox__wrapper">
            <?php if ( have_posts() ) : ?>
                  <?php while ( have_posts() ) : the_post(); ?> 
                  <?php echo get_template_part('template-parts/content', get_post_format() )?>
               <?php endwhile; ?>
               <?php else:?>
                  <?php echo get_template_part('template-parts/content-none')?>
            <?php endif; ?>
            <div class="tp-pagination tp-pagination-style-2 mt-20">
               <?php harry_navigation(); ?>
            </div>

            </div>
         </div>
         <div class="col-xxl-4 col-lg-4">
            <div class="sidebar__wrapper pl-40">
               <div class="sidebar__widget mb-20">
                  <?php get_sidebar();?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

  
<?php get_footer();?>