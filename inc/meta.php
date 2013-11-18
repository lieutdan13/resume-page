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
		////// BIO
		//////
		array(
		    'id'   			=> 'rp_name',
		    'name' 			=> __('Name', 'resume-page'),
		    'type' 			=> 'text',
		    'cols'			=> 6
		),
		array(
		    'id'   			=> 'rp_tagline',
		    'name' 			=> __('Tagline', 'resume-page'),
		    'type' 			=> 'text',
		    'cols'			=> 6
		),
		array(
		    'id'   			=> 'rp_email',
		    'name' 			=> __('Email', 'resume-page'),
		    'type' 			=> 'text',
		    'cols'			=> 4
		),
		array(
		    'id'   			=> 'rp_website',
		    'name' 			=> __('Website', 'resume-page'),
		    'type' 			=> 'text',
		    'cols'			=> 4
		),
		array(
		    'id'   			=> 'rp_phone',
		    'name' 			=> __('Phone', 'resume-page'),
		    'type' 			=> 'text',
		    'cols'			=> 4
		),
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __(' ', 'resume-page'),
		    'type' 			=> 'title',
		    'cols'			=> 12,
			'desc'			=> __('<span class="ba-help-icon">?</span>Description biotch ','resume-page')
		),
		///////
		////// BIO SOCIAL
		//////
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __('Bio Social', 'resume-page'),
		    'type' 			=> 'title',
		),
		array(
		    'id'   			=> 'rp_twitter',
		    'name' 			=> __('Twitter Username', 'resume-page'),
		    'type' 			=> 'text',
		    'cols'			=> 4
		),
		array(
		    'id'   			=> 'rp_facebook',
		    'name' 			=> __('Facebook username', 'resume-page'),
		    'type' 			=> 'text',
		    'cols'			=> 4
		),
		array(
		    'id'   			=> 'rp_github',
		    'name' 			=> __('Github Username', 'resume-page'),
		    'type' 			=> 'text',
		    'cols'			=> 4
		),
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __(' ', 'resume-page'),
		    'type' 			=> 'title',
		    'cols'			=> 12,
			'desc'			=> __('<span class="ba-help-icon">?</span>Description biotch ','resume-page')
		),
		///////
		////// OBJECTIVE
		//////
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __('Objective Section', 'resume-page'),
		    'type' 			=> 'title',
		),
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
                	'type' 	=> 'textarea'
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
		///////
		////// DESIGN
		//////
		array(
		    'id'   			=> 'rp_help',
		    'name' 			=> __('Design', 'resume-page'),
		    'type' 			=> 'title',
		),
		array(
			'id' 			=> 'rp_txt_color',
			'name' 			=> 'Text Color',
			'type' 			=> 'colorpicker',
			'default'		=> '#333333'
		),
		array(
			'id' 			=> 'rp_accent_color',
			'name' 			=> 'Accent Color',
			'type' 			=> 'colorpicker',
			'default'		=> '#07A1CD'
		),
		array(
			'id'			=> 'rp_bg_img',
			'name'			=> __('Background Image', 'resume-page'),
			'type'			=> 'image'
		),
		array(
			'id' 			=> 'rp_bg_color',
			'name' 			=> 'Background Color',
			'type' 			=> 'colorpicker',
			'default'		=> '#FFFFFF'
		),
		array(
			'id' 			=> 'rp_container_color',
			'name' 			=> 'Container Color',
			'type' 			=> 'colorpicker',
			'default'		=> '#FFFFFF'
		),
		array(
			'id' 			=> 'rp_container_opacity',
			'name' 			=> 'Container Opacity',
			'type' 			=> 'select',
			'default'		=> '0.8',
			'options'		=> array(
				'0.1'		=> '0.1',
				'0.2'		=> '0.2',
				'0.3'		=> '0.3',
				'0.4'		=> '0.4',
				'0.5'		=> '0.5',
				'0.6'		=> '0.6',
				'0.7'		=> '0.7',
				'0.8'		=> '0.8',
				'0.9'		=> '0.9',
				'1.0'		=> '1.0'
			)
		),
        array(
        	'id' 	=> 'rp_custom_code',
        	'name' 	=> 'Custom CSS',
        	'type' 	=> 'textarea_code'
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

	$meta_boxes[] = array(
		'title' => __('Resume Page Theme', 'resume-page'),
		'pages' => array('page'),
		'context'    => 'side',
		'fields' => array(
			array(
				'id' 			=> 'rp_theme',
				'name' 			=> ' ',
				'type' 			=> 'select',
				'default'		=> 'paper',
				'options'		=> array(
					'flat'     => __('Flat','showoff'),
					'paper'     => __('Paper Stack','showoff'),
				)
			)
		)
	);


	return $meta_boxes;

}

