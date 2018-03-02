<?php get_header();?>
<?php/** * Template Name:  Офисы в Одессе
* * @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0 */

?>

<!--слайдер http://novostroy/wp-content/uploads/2017/12/Gorizont-Omega.jpg
http://novostroy/wp-content/uploads/2017/12/Siti-Park.jpg
http://novostroy/wp-content/uploads/2017/12/Budova.jpg
http://novostroy/wp-content/uploads/2017/12/Marshal-Siti.jpg



рубрики в строящихся
текст
 -->



<?php
print_r('<link rel="stylesheet" href="'. get_template_directory_uri() .'/stroy-home.css">');
$title = get_the_title();
?>

<div id="offices" class="offices">
<h1><?php //echo strval($title);?></h1>
<?php
function default_houses_behaviour()
{
  if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
    elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
    else { $paged = 1; }

$params = array( 'post_type' =>  'objects',         'paged'          => $paged, 'order'  => 'DESC', 'meta_query'	=> array( 'relation'		=> 'AND', array( 'key'	 	=> 'house_or_appartment',
'value'	  	=> 'Офис', 'compare' 	=> 'IN', ), ) );
 $house_post_pool = array();
  $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
  query_posts($params); $wp_query->is_archive = true; $wp_query->is_home = false; while(have_posts()): the_post();
  $cur_post_id = get_the_ID(); array_push($house_post_pool, $cur_post_id);
endwhile;
 $office_pool = array();
  $params = array( 'post_type' =>  'objects', 'posts_per_page' => 500, 'post__in' => $house_post_pool, 'order'  => 'DESC', ); $house_post_pool = array();
   $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
   query_posts($params); $wp_query->is_archive = true;
   $wp_query->is_home = false;
   while(have_posts()): the_post();
   $cur_post_id = get_the_ID();
    array_push($office_pool, $cur_post_id);
   endwhile;
    $houses_with_office_pool = array();
     foreach ($office_pool as $office)
{
   $post_parent = wp_get_post_parent_id( $office );
   array_push($houses_with_office_pool, $post_parent); };
   $houses_with_office_pool = array_unique($houses_with_office_pool);

print_r('<div class="home-c container">');
  print_r('<div class="appartment_res">');
  print_r('<div class="sub_search_menu"></div>');
  print_r('<div class="haus_grid">');
foreach($houses_with_office_pool as $post){  setup_postdata($post);
?>
<div class="haus_grid_elem">

<figure class="im">
  <a class="cat_img_h" href="<?= the_permalink($post) ?>"><img src="<?php echo get_field('основное_фото_дома', $post);?>" /></a>
</figure>
<div class="appartment info-banner">
<ul class="app_main">
  <li class="name"><strong class="dom_adres"><h2>Офисы в <?php echo get_the_title($post);?></h2></strong>      <div class="rayon"><p>Район: </p><strong class="dom_block"><?php echo  get_field('район', $post) ;?></strong></div>
      <div class="zastr"><p>Застройщик: </p><strong class="prc"><?php echo  get_field('застройщик', $post) ;?></strong></div></li>
  <li class="">

  </li>


  <li class="description">

<?
$params = array(
  'post_type' =>  'objects',
'order'  => 'DESC',
'post_parent__in' =>  array($post),
'meta_query'	=> array(
  'relation'		=> 'AND',
  array( 'key'	 	=> 'house_or_appartment',
'value'	  	=> 'Офис', 'compare' 	=> 'IN',
 ),
)


);
 $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts($params); $wp_query->is_archive = true; $wp_query->is_home = false; while(have_posts()): the_post();
$link = get_permalink($cur_post);
echo '<div class="office_n_l">'; $cur_post = $post->ID;
echo '<a href="'. $link .'"><p class="office_img"><img src="'. get_field('основное_фото_офиса', $cur_post) .'"></p></a>';
echo '<div class="off_data">';
$off_sqrt = get_field('office_sqrt', $cur_post);
if ($off_sqrt) {echo '<p class="sq">Площадь: '. get_field('office_sqrt', $cur_post) .'</p>';};
$off_sctn = get_field('секция__офиса_в_доме', $cur_post);
if ($off_sctn) {echo '<p class="sc">Секция дома: '. get_field('секция__офиса_в_доме', $cur_post) .'</p>';};
$off_stt = get_field('состояние_офиса', $cur_post);
if ($off_stt) { echo '<p class="st">Состояние: '. get_field('состояние_офиса', $cur_post) .'</p>';};
if (get_field('описание_офиса', $cur_post)) echo '<div class="off_loop_des">'. get_field('описание_офиса', $cur_post) .'</div>';
?><a class="office_link" href="<? echo $link; ?>"><button class="btn btn-details">Перейти</button></a><?
echo '</div>';

echo '<div class="off_side_menu ofs">';

echo '<div class="beaf"></div>';
echo '<div class="beaf2"></div>';
echo '<button class="stock prosmotr"> Записаться на просмотр</button>';
echo '<button class="stock credit"> Кредит <p>%</p></button>';
echo '<button class="stock installments "> Рассрочка <p style="text-decoration:line-through">%</p></button>';

echo '</div>';
echo '</div>';


endwhile;
?>
</li>


</ul>

</div>
</div>



<? }; wp_reset_postdata(); // сброс
print_r('</div>');
print_r('</div>');
print_r('</div>');


// THIS can solve the pagination issue due to inability to construct wp query with posts that only can have children. But you can also rebuild wp query just showing content if it does have some children in it's own loop. t's posssible GL
// $paged = (get_query_var('paged')) ? get_query_var('paged') : 0;
//
// $postsPerPage = 5;
// $postOffset = $paged * $postsPerPage;
//
// $args = array(
//     'posts_per_page'  => $postsPerPage,
//     'category_name'   => $btmetanm,
//     'offset'          => $postOffset,
//     'post_type'       => 'post'
// );
//
// $myposts = get_posts($args);



  };default_houses_behaviour();
      get_footer();
   ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/kvarts.js">
</script>
<script src="/wp-content/themes/ss/webpack/dist/bundle.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

      </div>
      <div class="clearfix"> </div>
    </div>

        <? include('/wp-content/themes/ss/footer_novostroy.php');?>

    <div id="root"></div>
  </div>
  </div>
</div>
    <?php get_footer();?>
