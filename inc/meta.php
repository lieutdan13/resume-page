<?php
/**
* create custom meta boxes for project meta
*
* @since version 1.0
* @param null
* @return custom meta boxes
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

add_filter( 'cmb_meta_boxes', 'ba_resumepage_meta' );
function ba_resumepage_meta( array $meta_boxes ) {

	$opts = array(
		array(
			'id'             => 'ba_resumepage_test',
			'name'           => 'Test Value',
			'type'           => 'text',
			'cols'			=> 8,
		),
		array(
		    'id'   			=> 'ppd_help',
		    'name' 			=> __(' ', 'resume-page'),
		    'type' 			=> 'title',
		    'cols'			=> 4,
			'desc'    		=> __('<span class="ba-help-icon">?</span>If you want to show a gallery, insert the shortcode. Change to Text View above to get the gallery shortcode.','resume-page')
		),
		array(
		    'id'   			=> 'ppd_help',
		    'name' 			=> 'Header Image',
		    'type' 			=> 'title',
		)

	);

	$meta_boxes[] = array(
		'title' => __('Resume Page Options', 'resume-page'),
		'pages' => array('page'),
		'fields' => $opts
	);

	$meta_boxes[] = array(
		'title' => __('Resume Page', 'fotos'),
		'pages' => array('page'),
		'context'    => 'side',
		'fields' => array(
			array(
				'id' 			=> 'ba_make_resume_page',
				'name' 			=> 'Make this page a Resume Page',
				'type' 			=> 'checkbox',
			)
		)
	);

	return $meta_boxes;

}

