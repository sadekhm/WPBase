<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>  class="no-js">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
	<h1>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php bloginfo('sitename'); ?>
		</a>
	</h1>
</header>
<?php
	wp_nav_menu( array(
		'theme_location' => 'primary-menu',
		'container' => 'nav',
		'container_id' => 'primary-nav',	
		)
	);
	?>
<?php get_template_part('searchform'); ?>

<section id="container">