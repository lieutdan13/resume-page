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
		///////
		////// OBJECTIVE
		//////
		array(
			'id' 			=> 'rp_disable_objective',
			'name' 			=> 'Disable the Objective Section',
			'type' 			=> 'checkbox',
			'cols'			=> 8
		),
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __(' ', 'resume-page'),
		    'type' 			=> 'title',
		    'cols'			=> 4,
			'desc'			=> __('<span class="ba-help-icon">?</span>Checking this box will deactivate the Experience portion. This means the fields below will have no affect. ','resume-page')
		),
		array(
		    'id'   			=> 'rp_objective_title',
		    'name' 			=> __('Objective Title', 'resume-page'),
		    'type' 			=> 'text',
		    'cols'			=> 4
		),
		array(
			'id'             => 'rp_objective_content',
			'name'           => 'Objective Text',
			'type'           => 'textarea',
			'cols'			=> 8,
		),
				array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __(' ', 'resume-page'),
		    'type' 			=> 'title',
		    'cols'			=> 12,
			'desc'			=> __('<span class="ba-help-icon">?</span>Description biotch ','resume-page')
		),
		///////
		////// EXPERIENCE
		//////
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __('Experience Section', 'resume-page'),
		    'type' 			=> 'title',
		),		
		array(
			'id' 			=> 'rp_disable_experience',
			'name' 			=> 'Disable the Experience Section',
			'type' 			=> 'checkbox',
			'cols'			=> 8
		),
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __(' ', 'resume-page'),
		    'type' 			=> 'title',
		    'cols'			=> 4,
			'desc'			=> __('<span class="ba-help-icon">?</span>Checking this box will deactivate the Experience portion. This means the fields below will have no affect. ','resume-page')
		),
		array(
			'id' 			=> 'rp_experience_title',
			'name' 			=> 'Experience Title',
			'type' 			=> 'text',
			'cols'			=> 8
		),
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __(' ', 'resume-page'),
		    'type' 			=> 'title',
		    'cols'			=> 4,
			'desc'			=> __('<span class="ba-help-icon">?</span>Description bitohc. ','resume-page')
		),
		array(
			'id' 			=> 'rp_work_places',
			'type' 			=> 'group',
			'cols' 			=> 8,
			'name' 			=> ' ',
			'repeatable' 	=> true,
			'repeatable_max' => 8,
			'fields' 		=> array(
                array(
                	'id' 	=> 'rp_work_title',
                	'name' 	=> 'Work Title',
                	'type' 	=> 'text'
                ),
                array(
                	'id' 	=> 'rp_work_company',
                	'name' 	=> 'COmpany',
                	'type' 	=> 'text'
                ),
                array(
                	'id' 	=> 'rp_work_desc',
                	'name' 	=> 'What did you do here?',
                	'type' 	=> 'text'
                ),
                array(
                	'id' 	=> 'rp_work_dates',
                	'name' 	=> 'When did you work here?',
                	'type' 	=> 'text'
                )
           	)
		),
		array(
		    'id'   			=> 'ppd_help',
		    'name' 			=> __(' ', 'projects-part-deux'),
		    'type' 			=> 'title',
		    'cols'			=> 4,
			'desc'    		=> __('<span class="ba-help-icon">?</span>If you have entered 3 post id\'s above, and you are using the full nav menu option, then generate those labels here. So if you have 3 post id\'s entered, then generate 3 items.','projects-part-deux')
		),
		///////
		////// SKILLS
		//////
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __('Skills Section', 'resume-page'),
		    'type' 			=> 'title',
		),
				array(
			'id' 			=> 'rp_disable_skills',
			'name' 			=> 'Disable the Skills Section',
			'type' 			=> 'checkbox',
			'cols'			=> 8
		),
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __(' ', 'resume-page'),
		    'type' 			=> 'title',
		    'cols'			=> 4,
			'desc'			=> __('<span class="ba-help-icon">?</span>Checking this box will deactivate the Experience portion. This means the fields below will have no affect. ','resume-page')
		),
		array(
			'id' 			=> 'rp_single_skill',
			'type' 			=> 'text',
			'cols' 			=> 8,
			'name' 			=> ' ',
			'repeatable' 	=> true,
			'repeatable_max' => 20,
		),
		array(
		    'id'   			=> 'ppd_help',
		    'name' 			=> __(' ', 'projects-part-deux'),
		    'type' 			=> 'title',
		    'cols'			=> 4,
			'desc'    		=> __('<span class="ba-help-icon">?</span>If you have entered 3 post id\'s above, and you are using the full nav menu option, then generate those labels here. So if you have 3 post id\'s entered, then generate 3 items.','projects-part-deux')
		),
		///////
		////// EDUCATION
		//////
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __('Education Section', 'resume-page'),
		    'type' 			=> 'title',
		),
		array(
			'id' 			=> 'rp_disable_education',
			'name' 			=> 'Disable the Education Section',
			'type' 			=> 'checkbox',
			'cols'			=> 8
		),
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __(' ', 'resume-page'),
		    'type' 			=> 'title',
		    'cols'			=> 4,
			'desc'			=> __('<span class="ba-help-icon">?</span>Checking this box will deactivate the Experience portion. This means the fields below will have no affect. ','resume-page')
		),
		array(
			'id' 			=> 'rp_school_places',
			'type' 			=> 'group',
			'cols' 			=> 8,
			'name' 			=> ' ',
			'repeatable' 	=> true,
			'repeatable_max' => 8,
			'fields' 		=> array(
                array(
                	'id' 	=> 'rp_school_name',
                	'name' 	=> 'School Name',
                	'type' 	=> 'text'
                ),
                array(
                	'id' 	=> 'rp_school_course',
                	'name' 	=> 'Studied',
                	'type' 	=> 'text'
                ),
                array(
                	'id' 	=> 'rp_school_desc',
                	'name' 	=> 'Small Description',
                	'type' 	=> 'text'
                )
           	)
		),
		array(
		    'id'   			=> 'ppd_help',
		    'name' 			=> __(' ', 'projects-part-deux'),
		    'type' 			=> 'title',
		    'cols'			=> 4,
			'desc'    		=> __('<span class="ba-help-icon">?</span>If you have entered 3 post id\'s above, and you are using the full nav menu option, then generate those labels here. So if you have 3 post id\'s entered, then generate 3 items.','projects-part-deux')
		),
		///////
		////// GITHUB
		//////
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __('Github Section', 'resume-page'),
		    'type' 			=> 'title',
		),
				array(
			'id' 			=> 'rp_disable_github',
			'name' 			=> 'Disable the Github Section',
			'type' 			=> 'checkbox',
			'cols'			=> 8
		),
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __(' ', 'resume-page'),
		    'type' 			=> 'title',
		    'cols'			=> 4,
			'desc'			=> __('<span class="ba-help-icon">?</span>Checking this box will deactivate the Experience portion. This means the fields below will have no affect. ','resume-page')
		),
		///////
		////// PORTFOLIO
		//////
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __('Portfolio Section', 'resume-page'),
		    'type' 			=> 'title',
		),
		array(
			'id' 			=> 'rp_disable_portfolio',
			'name' 			=> 'Disable the Portfolio Section',
			'type' 			=> 'checkbox',
			'cols'			=> 8
		),
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __(' ', 'resume-page'),
		    'type' 			=> 'title',
		    'cols'			=> 4,
			'desc'			=> __('<span class="ba-help-icon">?</span>Checking this box will deactivate the Experience portion. This means the fields below will have no affect. ','resume-page')
		),
		array(
			'id' 			=> 'rp_do_lightbox',
			'name' 			=> 'Enable Portfolio Lightbox',
			'type' 			=> 'checkbox',
			'cols'			=> 8
		),
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __(' ', 'resume-page'),
		    'type' 			=> 'title',
		    'cols'			=> 4,
			'desc'			=> __('<span class="ba-help-icon">?</span>Checking this box will deactivate the Experience portion. This means the fields below will have no affect. ','resume-page')
		),
	);

	$meta_boxes[] = array(
		'title' => __('Resume Page Options', 'resume-page'),
		'pages' => array('page'),
		'fields' => $opts
	);

	$meta_boxes[] = array(
		'title' => __('Resume Page', 'resume-page'),
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

