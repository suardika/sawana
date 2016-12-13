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
		
		<article class="card">
			<div class="card-content">
				<h1>Our Recipes</h1>

				<?php 

				$query 					=	new WP_Query(array(
					'post_type'			=>	'recipe',
					'posts_per_page'	=>	3,
					'orderby'			=>	'rand'
				));

				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post(); 

						?>
						<a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a><br>
						<?php
						wp_reset_postdata();
					}
				}

				?>

			</div>
		</article>

        <hr>
        <div class="mb-30"></div>
        <!-- end .mb-30 --> 
        
        <!-- PAGINATION -->

        <?php 
          if (function_exists("wp_bs_pagination"))
            {
              //wp_bs_pagination($the_query->max_num_pages);
              wp_bs_pagination();
            }
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