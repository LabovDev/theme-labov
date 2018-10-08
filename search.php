<?php get_header() ?>

<div class="news-header small">

</div>

<div id="post">
  <div class="wrap clearfix">

    <div class="left">

      <h1 class="results-header">Search Results</h1>

      <hr>
      <?php $search_query = get_search_query(); ?>
      <?php if ( have_posts() ) : ?>

        <div class="single-post search-result">

      	<?php while ( have_posts() ) : the_post(); ?>

        <!-- Begin Post Content  -->
        <h2>
          <a href="<?php the_permalink() ?>">
            <?php the_title() ?>
          </a>
        </h2>
        <div class="meta search-page">
          <?php the_time('F j, Y') ?> <span>//</span>
          <?php
          $categories = get_the_category();
          $category_names = array();
          foreach ($categories as $category)
          {
              $category_names[] = $category->cat_name;
          }
          echo implode(', ', $category_names);
          ?>

          <hr>
        </div>
        <!-- // End Post Content  -->

      	<?php endwhile; ?>
        </div>
      <?php else: ?>
        <p>No posts found matching <b><?php echo $search_query; ?></b>.</p>
      <?php endif; ?>
    </div>
    <div class="right">
      <label for="s">Search</label>
      <form method="get">
        <input type="text" name="s" value="<?php echo htmlspecialchars($search_query); ?>">
      </form>

      <h2>Categories</h2>
      <?php wp_list_categories(array('title_li' => '')) ?>
    </div>

  </div>
</div>

<?php get_footer() ?>
