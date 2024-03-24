<?php

function harry_logo(){
    $haray_logo= get_theme_mod('hary_header_logo',get_template_directory_uri().'/assets/img/logo/logo-black.svg');
   ?>
           <a href="<?php echo esc_url(home_url('/'));?>">
               <img src="<?php echo esc_url($haray_logo);?>" style="max-width:120px" alt="<?php echo bloginfo();?>">
           </a>
           
           <?php
   }