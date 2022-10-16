<?php

/**
 * The Custom Style for Combany
 *
 * Loads the dynamically generated Css in the header of the template.
 *
 * @package combany
 * @subpackage combany
 * @since Combany 1.0
 */
?>
<?php function complete_dynamic_css()
{ ?>
	<style type="text/css">
		/*Fixed Background*/
		<?php // if(!empty($complete['background_fixed'])){ echo 'html body.custom-background{ background-attachment:fixed;}';} 
		?>
		/* COLORS */

		.combany button,
		.combany .combany__section-our-services-box {
			background: linear-gradient(to right, <?php echo get_theme_mod('combany_basic_color'); ?>, <?php echo get_theme_mod('combany_secondary_basic_color'); ?>);
		}

		.combany hr {
			background: <?php echo get_theme_mod('combany_secondary_basic_color'); ?>;
		}

		.news__pointer,
		.combany__footer-middle h4,
		.combany__header-title-blue,
		.combany__section-news-card-date,
		.combany__section-client-work-right h2,
		.combany__section-client-work-right .btn,
		.combany__section-client-agile ul li::before,
		.combany__section-client-agile-title h1:nth-child(1),
		.combany__section-client-agile-icon svg {
			color: <?php echo get_theme_mod('combany_basic_color'); ?>;
		}

		.combany__footer-top {
			border-bottom: 2px solid <?php echo get_theme_mod('combany_basic_color'); ?>;
		}

		.combany__section-client-work-right svg {
			width: 42px;
			position: absolute;
			margin-left: -60px;
			padding-top: 20px;
			height: 100px;
			color: <?php echo get_theme_mod('combany_basic_color'); ?>;
		}

		.combany__section-client-work-right .btn {
			border: solid 1px <?php echo get_theme_mod('combany_basic_color'); ?>;
		}

		.combany__navbar-menu-item:hover {
			border-bottom: 5px solid <?php echo get_theme_mod('combany_basic_color'); ?>;
		}


		/*---------------------------------------------------------*/
	</style>

<?php } ?>
<?php add_action('wp_head', 'complete_dynamic_css'); ?>