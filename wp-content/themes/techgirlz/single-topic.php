<?php get_header(); ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <center>
          <div class="page-content" id="page-content">
            <img src="/wp-content/uploads/2016/01/LogoTechShopz@2x.png" class="ri" />
          </div>
        </center>

        <div class="row">
          <a href="/techshopzinfo">
            <div class="col-md-6 nopadding">
                <div class="columnDonateTime" onmouseover="this.style.background='#C43D64';" onmouseout="this.style.background='#e06287';">
                  <h1>Browse Topics &nbsp; <i class="fa fa-book"></i></h1>
                </div>
            </div>
          </a>

          <a target="_blank" href="http://webforms.zenginehq.com/d783814e989d11d4fac077f7ec55894ddf91bf55d95b689784">
            <div class="col-md-6 nopadding">
              <div class="columnDonateMoney" onmouseover="this.style.background='#D97044';" onmouseout="this.style.background='#F9976D';">
                <h1>Get Started &nbsp; <i class="fa fa-flag-checkered"></i></h1>
              </div>
            </div>
          </a>
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
