<?php

add_shortcode('html', 'webspeed_html');
function webspeed_html($atts) {
  global $post;
  ob_start();

  // define attributes and their defaults
  extract(shortcode_atts(array('id' => '' ), $atts));

 $loop = new WP_Query( array(
  'post_type' => 'customhtml',
  'post__in' => explode( ',', $id ),
  )
);


if ( $loop->have_posts() ) {
	while ( $loop->have_posts() ) : $loop->the_post();
		the_field('html');
	endwhile; 
wp_reset_query();
}


    $myvariable = ob_get_clean();
        return $myvariable;
}