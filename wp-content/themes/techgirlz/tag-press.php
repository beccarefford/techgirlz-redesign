<?php

/*
Template Name: Press Tag Page
*/

?>

<?php get_header(); ?>

<div class="page-landing" style="background-image:
url('/wp-content/uploads/2016/03/12906601514_aeb6bcca1a_o.jpg')">
	<div class="topArea">
		<h1>Press</h1>
	</div>
</div>

				<div class="columnBlogDeco">
					<a href="/tag/press">Press</a> &bull;
					<a href="/tag/infographic">Infographics</a> &bull;
					<a href="/tag/video">Videos</a> &bull;
					<a href="/tag/newsletter">Newsletters</a>
				</div>

<div class="archive-blog-content" id="page-content">

	<?php $query = new WP_Query( array( 'tag' => 'press' ) ); ?>
		<?php	$current_post=1;

		while ($query->have_posts()) : $query->the_post();
		$current_post = $query->current_post + 1;
		?>

		<div class="row">
			<div class="col-md-5">
				<div class="blog-image">
					<a href="<?php the_permalink(); ?>">
						<?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
					</a>
				</div>
			</div>

			<div class="col-md-7">
				<a href="<?php the_permalink(); ?>"><h2><?php echo the_title(); ?></h2></a>
				<p>
					<em><?php $pfx_date = get_the_date( $format, $post_id ); echo $pfx_date; ?></em>
				</p>

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
