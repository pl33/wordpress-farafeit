<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php the_title('<h1 class="border-bottom">', '</h1>'); ?>
  </header>
  <main>
    <?php the_content(); ?>
  </main>
  <footer>
    <?php edit_post_link(__('Edit', 'farafeit')); ?>
  </footer>
</article>
