<?php
$theme_opts = get_option('sw_opts');
?>

<!doctype html>
<!--[if !IE]>
<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="icon" href="<?php echo get_bloginfo('template_directory');?>/assets/images/favicon.ico">
  <title><?php wp_title(); ?></title>
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

            <?php
              if(!empty($theme_opts['twitter'])) {
                ?><li><a href="https://twitter.com/<?php echo $theme_opts['twitter']; ?>"><i class="fa fa-twitter"></i></a></li><?php
              }
              if(!empty($theme_opts['facebook'])) {
                ?><li><a href="https://facebook.com/<?php echo $theme_opts['facebook']; ?>"><i class="fa fa-facebook"></i></a></li><?php
              }
              if(!empty($theme_opts['youtube'])) {
                ?><li><a href="https://youtube.com/user/<?php echo $theme_opts['youtube']; ?>"><i class="fa fa-youtube"></i></a></li><?php
              }
            ?>
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

            <?php
              if($theme_opts['logo_type'] == 1) {
                ?><a class="navbar-brand" href="index-2.html"><?php bloginfo('name'); ?></a><?php
              }else{
                ?><a class="navbar-brand" href="index-2.html"><img src="<?php echo $theme_opts['logo_img']; ?>"></a><?php
              }
            ?>

        </div>
        <!-- end .navbar-header --> 
      
        <div class="navbar-collapse collapse">

          <?php
            // wp_nav_menu( array(
            //     'menu'              => 'primary',
            //     'theme_location'    => 'primary',
            //     'depth'             => 4,
            //     'container'         => false,
            //     'menu_class'        => 'nav navbar-nav',
            //     'fallback_cb'       => 'Yamm_Fw_Nav_Walker_menu_fallback',
            //     'walker'            => new Yamm_Fw_Nav_Walker())
            // );
          ?>          

          <?php
            $args = array(
              'menu'              =>  'primary',
              'menu_class'        =>  'nav navbar-nav',
              'container'         =>  'false',
              // 'walker'            =>  new WPT_Custom_Walker_Nav_Menu
              'walker'            =>  new wp_bootstrap_navwalker              
            );
            wp_nav_menu( $args );
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