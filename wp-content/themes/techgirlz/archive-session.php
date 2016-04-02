<?php the_header(); ?>

<?php

// QUERY
    $sessions = new WP_Query(array(
    'post_type' => 'session',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
  ));

// LOOP BEGINS
    if( $sessions->have_posts() ) :
      while( $sessions->have_posts() ) :
			  $sessions->the_post();


// LOOP ENDS
      endwhile;
    endif; ?>

<?php the_footer(); ?>
