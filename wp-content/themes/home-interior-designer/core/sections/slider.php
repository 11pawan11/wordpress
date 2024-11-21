<?php if ( get_theme_mod('home_interior_designer_blog_box_enable',false) ) : ?>

<?php $home_interior_designer_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('home_interior_designer_blog_slide_category'),
  'posts_per_page' => get_theme_mod('home_interior_designer_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $home_interior_designer_arr_posts = new WP_Query( $home_interior_designer_args );
    if ( $home_interior_designer_arr_posts->have_posts() ) :
      while ( $home_interior_designer_arr_posts->have_posts() ) :
        $home_interior_designer_arr_posts->the_post();
        ?>
        <div class="blog_inner_box">
         <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            else:
              ?>
              <div class="slider-alternate">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'; ?>">
              </div>
              <?php
            endif;
          ?>
          <div class="blog_box wow fadeInLeft">
            <div class="blog_box_inner">
              <?php if ( get_theme_mod('home_interior_designer_slider_text_extra') ) : ?>
                <h5><?php echo esc_html(get_theme_mod('home_interior_designer_slider_text_extra'));?></h5>
              <?php endif; ?>
              <h3><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h3>
              <p class="slider-button mt-4">
                <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('READ MORE','home-interior-designer'); ?></a>
              </p>
              <div class="row mt-5 slider-info">
                <div class="col-lg-6 col-md-12 align-self-center mb-md-3 mb-0 mb-lg-0">
                  <?php if ( get_theme_mod('home_interior_designer_phone_text') || get_theme_mod('home_interior_designer_phone_number') ) : ?>
                    <div class="row mb-3 mb-md-0">
                      <div class="col-lg-3 col-md-3 col-3 align-self-center">
                        <i class="fas fa-phone"></i>
                      </div>
                      <div class="col-lg-9 col-md-9 col-9 align-self-center px-0">
                        <?php if ( get_theme_mod('home_interior_designer_phone_text') ) : ?>
                          <h6 class="mb-1"><?php echo esc_html(get_theme_mod('home_interior_designer_phone_text'));?></h6>
                        <?php endif; ?>
                        <?php if ( get_theme_mod('home_interior_designer_phone_number') ) : ?>
                          <p class="mb-0"><?php echo esc_html(get_theme_mod('home_interior_designer_phone_number'));?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="col-lg-6 col-md-12 align-self-center">
                  <?php if ( get_theme_mod('home_interior_designer_email_text') || get_theme_mod('home_interior_designer_email_address') ) : ?>
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-3 align-self-center">
                        <i class="fas fa-envelope"></i>
                      </div>
                      <div class="col-lg-9 col-md-9 col-9 align-self-center px-0">
                        <?php if ( get_theme_mod('home_interior_designer_email_text') ) : ?>
                          <h6 class="mb-1"><?php echo esc_html(get_theme_mod('home_interior_designer_email_text'));?></h6>
                        <?php endif; ?>
                        <?php if ( get_theme_mod('home_interior_designer_email_address') ) : ?>
                          <p class="mb-0"><?php echo esc_html(get_theme_mod('home_interior_designer_email_address'));?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <?php $home_interior_designer_settings = get_theme_mod( 'home_interior_designer_social_links_settings' ); ?>
          <?php if ( is_array($home_interior_designer_settings) || is_object($home_interior_designer_settings) ){ ?>
            <div class="social-links">
              <?php foreach( $home_interior_designer_settings as $home_interior_designer_setting ) { ?>
                <a href="<?php echo esc_url( $home_interior_designer_setting['link_url'] ); ?>">
                  <i class="<?php echo esc_attr( $home_interior_designer_setting['link_text'] ); ?>"></i>
                </a>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
</div>

<?php endif; ?>