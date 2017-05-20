<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title>
		<?php bloginfo('name'); ?> |
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
	</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body class="flex-row">
	<div class="empty-side border-right"></div>
	<div class="main flex1">
		<nav>
				<?php
	        wp_nav_menu( array(
	          'menu'              => 'ul',
	          'theme_location'    => 'my-custom-menu',
	          'menu_class'        => 'flex-row space-between',
	          'show_home'					=> true
	        ));
	      ?>
		</nav>