<?php get_header();?>
<?php/** * Template Name:  Горящие предложения
* Template Post Type: post, page, event
* * @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0 */?>


<?php
print_r('<link rel="stylesheet" href="'. get_template_directory_uri() .'/home.css">');

print_r('<div class="hotoffer_cover">');

print_r('<h1>'. get_the_title(). '</h1>');
$params = array(
  'post_type' =>  'objects',
  'posts_per_page' => 500,
  'order'  => 'DESC',
  'meta_query'	=> array(
  'relation'		=> 'AND',
  array( 'key'	 	=> 'house_or_appartment',
  'value'	  	=> 'Квартира',
  'compare' 	=> 'IN', ),
  array( 'key'	 	=> 'лучшее_предложение',
  'value'	  	=> 'Да',
  'compare' 	=> 'IN', ),
  )
   );
   print_r('<div class="home-c container">');
     print_r('<div class="appartment_res">');
     print_r('<div class="sub_search_menu"></div>');
     print_r('<div class="apps_holder">');

$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts($params); $wp_query->is_archive = true;
$wp_query->is_home = false; $a = -1;
while(have_posts()): the_post();
if ( get_field('лучшее_предложение')){ $best_offer_true = 'best_offer'; } else {  $best_offer_true = false;}
?>
<div class="app_info <?=$best_offer_true?>" >
  <? if($best_offer_true) { echo '<div class="b_o block"> <span>Лучшее предложение</span></div>';} ?>
<ul class="appartment image">
<li class="im">
  <a href="<?= the_permalink()?>"><img src="<?php echo get_field('appar_image');?>" /></a></li>
</ul>
<ul class="appartment info">
<li class="tx ro"><span><img src="http://novostroy/wp-content/uploads/2018/02/003-building.png" alt=""></span><p class="p_i">Комнат</p><strong class="rom"><?php echo get_field('rom');?></strong></li>
<li class="tx sq"><span><img src="http://novostroy/wp-content/uploads/2018/02/006-set-square.png" alt=""></span><p class="p_i">Площадь</p><strong class="sqrt"><?php echo  get_field('sqrt') ;?></strong></li>
<li class="tx pr"><span><img src="http://novostroy/wp-content/uploads/2018/02/005-shopping.png" alt=""></span><p class="p_i">Цена</p><strong class="prc"><?php echo  get_field('prc') ;?></strong></li>
<li class="tx fl"><span><img src="http://novostroy/wp-content/uploads/2018/02/004-stairs.png" alt=""></span><p class="p_i">Этаж</p><strong class="floor"><?php echo  get_field('floor') ;?></strong></li>
</ul>
<ul class="add_info">
<li class="tfx bl"><p>Район: <span><?php echo get_field('block')  ;?></span></p></li>
<li class="tfx bd"><p>Застройщик: <span><?php echo  get_field('bld') ;?></span></p></li>
<?

?>
<button class="stock">Подробнее</button>
</ul>
</div>

<?

endwhile;
print_r('</div>');
print_r('</div>');
print_r('</div>');
?>


 </div>
  <div class="clearfix"> </div>
  </div>
  </div>


    <script src="/wp-content/themes/ss/webpack/dist/bundle.js"></script>

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
  <div id="root"></div>
  </div>
  </div>








    <?php get_footer();?>
