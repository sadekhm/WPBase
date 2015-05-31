<?php
add_action('widgets_init', 'wpbase_sidebar_init');
function wpbase_sidebar_init() {
	if (function_exists('register_sidebar')){
		register_sidebar(array(
			'name' => __('Main Sidebar', 'wpbase'),
			'description' => __('Description for this sidebar', 'wpbase'),
			'id' => 'sidebar-01',
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));
	}
}