<footer>
   <div class="container">
    <?php
      if (is_active_sidebar('home-interior-designer-footer-sidebar')) {
        echo '<div class="row sidebar-area footer-area wow rollIn">';
          dynamic_sidebar('home-interior-designer-footer-sidebar');
        echo '</div>';
      } else { ?>
        <div id="footer-widgets" role="contentinfo">
          <div class="container">
            <div class="row sidebar-area footer-area wow rollIn">
              <div id="categories-2" class="col-lg-3 col-md-6 widget_categories">
                  <h4 class="title"><?php esc_html_e('Categories', 'home-interior-designer'); ?></h4>
                  <ul>
                      <?php
                      wp_list_categories(array(
                          'title_li' => '',
                      ));
                      ?>
                  </ul>
              </div>
              <div id="pages-2" class="col-lg-3 col-md-6 widget_pages wow rollIn">
                  <h4 class="title"><?php esc_html_e('Pages', 'home-interior-designer'); ?></h4>
                  <ul>
                      <?php
                      wp_list_pages(array(
                          'title_li' => '',
                      ));
                      ?>
                  </ul>
              </div>
              <div id="archives-2" class="col-lg-3 col-md-6 widget_archive wow rollIn">
                  <h4 class="title"><?php esc_html_e('Archives', 'home-interior-designer'); ?></h4>
                  <ul>
                      <?php
                      wp_get_archives(array(
                          'type' => 'postbypost',
                          'format' => 'html',
                          'before' => '<li>',
                          'after' => '</li>',
                      ));
                      ?>
                  </ul>
              </div>
              <div id="calendar" class="col-lg-3 col-md-6 widget_calendar wow rollIn">
                <h4 class="title"><?php esc_html_e('Calendar', 'home-interior-designer'); ?></h4>
                <?php get_calendar(); ?>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  <div class="copyright">
    <div class="container">
      <div class="copy-text">
        <p class="mb-0 py-3">
           <?php
            if (!get_theme_mod('home_interior_designer_footer_text') ) { ?>
              <a href="<?php echo esc_url('https://www.misbahwp.com/products/free-interior-designer-wordpress-theme'); ?>" target="_blank">
              <?php esc_html_e('Interior Designer WordPress Theme','home-interior-designer'); ?></a>
            <?php } else {
              echo esc_html(get_theme_mod('home_interior_designer_footer_text'));
            }
          ?>
          <?php if ( get_theme_mod('home_interior_designer_copyright_enable', true) == true ) : ?>
            <?php
            /* translators: %s: Misbah WP */
            printf( esc_html__( 'by %s', 'home-interior-designer' ), 'Misbah WP' ); ?>
            <a href="<?php echo esc_url('https://wordpress.org'); ?>" rel="generator"><?php  /* translators: %s: WordPress */  printf( esc_html__( ' | Proudly powered by %s', 'home-interior-designer' ), 'WordPress' ); ?></a>
          <?php endif; ?>
        </p>
      </div>
        <?php $home_interior_designer_scroll_top_icon = get_theme_mod( 'home_interior_designer_scroll_top_icon', 'dashicons dashicons-arrow-up-alt' ); ?>
        <?php if ( get_theme_mod('home_interior_designer_scroll_enable_setting', true) == true ) : ?>
          <div class="scroll-up">
              <a href="#tobottom"><span class="dashicons dashicons-<?php echo esc_attr( $home_interior_designer_scroll_top_icon ); ?>"></span></a>
          </div>
        <?php endif; ?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
