<?php // Template Name: About ?>
<?php get_header() ?>

<div class="page-header" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/img/about-header-bg.jpg);">
    <div>
        <div class="wrap small">
            <h1>Go Beyond</h1>
            <h2>Do the best work of your life.</h2>
            <p>
                Every day at LABOV is an opportunity to do the best work of your life. Surrounded by inspiring clients and creative, fun-loving co-workers, the greatest reward is working together to strategize winning solutions that help our clients and our employees succeed.
            </p>
            <div class="scroll-arrow">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/blue-arrow.svg" alt="Scroll" class="about-scroll">
            </div>
        </div>
    </div>
</div>

<div class="twelve-hours clearfix">
    <div>
        <div class="left">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/12-hours.png" alt="12 Hours of Labov" width="350">
        </div>
        <div class="right">
            <div>
                <h2>Making a difference in our community.</h2>
                <p>
                    Giving back is one of the cornerstones of LABOV. Throughout the year, we collect food, toys, clothing, money and more for those in need. Just as we Go Beyond in all that we do for our clients, we also want to Go Beyond in our charitable activities. That’s why we created the 12 Hours of LABOV.
                </p>
                <a href="#video" class="btn about-video-btn">WATCH VIDEO</a>
            </div>
        </div>
    </div>
</div>
<div style="display:none;">
    <div class="video-lightbox" id="video">
        <div class="close-btn">
            <img src="<?php echo get_template_directory_uri() ?>/assets/css/images/lightbox-close.png" alt="Close" class="lightbox-close">
        </div>
        <div class="inner">
            <div class="video-container">
                <iframe src="https://player.vimeo.com/video/122986549?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div class="leadership">
    <div class="wrap small">
        <h2>Leadership</h2>
        <hr>

        <?php
        $args = array(
            'post_type' => 'team_member'
        );
        $the_query = new WP_Query( $args );
        $cols = 3;
        $rowCount = 0;
        ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <div class="row">
        	<?php
            $i = 0;
            while ( $the_query->have_posts() ) : $the_query->the_post();
            if (($i % 3 == 0) || $i == 0) {
                echo '';
            }
            ?>
            <div class="col">
                <div class="person">
                    <a href="<?php the_permalink() ?>" class="person-lightbox">
                        <div class="img">
                          <span class="hover"></span>
                          <img src="<?php the_field('photo') ?>" alt="<?php the_title() ?>">
                        </div>
                        <h3><?php the_title() ?></h3>
                        <p><?php the_field('job_title') ?></p>
                    </a>
                </div>
            </div>
            <?php
            $rowCount++;
            if($rowCount % $cols == 0) echo '</div><div class="row">';
            ?>
        	<?php
            $i++;
            endwhile; ?>
        </div>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>

    </div>
</div>

<?php get_footer() ?>
