<?php get_header();?>
<?php/** * Template Name:  
* * @package WordPress 
* @subpackage Twenty_Fourteen 
* @since Twenty Fourteen 1.0 */?>
 

<?php 
 function metapolename($detali, $pid) { $metko = get_post_meta($pid, $detali, true); if (empty($metko)) { } else { return $metko; }; } ;
$catname = 'xxxxxxxxxx';
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;  
$params = array( 'category_name' => , $catname,
                'order'  => 'DESC', 
                'posts_per_page' => 100,
                'paged' => $current_page ); 
query_posts($params); $wp_query->is_archive = true; 
$wp_query->is_home = false;   
while(have_posts()): the_post(); ?>


<?php echo metapolename('xxxxxx', $post->ID);?>







<?php endwhile; ?> 
 
  <?php get_footer();?>