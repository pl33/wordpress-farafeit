<?php

get_header();

get_template_part( 'template-parts/layout/before', 'page' );


if ( have_posts() )
{
  while ( have_posts() )
  {
    the_post();
    get_template_part( 'template-parts/page/content', 'page' );
  }
}
else
{
  echo '<h1>'.__('Sorry, there are no posts.', 'farafeit').'</h1>';
}

get_template_part( 'template-parts/layout/after', 'page' );

get_footer();

?>
