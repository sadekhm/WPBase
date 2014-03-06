<?php 
			if (have_posts()){ 
				while (have_posts()){ 
					the_post(); 
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php comments_template( '', true ); ?>
			<div class="clear"></div>
			<?php edit_post_link(); ?>
			<?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>
		</article>

		<?php } ?>

		<?php } else { ?>

			<article>
				<h2><?php _e( 'Nothing Found', 'wpbase' ); ?></h2>
				<p><?php _e( 'You reached here by mistake or this post is no longer available.', 'wpbase' ); ?></p>
			</article>

		<?php } ?>