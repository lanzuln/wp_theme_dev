     
<?php 
   $header_top_email = get_theme_mod('email','info@example.com');
   $header_top_phone = get_theme_mod('phone','+964 742 44 763');
   $header_top_timing = get_theme_mod('timing','Sunday-Thures 10am-07pm');
?>


<!-- header area start -->
<header>
   <div class="header__area">
      <div class="header__bottom-9 header__sticky" id="header-sticky">
         <div class="container">
            <div class="mega-menu-wrapper p-relative">
               <div class="row align-items-center">
                  <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-4 col-sm-5 col-8">
                     <div class="logo">
                        <?php harry_logo(); ?>
                     </div>
                  </div>
                  <div class="col-xxl-7 col-xl-7 col-lg-8 d-none d-lg-block">
                     <div class="main-menu main-menu-9 main-menu-ff-space">
                        <nav id="mobile-menu">
                           <?php harry_menu(); ?>
                        </nav>
                        <!-- for wp -->
                        <div class="header__hamburger ml-50 d-none">
                           <button type="button" class="hamburger-btn offcanvas-open-btn">
                              <span></span>
                              <span></span>
                              <span></span>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-8 col-sm-7 col-4">
                     <div class="header__bottom-right-8 d-flex justify-content-end align-items-center">
                        <div class="header__hamburger ml-50">
                           <button type="button"  class="hamburger-btn-8 hamburger-btn-8-black offcanvas-open-btn">Menu</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- header area end -->

      <!-- offcanvas area start -->
      <?php get_template_part('template-parts/header/off-canvas-menu') ?>
      <!-- offcanvas area end -->

