<?php get_header();
?>
      <div class="combany__header-title-wrapper">
        <h2 class="combany__header-title"><?= get_theme_mod('main_title') != '' ? get_theme_mod('main_title') : 'Present your company' ?></h2>
			<a href="<?= get_theme_mod('main_button_url') != '' ? get_theme_mod('main_button_url') : 'https://google.com' ?>">
				<button class="btn" type="button" name="button"><?= get_theme_mod('main_button') != '' ? get_theme_mod('main_button') : "Let's go digital" ?></button>
			</a>
      </div>
	<?php if(get_theme_mod('combany_first_section_display') == '' || get_theme_mod('combany_first_section_display') == 'Yes'): ?>
      <div class="combany__section-our-services">
        <hr class="primary">
        <div class="combany__section-our-services-title">
          <?= get_theme_mod('combany_our_services_title') != '' ? get_theme_mod('combany_our_services_title') : "Our Services" ?>
        </div>
        <div class="combany__section-our-services-boxes">
			<?php for($i = 1; $i < 4; $i++): ?>
          <div class="combany__section-our-services-box">
            <?php 
            $imgadded = get_theme_mod('combany_' . $i . '_image');
            $imgUrl = get_theme_mod('combany_' . $i . '_image') != '' ? wp_get_attachment_image_url(get_theme_mod('combany_' . $i . '_image')) : get_template_directory_uri() . "/images/web-design.png";
            ?>
            <img src="<?= $imgUrl ?>" alt="Service <?= $i ?>">
            <h2><?= get_theme_mod('combany_' . $i . '_title') != '' ? get_theme_mod('combany_' . $i . '_title') : "Our Services" ?></h2>
            <h6><?= get_theme_mod('combany_' . $i . '_description') != '' ? get_theme_mod('combany_' . $i . '_description') : "State of the art front-end applications
              and back-end systems." ?></h6>
            	<a href="<?= get_theme_mod('combany_' . $i . '_button_url') != '' ? get_theme_mod('combany_' . $i . '_button_url') : "https://google.com" ?>">
			  		<button><?= get_theme_mod('combany_' . $i . '_button') != '' ? get_theme_mod('combany_' . $i . '_button') : "Read more" ?></button>
				</a>
          </div>
			<?php endfor ?>
        </div>
      </div>
	<?php endif ?>
    </header>
    <div class="combany__section-client-work">
      <hr class="primary">
      <div class="combany__section-client-work-title">
      <?= get_theme_mod('combany_client_work_title') != '' ? get_theme_mod('combany_client_work_title') : 'Client work' ?>
      </div>
      <div class="combany__section-client-work-description">
      <?= get_theme_mod('combany_client_work_description') != '' ? get_theme_mod('combany_client_work_description') : 'For leading enterprise customers, we develop mobile apps, web front-ends, and scalable cloud solutions' ?>
      </div>

      <div class="combany__section-client-work-both">
        <div class="combany__section-client-work-left">
        <?php $urlImg = get_theme_mod('combany_client_image') != '' ? wp_get_attachment_image_url(get_theme_mod('combany_client_image')) : get_template_directory_uri() . '/images/iphones-triangle.png' ?>
        <?php //var_dump($urlImg);die; ?>  
        <img src="<?= $urlImg ?>" alt="Client image">
        </div>
        <div class="combany__section-client-work-right">
          <h1><?= get_theme_mod('combany_second_title') != '' ? get_theme_mod('combany_second_title') : 'Herbalife Nutrition' ?></h1>
          <h2><?= get_theme_mod('combany_second_second_title') != '' ? get_theme_mod('combany_second_second_title') : 'Stay Connected with Herbalife+' ?></h2>
          <div class="combany__section-client-work-right-details">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
            <h3><?= get_theme_mod('combany_second_third_title') != '' ? get_theme_mod('combany_second_third_title') : 'SET WEIGHT' ?></h3>
            <p><?= get_theme_mod('combany_third_client_description') != '' ? get_theme_mod('combany_third_client_description') : 'The customer and his nutritionist conveniently set their weight, sport and fitness goals in the app.' ?></p>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg>
            <h3><?= get_theme_mod('combany_second_fourth_title') != '' ? get_theme_mod('combany_second_fourth_title') : 'INDIVIDUAL MEAL PLAN' ?></h3>
            <p><?= get_theme_mod('combany_fourth_description') != '' ? get_theme_mod('combany_fourth_description') : 'The consultant creates an individual meal plan that immediately becomes visible in the user app.' ?></p>
          </div>
          <a href="<?= get_theme_mod('combany_client_button_url') != '' ? get_theme_mod('combany_client_button_url') : 'https://google.com' ?>">
            <button class="btn"><?= get_theme_mod('combany_client_button') != '' ? get_theme_mod('combany_client_button') : 'Read more' ?></button>
          </a>
          </div>
      </div>
    </div>

    <div class="carousel variable-width">
    <?php if(get_theme_mod('combany_slider_1_image') != ''): ?>
      <div><img alt="Slider first image" src="<?= get_theme_mod('combany_slider_1_image') != '' ? wp_get_attachment_image_src(get_theme_mod('combany_slider_1_image'), 'slider-image')[0] : get_template_directory_uri() . '/images/computer.png' ?>"></div>
    <?php endif; ?>
    <?php if(get_theme_mod('combany_slider_2_image') != ''): ?>
      <div><img alt="Slider second image" src="<?= get_theme_mod('combany_slider_2_image') != '' ? wp_get_attachment_image_src(get_theme_mod('combany_slider_2_image'), 'slider-image')[0] : get_template_directory_uri() . '/images/mobile-lime.png' ?>"></div>
    <?php endif; ?>
    <?php if(get_theme_mod('combany_slider_3_image') != ''): ?>
      <div><img alt="Slider third image" src="<?= get_theme_mod('combany_slider_3_image') != '' ? wp_get_attachment_image_src(get_theme_mod('combany_slider_3_image'), 'slider-image')[0] : get_template_directory_uri() . '/images/laptop-orange.png' ?>"></div>
    <?php endif; ?>
    <?php if(get_theme_mod('combany_slider_4_image') != ''): ?>
      <div><img alt="Slider fourth image" src="<?= get_theme_mod('combany_slider_4_image') != '' ? wp_get_attachment_image_src(get_theme_mod('combany_slider_4_image'), 'slider-image')[0] : get_template_directory_uri() . '/images/mobile-green.png' ?>"></div>
    <?php endif; ?>
    <?php if(get_theme_mod('combany_slider_5_image') != ''): ?>
      <div><img alt="Slider fifth image" src="<?= get_theme_mod('combany_slider_5_image') != '' ? wp_get_attachment_image_src(get_theme_mod('combany_slider_5_image'), 'slider-image')[0] : get_template_directory_uri() . '/images/laptop-blue.png' ?>"></div>
    <?php endif; ?>
    </div>

    <div class="combany__section-client-agile">
      <hr class="primary">
      <div class="combany__section-client-agile-title">
        <h1><?= get_theme_mod('combany_teams_1_title') != '' ? get_theme_mod('combany_teams_1_title') : 'Agile teams delivering' ?></h1>
        <h1><?= get_theme_mod('combany_teams_2_title') != '' ? get_theme_mod('combany_teams_2_title') : 'the future digital products for your business' ?></h1>
      </div>
      <ul>
        <!-- <li>Fast delivery and highest transparency</li>
        <li>Commercial reliability of all solutions</li>
        <li>Working software from day one</li> -->
        <?= get_theme_mod('combany_teams_description') != '' ? get_theme_mod('combany_teams_description') : '-Fast delivery and highest transparency
- Commercial reliability of all solutions
- Working software from day one' ?>
      </ul>
      <div class="combany__section-client-agile-icons container-fluid" id="combany__counter">
        <div class="row">
          <div class="col-sm combany__section-client-agile-icon">
            <div class="combany__section-client-agile-img-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
            </div>
            <h2 class="counter-value" data-count="<?= get_theme_mod('combany_teams_3_number') != '' ? get_theme_mod('combany_teams_3_number') : '85' ?>"></h2>
            <p><?= get_theme_mod('combany_teams_3_title') != '' ? get_theme_mod('combany_teams_3_title') : 'Web Development' ?></p>
          </div>
          <div class="col-sm combany__section-client-agile-icon">
            <div class="combany__section-client-agile-img-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smartphone"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
            </div>
            <h2 class="counter-value" data-count="<?= get_theme_mod('combany_teams_4_number') != '' ? get_theme_mod('combany_teams_4_number') : '90' ?>"></h2>
            <p><?= get_theme_mod('combany_teams_4_title') != '' ? get_theme_mod('combany_teams_4_title') : 'Mobile Development' ?></p>
          </div>
          <div class="col-sm combany__section-client-agile-icon">
            <div class="combany__section-client-agile-img-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg>
            </div>
            <h2 class="counter-value" data-count="<?= get_theme_mod('combany_teams_5_number') != '' ? get_theme_mod('combany_teams_5_number') : '90' ?>"></h2>
            <p><?= get_theme_mod('combany_teams_5_title') != '' ? get_theme_mod('combany_teams_5_title') : 'Voice-based interaction' ?></p>
          </div>
          <div class="col-sm combany__section-client-agile-icon">
            <div class="combany__section-client-agile-img-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg>
            </div>
            <h2 class="counter-value" data-count="<?= get_theme_mod('combany_teams_6_number') != '' ? get_theme_mod('combany_teams_6_number') : '95' ?>"></h2>
            <p><?= get_theme_mod('combany_teams_6_title') != '' ? get_theme_mod('combany_teams_6_title') : 'IOT Solutions' ?></p>
          </div>
        </div>
      </div>
    </div>
        <?php //var_dump(get_theme_mod('combany_show_articles'));die; ?>
    <?php if(get_theme_mod('combany_show_articles') != '0'): ?>
    <hr class="combany__section-divider">
    <div class="combany__section-news container-fluid">
      <div class="combany__section-news-title">News & Events</div>
      <div class="row combany__section-news-container">
		  <?php 
      $artNumber = get_theme_mod('combany_articles_number') != '' ? get_theme_mod('combany_articles_number') : '3';
	$three_last_posts = new WP_Query(array(
			'post_type' => 'post',
		  'posts_per_page' => $artNumber,
		  'orderby' => 'date',
		  'order' => 'DESC',
        )); ?>
		  <?php if ( $three_last_posts->have_posts() ) :
    while ( $three_last_posts->have_posts() ) : $three_last_posts->the_post(); ?>
        <div class="col-sm combany__section-news-card">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        } ?>
          <div class="combany__section-news-card-title">
            <div class="combany__section-news-card-date">
              <h1><?= get_the_date('d'); ?></h1>
              <h4><?= get_the_date('M'); ?></h4>
            </div>
            <a href="<?php the_permalink(); ?>">
              <h2><?php the_title(); ?></h2>
            </a>
          </div>
          <p><?php the_excerpt(); ?></p>
          <div class="combany__section-news-card-icons">
            <a href="" class="combany__section-news-card-icon-user">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
              <p><?php the_author(); ?></p>
            </a>
            <a href="" class="combany__section-news-card-icon-comment">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
              <p><?= get_comments_number(get_the_ID()); ?> Comment</p>
            </a>
            <a href="" class="combany__section-news-card-icon-likes">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
              <p>222 Like</p>
            </a>
          </div>
        </div>
    <?php endwhile;
	else :
		_e( 'Sorry, no posts were found.', 'textdomain' );
	endif; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>

<?php get_footer();
?>
