<!doctype html>
<!--
/*
Theme Name: InnoVision-Studios
Theme URI: https://InnoVision-Studios/
Author: the WordPress team
Author URI: https://wordpress.org/
Description: Our default theme for 2020 is designed to take full advantage of the flexibility of the block editor. Organizations and businesses have the ability to create dynamic landing pages with endless layouts using the group and column blocks. The centered content column and fine-tuned typography also makes it perfect for traditional blogs. Complete editor styles give you a good idea of what your content will look like, even before you publish. You can give your site a personal touch by changing the background colors and the accent color in the Customizer. The colors of all elements on your site are automatically calculated based on the colors you pick, ensuring a high, accessible color contrast for your visitors.
Tags: blog, one-column, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, footer-widgets, full-width-template, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready, block-styles, wide-blocks, accessibility-ready
Version: 1.3
Requires at least: 5.0
Tested up to: 5.4
Requires PHP: 7.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: Innovision Studios
This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/
-->


<html lang="en-gb" class="no-js">
  <head>
    <meta charset="utf-8">
	<title>InnoVision-Studios | Fictional Creative gency</title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">		
		
	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      
<style>


.contact-info {
	margin-bottom:65px;
	margin-top:65px;

}
/*--------------------------------------------------------------
# Why Us
--------------------------------------------------------------*/
.why-us .container {
  box-shadow: 0 5px 25px 0 rgba(214, 215, 216, 0.6);
  background: #fff;
}

.why-us .icon-box+.icon-box {
  margin-top: 50px;
}

.why-us .icon-box .icon {
  float: left;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 72px;
  height: 72px;
  background: #f3f8fa;
  border-radius: 6px;
  transition: 0.5s;
}

.why-us .icon-box .icon i {
  color: #68A4C4;
  font-size: 32px;
}

.why-us .icon-box:hover .icon {
  background: #68A4C4;
}

.why-us .icon-box:hover .icon i {
  color: #fff;
}

.why-us .icon-box .title {
  margin-left: 95px;
  font-weight: 700;
  margin-bottom: 10px;
  font-size: 18px;
  text-transform: uppercase;
}

.why-us .icon-box .title a {
  color: #343a40;
  transition: 0.3s;
}

.why-us .icon-box .title a:hover {
  color: #68A4C4;
}

.why-us .icon-box .description {
  margin-left: 95px;
  line-height: 24px;
  font-size: 14px;
}

.why-us .video-box {
  position: relative;
}

.why-us .video-box img {
  padding-top: 15px;
  padding-bottom: 15px;
}

.why-us .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(#68A4C4 50%, rgba(104, 164, 196, 0.4) 52%);
  border-radius: 50%;
  display: block;
  position: absolute;
  left: calc(50% - 47px);
  top: calc(50% - 47px);
  overflow: hidden;
}

.why-us .play-btn::after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.why-us .play-btn::before {
  content: "";
  position: absolute;
  width: 120px;
  height: 120px;
  animation-delay: 0s;
  animation: pulsate-btn 2s;
  animation-direction: forwards;
  animation-iteration-count: infinite;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 5px solid rgba(104, 164, 196, 0.7);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}

.why-us .play-btn:hover::after {
  border-left: 15px solid #68A4C4;
  transform: scale(20);
}

.why-us .play-btn:hover::before {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  animation: none;
  border-radius: 0;
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }

  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

/*--------------------------------------------------------------
# Features
--------------------------------------------------------------*/
.features .row+.row {
  margin-top: 100px;
}

.features h3 {
  font-weight: 400;
  font-size: 24px;
}

.features ul {
  list-style: none;
  padding: 0;
}

.features ul li {
  padding-bottom: 10px;
}

.features ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #68A4C4;
}

.features p:last-child {
  margin-bottom: 0;
}
.section-bg {
    background-color: #f3f8fa;
}
section {
    padding: 60px 0;
}
.p-5 {
    padding: 3rem !important;
}
.justify-content-center {
    justify-content: center !important;
}
.flex-column {
    flex-direction: column !important;
}
.d-flex {
    display: flex !important;
}
.bx-fingerprint:before {
    content: "\eadb";
}
*, ::after, ::before {
    box-sizing: border-box;
}
.why-us .icon-box .icon i {
    color: #68A4C4;
    font-size: 32px;
}
.bx {
    font-family: boxicons !important;
    font-weight: 400;
    font-style: normal;
    font-variant: normal;
    line-height: 1;
    text-rendering: auto;
    display: inline-block;
    text-transform: none;
    speak: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
/*--------------------------------------------------------------
# Service Details
--------------------------------------------------------------*/
.service-details {
  padding-bottom: 10px;
}

.service-details .card {
  border: 0;
  padding: 0 30px;
  margin-bottom: 60px;
  position: relative;
}

.service-details .card-img {
  width: calc(100% + 60px);
  margin-left: -30px;
  overflow: hidden;
  z-index: 9;
  border-radius: 0;
}

.service-details .card-img img {
  max-width: 100%;
  transition: all 0.3s ease-in-out;
}

.service-details .card-body {
  background: #fff;
  border-top: 4px solid #fff;
  padding: 30px;
  box-shadow: rgba(126, 193, 63, .8);
  margin-top: 50px;
  transition: 0.3s;
}

.service-details .card-title {
  font-weight: 700;
  text-align: center;
  margin-bottom: 20px;
}

.service-details .card-title a {
  color: #1e4356;
  transition: 0.3s;
}

.service-details .card-text {
  color: #5e5e5e;
}

.service-details .read-more a {
  color: rgba(126, 193, 63, .8);
  text-transform: uppercase;
  font-weight: 600;
  font-size: 12px;
  transition: 0.3s;
}

.service-details .read-more a:hover {
  color: rgba(126, 193, 63, .8);
}

.service-details .card:hover img {
  transform: scale(1.1);
}

.service-details .card:hover .card-body {
  border-color: rgba(126, 193, 63, .8);
}

.service-details .card:hover .card-body .card-title a {
  color:rgba(126, 193, 63, .8);
}

/*--------------------------------------------------------------
# Pricing
--------------------------------------------------------------*/
.pricing .row {
  padding-top: 40px;
}

.pricing .box {
  padding: 40px;
  margin-bottom: 30px;
  box-shadow: 0px 0px 30px rgba(73, 78, 92, 0.15);
  background: #fff;
  text-align: center;
}

.pricing h3 {
  font-weight: 300;
  margin-bottom: 15px;
  font-size: 28px;
}

.pricing h4 {
  font-size: 46px;
  color: rgba(126, 193, 63, .8);
  font-weight: 400;
  font-family: "Open Sans", sans-serif;
  margin-bottom: 25px;
}

.pricing h4 span {
  color: #bababa;
  font-size: 18px;
  display: block;
}

.pricing ul {
  padding: 0;
  list-style: none;
  color: #999;
  text-align: left;
  line-height: 20px;
}

.pricing ul li {
  padding-bottom: 12px;
}

.pricing ul i {
  color: rgba(126, 193, 63, .8);
  font-size: 18px;
  padding-right: 4px;
}

.pricing ul .na {
  color: #ccc;
}

.pricing ul .na i {
  color: #ccc;
}

.pricing ul .na span {
  text-decoration: line-through;
}

.pricing .get-started-btn {
  background: #1e4356;
  display: inline-block;
  padding: 6px 30px;
  border-radius: 20px;
  color: #fff;
  transition: none;
  font-size: 14px;
  font-weight: 400;
  font-family: "Roboto", sans-serif;
  transition: 0.3s;
}

.pricing .get-started-btn:hover {
  background: rgba(126, 193, 63, .8);
}

.pricing .featured {
  z-index: 10;
  margin: -30px -5px 0 -5px;
}

.pricing .featured .get-started-btn {
  background: rgba(126, 193, 63, .8);
}

.pricing .featured .get-started-btn:hover {
  background: rgba(126, 193, 63, .8);
}

@media (max-width: 992px) {
  .pricing .box {
    max-width: 60%;
    margin: 0 auto 30px auto;
  }
}

@media (max-width: 767px) {
  .pricing .box {
    max-width: 80%;
    margin: 0 auto 30px auto;
  }
}

@media (max-width: 420px) {
  .pricing .box {
    max-width: 100%;
    margin: 0 auto 30px auto;
  }
}
/*---------------------
  Footer
-----------------------*/

.footer-section {
	background: #000606;
	padding-top: 90px;
}

.fs-about {
	margin-bottom: 30px;
}

.fs-about .fa-logo {
	margin-bottom: 34px;
}

.fs-about p {
	color: #c4c4c4;
	margin-bottom: 20px;
}

.fs-about .fa-social a {
	display: inline-block;
	font-size: 18px;
	color: #ffffff;
	margin-right: 20px;
}

.fs-about .fa-social a:last-child {
	margin-right: 0;
}

.fs-widget {
	margin-bottom: 30px;
	overflow: hidden;
}

.fs-widget h5 {
	font-size: 20px;
	color: #ffffff;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 35px;
}

.fs-widget .fw-instagram {
	margin-right: -5px;
	overflow: hidden;
}

.fs-widget .fw-instagram img {
	width: calc(33.33% - 5px);
	margin-right: 5px;
	float: left;
}

.fs-widget ul {
	width: 50%;
	float: left;
}

.fs-widget ul li {
	list-style: none;
}

.fs-widget ul li a {
	font-size: 15px;
	color: #c4c4c4;
	line-height: 36px;
}

.fs-widget p {
	color: #c4c4c4;
}

.fs-widget .fw-subscribe form {
	position: relative;
}

.fs-widget .fw-subscribe form input {
	width: 100%;
	height: 50px;
	font-size: 15px;
	color: #c4c4c4;
	padding-left: 20px;
	border: 1px solid #009603;
	background: transparent;
}

.fs-widget .fw-subscribe form input::-webkit-input-placeholder {
	color: #c4c4c4;
}

.fs-widget .fw-subscribe form input::-moz-placeholder {
	color: #c4c4c4;
}

.fs-widget .fw-subscribe form input:-ms-input-placeholder {
	color: #c4c4c4;
}

.fs-widget .fw-subscribe form input::-ms-input-placeholder {
	color: #c4c4c4;
}

.fs-widget .fw-subscribe form input::placeholder {
	color: #c4c4c4;
}

.fs-widget .fw-subscribe form button {
	font-size: 18px;
	color: #ffffff;
	background: #009603;
	height: 50px;
	width: 50px;
	border: none;
	position: absolute;
	right: 0;
	top: 0;
}

.copyright-text {
	font-size: 15px;
	color: #c4c4c4;
	text-align: center;
	border-top: 1px solid #181d1d;
	padding: 30px 0;
	margin-top: 40px;
}
/*---------------------
  Contact
-----------------------*/

.map {
	height: 635px;
}

.map iframe {
	width: 100%;
}

.contact-text h3 {
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 15px;
}

.contact-text p {
	color: #111111;
	margin-bottom: 32px;
}

.contact-text .ct-item {
	overflow: hidden;
	margin-bottom: 30px;
}

.contact-text .ct-item .ct-icon {
	height: 80px;
	width: 80px;
	background: #009603;
	border-radius: 50%;
	font-size: 40px;
	line-height: 80px;
	text-align: center;
	color: #ffffff;
	float: left;
	margin-right: 30px;
}

.contact-text .ct-item .ct-text {
	overflow: hidden;
	padding-top: 12px;
}

.contact-text .ct-item .ct-text h5 {
	font-size: 20px;
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 10px;
}

.contact-text .ct-item .ct-text p {
	color: #444444;
	margin-bottom: 0;
}

.contact-text .ct-item .ct-text ul li {
	list-style: none;
	display: inline-block;
	margin-right: 30px;
	font-size: 15px;
	color: #444444;
	position: relative;
}

.contact-text .ct-item .ct-text ul li:after {
	position: absolute;
	right: -20px;
	top: -2px;
	content: "|";
}

.contact-text .ct-item .ct-text ul li:last-child {
	margin-right: 0;
}

.contact-text .ct-item .ct-text ul li:last-child:after {
	display: none;
}

.contact-form h3 {
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 35px;
}

.contact-form form input {
	height: 50px;
	width: 100%;
	padding-left: 20px;
	font-size: 14px;
	color: #444444;
	background: transparent;
	margin-bottom: 30px;
	border: 1px solid #e1e1e1;
}

.contact-form form input::-webkit-input-placeholder {
	color: #444444;
}

.contact-form form input::-moz-placeholder {
	color: #444444;
}

.contact-form form input:-ms-input-placeholder {
	color: #444444;
}

.contact-form form input::-ms-input-placeholder {
	color: #444444;
}

.contact-form form input::placeholder {
	color: #444444;
}

.contact-form form textarea {
	width: 100%;
	padding-left: 20px;
	padding-top: 12px;
	height: 100px;
	font-size: 14px;
	color: #444444;
	background: transparent;
	resize: none;
	border: 1px solid #e1e1e1;
	margin-bottom: 24px;
}

.contact-form form textarea::-webkit-input-placeholder {
	color: #444444;
}

.contact-form form textarea::-moz-placeholder {
	color: #444444;
}

.contact-form form textarea:-ms-input-placeholder {
	color: #444444;
}

.contact-form form textarea::-ms-input-placeholder {
	color: #444444;
}

.contact-form form textarea::placeholder {
	color: #444444;
}
.fs-about .fa-logo img {
    height: 181px;
}
.fs-widget h5 {
	padding-top:80px; !important
}
.fs-about .fa-logo {
    margin-bottom: -45px !important;
}
.copyright-text{
	margin-top:0px; !important
}
.map {
    height: 635px;
    margin-bottom: 50px !important;
}
/*---------------------
  Portfolio Details
-----------------------*/

.portfolio-details-section {
	padding-top: 70px;
	padding-bottom: 40px;
}

.pd-text {
	margin-bottom: 70px;
}

.pd-text p {
	font-size: 17px;
	line-height: 30px;
}

.pd-text p:first-child {
	margin-bottom: 30px;
}

.portfolio-pics {
	padding-left: 20px;
	margin-bottom: 50px;
}

.portfolio-details-pic .pdp-item {
	width: calc(20% - 20px);
	float: left;
	height: 360px;
	margin-bottom: 20px;
	margin-right: 20px;
}

.portfolio-details-pic .pdp-item.large-width {
	width: calc(40% - 20px);
}

.portfolio-details-pic .pdp-item.large-height {
	height: 740px;
}

.pd-more-text h2 {
	color: #111111;
	font-weight: 700;
	margin-bottom: 30px;
}

.pd-more-text p {
	font-size: 17px;
	line-height: 30px;
}

/*---------------------
  Recent Photography
-----------------------*/

.recent-photography-section {
	padding-top: 0;
}

.recent-photography-section .section-title {
	padding-top: 50px;
	border-top: 1px solid #e1e1e1;
}

.rp-item {
	text-align: center;
	width: 100%;
	background: #f5f5f5;
	margin-bottom: 30px;
}

.rp-item img {
	min-width: 100%;
}

.rp-item .rp-text {
	padding: 26px 0 25px;
}

.rp-item .rp-text h5 {
	color: #111111;
	font-weight: 700;
	font-size: 20px;
	text-transform: uppercase;
	margin-bottom: 5px;
}

.rp-item .rp-text span {
	font-size: 15px;
	font-weight: 600;
	color: #009603;
	display: block;
}

.logo-nav img {
    height: 126px;
}
#main-menu ul {
padding-top:20px !important;
}
#main-menu ul li a {
    color: #fff !important; /* Default text color */
    transition: color 0.3s ease; /* Smooth transition effect */
}

#main-menu ul li a:hover {
    color: #7EC13F !important; /* Text color on hover */
}
@media (max-width: 992px){
.navbar-toggle {
    display: block !important;
	margin-top:27px;
}
}
</style>
     <!--styles -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/js/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/etlinefont.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />


   <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    
	<body  data-spy="scroll" data-target="#main-menu">
 

  <!--Start Page loader -->
  <div id="pageloader">   
        <div class="loader">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/progress.gif" alt='loader' />
        </div>
   </div>
   <!--End Page loader -->
   
      
   <!--Start Navigation-->
		<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
								<span class="sr-only">Toggle navigation</span>
								<span class="fa fa-bars"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                            <!--Start Logo -->
							<div class="logo-nav">
								<a href="index.html">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/innovision-logo.png" alt="Company logo" />
								</a>
							</div>
                            <!--End Logo -->
							<div class="clear-toggle"></div>
							<div id="main-menu" class="collapse scroll navbar-right">
								<div class="nav">
                                
            <ul>
              <li><a class="active " href="index.html">Home</a></li>
              <li><a href="about">About</a></li>
              <li><a href="services">Services</a></li>
              <li><a href="portfolio">Portfolio</a></li>
              <li><a href="contact">Contact Us</a></li>
            </ul>
                                   
								</ul>
							</div><!-- end main-menu -->
						</div>
					</div>
				</div>
			</header>
    <!--End Navigation-->