<?php get_header();?>
<?php/** * Template Name:  Главная
* * @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0 */?>

    <div class="row">
      <div class="container hb">
        <div class="slfa">
          <div class="slide fromLeft active" style="background: url('http://novostroy/wp-content/uploads/2017/12/Gorizont-Omega.jpg'); background-size:cover;"></div>
          <div class="slide fromLeft" style="background: url('http://novostroy/wp-content/uploads/2017/12/Siti-Park.jpg'); background-size:cover;"></div>
          <div class="slide fromLeft" style="background: url('http://novostroy/wp-content/uploads/2017/12/Budova.jpg'); background-size:cover;"></div>
          <div class="slide fromLeft" style="background: url('http://novostroy/wp-content/uploads/2017/12/Marshal-Siti.jpg'); background-size:cover;"></div>
          <span class="nav" id="left">&lsaquo;</span>
          <span class="nav" id="right">&rsaquo;</span>
        </div>
        <!--OLD BEGINNING-->
        <?php $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;   $params = array( 'category_name' => 'Строящиеся дома', 'posts_per_page' => 100, 'paged' => $current_page ); query_posts($params); $wp_query->is_archive = true; $wp_query->is_home = false; while(have_posts()): the_post(); ?>
        <?php endwhile; ?>
        <!--OLD END-->
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
$adress = get_field('адрес', $category);
$quantity = get_field('количество_квартир', $category);
$sqrt = get_field('площадь_квартир', $category);
$status = get_field('статус_дома', $category);
$image = get_field('image', $category);
$rayon = get_field('район', $category);
$srok = get_field('срок_сдачи', $category);
$vendor = get_field('застройщик', $category);
$sqrtprice = get_field('цена_за_квадратный_метр', $category);
if($desc_acf=get_field("image",get_category($cat))){
echo apply_filters("the_content", $desc_acf);
}
/*   Надо добавить район застройщик срок сдачи   и поле цена за квадратный метр   */

        ?>
        <div class="col-md-4 bldng" name="building-<?php echo $g;?>">
          <div class="blda" title="<?php echo $category->name; ?>">
            <span class="bdg-name"><?php echo $category->name; ?></span>
            <a class="imga" href="<?php echo get_category_link($category->term_id); ?>">
              <span class="bdg-image"><?php echo '<img alt="'.$category->name.'" src="'.$image.'">';?></span>
            </a>

<?php if (!empty($sqrtprice)){echo '<span class="bdg-sqrtprice"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/003-gps.png">Цена за квадратный метр:<p>'.$sqrtprice.'</p></span>';}; ?>
<?php if (!empty($vendor)){echo '<span class="bdg-vendor"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/003-gps.png">Застройщик:<p>'.$vendor.'</p></span>';}; ?>
<?php if (!empty($rayon)){echo '<span class="bdg-block"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/003-gps.png">Район:<p>'.$rayon.'</p></span>';}; ?>
<?php if (!empty($adress)){echo '<span class="bdg-adress"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/003-gps.png">Адрес:<p>'.$adress.'</p></span>';}; ?>
<?php if (!empty($quantity)){echo '<span class="bdg-quantity"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/002-appartments.png">Количество квартир: <p>'.$quantity.'</p></span>'; }?>
<?php if (!empty($sqrt)){echo '<span class="bdg-sqrt"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/001-ruler.png">Площадь квартир: <p>'.$sqrt.'</p></span>'; }?>
<?php if (!empty($status)){echo '<span class="bdg-status"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/004-list.png">Статус дома: <p>'.$status.'</p></span>'; }?>
<?php if (!empty($srok)){echo '<span class="bdg-srok"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/004-list.png">Срок сдачи: <p>'.$srok.'</p></span>'; }?>


          </div>
        </div>
        <?php $g++;
}
        	echo "</div>";
        } else {
        	$pcat = get_category(get_query_var('cat'),false);
        	$pcatid = $pcat->category_parent;
        	$categories = get_categories('parent='.$pcatid.'');
        	echo "<div>";
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
    <span class="bdg-adress">            <img class="icon" src="http://novostroy/wp-content/uploads/2017/12/003-gps.png">
            Адрес:  <p><?php echo $adress; ?></p> </span>
            <span class="bdg-quantity">  <img class="icon" src="http://novostroy/wp-content/uploads/2017/12/002-appartments.png">
            Количество квартир: <p> <?php echo $quantity; ?></p></span>
            <span class="bdg-sqrt"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/001-ruler.png">
            Площадь квартир: <p> <?php echo $sqrt; ?></p></span>
            <span class="bdg-status"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/004-list.png">
            Статус дома: <p><?php echo $status; ?></p> </span></span>
          </div>
        </div>
        <?php $g++;
 } }
        	echo "</div>";
        }
   else {
   include('catbaner.php');
			// Start the Loop.
			while ( have_posts() ) : the_post();
			?>
        <div class="col-md-6 appa">
          <div class="ch arch">
            <ul>
              <div class="col-md-8">
                <?php // echo the_title(); ?>
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
                <li>Описание :
                  <?php echo get_field('описание');?>
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
              </div>
              <div class="col-md-4 image">
                <li class=""><img alt="Купить квартиру в Одессе <?php echo get_field('застройщик');?>" src="<?php echo get_field('планировка');?>" /></li>
              </div>
            </ul>
          </div>
        </div>
        <?php
			endwhile;
   }
?>
          <?php
		else :
			get_template_part( 'content', 'none' );
		endif;
		?>
      </div>
      <div id="root"></div>
      <script src="/wp-content/themes/ss/webpack/dist/bundle.js"></script>

    <?php get_footer();?>
