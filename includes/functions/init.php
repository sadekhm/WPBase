<?php

if (!isset($content_width)){
    $content_width = 900;
}

if (function_exists('add_theme_support')){

    // Add Support for Menus, RSS Feeds, HTML5 markup, Title Tag
    add_theme_support('menus');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array( 'comment-list', 'search-form', 'comment-form', ) );
    add_theme_support('title-tag');

    // Add Post Thumbnails Support
    add_theme_support('post-thumbnails');
    add_image_size('home-thumb', 150, 150, true);
    add_image_size('thumb', 700, 200, true); // Define Thumbnail Size, call it in your theme using the_post_thumbnail('thumb');

    // Localization Support
    load_theme_textdomain('wpbase', get_template_directory() . '/lang');
}

add_filter('show_admin_bar', '__return_false'); //Remove WordPress Admin Bar

remove_action('wp_head', 'wp_generator'); //Remove WordPress Generator tag from <head>

/* Remove WordPress Version from enqueued stylesheets and scripts if no defined version while enqueue */
function wpbase_remove_version( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
/* Filters */
add_filter('style_loader_src', 'wpbase_remove_version', 9999);
add_filter('script_loader_src', 'wpbase_remove_version', 9999);
add_filter('widget_text', 'do_shortcode');
add_filter('widget_text', 'shortcode_unautop');