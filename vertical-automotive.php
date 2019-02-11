<?php // WP Post Template: Automotive Landing ?>
<?php get_header() ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="vertical" class="automotive">
  <div class="header" style="background-image:url('<?php the_field("hero_background") ?>');">
    <div class="wrap">
      <div class="text">
        <h1><?php the_field("hero_main_title") ?></h1>
        <h3><?php the_field("sub-title") ?></h3>
      </div>
    </div>
  </div>
  <div class="hdrShape hdrShape--auto"></div>
  <div class="content main">
    <div class="intro">
      <div class="wrap">
        <?php the_field("intro_paragraph") ?>
      </div>
    </div>

    <div class="flxWrap flxWrap--weAre">
      <div class="flxBloc flxBloc--weAreTop" style="background-image:url('<?php the_field("are_not_background_image") ?>')">
        <h2 class="hdln hdln--weAre">We Are</h2>
        <ul class="list shadow">
          <?php
          if( have_rows('we_ares') ):
            while ( have_rows('we_ares') ) : the_row();
          ?>
          <li class="listItem listItem--weAre"><?php the_sub_field('item'); ?></li>
          <?php
            endwhile;
          endif;
          ?>
        </ul>
      </div>
      <div class="flxBloc flxBloc--weAreBtm">
        <h2 class="hdln hdln--weAre hdln--weAreBtm">We Are Not</h2>
        <ul class="list">
          <?php
          if( have_rows('we_are_nots') ):
            while ( have_rows('we_are_nots') ) : the_row();
          ?>
          <li class="listItem listItem--weAre"><?php the_sub_field('item'); ?></li>
          <?php
            endwhile;
          endif;
          ?>
        </ul>
        <a href="#contact-form" class="button talk-with-us"><span>Talk with Us</span></a>
      </div>
    </div> <!-- END We Are -->

    <div class="logos">
      <div class="wrap">
        <h2>Clients we have been proud to work with.</h2>
        <?php if( have_rows('logos') ): ?>
        <div class="row">
          <?php
            while ( have_rows('logos') ) : the_row();
            ?>
            <div class="col">
                <img src="<?php the_sub_field("image") ?>">
            </div>
          <?php
            endwhile;
            ?>
          </div>
          <?php
          endif;
          ?>
      </div>
    </div>

    <div class="flxWrap flxWrap--results autoResults" style="background-image:url('<?php echo get_template_directory_uri() ?>/assets/img/result-placeholder.jpg');">
      <div class="flxBloc flxBloc--resTop">
        <h2 class="hdln hdln--results">From Suzuki to Ferrari, Mini to Winnebago, Evinrude to Harley&nbsp;-&nbsp;Davidson&hellip;</h2>
        <h3 class="hdln hdln--resultsBig">We have:</h3>
        <p class="txt txt--results words">
          <span>Trained dealer networks on brand, product and technology</span>
          <span>Inspired (certified) IS employee compliance via gamification</span>
          <span>Launched a product that had previously failed </span>
          <span>Established and ran a CPO division </span>
          <span>Marketed aftersales</span>
          <span>Created owner communications</span>
          <span>Re-engaged corporate morale through internal branding </span>
          <span>Increased sales through promotions</span>
          <span>Promoted an underdog product to prominence</span>
        </p>
      </div>
      <div class="flxBloc flxBloc--resBtm overlay">
        <h3 class="hdln hdln--resultsBig">Result:</h3>
        <p class="txt txt--results words">
          <span>99% Approval</span>
          <span>97% Compliance</span>
          <span>Sold Out</span>
          <span>24% Sales Increase</span>
          <span>Reached #1</span>
          <span>12% Retention Increase</span>
          <span>Exec. Trust from 23% to 92%</span>
          <span>22% Increase in a Flat Market</span>
          <span>From Last Place to Second in Segment</span>
        </p> 
      </div>
    </div> <!-- END Results (new) -->

    <div class="segments" style="background-image:url('<?php the_field("audiences_background") ?>');">
      <div class="wrap">
        <div class="row">
          <div class="col">
            <div align="right">
              <p class="skew-me"><span><?php the_field("audience_title") ?></span></p>
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
      <div class="wrap">
        <p class="smaller">If you are an OEM with a national dealer network that values service and customer satisfaction, contact us today, and we can help you finally earn the profits you deserve.</p>
      </div>
      <a href="#contact-form" class="button talk-with-us"><span>Talk with us</span></a>
    </div>

    <div style="position:relative;"><div id="case-studies" style="position:absolute; top:-500px;"></div></div>

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
