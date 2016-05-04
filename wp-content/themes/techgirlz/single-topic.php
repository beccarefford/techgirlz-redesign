<?php get_header(); ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <center>
          <div class="page-content" id="page-content">
            <img src="/wp-content/uploads/2016/01/LogoTechShopz@2x.png" class="ri" />
          </div>
        </center>

      <div class="row">
        <div class="col-md-6 nopadding">
            <div class="columnPageDeco"></div>
        </div>

        <div class="col-md-6 nopadding">
          <div class="columnPageDeco2"></div>
        </div>
      </div>

    <div class="page-content" id="page-content">
      <h2><?php echo the_title(); ?></h2>
        <p><?php echo the_content(); ?></p>

        <br />
        <br />
        <a href="/topics">« Back to Topics List</a>
    </div>

  <?php endwhile; // End of the loop. ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
