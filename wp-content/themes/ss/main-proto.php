<?php get_header();?>
<?php/** * Template Name:  Главная -proto
* * @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0 */?>
<?php
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $params = array(
    'category_name'       => 'objects',
    'posts_per_page' => 100,
    'paged'           => $current_page
  );
  query_posts($params);
  $wp_query->is_archive = true;
  $wp_query->is_home = false;
  while(have_posts()): the_post();?>
  <?php the_title() ?>
  <?php the_permalink();?>
  <?php get_field('rom');?>
<?php endwhile; ?>

<?php get_footer();?>
