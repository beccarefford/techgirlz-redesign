<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<?php
/*--------------------------------------------------------------
About Section
--------------------------------------------------------------*/
?>

<div class="page-landing" style="background-image:
url('/wp-content/uploads/2016/01/12906601514_aeb6bcca1a_o.jpg')">
  <div class="topArea">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<div class="row">
  <a href="/volunteer">
    <div class="col-md-6 nopadding">
        <div class="columnDonateTime" onmouseover="this.style.background='#C43D64';" onmouseout="this.style.background='#e06287';">
          <h1>Volunteer &nbsp; <i class="fa fa-hand-paper-o"></i></h1>
        </div>
    </div>
  </a>

  <a href="http://techgirlz.us2.list-manage1.com/subscribe?u=c92bc6b9499dd90653fb7f4d1&id=5d0d796658">
    <div class="col-md-6 nopadding">
      <div class="columnDonateMoney" onmouseover="this.style.background='#D97044';" onmouseout="this.style.background='#F9976D';">
        <h1>Join Mailing List &nbsp; <i class="fa fa-envelope"></i></h1>
      </div>
    </div>
  </a>
</div>

<div class="staff-page-content" id="page-content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php echo the_content(); ?>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>
