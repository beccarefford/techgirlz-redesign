<?php get_header(); ?>

  <div class="home-landing" style="background-image:
    url('/wp-content/uploads/2016/03/TechGirlzHomepage-min.jpg')">
    <div class="topArea">
          <h1>Inspiring girls to explore the possibilities of technology</h1>
    </div>
  </div>
</a>

<div class="row">
  <a href="/volunteer-with-techgirlz/">
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
  <a href="/about/"><i class="fa fa-cogs fa-5x"></i></a>
  <h2><a href="/techshopz/">What Is TechGirlz</a></h2>
    <p>TechGirlz is a nonprofit organization dedicated to reducing the gender gap in technology occupations,
    by focusing on girls at the crucial middle school age. We offer free workshops to get girls interested in different kinds of technology, show them varied career options, and connect them with professionals in technology fields.</p>
  </center>
  </div>

  <div class="col-md-4">
  <center>
  <a href="/techshopz-in-a-box/"><i class="fa fa-users fa-5x"></i></a>
  <h2><a href="/techshopz-in-a-box/">Why Do We Exist</a></h2>
    <p>There's more to tech careers than just coding. We're here to show middle school girls just that. Through our free hands-on TechShopz, we show them that technology can match their interests and be fun and rewarding.</p>
  </center>
  </div>

  <div class="col-md-4">
  <center>
  <a href="/about/"><i class="fa fa-star fa-5x"></i></a>
  <h2><a href="/about/">Our Impact</a></h2>
    <p>5000+ girls attended our free TechShopz
    <br />81% of girls changed their mind about a tech career after a TechShop
    <br />Hundreds of volunteers are running TechShopz globally</p>
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
          <h2><a href="/techshopz-in-a-box">Teach</a></h2>
        </center>
        </div>

        <div class="col-md-4">
        <center><a href="/volunteer">
          <img src="/wp-content/uploads/2016/03/Screen-Shot-2016-03-02-at-4.39.24-PM.png"></a>
          <h2><a href="/volunteer">Volunteer</a></h2>
        </center>
        </div>

        <div class="col-md-4">
        <center>
          <a href="/donate">
          <img src="/wp-content/uploads/2016/03/Screen-Shot-2016-03-02-at-4.39.35-PM.png"></a>
          <h2><a href="/donate">Donate</a></h2>
        </center>
        </div>
      </div>
    </div>

    <div class="banner">
      <div class="revolution">
        <center><h1>Girls can do more than code.</h1></center>
      </div>
    </div>

    <div class="page-content" id="page-content">
    <div class="topics">
    <div class="row">
      <div class="col-md-3">
        <a href="/techshopzinfo">
          <center>
          <div class="anywhere-circle">
            <img alt="Web Development TechGirlz" src="/wp-content/uploads/2016/01/Screen-Shot-2016-01-15-at-1.35.09-PM.png">
          </div>
        </a>
        <p>Circuits and Hardware</p></center>
      </div>

      <div class="col-md-3">
        <a href="/techshopzinfo">
          <center>
          <div class="anywhere-circle">
            <img alt="Game Design TechGirlz" src="/wp-content/uploads/2016/01/Screen-Shot-2016-01-30-at-11.08.39-AM.png">
          </div>
        </a>
        <p>Media & Production</p></center>
      </div>

      <div class="col-md-3">
        <a href="/techshopzinfo">
          <center>
          <div class="anywhere-circle">
            <img alt="Mobile Apps TechGirlz" src="/wp-content/uploads/2016/01/Screen-Shot-2016-01-15-at-1.39.34-PM.png">
          </div>
        </a>
        <p>Fashion Technology</p></center>
      </div>

      <div class="col-md-3">
        <a href="/techshopzinfo">
          <center>
          <div class="anywhere-circle">
            <img alt="Media Editing TechGirlz" src="/wp-content/uploads/2016/01/Screen-Shot-2016-01-30-at-11.20.20-AM.png">
          </div>
        </a>
        <p>Cybersecurity</p></center>
      </div>

      <center>
        <div class="spacing">
          &nbsp;
        </div>
        <a href="/topics"><div class="myButton">Browse more of our TechShopz</div></a>
      </center>
      </div>
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

<div id="home-blogroll">
  <div class="wrapper">
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
        <hr />
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      </div>

      <div class="col-md-8">
        <?php
        $content = get_the_content();
  			$permalink = get_permalink(); ?>
        <p><?php echo wpse_custom_excerpts($content, 100, $permalink); ?></p>
      </div>
    </div>

    <?php endwhile; ?>

    <a href="/blog">
      <div class="btn">
        Read More &nbsp; <i class="fa fa-arrow-right"></i>
      </div>
    </a>
  </div>
</div>

<div class="spacing">
  &nbsp;
</div>

<?php get_footer(); ?>
