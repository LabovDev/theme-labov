<?php // WP Post Template: Premium Landing ?>
<?php get_header() ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="vertical" class="premium">
  <div class="header" style="background-image:url('<?php the_field("hero_background") ?>');"></div>
  <div class="content main">
    <div class="intro">
      <div class="wrap">
        <h1><?php the_field("hero_main_title") ?></h1>
        <!-- <h3><?php the_field("sub-title") ?></h3> -->
        <?php the_field("intro_paragraph") ?>
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-orange.svg" alt="Scroll" class="arrow">
      </div>
    </div>
    <div class="we-are" style="background-image:url('<?php the_field("are_not_background_image") ?>')">
      <div class="wrap">
        <div class="inner">
          <div class="img"></div>
          <div class="clearfix">
            <h3>Do you belong here?</h3>
            <div class="left">
              <div class="inner">
                <h2>We Are</h2>
                <ul>
                  <?php
                  if( have_rows('we_ares') ):
                    while ( have_rows('we_ares') ) : the_row();
                  ?>
                  <li><?php the_sub_field('item'); ?></li>
                  <?php
                    endwhile;
                  endif;
                  ?>
                </ul>
              </div>
            </div>
            <div class="right">
              <div class="inner">
                <h2>We Are Not</h2>
                <ul>
                  <?php
                  if( have_rows('we_are_nots') ):
                    while ( have_rows('we_are_nots') ) : the_row();
                  ?>
                  <li><?php the_sub_field('item'); ?></li>
                  <?php
                    endwhile;
                  endif;
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="clearfix" align="center">
            <a href="#contact-form" class="button talk-with-us"><span>Talk with Us</span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="logos">
      <div class="wrap">
        <h2>Clients we have been proud to work with.</h2>
        <?php
        $cols = 4;
        $rowCount = 0;
        ?>
        <?php if( have_rows('logos') ): ?>
        <div class="row">
          <?php
            $i = 0;
            while ( have_rows('logos') ) : the_row();
            if (($i % 4 == 0) || $i == 0) {
                echo '';
            }
            ?>
            <div class="col">
                <img src="<?php the_sub_field("image") ?>">
            </div>
            <?php
            $rowCount++;
            //if($rowCount % $cols == 0) echo '</div><div class="row">';
            ?>
          <?php
            $i++;
            endwhile; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="result">
      <div class="wrap">
        <div class="slides">
          <div class="slide">
            <div class="main-content">
              <h2>From scotch whisky to jet cards to wealth management to church insurance to healthcare logistics we have:</h2>
              <p class="words">
                <span>Utilized a service firm’s annual report to being their top business generation tool</span>
                <span>Discovered, named and marketed a jet card’s customer experience</span>
                <span>Created a Specialist program to train and engage the channel in recommending and representing our client’s product</span>
                <span>Developed mobile technology to train thousands of corporate employees as well as the channel on product differentiation</span>
                <span>Developed social media campaigns to test and refine new product offerings</span>
                <span>Created a nationwide campaign to engage everyone from the boardroom to the channel to provide the customer a unique brand value and experience</span>
                <span>Conducted internal marketing and training to assist a financial services firm in providing superior customer service and improving retention</span>
                <span>Created a brand story book to preserve the culture as founders retire</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="segments">
      <div class="wrap small" style="background-image:url('<?php the_field("audiences_background") ?>');">
        <div class="row">
          <div class="col">
            <div align="right">
              <p><?php the_field("audience_title") ?></p>
            </div>
          </div>
          <div class="col">
            <ul>
              <?php
              if( have_rows('audiences') ):
                while ( have_rows('audiences') ) : the_row();
              ?>
              <li><?php the_sub_field('audience'); ?></li>
              <?php
                endwhile;
              endif;
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="cta">
      <p>Contact us today &amp; get the ball rolling.</p>
      <a href="#contact-form" class="button talk-with-us"><span>Talk with us</span></a>
    </div>

    <div style="position:relative;"><div id="case-studies" style="position:absolute; top:-600px;"></div></div>

    <div class="case-studies">
        <div class="outer">
        <?php
        if( have_rows('case_studies') ):
          while ( have_rows('case_studies') ) : the_row();
        ?>
        <?php
        $posts = get_sub_field('case_study');
        if( $posts ):
        ?>
        <?php foreach( $posts as $post): ?>
            <?php setup_postdata($post); ?>
            <div class="case-study">
              <div class="img" style="background-image:url('<?php the_field("landing_background_image") ?>');"><div class="overlay"></div></div>

              <div class="content">
                  <div class="top">
                      <p>Case Study:</p>
                      <h3><?php the_title(); ?></h3>
                  </div>
                  <div class="bottom">
                      <p><?php the_field('landing_intro_text') ?></p>
                      <a href="<?php the_permalink() ?>" class="more-button">MORE</a>
                  </div>
              </div>

            </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <?php
          endwhile;
        endif;
        ?>
        </div>
    </div>
    <div class="cta">
      <p>Let's talk about your success.</p>
      <a href="#contact-form" class="button talk-with-us"><span>Talk with us</span></a>
    </div>
    <div class="article">
      <div class="clearfix">
        <?php
        $posts = get_field('article');
        if( $posts ):
        ?>
        <?php foreach( $posts as $post): ?>
            <?php setup_postdata($post); ?>
            <div class="left">
              <div class="inner">
                Thought Leadership
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="author"><?php the_author() ?></div>
              </div>
            </div>
            <div class="right">
              <div class="inner">
                <p><?php the_excerpt() ?></p>
                <a href="<?php the_permalink(); ?>" class="button outline">More</a>
              </div>
            </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>
