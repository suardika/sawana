<?php get_header() ?>

  <!-- Page Title -->
  <div class="pagetitle">
    <div class="pagetitle-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Blog Middle</h1>
          <ul class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index-2.html">Home</a></li>
            <li class="active"><i class="fa fa-pencil"></i>Blog Middle</li>
          </ul>
        </div>
        <!-- end .col-md-12 --> 
      </div>
      <!-- end .row --> 
    </div>
    <!-- end .container --> 
    </div>
    <!-- end .pagetitle-overlay --> 
  </div>
  <!-- end .pagetitle -->
  <div class="mb-100"></div>
  <!-- end .mb-100 --> 
  
  <!-- Blog Middle-->
  
  <div class="container">
    <div class="row">
      <div class="col-md-9">

        <?php 
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post(); 
                ?>
                <div class="blog-post-middle">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="blog-photo">

                        <?php
                          if(has_post_thumbnail()) {
                            ?>

                              <figure class="effect-phoebe">
                                <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>                       
                                <figcaption>
                                  <p><a href="<?php the_permalink(); ?>"><i class="fa fa-link effect-8"></i></a> <a class="nivo-lightbox" href="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" title="<?php the_title_attribute(); ?>"><i class="fa fa-search effect-8"></i></a></p>
                                </figcaption>
                              </figure>

                            <?php
                          }
                        ?>


                        <div class="clearfix"></div>
                        <!-- end .clearfix -->
                        <div class="blog-info">
                          <p><?php the_time( 'd M' ); ?></p>
                        </div>
                        <!-- end .blog-info --> 
                      </div>
                      <!-- end .blog-photo --> 
                    </div>
                    <!-- end .col-md-4 -->
                    
                    <div class="col-md-8">
                      <div class="blog-title">
                        <div class="blog-title-icon"><span><i class="fa fa-file-image-o"></i></span></div>
                        <!-- end .blog-title-icon -->
                        <div class="blog-title-body">
                          <h3><?php the_title(); ?></h3>
                          <span><i class="fa fa-user"></i><a href="#"> by Author</a></span> <span><i class="fa fa-comments-o"></i><a href="#"> 2 Comments</a></span> </div>
                        <!-- end .blog-title-body --> 
                      </div>
                      <!-- end .blog-title -->
                      <div class="clearfix"></div>
                      <!-- end .clearfix -->
                      
                      <div class="blog-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p><a href="#" class="btn btn-theme"><span><i class="fa fa-chevron-circle-right"></i></span>Read More</a></p>
                      </div>
                      <!-- end .blog-content --> 
                    </div>
                    <!-- end .col-md-8 -->             
                  </div>
                  <!-- end .row --> 
                </div>
                <?php

            } // end while
          } // end if
        ?>
      
        <hr>
        <div class="mb-30"></div>
        <!-- end .mb-30 --> 
        
        <!-- PAGINATION -->
        <ul class="pagination">
          <li><a href="#">&laquo;</a></li>
          <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
      <!-- end .col-md-9 --> 
      
      <!-- SIDEBAR START -->
      <div class="col-md-3">
        <?php get_sidebar(); ?>
      </div> 
      <!-- SIDEBAR END -->       
    </div>
    <!-- end .row --> 
  </div>
  <!-- end .container -->
  <div class="mb-100"></div>
  <!-- end .mb-100 --> 
  
<?php get_footer() ?>