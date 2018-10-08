<?php get_header() ?>

<div class="news-header">
  <h1>News &amp; Insights</h1>
</div>

<div id="posts">
  <div class="wrap">

    <?php if ( have_posts() ) : ?>
      <div class="row">
    	<?php
      $i = 0;
      $cols = 3;

      while ( have_posts() ) : the_post();

      if (($i % 3 == 0) || $i == 0) {
          echo '';
      }

      $categories = get_the_category();
      $category_names = array();
      foreach ($categories as $category)
      {
          $category_names[] = $category->cat_name;
      }

      $col_class = '';

      foreach($category_names as $cn) {
        if(strtolower($cn) == 'press release') {
          $col_class = ' press-release';
        }
        if(strtolower($cn) == 'thought leadership') {
          $col_class = ' thought-leadership';
        }
        if(strtolower($cn) == 'general') {
          $col_class = ' general';
        }
      }

      ?>
      
      <div class="article_wrap" <?php $image = get_field('news_hero_image'); if( !empty($image) ): ?> style="background-image: url('<?php echo $image['url']; ?>')" <?php endif; ?> >
	      <div class="col<?php echo $col_class ?>">
      	  <div class="meta">
      	    <?php the_time('F j, Y') ?> <span>//</span>
      	    <?php
      	    echo implode(', ', $category_names);
      	    ?>
      	  </div>
      	  <h2><?php the_title() ?></h2>
      	  <a href="<?php the_permalink() ?>" class="read-more">More</a>
      	</div>
      </div>
      

      
      
      <?php
      $rowCount++;
      if($rowCount % $cols == 0) echo '</div><div class="row">';
      ?>
    	<?php
      $i++;
      endwhile;
      ?>
      </div>
    <?php endif; ?>

  <div class="pagination clearfix">
    <span class="prev"><?php previous_posts_link('NEWER &raquo;'); ?></span>
    <span class="next"><?php next_posts_link('&laquo; OLDER'); ?></span>
  </div>

  </div>
</div>

<?php get_footer() ?>
