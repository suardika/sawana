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
			        <div class="blog-post">
			          <div class="blog-photo">
                        <?php
                          if(has_post_thumbnail()) {
                            ?>
					            <figure class="effect-phoebe">
					            	<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
									<figcaption>
										<p>
											<a href="<?php the_permalink(); ?>"><i class="fa fa-link effect-8"></i></a>
											<a class="nivo-lightbox" href="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" title="<?php the_title_attribute(); ?>"><i class="fa fa-search effect-8"></i></a>
										</p>
									</figcaption>
					            </figure>
                            <?php
                          }
                        ?>
			            <div class="clearfix"></div>
			            <!-- end .clearfix -->
			            
			            <div class="blog-info">
			              <p><?php the_time(d); ?><span><?php echo strtoupper(get_the_time(M));?></span></p>
			            </div>
			            <!-- end .blog-info --> 
			          </div>
			          <!-- end .blog-photo -->
			          <div class="blog-title">
			            <div class="blog-title-icon"><span><i class="fa fa-file-image-o"></i></span></div>


                        <!-- end .blog-title-icon -->
                        <div class="blog-title-body">
                          <h3><?php the_title(); ?></h3>
                          <span><i class="fa fa-calendar"></i><a><?php echo sprintf(get_the_time('jS F Y')); ?></a></span>
                          <span><i class="fa fa-user"></i><a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></span>
                          <span><i class="fa fa-comments-o"></i><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></span>
                          <span><i class="fa fa-comments-o"></i><a href="<?php get_category_link( $category_id ); ?>"><?php the_category(','); ?></a></span>
                        </div>
                        <!-- end .blog-title-body --> 

			          </div>
			          <!-- end .blog-title -->
			          <div class="clearfix"></div>
			          <!-- end .clearfix -->
			          <div class="blog-content">
			            <p><?php the_content(); ?></p>
			            <?php wp_link_pages(array(
			            	'before'           => '<p class="text-center">' . __( 'Pages:' ),
			            )); ?>
			            <p><?php the_tags(); ?></p>
			          </div>
			          <!-- end .blog-content --> 
			          <?php sawana_post_nav(); ?>
			        </div>
			    	<?php comment_form(); ?>

			    	<div class="mb-100"></div>
                <?php
            } // end while
          } // end if
        ?>

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