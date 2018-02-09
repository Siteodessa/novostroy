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
		Если Квартира
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


		Если дом строящийся
		<ul class="appartment">
		  Для сингла
		  <li class=""><p>Название</p><strong class="dom_adres"><?php echo  the_title() ;?></strong></li>
		  <li class=""><p>Адрес</p><strong class="dom_adres"><?php echo  get_field('адрес_дома') ;?></strong></li>
		  <li class=""><p>Район</p><strong class="dom_block"><?php echo  get_field('район') ;?></strong></li>
		  <li class=""><p>Площадь однокомнатных квартир от</p><strong class="prc"><?php echo  get_field('площадь_однокомнатных_квартир_от') ;?></strong></li>
		  <li class=""><p>Цена однокомнатных квартир от</p><strong class="prc"><?php echo  get_field('цена_однокомнатных_квартир_от') ;?></strong></li>
		  <li class=""><p>Площадь двухкомнатных квартир от</p><strong class="prc"><?php echo  get_field('площадь_двухкомнатных_квартир_от') ;?></strong></li>
		  <li class=""><p>Цена двухкомнатных квартир от</p><strong class="prc"><?php echo  get_field('цена_двухкомнатных_квартир_от') ;?></strong></li>
		  <li class=""><p>Площадь трехкомнатных квартир от</p><strong class="prc"><?php echo  get_field('площадь_трехкомнатных_квартир_от') ;?></strong></li>
		  <li class=""><p>Цена трехкомнатных квартир от</p><strong class="prc"><?php echo  get_field('цена_трехкомнатных_квартир_от') ;?></strong></li>
		  <li class=""><p>Срок сдачи</p><strong class="prc"><?php echo  get_field('срок_сдачи') ;?></strong></li>
		  <li class=""><p>Застройщик</p><strong class="prc"><?php echo  get_field('застройщик') ;?></strong></li>
		  <li class=""><p>Фото</p><strong class="prc"><?php echo  get_field('основное_фото_дома') ;?></strong></li>
		  <li class=""><p>True для слайдера</p><strong class="prc"><?php echo get_field('добавить_еще_фото_дома') ;?></strong></li>
		  <li class=""><p>Фото дома 2</p><strong class="prc"><?php echo  get_field('фото_дома_2') ;?></strong></li>
		  <li class=""><p>Фото дома 3</p><strong class="prc"><?php echo  get_field('фото_дома_3') ;?></strong></li>
		  <li class=""><p>Фото дома 4</p><strong class="prc"><?php echo  get_field('фото_дома_4') ;?></strong></li>
		  <li class=""><p>Фото дома 5</p><strong class="prc"><?php echo  get_field('фото_дома_5') ;?></strong></li>
		  <li class=""><p>Фото дома 6</p><strong class="prc"><?php echo  get_field('фото_дома_6') ;?></strong></li>
		  <li class=""><p>Фото дома 7</p><strong class="prc"><?php echo  get_field('фото_дома_7') ;?></strong></li>
		  <li class=""><p>Фото дома 8</p><strong class="prc"><?php echo  get_field('фото_дома_8') ;?></strong></li>
		  <li class="description"><p>описание</p><strong class="prc"><?php echo  get_field('описание') ;?></strong></li>
		  <li class=""><p>количество этажей</p><strong class="prc"><?php echo  get_field('количество_этажей') ;?></strong></li>
		  <li class=""><p>квартиры с отделкой</p><strong class="prc"><?php echo  get_field('квартиры_с_отделкой') ;?></strong></li>
		  <li class=""><p>коммерческие помещения</p><strong class="prc"><?php echo  get_field('коммерческие_помещения') ;?></strong></li>
		  <li class=""><p>охраняемая территория</p><strong class="prc"><?php echo  get_field('охраняемая_территория') ;?></strong></li>
		  <li class=""><p>паркинг подземный</p><strong class="prc"><?php echo  get_field('паркинг_подземный') ;?></strong></li>
		  <li class=""><p>парковка</p><strong class="prc"><?php echo  get_field('парковка') ;?></strong></li>
		  <li class=""><p>детские площадки</p><strong class="prc"><?php echo  get_field('детские_площадки') ;?></strong></li>
		  <li class=""><p>рядом есть детский сад</p><strong class="prc"><?php echo  get_field('рядом_есть_детский_сад_') ;?></strong></li>
		  <li class=""><p>аптека</p><strong class="prc"><?php echo  get_field('аптека') ;?></strong></li>
		  <li class=""><p>сквер парк зеленая зона</p><strong class="prc"><?php echo  get_field('сквер_парк_зеленая_зона') ;?></strong></li>

		    <li class=""><a href="<?php echo get_the_permalink() ;?>"><p>Постоянная ссылка</p></a><p class=""><?php echo get_the_permalink() ;?></p></li>
		<?php echo  edit_post_link(); ;?>
		</ul>




				Если дом Сданный


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
