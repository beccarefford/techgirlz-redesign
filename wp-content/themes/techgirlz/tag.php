<?php

/*
Template Name: Tag Page
*/

?>

<?php get_header(); ?>

<div class="page-landing" style="background-image:
url('/wp-content/uploads/2016/03/12906601514_aeb6bcca1a_o.jpg')">
	<div class="topArea">
		<h1>Blog</h1>
	</div>
</div>

				<div class="columnBlogDeco">
					<a href="/tag/press">Press</a> &bull;
					<a href="/tag/infographic">Infographics</a> &bull;
					<a href="/tag/video">Videos</a> &bull;
					<a href="/tag/newsletter">Newsletters</a>
				</div>

<div class="archive-blog-content" id="page-content">

  <?php while (have_posts()) : the_post();
    $page_tags = get_post_meta($post->ID, 'tags', true); ?>
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
      			<?php
      			$content = get_the_content();
      			$permalink = get_permalink(); ?>
      			<p><?php echo wpse_custom_excerpts($content, 100, $permalink); ?></p>
      			<a href="<?php the_permalink(); ?>"><div class="btn">Read More</div></a>
            <?php endwhile;?>
          </div>
        </div>
<!-- #content -->
<?php get_footer(); ?>
      </div>
