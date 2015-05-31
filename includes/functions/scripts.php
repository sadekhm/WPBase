<?php
/* Load jQuery from CDN and fallback to local*/
if( !is_admin()){ 
	$jquery_url = 'http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js';
	$check_url = @fopen($jquery_url,'r');
	if($check_url !== false) {
	    function wpbase_load_jquery() {
			wp_deregister_script('jquery');
			wp_register_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true);
			wp_enqueue_script('jquery');
	    }
		add_action('wp_enqueue_scripts', 'wpbase_load_jquery', 1);
	} else {
		function wpbase_jquery_fallback() {
			wp_enqueue_script('jquery');
		}
	add_action('wp_enqueue_scripts', 'wpbase_jquery_fallback');
	}
}
/* Load Scripts and CSS Styles */
function wpbase_scripts() {
	wp_enqueue_style('webfonts', get_template_directory_uri() . '/assets/css/fonts.css', false);
	wp_enqueue_style('core', get_template_directory_uri() . '/assets/css/wp.css', false);
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', false);
	wp_enqueue_style('print', get_template_directory_uri() . '/assets/css/print.css', false, null, 'print');
	
	wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', array(), '2.8.3', false);
	wp_enqueue_script('global', get_template_directory_uri() . '/assets/js/global.js', array(), null, true);
	wp_enqueue_script('custom-functions', get_template_directory_uri() . '/assets/js/custom-functions.js', array(), null, true);

	if (is_single() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

}

add_action('wp_enqueue_scripts', 'wpbase_scripts', 100);
