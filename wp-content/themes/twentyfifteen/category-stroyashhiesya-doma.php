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


print_r('<link rel="stylesheet" href="'. get_template_directory_uri() .'/home.css">');


$params = array(
  'post_type' =>  'objects',
  'category_name' =>  'sdannye-doma',
  'posts_per_page' => 500,
  'order'  => 'DESC',
     );
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts($params); $wp_query->is_archive = true;
$wp_query->is_home = false;
$counter = 0;
  print_r('<div class="appartment_res">');
  print_r('<div class="sub_search_menu"></div>');
  print_r('<div class="apps_holder">');
while(have_posts()): the_post();?>
<ul class="appartment">
  <li class="im">
    <a href="<?= the_permalink()?>"><img src="<?php echo get_field('фото');?>" /></a></li>
<li class="bd"><p>Застройщик</p><strong class="bld"><?php echo  get_field('bld') ;?></strong></li>
<li class="ro"><p class="app_comn">Комнат</p><strong class="rom"><?php echo get_field('rom');?></strong></li>
<li class="bl"><p>Район</p><strong class="block"><?php echo get_field('block')  ;?></strong></li>
<li class="sq"><p>Площадь</p><strong class="sqrt"><?php echo  get_field('sqrt') ;?></strong></li>
<li class="pr"><p>Цена</p><strong class="prc"><?php echo  get_field('prc') ;?></strong></li>
     <?php
     if (!is_admin){
  print_r('<b class="editka">');
    edit_post_link();?><a href=" <?php the_permalink();?>">Смотреть</a><?
         print_r('</b>');
       };
           print_r('</ul>');

      $counter++;
      endwhile;
      print_r('</div>');
      print_r('</div>');
    print_r('<div class="special_counter">Показывается квартир: '. $counter .'</div>');

// default_kvartiri_behaviour();
      get_footer();
   ?>


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
  <?php get_footer(); ?>
