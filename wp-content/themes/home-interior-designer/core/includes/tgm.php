<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function home_interior_designer_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'home-interior-designer' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	home_interior_designer_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'home_interior_designer_register_recommended_plugins' );