<?php

// HTML

	add_action( 'init', 'webspeed_html_create_posttype_custom' );

	function webspeed_html_create_posttype_custom() {
	    register_post_type(
	    	'Customhtml',
	    	array(
	    		'labels' => array(
	    			'name' => __('HTML', 'websepeed-html-domain'),
	    			'singular_name' => __('HTML', 'websepeed-html-domain')
	    		),
	    		'public' => true,
	    		'exclude_from_search' => true,
				'show_in_admin_bar'   => false,
				'show_in_nav_menus'   => false,
				'publicly_queryable'  => false,
				'query_var'           => false,
				'menu_position'		=> 100,
	    		'menu_icon' => 'dashicons-html',
	    		'supports' => array(
	    			'title'
	    		),
	    		'show_in_rest' => true,
	    		'rewrite' => array(
	    			'slug' => 'html'
	    		),
	    	)
	    );

	}

	function webspeed_html_posttype_function() {
	    webspeed_html_create_posttype_custom();
	}

	register_activation_hook( __FILE__, 'webspeed_html_posttype_function' );