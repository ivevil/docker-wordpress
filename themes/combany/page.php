<?php
/**
 * Other pages (not homepage)
 *
 * @package combany
 * @subpackage combany
 * @since 1.0.0
 */
?>
<?php
get_header();

while (have_posts()) {
  the_post();
}
?>

<div class="combany__page-section">

  <?php if (is_page('news')) : ?>
    <div class="combany__section-news container-fluid">
      <div class="combany__section-news-title">News & Events</div>
      <div class="row combany__section-news-container">
        <?php
        $three_last_posts = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'orderby' => 'date',
          'order' => 'DESC',
        )); ?>
        <?php if ($three_last_posts->have_posts()) :
          while ($three_last_posts->have_posts()) : $three_last_posts->the_post(); ?>
            <div class="col-sm combany__section-news-card">
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
                <a href="<?= get_the_author_link(); ?>" class="combany__section-news-card-icon-user">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                  <p><?php the_author(); ?></p>
                </a>
                <a href="" class="combany__section-news-card-icon-comment">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                  </svg>
                  <p><?= get_comments_number(get_the_ID()); ?> Comment</p>
                </a>
                <a href="" class="combany__section-news-card-icon-likes">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up">
                    <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                  </svg>
                  <p>222 Like</p>
                </a>
              </div>
            </div>
        <?php endwhile;
        else :
          _e('Sorry, no posts were found.', 'textdomain');
        endif; ?>
      </div>
    </div>
  <?php else : ?>

    <div class="generic-content">
      <?php the_content(); ?>
      <?php
      global $wp;
      $url = home_url(add_query_arg(array(), $wp->request));
      $parts = explode("/", $url);
      $post_type_name = $parts[count($parts) - 1];
      ?>
      <?php $custom_post_type = new WP_Query(array(
        'post_type' => $post_type_name,
        'posts_per_page' => 10,
        'orderby' => 'date',
        'order' => 'DESC',
      )); ?>
      <div class="combany__cards">
        <?php if ($custom_post_type->have_posts()) {
          while ($custom_post_type->have_posts()) {
            $custom_post_type->the_post(); ?>
            <div class="combany__card">
              <a class="combany__card-url" href="<?php the_permalink(); ?>">
                <img class="combany__card-image" src="<?= get_the_post_thumbnail_url() ?>">
                <span class="combany__card-name"><?php the_title(); ?></span>
              </a>
            </div>
        <?php }
        }

        wp_reset_postdata();
        ?>
      </div>
    </div>
  <?php endif; ?>
</div>

<?php get_footer(); ?>