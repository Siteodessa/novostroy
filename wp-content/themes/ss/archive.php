<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
// управление перекрытием меню делается через релатив и з индекс  home-c container и srch_vals, управляй классом который перебрасывает индекс доминацию между этими двумя, короче два тогла вряд вполне хватит
get_header();

?>

<?
include('/wp-content/themes/ss/home_slider.php');
print_r('<link rel="stylesheet" href="'. get_template_directory_uri() .'/home.css">');
function default_kvartiri_behaviour()
{
  function there_is_any_get(){
  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $entry1 = strpos($actual_link,"&");
  $entry2 = strpos($actual_link,"?");
  if ($entry1 !== false ||  $entry2 !== false ) { return true;} else { return false;};
  }
  function make_search_values_checkboxes($search_tag){
$search_tago = $search_tag;
 $field = get_field_object($search_tago);
if( $field ) {
  echo '<div class="srch_labl"><p class="f_name">'. $field['label']  .'</p><div id="'. $search_tag .'" class="'. $search_tag .'_values vs"><aside><div class="choices">';
  foreach( $field['choices'] as $k => $v )
  {
    $z = $k;$where = $k;$what = "_";$position = strpos($where,$what);if ($position !== false ){    $phrase  = $k;$healthy = array("_");$yummy   = array(" ");$newphrase = str_replace($healthy, $yummy, $phrase); $z = $newphrase; };
         echo '<div class="choice" data-filter="'. $search_tag .'"><input type="checkbox" '. $checked .' srch-type="'. $search_tag .'" class="'. $search_tag .'" placeholder="' . $k . '" value="' . $v . '"><label title="'. $v . '" req="'. $req . '" class="srch_labl_val">'. $z . '</label><br></div>';
      };
       echo '</div></aside></div></div>';
     };
  };
  print_r('<div id="homecover" class="homecover">');
  print_r('<div id="homebase" class="homebase">');
  print_r('<div id="srch_vals" class="search_block">');
print_r('<div class="container">');
print_r('<div id="src_val" class="search_values z-dom">');
make_search_values_checkboxes("rom");
make_search_values_checkboxes("bld");
make_search_values_checkboxes("block");
make_search_values_checkboxes("floor");
if (isset($_GET[mns])){ $received_value_mns = $_GET[mns]; } else { $received_value_mns = '';}
if (isset($_GET[mxs])){ $received_value_mxs = $_GET[mxs]; } else { $received_value_mxs = '';}
if (isset($_GET[mnp])){ $received_value_mnp = $_GET[mnp]; } else { $received_value_mnp = '';}
if (isset($_GET[mxp])){ $received_value_mxp = $_GET[mxp]; } else { $received_value_mxp = '';}
print_r('<div class="srch_labl"><p class="f_name">Площадь</p><div id="sqrt_inp" class="sqrt_inp vs"><div class="inps choices "><label><input type="text" data-srch-type="mns" value="'. $received_value_mns .'" placeholder="От" /> </label><label><input value="'. $received_value_mxs .'"  type="text" data-srch-type="mxs" placeholder="До" /></label></div></div></div>');
print_r('<div class="srch_labl"><p class="f_name">Цена</p><div id="prc_inp" class="prc_inp vs"><div class="inps choices"><label><input type="text" value="'. $received_value_mnp .'" data-srch-type="mnp" placeholder="От" /> </label><label><input type="text" value="'. $received_value_mxp .'" data-srch-type="mxp" placeholder="До" /></label></div></div></div><a id="searchstarter"><button id="start" class="btn">Поиск квартир</button></a>');
  print_r('</div>');
    print_r('<div id="mini_block_b" class="srch-bot">');
    // print_r('a');
    print_r('</div>');
    print_r('</div>');
    print_r('</div>');
 // end search_values block
 function push_all_possible_meta_values($meta_key_slug)
 { $arr =  array();
    $search_tago = $meta_key_slug;
    $field = get_field_object($search_tago);
     if( $field ) {
       foreach( $field['choices'] as $k => $v )
        { array_push($arr, $k);
         } } return $arr;
       };
 $rom_value = push_all_possible_meta_values("rom");
 $bld_value = push_all_possible_meta_values("bld");
 $block_value = push_all_possible_meta_values("block");
 $floor_value = push_all_possible_meta_values("floor");
 $min_possible_price_value = '0';
 $max_possible_price_value = '10000000';
 $min_possible_sqrt_value = '0';
 $max_possible_sqrt_value = '10000000';
if (isset( $_GET['rom'] )) {  $rom_value = $_GET['rom'];}
  if (isset( $_GET['bld'] )) {  $bld_value = $_GET['bld'];}
     if (isset( $_GET['block'] )) {$block_value = $_GET['block'];}
     if (isset( $_GET['floor'] )) {$floor_value = $_GET['floor'];}
     if (isset( $_GET['mnp'] )) {$min_possible_price_value = $_GET['mnp'];}
     if (isset( $_GET['mxp'] )) {$max_possible_price_value = $_GET['mxp'];}
     if (isset( $_GET['mns'] )) {$min_possible_sqrt_value = $_GET['mns'];}
     if (isset( $_GET['mxs'] )) {$max_possible_sqrt_value = $_GET['mxs'];}
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
else { $paged = 1; }
$params = array(
  'post_type' =>  'objects',
  'posts_per_page' => 20,
  'order'  => 'DESC',
  'paged'          => $paged,
 	'meta_query'	=> array(
		  'relation'		=> 'AND',
      array( 'key'	  	=> 'house_or_appartment',
      'value'	  	=> 'Квартира',
      'compare' 	=> 'IN', ),
		  array( 'key'	 	=> 'rom',
      'value'	  	=>  $rom_value,
      'compare' 	=> 'IN', ),
      array( 'key'	  	=> 'bld',
      'value'	  	=> $bld_value,
      'compare' 	=> 'IN', ),
      array( 'key'	 	=> 'block',
      'value'	  	=> $block_value,
      'compare' 	=> 'IN', ),
      array( 'key'	 	=> 'floor',
      'value'	  	=> $floor_value,
      'compare' 	=> 'IN', ),
      array( 'key'	  	=> 'sqrt',
      'value'   => array( $min_possible_sqrt_value, $max_possible_sqrt_value ),
      'type'    => 'numeric',
      'compare' => 'BETWEEN', ),
      array( 'key'	  	=> 'prc',
      'value'   => array( $min_possible_price_value, $max_possible_price_value ),
      'type'    => 'numeric', 'compare' => 'BETWEEN', )
      )
     );
query_posts($params); $wp_query->is_archive = true;
$wp_query->is_home = false;
$counter = 0;
print_r('<div class="home-c container">');
  print_r('<div class="appartment_res">');
  print_r('<div class="sub_search_menu"></div>');
  print_r('<div class="apps_holder">');
while(have_posts()): the_post();
$best_off = get_field('лучшее_предложение');


 if ( $best_off == "Да"){ $best_offer_true = 'best_offer'; } else {  $best_offer_true = false;}?>
<div class="app_info <?=$best_offer_true?> closed">
<?

$i_d = get_the_ID();
$i_d_parent = wp_get_post_parent_id( $i_d );
$parent_image = get_field('основное_фото_дома', $i_d_parent);

?>
<ul class="appartment image">
<li class="im">
  <a href="<?= the_permalink()?>"><img src="<?php echo get_field('appar_image');?>" /></a></li>

<div class="sub_info">
  <li class="tfx bl"><p>Район: <span><?php echo get_field('block')  ;?></span></p></li>
  <li class="tfx bd"><p>Застройщик: <span><?php echo  get_field('bld') ;?></span></p></li>
</div>
<div class="sub_image">
  <li class="tfx bl"><a href="<?= the_permalink()?>"><img src="<?=$parent_image?>" /></a></li>
</div>
<div class="sub_cover">
<a href="<?=the_permalink()?>"></a>
</div>
<div class="sub_title">
<?=get_the_title($i_d_parent)?>
</div>


</ul>
<ul class="appartment info">
<li class="tx ro"><span><img src="http://novostroy/wp-content/uploads/2018/02/003-building.png" alt=""></span><p class="p_i">Комнат</p><strong class="rom"><?php echo get_field('rom');?></strong></li>
<li class="tx sq"><span><img src="http://novostroy/wp-content/uploads/2018/02/006-set-square.png" alt=""></span><p class="p_i">Площадь</p><strong class="sqrt"><?php echo  get_field('sqrt') ;?></strong></li>
<li class="tx pr"><span><img src="http://novostroy/wp-content/uploads/2018/02/005-shopping.png" alt=""></span><p class="p_i">Цена</p><strong class="prc"><?php echo  get_field('prc') ;?></strong></li>
<li class="tx fl"><span><img src="http://novostroy/wp-content/uploads/2018/02/004-stairs.png" alt=""></span><p class="p_i">Этаж</p><strong class="floor"><?php echo  get_field('floor') ;?></strong></li>
</ul>
<ul class="add_info">
      <? if($best_offer_true) { echo '<div class="b_o block"> <span>Лучшее предложение</span></div>';} ?>

<a href="<?=the_permalink()?>"><button class="stock">Подробнее</button></a>
</ul>
</div>


     <?php
     if (!is_admin){
  print_r('<b class="editka">');
    edit_post_link();?><a href=" <?php the_permalink();?>">Смотреть</a><?
         print_r('</b>');
       };
           print_r('');
      $counter++;
      endwhile;

      print_r('</div>');
      print_r('</div>');
      print_r('</div>');
      the_posts_pagination( array( 'mid_size'  => 2 ) );
      print_r('<div id="seotext" class="seo_text container">');
      print_r('Купить, продать квартиру в Одессе Жизнь стремительно бежит, одно событие сменяется другим, но вопрос продажи квартиры или дома всегда стоит остро. А на украинском рынке недвижимости особой сферой является продажа квартир в Одессе. И, несмотря на то, что город Одесса с мягким южным климатом, город легендарной красоты, находящийся на живописном побережье Черного моря, так называемая «Южная Пальмира» очень привлекателен своей культурной и исторической ценностью для постоянного проживания или людей прибывающих для отдыха, продать недвижимость быстро и выгодно – не так уж и просто. Продажа квартир в Одессе – вопрос не менее серьезный, чем проблема купить квартиру в Одессе. Вариантов решения этого вопроса много. Можно заключить договор с агентством недвижимости и, в случае нарушения вами какого-либо из пунктов договора, разорвать этот договор, при этом выплатить кругленькую сумму неустойки. Можно заплатить специалисту, составить грамотное рекламное объявление, разослать в газеты, журналы, расклеить на доски объявлений, рекламные столбы, обзвонить агентства недвижимости и т.д. и т.п. Но объявление такого рода не сможет вместить описание всех преимуществ вашей квартиры и не составит полного о ней представления. Но если нет времени, а главное – большого желания преодолевать все проблемы, связанные с таким вопросом, как продажа квартир в Одессе, то правильнее и проще всего будет зарегистрироваться на нашем сайте "Мегамаклер" и разместить свое объявление о продаже, приложив фотографии и описание квартиры. Размещение объявления на сайте ускорит и упростит поиск потенциальных покупателей. Являясь одним из самых популярных сайтов по продаже недвижимости, наш сайт также поможет вам купить квартиру в Одессе. Воспользовавшись услугами нашего сайта, вы сэкономите массу времени и финансов.');
      print_r('</div>');
          print_r('<div class="after_search">');
        if (there_is_any_get()){print_r('<a class="flush_search" href="/">Сбросить поиск</a>');}
    print_r('<div class="special_counter">Показывается квартир: '. $counter .'</div>');
    print_r('</div>');
  };
default_kvartiri_behaviour();

   ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/kvarts.js">
</script>
<script src="/wp-content/themes/ss/webpack/dist/bundle.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script>
   jQuery('#searchstarter').attr('search-direct', '<?php echo $_SERVER['SERVER_NAME']; ?>');
   var link_prefix = '/?';
   var default_url = '<?php echo $_SERVER['SERVER_NAME']; ?>'+ link_prefix +'';
</script>
      </div>
      </div>
      </div>
      <div class="clearfix"> </div>
    </div>



    <? include('/wp-content/themes/ss/footer_novostroy.php');?>



    <div id="root"></div>
  </div>
  </div>
  <?php get_footer(); ?>
