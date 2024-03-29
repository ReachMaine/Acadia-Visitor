<?php
/* 
	26May15 - zig add image size for facebook share.  & filter s.t. Yoast SEO uses it.
*/


// facebook share image size.. works with Yoast SEO plugin.
	add_image_size( 'facebook_share', 1200, 630, true );
	add_filter('wpseo_opengraph_image_size', 'mysite_opengraph_image_size');
	function mysite_opengraph_image_size($val) {
		return 'facebook_share';
	}	

	
	add_action('after_setup_theme', 'ea_setup');
	/**  ea_setup
	*  init stuff that we have to init after the main theme is setup.
	* 
	*/
	function ea_setup() {
	 /* do stuff ehre. */
	}
	/*****  change the login screen logo ****/
	function my_login_logo() { ?>
		<style type="text/css">
			body.login div#login h1 a {
				background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/va-logo.png);
				padding-bottom: 30px;
			}
		</style>
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo',8 );
	/*****  end custom login screen logo ****/

	/* add co-branding widget area */
	if ( function_exists('register_sidebar') ){
		// Leaderboard ad.
		 register_sidebar(array(
			'name' => 'Leaderboard ad',
			'id' => 'leaderboard',
			'description' => 'Widget for leaderboard ad.',
			'before_widget' => '<div id="%1$s"  class=" %2$s ad-container">',
			'after_widget'  => '</div>',
		)); 

		// Co Branding
		 register_sidebar(array(
			'name' => 'CoBranding',
			'id' => 'cobrand',
			'description' => 'Widget for Secondary branding.',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3><div class="tx-div small"></div>',
		)); 
		// Right sidebar add.
		 register_sidebar(array(
			'name' => 'Rightside Ad',
			'id' => 'rightad',
			'description' => 'Widget for broadstreet ad.',
			'before_widget' => '<div id="%1$s" class="widget cf %2$s ">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3><div class="tx-div small"></div>',
		)); 
		


	} //end function_exists('register_sidebar')	

	add_filter('widget_text', 'do_shortcode'); // make text widget do shortcodes....


	if ( !function_exists('zig_change_theme_text') ){
		function zig_change_theme_text( $translated_text, $text, $domain ) {
			 /* if ( is_singular() ) { */
			    switch ( $translated_text ) {

		            case 'SEARCH THE BLOG' :
		                $translated_text = __( 'Search', 'aletheme' );
		                break;
		            case 'Type here...':
		            	$translated_text = __( 'Search...', 'aletheme' );
		            	break;
		            case 'BLOG CATEGORIES':
		            	$translated_text = __( 'Found in', 'aletheme' );
		            	break;
		            case 'Share this post:':
		            	$translated_text = __('Share', 'aletheme');
		            	break;
		        }
		    /* } */

	    	return $translated_text;
		}
		add_filter( 'gettext', 'zig_change_theme_text', 20, 3 );
	}

	/* cut excerpt to 25 chars from default of 55 */
	function custom_excerpt_length( $length ) {
		return 25;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	// attempt to "fix" the freezing of the publish button
	add_action( 'post_submitbox_misc_actions', 'fix_autosave' );
	function fix_autosave() {
		$html_out = '<a class="button" href="javascript:" style="float:right;margin:10px;" onclick="jQuery("#submitpost input").removeClass("disabled");return false;">unlock</a> ';
		echo $html_out;
	}
	




?>
