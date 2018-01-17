<?php get_header();?>
<?php/** * Template Name:  search
* * @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0 */?>
    <div class="row search-result-done">
      <div class="container hb">
      <div class="l">




        <?php

        // get posts
        $posts = get_posts(array(
        	'post_type'			=> 'post',
        	'posts_per_page'	=> -1,
        	'meta_key'			=> 'цена',
        	'orderby'			=> 'meta_value',
        	'order'				=> 'ASC'
        ));

        if( $posts ): ?>

        	<ul>

        	<?php foreach( $posts as $post ):

        		setup_postdata( $post )

        		?>
            <div class="col-md-6 appa">
              <div class="ch arch">
                    <ul>
                      <div class="col-md-8">
                        <li class="rooms">Количество комнат :
                          <span><?php echo get_field('количество_комнат'); ?></span>
                        </li>
                        <li class="sqrts">Площадь :
                          <span><?php echo get_field('площадь');?></span>
                        </li>
                        <li class="floors">Этаж :
                          <span><?php echo get_field('этаж');?></span>
                        </li>
                        <li class="sctns">Секция :
                          <span><?php echo get_field('секция');?></span>
                        </li>
                        <li class="descriptions">Описание :
                          <span><?php echo get_field('описание');?></span>
                        </li>
                        <li class="prices">Цена :
                          <span><?php echo get_field('цена');?></span>
                        </li>
                        <li class="builders">Застройщик :
                          <span><?php echo get_field('застройщик');?></span>
                        </li>
                        <li class="districts">Район :
                          <span><?php echo get_field('район');?></span>
                        </li>
                      </div>
                      <div class="col-md-4 image">
                        <li class="">
    <a href="<?php the_permalink();?>"> <img alt="Купить квартиру в Одессе <?php echo get_field('застройщик');?>" src="<?php echo get_field('планировка');?>" /></a>
                        </li>
                      </div>
                    </ul>
              </div>
            </div>
        	<?php endforeach; ?>

        	</ul>

        	<?php wp_reset_postdata(); ?>

        <?php endif; ?>
</div>
<hr>
<hr>
<hr>







      </div>
    </div>
<script src="/wp-content/themes/ss/webpack/dist/bundle.js"></script>
    <?php get_footer();?>
