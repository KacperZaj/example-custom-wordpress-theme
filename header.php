<?php
/**
 * The header.
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php wp_title(); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri().'/assets/icons/favicon.ico' ?>" type="image/x-icon">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="header" class="header">
<?php get_template_part('template-parts/header/nav'); ?>
<?php get_template_part('template-parts/header/mobile-nav'); ?>
</header>