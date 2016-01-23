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
					<a href="/tag/video">Videos</a>
				</div>

			<div class="blog-content" id="page-content">

			<?php
	    $loop_posts = new WP_Query(array(
	    'post_type' => 'post',
			'order' => 'ASC',
	    'orderby' => 'date',
	    ));
	    ?>

			<?php	$current_post=1;

			while ($loop_posts->have_posts()) : $loop_posts->the_post();
			$current_post = $loop_posts->current_post + 1;
			?>

			<div class="row">
			<div class="col-md-12">

			<a href="<?php the_permalink(); ?>"><h2><?php echo the_title(); ?></h2></a>
			<?php
			$content = get_the_content();
			$permalink = get_permalink(); ?>
			<p><?php echo wpse_custom_excerpts($content, 100, $permalink); ?></p>
			<a href="<?php the_permalink(); ?>"><div class="myButton">Read More</div></a>

		<?php $current_post++; ?>

			</div>
		</div>
		<?php endwhile; ?>

<div class="alignright"><?php next_posts_link('Further Entries &raquo;') ?></div>
<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries ') ?></div>

</div>

<?php get_footer(); ?>
