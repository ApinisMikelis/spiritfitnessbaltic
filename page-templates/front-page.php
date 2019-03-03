<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>
				<div class="category-selection">
					<ul>
						<li>
							<a href="http://spiritfitnessbaltic.eu/treadmills/">
								<img src="<?php bloginfo('template_directory'); ?>/img/spirit-fitness-treadmills.jpg" alt="spirit fitness treadmills"/>
								<h2>Treadmills</h2>
							</a>
							<p>Our flagship product line, which was introduced in 1986, has continued to evolve with the times. Whether you are a beginner interested in walking or an athlete dedicated to running, there is a model to fit your needs.</p>
						</li>
						<li>
							<a href="http://spiritfitnessbaltic.eu/elliptical-trainers/">
								<img src="<?php bloginfo('template_directory'); ?>/img/spirit-fitness-elliptical-trainers.jpg" alt="spirit fitness elliptical trainers"/>
								<h2>Elliptical trainers</h2>
							</a>
							<p>A unique blend of cardiovascular conditioning and lower body strengthening is addressed with this full weight bearing modality. Each elliptical is equipped with several features that will help you fulfill your exercise goals.</p>
						</li>
						<li>
							<a href="http://spiritfitnessbaltic.eu/fitness-bikes/">
								<img src="<?php bloginfo('template_directory'); ?>/img/spirit-fitness-fitness-bikes.jpg" alt="spirit fitness fitness bikes"/>
								<h2>Fitness bikes</h2>
							</a>
							<p>Durable, comfortable, and smooth are all qualities of the Spirit Fitness semi-recumbent bikes. Easy adjustments, bright LCD screens, a cooling fan, and mesh back seats are standard on all models.</p>
						</li>
						<li class="last">
							<a href="http://spiritfitnessbaltic.eu/strength-equipment/">
								<img src="<?php bloginfo('template_directory'); ?>/img/bodycraft-strength-equipment.jpg" alt="bodycraft strength equipment"/>
								<h2>Strength equipment</h2>
							</a>
							<p>It's that simple. For your day-to-day life, sports, or leisure activities, the PFT allows you to train the way you move. You define the path of motion allowing you to strengthen every part of your body for the way you want to live. It's that simple.</p>
						</li>
					</ul>
				</div>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>