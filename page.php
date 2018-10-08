<?php get_header() ?>

<div style="min-height:800px; background:#ddd;">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer() ?>
