<?php get_header();?>



<?php $service_slider = new WP_Query(array('post_type' => 'stroyashhiesya-doma'));?>
<?php if ( $service_slider->have_posts() ) : ?>
 <?php while ( $service_slider->have_posts() ) : $service_slider->the_post(); ?>
 <div class="carousel-item">
   <div class="carousel-image"><?php the_post_thumbnail(); ?></div>
   <h2 class="owl-carousel-title"><?php the_title(); ?></h2>
   <div class="owl-carousel-text"><?php the_content(); ?></div>
 </div>
 <?php endwhile; ?>
<?php else: ?>
 <div class="no-carousel">...</div>
<?php endif; ?>
<?php wp_reset_query(); ?>



    <?php get_footer();?>
