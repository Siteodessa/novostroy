<?php get_header();
$gallery_support = get_field('more_appar_image_predicat');
$main_image = get_field('appar_image');
$sqrt = get_field('sqrt')  ;
$prc =  get_field('prc') ;
$floor = get_field('floor')  ;
$rom =  get_field('rom') ;
$bld =  get_field('bld') ;
$section = get_field('section');
$des =  get_field('des') ;
$gallery =  get_field('галерея_квартиры') ;
$post_definition =  get_field('house_or_appartment') ;
$house_readiness =  get_field('дом_строится_или_сдан') ;
$house_address =  get_field('адрес_дома') ;
$house_block =  get_field('район') ;
$house_sqrt_1 =  get_field('площадь_однокомнатных_квартир_от') ;
$house_prc_1 =  get_field('цена_однокомнатных_квартир_от') ;
$house_sqrt_2 =  get_field('площадь_двухкомнатных_квартир_от') ;
$house_prc_2 =  get_field('цена_двухкомнатных_квартир_от') ;
$house_sqrt_3 =  get_field('площадь_трехкомнатных_квартир_от') ;
$house_prc_3 =  get_field('цена_трехкомнатных_квартир_от') ;
$house_release_date=  get_field('срок_сдачи') ;
$house_bld =  get_field('застройщик') ;
$house_img =  get_field('основное_фото_дома') ;
$house_gallery =  get_field('галерея_дома') ;
$house_des =  get_field('описание') ;
$house_flr_num =  get_field('количество_этажей') ;
$house_otdelka =  get_field('квартиры_с_отделкой') ;
$house_commercial =  get_field('коммерческие_помещения') ;
$house_security =  get_field('охраняемая_территория') ;
$house_parking_under =  get_field('паркинг_подземный') ;
$house_parking =  get_field('парковка') ;
$house_kids_yard =  get_field('детские_площадки') ;
$house_kindergarten =  get_field('рядом_есть_детский_сад_') ;
$house_pharma =  get_field('аптека') ;
$house_green_area =  get_field('сквер_парк_зеленая_зона') ;
$house_full_des = get_field('второе_описание') ;
$dom_u_dorogi = get_field('дом_на_карте');

print_r('<div class="core_hld"><div class="row"><div class="container hb">');
while ( have_posts() ) : the_post();
if ($post_definition == 'Дом') {
if ($house_readiness == 'Строится') {
echo  '<h1>'. get_the_title() .'</h1>' ;
print_r('<div class="house_content"><div class="house">');
print_r('<div class="core_content">');
print_r('<div class="house_photo_block">');
if ($house_img) { print_r('  <div class="main_img" id="lightgallery"><img src="'. $house_img .'"></div>'); };
if ($house_gallery) { print_r('    <div class="house_gal" id="secondary-gallery">'. $house_gallery .'</div>'); };
print_r('</div>');  /* end house_photo_block */
if ($house_des) {print_r(' <div class="house_des">'. $house_des .'</div>'); }
print_r('</div>');  /* end core_content */
if ($house_full_des) {print_r(' <div class="house_full_des">'. $house_full_des  .'</div>');}
/* start pricing */
if ($house_sqrt_1 || $house_sqrt_2 || $house_sqrt_3 && $house_prc_1 || $house_prc_2 || $house_prc_3) {
print_r('<div class="sn_pr_tb"><table class="table table-striped">');
if ($house_sqrt_1 && $house_prc_1) {
print_r(' <tbody> <tr> <td>  <p class="rn_p"><img class="rn_im" src="/wp-content/uploads/2018/02/one-room-icon.png" /></p>1 комн</td> </tr> <tr> <td>от '. $house_sqrt_1 .'м<sup>2</sup></td> </tr> <tr> <td>от '. $house_prc_1 .'у.е.</td> </tr> </tbody>');
}
if ($house_sqrt_2 && $house_prc_2) {
print_r(' <tbody> <tr> <td>  <p class="rn_p"><img class="rn_im" src="/wp-content/uploads/2018/02/two-room-icon-blue.png" /></p>2 комн</td> </tr> <tr> <td>от '. $house_sqrt_2 .'м<sup>2</sup></td> </tr> <tr> <td>от '. $house_prc_2 .'у.е.</td> </tr> </tbody>');
}
if ($house_sqrt_3 && $house_prc_3) {
print_r('<tbody> <tr> <td>  <p class="rn_p"><img class="rn_im" src="/wp-content/uploads/2018/02/two-room-icon-blue.png" /></p>3 комн</td> </tr> <tr> <td>от '. $house_sqrt_3 .'м<sup>2</sup></td> </tr> <tr> <td>от '. $house_prc_3 .'у.е.</td> </tr> </tbody>');
}
print_r('</table> </div>');
};
/* end pricing */
/* start map */
if ($dom_u_dorogi){
echo '<section class="sing2">';
echo '<div class="map">';
echo '<div>';
echo '<h3>Дом на карте</h3> ';
echo '</div>';
echo $dom_u_dorogi;
echo '</div>';
echo '</section>';
};
/* end map */

          $image_field_name = 'основное_фото_дома';
          $object_type = 'Дом';
          $childrens2 = get_posts( array(
          'numberposts' => 6,
          'post_type' => 'objects',
          'exclude' => array('1287', '1283'),
          'post_status' => 'any',
          'meta_query'	=> array(
          'relation'		=> 'AND',
          array(
          'key'	 	=> 'house_or_appartment',
          'value'	 	=> $object_type,
          'compare' 	=> 'IN', ),
          array(
          'key'	 	=> 'дом_строится_или_сдан',
          'value'	 	=> 'Строится',
          'compare' 	=> 'IN', ),
          )
          ) );


  $top_line = array(
                'nodetype'	 	=> 'div',
                'clsname'	 	=> 'office_data house_data',
                'parent_node'	 	=> 'div',
                'parental_clsname'	 	=> 'tha this_house_appartments appr',
  );

          $mid_lines = array(
            'Район'	=>
            array(
            'nodetype'	 	=> 'div',
            'clsname'	 	=> 'min_dat',
            'secondary_node'	 	=> 'strong',
            'text' 	=> 'Район:  ',
            'meta_key_name' 	=> 'район',
          ),
            'Адрес'	=>
            array(
            'nodetype'	 	=> 'div',
            'clsname'	 	=> 'min_dat',
            'secondary_node'	 	=> 'strong',
            'text' 	=> 'Адрес:  ',
            'meta_key_name' 	=> 'адрес_дома',
          ),
            'Срок_сдачи'	=>
            array(
            'nodetype'	 	=> 'div',
            'clsname'	 	=> 'min_dat',
            'secondary_node'	 	=> 'strong',
            'text' 	=> 'Срок сдачи:  ',
            'meta_key_name' 	=> 'срок_сдачи',
          ),
        );
          $pretext = 'Пользователи также интересовались';
          print_query($childrens2, $title, $image_field_name, $object_type, $pretext, $top_line, $mid_lines);


print_r(' </div>');
print_r(' <div class="house_widgets">');
print_r(' <div class="house_widgets_container">');
if ($house_address) {print_r('<div class=""><img src="/wp-content/uploads/2018/02/014-placeholder.png"> Адрес: <strong>'. $house_address .'</strong> </div>');};
if ($house_block) {   print_r('<div class=""><img src="/wp-content/uploads/2018/02/013-office.png"> Район: <strong> '. $house_block .'</strong> </div> '); }
if ($house_flr_num) {   print_r('<div class=""><img src="/wp-content/uploads/2018/02/012-skyscraper.png"> Количество этажей: <strong> '. $house_flr_num .'</strong> </div> '); }
if ($house_bld) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/010-worker.png"> Застройщик: <strong>'. $house_bld .' </div> ');}
if ($house_release_date) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/011-deadline.png"> Срок сдачи: <strong>'. $house_release_date .' </div> ');}
if ($house_otdelka) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/009-builder.png"> Квартиры с отделкой </div> ');}
if ($house_commercial) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/008-man-with-desk-and-monitor.png"> Коммерческие помещения </div> ');}
if ($house_security) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/007-lock.png"> Охраняемая территория </div> ');}
if ($house_parking_under) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/006-garage.png"> Паркинг подземный </div> ');}
if ($house_parking) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/005-parking.png"> Парковка </div> ');}
if ($house_kids_yard) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/004-park.png"> Детские площадки </div> ');}
if ($house_kindergarten) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/003-teaching.png"> Рядом есть детский сад </div> ');}
if ($house_pharma) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/002-hospital.png"> Аптека </div> ');}
if ($house_green_area) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/001-bench.png"> Сквер парк зеленая зона </div> ');}
print_r(' <div class="prosmotr"> <h3>Хотите посмотреть квартиры в этом доме?</h3> <button class="zapis">Записаться на просмотр</button> </div>');
print_r(' </div>');
print_r(' </div>');
$i_d = get_the_ID();
$image_field_name = 'основное_фото_офиса';
$object_type = 'Офис';
$title = get_the_title();
$childrens = get_children( array(
'post_parent' => $i_d,
'numberposts' => -1,
'post_status' => 'any',
'meta_query'	=> array(
'relation'		=> 'AND',
array( 'key'	 	=> 'house_or_appartment',
'value'	 	=> $object_type,
'compare' 	=> 'IN', ),
)
) );
get_childrens($i_d, $childrens, $title, $image_field_name, $object_type);
$image_field_name = 'appar_image';
$object_type = 'Квартира';
$title = get_the_title();
$childrens2 = get_children( array(
'post_parent' => $i_d,
'numberposts' => -1,
'post_status' => 'any',
'meta_query'	=> array(
'relation'		=> 'AND',
array( 'key'	 	=> 'house_or_appartment',
'value'	 	=> $object_type,
'compare' 	=> 'IN', ),
)
) );
get_childrens($i_d, $childrens2, $title, $image_field_name, $object_type);




print_r(' </div>');
/* end house_content */
} else {
/* start old_house_content */
echo  '<h1>'. get_the_title() .'</h1>' ;
print_r('<div class="house_content"><div class="house">');
print_r('<div class="core_content">');
print_r('<div class="house_photo_block">');
if ($house_img) { print_r('  <div class="main_img" id="lightgallery"><img src="'. $house_img .'"></div>'); };
if ($house_gallery) { print_r('    <div class="house_gal" id="secondary-gallery">'. $house_gallery .'</div>'); };
print_r('</div>');  /* end house_photo_block */
if ($house_des) {print_r(' <div class="house_des">'. $house_des .'</div>'); }
print_r('</div>');  /* end core_content */
if ($house_full_des) {print_r(' <div class="house_full_des">'. $house_full_des  .'</div>');}
/* start pricing */
if ($house_sqrt_1 || $house_sqrt_2 || $house_sqrt_3 && $house_prc_1 || $house_prc_2 || $house_prc_3) {
print_r('<div class="sn_pr_tb"><table class="table table-striped">');
if ($house_sqrt_1 && $house_prc_1) {
print_r(' <tbody> <tr> <td>  <p class="rn_p"><img class="rn_im" src="/wp-content/uploads/2018/02/one-room-icon.png" /></p>1 комн</td> </tr> <tr> <td>от '. $house_sqrt_1 .'м<sup>2</sup></td> </tr> <tr> <td>от '. $house_prc_1 .'у.е.</td> </tr> </tbody>');
}
if ($house_sqrt_2 && $house_prc_2) {
print_r(' <tbody> <tr> <td>  <p class="rn_p"><img class="rn_im" src="/wp-content/uploads/2018/02/two-room-icon-blue.png" /></p>2 комн</td> </tr> <tr> <td>от '. $house_sqrt_2 .'м<sup>2</sup></td> </tr> <tr> <td>от '. $house_prc_2 .'у.е.</td> </tr> </tbody>');
}
if ($house_sqrt_3 && $house_prc_3) {
print_r('<tbody> <tr> <td>  <p class="rn_p"><img class="rn_im" src="/wp-content/uploads/2018/02/two-room-icon-blue.png" /></p>3 комн</td> </tr> <tr> <td>от '. $house_sqrt_3 .'м<sup>2</sup></td> </tr> <tr> <td>от '. $house_prc_3 .'у.е.</td> </tr> </tbody>');
}
print_r('</table> </div>');
};
/* end pricing */
/* start map */
if ($dom_u_dorogi){
echo '<section class="sing2">';
echo '<div class="map">';
echo '<div>';
echo '<h3>Дом на карте</h3> ';
echo '</div>';
echo $dom_u_dorogi;
echo '</div>';
echo '</section>';
};
/* end map */
print_r(' </div>');
print_r(' <div class="house_widgets">');
print_r(' <div class="house_widgets_container">');
if ($house_address) {print_r('<div class=""><img src="/wp-content/uploads/2018/02/014-placeholder.png"> Адрес: <strong>'. $house_address .'</strong> </div>');};
if ($house_block) {   print_r('<div class=""><img src="/wp-content/uploads/2018/02/013-office.png"> Район: <strong> '. $house_block .'</strong> </div> '); }
if ($house_flr_num) {   print_r('<div class=""><img src="/wp-content/uploads/2018/02/012-skyscraper.png"> Количество этажей: <strong> '. $house_flr_num .'</strong> </div> '); }
if ($house_bld) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/010-worker.png"> Застройщик: <strong>'. $house_bld .' </div> ');}
if ($house_release_date) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/011-deadline.png"> Срок сдачи: <strong>'. $house_release_date .' </div> ');}
if ($house_otdelka) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/009-builder.png"> Квартиры с отделкой </div> ');}
if ($house_commercial) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/008-man-with-desk-and-monitor.png"> Коммерческие помещения </div> ');}
if ($house_security) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/007-lock.png"> Охраняемая территория </div> ');}
if ($house_parking_under) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/006-garage.png"> Паркинг подземный </div> ');}
if ($house_parking) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/005-parking.png"> Парковка </div> ');}
if ($house_kids_yard) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/004-park.png"> Детские площадки </div> ');}
if ($house_kindergarten) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/003-teaching.png"> Рядом есть детский сад </div> ');}
if ($house_pharma) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/002-hospital.png"> Аптека </div> ');}
if ($house_green_area) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/001-bench.png"> Сквер парк зеленая зона </div> ');}
print_r(' <div class="prosmotr"> <h3>Хотите посмотреть квартиры в этом доме?</h3> <button class="zapis">Записаться на просмотр</button> </div>');
print_r(' </div>');
print_r(' </div>');
print_r('<div class="related_block">');
$i_d = get_the_ID();
$image_field_name = 'основное_фото_офиса';
$object_type = 'Офис';
$title = get_the_title();
$childrens = get_children( array(
'post_parent' => $i_d,
'numberposts' => -1,
'post_status' => 'any',
'meta_query'	=> array(
'relation'		=> 'AND',
array( 'key'	 	=> 'house_or_appartment',
'value'	 	=> $object_type,
'compare' 	=> 'IN', ),
)
) );
get_childrens($i_d, $childrens, $title, $image_field_name, $object_type);
$image_field_name = 'appar_image';
$object_type = 'Квартира';
$title = get_the_title();
$childrens2 = get_children( array(
'post_parent' => $i_d,
'numberposts' => -1,
'post_status' => 'any',
'meta_query'	=> array(
'relation'		=> 'AND',
array( 'key'	 	=> 'house_or_appartment',
'value'	 	=> $object_type,
'compare' 	=> 'IN', ),
)
) );
get_childrens($i_d, $childrens2, $title, $image_field_name, $object_type);
print_r(' </div>');
print_r(' </div>');










    $pretext = 'Пользователи также интересовались';
    $object_type = 'Дом';
    $image_field_name = 'основное_фото_дома';
    $da_query = get_posts( array(
    'numberposts' => 6,
    'post_type' => 'objects',
    'exclude' => array('1287', '1283'),
    'post_status' => 'any',
    'meta_query'	=> array(
    'relation'		=> 'AND',
    array(
    'key'	 	=> 'house_or_appartment',
    'value'	 	=> $object_type,
    'compare' 	=> 'IN', ),
    array(
    'key'	 	=> 'дом_строится_или_сдан',
    'value'	 	=> 'Сдан',
    'compare' 	=> 'IN', ),
    )
    ) );
    $top_line = array(
    'nodetype'	 	=> 'div',
    'clsname'	 	=> 'office_data house_data',
    'parent_node'	 	=> 'div',
    'parental_clsname'	 	=> 'tha this_house_appartments grid-3',
    );
    $mid_lines = array(
'Район'	=>
    array(
    'nodetype'	 	=> 'div',
    'clsname'	 	=> 'min_dat',
    'secondary_node'	 	=> 'strong',
    'text' 	=> 'Район:  ',
    'meta_key_name' 	=> 'район',
    ),
'Адрес'	=>
    array(
    'nodetype'	 	=> 'div',
    'clsname'	 	=> 'min_dat',
    'secondary_node'	 	=> 'strong',
    'text' 	=> 'Адрес:  ',
    'meta_key_name' 	=> 'адрес_дома',
    ),
'Срок_сдачи'	=>
    array(
    'nodetype'	 	=> 'div',
    'clsname'	 	=> 'min_dat',
    'secondary_node'	 	=> 'strong',
    'text' 	=> 'Срок сдачи:  ',
    'meta_key_name' 	=> 'срок_сдачи',
    ),
    );

        print_query($da_query, $title, $image_field_name, $object_type, $pretext, $top_line, $mid_lines);

};
}
else {
if ($post_definition == 'Офис') {
$i_d = get_the_ID();
$i_d_parent = wp_get_post_parent_id( $i_d );
$parent_image = get_field('основное_фото_дома', $i_d_parent);
print_r(' <div class="parent_image">');
print_r(' <div class="info_box">');
print_r(' <div class="skew_box">');
print_r(' <div class="content_box">');
print_r(' <div class="thin"><h1>Офис в '. get_the_title($i_d_parent) .'</h1>');
$parent_house_otdelka = get_field('квартиры_с_отделкой', $i_d_parent) ;
$parent_house_commercial = get_field('коммерческие_помещения', $i_d_parent) ;
$parent_house_security = get_field('охраняемая_территория', $i_d_parent) ;
$parent_house_parking_under = get_field('паркинг_подземный', $i_d_parent) ;
$parent_house_parking = get_field('парковка', $i_d_parent) ;
$parent_house_kids_yard = get_field('детские_площадки', $i_d_parent) ;
$parent_house_kindergarten = get_field('рядом_есть_детский_сад_', $i_d_parent) ;
$parent_house_pharma = get_field('аптека', $i_d_parent) ;
$parent_house_green_area = get_field('сквер_парк_зеленая_зона', $i_d_parent) ;
print_r('<div class="house_features">');
if ($parent_house_otdelka) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/009-builder.png"> Квартиры с отделкой </div>'); }
if ($parent_house_commercial) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/008-man-with-desk-and-monitor.png"> Коммерческие помещения </div> '); }
if ($parent_house_security) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/007-lock.png"> Охраняемая территория </div> '); }
if ($parent_house_parking_under) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/006-garage.png"> Паркинг подземный </div> '); }
if ($parent_house_parking) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/005-parking.png"> Парковка </div> '); }
if ($parent_house_kids_yard) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/004-park.png"> Детские площадки </div> '); }
if ($parent_house_kindergarten) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/003-teaching.png"> Рядом есть детский сад </div> '); }
if ($parent_house_pharma) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/002-hospital.png"> Аптека </div> '); }
if ($parent_house_green_area) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/001-bench.png"> Сквер парк зеленая зона </div>'); }
print_r(' </div><div class="button_row"><a href="'. get_permalink($i_d_parent) .'"><button class="zapis">Объекты в этом доме</button></a>');
print_r(' <a href="'. get_permalink($i_d_parent) .'"><button class="zapis active">Записаться на просмотр</button></a></div>');
print_r(' </div>');
print_r(' </div>');
print_r(' </div>');
print_r(' </div>');
print_r(' <div class="overlay">'); print_r(' </div>');
print_r('<img class="par_img" src="'. $parent_image .'" />');
print_r(' </div>');
print_r(' <div class="s office_single"> <div id="main_image">');
$main_image = get_field('основное_фото_офиса');
$gallery = get_field('фото_офиса_планировка');
if ($main_image) {
print_r(' <div id="lightgallery" class="gallery">'); print_r(' <a href="'. $main_image .'"><img gallery-support="'.  $gallery_support .'" alt="Купить квартиру в Одессе '. $bld .'" src="'. $main_image .'" /> </a> '); print_r(' </div>  ');
};
?>
<ul class="top_row" id="secondary-gallery">
<?php if ($gallery) { ?> <?php echo $gallery ?> <?php }?>
</ul>
</div>
<div class="r_block">
<div itemscope itemtype="description" class="description">
<?php
echo '<div class="mini_info">';
echo '<p>Район: <span>'. get_field('block') .'</span></p>';
echo '<p>Адрес дома: <span>'. get_field('адрес_дома', $i_d_parent) .'</span></p>';
echo '</div>';
$icon_grid = array($section, $sqrt, $floor, $bld, $rom, $prc);
$empty_icons = 0; foreach ($icon_grid as $key => $value) { if (empty($value)) $empty_icons++; };
$filled_icons = 6 - $empty_icons;
if ($empty_icons >2){ echo '<ul class="thin sm xsm grid-'. $filled_icons .'">'; } else { echo '<ul class="thin sm grid-'. $filled_icons .'">'; };
if ($sqrt) { ?> <li><img src="/wp-content/uploads/2018/02/006-set-square.png" alt="">
<div class="side_data"><span>Площадь&nbsp;:</span><strong><?php echo $sqrt;?> м<sup>2</sup></strong></div>
</li> <?php }?>
<?php if ($prc) { ?>
<li><img src="/wp-content/uploads/2018/02/005-shopping.png" alt="">
<div class="side_data"><span>Цена&nbsp;:</span><strong><?php echo $prc;?></strong></div>
</li> <?php }?>
<?php if ($floor) { ?>
<li><img src="/wp-content/uploads/2018/02/004-stairs.png" alt="">
<div class="side_data"> <span>Этаж&nbsp;:</span><strong><?php echo $floor;?></strong></div>
</li> <?php }?>
<?php if ($rom) { ?>
<li><img src="/wp-content/uploads/2018/02/003-building.png" alt="">
<div class="side_data"> <span>Кабинетов в офисе&nbsp;:</span><strong><?php echo $rom;?> </strong></div>
</li> <?php }?> <?php if ($section) { ?> <li>
<img src="/wp-content/uploads/2018/02/002-buildings.png" alt="">
<div class="side_data"> <span>Секция&nbsp;:</span><strong><?php echo $section;?></strong></div>
</span><?php }?>
<?php if ($bld) { ?> <li><img src="/wp-content/uploads/2018/02/001-worker.png" alt="" width="64" height="64">
<div class="side_data"> <span>Застройщик&nbsp;:</span><strong><?php echo $bld;?></strong></div>
<?php }
echo ' </ul>';
$des = get_field('описание_офиса');
$sqrt = get_field('office_sqrt');
$prc = get_field('цена_офиса');
$floor = get_field('этаж_офиса');
$rom = get_field('кабинетов_офиса');
echo $des;
echo '</div>';
?>
<div class="single_widgets">
<div class="prosmotr">
<h3>Хотите посмотреть квартиры в этом доме?</h3> <button class="zapis">Записаться на просмотр</button>
</div>
</div>
</div> </div> <?php
if ($dom_u_dorogi){
$dom_u_dorogi = get_field('дом_на_карте', $i_d_parent);
echo '<section class="sing2">';
echo '<div class="map">';
echo '<div>';
echo '<h3>Офис на карте</h3> ';
echo '</div>';
echo $dom_u_dorogi;
echo '</div>';
echo '</section>';
}/* OFFICE ENDS */
} else {
if ($post_definition == 'Квартира') {
?>
<?php
$i_d = get_the_ID();
$i_d_parent = wp_get_post_parent_id( $i_d );
$parent_image = get_field('основное_фото_дома', $i_d_parent);
print_r(' <div class="parent_image">');
print_r(' <div class="info_box">');
print_r(' <div class="skew_box">');
print_r(' <div class="content_box">');
$title_parent = get_the_title($i_d_parent);
print_r(' <div class="thin"><h1>Квартира в '. $title_parent .'</h1>');
$parent_house_otdelka = get_field('квартиры_с_отделкой', $i_d_parent) ;
$parent_house_commercial = get_field('коммерческие_помещения', $i_d_parent) ;
$parent_house_security = get_field('охраняемая_территория', $i_d_parent) ;
$parent_house_parking_under = get_field('паркинг_подземный', $i_d_parent) ;
$parent_house_parking = get_field('парковка', $i_d_parent) ;
$parent_house_kids_yard = get_field('детские_площадки', $i_d_parent) ;
$parent_house_kindergarten = get_field('рядом_есть_детский_сад_', $i_d_parent) ;
$parent_house_pharma = get_field('аптека', $i_d_parent) ;
$parent_house_green_area = get_field('сквер_парк_зеленая_зона', $i_d_parent) ;
print_r('<div class="house_features">');
if ($parent_house_otdelka) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/009-builder.png"> Квартиры с отделкой </div>'); }
if ($parent_house_commercial) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/008-man-with-desk-and-monitor.png"> Коммерческие помещения </div> '); }
if ($parent_house_security) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/007-lock.png"> Охраняемая территория </div> '); }
if ($parent_house_parking_under) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/006-garage.png"> Паркинг подземный </div> '); }
if ($parent_house_parking) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/005-parking.png"> Парковка </div> '); }
if ($parent_house_kids_yard) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/004-park.png"> Детские площадки </div> '); }
if ($parent_house_kindergarten) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/003-teaching.png"> Рядом есть детский сад </div> '); }
if ($parent_house_pharma) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/002-hospital.png"> Аптека </div> '); }
if ($parent_house_green_area) { print_r(' <div class=""><img src="/wp-content/uploads/2018/02/001-bench.png"> Сквер парк зеленая зона </div>'); }
print_r(' </div><div class="button_row"><a href="'. get_permalink($i_d_parent) .'"><button class="zapis">Объекты в этом доме</button></a>');
print_r(' <a href="'. get_permalink($i_d_parent) .'"><button class="zapis active">Записаться на просмотр</button></a></div>');
print_r(' </div>');
print_r(' </div>');
print_r(' </div>');
print_r(' </div>');
print_r(' <div class="overlay">'); print_r(' </div>');
print_r('<img class="par_img" src="'. $parent_image .'" />');
print_r(' </div>');
?>
<div class="s">
<div class="gallery">
<?php if ($main_image) { ?>
<div id="main_image">
<div id="lightgallery">
<a href="<?php echo $main_image;?>">
<img gallery-support="<?php echo $gallery_support; ?>" alt="Купить квартиру в Одессе <?php echo $bld ?>" src="<?php echo $main_image;?>" />
</a>
</div>
</div>
<?php }?>
<ul class="top_row" id="secondary-gallery">
<?php if ($gallery) { ?> <?php echo $gallery ?> <?php }?>
</ul>
</div>
<div class="r_block">
<div itemscope itemtype="description" class="description">
<?php
echo '<div class="mini_info">';
$current_block = get_field('block');
echo '<p>Район: <a href="http://novostroy/?block='. $current_block .'"><span>'. $current_block .'</span></a></p>';
echo '<p>Адрес дома: <span>'. get_field('адрес_дома', $i_d_parent) .'</span></p>';
echo '</div>';
$filled_icons = 6 - $empty_icons;
if ($empty_icons > 2){ echo '<ul class="thin sm xsm grid-'. $filled_icons .'">'; } else { echo '<ul class="thin sm grid-'. $filled_icons .'">'; };
if ($sqrt) { ?> <li><img src="/wp-content/uploads/2018/02/006-set-square.png" alt="">
<div class="side_data"><span>Площадь&nbsp;:</span><strong><?php print_r('<a class="dyn_bld" href="/?mns='. (round($sqrt, -1) - 10) .'&mxs='. round($sqrt, -1) .'">')?><?php echo $sqrt ?> м<sup>2</sup></a></strong></div>
</li> <?php }?> <?php if ($prc) { ?>
<li><img src="/wp-content/uploads/2018/02/005-shopping.png" alt="">
<div class="side_data"><span>Цена&nbsp;:</span><strong><?php print_r('<a class="dyn_bld" href="/?mnp='. (round($prc, -4) - 5000) .'&mxp='. (round($prc, -4) + 5000) .'">')?><?php echo $prc; ?></a></strong></div>
</li> <?php }?> <?php if ($floor) { ?>
<li><img src="/wp-content/uploads/2018/02/004-stairs.png" alt="">
<div class="side_data"> <span>Этаж&nbsp;:</span><strong><?php print_r('<a class="dyn_bld" href="/?floor='. get_field('floor') .'">')?><?php echo $floor ?></a></strong></div>
</li> <?php }?>
<?php if ($rom) { ?>
<li><img src="/wp-content/uploads/2018/02/003-building.png" alt="">
<div class="side_data"> <span>Комнат&nbsp;:</span><strong><?php print_r('<a class="dyn_bld" href="/?rom='. get_field('rom') .'">')?><?php echo $rom ?> </a></strong></div>
</li> <?php }?> <?php if ($section) { ?> <li>
<img src="/wp-content/uploads/2018/02/002-buildings.png" alt="">
<div class="side_data"> <span>Секция&nbsp;:</span><strong><?php echo $section ?></strong></div>
</span><?php }?>
<?php if ($bld) { ?> <li><img src="/wp-content/uploads/2018/02/001-worker.png" alt="" width="64" height="64">
<div class="side_data"><span>Застройщик&nbsp;:</span><strong> <?php print_r('<a class="dyn_bld" href="/?bld='. get_field('bld') .'">')?><?php echo $bld ?></a></strong></div>
<?php }
echo '</ul>';
echo $des;
echo '</div>';
?>
<div class="single_widgets">
<div class="prosmotr">
<h3>Хотите посмотреть квартиры в этом доме?</h3> <button class="zapis">Записаться на просмотр</button>
</div>
</div>
</div> </div> <?php
$dom_u_dorogi = get_field('дом_на_карте', $i_d_parent);
if ($dom_u_dorogi){
echo '<section class="sing2">';
echo '<div class="map">';
echo '<div>';
echo '<h3>Квартира на карте</h3> ';
echo '</div>';
echo $dom_u_dorogi;
echo '</div>';
echo '</section>';/*endmap*/

$pretext = 'Другие квартиры в '. $title_parent .'';
$object_type = 'Квартира';
$image_field_name = 'appar_image';
$da_query = get_posts( array(
'numberposts' => 6,
'post_type' => 'objects',
'exclude' => array('1287', '1283'),
'post_status' => 'any',
'meta_query'	=> array(
'relation'		=> 'AND',
array(
'key'	 	=> 'house_or_appartment',
'value'	 	=> $object_type,
'compare' 	=> 'IN', ),
)
) );
$top_line = array(
'nodetype'	 	=> 'div',
'clsname'	 	=> 'office_data house_data',
'parent_node'	 	=> 'div',
'parental_clsname'	 	=> 'tha this_house_appartments grid-3 appr',
);
$mid_lines = array(
  'Количество комнат'	=>
  array(
  'nodetype'	 	=> 'div',
  'clsname'	 	=> 'min_dat',
  'secondary_node'	 	=> 'strong',
  'text' 	=> 'Количество комнат:  ',
  'meta_key_name' 	=> 'rom',
  ),
'Адрес'	=>
array(
'nodetype'	 	=> 'div',
'clsname'	 	=> 'min_dat',
'secondary_node'	 	=> 'strong',
'text' 	=> 'Площадь:  ',
'meta_key_name' 	=> 'sqrt',
),
'Этаж'	=>
array(
  'nodetype'	 	=> 'div',
  'clsname'	 	=> 'min_dat',
  'secondary_node'	 	=> 'strong',
  'text' 	=> 'Этаж:  ',
  'meta_key_name' 	=> 'floor',
),
'Цена'	=>
array(
'nodetype'	 	=> 'div',
'clsname'	 	=> 'min_dat',
'secondary_node'	 	=> 'strong',
'text' 	=> 'Цена:  ',
'meta_key_name' 	=> 'prc',
),
);

    print_query($da_query, $title, $image_field_name, $object_type, $pretext, $top_line, $mid_lines);


    $fromwhat = array("Приморский", "Суворовский", "Малиновский", "Киевский");
    $towhat   = array("Приморском", "Суворовском", "Малиновском", "Киевском");

    $current_block_replaced = str_replace($fromwhat, $towhat, $current_block);
$pretext = 'Другие квартиры в '. $current_block_replaced .'  районе';
$object_type = 'Квартира';
$image_field_name = 'appar_image';
$da_query = get_posts( array(
'numberposts' => 6,
'post_type' => 'objects',
'exclude' => array('1287', '1283'),
'post_status' => 'any',
'meta_query'	=> array(
'relation'		=> 'AND',
array(
'key'	 	=> 'house_or_appartment',
'value'	 	=> $object_type,
'compare' 	=> 'IN', ),
array(
'key'	 	=> 'block',
'value'	 	=> $current_block,
'compare' 	=> 'IN', ),
)
) );
$top_line = array(
'nodetype'	 	=> 'div',
'clsname'	 	=> 'office_data house_data',
'parent_node'	 	=> 'div',
'parental_clsname'	 	=> 'tha this_house_appartments grid-3 appr',
);
$mid_lines = array(
  'Количество комнат'	=>
  array(
  'nodetype'	 	=> 'div',
  'clsname'	 	=> 'min_dat',
  'secondary_node'	 	=> 'strong',
  'text' 	=> 'Количество комнат:  ',
  'meta_key_name' 	=> 'rom',
  ),
'Адрес'	=>
array(
'nodetype'	 	=> 'div',
'clsname'	 	=> 'min_dat',
'secondary_node'	 	=> 'strong',
'text' 	=> 'Площадь:  ',
'meta_key_name' 	=> 'sqrt',
),
'Этаж'	=>
array(
  'nodetype'	 	=> 'div',
  'clsname'	 	=> 'min_dat',
  'secondary_node'	 	=> 'strong',
  'text' 	=> 'Этаж:  ',
  'meta_key_name' 	=> 'floor',
),
'Цена'	=>
array(
'nodetype'	 	=> 'div',
'clsname'	 	=> 'min_dat',
'secondary_node'	 	=> 'strong',
'text' 	=> 'Цена:  ',
'meta_key_name' 	=> 'prc',
),
);

    print_query($da_query, $title, $image_field_name, $object_type, $pretext, $top_line, $mid_lines);

}
};
};
};
endwhile;
print_r('</div> </div> <div class="clearfix"> </div> </div> </div>');
print_r('<script src="'. get_template_directory_uri() .'/kvarts.js"></script>');
print_r('<script src="'. get_template_directory_uri() .'/webpack/dist/bundle.js"></script>');
get_template_part('footer_novostroy');
get_template_part('lg');
get_footer(); ?>
