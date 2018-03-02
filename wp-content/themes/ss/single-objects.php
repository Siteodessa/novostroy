<?php get_header();
$gallery_support = get_field('more_appar_image_predicat');
$main_image = get_field('appar_image');
$image_2 = get_field('фото_квартиры_2');
$image_3 = get_field('фото_квартиры_3');
$image_4 = get_field('фото_квартиры_4');
$image_5 = get_field('фото_квартиры_5');
$image_6 = get_field('фото_квартиры_6');
$image_7 = get_field('фото_квартиры_7');
$image_8 = get_field('фото_квартиры_8');
$sqrt = get_field('sqrt')  ;
$prc =  get_field('prc') ;
$floor = get_field('floor')  ;
$rom =  get_field('rom') ;
$bld =  get_field('bld') ;
$section = get_field('section');
$des =  get_field('des') ;
$gallery =  get_field('галерея_квартиры') ;
// new house fields -
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
function  get_childrens($i_d, $childrens, $title, $image_field_name, $object_type){
     if( $childrens ){
                if ($object_type == 'Офис') {$pretext = 'Офисы в';} else { $pretext = 'Квартиры в';};
           print_r(' <h3 class="related_appartments"> '. $pretext .' '. $title .' </h3>');
       print_r(' <div class="tha this_house_appartments">');
     	foreach( $childrens as $children ){
   $chi_id = $children->ID;
   if (get_field($image_field_name, $chi_id)) {
    print_r(' <div class="one_appartment">');
      print_r('  <div class="rel_img"><a href="'. get_permalink($chi_id) .'"><img src="'. get_field($image_field_name, $chi_id) .'" ></a></div> ');
         print_r(' <div class="office_data">');
   if (get_field('sqrt', $chi_id)) {     print_r('  <div class="">Площадь:  <strong>'. get_field('sqrt', $chi_id) .' </strong></div>');}
   if (get_field('prc', $chi_id)) {     print_r('  <div class="">Цена:  <strong>'. get_field('prc', $chi_id) .' </strong></div>');}
   if (get_field('floor', $chi_id)) {     print_r('  <div class="">Этаж:  <strong>'. get_field('floor', $chi_id) .' </strong></div>');}
   if (get_field('rom', $chi_id)) {     print_r('  <div class="">Комнат:  <strong>'. get_field('rom', $chi_id) .' </strong></div>');}
            print_r(' <a class="btn-details" href="'. get_permalink($chi_id) .'">Перейти</a>');
     print_r(' </div>');
     print_r(' </div>');
     }
     }
     print_r(' </div>');
}
};
 ?>
<div class="">
<div class="row">
	<div class="container hb">
		<?php
    while ( have_posts() ) : the_post();
if ($post_definition == 'Дом') {
if ($house_readiness == 'Строится') {
?>
<h1><?php echo  the_title() ;?></h1>
<div class="house_content">
<div class="house">
<div class="core_content">
<div class="house_photo_block">
  <?php if ($house_address) { ?>
    <div class="main_img" id="lightgallery">
      <img src="<?= $house_img ?>" ></div> <?php }?> <?php if ($house_gallery) { ?>
          <div class="house_gal" id="secondary-gallery"><?= $house_gallery ?>
          </div>
        <?php }?> </div>
 <?php if ($house_des) {
   ?>  <div class="house_des"><?= $house_des ?></div> <?php }?> </div>
    <div class="house_full_des"><?= $house_full_des ?> </div>
<div class="sn_pr_tb"><? // pricing tables ?>
<table class="table table-striped"> <tbody> <tr> <td>  <p class="rn_p"><img class="rn_im" src="/wp-content/uploads/2018/02/one-room-icon.png" /></p>1 комн</td> </tr> <tr> <td>от <?php if ($house_sqrt_1) { ?><?= $house_sqrt_1 ?><?php }?> м2</td>
 </tr> <tr> <td>от <?php if ($house_prc_1) { ?> <?= $house_prc_1 ?> <?php }?> у.е.</td> </tr> </tbody> <tbody> <tr> <td> <p class="rn_p">
   <img class="rn_im" src="/wp-content/uploads/2018/02/two-room-icon-blue.png" /></p>2 комн</td> </tr> <tr> <td>от <?php if ($house_sqrt_2) { ?><?= $house_sqrt_2 ?><?php }?> м2</td> </tr> <tr> <td>от <?php if ($house_prc_2) { ?> <?= $house_prc_2 ?> <?php }?> у.е.</td>
    </tr> </tbody> <tbody> <tr> <td> <p class="rn_p"><img class="rn_im" src="/wp-content/uploads/2018/02/three-room-icon-blue.png" /></p> 3 комн</td> </tr> <tr> <td>от <?php if ($house_sqrt_3) { ?><?= $house_sqrt_3 ?><?php }?> м2</td> </tr>
       <tr> <td>от <?php if ($house_prc_3) { ?> <?= $house_prc_3 ?> <?php }?> у.е.</td> </tr> </tbody> </table> </div>
       <?
       $dom_u_dorogi = get_field('дом_на_карте');
       if ($dom_u_dorogi){
       echo '<section class="sing2">';
       echo '<div class="map">';
       echo '<div>';
       echo '<h3>Дом на карте</h3> ';
       echo '</div>';
       echo $dom_u_dorogi;
       echo '</div>';
       echo '</section>';
     }
       ?>
 <?php
      $i_d = get_the_ID();
      $title = get_the_title();
      $image_field_name = 'appar_image';
      $object_type = 'Квартира';
      $childrens = get_children( array(
        'post_parent' => $i_d,
        'numberposts' => -1,
        'post_status' => 'any',
        'meta_query'	=> array(
        'relation'		=> 'AND',
        array( 'key'	 	=> 'house_or_appartment',
        'value'	  	=> $object_type,
        'compare' 	=> 'IN', ),
        )
      ) );
  // get_childrens($i_d, $childrens, $title, $image_field_name);
  $image_field_name = 'основное_фото_офиса';
  $object_type = 'Офис';
  $childrens = get_children( array(
    'post_parent' => $i_d,
    'numberposts' => -1,
    'post_status' => 'any',
    'meta_query'	=> array(
    'relation'		=> 'AND',
    array( 'key'	 	=> 'house_or_appartment',
    'value'	  	=> $object_type,
    'compare' 	=> 'IN', ),
    )
  ) );
  // get_childrens($i_d, $childrens, $title, $image_field_name, $object_type);
   print_r(' </div>');
  print_r(' <div class="house_widgets">');
  print_r(' <div class="house_widgets_container">');
?>
 <?php if ($house_address) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/014-placeholder.png"> Адрес: <strong><?= $house_address ?></strong> </div><?php }?>
  <?php if ($house_block) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/013-office.png"> Район: <strong><?= $house_block ?></strong> </div> <?php } // !!!!!! Тут должен быть маленький поп ап - показать квартиры в этом районе  и показать дома в этом районе?>
  <?php if ($house_flr_num) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/012-skyscraper.png"> Количество этажей: <strong><?= $house_flr_num ?></strong> </div> <?php }?>
    <?php if ($house_bld) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/010-worker.png"> Застройщик: <strong><?= $house_bld ?></strong> </div> <?php }?>
      <?php if ($house_release_date) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/011-deadline.png"> Срок сдачи: <strong><?= $house_release_date ?></strong> </div> <?php }?>
    <?php if ($house_otdelka) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/009-builder.png"> Квартиры с отделкой  </div> <?php }?>
    <?php if ($house_commercial) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/008-man-with-desk-and-monitor.png"> Коммерческие помещения  </div> <?php }?>
    <?php if ($house_security) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/007-lock.png"> Охраняемая территория  </div> <?php }?>
    <?php if ($house_parking_under) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/006-garage.png"> Паркинг подземный  </div> <?php }?>
    <?php if ($house_parking) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/005-parking.png"> Парковка  </div> <?php }?>
    <?php if ($house_kids_yard) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/004-park.png"> Детские площадки  </div> <?php }?>
    <?php if ($house_kindergarten) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/003-teaching.png"> Рядом есть детский сад  </div> <?php }?>
    <?php if ($house_pharma) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/002-hospital.png"> Аптека  </div> <?php }?>
    <?php if ($house_green_area) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/001-bench.png"> Сквер парк зеленая зона  </div><?php }?>
      <div class="prosmotr"> <h3>Хотите посмотреть квартиры в этом доме?</h3> <button class="zapis">Записаться на просмотр</button> </div>
<?
  print_r(' </div>');
  print_r(' </div>');
  print_r(' </div>');
} else {
// Тут должна быть лента вывода сданных домов
?>
<h1><?php echo  the_title() ;?></h1>
<div class="house_content">
  <div class="house">
    <div class="core_content">
    <div class="house_photo_block"> <?php if ($house_address) { ?>  <div class="main_img"  id="lightgallery"><a href="<?= $house_img ?>"><img src="<?= $house_img ?>" ></a></div> <?php }?> <?php if ($house_gallery) { ?>  <div class="house_gal" id="secondary-gallery"><?= $house_gallery ?> </div> <?php }?> </div>
     <?php if ($house_des) {
       ?>  <div class="house_des"><?= $house_des ?> </div> <?php }?> </div>
       <div class="house_full_des"><?= $house_full_des ?> </div>
       <div class="sn_pr_tb"><? // pricing tables ?>
       <table class="table table-striped"> <tbody> <tr> <td>  <p class="rn_p"><img class="rn_im" src="/wp-content/uploads/2018/02/one-room-icon.png" /></p>1 комн</td> </tr> <tr> <td>от <?php if ($house_sqrt_1) { ?><?= $house_sqrt_1 ?><?php }?> м2</td>
        </tr> <tr> <td>от <?php if ($house_prc_1) { ?> <?= $house_prc_1 ?> <?php }?> у.е.</td> </tr> </tbody> <tbody> <tr> <td> <p class="rn_p">
          <img class="rn_im" src="/wp-content/uploads/2018/02/two-room-icon-blue.png" /></p>2 комн</td> </tr> <tr> <td>от <?php if ($house_sqrt_2) { ?><?= $house_sqrt_2 ?><?php }?> м2</td> </tr> <tr> <td>от <?php if ($house_prc_2) { ?> <?= $house_prc_2 ?> <?php }?> у.е.</td>
           </tr> </tbody> <tbody> <tr> <td> <p class="rn_p"><img class="rn_im" src="/wp-content/uploads/2018/02/three-room-icon-blue.png" /></p> 3 комн</td> </tr> <tr> <td>от <?php if ($house_sqrt_3) { ?><?= $house_sqrt_3 ?><?php }?> м2</td> </tr>
              <tr> <td>от <?php if ($house_prc_3) { ?> <?= $house_prc_3 ?> <?php }?> у.е.</td> </tr> </tbody> </table> </div>
              <div class="related_block">
                 <?php
               $metko = get_post_meta($post->ID, 'дом_на_карте', true); if (empty($metko)) {}
                 else  {  echo '<div class="row geo" id="geo"><h3>'; echo the_title() ; echo ' на карте</h3>';echo $metko;echo '</div>';}
                  $i_d = get_the_ID();
                  $childrens = get_children( array(
                  	'post_parent' => $i_d,
                  	'numberposts' => -1,
                  	'post_status' => 'any'
                  ) );
                  if( $childrens ){
                        print_r(' <h3 class="related_appartments"> Квартиры в '. get_the_title() .' </h3>');
                    print_r(' <div class="tha this_house_appartments">');
                  	foreach( $childrens as $children ){

                $chi_id = $children->ID;


                if (get_field('appar_image', $chi_id)) {
                 print_r(' <div class="one_appartment">');
                ?>  <div class="rel_img">
        <?  print_r(' <a href="'. get_permalink($chi_id) .'">');  ?>
            <img src="<?= get_field('appar_image', $chi_id) ?>" >
                  <?  print_r(' </a> ');  ?>
                </div>
                  <?php
                if (get_field('галерея_квартиры', $chi_id)) { /*?> <div class="rel_gal"> <?= get_field('галерея_квартиры', $chi_id) ?></div> <?php */}
                      print_r(' <div class="office_data">');
                if (get_field('sqrt', $chi_id)) { ?> <div class="">Площадь:  <strong><?= get_field('sqrt', $chi_id) ?> </strong></div> <?php }
                if (get_field('prc', $chi_id)) { ?> <div class="">Цена:  <strong><?= get_field('prc', $chi_id) ?> </strong></div> <?php }
                if (get_field('floor', $chi_id)) { ?> <div class="">Этаж:  <strong><?= get_field('floor', $chi_id) ?> </strong></div> <?php }
                if (get_field('rom', $chi_id)) { ?> <div class="">Комнат:  <strong><?= get_field('rom', $chi_id) ?> </strong></div>
               <?php
                     print_r(' <a class="btn-details" href="'. get_permalink($chi_id) .'">Перейти</a>');
                   }
                  print_r(' </div>');
                  print_r(' </div>');
                  }
                  }
                  print_r(' </div>');
                }?>
                <?
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
                  'value'	  	=> $object_type,
                  'compare' 	=> 'IN', ),
                  )
                ) );
                get_childrens($i_d, $childrens, $title, $image_field_name, $object_type);
                ?>
           </div>
  </div>
<div class="house_widgets">
  <?  print_r(' <div class="house_widgets_container">'); ?>
 <?php if ($house_address) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/014-placeholder.png"> Адрес: <strong><?= $house_address ?></strong> </div><?php }?>
  <?php if ($house_block) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/013-office.png"> Район: <strong><?= $house_block ?></strong> </div> <?php } // !!!!!! Тут должен быть маленький поп ап - показать квартиры в этом районе  и показать дома в этом районе?>
  <?php if ($house_flr_num) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/012-skyscraper.png"> Количество этажей: <strong><?= $house_flr_num ?></strong> </div> <?php }?>
    <?php if ($house_bld) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/010-worker.png"> Застройщик: <strong><?= $house_bld ?></strong> </div> <?php }?>
      <?php if ($house_release_date) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/011-deadline.png"> Срок сдачи: <strong><?= $house_release_date ?></strong> </div> <?php }?>
    <?php if ($house_otdelka) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/009-builder.png"> Квартиры с отделкой  </div> <?php }?>
    <?php if ($house_commercial) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/008-man-with-desk-and-monitor.png"> Коммерческие помещения  </div> <?php }?>
    <?php if ($house_security) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/007-lock.png"> Охраняемая территория  </div> <?php }?>
    <?php if ($house_parking_under) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/006-garage.png"> Паркинг подземный  </div> <?php }?>
    <?php if ($house_parking) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/005-parking.png"> Парковка  </div> <?php }?>
    <?php if ($house_kids_yard) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/004-park.png"> Детские площадки  </div> <?php }?>
    <?php if ($house_kindergarten) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/003-teaching.png"> Рядом есть детский сад  </div> <?php }?>
    <?php if ($house_pharma) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/002-hospital.png"> Аптека  </div> <?php }?>
    <?php if ($house_green_area) { ?>  <div class=""><img src="/wp-content/uploads/2018/02/001-bench.png"> Сквер парк зеленая зона  </div><?php }?>
      <div class="prosmotr"> <h3>Хотите посмотреть квартиры в этом доме?</h3> <button class="zapis">Записаться на просмотр</button> </div>
</div>
</div>
</div>
<?
}
} else {
  if ($post_definition == 'Офис') {
///OFFICE BEGINS
 $i_d = get_the_ID();
 $i_d_parent = wp_get_post_parent_id( $i_d );
$parent_image = get_field('основное_фото_дома', $i_d_parent);
    print_r(' <div class="parent_image">');
    print_r(' <div class="info_box">');
    print_r(' <div class="skew_box">');
    print_r(' <div class="content_box">');
    print_r(' <div class="thin"><h1>Офис в '. get_the_title($i_d_parent) .'</h1>');
    $parent_house_otdelka =  get_field('квартиры_с_отделкой', $i_d_parent) ;
    $parent_house_commercial =  get_field('коммерческие_помещения', $i_d_parent) ;
    $parent_house_security =  get_field('охраняемая_территория', $i_d_parent) ;
    $parent_house_parking_under =  get_field('паркинг_подземный', $i_d_parent) ;
    $parent_house_parking =  get_field('парковка', $i_d_parent) ;
    $parent_house_kids_yard =  get_field('детские_площадки', $i_d_parent) ;
    $parent_house_kindergarten =  get_field('рядом_есть_детский_сад_', $i_d_parent) ;
    $parent_house_pharma =  get_field('аптека', $i_d_parent) ;
    $parent_house_green_area =  get_field('сквер_парк_зеленая_зона', $i_d_parent) ;
print_r('<div class="house_features">');
    if ($parent_house_otdelka) {     print_r('       <div class=""><img src="/wp-content/uploads/2018/02/009-builder.png"> Квартиры с отделкой  </div>');  }
    if ($parent_house_commercial) {     print_r('   <div class=""><img src="/wp-content/uploads/2018/02/008-man-with-desk-and-monitor.png"> Коммерческие помещения  </div> '); }
    if ($parent_house_security) {      print_r('     <div class=""><img src="/wp-content/uploads/2018/02/007-lock.png"> Охраняемая территория  </div> '); }
    if ($parent_house_parking_under) {  print_r('   <div class=""><img src="/wp-content/uploads/2018/02/006-garage.png"> Паркинг подземный  </div> '); }
    if ($parent_house_parking) {       print_r('     <div class=""><img src="/wp-content/uploads/2018/02/005-parking.png"> Парковка  </div> '); }
    if ($parent_house_kids_yard) {     print_r('      <div class=""><img src="/wp-content/uploads/2018/02/004-park.png"> Детские площадки  </div> '); }
    if ($parent_house_kindergarten) {   print_r('      <div class=""><img src="/wp-content/uploads/2018/02/003-teaching.png"> Рядом есть детский сад  </div> '); }
    if ($parent_house_pharma) {        print_r('      <div class=""><img src="/wp-content/uploads/2018/02/002-hospital.png"> Аптека  </div> '); }
    if ($parent_house_green_area) {    print_r('    <div class=""><img src="/wp-content/uploads/2018/02/001-bench.png"> Сквер парк зеленая зона  </div>'); }
      print_r(' </div><div class="button_row"><a href="'. get_permalink($i_d_parent) .'"><button class="zapis">Объекты в этом доме</button></a>');
      print_r(' <a href="'. get_permalink($i_d_parent) .'"><button class="zapis active">Записаться на просмотр</button></a></div>');
     print_r(' </div>');
     print_r(' </div>');
     print_r(' </div>');
     print_r(' </div>');
    print_r(' <div class="overlay">');  print_r(' </div>');
    print_r('<img src="'. $parent_image .'" />');
    print_r(' </div>');
?>
<div class="s office_single">
   <div id="main_image">
     <?php
     $main_image = get_field('основное_фото_офиса');
     $gallery = get_field('фото_офиса_планировка');
     if ($main_image) { ?>
       <div id="lightgallery"  class="gallery">
        <a href="<?php echo  $main_image;?>"><img gallery-support="<?php echo $gallery_support; ?>" alt="Купить квартиру в Одессе <?= $bld ?>" src="<?php echo  $main_image;?>" /> </a>
 </div> <?php }?>
   <ul class="top_row" id="secondary-gallery">
      <?php if ($gallery) { ?> <?= $gallery ?> <?php }?>
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
if ($empty_icons >2){  echo   '<ul class="thin sm xsm grid-'. $filled_icons .'">'; } else { echo '<ul class="thin sm grid-'. $filled_icons .'">'; };
if ($sqrt) { ?> <li><img src="/wp-content/uploads/2018/02/006-set-square.png" alt="">
   <div class="side_data"><span>Площадь&nbsp;:</span><strong><?= $sqrt ?> м<sup>2</sup></strong></div>
 </li> <?php }?>
 <?php if ($prc) { ?>
    <li><img src="/wp-content/uploads/2018/02/005-shopping.png" alt="">
        <div class="side_data"><span>Цена&nbsp;:</span><strong><?= $prc ?></strong></div>
  </li> <?php }?>
   <?php if ($floor) { ?>
   <li><img src="/wp-content/uploads/2018/02/004-stairs.png" alt="">
     <div class="side_data">  <span>Этаж&nbsp;:</span><strong><?= $floor ?></strong></div>
   </li> <?php }?>
   <?php if ($rom) { ?>
     <li><img src="/wp-content/uploads/2018/02/003-building.png" alt="">
     <div class="side_data">    <span>Кабинетов в офисе&nbsp;:</span><strong><?= $rom ?> </strong></div>
     </li> <?php }?> <?php if ($section) { ?> <li>
       <img src="/wp-content/uploads/2018/02/002-buildings.png" alt="">
       <div class="side_data">  <span>Секция&nbsp;:</span><strong><?= $section ?></strong></div>
     </span><?php }?>
       <?php if ($bld) { ?> <li><img src="/wp-content/uploads/2018/02/001-worker.png" alt="" width="64" height="64">
       <div class="side_data">    <span>Застройщик&nbsp;:</span><strong><?= $bld ?></strong></div>
       <?php }
             echo '  </ul>';
$des  = get_field('описание_офиса');
$sqrt  = get_field('office_sqrt');
$prc  = get_field('цена_офиса');
$floor  = get_field('этаж_офиса');
$rom  = get_field('кабинетов_офиса');
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
}
///OFFICE ENDS
  }else{
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
    print_r(' <div class="thin"><h1>Квартира в '. get_the_title($i_d_parent) .'</h1>');
    $parent_house_otdelka =  get_field('квартиры_с_отделкой', $i_d_parent) ;
    $parent_house_commercial =  get_field('коммерческие_помещения', $i_d_parent) ;
    $parent_house_security =  get_field('охраняемая_территория', $i_d_parent) ;
    $parent_house_parking_under =  get_field('паркинг_подземный', $i_d_parent) ;
    $parent_house_parking =  get_field('парковка', $i_d_parent) ;
    $parent_house_kids_yard =  get_field('детские_площадки', $i_d_parent) ;
    $parent_house_kindergarten =  get_field('рядом_есть_детский_сад_', $i_d_parent) ;
    $parent_house_pharma =  get_field('аптека', $i_d_parent) ;
    $parent_house_green_area =  get_field('сквер_парк_зеленая_зона', $i_d_parent) ;
print_r('<div class="house_features">');
    if ($parent_house_otdelka) {     print_r('       <div class=""><img src="/wp-content/uploads/2018/02/009-builder.png"> Квартиры с отделкой  </div>');  }
    if ($parent_house_commercial) {     print_r('   <div class=""><img src="/wp-content/uploads/2018/02/008-man-with-desk-and-monitor.png"> Коммерческие помещения  </div> '); }
    if ($parent_house_security) {      print_r('     <div class=""><img src="/wp-content/uploads/2018/02/007-lock.png"> Охраняемая территория  </div> '); }
    if ($parent_house_parking_under) {  print_r('   <div class=""><img src="/wp-content/uploads/2018/02/006-garage.png"> Паркинг подземный  </div> '); }
    if ($parent_house_parking) {       print_r('     <div class=""><img src="/wp-content/uploads/2018/02/005-parking.png"> Парковка  </div> '); }
    if ($parent_house_kids_yard) {     print_r('      <div class=""><img src="/wp-content/uploads/2018/02/004-park.png"> Детские площадки  </div> '); }
    if ($parent_house_kindergarten) {   print_r('      <div class=""><img src="/wp-content/uploads/2018/02/003-teaching.png"> Рядом есть детский сад  </div> '); }
    if ($parent_house_pharma) {        print_r('      <div class=""><img src="/wp-content/uploads/2018/02/002-hospital.png"> Аптека  </div> '); }
    if ($parent_house_green_area) {    print_r('    <div class=""><img src="/wp-content/uploads/2018/02/001-bench.png"> Сквер парк зеленая зона  </div>'); }
      print_r(' </div><div class="button_row"><a href="'. get_permalink($i_d_parent) .'"><button class="zapis">Объекты в этом доме</button></a>');
      print_r(' <a href="'. get_permalink($i_d_parent) .'"><button class="zapis active">Записаться на просмотр</button></a></div>');
     print_r(' </div>');
     print_r(' </div>');
     print_r(' </div>');
     print_r(' </div>');
    print_r(' <div class="overlay">');  print_r(' </div>');
    print_r('<img src="'. $parent_image .'" />');
    print_r(' </div>');
?>
<div class="s">
   <div class="gallery">
     <?php if ($main_image) { ?>
       <div id="main_image">
       <div id="lightgallery">
         <a href="<?php echo  $main_image;?>">
   <img gallery-support="<?php echo $gallery_support; ?>" alt="Купить квартиру в Одессе <?= $bld ?>" src="<?php echo  $main_image;?>" />
 </a>
 </div>
 </div>
<?php }?>
   <ul class="top_row" id="secondary-gallery">
      <?php if ($gallery) { ?> <?= $gallery ?> <?php }?>
    </ul>
  </div>
   <div class="r_block">
      <div itemscope itemtype="description" class="description">
<?php
 echo '<div class="mini_info">';
 echo '<p>Район: <span>'. get_field('block') .'</span></p>';
 echo '<p>Адрес дома: <span>'. get_field('адрес_дома', $i_d_parent) .'</span></p>';
 echo '</div>';
    $filled_icons = 6 - $empty_icons;
if ($empty_icons > 2){  echo   '<ul class="thin sm xsm grid-'. $filled_icons .'">'; } else { echo '<ul class="thin sm grid-'. $filled_icons .'">'; };
 if ($sqrt) { ?> <li><img src="/wp-content/uploads/2018/02/006-set-square.png" alt="">
 <div class="side_data"><span>Площадь&nbsp;:</span><strong><?= $sqrt ?> м<sup>2</sup></strong></div>
</li> <?php }?> <?php if ($prc) { ?>
  <li><img src="/wp-content/uploads/2018/02/005-shopping.png" alt="">
      <div class="side_data"><span>Цена&nbsp;:</span><strong><?= $prc ?></strong></div>
</li> <?php }?> <?php if ($floor) { ?>
 <li><img src="/wp-content/uploads/2018/02/004-stairs.png" alt="">
   <div class="side_data">  <span>Этаж&nbsp;:</span><strong><?= $sqrt ?> м<sup>2</sup></strong></div>
 </li> <?php }?>
 <?php if ($rom) { ?>
   <li><img src="/wp-content/uploads/2018/02/003-building.png" alt="">
   <div class="side_data">    <span>Комнат&nbsp;:</span><strong><?= $rom ?> </strong></div>
   </li> <?php }?> <?php if ($section) { ?> <li>
     <img src="/wp-content/uploads/2018/02/002-buildings.png" alt="">
     <div class="side_data">  <span>Секция&nbsp;:</span><strong><?= $section ?></strong></div>
   </span><?php }?>
     <?php if ($bld) { ?> <li><img src="/wp-content/uploads/2018/02/001-worker.png" alt="" width="64" height="64">
     <div class="side_data">    <span>Застройщик&nbsp;:</span><strong><?= $bld ?></strong></div>
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
echo '</section>';
}
}else{  }  } } ;
?>
<!-- Конец обработки одиночных страниц  -->
		<?php endwhile; ?>
</div>
</div></div></div>

    <? include('/wp-content/themes/ss/footer_novostroy.php');?>

	      <div id="root"></div>
			</div>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/kvarts.js">
</script>
  <script src="/wp-content/themes/ss/webpack/dist/bundle.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<? include('/wp-content/themes/ss/lg.php');?>
<?php get_footer(); ?>
