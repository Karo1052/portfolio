<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MySuperSimpleTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="site-header">
	
<ul class="menubar">
    <li><a href="/forside/" class="menuhome">Home</a></li>
    <li><a href="/skills/" class="menuskills">Skills</a></li>
    <li><a href="/projects/" class="menuprojects">Projects</a></li>
    <li><a href="/resume/" class="menuresume">Resume</a></li>
    <li><a href="/contact/" class="menucontact">Contact</a></li>
</ul>

		
	</header><!-- #masthead -->


