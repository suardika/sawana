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

          <?php
            $theme_opts = get_option('sw_opts');
          ?>

          <div class="copyright"><?php echo $theme_opts['footer']; ?></div>
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