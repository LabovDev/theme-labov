<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<div id="team-member">
        <img src="<?php echo get_template_directory_uri() ?>/assets/css/images/lightbox-close.png" alt="Close" class="lightbox-close" onclick="$.colorbox.close();">
        <div class="inner clearfix">
            <div class="row">
                <div class="col">
									<div class="img">
										<img src="<?php the_field('photo') ?>" alt="<?php the_title() ?>">
									</div>
									<img src="<?php the_field('word_cloud') ?>" alt="Word Cloud" class="word-cloud">
                </div>
                <div class="col">
                    <h1><?php the_title() ?></h1>
                    <div class="job-title"><?php the_field('job_title') ?></div>
                    <hr class="hr__bio">
                    <div class="meta">
                        <?php the_field('phone_number') ?> <span class="sep">|</span>
                        <a href="mailto:<?php the_field('email_address') ?>">Email</a> <span class="sep">|</span>
                        <a href="<?php the_field('linked_in_url') ?>">LinkedIn</a></span>
                    </div>
                    <div class="bio">
                        <?php the_field('bio') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php endwhile; ?>
<?php endif; ?>
