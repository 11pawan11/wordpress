<?php

class Home_Interior_Designer_Customizer_Notify {

	private $config = array(); // Declare $config property
	
	private $home_interior_designer_recommended_actions;
	
	private $recommended_plugins;
	
	private static $instance;
	
	private $home_interior_designer_recommended_actions_title;
	
	private $home_interior_designer_recommended_plugins_title;
	
	private $dismiss_button;
	
	private $home_interior_designer_install_button_label;
	
	private $home_interior_designer_activate_button_label;
	
	private $home_interior_designer_deactivate_button_label;

	
	public static function init( $config ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Home_Interior_Designer_Customizer_Notify ) ) {
			self::$instance = new Home_Interior_Designer_Customizer_Notify;
			if ( ! empty( $config ) && is_array( $config ) ) {
				self::$instance->config = $config;
				self::$instance->setup_config();
				self::$instance->setup_actions();
			}
		}

	}

	
	public function setup_config() {

		global $home_interior_designer_customizer_notify_recommended_plugins;
		global $home_interior_designer_customizer_notify_home_interior_designer_recommended_actions;

		global $home_interior_designer_install_button_label;
		global $home_interior_designer_activate_button_label;
		global $home_interior_designer_deactivate_button_label;

		$this->home_interior_designer_recommended_actions = isset( $this->config['home_interior_designer_recommended_actions'] ) ? $this->config['home_interior_designer_recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->home_interior_designer_recommended_actions_title = isset( $this->config['home_interior_designer_recommended_actions_title'] ) ? $this->config['home_interior_designer_recommended_actions_title'] : '';
		$this->home_interior_designer_recommended_plugins_title = isset( $this->config['home_interior_designer_recommended_plugins_title'] ) ? $this->config['home_interior_designer_recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$home_interior_designer_customizer_notify_recommended_plugins = array();
		$home_interior_designer_customizer_notify_home_interior_designer_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$home_interior_designer_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->home_interior_designer_recommended_actions ) ) {
			$home_interior_designer_customizer_notify_home_interior_designer_recommended_actions = $this->home_interior_designer_recommended_actions;
		}

		$home_interior_designer_install_button_label    = isset( $this->config['home_interior_designer_install_button_label'] ) ? $this->config['home_interior_designer_install_button_label'] : '';
		$home_interior_designer_activate_button_label   = isset( $this->config['home_interior_designer_activate_button_label'] ) ? $this->config['home_interior_designer_activate_button_label'] : '';
		$home_interior_designer_deactivate_button_label = isset( $this->config['home_interior_designer_deactivate_button_label'] ) ? $this->config['home_interior_designer_deactivate_button_label'] : '';

	}

	
	public function setup_actions() {

		// Register the section
		add_action( 'customize_register', array( $this, 'home_interior_designer_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'home_interior_designer_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'home_interior_designer_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'home_interior_designer_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}

	
	public function home_interior_designer_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'home-interior-designer-customizer-notify-css', get_template_directory_uri() . '/core/includes/customizer-notice/css/home-interior-designer-customizer-notify.css', array());

		wp_enqueue_style( 'plugin-install' );
		wp_enqueue_script( 'plugin-install' );
		wp_add_inline_script( 'plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'updates' );

		wp_enqueue_script( 'home-interior-designer-customizer-notify-js', get_template_directory_uri() . '/core/includes/customizer-notice/js/home-interior-designer-customizer-notify.js', array( 'customize-controls' ));
		wp_localize_script(
			'home-interior-designer-customizer-notify-js', 'homeinteriordesignerCustomizercompanionObject', array(
				'ajaxurl'            => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'base_path'          => admin_url(),
				'activating_string'  => __( 'Activating', 'home-interior-designer' ),
			)
		);

	}

	
	public function home_interior_designer_plugin_notification_customize_register( $wp_customize ) {

		
		require_once get_template_directory() . '/core/includes/customizer-notice/home-interior-designer-customizer-notify-section.php';

		$wp_customize->register_section_type( 'Home_Interior_Designer_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new Home_Interior_Designer_Customizer_Notify_Section(
				$wp_customize,
				'home-interior-designer-customizer-notify-section',
				array(
					'title'          => $this->home_interior_designer_recommended_actions_title,
					'plugin_text'    => $this->home_interior_designer_recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}

	
	public function home_interior_designer_customizer_notify_dismiss_recommended_action_callback() {

		global $home_interior_designer_customizer_notify_home_interior_designer_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */ 

		if ( ! empty( $action_id ) ) {
			
			if ( get_option( 'home_interior_designer_customizer_notify_show' ) ) {

				$home_interior_designer_customizer_notify_show_home_interior_designer_recommended_actions = get_option( 'home_interior_designer_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$home_interior_designer_customizer_notify_show_home_interior_designer_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$home_interior_designer_customizer_notify_show_home_interior_designer_recommended_actions[ $action_id ] = false;
						break;
				}
				update_option( 'home_interior_designer_customizer_notify_show', $home_interior_designer_customizer_notify_show_home_interior_designer_recommended_actions );

				
			} else {
				$home_interior_designer_customizer_notify_show_home_interior_designer_recommended_actions = array();
				if ( ! empty( $home_interior_designer_customizer_notify_home_interior_designer_recommended_actions ) ) {
					foreach ( $home_interior_designer_customizer_notify_home_interior_designer_recommended_actions as $home_interior_designer_lite_customizer_notify_recommended_action ) {
						if ( $home_interior_designer_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$home_interior_designer_customizer_notify_show_home_interior_designer_recommended_actions[ $home_interior_designer_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$home_interior_designer_customizer_notify_show_home_interior_designer_recommended_actions[ $home_interior_designer_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					update_option( 'home_interior_designer_customizer_notify_show', $home_interior_designer_customizer_notify_show_home_interior_designer_recommended_actions );
				}
			}
		}
		die(); 
	}

	
	public function home_interior_designer_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */

		if ( ! empty( $action_id ) ) {

			$home_interior_designer_lite_customizer_notify_show_recommended_plugins = get_option( 'home_interior_designer_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$home_interior_designer_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$home_interior_designer_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			update_option( 'home_interior_designer_customizer_notify_show_recommended_plugins', $home_interior_designer_lite_customizer_notify_show_recommended_plugins );
		}
		die(); 
	}

}
