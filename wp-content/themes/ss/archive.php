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
get_header(); ?>

    <div class="row">
      <div class="container hb">
        <?php if ( have_posts() ) : ?>
        <?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
          <!-- .page-header -->
          <?php
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
                      </div>
                      <div class="col-md-4 image">
                        <li class=""><img alt="Купить квартиру в Одессе <?php echo get_field('застройщик');?>" src="<?php echo get_field('планировка');?>" /></li>
                      </div>
                    </ul>

              </div>
            </div>
            <?php
			endwhile;
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );
		// If no content, include the "No posts found" template.
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
  <?php get_footer(); ?>
