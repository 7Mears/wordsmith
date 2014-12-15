<?php
/**
* The header for our theme.
*
* Displays all of the <head> section and everything up till <div id="content">
*
* @package Wordsmith
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="hfeed site">
      <header class="nav-header">
        <div class="nav-logo">
          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        </div>

        <nav>
          <ul class="nav-secondary-nav">
            <li><a href="#0">Search</a></li>
          </ul>
        </nav> <!-- /secondary nav -->

        <a class="nav-primary-nav-trigger" href="#0">
          <span class="nav-menu-text">Menu</span><span class="nav-menu-icon"></span>
        </a> <!-- nav-primary-nav-trigger -->
      </header>

      <nav id="site-navigation" class="nav-primary-nav" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </ul>
      </nav>
