<?php
//Add custom sections and options in customizer
class Combany_Customizer
{

	public function __construct()
	{
		add_action('customize_register', array($this, 'register_customize_sections'));
	}

	//Initialise section
	public function register_customize_sections($wp_customize)
	{
		$this->author_callout_section($wp_customize);
	}

	// Author Section, Settings and controls
	private function author_callout_section($wp_customize)
	{

		// Add logo
		$wp_customize->add_setting('combany_logo', array(
			'transport'     => 'refresh',
		));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'combany_logo',
				array(
					'label'      => __('Upload a logo', 'combany'),
					'section'    => 'title_tagline',
					'settings'   => 'combany_logo',
					'context'    => 'combany_logo'
				)
			)
		);

		// Colors of the website
		$wp_customize->add_section('combany_standard_colors', array(
			'title' => __('Standard Colors', 'combany'),
			'priority' => 30,
		));

		// Primary Basic Colors
		$wp_customize->add_setting('combany_basic_color', array(
			'default' => '#f9190f',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Color_control($wp_customize, 'combany_basic_color', array(
			'label' => __('First Basic Color', 'combany'),
			'section' => 'combany_standard_colors',
			'settings' => 'combany_basic_color',
		)));

		// Secondary Basic Colors
		$wp_customize->add_setting('combany_secondary_basic_color', array(
			'default' => '#222',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Color_control($wp_customize, 'combany_secondary_basic_color', array(
			'label' => __('Second Basic Color', 'combany'),
			'section' => 'combany_standard_colors',
			'settings' => 'combany_secondary_basic_color',
		)));

		// Main Section
		$wp_customize->add_section('combany_header', array(
			'title' => __('Top Section', 'combany'),
			'priority' => 30,
		));

		$wp_customize->add_setting('combany_first_image', array(
			'transport'     => 'refresh',
		));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'combany_first_image',
				array(
					'label'      => __('Upload a first image', 'combany'),
					'section'    => 'combany_header',
					'settings'   => 'combany_first_image',
					'context'    => 'combany_first_image'
				)
			)
		);

		// 	$wp_customize->add_setting( 'combany_video',
		//    array(
		//       'default' => '',
		//       'transport' => 'refresh',
		//       'sanitize_callback' => 'absint',
		//        'type' => 'theme_mod',
		//    )
		// );

		// 	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'combany_video',
		// 	   array(
		// 		  'label' => __( 'Default Media Control' ),
		// 		  'description' => esc_html__( 'Select video or image for top section' ),
		// 		  'section' => 'combany_header',
		// 		  'mime_type' => 'video, image',  // Required. Can be image, audio, video, application, text
		// 		  'button_labels' => array( // Optional
		// 			 'select' => __( 'Select File' ),
		// 			 'change' => __( 'Change File' ),
		// 			 'default' => __( 'Default' ),
		// 			 'remove' => __( 'Remove' ),
		// 			 'placeholder' => __( 'No file selected' ),
		// 			 'frame_title' => __( 'Select File' ),
		// 			 'frame_button' => __( 'Choose File' ),
		// 		  )
		// 	   )
		// 	) );

		$wp_customize->add_setting('main_title', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => "Present your company",
			'transport' => 'refresh',
		));

		$wp_customize->add_control('main_title', array(
			'section' => 'combany_header',
			'label' => __('Intro title'),
		));

		$wp_customize->add_setting('main_button', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => "Let's go digital",
			'transport' => 'refresh',
		));

		$wp_customize->add_control('main_button', array(
			'section' => 'combany_header',
			'label' => __('Main button'),
		));

		$wp_customize->add_setting('main_button_url', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => "https://www.google.com",
			'transport' => 'refresh',
		));

		$wp_customize->add_control('main_button_url', array(
			'section' => 'combany_header',
			'label' => __('Main button url'),
		));

		// First section

		$title = get_theme_mod('combany_our_services_title') != '' ? get_theme_mod('combany_our_services_title') : 'Our Services';

		$wp_customize->add_section('combany_first_section', array(
			'title' => __($title, 'combany'),
			'priority' => 30,
		));

		$wp_customize->add_setting('combany_first_section_display', array(
			'default' => 'Yes',
			'transport' => 'refresh',
			'sanitize_callback' => array($this, 'sanitize_custom_option')
		));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'combany_first_section_display', array(
			'label' => 'Display this section?',
			'section' => 'combany_first_section',
			'settings' => 'combany_first_section_display',
			'type' => 'select',
			'choices' => array('Yes' => 'Yes', 'No' => 'No')
		)));

		$wp_customize->add_setting('combany_our_services_title', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Our Services',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_our_services_title', array(
			'section' => 'combany_first_section',
			'label' => __('Section title'),
		));

		$wp_customize->add_setting('combany_1_image', array(
			'transport'     => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'combany_1_image', array(
			'label'      => __('Upload a first image', 'combany'),
			'section'    => 'combany_first_section',
			'settings'   => 'combany_1_image',
			'context'    => 'combany_1_image'
		)));

		$wp_customize->add_setting('combany_1_title', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Combany',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_1_title', array(
			'section' => 'combany_first_section',
			'label' => __('Main title'),
		));

		$wp_customize->add_setting('combany_1_description', array(
			'sanitize_callback' => 'sanitize_textarea_field',
			'default' => 'State of the art front-end applications and back-end systems.',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_1_description', array(
			'type' => 'textarea',
			'section' => 'combany_first_section',
			'label' => __('Main description'),
		));

		$wp_customize->add_setting('combany_1_button', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Read more',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_1_button', array(
			'section' => 'combany_first_section',
			'label' => __('Button'),
		));

		$wp_customize->add_setting('combany_1_button_url', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'https://google.com',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_1_button_url', array(
			'section' => 'combany_first_section',
			'label' => __('Button url'),
		));

		$wp_customize->add_setting('combany_2_image', array(
			'transport'     => 'refresh',
		));

		$wp_customize->add_control(
			new WP_Customize_Cropped_Image_Control(
				$wp_customize,
				'combany_2_image',
				array(
					'label'      => __('Upload a second image', 'combany'),
					'section'    => 'combany_first_section',
					'settings'   => 'combany_2_image',
					'context'    => 'combany_2_image'
				)
			)
		);

		$wp_customize->add_setting('combany_2_title', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Combany',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_2_title', array(
			'section' => 'combany_first_section',
			'label' => __('Main title'),
		));

		$wp_customize->add_setting('combany_2_description', array(
			'sanitize_callback' => 'sanitize_textarea_field',
			'default' => 'State of the art front-end applications and back-end systems.',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_2_description', array(
			'type' => 'textarea',
			'section' => 'combany_first_section',
			'label' => __('Main description'),
		));

		$wp_customize->add_setting('combany_2_button', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Read more',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_2_button', array(
			'section' => 'combany_first_section',
			'label' => __('Button'),
		));

		$wp_customize->add_setting('combany_2_button_url', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'https://google.com',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_2_button_url', array(
			'section' => 'combany_first_section',
			'label' => __('Button url'),
		));

		$wp_customize->add_setting('combany_3_image', array(
			'transport'     => 'refresh',
		));

		$wp_customize->add_control(
			new WP_Customize_Cropped_Image_Control(
				$wp_customize,
				'combany_3_image',
				array(
					'label'      => __('Upload a third image', 'combany'),
					'section'    => 'combany_first_section',
					'settings'   => 'combany_3_image',
					'context'    => 'combany_3_image'
				)
			)
		);

		$wp_customize->add_setting('combany_3_title', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Combany',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_3_title', array(
			'section' => 'combany_first_section',
			'label' => __('Main title'),
		));

		$wp_customize->add_setting('combany_3_description', array(
			'sanitize_callback' => 'sanitize_textarea_field',
			'default' => 'State of the art front-end applications and back-end systems.',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_3_description', array(
			'type' => 'textarea',
			'section' => 'combany_first_section',
			'label' => __('Main description'),
		));

		$wp_customize->add_setting('combany_3_button', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Read more',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_3_button', array(
			'section' => 'combany_first_section',
			'label' => __('Button'),
		));

		$wp_customize->add_setting('combany_3_button_url', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'https://google.com',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_3_button_url', array(
			'section' => 'combany_first_section',
			'label' => __('Button url'),
		));

		// Second section
		$titleTwo = get_theme_mod('combany_client_work_title') != '' ? get_theme_mod('combany_our_services_title') : 'Client Work';

		$wp_customize->add_section('combany_second_section', array(
			'title' => __($titleTwo, 'combany'),
			'priority' => 30,
		));

		$wp_customize->add_setting('combany_client_work_title', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Client Work',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_client_work_title', array(
			'section' => 'combany_second_section',
			'label' => __('Title of the section'),
		));

		$wp_customize->add_setting('combany_client_work_description', array(
			'sanitize_callback' => 'sanitize_textarea_field',
			'default' => 'For leading enterprise customers, we develop mobile apps, web front-ends, and scalable cloud solutions',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_client_work_description', array(
			'type' => 'textarea',
			'section' => 'combany_second_section',
			'label' => __('Description of the section'),
		));

		$wp_customize->add_setting('combany_client_image', array(
			'transport'     => 'refresh',
			'sanitize_callback' => array($this, 'sanitize_custom_url')
		));

		$wp_customize->add_control(
			new WP_Customize_Cropped_Image_Control(
				$wp_customize,
				'combany_client_image',
				array(
					'label'      => __('Upload an image', 'combany'),
					'section'    => 'combany_second_section',
					'settings'   => 'combany_client_image',
					'context' => 'combany_client_image',
					'width' => 250,
					'height' => 150,
				)
			)
		);

		$wp_customize->add_setting('combany_second_title', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Herbalife nutrition',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_second_title', array(
			'section' => 'combany_second_section',
			'label' => __('Main title'),
		));

		$wp_customize->add_setting('combany_second_second_title', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Stay Connected with Herbalife+',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_second_second_title', array(
			'section' => 'combany_second_section',
			'label' => __('Main title'),
		));

		$wp_customize->add_setting('combany_second_description', array(
			'sanitize_callback' => 'sanitize_textarea_field',
			'default' => 'State of the art front-end applications and back-end systems.',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_second_description', array(
			'type' => 'textarea',
			'section' => 'combany_second_section',
			'label' => __('Main description'),
		));

		$wp_customize->add_setting('combany_second_third_title', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'SET WEIGHT',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_second_third_title', array(
			'section' => 'combany_second_section',
			'label' => __('Main title'),
		));

		$wp_customize->add_setting('combany_third_client_description', array(
			'sanitize_callback' => 'sanitize_textarea_field',
			'default' => 'The customer and his nutritionist conveniently set their weight, sport and fitness goals in the app.',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_third_client_description', array(
			'type' => 'textarea',
			'section' => 'combany_second_section',
			'label' => __('Main description'),
		));

		$wp_customize->add_setting('combany_second_fourth_title', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'INDIVIDUAL MEAL PLAN',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_second_fourth_title', array(
			'section' => 'combany_second_section',
			'label' => __('Main title'),
		));

		$wp_customize->add_setting('combany_fourth_description', array(
			'sanitize_callback' => 'sanitize_textarea_field',
			'default' => 'The consultant creates an individual meal plan that immediately becomes visible in the user app.',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_fourth_description', array(
			'type' => 'textarea',
			'section' => 'combany_second_section',
			'label' => __('Main description'),
		));

		$wp_customize->add_setting('combany_client_button', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Read more',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_client_button', array(
			'section' => 'combany_second_section',
			'label' => __('Button copy'),
		));

		$wp_customize->add_setting('combany_client_button_url', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'https://www.google.com',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_client_button_url', array(
			'section' => 'combany_second_section',
			'label' => __('Button url'),
		));

		// Third section 

		$wp_customize->add_section('combany_third_section', array(
			'title' => __('Slider', 'combany'),
			'priority' => 30,
		));

		$wp_customize->add_setting('combany_slider_1_image', array(
			'transport'     => 'refresh',
		));

		$wp_customize->add_control(
			new WP_Customize_Cropped_Image_Control(
				$wp_customize,
				'combany_slider_1_image',
				array(
					'label'      => __('Upload an image', 'combany'),
					'section'    => 'combany_third_section',
					'settings'   => 'combany_slider_1_image',
					'context' => 'combany_slider_1_image',
					'width' => 431,
					'height' => 294,
				)
			)
		);

		$wp_customize->add_setting('combany_slider_2_image', array(
			'transport'     => 'refresh',
		));

		$wp_customize->add_control(
			new WP_Customize_Cropped_Image_Control(
				$wp_customize,
				'combany_slider_2_image',
				array(
					'label'      => __('Upload an image', 'combany'),
					'section'    => 'combany_third_section',
					'settings'   => 'combany_slider_2_image',
					'context' => 'combany_slider_2_image',
					'width' => 431,
					'height' => 294,
				)
			)
		);

		$wp_customize->add_setting('combany_slider_3_image', array(
			'transport'     => 'refresh',
		));

		$wp_customize->add_control(
			new WP_Customize_Cropped_Image_Control(
				$wp_customize,
				'combany_slider_3_image',
				array(
					'label'      => __('Upload an image', 'combany'),
					'section'    => 'combany_third_section',
					'settings'   => 'combany_slider_3_image',
					'context' => 'combany_slider_3_image',
					'width' => 431,
					'height' => 294,
				)
			)
		);

		$wp_customize->add_setting('combany_slider_4_image', array(
			'transport'     => 'refresh',
		));

		$wp_customize->add_control(
			new WP_Customize_Cropped_Image_Control(
				$wp_customize,
				'combany_slider_4_image',
				array(
					'label'      => __('Upload an image', 'combany'),
					'section'    => 'combany_third_section',
					'settings'   => 'combany_slider_4_image',
					'context' => 'combany_slider_4_image',
					'width' => 431,
					'height' => 294,
				)
			)
		);

		$wp_customize->add_setting('combany_slider_5_image', array(
			'transport'     => 'refresh',
		));

		$wp_customize->add_control(
			new WP_Customize_Cropped_Image_Control(
				$wp_customize,
				'combany_slider_5_image',
				array(
					'label'      => __('Upload an image', 'combany'),
					'section'    => 'combany_third_section',
					'settings'   => 'combany_slider_5_image',
					'context' => 'combany_slider_5_image',
					'width' => 431,
					'height' => 294,
				)
			)
		);

		// Fourth section
		$wp_customize->add_section('combany_fourth_section', array(
			'title' => __('Agile teams delivering', 'combany'),
			'priority' => 30,
		));

		$wp_customize->add_setting('combany_4_image', array(
			'transport'     => 'refresh',
		));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'combany_4_image',
				array(
					'label'      => __('Upload an image', 'combany'),
					'section'    => 'combany_fourth_section',
					'settings'   => 'combany_4_image',
					'context'    => 'combany_4_image'
				)
			)
		);

		$wp_customize->add_setting('combany_teams_1_title', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Agile teams delivering',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_teams_1_title', array(
			'section' => 'combany_fourth_section',
			'label' => __('Main title'),
		));

		$wp_customize->add_setting('combany_teams_2_title', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'the future digital products for your business',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_teams_2_title', array(
			'section' => 'combany_fourth_section',
			'label' => __('Subtitle'),
		));

		$wp_customize->add_setting('combany_teams_description', array(
			'sanitize_callback' => 'sanitize_textarea_field',
			'default' => 'Fast delivery and highest transparency
Commercial reliability of all solutions
Working software from day one',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_teams_description', array(
			'type' => 'textarea',
			'section' => 'combany_fourth_section',
			'label' => __('Main description'),
		));

		$wp_customize->add_setting('combany_teams_3_title', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Web Development',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_teams_3_title', array(
			'section' => 'combany_fourth_section',
			'label' => __('First block title'),
		));

		$wp_customize->add_setting('combany_teams_3_number', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '85',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_teams_3_number', array(
			'section' => 'combany_fourth_section',
			'type' => 'number',
			'label' => __('First block percentage'),
		));

		$wp_customize->add_setting('combany_teams_4_title', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Mobile Development',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_teams_4_title', array(
			'section' => 'combany_fourth_section',
			'label' => __('Second block title'),
		));

		$wp_customize->add_setting('combany_teams_4_number', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '90',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_teams_4_number', array(
			'section' => 'combany_fourth_section',
			'type' => 'number',
			'label' => __('Second block percentage'),
		));

		$wp_customize->add_setting('combany_teams_5_title', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Voice-based interaction',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_teams_5_title', array(
			'section' => 'combany_fourth_section',
			'label' => __('Third block title'),
		));

		$wp_customize->add_setting('combany_teams_5_number', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '90',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_teams_5_number', array(
			'section' => 'combany_fourth_section',
			'type' => 'number',
			'label' => __('Third block percentage'),
		));

		$wp_customize->add_setting('combany_teams_6_title', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'IOT Solutions',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_teams_6_title', array(
			'section' => 'combany_fourth_section',
			'label' => __('Fourth block title'),
		));

		$wp_customize->add_setting('combany_teams_6_number', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '95',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_teams_6_number', array(
			'section' => 'combany_fourth_section',
			'type' => 'number',
			'label' => __('Fourth block percentage'),
		));

		// Fifth section
		$wp_customize->add_section('combany_fifth_section', array(
			'title' => __('News & Events section', 'combany'),
			'priority' => 30,
		));

		$wp_customize->add_setting('combany_show_articles', array(
			'default'    => '1'
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'combany_show_articles',
				array(
					'label'     => __('Show Articles section', 'combany'),
					'section'   => 'combany_fifth_section',
					'settings'  => 'combany_show_articles',
					'type'      => 'checkbox',
				)
			)
		);

		$wp_customize->add_setting('combany_articles_number', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '3',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_articles_number', array(
			'section' => 'combany_fifth_section',
			'type' => 'number',
			'input_attrs' => array(
				'min' => '1',
			),
			'label' => __('Amount of articles shown in the section'),
		));


		//FOOTER

		$wp_customize->add_section('combany_footer', array(
			'title' => __('Footer', 'combany'),
			'priority' => 50,
		));

		$wp_customize->add_setting('combany_footer_phone', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '+49 1 23456789',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_footer_phone', array(
			'section' => 'combany_footer',
			'label' => __('Telephone number'),
		));

		$wp_customize->add_setting('combany_footer_email', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'contact@combany.com',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_footer_email', array(
			'section' => 'combany_footer',
			'label' => __('Email'),
		));

		$wp_customize->add_setting('combany_footer_location', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Karlsplatz, Wuppertal',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_footer_location', array(
			'section' => 'combany_footer',
			'label' => __('Location'),
		));

		$wp_customize->add_setting('combany_footer_location_url', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '/contact',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_footer_location_url', array(
			'section' => 'combany_footer',
			'label' => __('Location url'),
		));

		$wp_customize->add_setting('combany_footer_copyright', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '© 2020 Combany. All rights reserved.',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_footer_copyright', array(
			'section' => 'combany_footer',
			'label' => __('Copyright'),
		));

		$wp_customize->add_setting('combany_footer_facebook', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'https://facebook.com/page/combany',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_footer_facebook', array(
			'section' => 'combany_footer',
			'label' => __('Facebook'),
		));

		$wp_customize->add_setting('combany_footer_instagram', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'https://instagram.com/combany',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_footer_instagram', array(
			'section' => 'combany_footer',
			'label' => __('Instagram'),
		));

		$wp_customize->add_setting('combany_footer_linkedin', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'https://linkedin.com/combany',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('combany_footer_linkedin', array(
			'section' => 'combany_footer',
			'label' => __('Linkedin'),
		));
	}

	public function sanitize_custom_option($input)
	{
		return ($input === 'No') ? 'No' : 'Yes';
	}

	public function sanitize_custom_url($input)
	{
		return filter_var($input, FILTER_SANITIZE_URL);
	}
}
