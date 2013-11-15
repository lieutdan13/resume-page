<?php
/**
* register and enqueue our scripts and instantiations
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
		add_action('wp_head', array($this,'script_init'));
		add_action('wp_head', array($this,'user_styles'));
	}

	function user_styles(){

		$txtcolor 			= get_post_meta(get_the_ID(),'rp_txt_color', true);

		$get_container_color 	= get_post_meta(get_the_ID(),'rp_container_color', true);
		$container_color 		= $get_container_color ? $this->hex2rgb($get_container_color) : false;
		$container_rgba 		= $container_color ? sprintf('%s,%s,%s',$container_color['red'],$container_color['green'],$container_color['blue']) : false;
		$final_container_color = $container_rgba ? sprintf('background:%s;background:rgba(%s,0.5);',$get_container_color,$container_rgba) : false;

		if ($txtcolor || $container_color): ?>
		<!-- Resume Page User Styles -->
		<style>
		.resume-wrap {
			color:<?php echo $txtcolor;?>;
		}
		.resume-inner {
			<?php echo $final_container_color;?>;
		}
		</style>
		<?php endif;
	}

	function script_init(){
		
		$hide_portfolio = get_post_meta(get_the_ID(),'rp_disable_portfolio', true);
		$resume 		= get_post_meta(get_the_ID(),'ba_make_resume_page', true) ? get_post_meta(get_the_ID(),'ba_make_resume_page', true) : false;
		$lightbox 		= get_post_meta(get_the_ID(),'rp_do_lightbox', true);

		if ($resume && !'on' == $hide_portfolio): ?>
			<script>
				jQuery(document).ready(function(){
				    jQuery('.space-boxes.space-boxes-<?php echo get_the_ID();?>').imagesLoaded(function() {
				        var options = {
				          	autoResize: true,
				          	container: jQuery('.space-boxes.space-boxes-<?php echo get_the_ID();?>'),
				          	offset: 5,
				          	flexibleWidth:195
				        };
				        var handler = jQuery('.space-boxes.space-boxes-<?php echo get_the_ID();?> figure');
				        jQuery(handler).wookmark(options);
				    });

				    <?php if ($lightbox): ?>
						jQuery('.space-boxes.space-boxes-<?php echo get_the_ID();?> .swipebox').swipebox();
					<?php endif; ?>
				});
			</script>
		<?php endif;
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

		$resume 		= get_post_meta(get_the_ID(),'ba_make_resume_page', true) ? get_post_meta(get_the_ID(),'ba_make_resume_page', true) : false;
		$lightbox 		= get_post_meta(get_the_ID(),'rp_do_lightbox', true);
		$hide_portfolio = get_post_meta(get_the_ID(),'rp_disable_portfolio', true);

		// swipebox
		wp_register_script('resume-page-lightbox',   plugins_url( '../libs/swipebox/jquery.swipebox.min.js', __FILE__ ), array('jquery'), self::version, true);

		// wookmark
		wp_register_script('resume-page-wookmark', plugins_url( '../libs/wookmark/jquery.wookmark.min.js', __FILE__ ), array('jquery'), self::version, true);


	    if ( $resume ) {

	    	wp_enqueue_script('jquery');
	    	wp_enqueue_style( 'resume-page-style', plugins_url( '../css/style.css' , __FILE__ ) , self::version, true);

	    	// remove comment reply script on resume page
	    	wp_deregister_script( 'comment-reply' );

	    	if ( !'on' == $hide_portfolio) {
	    		wp_enqueue_script('resume-page-wookmark');

	    		if ( $lightbox) {
	    			wp_enqueue_script('resume-page-lightbox');
	    		}
	    	}

	    }

	}

    function hex2rgb( $colour ) {
        if ( $colour[0] == '#' ) {
                $colour = substr( $colour, 1 );
        }
        if ( strlen( $colour ) == 6 ) {
                list( $r, $g, $b ) = array( $colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5] );
        } elseif ( strlen( $colour ) == 3 ) {
                list( $r, $g, $b ) = array( $colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2] );
        } else {
                return false;
        }
        $r = hexdec( $r );
        $g = hexdec( $g );
        $b = hexdec( $b );
        return array( 'red' => $r, 'green' => $g, 'blue' => $b );
	}

}
new ba_resume_page_run_and_cleans;