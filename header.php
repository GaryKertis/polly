<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="Description" content="Website for the writer Polly Duff Kertis (née Bresnick)">
	<meta name="keywords" content="Polly Duff Kertis, Polly Duff Bresnick, Polly Bresnick, Polly Kertis, Moby Dick Marathon, Old Gus Eats">
	<title>Polly Duff Kertis</title>
	<link rel="stylesheet" type="text/css" href="./wp-content/themes/polly/bower_components/bootstrap/dist/css/bootstrap.css">
<link href='https://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body>
    <canvas id="main"></canvas>
		<header class="page-header">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			</a>
		</header><!-- #masthead -->
	<div id="page" class="container">

		<div>

