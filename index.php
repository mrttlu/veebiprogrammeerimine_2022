<?php
    get_header();
  if ( have_posts() ) {
      while ( have_posts() ) {
          the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <?php the_excerpt();?>
          <a href="<?php the_permalink(); ?>">Loe rohkem</a>
          <?php
    }
  } else {
    ?>
      <h2>Veel ei ole ühtegi postitust</h2>
    <?php
  }
  get_footer();
?>