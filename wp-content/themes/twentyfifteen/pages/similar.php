<?php $categories = get_the_category();
      if ( ! empty( $categories ) )
      $cata = esc_html( $categories[0]->name );
      $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $params = array( 'category_name' =>  $cata, 'order'  => 'DESC',  'posts_per_page' => 100,  'paged' => $current_page );
      query_posts($params); $wp_query->is_archive = true;
      $wp_query->is_home = false;
      while(have_posts()): the_post();?>
<a href="<?php the_permalink();?>"><h5><?php the_title(); ?></h6></a>
<a href="<?php the_permalink();?>"><img src="<?php echo the_post_thumbnail_url();?>"></a>
<?php endwhile; ?>