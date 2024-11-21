<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_home_interior_designer_dismissed_notice_handler', 'home_interior_designer_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function home_interior_designer_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function home_interior_designer_deprecated_hook_admin_notice() {
        // Check if it's been dismissed...
        if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>
            <?php
            $current_screen = get_current_screen();
				if ($current_screen->id !== 'appearance_page_home-interior-designer-guide-page') {
             $home_interior_designer_comments_theme = wp_get_theme(); ?>
            <div class="home-interior-designer-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="home-interior-designer-notice">
				<div class="home-interior-designer-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/admin-logo.png'); ?>" alt="<?php esc_attr_e('logo', 'home-interior-designer'); ?>">
				</div>
				<div class="home-interior-designer-notice-content">
					<div class="home-interior-designer-notice-heading"><?php esc_html_e('Thanks for installing ','home-interior-designer'); ?><?php echo esc_html( $home_interior_designer_comments_theme ); ?></div>
					<p><?php printf(__('In order to fully benefit from everything our theme has to offer, please make sure you visit our <a href="%s">For Premium Options</a>.', 'home-interior-designer'), esc_url(admin_url('themes.php?page=home-interior-designer-guide-page'))); ?></p>
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'home_interior_designer_deprecated_hook_admin_notice' );

add_action( 'admin_menu', 'home_interior_designer_getting_started' );
function home_interior_designer_getting_started() {
	add_theme_page( esc_html__('Get Started', 'home-interior-designer'), esc_html__('Get Started', 'home-interior-designer'), 'edit_theme_options', 'home-interior-designer-guide-page', 'home_interior_designer_test_guide');
}

function home_interior_designer_admin_enqueue_scripts() {
	wp_enqueue_style( 'home-interior-designer-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
	wp_enqueue_script( 'home-interior-designer-admin-script', get_template_directory_uri() . '/js/home-interior-designer-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'home-interior-designer-admin-script', 'home_interior_designer_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'home_interior_designer_admin_enqueue_scripts' );

if ( ! defined( 'HOME_INTERIOR_DESIGNER_DOCS_FREE' ) ) {
define('HOME_INTERIOR_DESIGNER_DOCS_FREE',__('https://demo.misbahwp.com/docs/home-interior-designer-free-docs/','home-interior-designer'));
}
 if ( ! defined( 'HOME_INTERIOR_DESIGNER_DOCS_PRO' ) ) {
define('HOME_INTERIOR_DESIGNER_DOCS_PRO',__('https://demo.misbahwp.com/docs/home-interior-designer-pro-docs','home-interior-designer'));
}
if ( ! defined( 'HOME_INTERIOR_DESIGNER_BUY_NOW' ) ) {
define('HOME_INTERIOR_DESIGNER_BUY_NOW',__('https://www.misbahwp.com/products/interior-wordpress-theme','home-interior-designer'));
}
if ( ! defined( 'HOME_INTERIOR_DESIGNER_SUPPORT_FREE' ) ) {
define('HOME_INTERIOR_DESIGNER_SUPPORT_FREE',__('https://wordpress.org/support/theme/home-interior-designer','home-interior-designer'));
}
if ( ! defined( 'HOME_INTERIOR_DESIGNER_REVIEW_FREE' ) ) {
define('HOME_INTERIOR_DESIGNER_REVIEW_FREE',__('https://wordpress.org/support/theme/home-interior-designer/reviews/#new-post','home-interior-designer'));
}
if ( ! defined( 'HOME_INTERIOR_DESIGNER_DEMO_PRO' ) ) {
define('HOME_INTERIOR_DESIGNER_DEMO_PRO',__('https://demo.misbahwp.com/home-interior-designer/','home-interior-designer'));
}
if( ! defined( 'HOME_INTERIOR_DESIGNER_THEME_BUNDLE' ) ) {
define('HOME_INTERIOR_DESIGNER_THEME_BUNDLE',__('https://www.misbahwp.com/products/wordpress-bundle','home-interior-designer'));
}

function home_interior_designer_test_guide() { ?>
	<?php $home_interior_designer_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( HOME_INTERIOR_DESIGNER_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'home-interior-designer' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'home-interior-designer' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( HOME_INTERIOR_DESIGNER_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'home-interior-designer' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( HOME_INTERIOR_DESIGNER_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'home-interior-designer' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','home-interior-designer'); ?><?php echo esc_html( $home_interior_designer_theme ); ?>  <span><?php esc_html_e('Version: ', 'home-interior-designer'); ?><?php echo esc_html($home_interior_designer_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $home_interior_designer_theme->get_screenshot() ); ?>" />
				<div id="description-insidee">
					<?php
						$home_interior_designer_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $home_interior_designer_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'home-interior-designer' ); ?></h3>
				<div class="insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','home-interior-designer'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( HOME_INTERIOR_DESIGNER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'home-interior-designer' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( HOME_INTERIOR_DESIGNER_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'home-interior-designer' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( HOME_INTERIOR_DESIGNER_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'home-interior-designer' ) ?></a>
					</div>
				</div>

				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'home-interior-designer' ); ?></h3>
				<div class="insidee theme-bundle">
					<p class="offer"><?php esc_html_e('Get 80+ Perfect WordPress Theme In A Single Package at just $99."','home-interior-designer'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 80+ WordPress Themes At 15% Off','home-interior-designer'); ?><span class="coupon-code"><?php esc_html_e('"Bundleup15"','home-interior-designer'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( HOME_INTERIOR_DESIGNER_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'home-interior-designer' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','home-interior-designer'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','home-interior-designer'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','home-interior-designer'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','home-interior-designer'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('LearnPress Campatiblity','home-interior-designer'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','home-interior-designer'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','home-interior-designer'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','home-interior-designer'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','home-interior-designer'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','home-interior-designer'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','home-interior-designer'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','home-interior-designer'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','home-interior-designer'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','home-interior-designer'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','home-interior-designer'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','home-interior-designer'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>

<?php } ?>
