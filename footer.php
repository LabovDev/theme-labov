<!-- Footer -->
<footer>
    <div class="wrap clearfix">
        <div class="left">
            <h2>Talk With Us</h2>
            <?php
            $spam = false;
            $errors = array();
            $sent = false;

            if (isset($_POST['address'])) {

              if ($_POST['address'] != '') { // "address" is our honeypot field
                $spam = true;
              }

              if (!$spam) {
                $to = 'blabov@labov.com';
                $to = 'tmekianov@labov.com';
                //$to 'tommy@cancelprint.com';
                //$to = 'jtuck@labov.com';

                $subject = 'New LABOV.com Contact';

                $msg = 'Name: ' . $_POST['full_name'];
                $msg = 'Email: ' . $_POST['email_address'];
                $msg = 'Phone Number: ' . $_POST['phone_number'];
                $msg = 'Message: ' . "\r\n" . $_POST['message'];

                $headers = 'From: LABOV <no-reply@labov.com>' . "\r\n" . 'Reply-To: ' . $email;

                if($_POST['full_name'] == '') {
                  $errors[] = 'Please enter your name';
                }
                if($_POST['email_address'] == '') {
                  $errors[] = 'Please enter a valid email address';
                }
              }

              if (count($errors) == 0) {
                if(!$spam) {
                  mail($to, $subject, $msg, $headers);
                }
                $sent = true; // set to sent even if it was spam, so they think it went through
                $_POST = array();
              }

            }

            ?>
            <?php if (count($errors) > 0): ?>
            <div class="form-errors">
              <?php foreach ($errors as $key => $value): ?>
              <p><?=$value?></p>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <?php if ($sent == true): ?>
            <div class="form-sent">
              Thank you for contacting us!
            </div>
            <?php endif; ?>

            <form id="contact-form" method="post" action="./#contact-form">
              <input type="text" name="address" value="" placeholder="Address" id="address">
              <div class="underline"><input type="text" name="full_name" value="<?php echo htmlspecialchars($_POST['full_name']) ?>" placeholder="Name"></div>
              <div class="underline"><input type="text" name="email_address" value="<?php echo htmlspecialchars($_POST['email_address']) ?>" placeholder="Email"></div>
              <div class="underline"><input type="text" name="phone_number" value="<?php echo htmlspecialchars($_POST['phone_number']) ?>" placeholder="Phone"></div>
              <div class="underline"><textarea name="message" placeholder="Message"><?php echo htmlspecialchars($_POST['message']) ?></textarea></div>
              <div class="g-recaptcha" data-sitekey="6LdavB0UAAAAAPtS6r2hIuXcuYVu1uPK2EQgYjnv"></div>
              <input type="submit" name="dosubmit" value="Send">
            </form>

        </div>
        <div class="right">
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

            <h2>Contact Us</h2>
            <div class="clearfix">
                  <?php /*<img src="<?php echo get_template_directory_uri() ?>/assets/img/Logo.svg" alt="LABOV" class="logo">*/ ?>
                  <div class="addr">
                    <a href="https://goo.gl/maps/ryYtzhs7zrC2" target="_blank" class="map-marker"><img src="<?php echo get_template_directory_uri() ?>/assets/img/map-icon.png" alt="map-marker"></a>
                    609 E. Cook Rd.<br>
                    Ft. Wayne, In 46825
                </div>
            </div>
            <div class="clearfix contact-info">
                <div class="left">
                    <h5>Business Development</h5>
                    <p>
                        Ted Mekianov<br>
                        Business Development Director<br>
                        <a href="mailto:tmekianov@labov.com">tmekianov@labov.com</a><br>
                        260.497.3005
                    </p>
                </div>
                <div class="right">
                    <h5>Media Contact</h5>
                    <p>
                        <a href="mailto:pr@labov.com">pr@labov.com</a><br>
                        260.497.0111 (ext. 242)
                    </p>

                    <h5 class="hdr--emp">Employment</h5>
                    <p>
                        <a href="mailto:hr@labov.com">hr@labov.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap">
        <p class="copyright">© <?php echo date("Y") ?> LABOV Marketing Communications and Training.
        <p class="copyright">All Rights Reserved.</p>
    </div>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/rotateWords.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.colorbox-min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/scrollreveal.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>

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
