<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'home-interior-designer' ); ?></a>

<?php if ( get_theme_mod('home_interior_designer_site_loader', false) == true ) : ?>
	<div class="cssloader">
    	<div class="sh1"></div>
    	<div class="sh2"></div>
    	<h1 class="lt"><?php esc_html_e( 'loading',  'home-interior-designer' ); ?></h1>
    </div>
<?php endif; ?>

<div class="top-bar wow fadeInDown">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-7 align-self-center">
				<?php if ( get_theme_mod('home_interior_designer_topbar_text') ) : ?>
		    		<p class="mb-0 text-center text-md-start"><?php echo esc_html(get_theme_mod('home_interior_designer_topbar_text'));?></p>
		    	<?php endif; ?>
			</div>
			<div class="col-lg-5 col-md-5 align-self-center text-center text-md-end">
		   		<?php if ( get_theme_mod('home_interior_designer_topbar_opening_time') ) : ?>
		    		<p class="mb-0"><?php echo esc_html(get_theme_mod('home_interior_designer_topbar_opening_time'));?></p>
		    	<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="<?php if( get_theme_mod( 'home_interior_designer_sticky_header', false) != '') { ?>sticky-header<?php } else { ?>close-sticky main-menus<?php } ?>">
<header id="site-navigation">
	<div class="container">
		<div class="row wow fadeInUp">
			<div class="col-lg-3 col-md-3 align-self-center">
				<div class="logo text-center text-md-start">
		    		<div class="logo-image">
		    			<?php the_custom_logo(); ?>
			    	</div>
			    	<div class="logo-content">
				    	<?php
				    		if ( get_theme_mod('home_interior_designer_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_html(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('home_interior_designer_display_header_text', false) == true ) :
				      			echo '<span>'. esc_html(get_bloginfo('description')) . '</span>';
				      		endif;
			    		?>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 align-self-center text-center text-md-end">
				<button class="menu-toggle toggle-menu my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
					<span aria-hidden="true"><?php esc_html_e( 'Menu', 'home-interior-designer' ); ?></span>
				</button>
				<nav id="main-menu" class="close-panal main-menu">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'main-menu',
							'container' => 'false'
						));
					?>
					<button class="close-menu close-menu my-2 p-2" type="button">
						<span aria-hidden="true"><i class="fa fa-times"></i></span>
					</button>
				</nav>
			</div>
			<div class="col-lg-2 col-md-2 text-center text-md-end align-self-center">
				<?php if ( get_theme_mod('home_interior_designer_header_button_link') || get_theme_mod('home_interior_designer_header_button_text') ) : ?>
					<div class="top-button my-4">
		    			<a href="<?php echo esc_url(get_theme_mod('home_interior_designer_header_button_link'));?>"><?php echo esc_html(get_theme_mod('home_interior_designer_header_button_text'));?></a>
		    		</div>
		    	<?php endif; ?>
			</div>
		</div>
	</div>
</header>
</div>