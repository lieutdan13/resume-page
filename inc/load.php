<?php
/**
* enqueues the style.css file
* deregisters scripts and styles not needed on resume page
* cleans up wp head on resume page
*
* @since version 1.0
* @param null
* @return js files and instantiations
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class ba_resume_page_run_and_cleans {

	const version = '1.0';

	function __construct() {

		add_action('wp_print_styles', array($this,'clean_head'));
		add_action('wp_enqueue_scripts',	array($this,'run_clean'));
	}

	function clean_head(){

		$resume = get_post_meta(get_the_ID(),'ba_make_resume_page', true) ? get_post_meta(get_the_ID(),'ba_make_resume_page', true) : false;

		if ( $resume ) {

			// remove 2012 stuff
	    	wp_deregister_script('twentytwelve-navigation');
	    	wp_dequeue_script(	'twentytwelve-navigation');
	    	wp_deregister_style( 'twentytwelve-style' );
	    	wp_dequeue_style(	'twentytwelve-style');

	    	// clean up wp head on the resume page
	    	remove_action('wp_head', 'rsd_link');
			remove_action('wp_head', 'wlwmanifest_link');
			remove_action('wp_head', 'index_rel_link');
			remove_action('wp_head', 'parent_post_rel_link', 10, 0);
			remove_action('wp_head', 'start_post_rel_link', 10, 0);
			remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
			remove_action('wp_head', 'wp_generator');
	    }

	}

	function run_clean(){

		$resume = get_post_meta(get_the_ID(),'ba_make_resume_page', true) ? get_post_meta(get_the_ID(),'ba_make_resume_page', true) : false;

	    if ( $resume ) {

	    	wp_enqueue_script('jquery');
	    	wp_enqueue_style( 'resume-page-style', plugins_url( '../css/style.css' , __FILE__ ) , self::version, true);

	    	// remove comment reply script on resume page
	    	wp_deregister_script( 'comment-reply' );

	    }

	}


}
new ba_resume_page_run_and_cleans;