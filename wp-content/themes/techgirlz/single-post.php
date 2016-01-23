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

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="page-content" id="page-content">

	<h1><?php the_title(); ?></h1>
	<p>
		<?php echo the_content(); ?>
	</p>

<?php endwhile;
endif; ?>

</div>

<?php get_footer(); ?>
