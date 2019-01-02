<!-- Footer -->
<footer id="mainFtr">
  <div class="footerSite">
    <div class="footerSite__left">
      <h2>Talk With Us</h2>
      
      <?php echo do_shortcode( '[contact-form-7 id="492" title="Footer Contact Form"]' ); ?>

    </div> <!-- END footerSite__left -->

    <div class="footerSite__right">

      <div class="bloc bloc--50">
        <h2>More LABOV</h2>
        <div class="more-labov">
          <ul>
            <li><a href="<?php echo site_url("news") ?>">News &amp; Insights</a></li>
            <li><a href="<?php echo site_url("about") ?>">About</a></li>
            <li><a href="<?php echo site_url("capabilities") ?>">Capabilities</a></li>
          </ul>
          <div class="social-icons">
            <a href="https://www.facebook.com/LaBovandBeyond/" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.linkedin.com/company/labov-&-beyond/" target="_blank"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
        <h2>260.497.0111</h2>
          <?php /*<img src="<?php echo get_template_directory_uri() ?>/assets/img/Logo.svg" alt="LABOV" class="logo">*/ ?>
          <div class="addr">
            <a href="https://goo.gl/maps/ryYtzhs7zrC2" target="_blank" class="map-marker">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/map-icon.png" alt="map-marker">
            </a>
            <address>609 E. Cook Rd.<br>Ft. Wayne, In 46825</address>
          </div>
      </div> <!-- END Left Half -->

      <div class="bloc bloc--50">
        <div class="clearfix contact-info">
          <h2>Contact Us</h2>
          <h5>Business Development</h5>
          <p class="ci__name">Ted Mekianov</p>
          <p>Business Development Director</p>
          <p><a href="mailto:tmekianov@labov.com">tmekianov@labov.com</a></p>
          <p class="ci__numbr">260.497.3005</p>
          <h5>Media Contact</h5>
          <p><a href="mailto:pr@labov.com">pr@labov.com</a><br> 260.497.0111 (ext. 242)</p>
          <h5 class="hdr--emp">Employment</h5>
          <p><a href="mailto:hr@labov.com">hr@labov.com</a></p>
        </div>            
      </div> <!-- END Right Half -->
    </div> <!-- END footerSite__right -->
  
    <div class="footerSite__legal">
      <p class="copyright">© <?php echo date("Y") ?> LABOV Marketing Communications and Training. All Rights Reserved.</p>
    </div>
  
  </div> <!-- END .footerSite -->

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/rotateWords.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.colorbox-min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/scrollreveal.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/smooth-scroll.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63170690-1', 'auto');
  ga('send', 'pageview');
</script>

<?php wp_footer() ?>

</body>
</html>
