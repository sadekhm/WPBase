<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'This post is password protected. Enter password to view comments.', 'wpbase' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h2><?php comments_number(); ?></h2>

	<ul>
		<?php wp_list_comments('type=comment'); ?>
	</ul>

	<nav class="comment-nav">
		<?php paginate_comments_links(); ?>
	</nav>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments disabled.', 'wpbase' ); ?></p>

<?php endif; ?>

<?php comment_form(); ?>

</div>
