<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package techgirlz
 */

get_header(); ?>


				<div class="page-landing" style="background-image:
				url('/wp-content/uploads/2016/03/12906601514_aeb6bcca1a_o.jpg')">
					<div class="topArea">
						<h1>YOUR SEARCH "<?php the_search_query(); ?>"</h1>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 nopadding">
							<div class="columnPageDeco"></div>
					</div>

					<div class="col-md-6 nopadding">
						<div class="columnPageDeco2"></div>
					</div>
				</div>

	<div class="page-content" id="page-content">

		<?php if ( have_posts() ) : ?>


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="row">
					<div class="col-md-12">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php
						$content = get_the_content();
						$permalink = get_permalink(); ?>
						<p><?php echo wpse_custom_excerpts($content, 100, $permalink); ?></p>
						<div align="right">
							<a href="<?php the_permalink(); ?>"><div class="btn">Read More</div></a>
						</div>
					</div>
				</div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
