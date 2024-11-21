<?php if ( get_theme_mod('home_interior_designer_trending_section_enable',false) ) : ?>

<?php $home_interior_designer_left_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('home_interior_designer_trending_category'),
  'posts_per_page' => get_theme_mod('home_interior_designer_trending_number'),
); ?>

	<div id="trending" class="py-5">
		<div class="container">
			<div class="text-center wow flip">
				<?php if ( get_theme_mod('home_interior_designer_trending_short_heading') ) : ?>
	    		<h6 class="mb-3"><?php echo esc_html(get_theme_mod('home_interior_designer_trending_short_heading'));?></h6>
	    	<?php endif; ?>
				<?php if ( get_theme_mod('home_interior_designer_trending_heading') ) : ?>
	    		<h2 class="mb-0"><?php echo esc_html(get_theme_mod('home_interior_designer_trending_heading'));?></h2>
	    	<?php endif; ?>
	    </div>
			<div class="row mt-5">
				<?php $home_interior_designer_arr_posts = new WP_Query( $home_interior_designer_left_args );
			    if ( $home_interior_designer_arr_posts->have_posts() ) :
			      while ( $home_interior_designer_arr_posts->have_posts() ) :
			        $home_interior_designer_arr_posts->the_post(); ?>
			        <div class="col-lg-3 col-md-6 col-sm-6">
								<div class="trending-box wow zoomIn">
									<div class="trending-image">
										<?php
				              if ( has_post_thumbnail() ) :
				                the_post_thumbnail();
				              endif;
				            ?>
				          </div>
									<h3><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h3>
									<?php echo wp_trim_words( get_the_content(), get_theme_mod('home_interior_designer_post_excerpt_number',20) ); ?>
								</div>
							</div>
			    <?php
			    endwhile;
			    wp_reset_postdata();
			    endif; ?>
			</div>
		</div>
	</div>
<?php endif; ?>