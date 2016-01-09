<?php
/*
Template Name: Staff
*/
?>

<?php get_header(); ?>

<div class="page-landing" style="background-image:
url('/wp-content/uploads/2015/12/12906601514_aeb6bcca1a_o.jpg')">
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
          <div class="col-md-3">
                <a href="<?php the_permalink(); ?>">
                  <div class="staff-circle-small">
                    <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
              </div>
          </div>

          <!-- Descriptive content for speaker -->
          <div class="col-md-9">
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

</div>

<?php get_footer(); ?>
