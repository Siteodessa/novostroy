<?php get_header();?>
<?php/** * Template Name:  Сданные дома в Одессе
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
echo '<h1>'; echo strval($title); echo '</h1>';
function default_houses_behaviour()
{
  // function there_is_any_get(){
  // $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  // $entry1 = strpos($actual_link,"&");
  // $entry2 = strpos($actual_link,"?");
  // if ($entry1 !== false ||  $entry2 !== false ) { return true;} else { return false;};
  // }
//   function make_search_values_checkboxes($search_tag){
// $search_tago = $search_tag;
//  $field = get_field_object($search_tago);
// if( $field ) {
//   echo '<div id="'. $search_tag .'" class="'. $search_tag .'_values"><aside><p class="srch_labl">'. $field['label']  .'</p><div class="choices">';
//   foreach( $field['choices'] as $k => $v )
//   {
//     $z = $k;$where = $k;$what = "_";$position = strpos($where,$what);if ($position !== false ){    $phrase  = $k;$healthy = array("_");$yummy   = array(" ");$newphrase = str_replace($healthy, $yummy, $phrase); $z = $newphrase; };
//          echo '<div class="choice" data-filter="'. $search_tag .'"><input type="checkbox" '. $checked .' srch-type="'. $search_tag .'" class="'. $search_tag .'" placeholder="' . $k . '" value="' . $v . '"><label title="'. $v . '" req="'. $req . '" class="srch_labl_val">'. $z . '</label><br></div>';
//       };
//        echo '</div></aside></div>';
//      };
//   };
// print_r('<div class="container">');
// print_r('<div id="src_val" class="search_values z-dom">');
// make_search_values_checkboxes("rom");
// make_search_values_checkboxes("bld");
// make_search_values_checkboxes("block");
// make_search_values_checkboxes("floor");
// if (isset($_GET[mns])){ $received_value_mns = $_GET[mns]; } else { $received_value_mns = '';}
// if (isset($_GET[mxs])){ $received_value_mxs = $_GET[mxs]; } else { $received_value_mxs = '';}
// if (isset($_GET[mnp])){ $received_value_mnp = $_GET[mnp]; } else { $received_value_mnp = '';}
// if (isset($_GET[mxp])){ $received_value_mxp = $_GET[mxp]; } else { $received_value_mxp = '';}
// print_r('<div id="sqrt_inp" class="sqrt_inp"><p class="srch_labl">Площадь</p><div class="inps choices "><label><input type="text" data-srch-type="mns" value="'. $received_value_mns .'" placeholder="От" /> </label><label><input value="'. $received_value_mxs .'"  type="text" data-srch-type="mxs" placeholder="До" /></label></div></div>');
// print_r('<div id="prc_inp" class="prc_inp"><p class="srch_labl">Цена</p><div class="inps choices"><label><input type="text" value="'. $received_value_mnp .'" data-srch-type="mnp" placeholder="От" /> </label><label><input type="text" value="'. $received_value_mxp .'" data-srch-type="mxp" placeholder="До" /></label></div></div><a id="searchstarter"><button id="start" class="btn">Поиск</button></a>');
  // print_r('</div>');
    // print_r('<div id="mini_block_b" class="srch-bot">');
    // // print_r('a');
    // print_r('</div>');
    // print_r('</div>');
    // print_r('</div>');
 // end search_values block
 // function push_all_possible_meta_values($meta_key_slug)
 // { $arr =  array(); $search_tago = $meta_key_slug; $field = get_field_object($search_tago); if( $field ) { foreach( $field['choices'] as $k => $v ) { array_push($arr, $k); } } return $arr; }
 // $rom_value = push_all_possible_meta_values("rom");
 // $bld_value = push_all_possible_meta_values("bld");
 // $block_value = push_all_possible_meta_values("block");
 // $floor_value = push_all_possible_meta_values("floor");
 // $min_possible_price_value = '0';
 // $max_possible_price_value = '10000000';
 // $min_possible_sqrt_value = '0';
 // $max_possible_sqrt_value = '10000000';
// if (isset( $_GET['rom'] )) {  $rom_value = $_GET['rom'];}
//   if (isset( $_GET['bld'] )) {  $bld_value = $_GET['bld'];}
//      if (isset( $_GET['block'] )) {$block_value = $_GET['block'];}
//      if (isset( $_GET['floor'] )) {$floor_value = $_GET['floor'];}
//      if (isset( $_GET['mnp'] )) {$min_possible_price_value = $_GET['mnp'];}
//      if (isset( $_GET['mxp'] )) {$max_possible_price_value = $_GET['mxp'];}
//      if (isset( $_GET['mns'] )) {$min_possible_sqrt_value = $_GET['mns'];}
//      if (isset( $_GET['mxs'] )) {$max_possible_sqrt_value = $_GET['mxs'];}

$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;

if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
    elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
    else { $paged = 1; }
    $params = array(
      'post_type' =>  'objects',
      'posts_per_page' => 10,
      'order'  => 'DESC',
              'paged'          => $paged,
     	'meta_query'	=> array(
    		  'relation'		=> 'AND',
              array( 'key'	 	=> 'house_or_appartment',
                'value'	  	=> 'Дом',
                'compare' 	=> 'IN', ),
                 array( 'key'	  	=> 'дом_строится_или_сдан',
                  'value'	  	=> 'Сдан',
                   'compare' 	=> 'IN', ),
          )
         );

query_posts($params); $wp_query->is_archive = true;
$wp_query->is_home = false;
// $counter = 0;
print_r('<div class="home-c container sdannye">');
  print_r('<div class="appartment_res">');
  print_r('<div class="sub_search_menu"></div>');
  print_r('<div class="haus_grid">');
while(have_posts()): the_post();?>
<div class="haus_grid_elem">
  <button class="cta">показать на карте</button>
  <button class="cta2">цены</button>
<figure class="im">
  <a class="cat_img_h" href="<?= the_permalink()?>"><img src="<?php echo get_field('основное_фото_дома');?>" /></a>
</figure>
<div class="appartment info-banner">
<ul class="app_main">
  <li class="name"><strong class="dom_adres"><h2><?php echo the_title();?></h2></strong></li>
  <li class="mini-data">
     <div class="rayon"><p>Район: </p><strong class="dom_block"><?php echo  get_field('район') ;?></strong></div>
    <div class="zastr"><p>Застройщик: </p><strong class="prc"><?php echo  get_field('застройщик') ;?></strong></div>
  </li>

  <li class="description"><p><?php echo  get_field('короткое_описание') ;?></p></li>
  <li class="link">
    <div class="app_features">
      <div class="commerce"><p>коммерческие помещения</p>
        <!-- <span><?php// echo  get_field('коммерческие_помещения') ;?></span> -->
      </div>
      <div class="security"><p>охраняемая территория</p>
        <!-- <span><?php// echo  get_field('охраняемая_территория') ;?></span> -->
      </div>
      <div class="parking"><p>парковка</p>
        <!-- <span><?php// echo  get_field('парковка') ;?></span> -->
      </div>
    </div>
    <a href="<?php echo get_the_permalink() ;?>"><button class="btn btn-details">Подробнее</button></a></li>
<?php //echo  edit_post_link(); ;?>
</ul>


</div>
</div>
     <?php
      endwhile;
      print_r('</div>');
      print_r('</div>');
                    the_posts_pagination( array( 'mid_size'  => 2 ) );
      print_r('</div>');
          print_r('<div class="after_search">');
        // if (there_is_any_get()){print_r('<a class="flush_search" href="/">Сбросить поиск</a>');}
    // print_r('<div class="special_counter">Показывается квартир: '. $counter .'</div>');
    print_r('</div>');


  };
default_houses_behaviour();
      get_footer();
   ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/kvarts.js">
</script>
<script src="<?php echo get_template_directory_uri();?>/webpack/dist/bundle.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

      </div>
      <div class="clearfix"> </div>
    </div>


        <?php get_template_part('footer_novostroy');?>

    <?php get_footer();?>
