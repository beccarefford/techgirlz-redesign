<?php get_header(); ?>

      <?php while ( have_posts() ) : the_post(); ?>

    <div class="page-landing" style="background-image:
    url('/wp-content/uploads/2016/03/12906601514_aeb6bcca1a_o.jpg')">
      <div class="topArea">
        <h1><?php the_title(); ?></h1>
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
        <p><?php echo the_content(); ?></p>

        <br />
        <br />
        <a href="/topics">« Back to Topics List</a>
    </div>

  <?php endwhile; // End of the loop. ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
