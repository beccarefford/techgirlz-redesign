<?php
/*
Template Name: Volunteer
*/
?>

<?php get_header(); ?>

<center>
  <div class="page-content" id="page-content">
    <img src="/wp-content/uploads/2016/01/LogoTechShopz@2x.png" class="ri" />
  </div>
</center>

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

<?php echo the_content(); ?>

</div>

<?php get_footer(); ?>
