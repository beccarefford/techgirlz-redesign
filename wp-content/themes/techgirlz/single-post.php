<?php get_header(); ?>

<div class="page-landing" style="background-image:
url('/wp-content/uploads/2016/01/12906601514_aeb6bcca1a_o.jpg')">
	<div class="topArea">
		<a href="/blog"><h1>Blog</h1></a>
	</div>
</div>

				<div class="columnBlogDeco">
					<a href="/tag/press">Press</a> &bull;
					<a href="/tag/infographic">Infographics</a> &bull;
					<a href="/tag/video">Videos</a>
				</div>

<div class="blog-content" id="page-content">

<div class="row">
	<div class="col-md-12 col-xs-12">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<br />
		<p><?php echo the_content(); ?></p>

	<?php
	endwhile;
	endif; ?>
	</div>
</div>

<div class="spacing">&nbsp;</div>
<hr />
<div class="spacing">&nbsp;</div>

		<?php
		$wp_query = new WP_Query(array(
			'post_type' => 'post',
			'order' => 'DESC',
			'orderby' => 'date',
			'posts_per_page' => 3
		));
		?>

	<center>
		<h2>More Posts</h2>
		<?php
		$current_post=1;
		$grids=2;
		while ($wp_query->have_posts()) : $wp_query->the_post();
		$current_post = $wp_query->current_post + 1;
		?>

		<?php
    //-- output start elements
	  if( $current_post == 1 ): ?>
	   <div class="row">
	  <?php endif; ?>

		<div class="col-md-2">
			<a href="<?php the_permalink(); ?>">
				<div class="anywhere-square">
					<?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
				</div>
				<span><?php the_title(); ?></span>
			</a>
		</div>

		<?php if( $current_post == 6 ): ?>
		</div>
		<?php endif; ?>

		<?php
		$current_post++;
		endwhile; ?>



		<?php wp_reset_postdata(); ?>
	</div>

</div>

<?php get_footer(); ?>
