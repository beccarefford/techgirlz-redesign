<?php get_header(); ?>

  <div class="home-landing" style="background-image:
    url('/wp-content/uploads/2016/02/TechGirlzHomepage.jpg')">
    <div class="topArea">
      <div class="row">
        <div class="col-md-6">
          <h1>Empowering girls to be future technology leaders.</h1>
        </div>
      </div>
    </div>
  </div>
</a>

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

<div id="home-content">
  <div class="row">
  <div class="col-md-4">
  <center>
  <a href="/techshopz/"><i class="fa fa-cogs fa-5x"></i></a>
  <h2>Upcoming Events</h2>
    <p>We put all types of tech in the hands of middle school girls through free, project-based workshops. Browse events and register your daughter today.</p>
  </center>
  </div>

  <div class="col-md-4">
  <center>
  <a href="/techshopz-in-a-box/"><i class="fa fa-users fa-5x"></i></a>
  <h2>Teach A Workshop</h2>
    <p>You have the expertise, we have the materials. Use our tried-and true lesson plans to run a TechGirlz workshop in your own town.</p>
  </center>
  </div>

  <div class="col-md-4">
  <center>
  <a href="/about/"><i class="fa fa-star fa-5x"></i></a>
  <h2>About TechGirlz</h2>
    <p>We believe it takes a village to change girls' minds about tech,
    so we're enabling communities to engage them. Learn more about our mission.</p>
  </center>
  </div>
 </div>
</div>

  <div class="banner">
    <div class="revolution">
      <center><h1>Be Part of the Revolution of Girls in Tech</h1></center>
    </div>
  </div>

    <div id="home-cta">
      <div class="row">
        <div class="col-md-4">
        <center>
          <a href="/techshopz-in-a-box/">
          <img src="/wp-content/uploads/2016/03/Screen-Shot-2016-03-02-at-4.39.13-PM.png"></a>
          <h2>Teach</h2>
        </center>
        </div>

        <div class="col-md-4">
        <center><a href="/volunteer">
          <img src="/wp-content/uploads/2016/03/Screen-Shot-2016-03-02-at-4.39.24-PM.png"></a>
          <h2>Volunteer</h2>
        </center>
        </div>

        <div class="col-md-4">
        <center>
          <a href="/donate">
          <img src="/wp-content/uploads/2016/03/Screen-Shot-2016-03-02-at-4.39.35-PM.png"></a>
          <h2>Donate</h2>
        </center>
        </div>
      </div>
    </div>

<div class="banner">
  <div class="blogroll">
    <center>
      <h1>From the TechGirlz Blog</h1>
    </center>
  </div>
</div>

<div id="home-content">
  		<?php
  		$wp_query = new WP_Query(array(
  			'post_type' => 'post',
  			'order' => 'DESC',
  			'orderby' => 'date',
  			'posts_per_page' => 3
  		));

    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

    <div class="row">
      <div class="col-md-4">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      </div>

      <div class="col-md-8">
          <p><?php echo wpse_custom_excerpts($content, 100, $permalink); ?></p>
      </div>
    </div>

    <hr />

    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
