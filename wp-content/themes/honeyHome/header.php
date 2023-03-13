<?php

    global $redux_demo;
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package honeyHome
 */

?>



<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package honeyHome
 */

?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>
<html lang="en" class="no-js lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>
<html lang="en" class="no-js lt-ie9">
<![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
  <!--<![endif]-->
  
<!-- Mirrored from prismspark.com/theme/htm/honeyhome/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2017 04:05:20 GMT -->
<head>
    <!-- meta character set -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Meta Description -->
    <meta name="description" content="Html Template for Builders and Constraction"/>
    <meta name="keywords"
      content="html template, honey home, honeyhome, realestate, construction, architecture, home builder"/>
    <meta name="author" content="PrismSpark"/>
    <!-- mobile configuration -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo $redux_demo['fb']['url']; ?>" type="image/png"/>
    <!--font-->






    <?php wp_head(); ?>
  </head>
  <body id="body" <?php body_class(); ?>>
   <!-- Preloader -->
    <div id="preloader">
      <div id="load">&nbsp;</div>
    </div>
    <!--Preloader End -->
    <!-- =========================
      header
      ========================== -->
    <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            </button>
            <a href="#body"><img src="<?php echo $redux_demo['cl']['url']; ?>" alt=""/></a>
          </div>



          <div class="collapse navbar-collapse">





            <?php echo wp_nav_menu([
              'theme_location'        => 'main_menu',
              'menu_class'            => 'nav navbar-nav navbar-right',
              'menu_id'               => 'nav'



            ]); ?>






<!--             <ul class="nav navbar-nav navbar-right" id="nav">
              <li><a href="index-2.html#main-slider" class="smoothScroll">HOME</a></li>
              <li><a href="index-2.html#service" class="smoothScroll">SERVICE</a></li>
              <li><a href="index-2.html#about" class="smoothScroll">ABOUT</a></li>
              <li><a href="index-2.html#project" class="smoothScroll">PROJECT</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                  data-close-others="false">PAGES<i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="blog.html">BLOG</a></li>
                  <li><a href="singleblog.html">SINGLE BLOG</a></li>
                  <li><a href="shop.html">SHOP</a></li>
                </ul>
              </li>
              <li><a href="index-2.html#price" class="smoothScroll">PRICE</a></li>
              <li><a href="index-2.html#contact" class="smoothScroll">CONTACT</a></li>
            </ul> -->
          </div>





        </div>
      </div>
    </header>

