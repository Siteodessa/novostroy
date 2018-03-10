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
$stack = array();
while(have_posts()): the_post();
?>
<ul class="cat_hold">
  <li class="one_cat_hold">
<?
$categories = get_the_category();
$category_id = $categories[0]->cat_ID;
$term = get_queried_object();
$link = get_permalink();
array_push($stack, $category_id);
print_r('<div style="width:10%">');
print_r($category_id);
print_r('<br>');
print_r(get_field('фото', $term));
print_r('<br>');
print_r(get_field('район', $term));
print_r('<br>');
print_r('<a href="'. $link .'">Ссылка</a>');
print_r('<br>');
print_r('</div>');
?>
</li>
</ul>
<?php
endwhile;
print_r('</div>');
print_r('</div>');
print_r('<div style="display:flex;flex-direction:column;background:#444;color:#fff;padding:20px 50px;">');
$stack = array_unique($stack);
print_r($stack);

  echo '<br>Цикл дочерних текущей категорий<br>';
foreach ($stack as $key => $value) {
 echo '<br>ID -';
 echo $value;
 echo '<br>Name - ';
 echo get_cat_name( $value ) ;
 echo '<br>Link - ';
 echo get_category_link($value) ;
 echo '<br>';
 echo '<br>other - ';
 $terms = get_the_terms( $value, 'category' );
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
    echo '<ul>';
    foreach ( $terms as $term ) {
        echo '<li>' . $term->name . '</li>';
    }
    echo '</ul>';
}
 echo '<br>';
}


print_r(the_field('район', $stack[1]));
get_post_meta( $post_id, $key = '', $single = false );
print_r('</div>');
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
while(have_posts()): the_post();
// все что ниже - просто базовая верстка - сверху надо собрать нормальный цикл который хоть категории получит
?>
<ul class="appartment">
  <li class="im">
    <a href="<?= the_permalink()?>"><img src="<?php echo get_field('фото');?>" />    <?php echo 'Айдишники нужно напихать в массив как минимум, и каждый раз проверять есть ли такой айдишник в массиве, и когда будет полный  массив , запустить второй цикл который по каждому из айдишников пройдется и будет вытаскивать поля уже по айдишнику'; echo get_the_ID();?></a></li>
<li class="bd"><p>Застройщик</p><strong class="bld"><?php echo  get_field('bld') ;?></strong></li>
<li class="ro"><p class="app_comn">Комнат</p><strong class="rom"><?php echo get_field('rom');?></strong></li>
<li class="bl"><p>Район</p><strong class="block"><?php echo get_field('block')  ;?></strong></li>
<li class="sq"><p>Площадь</p><strong class="sqrt"><?php echo  get_field('sqrt') ;?></strong></li>
<li class="pr"><p>Цена</p><strong class="prc"><?php echo  get_field('prc') ;?></strong></li>
       title    <?php echo get_field('title');?><br>
       адрес    <?php echo get_field('адрес');?><br>
       район    <?php echo get_field('район');?><br>
       площадь_однокомнатных_квартир_от    <?php echo get_field('площадь_однокомнатных_квартир_от');?><br>
       цена_однокомнатных_квартир_от    <?php echo get_field('цена_однокомнатных_квартир_от');?><br>
       площадь_двухкомнатных_квартир_от    <?php echo get_field('площадь_двухкомнатных_квартир_от');?><br>
       цена_двухкомнатных_квартир_от    <?php echo get_field('цена_двухкомнатных_квартир_от');?><br>
       площадь_трехкомнатных_квартир_от    <?php echo get_field('площадь_трехкомнатных_квартир_от');?><br>
       цена_трехкомнатных_квартир_от    <?php echo get_field('цена_трехкомнатных_квартир_от');?><br>
       срок_сдачи    <?php echo get_field('срок_сдачи');?><br>
       застройщик    <?php echo get_field('застройщик');?><br>
       фото    <?php echo get_field('фото');?><br>
       добавить_еще_фото    <?php echo get_field('добавить_еще_фото');?><br>
       добавить_фото2    <?php echo get_field('добавить_фото2');?><br>
       добавить_фото3    <?php echo get_field('добавить_фото3');?><br>
       добавить_фото4    <?php echo get_field('добавить_фото4');?><br>
       добавить_фото5    <?php echo get_field('добавить_фото5');?><br>
       добавить_фото6    <?php echo get_field('добавить_фото6');?><br>
       добавить_фото7    <?php echo get_field('добавить_фото7');?><br>
       добавить_фото8    <?php echo get_field('добавить_фото8');?><br>
       добавить_фото9    <?php echo get_field('добавить_фото9');?><br>
       добавить_фото10    <?php echo get_field('добавить_фото10');?><br>
       описание    <?php echo get_field('описание');?><br>
       количество_этажей    <?php echo get_field('количество_этажей');?><br>
       отделка    <?php echo get_field('отделка');?><br>
       коммерческие_помещения    <?php echo get_field('коммерческие_помещения');?><br>
       охраняемая_территория    <?php echo get_field('охраняемая_территория');?><br>
       паркинг_подземный    <?php echo get_field('паркинг_подземный');?><br>
       парковка    <?php echo get_field('парковка');?><br>
       детские_площадки    <?php echo get_field('детские_площадки');?><br>
       рядом_есть_детский_сад_    <?php echo get_field('рядом_есть_детский_сад_');?><br>
       рядом_есть_супермаркет    <?php echo get_field('рядом_есть_супермаркет');?><br>
       рядом_есть_аптека    <?php echo get_field('рядом_есть_аптека');?><br>
       сквер_парк_зеленая    <?php echo get_field('сквер_парк_зеленая');?><br>
       рядом_есть_сквер_парк_зеленая_зона    <?php echo get_field('рядом_есть_сквер_парк_зеленая_зона');?><br>
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
<script>
</script>
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
