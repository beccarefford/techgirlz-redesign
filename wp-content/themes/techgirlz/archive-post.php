<?php

/*
Template Name: Blog
*/

?>

<?php get_header(); ?>

<div class="page-landing" style="background-image:
url('/wp-content/uploads/2016/01/12906601514_aeb6bcca1a_o.jpg')">
	<div class="topArea">
		<h1><?php the_title(); ?></h1>
	</div>
</div>

				<div class="columnBlogDeco">
					<a href="/tag/press">Press</a> &bull;
					<a href="/tag/infographic">Infographics</a> &bull;
					<a href="/tag/video">Videos</a> &bull;
					<a href="/tag/newsletter">Newsletters</a>
				</div>

			<div class="archive-blog-content" id="page-content">

			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
			<?php
	    $wp_query = new WP_Query(array(
		    'post_type' => 'post',
				'order' => 'DESC',
		    'orderby' => 'date',
				'paged' => $paged
	    ));
	    ?>

			<?php	$current_post=1;

			while ($wp_query->have_posts()) : $wp_query->the_post();
			$current_post = $wp_query->current_post + 1;
			?>

			<div class="row">
			<div class="col-md-12">

			<a href="<?php the_permalink(); ?>"><h2><?php echo the_title(); ?></h2></a>
			<?php
			$content = get_the_content();
			$permalink = get_permalink(); ?>
			<p><?php echo wpse_custom_excerpts($content, 100, $permalink); ?></p>
			<a href="<?php the_permalink(); ?>"><div class="btn">Read More</div></a>

			<?php $current_post++; ?>

		</div>
		</div>

		<hr />

		<?php endwhile; ?>

<div class="row">
	<div class="col-md-12">

		<div class="pagination-forward">
		<?php next_posts_link(); ?>
		</div>

		<div class="pagination-backward">
		<?php previous_posts_link(); ?>
		</div>

	</div>
</div>

		</div>

<?php get_footer(); ?>
