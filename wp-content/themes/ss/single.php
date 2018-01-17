<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>

<link rel="stylesheet" href="/wp-content/themes/ss/webpack/src/css/bootstrap.css">
<link rel="stylesheet" href="/wp-content/themes/ss/webpack/src/css/style.css">
<div class="container hd">
	  <header>
      <div class="header-banner">
        <button role="buttton" class="btn-success cnct" onclick="alert('binotel')"> Связаться с нами</button>
      </div>
      <div class="clear"></div>
<?php include('/wp-content/themes/ss/pages/nav.php');?>
    </header>


<div class="row">
	<div class="container hb">
		<?php

		while ( have_posts() ) : the_post();
		?>
		<ul>
			<li>Количество комнат : <?php echo get_field('количество_комнат'); ?></li>
			<li>Площадь :<?php echo get_field('площадь');?></li>
			<li>Этаж :<?php echo get_field('этаж');?></li>
			<li>Секция :<?php echo get_field('секция');?></li>
			<li>Описание :<?php echo get_field('описание');?></li>
			<li>Цена :<?php echo get_field('цена');?></li>
			<li>Застройщик :<?php echo get_field('застройщик');?></li>
			<li>Район :<?php echo get_field('район');?></li>
			<li>Планировка :<img alt="Купить квартиру в Одессе <?php echo get_field('застройщик');?>" src="<?php echo get_field('планировка');?>" /></li>
		</ul>
		<?php
		endwhile;
		?>
</div>
</div></div></div>
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
	            <img src="http://wp4.christian-amal.159dz.spectrum.myjino.ru/wp-content/uploads/2017/12/2-825x510.jpg" />
	          </div>
	          <div class="col-md-8">
	            <a href="">ЖК «42 Жемчужина</a>
	          </div>
	        </div>    </div>
	        <div class="col-md-3">
	          <h3>Мы в соц.сетях</h3>
	        </div>
	      </div>
	      <div class="sf"><p>wp4.christian-amal.159dz.spectrum.myjino.rui.od.ua&nbsp;©&nbsp;2017</p><p>Создание сайта: <a href="http://siteodessa.com">Siteodessa.com</a></div>
	    </div>
	      </div>
	      <div id="root"></div>
			</div>
</div>
  <script src="/wp-content/themes/ss/webpack/dist/bundle.js"></script>




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
<?php get_footer(); ?>
