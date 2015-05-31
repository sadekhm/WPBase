<?php get_header(); ?>

	<h1><?php _e( 'Category: ', 'wpbase' ); echo single_tag_title('', false); ?></h1>

	<?php get_template_part('templates/content', 'index'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
