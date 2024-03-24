<?php

function harry_logo(){
    $haray_logo= get_theme_mod('hary_header_logo',get_template_directory_uri().'/assets/img/logo/logo-black.svg');
   ?>
           <a href="<?php echo esc_url(home_url('/'));?>">
               <img src="<?php echo esc_url($haray_logo);?>" style="max-width:120px" alt="<?php echo bloginfo();?>">
           </a>
           
           <?php
   }

   function harry_search_logo(){
    $haray_search_logo= get_theme_mod('search_logo',get_template_directory_uri().'/assets/img/logo/logo.svg');
   ?>
           <a href="<?php echo esc_url(home_url('/'));?>">
               <img src="<?php echo esc_url($haray_search_logo);?>" style="max-width:120px" alt="<?php echo bloginfo();?>">
           </a>
           
           <?php
   }


// harry_menu
function harry_menu(){
    wp_nav_menu( 
        array( 
            'theme_location'  => 'main_menu',
            'menu_class'      => 'main_menu',
            'menu_id'         => 'main_menu',
            'fallback_cb'     => 'Harry_Walker_Nav_Menu::fallback',
            'walker'     => new Harry_Walker_Nav_Menu,
        ) 
    ); 
}
