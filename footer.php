        </div>
      </div>
    </main>

    <footer>
      <div class="container-fluid border-top mt-5 bg-light">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <?php
            wp_nav_menu( array(
              'theme_location' => 'footer',
              'depth' => 1,
              'menu_class' => 'nav justify-content-center',
              'container' => 'nav',
              'container_class' => '',
            	'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
              //Process nav menu using our custom nav walker
              'walker' => new WP_Bootstrap_Navwalker())
            );
            ?>
          </div>
        </div>
        <?php if (is_active_sidebar( 'footer-widgets' )) : 
dynamic_sidebar( 'footer-widgets' ); endif; ?>
      </div>
      <?php wp_footer(); ?>
    </footer>

  </body>
</html>
