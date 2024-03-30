<?php 
   $harry_side_email = get_theme_mod('harry_side_email',__('info@example.com','harry'));
   $harry_side_phone = get_theme_mod('harry_side_phone',__('+964 742 44 763','harry'));
   $harry_side_button = get_theme_mod('harry_side_button',__('Getting Started','harry'));
   $harry_side_button_url = get_theme_mod('harry_side_button_url',__('#','harry'));

   $harry_side_shape_switch = get_theme_mod('harry_side_shape_switch', true);
   $harry_side_menu_switch = get_theme_mod('harry_side_menu_switch', true);
   $harry_side_social_switch = get_theme_mod('harry_side_social_switch', true);
   $harry_side_logo_switch = get_theme_mod('harry_side_logo_switch', true);



?>


<!-- offcanvas area start -->
<div class="offcanvas__area offcanvas__area-1">
    <div class="offcanvas__wrapper">
    <?php if($harry_side_shape_switch) : ?>    
    <div class="offcanvas__shape">
        <img class="offcanvas__shape-1" src="<?php echo get_template_directory_uri();?>/assets/img/shape/offcanvas-shape-1.png" alt="">
    </div>
    <?php endif; ?>    

    <div class="offcanvas__close">
        <button class="offcanvas__close-btn offcanvas-close-btn">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
    <div class="offcanvas__content">
        <?php if(!empty($harry_side_logo_switch)) : ?>
        <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
            <div class="offcanvas__logo logo">
                <?php harry_side_logo(); ?>
            </div>
        </div>
        <?php endif; ?>    

        <div class="mobile-menu fix d-lg-none"></div>
        <?php if(!empty($harry_side_menu_switch)) : ?>    
        <div class="offcanvas__menu offcanvas__menu-ff-space d-none d-lg-block">
            <nav>
                <?php harry_side_menu(); ?>
            </nav>
        </div>
        <?php endif; ?>    

        <?php if(!empty($harry_side_button)) : ?>
        <div class="offcanvas__btn">
            <a href="<?php echo esc_html($harry_side_button_url); ?>" class="tp-btn-offcanvas"><?php echo esc_html($harry_side_button); ?> <i class="fa-regular fa-chevron-right"></i></a>
        </div>
        <?php endif; ?>

        <?php if($harry_side_social_switch) : ?>   
        <div class="offcanvas__social">
            <h3 class="offcanvas__social-title"><?php echo esc_html__('Follow :','harry'); ?></h3>

            <?php harry_social(); ?>

        </div>
        <?php endif; ?>

        <div class="offcanvas__contact">
            <?php if(!empty($harry_side_phone)) : ?>
            <p class="offcanvas__contact-call"><a href="tel:<?php echo esc_url($harry_side_phone); ?>"><?php echo esc_html($harry_side_phone); ?></a></p>
            <?php endif; ?>

            <?php if(!empty($harry_side_email)) : ?>
            <p class="offcanvas__contact-mail"><a href="mailto:<?php echo esc_url($harry_side_email); ?>"><?php echo esc_html($harry_side_email); ?></a></p>
            <?php endif; ?>
        </div>
    </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- offcanvas area end -->