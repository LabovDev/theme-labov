<?php 

// Template Name: NPS

get_header() ?>

<div>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <div class="pageHero pageHero--nps">
        <h1 class="hdln hdln--hero" >Net Promoter Score: 73</h1>
        <img class="npsHero__img" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-labov/assets/img/nps_hero_dial.png" alt="Net Promotor Score Dial">
      	<p class="txt txt--hero">In other words: Our clients speak, we listen.</p>
      </div>
		</div>

		<section class="bloc bloc__col">
			<div class="bloc bloc--half bloc--space nps__intro">
				<h1 class="hdln hdln--h1">Measuring Loyalty</h2>
				<p class="txt txt--intro">Net Promoter Score (NPS) is a measurement of customer loyalty and a predictor of business growth. Ranging from -100 to 100, NPS measures customer willingness to recommend a company&rsquo;s products or services.</p>
				<p class="txt txt--intro">How does LABOV&rsquo;s 73 NPS compare to other companies? Brands including Microsoft and Honda score between 0 and 49. Walt Disney and Tiffany &amp; Co. fall between 50 and 70. Starbucks and Bose have achieved a 70+ NPS.</p>
			</div>

			<div class="bloc bloc--half bloc--space nps__scores">
				<ul>
					<li class="score__bull score__bull--Lbv"><span class="score--markerAlt">73 NPS</span>
						<ul>
							<li class="score--item">LABOV</li>
						</ul>
					</li>
				</ul>
				<ul>
					<li class="score__bull"><span class="score--marker">70+ NPS</span>
						<ul>
							<li class="score--item">USAA</li>
							<li class="score--item">Starbucks</li>
							<li class="score--item">Bose</li>
						</ul>
					</li>
				</ul>
				<ul>
					<li class="score__bull"><span class="score--marker">50 - 69</span>
						<ul>
							<li class="score--item">Walt Disney</li>
							<li class="score--item">Tiffany &amp; Co.</li>
							<li class="score--item">Sony</li>
						</ul>
					</li>
				</ul>
				<ul>
					<li class="score__bull"><span class="score--marker">0 - 49</span>
						<ul>
							<li class="score--item">Microsoft</li>
							<li class="score--item">Honda</li>
							<li class="score--item">Lowes</li>
						</ul>
					</li>
				</ul>
			</div>
	</section> <!-- END Measuring Loyalty -->

	<section class="bloc bloc--space nps__quote">
		<blockquote class="txt txt--quote">&ldquo;LABOV has knowledge of the market and my organization, as well as attention to detail, work ethic and follow-through.&rdquo;</blockquote>
		<p class="txt txt--quotee">&mdash; Client Survey Comment</p>
	</section> <!-- END Survey Comment -->

	<section class="bloc">
		<div class="bloc bloc--half bloc--space bloc--gbHead">
			<h1 class="hdln hdln--h1">Going Beyond</h1>
		</div>
		<div class="bloc--half bloc--space bloc--gbTxt">
			<p class="txt txt--body">Always focused on going beyond for our clients, we achieved a nearly 60% increase in NPS between 2017 and 2018. We accomplished this by concentrating on three key areas identified in our 2017 survey as opportunities to enhance our service and creativity.</p>
			<p class="txt txt--body">By focusing on these areas, we not only achieved a significant increase in our NPS, we elevated our clients&lsquo; experience and positively impacted their businesses.</p>
		</div>
		<div class="bloc bloc--graphs">
			<div class="bloc--third">
				<img class="graphImg graphImg--key" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-labov/assets/img/gb_chart_key.gif" alt="A five point scale of 2017 and 2018 data.">
			</div>
			<div class="bloc--third">
				<p class="txt txt--graphLbl">Service beyond expected</p>
				<img class="graphImg" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-labov/assets/img/gb_chart_01.gif" alt="Score improved from 4.17 in 2017 to 4.50 in 2018.1.">
			</div>
			<div class="bloc--third">
				<p class="txt txt--graphLbl">Product Quality</p>
				<img class="graphImg" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-labov/assets/img/gb_chart_02.gif" alt="Score improved from 4.00 in 2017 to 4.36 in 2018.">
			</div>
			<div class="bloc--third">
				<p class="txt txt--graphLbl">Doesn't wait, anticipates</p>
				<img class="graphImg" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-labov/assets/img/gb_chart_03.gif" alt="Score improved from 4.03 in 2017 to 4.32 in 2018.">
			</div>
		</div>
		<a href="###" class="btn btn--nps">Learn More About Us</a>
	</section> <!-- END Going Beyond -->

	<section class="bloc bloc--space nps__quote">
		<blockquote class="txt txt--quote">&ldquo;LABOV has shared great ideas and works hard to make our goals their goals.&rdquo;</blockquote>
		<p class="txt txt--quotee">&mdash;Client Survey Comment</p>
	</section> <!-- END Survey Comment -->

	<section class="bloc">
		<div class="bloc--half bloc--space bloc--gbHead">
			<h1 class="hdln hdln--h1">What our clients value most</h1>
		</div>
		<div class="bloc--half bloc--space bloc--gbTxt">
			<p class="txt txt--body">Our annual survey helps us determine the service and creative areas our clients value most. In 2018, the four highest rated areas either showed an improvement in scores or remained the same from the previous survey. This information helps us determine where we can make the greatest impact and continue to deliver the most value to our clients.</p>
		</div>
		<div class="bloc bloc--graphs">
			<div class="bloc--qrtr">
				<img class="graphImg graphImg--key" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-labov/assets/img/cv_chart_key.gif" alt="A five point scale of 2017 and 2018 data.">
			</div>
			<div class="bloc--qrtr">
				<p class="txt txt--graphLbl">Makes Us Feel Important</p>
				<img class="graphImg" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-labov/assets/img/cv_chart_01.gif" alt="Score improved from 4.49 in 2017 to 4.64 in 2018.">
			</div>
			<div class="bloc--qrtr">
				<p class="txt txt--graphLbl">Team is accessible</p>
				<img class="graphImg" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-labov/assets/img/cv_chart_02.gif" alt="Score was constant at 4.82 in 2017 and 2018.">
			</div>
			<div class="bloc--qrtr">
				<p class="txt txt--graphLbl">Timely Response to requests</p>
				<img class="graphImg" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-labov/assets/img/cv_chart_03.gif" alt="Score improved from 4.71 in 2017 to 4.77 in 2018.">
			</div>
			<div class="bloc--qrtr">
				<p class="txt txt--graphLbl">creative team contact</p>
				<img class="graphImg" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-labov/assets/img/cv_chart_04.gif" alt="Score improved from 4.40 in 2017 to 4.55 in 2018.">
			</div>
		</div>
	</section> <!-- END Client Value -->

	<section class="bloc bloc--space nps__quote">
		<blockquote class="txt txt--quote">&ldquo;Excellent response time to urgent issues and general requests.&rdquo;</blockquote>
		<p class="txt txt--quotee">&mdash;Client Survey Comment</p>
	</section> <!-- END Survey Comment -->

	<section class="bloc">
		<a href="###" class="btn btn--nps">Learn More About Us</a>
	</section> <!-- END CTA Button -->

    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer() ?>

