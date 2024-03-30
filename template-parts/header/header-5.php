<!-- header area start -->
<header>
   <div class="header__area header__transparent">
      <div class="header__bottom-13 header__padding-7 header__black-3 header__bottom-border-4 grey-bg-17 header__sticky"
         id="header-sticky">
         <div class="container-fluid">
            <div class="mega-menu-wrapper p-relative">
               <div class="row align-items-center">
                  <div class="col-xxl-1 col-xl-2 col-lg-4 col-md-4 col-sm-5 col-8">
                     <div class="logo">
                        <?php harry_logo(); ?>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-7 d-none d-xl-block">
                     <div class="main-menu main-menu-13 pl-45 main-menu-ff-space">
                        <nav id="mobile-menu-3">
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
                  <div class="col-xxl-5 col-xl-3 col-lg-8 col-md-8 col-sm-7 col-4">
                     <div class="header__bottom-right-13 d-flex justify-content-end align-items-center pl-30">
                        <div class="header__search-13">
                           <form action="/" method="get">
                              <div class="header__search-input-13 d-none d-xxl-block">
                                 <input type="text" name="s" value="<?php the_search_query(); ?>"
                                    placeholder="<?php echo esc_attr__('Search for products...', 'harry'); ?> ">
                                 <button type="submit">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.12492 15.2498C12.0599 15.2498 15.2498 12.0599 15.2498 8.12492C15.2498 4.18994 12.0599 1 8.12492 1C4.18994 1 1 4.18994 1 8.12492C1 12.0599 4.18994 15.2498 8.12492 15.2498Z"
                                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path d="M15.9999 16L14.4999 14.5" stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </button>
                              </div>
                           </form>
                        </div>
                        <div class="header__action-13 d-none d-md-block">
                           <ul>
                              <li class="d-xxl-none">
                                 <a href="javascript:void(0);" class="search-open-btn">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.12492 15.2498C12.0599 15.2498 15.2498 12.0599 15.2498 8.12492C15.2498 4.18994 12.0599 1 8.12492 1C4.18994 1 1 4.18994 1 8.12492C1 12.0599 4.18994 15.2498 8.12492 15.2498Z"
                                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path d="M15.9999 16L14.4999 14.5" stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </a>
                              </li>
                              <li>
                                 <a href="login.html">
                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M17.0001 19V17C17.0001 15.9391 16.5787 14.9217 15.8285 14.1716C15.0784 13.4214 14.061 13 13.0001 13H5.00012C3.93926 13 2.92184 13.4214 2.17169 14.1716C1.42155 14.9217 1.00012 15.9391 1.00012 17V19"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path
                                          d="M9.00012 9C11.2093 9 13.0001 7.20914 13.0001 5C13.0001 2.79086 11.2093 1 9.00012 1C6.79098 1 5.00012 2.79086 5.00012 5C5.00012 7.20914 6.79098 9 9.00012 9Z"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>
                                 </a>
                              </li>
                              <li>
                                 <a href="wishlist.html">
                                    <svg width="23" height="20" viewBox="0 0 23 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M20.0461 2.59133C19.5419 2.08683 18.9431 1.68663 18.2842 1.41358C17.6252 1.14054 16.9189 1 16.2056 1C15.4923 1 14.786 1.14054 14.127 1.41358C13.468 1.68663 12.8693 2.08683 12.365 2.59133L11.3185 3.63785L10.272 2.59133C9.25342 1.57276 7.87194 1.00053 6.43146 1.00053C4.99098 1.00053 3.6095 1.57276 2.59092 2.59133C1.57235 3.6099 1.00012 4.99139 1.00012 6.43187C1.00012 7.87235 1.57235 9.25383 2.59092 10.2724L3.63745 11.3189L11.3185 19L18.9996 11.3189L20.0461 10.2724C20.5506 9.76814 20.9508 9.16942 21.2239 8.51045C21.4969 7.85148 21.6374 7.14517 21.6374 6.43187C21.6374 5.71857 21.4969 5.01225 21.2239 4.35328C20.9508 3.69431 20.5506 3.09559 20.0461 2.59133V2.59133Z"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>
                                    <span class="tp-item-count">7</span>
                                 </a>
                              </li>
                              <li>
                                 <button class="cartmini-open-btn">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M7.85739 19C8.33077 19 8.71453 18.6163 8.71453 18.1429C8.71453 17.6695 8.33077 17.2857 7.85739 17.2857C7.384 17.2857 7.00024 17.6695 7.00024 18.1429C7.00024 18.6163 7.384 19 7.85739 19Z"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path
                                          d="M17.286 19C17.7594 19 18.1431 18.6163 18.1431 18.1429C18.1431 17.6695 17.7594 17.2857 17.286 17.2857C16.8126 17.2857 16.4288 17.6695 16.4288 18.1429C16.4288 18.6163 16.8126 19 17.286 19Z"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path
                                          d="M1.00012 1H4.42869L6.72584 12.4771C6.80422 12.8718 7.0189 13.2263 7.3323 13.4785C7.64571 13.7308 8.03786 13.8649 8.44012 13.8571H16.7716C17.1738 13.8649 17.566 13.7308 17.8794 13.4785C18.1928 13.2263 18.4075 12.8718 18.4858 12.4771L19.8573 5.28571H5.28584"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>
                                    <span class="tp-item-count">3</span>
                                 </button>
                              </li>
                           </ul>
                        </div>
                        <div class="header__hamburger ml-30 d-xl-none">
                           <button type="button" class="hamburger-btn hamburger-btn-black offcanvas-open-btn">
                              <span></span>
                              <span></span>
                              <span></span>
                           </button>
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

<!-- search popup start -->
<?php get_template_part('template-parts/header/search') ?>
<!-- search popup end -->
<!-- cart mini area start -->
<div class="cartmini__area">
   <div class="cartmini__wrapper d-flex justify-content-between flex-column">
      <div class="cartmini__top-wrapper ">
         <div class="cartmini__top p-relative">
            <div class="cartmini__title">
               <h4>Shopping cart</h4>
            </div>
            <div class="cartmini__close">
               <button type="button" class="cartmini__close-btn cartmini-close-btn"><i
                     class="fal fa-times"></i></button>
            </div>
         </div>
         <div class="cartmini__widget">
            <div class="cartmini__widget-item">
               <div class="cartmini__thumb">
                  <a href="product-details.html">
                     <img src="assets/img/product/product-1.jpg" alt="">
                  </a>
               </div>
               <div class="cartmini__content">
                  <h5><a href="product-details.html">Level Bolt Smart Lock</a></h5>
                  <div class="cartmini__price-wrapper">
                     <span class="cartmini__price">$46.00</span>
                     <span class="cartmini__quantity">x2</span>
                  </div>
               </div>
               <button class="cartmini__del"><i class="fal fa-times"></i></button>
            </div>
            <div class="cartmini__widget-item">
               <div class="cartmini__thumb">
                  <a href="product-details.html">
                     <img src="assets/img/product/product-2.jpg" alt="">
                  </a>
               </div>
               <div class="cartmini__content">
                  <h5><a href="product-details.html">Trademil for younger</a></h5>
                  <div class="cartmini__price-wrapper">
                     <span class="cartmini__price">$78.00</span>
                     <span class="cartmini__quantity">x1</span>
                  </div>
               </div>
               <button class="cartmini__del"><i class="fal fa-times"></i></button>
            </div>
            <div class="cartmini__widget-item">
               <div class="cartmini__thumb">
                  <a href="product-details.html">
                     <img src="assets/img/product/product-3.jpg" alt="">
                  </a>
               </div>
               <div class="cartmini__content">
                  <h5><a href="product-details.html">ViewSonic VP2756-2K</a></h5>
                  <div class="cartmini__price-wrapper">
                     <span class="cartmini__price">$98.00</span>
                     <span class="cartmini__quantity">x3</span>
                  </div>
               </div>
               <button class="cartmini__del"><i class="fal fa-times"></i></button>
            </div>
         </div>
         <!-- for wp -->
         <!-- if no item in cart -->
         <div class="cartmini__empty text-center d-none">
            <img src="assets/img/product/cartmini/empty-cart.png" alt="">
            <p>Your Cart is empty</p>
            <a href="shop.html" class="tp-btn">Go to Shop</a>
         </div>
      </div>
      <div class="cartmini__checkout">
         <div class="cartmini__checkout-title mb-30">
            <h4>Subtotal:</h4>
            <span>$113.00</span>
         </div>
         <div class="cartmini__checkout-btn">
            <a href="cart.html" class="tp-btn mb-10 w-100"> <span></span> view cart</a>
            <a href="checkout.html" class="tp-btn-border w-100"> <span></span> checkout</a>
         </div>
      </div>
   </div>
</div>
<!-- cart mini area end -->

<!-- newsletter popup area start -->
<div class="newsletter__area newsletter__area-3 newsletter-popup">
   <div class="newsletter__wrapper newsletter__wrapper-3">
      <div class="newsletter__close newsletter__close-3">
         <button type="button" class="newsletter__close-btn newsletter__close-btn-3 newsletter-close-btn">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
               <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
            </svg>
         </button>
      </div>
      <div class="newsletter__thumb newsletter__thumb-3 include-bg"
         data-background="assets/img/newsletter/newsletter-3.jpg"></div>
      <span class="newsletter__title-pre">Harry Discount</span>
      <h3 class="newsletter__title-3">Get 16% off</h3>
      <p>Subscribe now and receive a discount on <br> your first order</p>

      <form action="#">
         <div class="newsletter__input newsletter__input-2 newsletter__input-3">
            <input type="email" placeholder="Your email address">
            <button type="button">Submit
               <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M2.4 1H13.6C14.37 1 15 1.63 15 2.4V10.8C15 11.57 14.37 12.2 13.6 12.2H2.4C1.63 12.2 1 11.57 1 10.8V2.4C1 1.63 1.63 1 2.4 1Z"
                     stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M15 2.39999L8 7.29999L1 2.39999" stroke="currentColor" stroke-width="1.5"
                     stroke-linecap="round" stroke-linejoin="round" />
               </svg>
            </button>
         </div>
      </form>
      <div class="newsletter__proposal">
         <p><a href="register.html">Signup</a> for Exclusive Updates</p>
      </div>
      <div class="newsletter__social">
         <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
         <a href="#"><i class="fa-brands fa-twitter"></i></a>
         <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
         <a href="#"><i class="fa-brands fa-youtube"></i></a>
      </div>
   </div>
</div>
<div class="newsletter-overlay"></div>
<!-- newsletter popup area end -->