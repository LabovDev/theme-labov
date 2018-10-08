<?php get_header() ?>

<div class="page-header case-study" style="background-image:url('<?php the_field("detail_bg") ?>');">
    <div>
        <div class="wrap small">
            <h1><?php the_title() ?></h1>
            <p><?php the_field('landing_intro_text') ?></p>

            <div class="scroll-arrow">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-white.svg" alt="Scroll" class="case-study-scroll">
            </div>
        </div>
    </div>
</div>

<div id="case-study">
    <div class="panel the-situation">
        <div class="wrap">
            <div class="row">
                <div class="col left">
                    <h2>The Situation</h2>
                </div>
                <div class="col right">
                    <?php the_field('the_situation_text') ?>
                </div>
            </div>
        </div>
    </div>

    <div class="panel the-strategy">

            <div class="row">
                <div class="col left" style="background-image:url('<?php the_field("the_strategy_background") ?>');">

                    <h2>The Strategy</h2>

                </div>
                <div class="col right">
                    <div class="content">
                      <?php the_field('the_strategy_text') ?>
                    </div>
                </div>
            </div>

    </div>

    <div class="panel the-finished-product">
        <div class="wrap">
            <div class="row">
                <div class="col left">
                    <h2>The Finished Product</h2>
                </div>
                <div class="col right">
                    <?php the_field('the_finished_product_text') ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    /*
    This image gallery will be have from 1 to 4 images.

    When clicked have them open in the smae kind of pop-up/modal as the leaders on the leadership page.

    If it’s just one image, just have the image be 100% width with no option to see it in a modal.
    */
    ?>
    <div class="the-gallery">
      <?php
      if( have_rows('gallery') ):
        $i=0;
        while ( have_rows('gallery') ) : the_row();
      ?>
      <div class="col">
          <a href="<?php the_sub_field('image'); ?>" class="gallery-img">
              <img src="<?php the_sub_field('image'); ?>" alt="Gallery <?=$i?>">
          </a>
      </div>
      <?php
            $i++;
        endwhile;
      endif;
      ?>
    </div>

    <div class="panel the-result">
        <div class="wrap">
            <div class="row">
                <div class="col left">
                    <h2>The Result</h2>
                </div>
                <div class="col right">
                    <?php the_field('the_result_text') ?>
                </div>
            </div>

            <div class="bottom-buttons">
              <?php
              // loop through verticals and then their case studies
              wp_reset_postdata();

              $current_case_study_name = get_the_title();
              $current_vertical = '';
              $vertical_name = '';

              $args = array('post_type' => 'vertical', 'posts_per_page' => 999);
              $the_query = new WP_Query( $args );

              if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                  // find case studies within current vertical
                  $vertical_permalink = get_the_permalink();
                  $vertical_name = get_the_title();

                  //echo '<br><br><b>';
                  //the_title();
                  //echo '</b><br>';

                  if( have_rows('case_studies') ):
                    while ( have_rows('case_studies') ) : the_row();
                    $posts = get_sub_field('case_study');
                    if( $posts ):
                      foreach( $posts as $post):
                        //the_title();
                        //echo '<br>';

                        setup_postdata($post);
                        if(get_the_title() == $current_case_study_name) {
                          $current_vertical = $vertical_permalink;
                          $current_vertical_name = $vertical_name;
                        }
                      endforeach;
                      //wp_reset_postdata();
                      endif;
                    endwhile;
                  endif;
                endwhile;
                wp_reset_postdata();
              endif;

              ?>
              <div>

                <br><br><br><br>

                <?php
                global $post;
                $post_slug = $post->post_name;
                ?>
                <?php if (stristr($post_slug, 'judge') || stristr($post_slug, 'elevating')): ?>
                  <a href="<?php echo site_url(""); ?>/automotive-powersports-rv/#case-studies" class="button">MORE CASE STUDIES</a>
                <?php else: ?>
                  <a href="<?php echo $current_vertical; ?>#case-studies" class="button">MORE CASE STUDIES</a>
                <?php endif; ?>

                <a href="#contact-form" class="button contact talk-with-us">TALK WITH US</a>
                <!-- <a href="<?php echo $current_vertical; ?>" class="button">BACK TO <?php echo $current_vertical_name; ?></a> -->

              </div>
            </div>
        </div>

    </div>

    <?php
    /*
    <div class="talk-with-us">
        <a href="#contact-form" class="button talk-with-us"><span>Talk with Us</span></a>
    </div>
    */
    ?>


</div>

<?php get_footer() ?>
