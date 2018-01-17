<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
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
</div>
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
  if (next < 0) {
    next = slides.length + next;
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
  $("#count").html(current + 1);
}
setInterval(function() {
  $("#left").click();
}, 5000);
</script>

<?php wp_footer(); ?>
</div>
</body>
</html>
