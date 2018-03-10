<?php get_header();?>
<?php/** * Template Name:  Сданные дома
* Template Post Type: post, page, event
* * @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0 */?>
 <?php function metapolename($detali, $pid) { $metko = get_post_meta($pid, $detali, true); if (empty($metko)) { } else { return $metko; }; } ?>

 <?php echo metapolename('CATEGORYRUBRIKA', $post->ID);?>

  <?php $field = metapolename('фото', $post->ID); if (empty($cena)) {echo '';} else {echo '<p class="">Планировка :<span class="">'; echo $field; echo '</span></p>';}?>

<div class="sdannye">
<div class="subcat"><ul class="subcateg">
<?php
if (count(get_categories('child_of='.$cat)))
if (is_category()) {
$current_cat=get_query_var('cat');
wp_list_categories('child_of='.$current_cat.'&title_li=&show_count=1');} ?>
</ul></div>


  <link rel="stylesheet" href="/wp-content/themes/ss/webpack/src/css/bootstrap.css">
  <link rel="stylesheet" href="/wp-content/themes/ss/webpack/src/css/style.css">
  <div class="container hd">
    <header>
      <div class="header-banner">
        <button role="buttton" class="btn-success cnct" onclick="alert('binotel')"> Связаться с нами</button>
      </div>
      <div class="clear"></div>
<?php include('nav.php');?>
    </header>
    <div class="row">
      <div class="container hb">















        <?php
        $i=1;
        $cat = get_query_var('cat');
        $categories = get_categories('parent='.$cat.'');
        foreach ($categories as $category) { $i++; }
        if ($i > 1) {
        	echo "<ul>";
        	foreach ($categories as $category) { ?>
        		<li><a href="<?php echo get_category_link($category->term_id); ?>" ><?php echo $category->name; ?></a></li>
        	<?php }
        	echo "</ul>";
        } else {
        	$pcat = get_category(get_query_var('cat'),false);
        	$pcatid = $pcat->category_parent;
        	$categories = get_categories('parent='.$pcatid.'');
        	echo "<ul>";
        	foreach ($categories as $category) { ?>
        		<li<?php if ($category->term_id == $cat) { ?> class="active"<?php } ?>><a href="<?php echo get_category_link($category->term_id); ?>" ><?php echo $category->name; ?></a></li>
<?php the_field('фото', $post_id); ?>
<?php if($imgcat1=get_field("фото",get_category($cat))){?>
<img src="<?php echo $imgcat1;?>"/>
<?php }?>
        	<?php }
        	echo "</ul>";
        }
        ?>





        <?php
        	$parent_id = 2;
        	$cat2 = get_query_var('cat');
        	$sub_cats = get_categories( array(
        		'parent' => $parent_id,
        		'hide_empty' => 0
        	));
        	if( $sub_cats ){
        		foreach( $sub_cats as $cat ){
        			if ($cat->term_id == $cat2) {
        				echo '<li><span class="button active"  href=' . get_category_link( $cat->term_id ) . '>'. $cat->name .'</span></li>';
?>
                <?php the_field('фото', $post_id); ?>
                <?php if($imgcat1=get_field("фото",get_category($cat))){?>
                <img src="<?php echo $imgcat1;?>"/>
                <?php }?>


    <?php
        			} else {
        				echo '<li><a class="button" href=' . get_category_link( $cat->term_id ) . '>'. $cat->name .'</a></li>';
        			}
        		}
        	}
        ?>







        <?php $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;   $params = array( 'category_name' => 'Сданные дома', 'posts_per_page' => 100, 'paged' => $current_page ); query_posts($params); $wp_query->is_archive = true; $wp_query->is_home = false; while(have_posts()): the_post(); ?>
        <div class="col-md-3 prcrd">
          <div class="clearfix"> </div>
          <div class="ih"> <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url(); ?>"></a></div>
          <div class="ch">
            <div>
              <h3>
                <a href="<?php the_permalink();?>">
                  <?php the_title() ?> </a>
              </h3>
            </div>
            <div>
              <div>
                <? $metko = get_post_meta($post->ID, 'адрес', true); if (empty($metko)) {} else { echo '<p class="adress">Адрес :<span class="directs dir-adress">'; echo $metko; echo '</span></p>'; } ?>
                  <? $metko = get_post_meta($post->ID, 'срок_сдачи', true); if (empty($metko)) {} else { echo '<p class="srok">Срок сдачи :<span class="directs dir-srok">';echo $metko;echo '</span></p>'; } ?>
                    <? $metko = get_post_meta($post->ID, 'район', true); if (empty($metko)) {} else { echo '<p class="srok">Район :<span class="directs dir-srok">';echo $metko;echo '</span></p>'; } ?>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      <div id="root"></div>
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
        </div>    </div>
        <div class="col-md-3">
          <h3>Мы в соц.сетях</h3>
        </div>
      </div>
      <div class="sf"><p>novostroyi.od.ua&nbsp;©&nbsp;2017</p><p>Создание сайта: <a href="http://siteodessa.com">Siteodessa.com</a></div>
    </div>
      </div></div>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
var current = 0;
var slides = $(".slide");
$("#right").click(function() {
  slide(1);
});
$("#left").click(function() {
  slide(-1);
});
function slide(offset) {
  var next = (current + offset) % slides.length;
  if (next < 0) { next = slides.length + next;
}
  $(slides[next]).removeClass("fromRight");
  $(slides[next]).removeClass("fromLeft");
  $(slides[current]).removeClass("fromLeft");
  $(slides[current]).removeClass("fromRight");
  if (offset > 0) {
   $(slides[current]).addClass("fromLeft");
   $(slides[next]).addClass("fromRight");
  } else {
    $(slides[current]).addClass("fromRight");
    $(slides[next]).addClass("fromLeft");
  }
  $(slides[next]).addClass("active");
  $(slides[current]).removeClass("active");
  $(slides[current]).addClass("closing");
  var oldCur = current;
  current = next;
  $("#count").html(current+1);
}
setInterval(function(){
  $("#left").click();
},5000);
</script>
    <?php get_footer();?>




 <?php echo metapolename('CATEGORYRUBRIKA', $post->ID);?>  <?php $field = metapolename('ðàéîí', $post->ID); if (empty($cena)) {echo '';} else {echo '<p class="">Òåêñò :<span class="">'; echo $field; echo '</span></p>';}?>
