<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php
    if (is_single())
    {
      the_title('<h1>', '</h1>');
    }
    else
    {
      echo '<a href="'.get_the_permalink().'">';
      the_title('<h2>', '</h2>');
      echo '</a>';
    }
    ?>
    <p class="text-secondary font-italic<?php if (is_single()) : echo ' border-bottom'; endif; ?>">
      <?php
      if (is_sticky())
      {
        echo '<span class="oi oi-star" aria-hidden="true"></span> '.__('Featured', 'farafeit').' &nbsp;';
      }
      ?>
      <?php if (get_the_date()): ?><span class="oi oi-clock" aria-hidden="true"></span> <?php the_date(); ?> &nbsp; <?php endif; ?>
      <?php if (true): ?><span class="oi oi-person" aria-hidden="true"></span> <?php the_author_link(); ?>  &nbsp; <?php endif; ?>
      <?php edit_post_link(__('Edit', 'farafeit')); ?>
    </p>
  </header>
  <main>
    <?php
    the_content();
    ?>
  </main>
  <footer>
  </footer>
</article>
