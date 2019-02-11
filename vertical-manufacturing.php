<?php // WP Post Template: Manufacturing Landing ?>
<?php get_header() ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="vertical" class="manufacturing">
  <div class="header" style="background-image:url('<?php the_field("hero_background") ?>');">
    <div class="wrap">
      <div class="text">
        <h1><?php the_field("hero_main_title") ?></h1>
        <h3><?php the_field("sub-title") ?></h3>
      </div>
    </div>
  </div>
  <div class="content main">
    <div class="intro">
      <div class="wrap">
        <?php the_field("intro_paragraph") ?>
      </div>
    </div>

    <div class="flxWrap flxWrap--weAre flxWrap--weAre_M" style="background-image:url('<?php the_field("are_not_background_image") ?>')">
      <div class="flxBloc flxBloc--weAreTop flxBloc--weAreTop_M">
        <h2 class="hdln hdln--weAre hdln--weAre_M">We Are</h2>
        <ul class="list shadow">
          <?php
          if( have_rows('we_ares') ):
            while ( have_rows('we_ares') ) : the_row();
          ?>
          <li class="listItem listItem--weAre listItem--weAre_M"><?php the_sub_field('item'); ?></li>
          <?php
            endwhile;
          endif;
          ?>
        </ul>
      </div>
      <div class="flxBloc flxBloc--weAreBtm flxBloc--weAreBtm_M">
        <h2 class="hdln hdln--weAre hdln--weAreBtm hdln--weAre_M">We Are Not</h2>
        <ul class="list">
          <?php
          if( have_rows('we_are_nots') ):
            while ( have_rows('we_are_nots') ) : the_row();
          ?>
          <li class="listItem listItem--weAre listItem--weAre_M"><?php the_sub_field('item'); ?></li>
          <?php
            endwhile;
          endif;
          ?>
        </ul>
        <a href="#contact-form" class="button talk-with-us"><span>Talk with Us</span></a>
      </div>
    </div> <!-- END We Are (new) -->

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
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/tank.png" class="img" alt="Tank">
            <div class="main-content">
              <h2>From tanker trailers to valves, port trucks to pumps, components to fire hose nozzles</h2>
              <p>We have:</p>
              <p class="words">
                <span>Launched a new product AND re-launched the brand</span>
                <span>Trained distributors and dealers to recommend our client’s brand over the competition</span>
                <span>Inspired (certified) IS employee compliance via gamification</span>
                <span>Re-launched a client’s brand and revolutionized its culture</span>
                <span>Launched a new product before it was produced by utilizing 3D renderings</span>
                <span>Identified and named product differentiation, leveraging their enormous investment in engineering</span>
                <span>Re-engaged corporate morale through internal branding</span>
                <span>Created a brand story book to preserve the culture as founders retired</span>
                <span>Increased sales through promotion that saw 92% channel participation</span>
                <span>Promoted an underdog product to prominence</span>
              </p>
            </div>
            <div class="overlay" style="min-height:400px;">
              <p class="words">
                <span style="font-size:38px; line-height:38px;">saving 35% in budget and increasing sales 15%</span>
                <span>44% in sales increase</span>
                <span>97% compliance</span>
                <span>now reaching 70% market share</span>
                <span>top selling product in segment</span>
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span>exec trust from 23 to 92%</span>
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span>22% inc in flat market</span>
                <span>from last place to second in segment</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="segments" style="background-image:url('<?php the_field("audiences_background") ?>');">
      <div class="wrap small">
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
      <p class="upper">Contact us today &amp; get the ball rolling.</p>
      <a href="#contact-form" class="button talk-with-us"><span>Talk with us</span></a>
    </div>

    <div style="position:relative;"><div id="case-studies" style="position:absolute; top:-400px;"></div></div>

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
      <p class="big">Let's talk about your success.</p>
      <a href="#contact-form" class="button talk-with-us"><span>Talk with us</span></a>
    </div>
    <div class="article post_m">
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
