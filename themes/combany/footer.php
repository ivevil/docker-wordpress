<?php

/**
 *
 * Footer 
 *
 * @package combany
 * @subpackage combany
 * @since Combany 1.0
 */
?>
  <footer>
    <div class="combany__footer-top">
      <a href="#"><img src="<?= get_template_directory_uri() ?>/images/logo.png" alt=""></a>
    </div>
    <div class="combany__footer-middle">

      <div class="combany__footer-middle-wrapper">
        <img src="<?= get_template_directory_uri() ?>/images/icon-mobile.png" alt="">
        <div class="combany__footer-middle-call">
          <h3><?= get_theme_mod('combany_footer_phone') != '' ? get_theme_mod('combany_footer_phone') : '+49 1 23456789' ?></h3>
          <a href="tel:<?= get_theme_mod('combany_footer_phone') != '' ? get_theme_mod('combany_footer_phone') : '+49123456789' ?>">
            <h4>Give us a call</h4>
          </a>
        </div>
      </div>
      <div class="combany__footer-middle-wrapper">
        <img src="<?= get_template_directory_uri() ?>/images/icon-envelope.png" alt="">
        <div class="combany__footer-middle-email">
          <h3><?= get_theme_mod('combany_footer_email') != '' ? get_theme_mod('combany_footer_email') : 'contact@combany.com' ?></h3>
          <a href="mailto:<?= get_theme_mod('combany_footer_email') != '' ? get_theme_mod('combany_footer_email') : 'contact@combany.com' ?>">
            <h4>Send us a Message</h4>
          </a>
        </div>
      </div>
      <div class="combany__footer-middle-wrapper">
        <img src="<?= get_template_directory_uri() ?>/images/icon-pin.png" alt="">
        <div class="combany__footer-middle-pin">
          <h3><?= get_theme_mod('combany_footer_location') != '' ? get_theme_mod('combany_footer_location') : 'Karlsplatz, Wuppertal' ?></h3>
          <a href="">
            <h4>Get all the information</h4>
          </a>
        </div>
      </div>
    </div>
    <div class="combany__footer-bottom">
      <div class="combany__footer-bottom-copyright">
        © <?= date(Y); ?> <?php bloginfo('name'); ?>. All rights reserved.
      </div>
      <div class="combany__footer-bottom-back-to-top">
        <a href="#" id="back-to-top"><img src="<?= get_template_directory_uri() ?>/images/back-to-top.png" alt=""></a>
      </div>
      <div class="combany__footer-bottom-social">
        <?php if (get_theme_mod('combany_footer_facebook') != '') : ?>
          <a href="<?= get_theme_mod('combany_footer_facebook') != '' ? get_theme_mod('combany_footer_facebook') : 'https://facebook.com/page/combany' ?>">
            <div class="combany__fb-icon"></div>
          </a>
        <?php endif; ?>
        <?php if (get_theme_mod('combany_footer_instagram') != '') : ?>
          <a href="<?= get_theme_mod('combany_footer_instagram') != '' ? get_theme_mod('combany_footer_instagram') : 'https://instagram.com/combany' ?>">
            <div class="combany__insta-icon"></div>
          </a>
        <?php endif; ?>
        <?php if (get_theme_mod('combany_footer_linkedin') != '') : ?>
          <a href="<?= get_theme_mod('combany_footer_linkedin') != '' ? get_theme_mod('combany_footer_linkedin') : 'https://linkedin.com/combany' ?>">
            <div class="combany__linkedin-icon"></div>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

  </body>

  </html>