<?php

get_header();

get_template_part( 'template-parts/layout/before', get_post_format() );


if ( have_posts() )
{
  while ( have_posts() )
  {
    the_post();
    if (is_sticky())
    {
      echo '<div class="border p-3 bg-light rounded">';
    }
    else
    {
      echo '<div class="border-bottom py-3">';
    }
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
