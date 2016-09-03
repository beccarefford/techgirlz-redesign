<?php
/*
Template Name: Volunteer
*/
?>

<?php get_header(); ?>

<div class="page-landing" style="background-image:
url('/wp-content/uploads/2016/03/12906601514_aeb6bcca1a_o.jpg')">
  <div class="topArea">
    <center>
      <h1><?php the_title(); ?></h1>
    </center>
  </div>
</div>

<div class="row">
  <a href="/volunteer-registration">
    <div class="col-md-6 nopadding">
        <div class="columnDonateTime" onmouseover="this.style.background='#C43D64';" onmouseout="this.style.background='#e06287';">
          <h1>Volunteer Registration &nbsp; <i class="fa fa-pencil-square-o"></i></h1>
        </div>
    </div>
  </a>

  <a target="_blank" href="/background-clearances">
    <div class="col-md-6 nopadding">
      <div class="columnDonateMoney" onmouseover="this.style.background='#D97044';" onmouseout="this.style.background='#F9976D';">
        <h1>Background Screening &nbsp; <i class="fa fa-file"></i></h1>
      </div>
    </div>
  </a>
</div>



<div class="page-content" id="page-content">

<p>Volunteering with TechGirlz can be very rewarding and you’ll be helping us
  reach more girls for free. If you want to be a volunteer,
  look through our Volunteer Opportunities and then fill out our
  <a href="/volunteer-registration">Volunteer Registration Form.</a>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <?php echo the_content(); ?>

  <?php endwhile; ?>
<?php endif; ?>

</div>

<?php get_footer(); ?>
