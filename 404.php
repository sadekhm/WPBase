<?php get_header(); ?>

	<article id="post-404">

		<h1><?php _e( '404 - Not Found', 'wpbase' ); ?></h1>
		<p>
			<?php _e( 'Nothing Found here. Go back to ', 'etch' ); ?> <a href="<?php echo home_url(); ?>"><?php _e( 'Homepage', 'wpbase' ); ?></a>
		</p>

	</article>
	<!-- /article -->


<?php get_sidebar(); ?>

<?php get_footer(); ?>
