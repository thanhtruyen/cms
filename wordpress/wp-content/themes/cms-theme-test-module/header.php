<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cms-theme-test-module
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<title>CMS - Wordpress - Nhóm G</title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
	$pageID = get_option('page_on_front');
	if (is_page($pageID)) { ?>

		<?php get_template_part('template-parts/02/02', 'content'); ?>

	<?php } else { ?>
		<?php get_template_part('template-parts/01/01', 'content'); ?>

	<?php } ?>




	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>