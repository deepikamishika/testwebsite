 
<?php
/* Template Name:portfolio-details */

get_header();
?>
 <!--start page-header -->
 <section id="page-header" class="parallax">
             <div class="overlay"></div>
			<div class="container">
				<h1>PORTFOLIO - DETAILS</h1>
                <!--Start Breadcrumb-->
                <div class="breadcrumb">
					<ul>
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="portfolio">Our Works</a>
						</li>
						<li class="current">
							<a href="#">Project details</a>
						</li>
					</ul>
				</div>
                <!--End Breadcrumb-->
			</div>
		</section>
		<!--End page-header -->
		

    <!-- Portfolio Details Section Begin -->
    <section class="portfolio-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pd-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis.Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit. Vivamus at nibh tincidunt, bibendum ligula id. Nemo enim
                            ipsam voluptatem quiatotam rem.</p>
                        <p>Enim ipsam voluptatem quiatotam rem aperiam, eaque ipsa quae ab illo inventore aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto. Nemo enim ipsam voluptatem quia
                            voluptas sit aspernatur aut odit aut fugit.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pd-text">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit. Vivamus at nibh tincidunt, bibendum ligula id. Nemo veritatis
                            et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Vivamus at nibh
                            tincidunt, bibendum ligula id. Nemo enim ipsam voluptatem quiatotam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto.</p>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="pd-more-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Voluptas sit aspernatur aut odit aut fugit.</h2>
                    </div>
                    <div class="col-lg-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis. Nemo enim ipsam voluptatem spernatur.</p>
                    </div>
                    <div class="col-lg-4">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Vivamus at nibh
                            tincidunt, bibendum ligula id. Nemo enim ipsam voluptatem quiatotam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto beatae vitae fugit.</p>
                    </div>
                    <div class="col-lg-4">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Vivamus at nibh
                            tincidunt, bibendum ligula id. Nemo enim ipsam voluptatem quiatotam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Details Section End -->

    <!-- Recent Photography Section Begin -->
    <section class="recent-photography-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Recent photography</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rp-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img9.jpg" alt="thumbnail">
                        <div class="rp-text">
                            <h5>SPRING GARDEN</h5>
                            <span>Lifestyle</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rp-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img10.jpg" alt="thumbnail">
                        <div class="rp-text">
                            <h5>SPRING GARDEN</h5>
                            <span>Fashion</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rp-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img11.jpg" alt="thumbnail">
                        <div class="rp-text">
                            <h5>SPRING GARDEN</h5>
                            <span>Natural</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rp-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img12.jpg" alt="thumbnail">
                        <div class="rp-text">
                            <h5>SPRING GARDEN</h5>
                            <span>Animal</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-more-btn portfolio-btn">
                <a href="#">View all photography</a>
            </div>
        </div>
    </section>
    <!-- Recent Photography Section End -->
        
		<!--Start single-work -->
		<section id="single-work" class="section">
			<div class="container">
				<div class="row">					
					<div class="col-md-7">						
						<div id="single-work-slider" class="owl-carousel owl-theme">
							<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img4.jpg" alt=""></div>
							<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img5.jpg" alt=""></div>
							<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img6.jpg" alt=""></div>						 
						</div>	
					</div>
                    
                    <!--Start Work Detail-->
					<div class="col-md-5 work-detail">
                            <h3 class="margin-bottom-15">Work Description </h3>	
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. </p>					
						 
						<ul class="work-detail-list">
							<li><span>Category :</span>Business</li>
							<li><span>Client :</span>Newtheme</li>
							<li><span>Technoligies used :</span>HTML 5,CSS 3</li>
                            <li><span>Tags :</span>Photography, Branding, Wordpress</li>
							<li><span>Date released :</span>January 22, 2015</li>
						</ul>
                        
                        <a href="#" class="btn btn-gray-border">Visit website</a>
                        
					</div>
                    <!--End Work Detail-->
				</div> <!--/ row-->
			</div> <!--/ container-->		
		</section>
		<!--End single-work -->
		
	<!--related works -->
	<section id="featured-works" class="section parallax">
       <div class="container">
           <div class="row">
               
                <h3 class="margin-bottom-50">Related Projects</h3>
                   
           </div>
       </div> 
       
      <div class="related-project-carousel owl-carousel">
            <!-- Start Item-->
             <div class="item">
                 <div class="fworks-image">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img1.jpg" alt=""/> 
                     
                     <!--Hover link-->
                     <div class="hover-link">
                        <a href="#">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img1.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                     </div>
                     <!--End link-->
                     
                     <!--Hover Caption-->
                     <div class="featured-caption">
                         <h4>Project Title</h4>
                         <p>Design, Photography</p>
                     </div>
                     <!--End Caption-->
                     
                 </div>
             </div>
            <!-- End Item-->
            
             <!-- Start Item-->
             <div class="item">
                 <div class="fworks-image">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img2.jpg" alt=""/> 
                     
                     <!--Hover link-->
                     <div class="hover-link">
                        <a href="#">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img2.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                     </div>
                     <!--End link-->
                     
                     <!--Hover Caption-->
                     <div class="featured-caption">
                         <h4>Project Title</h4>
                         <p>Design, Photography</p>
                     </div>
                     <!--End Caption-->
                     
                 </div>
             </div>
            <!-- End Item-->

            <!-- Start Item-->
             <div class="item">
                 <div class="fworks-image">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img3.jpg" alt=""/> 
                     
                     <!--Hover link-->
                     <div class="hover-link">
                        <a href="#">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img3.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                     </div>
                     <!--End link-->
                     
                     <!--Hover Caption-->
                     <div class="featured-caption">
                         <h4>Project Title</h4>
                         <p>Design, Photography</p>
                     </div>
                     <!--End Caption-->
                     
                 </div>
             </div>
            <!-- End Item-->

            <!-- Start Item-->
             <div class="item">
                 <div class="fworks-image">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img4.jpg" alt=""/> 
                     
                     <!--Hover link-->
                     <div class="hover-link">
                        <a href="#">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img4.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                     </div>
                     <!--End link-->
                     
                     <!--Hover Caption-->
                     <div class="featured-caption">
                         <h4>Project Title</h4>
                         <p>Design, Photography</p>
                     </div>
                     <!--End Caption-->
                     
                 </div>
             </div>
            <!-- End Item-->

            <!-- Start Item-->
             <div class="item">
                 <div class="fworks-image">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img1.jpg" alt=""/> 
                     
                     <!--Hover link-->
                     <div class="hover-link">
                        <a href="#">
                            <i class="fa fa-link"></i>
                        </a>

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img1.jpg" alt=""/> 
                            <i class="fa fa-plus"></i>
                        </a>
                     </div>
                     <!--End link-->
                     
                     <!--Hover Caption-->
                     <div class="featured-caption">
                         <h4>Project Title</h4>
                         <p>Design, Photography</p>
                     </div>
                     <!--End Caption-->
                     
                 </div>
             </div>
            <!-- End Item-->

            <!-- Start Item-->
             <div class="item">
                 <div class="fworks-image">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/img6.jpg" alt=""/> 
                     
                     <!--Hover link-->
                     <div class="hover-link">
                        <a href="#">
                            <i class="fa fa-link"></i>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/works/img6.jpg" class="popup-image">
                            <i class="fa fa-plus"></i>
                        </a>
                     </div>
                     <!--End link-->
                     
                     <!--Hover Caption-->
                     <div class="featured-caption">
                         <h4>Project Title</h4>
                         <p>Design, Photography</p>
                     </div>
                     <!--End Caption-->
                     
                 </div>
             </div>
             <!-- End Item-->
                 
          </div>
     </section>	
    <!-- End related works -->
   <?php
get_footer();
?>