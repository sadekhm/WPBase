<?php 
if (have_posts()) { 
		while (have_posts()) { 
			the_post(); 
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

		<span class="date">
			<?php _e( 'Published at ', 'wpbase' ); ?><?php the_time('j F, Y'); ?> - <?php the_time('g:i a'); ?>
		</span>
		<span class="author">
			<?php _e( 'by', 'wpbase' ); ?> <?php the_author_posts_link(); ?>
		</span>
		<span class="comments">
			<?php comments_popup_link( __( 'Leave a Comment', 'wpbase' ), __( 'Comments (1)', 'wpbase' ), __( 'Comments (%)', 'wpbase' )); ?>
		</span>

		<?php if ( has_post_thumbnail()) { ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('home-thumb'); ?>
			</a>
		<?php } ?>

		<?php the_excerpt(); ?>

		<?php edit_post_link(); ?>

	</article>

	<nav class="post-nav">
		<?php } 
			next_posts_link( 'Older Posts' );
			previous_posts_link( 'Newer Posts' );
	 		} else { 
		?>
	</nav>

	<article>
		<h2><?php _e( 'Nothing Found', 'wpbase' ); ?></h2>
		<p><?php _e( 'You reached here by mistake or this post is no longer available.', 'wpbase' ); ?></p>
	</article>

<?php } ?>