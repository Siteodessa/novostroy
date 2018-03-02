<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
  <!DOCTYPE html>
  <html <?php language_attributes(); ?> class="no-js">
  <head>
    <?php include('header-top.php');?>
    <?php //header mid ?>
    <?php //include('header-bot.php');?>


  </head>
  <?php   if( current_user_can('editor') || current_user_can('administrator') ) {  $adminko = file_get_contents(get_template_directory_uri(). '/adminko.html'); echo $adminko; } ?>
  <body <?php body_class(); ?> >
    <?php // get_sidebar(); ?>
  <link rel="stylesheet" href="/wp-content/themes/ss/webpack/src/css/bootstrap.css">
    <link rel="stylesheet" href="/wp-content/themes/ss/webpack/src/css/style.css">
    <div class="container hd">
      <header>
        <div class="header-banner">
          <button role="buttton" class="btn-success cnct" onclick="alert('binotel')"> Связаться с нами</button>
        </div>
        <div class="clear"></div>
        <?php include('pages/nav.php');?>
      </header>

      <div id="revct"></div>
