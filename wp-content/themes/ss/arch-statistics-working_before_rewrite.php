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
<div id="search-res-workplace-0">
  <?php
  $paramnum = 0;  if (isset($_GET["roomnum"])) {$roomnum = $_GET["roomnum"]; $paramnum++;}
                  if (isset($_GET["prc"])) {$prc = $_GET["prc"];$paramnum++;}
                  if (isset($_GET["sqrt"])) {$sqrt = $_GET["sqrt"];$paramnum++;}
                  if (isset($_GET["bld"])) {$bld = $_GET["bld"];$paramnum++;}
                  echo '<div class="check">';
echo '<div id="paramsection">Количество указанных параметров поиска:<span>'. $paramnum. '</span></div>';
echo '<h1>Вы искали:</h1><div class="paramsection"><span> '. $roomnum. '</span><span class="aftext">-комнатные квартиры</span></div>';
echo '<div class="paramsection"> Стоимостью до<span> '. $prc. '</span><span class="aftext"></span>у.е.<span class="aftext"></span></div>';
echo '<div class="paramsection"> Площадью <span> '. $sqrt. '</span><span class="aftext"></span>м<sup>2</sup><span class="aftext"></span></div>';
echo '<div class="paramsection"> От застройщика <span> '. $bld. '</span></div>';
echo '<br>';
echo '<br>';
echo '<br>';




  $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
if ($paramnum ='1'){
  if ($roomnum){
     $keyu = 'roomnum';
     $valu = $roomnum;
     $typu = 'NUMERIC';
      $compu = '=';
if (strpos($roomnum,','))
 $roomarr = $roomnum;
if(!$roomarr){
   $meta_key_value_u = array(
   'key'		=> $keyu,
   'value'		=> $valu,
   'type'		=> $typu,
   'compare'	=> $compu
   );
   $meta_queryu = array(
   'relation'		=> 'AND',
   $meta_key_value_u
   );
   $params = array(
         'post_type' =>  'kvartiri',
           'paged' => $current_page,
           'posts_per_page' => 500,
           'order'  => 'DESC',
           'meta_query'	=> $meta_queryu
);
}
else{
$roomarr = array($roomarr);
$roomarr = implode(',', $roomarr);
if($roomarr[6]){
  echo '<br>roomarr четвертый выбор сделан<br>';
  $params = array(
        'post_type' =>  'kvartiri',
          'paged' => $current_page,
          'posts_per_page' => 500,
          'order'  => 'DESC',
          'meta_query'	=> array(
        		'relation'		=> 'OR',
        		array(
        			'key'		=> $keyu,
        			'value'		=> $roomarr[6],
        			'compare'	=> 'LIKE'
        		)
            ,array(
        			'key'		=> $keyu,
        			'value'		=> $roomarr[4],
        			'compare'	=> 'LIKE'
        		)
            ,array(
        			'key'		=> $keyu,
        			'value'		=> $roomarr[2],
        			'compare'	=> 'LIKE'
        		)
            ,array(
        			'key'		=> $keyu,
        			'value'		=> $roomarr[0],
        			'compare'	=> 'LIKE'
        		)
        	)
);
} else {
    if($roomarr[4]){
      echo '<br>roomarr третий выбор сделан<br>';
      $params = array(
            'post_type' =>  'kvartiri',
              'paged' => $current_page,
              'posts_per_page' => 500,
              'order'  => 'DESC',
              'meta_query'	=> array(
            		'relation'		=> 'OR'
              ,array(
            			'key'		=> $keyu,
            			'value'		=> $roomarr[4],
            			'compare'	=> 'LIKE'
            		)
                ,array(
            			'key'		=> $keyu,
            			'value'		=> $roomarr[2],
            			'compare'	=> 'LIKE'
            		)
                ,array(
            			'key'		=> $keyu,
            			'value'		=> $roomarr[0],
            			'compare'	=> 'LIKE'
            		)
            	)
    );
     } else {
       if($roomarr[2]){
         echo '<br>roomarr второй выбор сделан<br>';
         $params = array(
               'post_type' =>  'kvartiri',
                 'paged' => $current_page,
                 'posts_per_page' => 500,
                 'order'  => 'DESC',
                 'meta_query'	=> array(
               		'relation'		=> 'OR'
                   ,array(
               			'key'		=> $keyu,
               			'value'		=> $roomarr[2],
               			'compare'	=> 'LIKE'
               		)
                   ,array(
               			'key'		=> $keyu,
               			'value'		=> $roomarr[0],
               			'compare'	=> 'LIKE'
               		)
               	)
       );
        } else {
          if($roomarr[0]){
            echo '<br>roomarr первый выбор сделан<br>';
                // двухкомнатные
          };
        }
    }
}
}
  // ------------------------------------------------------------------------paramnum-1-END------------/--1------------
    }
    // if ($sqrt){ $keyu = 'sqrt'; $valu = $sqrt;$typu = 'NUMERIC';$compu = '=';}
    // if ($bld){ $keyu = 'bld'; $valu = $bld;$typu = 'TEXT';$compu = '=';}
    //  if ($prc){ $keyu = 'prc'; $valu = $prc;$typu = 'NUMERIC';$compu = '<=';}
}
if ($paramnum ='2'){}
if ($paramnum ='3'){}
if ($paramnum ='4'){}
echo '</div>';
  query_posts($params); $wp_query->is_archive = true;
  $wp_query->is_home = false;
  while(have_posts()): the_post();
  ?>
<li>Количество комнат :  <?php echo get_field('roomnum'); ?>
</li>
<li>Площадь :  <?php echo get_field('sqrt');   print_r($urias);?>
</li>
<li>Этаж :  <?php echo get_field('floor');?>
</li>
<li>Секция :  <?php echo get_field('section');?>
</li>
<li>Описание :<?php echo get_field('descr');?>
</li>
<li>Цена :  <?php echo get_field('prc');?>
</li>
<li>Застройщик : <?php echo get_field('bld');?>
</li>
<li>Район :  <?php echo get_field('block');?>
</li>
<li>название :  <?php the_title();?>
</li>
<br>
<?php
 endwhile; ?>
<div id="workplace">
  <!-- Тыт мы храним полученные от пользователя запросы, обрабатываем их -->
  <?php
  /* Primer zaprosa */
/* Primer zaprosa */
  ?>
  <?php
echo '<pre>'.count(array_keys($_GET), true).'</pre>';
echo '<pre>'.print_r(array_keys($_GET), true).'</pre>';
if(count(array_keys($_GET)) != 0){
  echo 'Ищем<br>';
  echo 'Начинаем сбор Get параметров и значений...<br><br><br><br>';
  foreach($_GET as $key => $value)
  {
    echo '<div class="b0 m1">';
$keyname = $key;
  if ($keyname == 'roomnum'){$keyname = 'Количество комнат';echo'<br>';};
  if ($keyname == 'prc'){$keyname = 'Цена';echo'<br>';};
  if ($keyname == 'sqrt'){$keyname = 'Площадь';echo'<br>';};
  if ($keyname == 'bld'){$keyname = 'Застройщик';echo'<br>';};
  echo 'Вы искали следующие квартиры: '. $keyname .' ='.$value.'<br>';
  echo '<small>Поисковый ярлык метаполя = '. $key .' , Со значениями ='.$value.'</small><br><br><br>';
  echo '</div>';
  /*endforeach */
  }
} else {
  echo 'не ищем<br>';
}
?>
</div>
<!-- Тут мы собираем запрос -->
<div id="workplace2">
  <?php
$romval = array('3');
$bldval = array('');
$sqrtval = array('');
$blockval = array('');
$desval = array('');
  $posts = get_posts(array(
  	'posts_per_page'	=> -1,
  	'post_type' =>  'kvartiri',
    'meta_query' => array(
      'relation' => 'OR',
      array(
        'key' => 'rom',
        'value' => '5',
        'type' => 'NUMERIC',
        'compare' 	=> '=',
      ),
  ),
  ));
  if( $posts ): ?>
  	<ul class=" srch-card-desk">
  	<?php foreach( $posts as $post ):
  		setup_postdata( $post );
  		?>
  		<ul class="b0">
  			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
        <?php edit_post_link(); ?>
        <li>Количество комнат :  <?php echo get_field('rom'); ?></li>
        <li>Площадь :  <?php echo get_field('sqrt');   print_r($urias);?></li>
        <li>Этаж :  <?php echo get_field('floor');?></li>
        <li>Секция :  <?php echo get_field('section');?></li>
        <li>Описание :<?php echo get_field('descr');?></li>
        <li>Цена :  <?php echo get_field('prc');?></li>
        <li>Застройщик : <?php echo get_field('bld');?></li>
        <li>Район :  <?php echo get_field('block');?></li>
        <li>название :  <?php the_title();?></li>
  		</ul>
  	<?php endforeach; ?>
  	</ul>
  	<?php wp_reset_postdata(); ?>
  <?php endif; ?>
</div>
  <?php get_footer(); ?>
