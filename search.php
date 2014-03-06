<?php get_header(); ?>

	<h1><?php echo sprintf( __( '%s Search Results for ', 'etch' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

	<?php get_template_part('includes/content/content', 'index'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
