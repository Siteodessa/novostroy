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
  <link rel="stylesheet" href="/wp-content/themes/twentyfifteen/webpack/src/css/bootstrap.css">
    <link rel="stylesheet" href="/wp-content/themes/twentyfifteen/webpack/src/css/style.css">
    <div class="container hd">
      <header>
        <div class="header-banner">
          <button role="buttton" class="btn-success cnct" onclick="alert('binotel')"> Связаться с нами</button>

          <style>.mnumbers { display:  none; justify-content:  space-between; width:  calc(100% - 20px); margin: 20px 10px 0px; } .mnumbers img.f_c { margin:  0; display:  none; } .mnumbers a { font-size: 13px; }
@media only screen and (min-width:100px) and (max-width:576px){.mnumbers { display:  flex; }nav {
    width: 100%;
    height: 70px;} }
</style>
          <div class="mnumbers">

          <?php get_template_part('numbers');?>
        </div>
        </div>
        <div class="clear"></div>
        <?php include('pages/nav.php');?>
      </header>

      <div id="revct"></div>
