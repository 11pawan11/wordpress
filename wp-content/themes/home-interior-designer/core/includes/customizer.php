<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'home_interior_designer_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'home-interior-designer' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_interior_designer_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'home-interior-designer' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-interior-designer' ),
			'off' => esc_html__( 'Disable', 'home-interior-designer' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_interior_designer_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'home-interior-designer' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-interior-designer' ),
			'off' => esc_html__( 'Disable', 'home-interior-designer' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'home_interior_designer_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'home-interior-designer' ),
	) );

	Kirki::add_section( 'home_interior_designer_font_style_section', array(
		'title'      => esc_html__( 'Typography Option',  'home-interior-designer' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'home-interior-designer' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( HOME_INTERIOR_DESIGNER_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'home-interior-designer' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'home_interior_designer_footer_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'home-interior-designer' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'home-interior-designer' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( HOME_INTERIOR_DESIGNER_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'home-interior-designer' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'home_interior_designer_font_style_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. More Font Family Options </p><p>3. Color Pallete Setup </p><p>4. Section Reordering Facility</p><p>5. For More Options kindly Go For Premium Version.</p>', 'home-interior-designer' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_all_headings_typography',
		'section'     => 'home_interior_designer_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'home_interior_designer_all_headings_typography',
		'label'       => esc_html__( 'Heading Typography',  'home-interior-designer' ),
		'description' => esc_html__( 'Select the typography options for your heading.',  'home-interior-designer' ),
		'section'     => 'home_interior_designer_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_body_content_typography',
		'section'     => 'home_interior_designer_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'home_interior_designer_body_content_typography',
		'label'       => esc_html__( 'Content Typography',  'home-interior-designer' ),
		'description' => esc_html__( 'Select the typography options for your content.',  'home-interior-designer' ),
		'section'     => 'home_interior_designer_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

		// PANEL
	Kirki::add_panel( 'home_interior_designer_panel_id_5', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Animations', 'home-interior-designer' ),
	) );

	// ANIMATION SECTION
	Kirki::add_section( 'home_interior_designer_section_animation', array(
	    'title'          => esc_html__( 'Animations', 'home-interior-designer' ),
	    'panel'          => 'home_interior_designer_panel_id_5',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'home-interior-designer' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( HOME_INTERIOR_DESIGNER_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'home-interior-designer' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'home_interior_designer_section_animation',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'home-interior-designer' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_interior_designer_animation_enabled',
		'label'       => esc_html__( 'Turn On To Show Animation', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_section_animation',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-interior-designer' ),
			'off' => esc_html__( 'Disable', 'home-interior-designer' ),
		],
	] );

		// PANEL
	Kirki::add_panel( 'home_interior_designer_panel_id_2', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Dark Mode', 'home-interior-designer' ),
	) );

	// DARK MODE SECTION
	Kirki::add_section( 'home_interior_designer_section_dark_mode', array(
	    'title'          => esc_html__( 'Dark Mode', 'home-interior-designer' ),
	    'panel'          => 'home_interior_designer_panel_id_2',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'home-interior-designer' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( HOME_INTERIOR_DESIGNER_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'home-interior-designer' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'home_interior_designer_section_dark_mode',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'home-interior-designer' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'home_interior_designer_dark_colors',
	    'section'     => 'home_interior_designer_section_dark_mode',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dark Appearance', 'home-interior-designer' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_interior_designer_is_dark_mode_enabled',
		'label'       => esc_html__( 'Turn To Dark Mode', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_section_dark_mode',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-interior-designer' ),
			'off' => esc_html__( 'Disable', 'home-interior-designer' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'home_interior_designer_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'home-interior-designer' ),
	) );

	// COLOR SECTION

	Kirki::add_section( 'home_interior_designer_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'home-interior-designer' ),
	    'panel'          => 'home_interior_designer_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'home-interior-designer' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( HOME_INTERIOR_DESIGNER_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'home-interior-designer' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'home_interior_designer_section_color',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'home-interior-designer' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_global_colors',
		'section'     => 'home_interior_designer_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'home_interior_designer_global_color',
		'label'       => __( 'choose your Appropriate Color', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_section_color',
		'default'     => '#2a2d34',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'home_interior_designer_global_color_2',
		'label'       => __( 'Choose Your Second Color', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_section_color',
		'default'     => '#dd7543',
	] );


	// Additional Settings

	Kirki::add_section( 'home_interior_designer_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'home-interior-designer' ),
	    'panel'          => 'home_interior_designer_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'home-interior-designer' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( HOME_INTERIOR_DESIGNER_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'home-interior-designer' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'home_interior_designer_additional_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'home-interior-designer' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'home_interior_designer_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'home_interior_designer_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'home-interior-designer' ),
			'Center' => esc_html__( 'Center', 'home-interior-designer' ),
			'Right'  => esc_html__( 'Right', 'home-interior-designer' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'home_interior_designer_scroll_top_icon',
		'label'    => esc_html__( 'Select Appropriate Scroll Top Icon', 'home-interior-designer' ),
		'section'  => 'home_interior_designer_additional_settings',
		'default'  => 'dashicons dashicons-arrow-up-alt',
		'priority' => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_home_interior_designer',
		'label'       => esc_html__( 'Menus Text Transform', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_additional_settings',
		'default'     => 'UPPERCASE',
		'placeholder' => esc_html__( 'Choose an option', 'home-interior-designer' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'home-interior-designer' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'home-interior-designer' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'home-interior-designer' ),

		],
	] );

		new \Kirki\Field\Select(
	[
		'settings'    => 'home_interior_designer_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_additional_settings',
		'default' => 'Zoom Out',
		'placeholder' => esc_html__( 'Choose an option', 'home-interior-designer' ),
		'choices'     => [
			'Zoomout' => __('Zoom Out','home-interior-designer'),
            'Zoominn' => __('Zoom Inn','home-interior-designer'),
            
		],
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'home_interior_designer_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'home_interior_designer_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'home_interior_designer_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'home_interior_designer_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_additional_settings',
		'default' => 'One Column',
		'placeholder' => esc_html__( 'Choose an option', 'home-interior-designer' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','home-interior-designer'),
            'Right Sidebar' => __('Right Sidebar','home-interior-designer'),
            'One Column' => __('One Column','home-interior-designer')
		],
	] );

	if ( class_exists("woocommerce")){

	// Woocommerce Settings

	Kirki::add_section( 'home_interior_designer_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'home-interior-designer' ),
			'panel'          => 'home_interior_designer_panel_id',
			'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'home-interior-designer' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( HOME_INTERIOR_DESIGNER_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'home-interior-designer' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'home_interior_designer_woocommerce_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'home-interior-designer' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'home_interior_designer_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'home_interior_designer_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'home_interior_designer_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
		[
			'settings' => 'home_interior_designer_per_columns',
			'label'    => esc_html__( 'Product Per Row', 'home-interior-designer' ),
			'section'  => 'home_interior_designer_woocommerce_settings',
			'default'  => 3,
			'choices'  => [
				'min'  => 1,
				'max'  => 4,
				'step' => 1,
			],
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'home_interior_designer_product_per_page',
			'label'    => esc_html__( 'Product Per Page', 'home-interior-designer' ),
			'section'  => 'home_interior_designer_woocommerce_settings',
			'default'  => 9,
			'choices'  => [
				'min'  => 1,
				'max'  => 15,
				'step' => 1,
			],
		]
	);

		new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number_per_row',
		'label'    => esc_html__( 'Related Product Per Column', 'home-interior-designer' ),
		'section'  => 'home_interior_designer_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number',
		'label'    => esc_html__( 'Related Product Per Page', 'home-interior-designer' ),
		'section'  => 'home_interior_designer_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'home_interior_designer_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'home-interior-designer' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','home-interior-designer'),
            'Right Sidebar' => __('Right Sidebar','home-interior-designer')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'home_interior_designer_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'home-interior-designer' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','home-interior-designer'),
            'Right Sidebar' => __('Right Sidebar','home-interior-designer')
		],
	] );

	new \Kirki\Field\Radio_Buttonset( [
		'settings'    => 'home_interior_designer_woocommerce_pagination_position',
		'label'       => esc_html__( 'Woocommerce Pagination Alignment', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_woocommerce_settings',
		'default'     => 'Center',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'home-interior-designer' ),
			'Center' => esc_html__( 'Center', 'home-interior-designer' ),
			'Right'  => esc_html__( 'Right', 'home-interior-designer' ),
		],
	]
	);

}

	// POST SECTION

	Kirki::add_section( 'home_interior_designer_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'home-interior-designer' ),
	    'panel'          => 'home_interior_designer_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'home-interior-designer' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( HOME_INTERIOR_DESIGNER_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'home-interior-designer' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'home_interior_designer_section_post',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'home-interior-designer' ) . '</div>',
	] );

		new \Kirki\Field\Sortable(
	[
		'settings' => 'home_interior_designer_archive_element_sortable',
		'label'    => __( 'Archive Post Page element Reordering', 'home-interior-designer' ),
		'section'  => 'home_interior_designer_section_post',
		'default'  => [ 'option1', 'option2', 'option3' ],
		'choices'  => [
			'option1' => esc_html__( 'Post Meta', 'home-interior-designer' ),
			'option2' => esc_html__( 'Post Title', 'home-interior-designer' ),
			'option3' => esc_html__( 'Post Content', 'home-interior-designer' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'home_interior_designer_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'home_interior_designer_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'home_interior_designer_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'home-interior-designer' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','home-interior-designer'),
            'Right Sidebar' => __('Right Sidebar','home-interior-designer'),
            'Three Column' => __('Three Column','home-interior-designer'),
            'Four Column' => __('Four Column','home-interior-designer'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','home-interior-designer'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','home-interior-designer'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','home-interior-designer')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'home_interior_designer_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'home-interior-designer' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','home-interior-designer'),
            'Right Sidebar' => __('Right Sidebar','home-interior-designer'),
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'home_interior_designer_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'home-interior-designer' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','home-interior-designer'),
            'Right Sidebar' => __('Right Sidebar','home-interior-designer'),
            'Three Column' => __('Three Column','home-interior-designer'),
            'Four Column' => __('Four Column','home-interior-designer'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','home-interior-designer'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','home-interior-designer'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','home-interior-designer')
		],
	] );

	Kirki::add_field( 'home_interior_designer_config', [
		'type'        => 'select',
		'settings'    => 'home_interior_designer_post_column_count',
		'label'       => esc_html__( 'Grid Column for Archive Page', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_section_post',
		'default'    => '2',
		'choices' => [
				'1' => __( '1 Column', 'home-interior-designer' ),
				'2' => __( '2 Column', 'home-interior-designer' ),
			],
	] );

		// Breadcrumb
	Kirki::add_section( 'home_interior_designer_bradcrumb', array(
	    'title'          => esc_html__( 'Breadcrumb Settings', 'home-interior-designer' ),
	    'panel'          => 'home_interior_designer_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'home-interior-designer' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( HOME_INTERIOR_DESIGNER_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'home-interior-designer' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'home_interior_designer_bradcrumb',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'home-interior-designer' ) . '</div>',
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_breadcrumb_heading',
		'section'     => 'home_interior_designer_bradcrumb',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Single Page Breadcrumb', 'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_interior_designer_breadcrumb_enable',
		'label'       => esc_html__( 'Breadcrumb Enable / Disable', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_bradcrumb',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-interior-designer' ),
			'off' => esc_html__( 'Disable', 'home-interior-designer' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'default'     => '/',
        'settings' => 'home_interior_designer_breadcrumb_separator' ,
        'label'    => esc_html__( 'Breadcrumb Separator',  'home-interior-designer' ),
        'section'  => 'home_interior_designer_bradcrumb',
    ] );


	// HEADER SECTION

	Kirki::add_section( 'home_interior_designer_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'home-interior-designer' ),
	    'panel'          => 'home_interior_designer_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'home-interior-designer' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( HOME_INTERIOR_DESIGNER_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'home-interior-designer' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'home_interior_designer_section_header',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'home-interior-designer' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_topbar_text',
		'section'     => 'home_interior_designer_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Top Header Text', 'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'home_interior_designer_topbar_text' ,
        'section'  => 'home_interior_designer_section_header',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_time_heading',
		'section'     => 'home_interior_designer_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Opening Time', 'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'home_interior_designer_topbar_opening_time' ,
        'section'  => 'home_interior_designer_section_header',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_button_heading',
		'section'     => 'home_interior_designer_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Button', 'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'label'    =>  esc_html__( 'Button Text', 'home-interior-designer' ),
        'settings' => 'home_interior_designer_header_button_text' ,
        'section'  => 'home_interior_designer_section_header',
    ] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'url',
        'label'    =>  esc_html__( 'Button Link', 'home-interior-designer' ),
        'settings' => 'home_interior_designer_header_button_link' ,
        'section'  => 'home_interior_designer_section_header',
    ] );	

	// SLIDER SECTION

	Kirki::add_section( 'home_interior_designer_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'home-interior-designer' ),
        'panel'          => 'home_interior_designer_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'home-interior-designer' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( HOME_INTERIOR_DESIGNER_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'home-interior-designer' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'home_interior_designer_blog_slide_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'home-interior-designer' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_heading',
		'section'     => 'home_interior_designer_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_interior_designer_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-interior-designer' ),
			'off' => esc_html__( 'Disable', 'home-interior-designer' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_slider_heading',
		'section'     => 'home_interior_designer_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'home_interior_designer_slider_text_extra',
		'label'    => esc_html__( 'Slider Extra Heading', 'home-interior-designer' ),
		'section'  => 'home_interior_designer_blog_slide_section',	
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'home_interior_designer_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'home_interior_designer_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'home-interior-designer' ),
		'priority'    => 10,
		'choices'     => home_interior_designer_get_categories_select(),
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'home_interior_designer_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_blog_slide_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'home-interior-designer' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'home-interior-designer' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'home-interior-designer' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'home-interior-designer' ),

		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_phone_heading',
		'section'     => 'home_interior_designer_blog_slide_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'label'    =>  esc_html__( 'Phone Text', 'home-interior-designer' ),
        'settings' => 'home_interior_designer_phone_text' ,
        'section'  => 'home_interior_designer_blog_slide_section',
    ] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'url',
        'label'    =>  esc_html__( 'Phone Number', 'home-interior-designer' ),
        'settings' => 'home_interior_designer_phone_number' ,
        'section'  => 'home_interior_designer_blog_slide_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_email_heading',
		'section'     => 'home_interior_designer_blog_slide_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'label'    =>  esc_html__( 'Email Text', 'home-interior-designer' ),
        'settings' => 'home_interior_designer_email_text' ,
        'section'  => 'home_interior_designer_blog_slide_section',
    ] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'url',
        'label'    =>  esc_html__( 'Email Address', 'home-interior-designer' ),
        'settings' => 'home_interior_designer_email_address' ,
        'section'  => 'home_interior_designer_blog_slide_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_social_heading',
		'section'     => 'home_interior_designer_blog_slide_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media', 'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'home_interior_designer_blog_slide_section',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'home-interior-designer' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'home-interior-designer' ),
		'settings'     => 'home_interior_designer_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'home-interior-designer' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'home-interior-designer' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'home-interior-designer' ),
				'description' => esc_html__( 'Add the social icon url here.', 'home-interior-designer' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'home_interior_designer_slider_opacity_color',
		'label'       => esc_html__( 'Slider Opacity Option', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_blog_slide_section',
		'default'     => '1.0',
		'placeholder' => esc_html__( 'Choose an option', 'home-interior-designer' ),
		'choices'     => [
			'0' => esc_html__( '0', 'home-interior-designer' ),
			'0.1' => esc_html__( '0.1', 'home-interior-designer' ),
			'0.2' => esc_html__( '0.2', 'home-interior-designer' ),
			'0.3' => esc_html__( '0.3', 'home-interior-designer' ),
			'0.4' => esc_html__( '0.4', 'home-interior-designer' ),
			'0.5' => esc_html__( '0.5', 'home-interior-designer' ),
			'0.6' => esc_html__( '0.6', 'home-interior-designer' ),
			'0.7' => esc_html__( '0.7', 'home-interior-designer' ),
			'0.8' => esc_html__( '0.8', 'home-interior-designer' ),
			'0.9' => esc_html__( '0.9', 'home-interior-designer' ),
			'unset' => esc_html__( 'Unset', 'home-interior-designer' ),
			

		],
	] );

	//TRENDING BLOGS SECTION

	Kirki::add_section( 'home_interior_designer_trending_section', array(
	    'title'          => esc_html__( 'Trending News Settings', 'home-interior-designer' ),
	    'panel'          => 'home_interior_designer_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'home-interior-designer' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( HOME_INTERIOR_DESIGNER_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'home-interior-designer' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'home_interior_designer_trending_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'home-interior-designer' ) . '</div>',
	    'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_enable_heading',
		'section'     => 'home_interior_designer_trending_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Services',  'home-interior-designer' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_interior_designer_trending_section_enable',
		'section'     => 'home_interior_designer_trending_section',
		'default'     => false,
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'home-interior-designer' ),
			'off' => esc_html__( 'Disable',  'home-interior-designer' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_short_heading',
		'section'     => 'home_interior_designer_trending_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Short Heading',  'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'home_interior_designer_trending_short_heading' ,
        'section'  => 'home_interior_designer_trending_section',
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_trending_main_heading',
		'section'     => 'home_interior_designer_trending_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading',  'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'home_interior_designer_trending_heading' ,
        'section'  => 'home_interior_designer_trending_section',
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_number_heading',
		'section'     => 'home_interior_designer_trending_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number of post to show',  'home-interior-designer' ) . '</h3>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'home_interior_designer_trending_number',
		'section'     => 'home_interior_designer_trending_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_category_heading',
		'section'     => 'home_interior_designer_trending_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Select the category to show post',  'home-interior-designer' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'home_interior_designer_trending_category',
		'section'     => 'home_interior_designer_trending_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'home-interior-designer' ),
		'priority'    => 10,
		'choices'     => home_interior_designer_get_categories_select(),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'home_interior_designer_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'home-interior-designer' ),
        'panel'          => 'home_interior_designer_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'home-interior-designer' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( HOME_INTERIOR_DESIGNER_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'home-interior-designer' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'home_interior_designer_footer_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'home-interior-designer' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_footer_enable_heading',
		'section'     => 'home_interior_designer_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_interior_designer_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-interior-designer' ),
			'off' => esc_html__( 'Disable', 'home-interior-designer' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_interior_designer_footer_text_heading',
		'section'     => 'home_interior_designer_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'home-interior-designer' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'home_interior_designer_footer_text',
		'section'  => 'home_interior_designer_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'home_interior_designer_footer_text_heading_2',
	'section'     => 'home_interior_designer_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'home-interior-designer' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'home_interior_designer_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'home-interior-designer' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'home-interior-designer' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'home-interior-designer' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'home-interior-designer' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'home_interior_designer_footer_text_heading_1',
	'section'     => 'home_interior_designer_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'home-interior-designer' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'home_interior_designer_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'home-interior-designer' ),
		'section'     => 'home_interior_designer_footer_section',
		'default'     => '',
	] );
}

/*
 *  Customizer Notifications
 */

$home_interior_designer_config_customizer = array(
    'recommended_plugins' => array( 
        'kirki' => array(
            'recommended' => true,
            'description' => sprintf( 
                /* translators: %s: plugin name */
                esc_html__( 'If you want to show all the sections of the FrontPage, please install and activate %s plugin', 'home-interior-designer' ), 
                '<strong>' . esc_html__( 'Kirki Customizer', 'home-interior-designer' ) . '</strong>'
            ),
        ),
    ),
    'home_interior_designer_recommended_actions'       => array(),
    'home_interior_designer_recommended_actions_title' => esc_html__( 'Recommended Actions', 'home-interior-designer' ),
    'home_interior_designer_recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'home-interior-designer' ),
    'home_interior_designer_install_button_label'      => esc_html__( 'Install and Activate', 'home-interior-designer' ),
    'home_interior_designer_activate_button_label'     => esc_html__( 'Activate', 'home-interior-designer' ),
    'home_interior_designer_deactivate_button_label'   => esc_html__( 'Deactivate', 'home-interior-designer' ),
);

Home_Interior_Designer_Customizer_Notify::init( apply_filters( 'home_interior_designer_customizer_notify_array', $home_interior_designer_config_customizer ) );