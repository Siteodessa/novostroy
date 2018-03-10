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
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<?php include('header-top.php');?><?php include('header-bot.php');?>
  </head>
<body <?php body_class(); ?>>
		<?php // get_sidebar(); ?>
