<?php get_header();?>

<section class="postbox__area grey-bg-4 pt-120 pb-120">
   <div class="container">
      <div class="row">
         <div class="col-xxl-8 col-lg-8">
            <div class="postbox__wrapper">
            <?php if ( have_posts() ) : ?>
                  <?php while ( have_posts() ) : the_post(); ?> 
                  <?php echo get_template_part('template-parts/content', get_post_format() )?>
               <?php endwhile; ?>
            <?php endif; ?>
            <div class="tp-pagination tp-pagination-style-2 mt-20">
               <?php harry_navigation(); ?>
            </div>

            </div>
         </div>
         <div class="col-xxl-4 col-lg-4">
            <div class="sidebar__wrapper pl-40">
               <div class="sidebar__widget mb-20">
                  <div class="sidebar__widget-content">
                     <div class="sidebar__search">
                        <form action="#">
                           <div class="sidebar__search-input">
                              <input type="text" placeholder="Enter your keywords...">
                              <button type="submit">
                                 <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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
                           <p>Lorem ipsum dolor ametare elit consectetur adipiscing Aenean pellentesque.</p>

                           <div class="sidebar__author-social d-flex align-items-center justify-content-center">
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
                              <a href="blog-details.html"><img src="assets/img/blog/sidebar/blog-sm-1.jpg" alt=""></a>
                           </div>
                           <div class="rc__post-content">
                              <h3 class="rc__post-title">
                                 <a href="blog-details.html">Business meeting 2021 in San Francisco</a>
                              </h3>
                              <div class="rc__meta">
                                 <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M7.5 3.59961V7.49961L10.1 8.79961" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>July 21, 2022
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="rc__post d-flex align-items-center">
                           <div class="rc__post-thumb">
                              <a href="blog-details.html"><img src="assets/img/blog/sidebar/blog-sm-2.jpg" alt=""></a>
                           </div>
                           <div class="rc__post-content">
                              <h3 class="rc__post-title">
                                 <a href="blog-details.html">Developing privacy user-centric apps</a>
                              </h3>
                              <div class="rc__meta">
                                 <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M7.5 3.59961V7.49961L10.1 8.79961" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>July 21, 2022
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="rc__post d-flex align-items-center">
                           <div class="rc__post-thumb">
                              <a href="blog-details.html"><img src="assets/img/blog/sidebar/blog-sm-3.jpg" alt=""></a>
                           </div>
                           <div class="rc__post-content">
                              <h3 class="rc__post-title">
                                 <a href="blog-details.html">Starting and Growing  Web Design in 2022</a>
                              </h3>
                              <div class="rc__meta">
                                 <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M7.5 3.59961V7.49961L10.1 8.79961" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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
</section>

  
<?php get_footer();?>