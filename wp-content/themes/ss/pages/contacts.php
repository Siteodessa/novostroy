<?php get_header();?>
<?php/** * Template Name:  Контакты
* Template Post Type: post, page, event
* * @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0 */?>
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

        <ul>
        	<li>Телефоны Отдела продаж:</li>
        	<li>(048)736-80-94</li>
        	<li>(096)323-29-13</li>
        	<li>(066)787-06-23</li>
        	<li>E-mail Отдела продаж:</li>
        	<li>info@www.novostroyi.od.ua</li>
        	<li>Время работы:</li>
        	<li>с 9:00 до 20:00 Без выходных.</li>
        </ul>
      </div>
      <div id="root"></div>
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
