<?php
/*
Template Name: Workshop Topics
*/
?>

<?php get_header(); ?>

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

<center><h1>TechShopz in a Box™ Topics</h1></center>
<div class="spacing">&nbsp;</div>

<p><a href="/techshopz-in-a-box">TechShopz in a Box™</a> are free workshop plans,
  documents, and guides based on TechGirlz' tried-and-true workshops.
  They make it easy for anyone, anywhere to run a hands-on workshop for
  middle school girls. As a result of this program, the number of girls we've
  reached has more than tripled - and with your help, we can make that number
  grow.</p>

  <p>
    Topics are listed in ascending order of instructor levels. If you have
    questions about running your own TechShopz in a Box™, read the
    <a href="/run-your-own-techshopz-in-a-box-playbook">PlayBook</a>
    for guidance, or contact <a href="mailto:sarah@techgirlz.org">sarah@techgirlz.org</a>
     with any issues or questions.
  </p>
<div class="spacing">&nbsp;</div>
<hr />

<div class="spacing">&nbsp;</div>

<center>
  <h3>Workshop Difficulty Level for Instructor</h3>

<div class="spacing">&nbsp;</div>

<div class="row">
  <div class="col-md-4">
    <div id="rating">
      <i class="fa fa-star fa-3x"></i>
      <p>Easy</p>
    </div>
  </div>

  <div class="col-md-4">
    <div id="rating">
      <i class="fa fa-star fa-3x"></i><i class="fa fa-star fa-3x"></i>
      <p>Intermediate</p>
    </div>
  </div>

  <div class="col-md-4">
    <div id="rating">
      <i class="fa fa-star fa-3x"></i><i class="fa fa-star fa-3x"></i><i class="fa fa-star fa-3x"></i>
      <p>Challenging</p>
    </div>
  </div>
</div>
</center>

<div class="spacing">&nbsp;</div>
<hr />
<div class="spacing">&nbsp;</div>

<?php
/*-------------------------------------------------------------
Begin Topics
--------------------------------------------------------------*/
?>

<?php
    $loop_topic = new WP_Query(array(
    'post_type' => 'topic',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
    ));
    ?>

<?php
$current_post=1;
$grids=2;

while ($loop_topic->have_posts()) : $loop_topic->the_post();
$current_post = $loop_topic->current_post + 1;
?>

<?php
    //-- output start elements
    if( $current_post % 2 > 0 ): ?>

   <div class="row">
    <?php endif; ?>

    <!-- Speaker Box Column -->
      <div class="col-md-6 col-xs-12">

        <h3><?php echo the_title(); ?></h3>
        <p><?php echo the_content(); ?></p>

      </div>

      <?php if( $current_post % 2 == 0 ): ?>
        </div>
      <?php endif; ?>

      <?php
      $current_post++;
      endwhile; ?>

<div class="spacing">&nbsp;</div>
<div class="spacing">&nbsp;</div>
<div class="spacing">&nbsp;</div>

<center>
<h2>See a Topic You Like?</h2>
<a target="_blank" href="http://webforms.zenginehq.com/d783814e989d11d4fac077f7ec55894ddf91bf55d95b689784"><div class="myButton">Request Free Workshop Plans</div></a>
</div>

<div class="spacing">
  &nbsp;
</div>

<?php get_footer(); ?>
