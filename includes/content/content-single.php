<?php 
if (have_posts()) { 
		while (have_posts()) { 
			the_post(); 
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<h1><?php the_title(); ?></h1>

		<span class="date">
			<?php _e( 'Published at ', 'wpbase' ); ?><?php the_time('j F, Y'); ?> - <?php the_time('g:i a'); ?>
		</span>
		<span class="author">
			<?php _e( 'by', 'wpbase' ); ?> <?php the_author_posts_link(); ?>
		</span>
		<span class="comments">
			<?php comments_popup_link( __( 'Leave a Comment', 'wpbase' ), __( 'Comments (1)', 'wpbase' ), __( 'Comments (%)', 'wpbase' )); ?>
		</span>

		<?php if ( has_post_thumbnail()) {
			the_post_thumbnail(); 
		} ?>

		<?php the_content(); ?>

		<div class="tags">
			<?php the_tags( __( 'Tagged in: ', 'wpbase' ), ', ', '<br>'); ?>
		</div>
		<div class="categories">
			<?php _e( 'Categorized in: ', 'wpbase ' ); the_category(', '); ?>
		</div>

		<?php edit_post_link(); ?>

		<?php comments_template(); ?>

	</article>

<?php } ?>

<?php } else { ?>

	<article>
		<h2><?php _e( 'Nothing Found', 'wpbase' ); ?></h2>
		<p><?php _e( 'You reached here by mistake or this post is no longer available.', 'wpbase' ); ?></p>
	</article>

<?php } ?>