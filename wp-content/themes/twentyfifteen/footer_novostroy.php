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
          <li><img class="f_c" src="http://novostroy/wp-content/uploads/2018/03/001-map-location.png">Одесса</li>
<?php get_template_part('numbers');?>
        </ul>
      </div>
      <div class="col-md-3 f_off">
        <h3>Последние квартиры</h3>
        <?php
      $object_type = 'Квартира';
        $childrens =  array(
          'numberposts' => 3,
          'post_type' =>  'objects',
          'meta_query'	=> array(
          'relation'		=> 'AND',
          array( 'key'	 	=> 'house_or_appartment',
          'value'	  	=> $object_type,
          'compare' 	=> 'IN', ),
          ));
        $query = new WP_Query( $childrens );
        $posts = $query->posts;
array_splice($posts, 3);
        foreach($posts as $post) {
        $chi_id = $children->ID;
        $image_field_name = 'appar_image';
        print_r('  <div class="rel_img lstupd grid-2"> ');
        print_r('     <a class="imglink" href="'. get_permalink($chi_id) .'"><img src="'. get_field($image_field_name, $chi_id) .'" ></a> ');
        print_r('     <a href="'. get_permalink($chi_id) .'">Комнат: '. get_field('rom', $chi_id) .', <br> Площадь: '. get_field('sqrt', $chi_id) .'м<sup>2</sup></a> ');
        print_r('      </div> ');
        }


        ?>




      </div>
      <div class="col-md-3">
        <h3>Последние офисы</h3>
        <?php
      $object_type = 'Офис';
        $childrens =  array(
          'numberposts' => 3,
          'post_type' =>  'objects',
          'meta_query'	=> array(
          'relation'		=> 'AND',
          array( 'key'	 	=> 'house_or_appartment',
          'value'	  	=> $object_type,
          'compare' 	=> 'IN', ),
          ));
        $query = new WP_Query( $childrens );
        $posts = $query->posts;
array_splice($posts, 3);
        foreach($posts as $post) {
        $chi_id = $children->ID;
        $image_field_name = 'основное_фото_офиса';
        print_r('  <div class="rel_img lstupd grid-2"> ');
        print_r('     <a class="imglink" href="'. get_permalink($chi_id) .'"><img src="'. get_field($image_field_name, $chi_id) .'" ></a> ');
        print_r('     <a href="'. get_permalink($chi_id) .'">Кабинетов: '. get_field('кабинетов_офиса', $chi_id) .',<br> Площадь: '. get_field('office_sqrt', $chi_id) .'м<sup>2</sup></a> ');
        print_r('      </div> ');
        }


        ?>

      </div>
    </div>
    <div class="sf">
      <p>novostroyi.od.ua&nbsp;©&nbsp;2017</p>
      <p>Создание сайта: <a href="http://siteodessa.com">Siteodessa.com</a></div>
  </div>
</div>
