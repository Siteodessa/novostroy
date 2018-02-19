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



 ?>

<div class="">
<div class="row">
	<div class="container hb">
		<?php while ( have_posts() ) : the_post();

// echo $post_definition;
// if (function_exists('simple_breadcrumbs')) simple_breadcrumbs(); // можно дописать js, который красиво будет заменять фразу objects на

if ($post_definition == 'Дом') {
// У домов сначала их поля, затем дополнительно цикл с квартирами. Преврати его в функцию по дороге
//
if ($house_readiness == 'Строится') {
?>

<h1><?php echo  the_title() ;?></h1>



<div class="house_content">
<div class="house">


<div class="core_content">
<div class="house_photo_block">
    <?php if ($house_address) { ?>  <div class="main_img"><img src="<?= $house_img ?>" ></div> <?php }?>
  <?php if ($house_gallery) { ?>  <div class="house_gal"><?= $house_gallery ?> </div> <?php }?>
</div>


  <?php if ($house_des) { ?>  <div class="house_des"><img src=""><strong><?= $house_des ?></strong> </div> <?php }?>
</div>

<div class="sn_pr_tb">
<table class="table table-striped">
  <tbody>
    <tr>
      <td>1 комн</td>
    </tr>
    <tr>
      <td>от 36 м2</td>
    </tr>
    <tr>
      <td> 28 000 у.е.</td>
    </tr>
  </tbody>

  <tbody>
    <tr>
      <td>1 комн</td>
    </tr>
    <tr>
      <td>от 36 м2</td>
    </tr>
    <tr>
      <td> 28 000 у.е.</td>
    </tr>
  </tbody>

  <tbody>
    <tr>
      <td>1 комн</td>
    </tr>
    <tr>
      <td>от 36 м2</td>
    </tr>
    <tr>
      <td> 28 000 у.е.</td>
    </tr>
  </tbody>
</table>
</div>


<div class="price_square_table">
  <div>
  <?php if ($house_sqrt_1) { ?>  <div class=""> Площадь однокомнатных квартир от: <strong><?= $house_sqrt_1 ?></strong> </div> <?php }?>
  <?php if ($house_prc_1) { ?>  <div class=""> Цена однокомнатных квартир от: <strong><?= $house_prc_1 ?></strong> </div> <?php }?></div>
  <div>  <?php if ($house_sqrt_2) { ?>  <div class=""> Площадь двухкомнатных квартир от: <strong><?= $house_sqrt_2 ?></strong> </div> <?php }?>
  <?php if ($house_prc_2) { ?>  <div class=""> Цена двухкомнатных квартир от: <strong><?= $house_prc_2 ?></strong> </div> <?php }?></div>
  <div>  <?php if ($house_sqrt_3) { ?>  <div class=""> Площадь трехкомнатных квартир от: <strong><?= $house_sqrt_3 ?></strong> </div> <?php }?>
  <?php if ($house_prc_3) { ?>  <div class=""> Цена трехкомнатных квартир от: <strong><?= $house_prc_3 ?></strong> </div> <?php }?></div>
</div>


 <?php }



  //место для дополнительного цикла квартир , дочерних текущему дому ;)
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
?>  <div class="rel_img"><img src="<?= get_field('appar_image', $chi_id) ?>" ></div> <?php
if (get_field('галерея_квартиры', $chi_id)) { ?> <div class="rel_gal"> <?= get_field('галерея_квартиры', $chi_id) ?></div> <?php }

if (get_field('sqrt', $chi_id)) { ?> <div class="">Площадь:  <strong><?= get_field('sqrt', $chi_id) ?> </strong></div> <?php }
if (get_field('prc', $chi_id)) { ?> <div class="">Цена:  <strong><?= get_field('prc', $chi_id) ?> </strong></div> <?php }
if (get_field('floor', $chi_id)) { ?> <div class="">Этаж:  <strong><?= get_field('floor', $chi_id) ?> </strong></div> <?php }
if (get_field('rom', $chi_id)) { ?> <div class="">Комнат:  <strong><?= get_field('rom', $chi_id) ?> </strong></div> <?php }
  print_r(' </div>');
  }
  }
  print_r(' </div>');
   print_r(' </div>');
  print_r(' <div class="house_widgets">');
?>  <?php if ($house_address) { ?>  <div class=""><img src="http://novostroy/wp-content/uploads/2018/02/014-placeholder.png"> Адрес: <strong><?= $house_address ?></strong> </div><?php }?>
  <?php if ($house_block) { ?>  <div class=""><img src="http://novostroy/wp-content/uploads/2018/02/013-office.png"> Район: <strong><?= $house_block ?></strong> </div> <?php } // !!!!!! Тут должен быть маленький поп ап - показать квартиры в этом районе  и показать дома в этом районе?>
  <?php if ($house_flr_num) { ?>  <div class=""><img src="http://novostroy/wp-content/uploads/2018/02/012-skyscraper.png"> Количество этажей: <strong><?= $house_flr_num ?></strong> </div> <?php }?>
    <?php if ($house_bld) { ?>  <div class=""><img src="http://novostroy/wp-content/uploads/2018/02/010-worker.png"> Застройщик: <strong><?= $house_bld ?></strong> </div> <?php }?>
      <?php if ($house_release_date) { ?>  <div class=""><img src="http://novostroy/wp-content/uploads/2018/02/011-deadline.png"> Срок сдачи: <strong><?= $house_release_date ?></strong> </div> <?php }?>
    <?php if ($house_otdelka) { ?>  <div class=""><img src="http://novostroy/wp-content/uploads/2018/02/009-builder.png"> Квартиры с отделкой:  </div> <?php }?>
    <?php if ($house_commercial) { ?>  <div class=""><img src="http://novostroy/wp-content/uploads/2018/02/008-man-with-desk-and-monitor.png"> Коммерческие помещения:  </div> <?php }?>
    <?php if ($house_security) { ?>  <div class=""><img src="http://novostroy/wp-content/uploads/2018/02/007-lock.png"> Охраняемая территория:  </div> <?php }?>
    <?php if ($house_parking_under) { ?>  <div class=""><img src="http://novostroy/wp-content/uploads/2018/02/006-garage.png"> Паркинг подземный:  </div> <?php }?>
    <?php if ($house_parking) { ?>  <div class=""><img src="http://novostroy/wp-content/uploads/2018/02/005-parking.png"> Парковка:  </div> <?php }?>
    <?php if ($house_kids_yard) { ?>  <div class=""><img src="http://novostroy/wp-content/uploads/2018/02/004-park.png"> Детские площадки:  </div> <?php }?>
    <?php if ($house_kindergarten) { ?>  <div class=""><img src="http://novostroy/wp-content/uploads/2018/02/003-teaching.png"> Рядом есть детский сад:  </div> <?php }?>
    <?php if ($house_pharma) { ?>  <div class=""><img src="http://novostroy/wp-content/uploads/2018/02/002-hospital.png"> Аптека:  </div> <?php }?>
    <?php if ($house_green_area) { ?>  <div class=""><img src="http://novostroy/wp-content/uploads/2018/02/001-bench.png"> Сквер парк зеленая зона:  </div>
<?
  print_r(' </div>');
  print_r(' </div>');
 }  ?>
















<?php
} else {
// Тут должна быть лента вывода сданных домов


}
?>
    <?php




} else {
  if ($post_definition == 'Офис') {










  }else{
      if ($post_definition == 'Квартира') { // Тут разобрались
?><div class="s"> <div class="gallery"> <ul class="top_row"> <?php if ($gallery) { ?> <?= $gallery ?> <?php }?> </ul> <?php if ($main_image) { ?> <div id="main_image">
   <img gallery-support="<?php echo $gallery_support; ?>" alt="Купить квартиру в Одессе <?= $bld ?>" src="<?php echo  $main_image;?>" /> </div> <?php }?>
  </div> <div class="r_block"> <ul>
      <?php if ($sqrt) { ?> <li><img src="http://novostroy/wp-content/uploads/2018/02/006-set-square.png" alt="">Площадь :<strong><?= $sqrt ?></strong> </li> <?php }?> <?php if ($prc) { ?>
         <li><img src="http://novostroy/wp-content/uploads/2018/02/005-shopping.png" alt="">Цена :<strong><?= $prc ?></strong>
       </li> <?php }?> <?php if ($floor) { ?>
        <li><img src="http://novostroy/wp-content/uploads/2018/02/004-stairs.png" alt="">Этаж :<strong><?= $sqrt ?></strong> </li> <?php }?>
        <?php if ($rom) { ?>
          <li><img src="http://novostroy/wp-content/uploads/2018/02/003-building.png" alt="">Количество комнат :<strong><?= $sqrt ?> </strong></li> <?php }?> <?php if ($section) { ?> <li>
            <img src="http://novostroy/wp-content/uploads/2018/02/002-buildings.png" alt="">Секция :<strong><?= $section ?></strong> </li> <?php }?>
            <?php if ($bld) { ?> <li><img src="http://novostroy/wp-content/uploads/2018/02/001-worker.png" alt="" width="64" height="64">Застройщик :<strong><?= $bld ?></strong> </li> <?php }?>
    </ul>
    <div itemscope itemtype="description" class="description">Описание :  <?= $des ?> </div> </div> </div> <?php }else{  }  } } ?>







<!-- Конец обработки одиночных страниц  -->
		<?php endwhile; ?>
</div>
</div></div></div>
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
	            <img src="/wp-content/uploads/2017/12/2-825x510.jpg" />
	          </div>
	          <div class="col-md-8">
	            <a href="">ЖК «42 Жемчужина</a>
	          </div>
	        </div>    </div>
	        <div class="col-md-3">
	          <h3>Мы в соц.сетях</h3>
	        </div>
	      </div>
	      <div class="sf"><p><?php echo $_SERVER['SERVER_NAME']; ?>&nbsp;©&nbsp;2017</p><p>Создание сайта: <a href="http://siteodessa.com">Siteodessa.com</a></div>
	    </div>
	      </div>
	      <div id="root"></div>
			</div>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/kvarts.js">
</script>

  <script src="/wp-content/themes/ss/webpack/dist/bundle.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php get_footer(); ?>
