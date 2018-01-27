<?php
/**
 * The template for displaying category pages
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
get_header();
?>
<?php
?>

<?php

   the_post();
    the_title();
      ?>
     <li>Количество комнат :

       <?php echo get_field('количество_комнат'); ?>
     </li>
     <li>Площадь :
       <?php echo get_field('площадь');?>
     </li>
     <li>Этаж :
       <?php echo get_field('этаж');?>
     </li>
     <li>Секция :
       <?php echo get_field('секция');?>
     </li>
     <li>Описание :<?php echo get_field('описание');?>
     </li>
     <li>Цена :
       <?php echo get_field('цена');?>
     </li>
     <li>Застройщик :
       <?php echo get_field('застройщик');?>
     </li>
     <li>Район :
       <?php echo get_field('район');?>
     </li>
<?php echo '<br>'; echo '<br>'; echo '<br>'; echo '<br>'; echo '<br>'; ?>
<?php

 ?>
    <div class="row">
      <div class="container hb">
        <?php
$term = get_queried_object();
$image = get_field('image', $term);
if( is_category() )
if ( have_posts() ) :
if ( get_queried_object()->name == 'Строящиеся дома' || get_queried_object()->name == 'Сданные дома')  {
$i=1;
$cat = get_query_var('cat');
$categories = get_categories('parent='.$cat.'');
foreach ($categories as $category) { $i++; }
if ($i > 1) {
echo "<div id='catblocks'>";
    $g = 1;
foreach ($categories as $category) {
$term = get_queried_object();
$image = get_field('image', $category);
$adress = get_field('адрес', $category);
$quantity = get_field('количество_квартир', $category);
$sqrt = get_field('площадь_квартир', $category);
$status = get_field('статус_дома', $category);
if($desc_acf=get_field("image",get_category($cat))){
echo apply_filters("the_content", $desc_acf);
}?>
          <div class="col-md-4 bldng" name="building-<?php echo $g;?>">
            <div class="blda" title="<?php echo $category->name; ?>">
              <span class="bdg-name"><?php echo $category->name; ?></span>
              <a href="<?php echo get_category_link($category->term_id); ?>"><span class="bdg-image"><?php echo '<img alt="'.$category->name.'" src="'.$image.'">';?></span></a>
              <span class="data">
    <span class="bdg-adress">
      <img class="icon" src="http://novostroy/wp-content/uploads/2017/12/003-gps.png">
            Адрес:  <p><?php echo $adress; ?></p> </span>
              <span class="bdg-quantity">
                <img class="icon" src="http://novostroy/wp-content/uploads/2017/12/002-appartments.png">
            Количество квартир: <p> <?php echo $quantity; ?></p></span>
              <span class="bdg-sqrt"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/001-ruler.png">
            Площадь квартир: <p> <?php echo $sqrt; ?></p></span>
              <span class="bdg-status"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/004-list.png">
            Статус дома: <p><?php echo $status; ?></p> </span></span>
            </div>
          </div>
          <?php $g++;}
        	echo "</div>";
        } else {
        	$pcat = get_category(get_query_var('cat'),false);
        	$pcatid = $pcat->category_parent;
        	$categories = get_categories('parent='.$pcatid.'');
        	echo "<div>";
        	foreach ($categories as $category) { ?>
          <li<?php if ($category->term_id == $cat) { ?> class="active"
            <?php } ?>><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
            <?php the_field('фото', $post_id);
if($imgcat1=get_field("фото",get_category($cat))){?>
            <img src="<?php echo $imgcat1;?>" />
            <?php } }
        	echo "</div>";
        }
   }
   else {
   include('catbaner.php');
			// Start the Loop.
			while ( have_posts() ) : the_post();
      $fieldyroom = get_field('количество_комнат');
       $fieldysqrt = get_field('площадь');
       $fieldyfloor = get_field('этаж');
      $fieldysection = get_field('секция');
      $fieldydescription = get_field('описание');
       $fieldyprice = get_field('цена');
        $fieldyvendor = get_field('застройщик');
        $fieldyblock = get_field('район');
        if (empty($fieldyroom) && empty($fieldysqrt) && empty($fieldyfloor) && empty($fieldysection) && empty($fieldydescription) && empty($fieldyprice) && empty($fieldyvendor) && empty($fieldyblock) ){ echo '';} else {
			?>
      <div class="col-md-6 appa">
              <div class="ch arch">
                <ul>
                  <div class="col-md-8">
                    <?php // echo the_title(); // echo the_permalink(); ?>
                    <?php
                     if (!empty($fieldyroom)){echo '<li>Количество комнат : '.$fieldyroom.'</li>';};
                     if (!empty($fieldysqrt)){echo '<li>Площадь квартиры : '.$fieldysqrt.'</li>';};
                     if (!empty($fieldyfloor)){echo '<li>Этаж : '.$fieldyfloor.'</li>';};
                     if (!empty($fieldysection)){echo '<li>Секция : '.$fieldysection.'</li>';};
                     if (!empty($fieldydescription)){echo '<br><li> '.$fieldydescription.'</li>';};
                     if (!empty($fieldyprice)){echo '<li>Цена : '.$fieldyprice.'</li>';};
                     if (!empty($fieldyvendor)){echo '<li>Застройщик : '.$fieldyvendor.'</li>';};
                     if (!empty($fieldyblock)){echo '<li>Район : '.$fieldyblock.'</li>';};
                    ?>
                  </div>
                  <div class="col-md-4 image">
                    <li class=""><img alt="Купить квартиру в Одессе <?php echo get_field('застройщик');?>" src="<?php echo get_field('планировка');?>" /></li>
                  </div>
                </ul>
              </div>
            </div>
            <?php
          };
			endwhile;
   }

		else :
			get_template_part( 'content', 'none' );
		endif;
		?>
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
    <div id="root"></div>

  <script src="/wp-content/themes/ss/webpack/dist/bundle.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>
    $(".wrpovr img").click(function() {
      var s = $(this)
      $('.wim').css('background-image', s);
    });
  </script>
  <?php get_footer(); ?>
