<?php
/*
Template Name: Staff
*/
?>

<?php get_header(); ?>

<?php
/*--------------------------------------------------------------
About Section
--------------------------------------------------------------*/
?>

<div class="page-landing" style="background-image:
url('/wp-content/uploads/2016/03/12906601514_aeb6bcca1a_o.jpg')">
  <div class="topArea">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<div class="row">
  <a href="/volunteer">
    <div class="col-md-6 nopadding">
        <div class="columnDonateTime" onmouseover="this.style.background='#C43D64';" onmouseout="this.style.background='#e06287';">
          <h1>Donate Time &nbsp; <i class="fa fa-clock-o"></i></h1>
        </div>
    </div>
  </a>

  <a href="/donate">
    <div class="col-md-6 nopadding">
      <div class="columnDonateMoney" onmouseover="this.style.background='#D97044';" onmouseout="this.style.background='#F9976D';">
        <h1>Donate Money &nbsp; <i class="fa fa-money"></i></h1>
      </div>
    </div>
  </a>
</div>

<div class="staff-page-content" id="page-content">
  <div class="row">
    <div class="col-md-6">
      <iframe width="560" height="390" src="https://www.youtube.com/embed/So4WB4IbE-s"
      frameborder="0" alt="TechGirlz Mission Video" allowfullscreen></iframe>
    </div>
    <div class="col-md-6">
      <h2>Our Mission</h2>
      <p>
        TechGirlz is a 501(c)3 nonprofit dedicated to reducing the gender gap
        in technology occupations. We develop fun
        and educational hands-on workshops, called <a href="/techshopz-in-a-box">TechShopz</a>,
        and an annual <a href="/summer-camp-2016">Entrepreneur Summer Camp.</a> These efforts aim to get
        middle-school age girls interested in different kinds of technology and
        demonstrate the varied options of careers available. We enable them to
        interact with professionals who have carved out successful careers in
        technology fields, and empower them to be future technology leaders.</a>
      </p>

      <p>
        <center>
          <a href="http://twitter.com/techgirlzorg"><i class="fa fa-twitter fa-2x"></i></a>
          <a href="http://facebook.com/techgirlzorg"><i class="fa fa-facebook fa-2x"></i></a>
          <a href="mailto:info@techgirlz.org"><i class="fa fa-envelope fa-2x"></i></a>
        </center>
      </p>
    </div>
  </div>
</div>

  <div class="banner">
    <div class="blogroll">
      <center><h1>Our Team</h1></center>
    </div>

<div class="staff-page-content" id="page-content">
<?php
    $loop_staff = new WP_Query(array(
    'post_type' => 'team',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'DESC'
    ));
    ?>

<?php
$current_post=1;
$grids=2;

while ($loop_staff->have_posts()) : $loop_staff->the_post();
$current_post = $loop_staff->current_post + 1;
?>

<?php
    //-- output start elements
    if( $current_post % 2 > 0 ): ?>

   <div class="row">
    <?php endif; ?>

    <!-- Speaker Box Column -->
      <div class="col-md-6 col-xs-12">

    <?php /* Output column box content */ ?>
      <!-- Inner Row for image/description -->
        <div class="row">
          <!-- Image for speaker -->
          <center>
            <div class="col-md-4">
            <a href="<?php the_permalink(); ?>">
              <div class="staff-circle-small">
                <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
              </div>
          </div>
                  </center>

          <!-- Descriptive content for speaker -->
          <div class="col-md-8">
            <a href="<?php the_permalink() ?>">
              <div id="staff-name">
                <h3><?php the_title(); ?></h3></a>
              </div>
              <div id="job-title-staff"><?php the_field('job_title'); ?></div>
            <?php
            $excerpt = get_the_excerpt();
            $permalink = get_permalink(); ?>
              <p><?php echo wpse_custom_excerpts($excerpt, 40, $permalink); ?></p>
            <!-- End of col-10 -->
           </div>
          <!-- End of inner row -->
         </div>
        <!-- End of outer col-6 for individual speaker -->
      </div>

        <?php if( $current_post % 2 == 0 ): ?>
          </div>
        <?php endif; ?>

      <?php
      $current_post++;
      endwhile; ?>

<?php
/*--------------------------------------------------------------
Sponsors & Partners Section
--------------------------------------------------------------*/
?>
</div>

  <div class="banner">
    <div class="revolution">
      <center><h1>Sponsors & Partners</h1></center>
    </div>

<div class="spacing">&nbsp;</div>

<div id="scroll-container-tib">
  <div class="scroll">
    <a href="http://chariotsolutions.com"><img class="first" src="/wp-content/uploads/2016/01/59fc6d9e-cb95-11e0-816a-5fcb627c2ae5-1.jpg" alt="Chariot Solutions" /></a>
    <a href="http://vitalyst.com"><img src="/wp-content/uploads/2016/01/logo-500x300.jpg" alt="Vitalyst" /></a>
    <a href="http://comptia.org"><img src="/wp-content/uploads/2016/01/800px-Comptia-logo.svg_.png" alt="Comptia" /></a>
    <a href="http://philadelphiapact.com/"><img src="/wp-content/uploads/2016/01/2012logo_pact.png" alt="PACT" /></a>
    <a href="http://girldevelopit.com/"><img src="/wp-content/uploads/2016/01/pink-logo-f9a26fcc82c561f925403822c5135a28.png" alt="Girl Develop It" /></a>
    <a href="http://chariotsolutions.com"><img src="/wp-content/uploads/2016/01/59fc6d9e-cb95-11e0-816a-5fcb627c2ae5-1.jpg" alt="Chariot Solutions" /></a>
    <a href="http://vitalyst.com"><img src="/wp-content/uploads/2016/01/logo-500x300.jpg" alt="Vitalyst" /></a>
    <a href="http://comptia.org"><img src="/wp-content/uploads/2016/01/800px-Comptia-logo.svg_.png" alt="Comptia" /></a>
    <a href="http://philadelphiapact.com/"><img src="/wp-content/uploads/2016/01/2012logo_pact.png" alt="PACT" /></a>
    <a href="http://girldevelopit.com/"><img src="/wp-content/uploads/2016/01/pink-logo-f9a26fcc82c561f925403822c5135a28.png" alt="Girl Develop It" /></a>
    <a href="http://chariotsolutions.com"><img src="/wp-content/uploads/2016/01/59fc6d9e-cb95-11e0-816a-5fcb627c2ae5-1.jpg" alt="Chariot Solutions" /></a>
    <a href="http://vitalyst.com"><img src="/wp-content/uploads/2016/01/logo-500x300.jpg" alt="Vitalyst" /></a>
  </div>
</div>

<div class="spacing">&nbsp;</div>

<?php get_footer(); ?>
