<?php get_header();?>
<?php/** * Template Name:  Цены
* Template Post Type: post, page, event
* * @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0 */
?>
<?php function get_block_prices($rayon){
$params = array(
  'post_type' =>  'objects',
  'posts_per_page' => 500,
  'order'  => 'DESC',
  'meta_query'	=> array(
  'relation'		=> 'AND',
  array( 'key'	 	=> 'house_or_appartment',
  'value'	  	=> 'Дом',
  'compare' 	=> 'IN', ),
   array( 'key'	  	=> 'район',
  'value'	  	=> $rayon,
   'compare' 	=> 'IN', ),
  )
   );
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts($params); $wp_query->is_archive = true;
$wp_query->is_home = false; $a = -1;
while(have_posts()): the_post();
$a++; $active = ''; if (bcmod($a, '2') == 0) { $active = 'active'; } else { $active = '';};
$link = get_permalink();
$title = get_the_title();
print_r('<div class="col-md-4 h_price">');
  print_r('  <div class="generic_content '. $active .' clearfix">');
  print_r('<div class="generic_head_price clearfix">');
  print_r('  <div class="generic_head_content clearfix">');
  print_r('   <div class="head_bg" data-src="'. get_field('основное_фото_дома') .'"></div>');
  print_r('  <div class="head">');
  print_r('   <a  href="'. $link .'"> <span>'. $title .'</span></a>');
  print_r('  </div>');
  print_r('  </div>');
  print_r('  <div class="generic_price_tag clearfix">');
  print_r('  <span class="price">');
  print_r('  <span class="sign">от</span>');
  $sing_prc = get_field('цена_однокомнатных_квартир_от');
  $sing_sqrt = get_field('площадь_однокомнатных_квартир_от');
  $doub_prc = get_field('цена_двухкомнатных_квартир_от');
  $doub_sqrt = get_field('площадь_двухкомнатных_квартир_от');
  $trip_prc = get_field('цена_трехкомнатных_квартир_от');
  $trip_sqrt = get_field('площадь_трехкомнатных_квартир_от');
  $sing_prc_splitted = str_split($sing_prc);
  $sing_prc_last_ones = array_slice($sing_prc_splitted, -3);
  if (count($sing_prc_splitted) < 6 ) {$sing_prc_first_ones = array_slice($sing_prc_splitted, 0, 2);}; if (count($sing_prc_splitted) > 5 ) {$sing_prc_first_ones = array_slice($sing_prc_splitted, 0, 3);};
  print_r('  <span class="currency">');
  foreach ($sing_prc_first_ones as $sing_prc_first_one) { print_r($sing_prc_first_one);};
  print_r(' </span> ');
  print_r('  <span class="cent">');
  foreach ($sing_prc_last_ones as $sing_prc_last_one) { print_r($sing_prc_last_one);};
  print_r('   </span>');
  print_r('  <span class="month">$</span>');
  print_r('  </span>');
  print_r('  </div>');
  print_r('  </div>');
  print_r('  <div class="generic_feature_list">');
  print_r('  <ul>');
  print_r('  <li><span>1</span> комнатные от <span>'. $sing_sqrt .' </span> м<sup>2</sup> / <span>'. $sing_prc .'</span> у.е.</li>');
  print_r('  <li><span>2</span> комнатные от <span>'. $doub_sqrt .'</span> м<sup>2</sup> / <span>'. $doub_prc .'</span> у.е.</li>');
  print_r('  <li><span>3</span> комнатные от <span>'. $trip_sqrt .'</span> м<sup>2</sup> / <span>'. $trip_prc .'</span> у.е.</li>');
  print_r('  </ul>');
  print_r('  </div>');
  print_r('  <div class="generic_price_btn clearfix">');
  print_r('  <a class="fr" href="'. $link .'">Смотреть недвижимость</a>');
  print_r('  <a class="sc">Связь&nbsp; с &nbsp;представителем</a>');
  print_r('  </div>');
  print_r('  </div>');
  print_r('  </div>');
 endwhile;
};?>
<div class="generic_price_table">
<section>
  <div class="container">
  <div class="row">
   <div class="col-md-12">
<div class="price-heading clearfix"> <h1><?=the_title()?></h1> </div>
  </div> </div> </div>
<div class="container price_t">
   <div class="price_blocks">
  <h2>Приморский</h2> <div class="row">
<? get_block_prices('Приморский');  ?>
  </div>
  <h2>Малиновский</h2> <div class="row">
<? get_block_prices('Малиновский');  ?>
  </div> <h2>Суворовский</h2> <div class="row">
<? get_block_prices('Суворовский');  ?>
  </div> <h2>Киевский</h2> <div class="row">
<? get_block_prices('Киевский');  ?>
   </div>   </div> </div> </section>
 </div>
  <div class="clearfix"> </div>
  </div>
  <div class="footer">
  <div class="container">
  <div class="row">
  <div class="col-md-3">
  <h3>О нас</h3>
  <p>Новостройки во всех районах города. Надежная строительная компания Одессы. Рассрочка. Поэтапная оплата. Акции. Горящие предложения. Официальная цена.</p>
  </div>
  <div class="col-md-3">
  <h3>Наши контакты</h3>
  <ul>
  <li>Одесса</li>
  <li> (048)736-80-94</li>
  <li>(096)323-29-13</li>
  <li>(066)787-06-23</li>
  </ul>
  </div>
  <div class="col-md-3">
  <h3>Последние предложения</h3>
  <div class="lstupd">
  <div class="col-md-4">
  <img src="http://novostroy/wp-content/uploads/2017/12/2-825x510.jpg" />
  </div>
  <div class="col-md-8">
  <a href="">ЖК «42 Жемчужина</a>
  </div>
  </div>
  </div>
  <div class="col-md-3">
  <h3>Мы в соц.сетях</h3>
  </div>
  </div>
  <div class="sf">
  <p>novostroyi.od.ua&nbsp;©&nbsp;2017</p>
  <p>Создание сайта: <a href="http://siteodessa.com">Siteodessa.com</a></div>
  </div>
  </div>
    <script src="/wp-content/themes/ss/webpack/dist/bundle.js"></script>
  <div id="root"></div>
  </div>
  </div>
  <?php get_footer();?>
