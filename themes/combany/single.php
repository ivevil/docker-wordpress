<?php

/**
 * The template for displaying all single posts
 *
 *
 * @package combany
 * @subpackage combany
 * @since Combany 1.0
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php

		// Start the Loop.
		while (have_posts()) :
			the_post();

			// get_template_part( 'template-parts/content/content', 'single' );
			get_template_part('content', get_post_format());

			if (is_singular('attachment')) {
				// Parent post navigation.
				the_post_navigation(
					array(
						/* translators: %s: Parent post link. */
						'prev_text' => sprintf(__('<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'combany'), '%title'),
					)
				);
			} elseif (is_singular('post')) {
				// Previous/next post navigation.
				the_post_navigation(
					array(
						'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Next Post', 'combany') . '</span> ' .
							'<span class="screen-reader-text">' . __('Next post:', 'combany') . '</span> <br/>' .
							'<span class="post-title">%title</span>',
						'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __('Previous Post', 'combany') . '</span> ' .
							'<span class="screen-reader-text">' . __('Previous post:', 'combany') . '</span> <br/>' .
							'<span class="post-title">%title</span>',
					)
				);
			}

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) {
				comments_template();
			}

		endwhile; // End the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
