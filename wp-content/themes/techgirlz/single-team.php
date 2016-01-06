<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <div class="staff-page-landing">
    <div class="topArea">
      <div class="bg" style="background-image:
      url('/wp-content/uploads/2015/12/12906601514_aeb6bcca1a_o.jpg')">
      </div>
      <div class="staff-circle">
        <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
      </div>
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
    <div class="row">
      <div class="col-md-4">

        <h1><?php echo the_title(); ?></h1>

        <div id="job-title">
          <?php echo the_field('job_title'); ?>
        </div>

        <div id="staff-social-icons">
          <?php if( get_field('twitter') ): ?>
            &nbsp; <a href="<?php the_field('twitter');?>"><i class="fa fa-twitter-square fa-2x"></i></a> &nbsp;
          <?php endif; ?>

          <?php if( get_field('facebook') ): ?>
            &nbsp; <a href="<?php the_field('facebook');?>"><i class="fa fa-facebook-square fa-2x"></i></a> &nbsp;
          <?php endif; ?>


          <?php if( get_field('linkedin') ): ?>
            &nbsp; <a href="<?php the_field('linkedin');?>"><i class="fa fa-linkedin-square fa-2x"></i></a> &nbsp;
          <?php endif; ?>
        </div>
      </div>

      <div class="col-md-8">
        <p><?php echo the_content(); ?></p>
      </div>
    </div>
  </div>

<?php endwhile; ?>

<?php get_footer(); ?>
