<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title><?php wp_title(); ?></title>
        
		<?php wp_head(); ?>		

	</head>
	<body>
		<?php get_template_part('partials/navbar') ?>