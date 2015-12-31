<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package techgirlz
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


				<div class="page-landing">
					<div class="topArea">
						<div class="bg" style="background-image:
						url('/wp-content/uploads/2015/12/12906601514_aeb6bcca1a_o.jpg')">
						</div>
						<h1>TechGirlz Talks</h1>
					</div>
				</div>

				<div class="page-content" id="page-content">
						<p><?php echo the_content(); ?></p>
				</div>





			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
