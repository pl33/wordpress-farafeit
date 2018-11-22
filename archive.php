<?php

get_header();

get_template_part( 'template-parts/layout/before', get_post_format() );


if ( have_posts() )
{
  the_archive_title( '<h1 class="page-title">', '</h1>' );
  the_archive_description( '<div class="taxonomy-description">', '</div>' );

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
  echo '<h1>'.__('Sorry, there are no posts.', 'farafeit').'</h1>';
}

get_template_part( 'template-parts/layout/after', get_post_format() );

get_footer();

?>
