<?php get_header();?>
<?php/** * Template Name:  Контакты
* Template Post Type: post, page, event
* * @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0 */?>

    <div class="row">
      <div class="container hb cont_page">
<h2>Телефоны Отдела продаж:</h2>
  <div class="row grid">
  <div class="c_cover">
      <div class="col-md-7 info">
      <div>(048)736-80-94</div>
      <div>(096)323-29-13</div>
      <div>(066)787-06-23</div>
      <div class="data">

        <div>E-mail: info@www.novostroyi.od.ua</div>
        <div>Время работы: с 9:00 до 20:00 Без выходных.</div>
      </div>
          </div>
      <div class="c_f">
      <div>  <?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form 1"]' )?></div>
    </div>


</div>
</div>

      </div>


      <div id="root"></div>
    </div>

<script src="<?php echo get_template_directory_uri();?>/webpack/dist/bundle.js"></script>


</div>

    <?php get_template_part('footer_novostroy');?>
    <?php get_footer();?>
