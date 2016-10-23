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
        

          <?php  
            wp_nav_menu(array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 4,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav yamm',
            'fallback_cb'       => 'Yamm_Nav_Walker_menu_fallback',
            'walker'            => new Yamm_Nav_Walker())
            );
          ?>
        <!-- end .navbar-collapse collapse --> 
        
      </div>
      <!-- end .container --> 
    </nav>
    <!-- end .navbar --> 
    
  </header>
  <!-- end #header -->
  <div class="clearfix"></div>
  <!-- end .clearfix --> 
  
  <!-- Slider
================================================== -->
  <div id="rev_slider_fullwidth_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="scroll-effect76" style="background-color:#111111;padding:0px;">
    <div id="rev_slider_fullwidth" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.6">
      <ul>
        
        <!-- SLIDE 1  -->
        <li data-index="rs-1" data-transition="random-premium" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-thumb="<?php echo get_bloginfo('template_directory');?>/assets/images/slider/thumb/thumb1.jpg"  data-rotate="0"  data-fstransition="random-premium" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Thumb Title 1" data-description=""> 
          <!-- MAIN IMAGE --> 
          <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/slider/slider1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina> 
          <!-- LAYERS --> 
          
          <!-- LAYER NR. 1 -->
          <div class="tp-caption tp-resizeme rs-parallaxlevel-0" 
    id="slide-1-layer-1" 
    data-x="right" data-hoffset="100" 
    data-y="bottom" data-voffset="0" 
    data-width="none"
    data-height="none"
    data-whitespace="nowrap"
    data-transform_idle="o:1;"
    data-transform_in="y:10px;opacity:0;s:1500;e:Power3.easeInOut;" 
    data-transform_out="y:10px;opacity:0;s:1500;e:Power2.easeIn;" 
    data-start="500" 
    data-end="8000" 
    data-basealign="grid" 
    data-responsive_offset="on" 
    data-responsive="on"
    style="z-index: 6;"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/slider/item1.png" alt=""> </div>
          
          <!-- LAYER NR. 2 -->
          <div class="tp-caption theme-medium tp-resizeme rs-parallaxlevel-0" 
    id="slide-1-layer-2" 
    data-x="left" data-hoffset="100" 
    data-y="center" data-voffset="-135" 
    data-width="none"
    data-height="none"
    data-whitespace="nowrap"
    data-transform_idle="o:1;"
    data-transform_in="y:10px;opacity:0;s:1500;e:Power3.easeInOut;" 
    data-transform_out="y:-10px;opacity:0;s:1500;e:Power2.easeIn;" 
    data-start="1000" 
    data-end="8000" 
    data-splitin="none" 
    data-splitout="none" 
    data-basealign="grid" 
    data-responsive_offset="on" 
    data-responsive="on"
    style="z-index: 10;">Architecture Studio</div>
          
          <!-- LAYER NR. 3 -->
          <div class="tp-caption white-large tp-resizeme rs-parallaxlevel-0" 
    id="slide-1-layer-3" 
    data-x="left" data-hoffset="100" 
    data-y="center" data-voffset="-75" 
    data-width="none"
    data-height="none"
    data-whitespace="nowrap"
    data-transform_idle="o:1;"
    data-transform_in="y:10px;opacity:0;s:1500;e:Power3.easeInOut;" 
    data-transform_out="y:-10px;opacity:0;s:1500;e:Power2.easeIn;" 
    data-start="1500" 
    data-end="8000" 
    data-splitin="none" 
    data-splitout="none" 
    data-basealign="grid" 
    data-responsive_offset="on" 
    data-responsive="on"
    style="z-index: 10;">Welcome to STRUCT</div>
          
          <!-- LAYER NR. 4 -->
          <div class="tp-caption white-small tp-resizeme rs-parallaxlevel-0" 
    id="slide-1-layer-4" 
    data-x="left" data-hoffset="100" 
    data-y="center" data-voffset="0" 
    data-width="none"
    data-height="none"
    data-whitespace="nowrap"
    data-transform_idle="o:1;"
    data-transform_in="y:10px;opacity:0;s:1500;e:Power3.easeInOut;" 
    data-transform_out="y:-10px;opacity:0;s:1500;e:Power2.easeIn;" 
    data-start="2000" 
    data-end="8000" 
    data-splitin="none" 
    data-splitout="none" 
    data-basealign="grid" 
    data-responsive_offset="on" 
    data-responsive="on"
    style="z-index: 10;">STRUCT is a responsive HTML5 template built on Bootstrap.<br>
            It is a clean design and multipurpose template.</div>
          
          <!-- LAYER NR. 5 -->
          <div class="tp-caption btn btn-lg btn-theme tp-resizeme rs-parallaxlevel-0" 
    id="slide-1-layer-5" 
    data-x="left" data-hoffset="110" 
    data-y="center" data-voffset="85" 
    data-width="none"
    data-height="none"
    data-whitespace="nowrap"
    data-transform_idle="o:1;"
    data-transform_in="y:10px;opacity:0;s:1500;e:Power3.easeInOut;" 
    data-transform_out="y:-10px;opacity:0;s:1500;e:Power2.easeIn;" 
    data-start="2500" 
    data-end="8000" 
    data-splitin="none" 
    data-splitout="none" 
    data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]'
    data-basealign="grid" 
    data-responsive_offset="on" 
    data-responsive="on"
    style="z-index: 10;"><span><i class="fa fa-chevron-circle-right"></i></span>SCROLL BELOW </div>
        </li>
        
        <!-- SLIDE 2  -->
        <li data-index="rs-2" data-transition="random-premium" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-thumb="<?php echo get_bloginfo('template_directory');?>/assets/images/slider/thumb/thumb2.jpg"  data-rotate="0"  data-fstransition="random-premium" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Thumb Title 1" data-description=""> 
          <!-- MAIN IMAGE --> 
          <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/slider/slider2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina> 
          <!-- LAYERS --> 
          
          <!-- LAYER NR. 1 -->
          <div class="tp-caption tp-resizeme rs-parallaxlevel-0" 
    id="slide-2-layer-1" 
    data-x="left" data-hoffset="100" 
    data-y="bottom" data-voffset="0" 
    data-width="none"
    data-height="none"
    data-whitespace="nowrap"
    data-transform_idle="o:1;"
    data-transform_in="y:10px;opacity:0;s:1500;e:Power3.easeInOut;" 
    data-transform_out="y:10px;opacity:0;s:1500;e:Power2.easeIn;" 
    data-start="500" 
    data-end="8000" 
    data-basealign="grid" 
    data-responsive_offset="on" 
    data-responsive="on"
    style="z-index: 6;"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/slider/item2.png" alt=""> </div>
          
          <!-- LAYER NR. 2 -->
          <div class="tp-caption theme-medium tp-resizeme rs-parallaxlevel-0" 
    id="slide-2-layer-2" 
    data-x="right" data-hoffset="100" 
    data-y="center" data-voffset="-135" 
    data-width="none"
    data-height="none"
    data-whitespace="nowrap"
    data-transform_idle="o:1;"
    data-transform_in="y:10px;opacity:0;s:1500;e:Power3.easeInOut;" 
    data-transform_out="y:-10px;opacity:0;s:1500;e:Power2.easeIn;" 
    data-start="1000" 
    data-end="8000" 
    data-splitin="none" 
    data-splitout="none" 
    data-basealign="grid" 
    data-responsive_offset="on" 
    data-responsive="on"
    style="z-index: 10;">Architecture Studio</div>
          
          <!-- LAYER NR. 3 -->
          <div class="tp-caption white-large tp-resizeme rs-parallaxlevel-0" 
    id="slide-2-layer-3" 
    data-x="right" data-hoffset="100" 
    data-y="center" data-voffset="-75" 
    data-width="none"
    data-height="none"
    data-whitespace="nowrap"
    data-transform_idle="o:1;"
    data-transform_in="y:10px;opacity:0;s:1500;e:Power3.easeInOut;" 
    data-transform_out="y:-10px;opacity:0;s:1500;e:Power2.easeIn;" 
    data-start="1500" 
    data-end="8000" 
    data-splitin="none" 
    data-splitout="none" 
    data-basealign="grid" 
    data-responsive_offset="on" 
    data-responsive="on"
    style="z-index: 10;">Welcome to STRUCT</div>
          
          <!-- LAYER NR. 4 -->
          <div class="tp-caption white-small tp-resizeme rs-parallaxlevel-0" 
    id="slide-2-layer-4" 
    data-x="right" data-hoffset="100" 
    data-y="center" data-voffset="0" 
    data-width="none"
    data-height="none"
    data-whitespace="nowrap"
    data-transform_idle="o:1;"
    data-transform_in="y:10px;opacity:0;s:1500;e:Power3.easeInOut;" 
    data-transform_out="y:-10px;opacity:0;s:1500;e:Power2.easeIn;" 
    data-start="2000" 
    data-end="8000" 
    data-splitin="none" 
    data-splitout="none" 
    data-basealign="grid" 
    data-responsive_offset="on" 
    data-responsive="on"
    style="z-index: 10;">STRUCT is a responsive HTML5 template built on Bootstrap.<br>
            It is a clean design and multipurpose template.</div>
          
          <!-- LAYER NR. 5 --> 
          <a class="tp-caption btn btn-lg btn-theme tp-resizeme rs-parallaxlevel-0" href="about.html" 
    id="slide-2-layer-5" 
    data-x="right" data-hoffset="110" 
    data-y="center" data-voffset="85" 
    data-width="none"
    data-height="none"
    data-whitespace="nowrap"
    data-transform_idle="o:1;"
    data-transform_in="y:10px;opacity:0;s:1500;e:Power3.easeInOut;" 
    data-transform_out="y:-10px;opacity:0;s:1500;e:Power2.easeIn;" 
    data-start="2500" 
    data-end="8000" 
    data-splitin="none" 
    data-splitout="none" 
    data-actions=''
    data-basealign="grid" 
    data-responsive_offset="on" 
    data-responsive="on"
    style="z-index: 10;"><span><i class="fa fa-chevron-circle-right"></i></span>READ MORE</a> </li>
        
        <!-- SLIDE 3  -->
        <li data-index="rs-3" data-transition="random-premium" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-thumb="<?php echo get_bloginfo('template_directory');?>/assets/images/slider/thumb/thumb3.jpg"  data-rotate="0"  data-fstransition="random-premium" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Thumb Title 3" data-description=""> 
          <!-- MAIN IMAGE --> 
          <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/slider/slider3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina> 
          <!-- LAYERS --> 
          
          <!-- LAYER NR. 1 -->
          <div class="tp-caption theme-medium tp-resizeme rs-parallaxlevel-0" 
    id="slide-3-layer-1" 
    data-x="center" data-hoffset="0" 
    data-y="center" data-voffset="-135" 
    data-width="none"
    data-height="none"
    data-whitespace="nowrap"
    data-transform_idle="o:1;"
    data-transform_in="y:10px;opacity:0;s:1500;e:Power3.easeInOut;" 
    data-transform_out="y:-10px;opacity:0;s:1500;e:Power2.easeIn;" 
    data-start="1000" 
    data-end="8000" 
    data-splitin="none" 
    data-splitout="none" 
    data-basealign="grid" 
    data-responsive_offset="on" 
    data-responsive="on"
    style="z-index: 10;">Interior Design</div>
          
          <!-- LAYER NR. 2 -->
          <div class="tp-caption white-large tp-resizeme rs-parallaxlevel-0" 
    id="slide-3-layer-2" 
    data-x="center" data-hoffset="0" 
    data-y="center" data-voffset="-75" 
    data-width="none"
    data-height="none"
    data-whitespace="nowrap"
    data-transform_idle="o:1;"
    data-transform_in="y:10px;opacity:0;s:1500;e:Power3.easeInOut;" 
    data-transform_out="y:-10px;opacity:0;s:1500;e:Power2.easeIn;" 
    data-start="1500" 
    data-end="8000" 
    data-splitin="none" 
    data-splitout="none" 
    data-basealign="grid" 
    data-responsive_offset="on" 
    data-responsive="on"
    style="z-index: 10;">Welcome to STRUCT</div>
          
          <!-- LAYER NR. 3 -->
          <div class="tp-caption white-small tp-resizeme rs-parallaxlevel-0" 
    id="slide-3-layer-3" 
    data-x="center" data-hoffset="0" 
    data-y="center" data-voffset="0" 
    data-width="none"
    data-height="none"
    data-whitespace="nowrap"
    data-transform_idle="o:1;"
    data-transform_in="y:10px;opacity:0;s:1500;e:Power3.easeInOut;" 
    data-transform_out="y:-10px;opacity:0;s:1500;e:Power2.easeIn;" 
    data-start="2000" 
    data-end="8000" 
    data-splitin="none" 
    data-splitout="none" 
    data-basealign="grid" 
    data-responsive_offset="on" 
    data-responsive="on"
    style="z-index: 10;">STRUCT is a responsive HTML5 template built on Bootstrap.<br>
            It is a clean design and multipurpose template.</div>
          
          <!-- LAYER NR. 4 --> 
          <a class="tp-caption btn btn-lg btn-theme tp-resizeme rs-parallaxlevel-0" href="about.html" 
    id="slide-3-layer-4" 
    data-x="center" data-hoffset="0" 
    data-y="center" data-voffset="85" 
    data-width="none"
    data-height="none"
    data-whitespace="nowrap"
    data-transform_idle="o:1;"
    data-transform_in="y:10px;opacity:0;s:1500;e:Power3.easeInOut;" 
    data-transform_out="y:-10px;opacity:0;s:1500;e:Power2.easeIn;" 
    data-start="2500" 
    data-end="8000" 
    data-splitin="none" 
    data-splitout="none" 
    data-actions=''
    data-basealign="grid" 
    data-responsive_offset="on" 
    data-responsive="on"
    style="z-index: 10;"><span><i class="fa fa-chevron-circle-right"></i></span>READ MORE</a> </li>
      </ul>
      <div class="tp-static-layers"></div>
      <div class="tp-bannertimer" style="visibility: hidden !important;"></div>
    </div>
    <!-- end #rev_slider_fullwidth --> 
  </div>
  <!-- end #rev_slider_fullwidth_wrapper -->
  
  <div class="mb-100 clearfix"></div>
  <!-- end .mb-100 clearfix --> 
  
  <!-- About Our Studio
================================================== -->
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="mt-120">
          <figure class="effect-phoebe"> <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/features/studio1-thumb.jpg" alt=""/>
            <figcaption>
              <p> <a href="#"><i class="fa fa-link effect-8"></i></a> <a class="nivo-lightbox" href="<?php echo get_bloginfo('template_directory');?>/assets/images/features/studio1.jpg" title="This is an image title"><i class="fa fa-search effect-8"></i></a> </p>
            </figcaption>
          </figure>
          <div class="clearfix"></div>
          <div class="photo-title2 text-left2">
            <h5>Studio in <span class="text-theme">New York</span></h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            <p><a href="#" class="btn btn-theme"><span><i class="fa fa-chevron-circle-right"></i></span>Read More</a></p>
          </div>
          <!-- end .photo-title --> 
        </div>
        <!-- end .mt-120 --> 
      </div>
      <!-- end .col-md-4 -->
      
      <div class="col-md-4">
        <div class="mt-120">
          <figure class="effect-phoebe"> <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/features/studio2-thumb.jpg" alt=""/>
            <figcaption>
              <p> <a href="#"><i class="fa fa-link effect-8"></i></a> <a class="nivo-lightbox" href="<?php echo get_bloginfo('template_directory');?>/assets/images/features/studio2.jpg" title="This is an image title"><i class="fa fa-search effect-8"></i></a> </p>
            </figcaption>
          </figure>
          <div class="clearfix"></div>
          <div class="photo-title2 text-left2">
            <h5>Studio in <span class="text-theme">Paris</span></h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            <p><a href="#" class="btn btn-theme"><span><i class="fa fa-chevron-circle-right"></i></span>Read More</a></p>
          </div>
          <!-- end .photo-title --> 
        </div>
        <!-- end .mt-120 --> 
      </div>
      <!-- end .col-md-4 -->
      
      <div class="col-md-4">
        <div class="mt-120">
          <figure class="effect-phoebe"> <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/features/studio3-thumb.jpg" alt=""/>
            <figcaption>
              <p> <a href="#"><i class="fa fa-link effect-8"></i></a> <a class="nivo-lightbox" href="<?php echo get_bloginfo('template_directory');?>/assets/images/features/studio3.jpg" title="This is an image title"><i class="fa fa-search effect-8"></i></a> </p>
            </figcaption>
          </figure>
          <div class="clearfix"></div>
          <div class="photo-title2 text-left2">
            <h5>Studio in <span class="text-theme">London</span></h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            <p><a href="#" class="btn btn-theme"><span><i class="fa fa-chevron-circle-right"></i></span>Read More</a></p>
          </div>
          <!-- end .photo-title --> 
        </div>
        <!-- end .mt-120 --> 
      </div>
      <!-- end .col-md-4 --> 
      
    </div>
    <!-- end .row --> 
    
  </div>
  <!-- end .container -->
  <div class="mb-100"></div>
  <!-- end .mb-100 --> 
  
  <!-- Wide Box Gray
================================================== -->
  <div class="widebox-gray">
    <div class="absolute-left"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/features/absolute-left.png" alt="" /></div>
    <!-- end .absolute-left -->
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 hidden-sm hidden-xs"> </div>
        <!-- end .col-md-6 -->
        
        <div class="col-md-6 widebox-gray-content">
          <div class="row">
            <div class="col-md-12">
              <h3><span class="text-theme">STRUCT</span> - HTML5 Template <span class="rw-words rw-words-1"> <span>Responsive </span><span>Multi-Purpose</span><span>Interior Design</span><span>Architecture Studio</span><span>Built on Bootstrap</span> </span> 
                <!-- end .rw-words --> 
              </h3>
              <div class="titleline"></div>
              <!-- end .titleline -->
              
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
              <div class="mb-30"></div>
              <!-- end .mb-30 --> 
              <a href="#" class="btn btn-theme"><span><i class="fa fa-chevron-circle-right"></i></span>Read More</a> </div>
            <!-- end .col-md-12 --> 
            
          </div>
          <!-- end .row --> 
          
        </div>
        <!-- end .col-md-6 --> 
        
      </div>
      <!-- end .row --> 
    </div>
    <!-- end .container-fluid --> 
    
  </div>
  <!-- end .widebox-gray --> 
  
  <!-- Parallax Black
================================================== -->
  <div class="parallax-black">
    <div class="parallax-overlay-black text-white">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-3">
            <div class="chartbox">
              <div class="chartbox-icon"><a href="#"><i class="fa fa-male"></i></a></div>
              <p><span class="chart" data-percent="50000"><span class="percent"></span></span></p>
              <p>Customers</p>
            </div>
            <!-- end .chartbox --> 
          </div>
          <!-- end .col-md-3 -->
          
          <div class="col-md-3">
            <div class="chartbox">
              <div class="chartbox-icon"><a href="#"><i class="fa fa-users"></i></a></div>
              <p><span class="chart" data-percent="5000"><span class="percent"></span></span></p>
              <p>Users</p>
            </div>
            <!-- end .chartbox --> 
          </div>
          <!-- end .col-md-3 -->
          
          <div class="col-md-3">
            <div class="chartbox">
              <div class="chartbox-icon"><a href="#"><i class="fa fa-shopping-bag"></i></a></div>
              <p><span class="chart" data-percent="500"><span class="percent"></span></span></p>
              <p>Shopping</p>
            </div>
            <!-- end .chartbox --> 
          </div>
          <!-- end .col-md-3 -->
          
          <div class="col-md-3">
            <div class="chartbox">
              <div class="chartbox-icon"><a href="#"><i class="fa fa-shopping-cart"></i></a></div>
              <p><span class="chart" data-percent="50"><span class="percent"></span></span></p>
              <p>Cart</p>
            </div>
            <!-- end .chartbox --> 
          </div>
          <!-- end .col-md-3 --> 
          
        </div>
        <!-- end .row --> 
        
      </div>
      <!-- end .container --> 
      
    </div>
    <!-- end .parallax-overlay-black --> 
  </div>
  <!-- end .parallax-black -->
  
  <div class="mb-100"></div>
  <!-- end .mb-100 --> 
  
  <!-- About Us
================================================== -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="subtitle">What We Do</div>
        <!-- end .subtitle -->
        <h3>Latest Project</h3>
        <div class="titleline-icon"></div>
        <!-- end .titleline-icon -->
        
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <!-- end .col-md-12 --> 
    </div>
    <!-- end .row -->
    
    <div class="row">
      <div class="col-md-6">
        <h4>Why Choose Us</h4>
        <div class="titleline"></div>
        <!-- end .titleline -->
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
        <div class="mb-20"></div>
        <!-- end .mb-20 -->
        
        <div class="owl-single owl-carousel owl-theme">
          <div class="item"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/features/studio4-thumb.jpg" alt="" /></div>
          <div class="item"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/features/studio5-thumb.jpg" alt="" /></div>
          <div class="item"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/features/studio6-thumb.jpg" alt="" /></div>
        </div>
        <!-- end .owl-single -->
        
        <div class="mb-40"></div>
        <!-- end .mb-40 --> 
        
      </div>
      <!-- end .col-md-6 -->
      
      <div class="col-md-6">
        <div class="photobox1">
          <figure class="effect-phoebe"> <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/features/photobox1-thumb.jpg" alt=""/>
            <figcaption>
              <p> <a href="#"><i class="fa fa-link effect-8"></i></a> <a class="nivo-lightbox" href="<?php echo get_bloginfo('template_directory');?>/assets/images/features/photobox1.jpg" title="This is an image title"><i class="fa fa-search effect-8"></i></a> </p>
            </figcaption>
          </figure>
          <div class="photobox1-content">
            <h4>Project 1</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p><a href="#" class="btn btn-theme"><span><i class="fa fa-chevron-circle-right"></i></span>Read More</a></p>
          </div>
          <!-- end .photobox1-content --> 
        </div>
        <!-- end .photobox1 -->
        
        <div class="photobox1">
          <figure class="effect-phoebe"> <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/features/photobox2-thumb.jpg" alt=""/>
            <figcaption>
              <p> <a href="#"><i class="fa fa-link effect-8"></i></a> <a class="nivo-lightbox" href="<?php echo get_bloginfo('template_directory');?>/assets/images/features/photobox2.jpg" title="This is an image title"><i class="fa fa-search effect-8"></i></a> </p>
            </figcaption>
          </figure>
          <div class="photobox1-content">
            <h4>Project 2</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p><a href="#" class="btn btn-theme"><span><i class="fa fa-chevron-circle-right"></i></span>Read More</a></p>
          </div>
          <!-- end .photobox1-content --> 
        </div>
        <!-- end .photobox1 -->
        
        <div class="photobox1">
          <figure class="effect-phoebe"> <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/features/photobox3-thumb.jpg" alt=""/>
            <figcaption>
              <p> <a href="#"><i class="fa fa-link effect-8"></i></a> <a class="nivo-lightbox" href="<?php echo get_bloginfo('template_directory');?>/assets/images/features/photobox3.jpg" title="This is an image title"><i class="fa fa-search effect-8"></i></a> </p>
            </figcaption>
          </figure>
          <div class="photobox1-content">
            <h4>Project 3</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p><a href="#" class="btn btn-theme"><span><i class="fa fa-chevron-circle-right"></i></span>Read More</a></p>
          </div>
          <!-- end .photobox1-content --> 
        </div>
        <!-- end .photobox1 --> 
        
      </div>
      <!-- end .col-md-6 --> 
      
    </div>
    <!-- end .row --> 
  </div>
  <!-- end .container -->
  <div class="mb-100"></div>
  <!-- end .mb-100 --> 
  
  <!-- Footer Top
================================================== -->
  <div id="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="footer-top-left"> </div>
          <!-- end .footer-top-left --> 
        </div>
        <!-- end .col-md-4 -->
        
        <div class="col-md-8">
          <div class="footer-top-right"></div>
          <!-- end .footer-top-right --> 
        </div>
        <!-- end .col-md-8 --> 
        
      </div>
      <!-- end .row --> 
    </div>
    <!-- end .container --> 
  </div>
  <!-- end #footer-top --> 
  
  <!-- Footer
================================================== -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="footer-about"> <a href="index-2.html"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/logo-footer.png" alt="" /></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
            <div class="mb-20"></div>
            <!-- end .mb-20 -->
            <ul class="social-icons social-color">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-flickr"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <!-- end .footer-about --> 
        </div>
        <!-- end .col-md-3 -->
        
        <div class="col-md-3">
          <h4>Popular Posts</h4>
          <div class="titleline-footer"></div>
          <!-- end .titleline-footer -->
          <ul class="footer-list">
            <li><i class="fa fa-angle-right"></i><a href="#">Who we are</a></li>
            <li><i class="fa fa-angle-right"></i><a href="#">About Our Company</a></li>
            <li><i class="fa fa-angle-right"></i><a href="#">The Latest News</a></li>
            <li><i class="fa fa-angle-right"></i><a href="#">Our Features</a></li>
          </ul>
        </div>
        <!-- end .col-md-3 -->
        
        <div class="col-md-3">
          <h4>Flickr Photostream</h4>
          <div class="titleline-footer"></div>
          <!-- end .titleline-footer -->
          <ul class="flickr-cbox flickr-thumbs">
          </ul>
          <!-- end .flickr-cbox .flickr-thumbs --> 
        </div>
        <!-- end .col-md-3 -->
        
        <div class="col-md-3">
          <h4>Contact Us</h4>
          <div class="titleline-footer"></div>
          <!-- end .titleline-footer -->
          <ul class="footer-list">
            <li><i class="fa fa-map-marker"></i><span>Address:</span><br>
              123 Street, City, United States</li>
            <li><i class="fa fa-phone"></i><span>Phone number:</span><br>
              (123) 456-7890</li>
            <li><i class="fa fa-envelope"></i><span>E-mail:</span><br>
              <a href="mailto:#">mail@example.com</a></li>
          </ul>
        </div>
        <!-- end .col-md-3 --> 
      </div>
      <!-- end .row --> 
    </div>
    <!-- end .container --> 
  </footer>
  <!-- end #footer --> 
  
  <!-- Copyright
================================================== -->
  <div id="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="copyright">&copy; 2016 STRUCT. All Rights Reserved.</div>
          <!-- end .copyright --> 
        </div>
        <!-- end .col-md-8 -->
        
        <div class="col-md-4">
          <ul class="copyright-link">
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="sitemap.html">Sitemap</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <!-- end .col-md-4 --> 
        
      </div>
      <!-- end .row --> 
    </div>
    <!-- end .container --> 
  </div>
  <!-- end #copyright --> 
  
  <a href="#" class="back-to-top">Back to Top</a> </div>
<!-- end #boxed-layout --> 

<?php wp_footer(); ?>

</body>

</html>