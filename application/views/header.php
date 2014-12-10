<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Mobile Specific
    ========================================================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
    <!-- Bootstrap -->
    <link href="/tmp/static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/tmp/static/css/doc.css" rel="stylesheet" type="text/css" href="">
    <style type="text/css">
     .white {
     	padding-top: -50px;
     }
     .page-header {
     	padding-top: 0px;
     }
    	.form_control {
    		padding-top: 0px;
    	}
    </style>
    <link rel="shortcut icon" href="#" title="Favicon" />

    <!-- WP HEAD
    ========================================================================= -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/layerslider.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/style.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/layout.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/font-awesome.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/magnific-popup.css">
    <!-- pe icon 7 filled-->
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/pe-icon-7-filled.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/grid.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/responsive.css">
    <!-- flexslider -->
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/flexslider.css">
    <!-- anamations effect-->
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/animations.min.css">
    <!-- Portfolio style -->
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/style-portfolio.css">
    <link rel="stylesheet" href="/tmp/static/lib/forrest/css/skin.css">

    <!-- Browser Specical File-->
    <!--[if IE 8]>
    <link href="css/ie8.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->    

    <link href="/tmp/static/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">             

  </head>
  <body>
  	<?php

  	if($this->session->flashdata('message')){
  		?> 
  		<script type="text/javascript">
  			alert('<?=$this->session->flashdata('message')?>')
  		</script>
  		<?php
  	}
  	?>
  	<div id="page" class="hfeed site">
  		<header id="header" class="site-header" role="banner">
  			<div id="frr-top-bar" class="top-bar-wrap">
  				<div class="container">
  					<div class="left-widget-wrap left">
  						<div class="phone left">
  							<i class="fa fa-phone"></i> (0) 0000 0000
  						</div>
  					</div>
  					<div class="right-widget-wrap right">
  						<div class="top-social">
  							<ul id="social-area-top">
  								<?php if($this->session->userdata('is_login')){ ?>
  								<li><a href="/tmp/auth/logout">Log Out</a></li>
  								<?php } else { ?>
  								<li><a href="/tmp/auth/login">Log In</a></li>
  								<?php } ?>
  								<li><a href="/tmp/auth/register">Sing Up</a></li>
               <!-- <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
            -->
        </ul>
    </div>
</div>
</div>
</div>
<div id="frr-top-nav-wrapper">
	<div class="container">
		<div class="row">
			<div id="logo" class="col-lg-4 col-md-12 col-sm-12">
				<div class="logo-outer">
					<a class="logo" href="index.html" title="Home">
						<span></span>
					</a>
				</div>
			</div>
			<nav role="navigation">
				<div id="top-nav" class="col-lg-8 col-md-12 col-sm-12">
					<div class="top-nav-wrap right navbg">
						<a class="mobile-menu-closed" href="#" id="mobile-menu-trigger">
							<i class="fa fa-bars"></i>
						</a>
						<ul class="sf-menu" id="menu">
							<li class="cl-effect-4">
								<a href="/tmp/">
									<span>Home</span>
								</a>
							</li>
							<li class="cl-effect-4">
								<a href="/tmp/topic/tlist"><span>Ticket</span></a>
							</li>
							<li class="cl-effect-4">
								<a href="portfolio.html"><span>Portfolio</span></a>
							</li>                    
							<li class="dropdown cl-effect-4">
								<a class="sf-with-ul" href="#">
									<span>Pages</span>
								</a>
								<ul>
									<li>
										<a href="about-us.html">About Us</a>
									</li>
									<li>
										<a href="elements.html">Elements</a>
									</li>
									<li>
										<a href="403.html">403 Page</a>
									</li>
									<li>
										<a href="404.html">404 Page</a>
									</li>
									<li>
										<a href="contact.html">Contact</a>
									</li>      
									<li>
										<a href="portfolio.html">Portfolio</a>
									</li>                     
									<li>
										<a href="single-portfolio.html">Single Portfolio</a>
									</li> 
									<li>
										<a href="pricing-tables.html">Pricing Tables</a>
									</li>                           
									<li>
										<a href="testimonials.html">Testimonials</a>
									</li>                                                                    
									<li>
										<a href="blog-single.html">Blog Single</a>
									</li> 
									<li>
										<a href="faq.html">FAQ</a>
									</li>                   
								</ul>
							</li>
							<li class="cl-effect-4">
								<a href="blog.html"><span>Blog</span></a>
							</li>
							<li class="mega-section cl-effect-4">
								<a href="#"><span>Lists</span></a>
								<div class="sf-mega">
									<div class="sf-mega-section">
										<strong><a href="#">First List</a></strong>
										<ul class="mega-submenu">
											<li>
												<a href="#">About Us</a>
											</li>
											<li>
												<a href="#">Our Team</a>
											</li>
											<li>
												<a href="#">Another Link</a>
											</li>
											<li>
												<a href="#">Testimonials</a>
											</li>
											<li>
												<a href="#">Elements</a>
											</li>
											<li>
												<a href="#">One More Link</a>
											</li>
											<li>
												<a href="#">Jobs</a>
											</li>
											<li>
												<a href="#">Terms</a>
											</li>
											<li>
												<a href="#">Lorem Ipsum</a>
											</li>
											<li>
												<a href="#">Press</a>
											</li>
											<li>
												<a href="#">Lists Groups</a>
											</li>
											<li>
												<a href="#">Home</a>
											</li>
											<li>
												<a href="#">Dolor Sit</a>
											</li>
											<li>
												<a href="#">Contact</a>
											</li>
										</ul>
									</div>                  
									<div class="sf-mega-section">
										<strong><a href="#">Second List</a></strong>
										<ul class="mega-submenu">
											<li>
												<a href="#">About Us</a>
											</li>
											<li>
												<a href="#">Our Team</a>
											</li>
											<li>
												<a href="#">Another Link</a>
											</li>
											<li>
												<a href="#">Testimonials</a>
											</li>
											<li>
												<a href="#">Elements</a>
											</li>
											<li>
												<a href="#">One More Link</a>
											</li>
											<li>
												<a href="#">Jobs</a>
											</li>
											<li>
												<a href="#">Terms</a>
											</li>
											<li>
												<a href="#">Lorem Ipsum</a>
											</li>
											<li>
												<a href="#">Press</a>
											</li>
											<li>
												<a href="#">Lists Groups</a>
											</li>
											<li>
												<a href="#">Home</a>
											</li>
											<li>
												<a href="#">Dolor Sit</a>
											</li>
											<li>
												<a href="#">Contact</a>
											</li>
										</ul>
									</div>
									<div class="sf-mega-section">
										<strong><a href="#">Third List</a></strong>
										<ul class="mega-submenu">
											<li>
												<a href="#">About Us</a>
											</li>
											<li>
												<a href="#">Our Team</a>
											</li>
											<li>
												<a href="#">Another Link</a>
											</li>
											<li>
												<a href="#">Testimonials</a>
											</li>
											<li>
												<a href="#">Elements</a>
											</li>
											<li>
												<a href="#">One More Link</a>
											</li>
											<li>
												<a href="#">Jobs</a>
											</li>
											<li>
												<a href="#">Terms</a>
											</li>
											<li>
												<a href="#">Lorem Ipsum</a>
											</li>
											<li>
												<a href="#">Press</a>
											</li>
											<li>
												<a href="#">Lists Groups</a>
											</li>
											<li>
												<a href="#">Home</a>
											</li>
											<li>
												<a href="#">Dolor Sit</a>
											</li>
											<li>
												<a href="#">Contact</a>
											</li>
										</ul>
									</div>
								</div>
							</li>                    
							<li class="cl-effect-4">
								<a href="contact.html"><span>Contact</span></a>
							</li>
							<li>
								<a href="#small-dialog" class="popup-with-zoom-anim"><i class="fa fa-search"></i></a>
								<form id="small-dialog" class="frr_fade zoom-anim-dialog mfp-hide">
									<fieldset style="border:0;">
										<ol style="list-style:none">
											<li>
												<span><i class="fa fa-search"></i></span>
												<input id="search" name="search" type="text" placeholder="" autocomplete="off" required>
											</li>
										</ol>
									</fieldset>
								</form> <!-- END #small-dialog -->
							</li>
						</ul>
					</div>
				</div>
			</nav><!-- end top-nav -->
		</div>
	</div>
</div>
</header>
    <div class="content-wrapper">
      <div id="content" class="site-content">
        <section id="frr-breadcrumb">
          <div id="frr-breadcrumb-wrap" class="container">
            <div id="breadcrumb" class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <h3 class="page-title">Ticket</h3>
                <p class="page-intro"></p>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb-trail breadcrumbs">
                   <a href="/tmp/">Home</a> / Ticket
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section id="frr-the-team" class="white">
            <p class="section-intro">
          <div id="frr-the-team-wrap" class="container">
            <div class="row">
              
              
              
         

