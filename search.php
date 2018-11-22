<?php

get_header();

get_template_part( 'template-parts/layout/before', get_post_format() );


if ( have_posts() )
{
  echo '<h1 class="border-bottom">';
  printf(__('Search results for: %s', 'farafeit'), '<span class="font-italic">'.get_search_query().'</span>');
  echo '</h1>';

  while ( have_posts() )
  {
    the_post();
    echo '<div class="border-bottom py-3">';
    get_template_part( 'template-parts/post/content', get_post_format() );
    echo '</div>';
  }
}
else
{
  ?>
  <h1><?php echo __('Sorry, no posts matching your keywords were found.', 'farafeit'); ?></h1>

  <p><?php echo __('Please try again with different keywords:', 'farafeit'); ?></p>

  <form class="form-inline mt-2 mt-md-0" role="search" action="<?php echo get_bloginfo('url'); ?>" method="get">
    <input class="form-control mr-sm-2" value="<?php echo get_search_query(); ?>" type="text" placeholder="<?php echo __('Search', 'farafeit'); ?>" aria-label="Search" name="s">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php echo __('Search', 'farafeit'); ?></button>
  </form>
  <?php
}

get_template_part( 'template-parts/layout/after', get_post_format() );

get_footer();

?>
