<?php
/**
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header();
?>

<div class="page-landing" style="background-image:
url('/wp-content/uploads/2016/03/12906601514_aeb6bcca1a_o.jpg')">
	<div class="topArea">
		<h1>Events</h1>
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

<div class="event-page-content" id="page-content">

<div id="tribe-events-pg-template">
	<?php tribe_events_before_html(); ?>
	<?php tribe_get_view(); ?>
	<?php tribe_events_after_html(); ?>
</div>

<div class="spacing">&nbsp;</div>
<hr />
<div class="spacing">&nbsp;</div>

<div class="row">
  <div class="col-md-6">
      <a href="/raleigh-durham-techgirlz-group/"><img src="/wp-content/uploads/2016/01/Screen-Shot-2016-01-09-at-5.43.03-PM.png"></a>
  </div>

  <div class="col-md-6">
    <h2>Looking for workshops in North Carolina?</h2>
    <p>
      <a href="/raleigh-durham-techgirlz-group/">Triangle TechGirlz</a> is an entire TechGirlz community in North Carolina.
      Check out their page for events, or <a href="http://techgirlz.us10.list-manage.com/subscribe?u=abcebd5b4b7aec29f1589129f&id=b2553e542c">sign
				up for their mailing list</a> to hear about events first.
    </p>
    <center>
      <a href="http://twitter.com/tritechgirlz"><i class="fa fa-twitter fa-2x"></i></a> &nbsp; &nbsp; &nbsp; &nbsp;
      <a href="http://www.facebook.com/TriangleTechGirlz"><i class="fa fa-facebook fa-2x"></i></a>
    </center>
  </div>

</div>

</div>

</div> <!-- #tribe-events-pg-template -->
<?php
get_footer();
