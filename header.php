<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-border px-lg-5">
        <a class="navbar-brand" href="<?php echo get_bloginfo('url'); ?>"><?php if (has_custom_logo()): ?><img src="<?php echo wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ), 'full')[0]; ?>" /><?php endif; ?> &nbsp; <?php echo get_bloginfo('name'); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <?php
          wp_nav_menu( array(
            'theme_location' => 'primary',
            'depth' => 2,
            'menu_class' => 'navbar-nav mr-auto',
            'container' => false,
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarCollapse',
          	'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            //Process nav menu using our custom nav walker
            'walker' => new WP_Bootstrap_Navwalker())
          );
          ?>
          <form class="form-inline mt-2 mt-md-0" role="search" action="<?php echo get_bloginfo('url'); ?>" method="get">
            <input class="form-control mr-sm-2" type="text" placeholder="<?php echo __('Search', 'farafeit'); ?>" aria-label="Search" name="s">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php echo __('Search', 'farafeit'); ?></button>
          </form>
        </div>
      </nav>
    </header>

    <main role="main">
      <div class="container-fluid mx-0 px-0">
        <?php if ( get_header_image() ) : ?>
          <div class="row px-0 mt-0 mt-lg-3 mx-0">
            <?php if ( is_front_page() ) : ?>
            <div class="col-12 col-lg-8 mx-auto px-0 px-md-3 mt-0 mt-md-3 d-block">
            <?php elseif ( is_active_sidebar( 'sidebar-right' ) && !is_front_page() ) : ?>
            <div class="col-lg-10 mx-auto px-3 px-lg-0 mt-3 d-none d-md-block">
            <?php else: ?>
            <div class="col-lg-8 mx-auto px-3 px-lg-0 mt-3 d-none d-md-block">
            <?php endif; ?>
              <img src="<?php header_image(); ?>" class="header-image rounded-md" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
            </div>
          </div>
        <?php endif; ?>
        <div class="row px-3 px-lg-0 mt-5 mx-0">
