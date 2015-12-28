<?php get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <div class="page-landing">
      <div class="bg" style="background-image:
      url('/wp-content/uploads/2015/12/12906601514_aeb6bcca1a_o.jpg')">
      </div>
      <h1><?php the_title(); ?></h1>
    </div>

    <div class="page-content" id="page-content">
        <p><?php echo the_content(); ?></p>
    </div>

  <?php endwhile; // End of the loop. ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
