<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>STRUCT</title>
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="<?php echo get_bloginfo('template_directory');?>/assets/images/favicon.ico">

<?php wp_head(); ?>

</head>

<body>
<div id="boxed-layout"> 
  
  <!-- Top Bar
================================================== -->
  <div id="topbar">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="topbar-contact">
            <li><i class="fa fa-phone-square"></i>(123) 456-7890</li>
            <li>|</li>
            <li class="language dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-language"></i>English <i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">French</a></li>
                <li><a href="#">Spanish</a></li>
                <li><a href="#">Italian</a></li>
                <li><a href="#">German</a></li>
              </ul>
            </li>
          </ul>
          <!-- end .topbar-contact --> 
        </div>
        <!-- end .col-md-8 -->
        
        <div class="col-md-4">
          <ul class="social-icons pull-right">
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
            <li class="topbar-search dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
              <ul class="dropdown-menu pull-right">
                <li>
                  <form class="input-group" action="#" method="get">
                    <input type="text" class="form-control" name="q" placeholder="Search">
                    <span class="input-group-btn">
                    <button class="btn btn-default"><i class="fa fa-search"></i></button>
                    </span>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
          <!-- end .social-icons --> 
          
        </div>
        <!-- end .col-md-4 --> 
      </div>
      <!-- end .row --> 
    </div>
    <!-- end .container --> 
  </div>
  <!-- end #topbar --> 
  
  <!-- Header
================================================== -->
  <header id="header">
    <nav class="navbar yamm navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="index-2.html"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/logo.png" class="img-responsive" alt="" /></a></div>
        <!-- end .navbar-header -->
      
        <div class="navbar-collapse collapse">

          <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 4,
                'container'         => false,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'Yamm_Fw_Nav_Walker_menu_fallback',
                'walker'            => new Yamm_Fw_Nav_Walker())
            );
          ?>

         <!-- end .nav navbar-nav --> 
        </div>
        <!-- end .navbar-collapse collapse --> 
        
      </div>
      <!-- end .container --> 
    </nav>
    <!-- end .navbar --> 

  </header>
  <!-- end #header -->
  <div class="clearfix"></div>
  <!-- end .clearfix --> 