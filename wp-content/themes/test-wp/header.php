<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- MyFonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Poppins:ital,wght@0,100;0,200;0,400;0,700;1,700&family=Raleway:wght@100&family=Roboto:wght@100;400;700&display=swap" rel="stylesheet" />
    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
		 <!-- Animasi -->
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- MyCss -->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>./assets/css/style.css" />


</head>
<nav class="container">
      <div class="wrapper-menu">
        <div class="navbar-logo animate__animated animate__headShake animate__delay-0.5s">
          <a href="#">Corona<span class="warna">Virus</span></a>
        </div>
        <ul class="right-menu flex">
          <li><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#detail">Detail</a></li>
          <li><a href="#data">Data</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>