<?php get_header(); ?>

<div id="content">
	<div class="container">
		<div class="py-5">
			<h1><?php esc_html_e('Not found', 'home-interior-designer'); ?></h1>
			<p><?php esc_html_e('Sorry, no posts matched your criteria.', 'home-interior-designer'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>