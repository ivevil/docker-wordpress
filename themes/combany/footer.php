  <footer>
    <div class="combany__footer-top">
      <a href="#"><img src="<?= get_template_directory_uri() ?>/images/logo.png" alt=""></a>
    </div>
    <div class="combany__footer-middle">

      <div class="combany__footer-middle-wrapper">
        <img src="<?= get_template_directory_uri() ?>/images/icon-mobile.png" alt="">
        <div class="combany__footer-middle-call">
          <h3>+49 1 23456789</h3>
          <a href="tel:+49123456789">
            <h4>Give us a call</h4>
          </a>
        </div>
      </div>
      <div class="combany__footer-middle-wrapper">
        <img src="<?= get_template_directory_uri() ?>/images/icon-envelope.png" alt="">
        <div class="combany__footer-middle-email">
          <h3>contact@combany.com</h3>
          <a href="mailto:contact@combany.com">
            <h4>Send us a Message</h4>
          </a>
        </div>
      </div>
      <div class="combany__footer-middle-wrapper">
        <img src="<?= get_template_directory_uri() ?>/images/icon-pin.png" alt="">
        <div class="combany__footer-middle-pin">
          <h3>Karlsplatz, Wuppertal</h3>
          <a href="">
            <h4>Get all the information</h4>
          </a>
        </div>
      </div>
    </div>
    <div class="combany__footer-bottom">
      <div class="combany__footer-bottom-copyright">
        © <?= date(Y); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
      </div>
      <div class="combany__footer-bottom-back-to-top">
        <a href="#" id="back-to-top"><img src="<?= get_template_directory_uri() ?>/images/back-to-top.png" alt=""></a>
      </div>
      <div class="combany__footer-bottom-social">
        <a href="https://www.facebook.com/">
          <div class="combany__fb-icon"></div>
        </a>
        <a href="https://www.instagram.com/">
          <div class="combany__insta-icon"></div>
        </a>
        <a href="https://www.linkedin.com/">
          <div class="combany__linkedin-icon"></div>
        </a>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>

</body>
</html>