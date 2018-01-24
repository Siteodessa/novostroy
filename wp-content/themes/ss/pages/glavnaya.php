<?php get_header();?>
<?php/** * Template Name:  Главная
* * @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0 */?>

    <div class="row">
      <div class="container hb">
        <div class="slfa">
          <div class="slide fromLeft active" style="background: url('http://novostroy/wp-content/uploads/2017/12/Gorizont-Omega.jpg'); background-size:cover;"></div>
          <div class="slide fromLeft" style="background: url('http://novostroy/wp-content/uploads/2017/12/Siti-Park.jpg'); background-size:cover;"></div>
          <div class="slide fromLeft" style="background: url('http://novostroy/wp-content/uploads/2017/12/Budova.jpg'); background-size:cover;"></div>
          <div class="slide fromLeft" style="background: url('http://novostroy/wp-content/uploads/2017/12/Marshal-Siti.jpg'); background-size:cover;"></div>
          <span class="nav" id="left">&lsaquo;</span>
          <span class="nav" id="right">&rsaquo;</span>
        </div>

        <style>
        div#srch_stat {width: 100%;display: flex;justify-content: flex-end;}.fixie {position: fixed;top: 20px;background: green;color: #fff;padding: 12px;font-size: 17.5px;left: 0;}.fixie {position: fixed;top: 20px;background: green;color: #fff;padding: 12px;font-size: 17.5px;z-index: 999999;left: 0;}  #src_val input[type="checkbox"] {transform: scale(1.4);margin: 5px 12px;outline: 1px solid #cadbe1;}div.special_counter {text-align: right;font-size: 14px;font-family: sans-serif;text-transform: lowercase;background: #e4e4e4;color: #444;padding: 4px;}strong.rom {border-radius: 100%;border: 1px solid;padding: 5px 11px !important;margin: 0 0px;}.appartment b {padding: 5px 7px 0 12px;}.appartment b.app_comn {border: none;padding: 5px 7px 0 3px !important;}.appartment {width: 100%;display: grid;border: 1px solid;padding: 10px 12px;margin: 5px;grid-template-columns: 50px 32px 100px 250px 60px 110px 80px 50px 50px 1fr 1fr;grid-gap: 6px;}.appartment strong {padding: 5px 6px;border: 1px solid;display: table;}b {padding: 5px 4px 0 0;border-left: 1px solid;margin: 0 7px 0 0px;} .editka a.post-edit-link { padding: 5px; display:  inline; } button#searchstarter {height: 40px;width: 80px;}.search_values {display: grid;grid-template-columns: 100px 350px 190px 180px 180px 80px;grid-gap: 15px;}.search_values div { margin: 0 10px; } .search_values .sqrt_inp input, .search_values .prc_inp input { width: 70px; margin: 0 10px 0 0; } p.srch_labl { margin: 0; background: #bdbdbde6; color: #444444; font-weight: bold; padding: 4px; } aside { background-color: #6ac2e71f; }
        </style><?php
        function default_kvartiri_behaviour()
        {
          function make_search_values_checkboxes($search_tag){
        $search_tago = $search_tag; $field = get_field_object($search_tago);
        if( $field ) {
        ?>


          <?php
          echo '<div id="'. $search_tag .'" class="'. $search_tag .'_values"><aside><p class="srch_labl">'. $field['label']  .'</p>';
          foreach( $field['choices'] as $k => $v )
          {
            $z = $k;$where = $k;$what = "_";$position = strpos($where,$what);if ($position !== false ){    $phrase  = $k;$healthy = array("_");$yummy   = array(" ");$newphrase = str_replace($healthy, $yummy, $phrase); $z = $newphrase; };
                 echo '<div class="choice" data-filter="'. $search_tag .'"><label title="'. $v . '" req="'. $req . '" class="srch_labl_val">'. $z . '</label><input type="checkbox" '. $checked .' srch-type="'. $search_tag .'" class="'. $search_tag .'" placeholder="' . $k . '" value="' . $v . '"><br></div>';
              };
               echo '</aside></div>';
             };
          };
        print_r('<a href="http://novostroy/kvartiri/?rom=2&bld=Кадорр&block=Киевский&mnp=10000&mxp=20000&mns=20.2&mxs=40"></a>');
        print_r('<div id="src_val" class="search_values">');
        make_search_values_checkboxes("rom");
        make_search_values_checkboxes("bld");
        make_search_values_checkboxes("block");
        if (isset($_GET[mns])){ $received_value_mns = $_GET[mns]; } else { $received_value_mns = '';} if (isset($_GET[mxs])){ $received_value_mxs = $_GET[mxs]; } else { $received_value_mxs = '';} if (isset($_GET[mnp])){ $received_value_mnp = $_GET[mnp]; } else { $received_value_mnp = '';} if (isset($_GET[mxp])){ $received_value_mxp = $_GET[mxp]; } else { $received_value_mxp = '';}
        print_r('<div id="sqrt_inp" class="sqrt_inp"><p>Площадь</p><label><input type="text" data-srch-type="mns" value="'. $received_value_mns .'" placeholder="От" /> </label><label><input value="'. $received_value_mxs .'"  type="text" data-srch-type="mxs" placeholder="До" /></label></div>');
        print_r('<div id="prc_inp" class="prc_inp"><p>Цена</p><label><input type="text" value="'. $received_value_mnp .'" data-srch-type="mnp" placeholder="От" /> </label><label><input type="text" value="'. $received_value_mxp .'" data-srch-type="mxp" placeholder="До" /></label></div><a id="searchstarter"><button>Поиск</button></a></div>'); // end search_values block
         function push_all_possible_meta_values($meta_key_slug)
         { $arr =  array();
            $search_tago = $meta_key_slug;
            $field = get_field_object($search_tago);
             if( $field ) { foreach( $field['choices'] as $k => $v )
               { array_push($arr, $k); } } return $arr; }
         $rom_value = push_all_possible_meta_values("rom");
         $bld_value = push_all_possible_meta_values("bld");
         $block_value = push_all_possible_meta_values("block");
         $min_possible_price_value = '0';
         $max_possible_price_value = '10000000';
         $min_possible_sqrt_value = '0';
         $max_possible_sqrt_value = '10000000';
        if (isset( $_GET['rom'] )) {$rom_value = $_GET['rom'];} if (isset( $_GET['bld'] )) {$bld_value = $_GET['bld'];} if (isset( $_GET['block'] )) {$block_value = $_GET['block'];} if (isset( $_GET['mnp'] )) {$min_possible_price_value = $_GET['mnp'];} if (isset( $_GET['mxp'] )) {$max_possible_price_value = $_GET['mxp'];} if (isset( $_GET['mns'] )) {$min_possible_sqrt_value = $_GET['mns'];} if (isset( $_GET['mxs'] )) {$max_possible_sqrt_value = $_GET['mxs'];}
        $params = array(
          'post_type' =>  'kvartiri',
          'posts_per_page' => 500,
          'order'  => 'DESC',
         	'meta_query'	=> array(
        		'relation'		=> 'AND',
        		array( 'key'	 	=> 'rom', 'value'	  	=>  $rom_value, 'compare' 	=> 'IN', ), array( 'key'	  	=> 'bld', 'value'	  	=> $bld_value, 'compare' 	=> 'IN', ), array( 'key'	 	=> 'block', 'value'	  	=> $block_value, 'compare' 	=> 'IN', ), array( 'key'	  	=> 'sqrt', 'value'   => array( $min_possible_sqrt_value, $max_possible_sqrt_value ), 'type'    => 'numeric', 'compare' => 'BETWEEN', ), array( 'key'	  	=> 'prc', 'value'   => array( $min_possible_price_value, $max_possible_price_value ), 'type'    => 'numeric', 'compare' => 'BETWEEN', )
              )
             );
        $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts($params); $wp_query->is_archive = true;
        $wp_query->is_home = false;
        $counter = 0;
        print_r('<div class="appartment_res">');
        while(have_posts()): the_post();?>
        <div class="appartment">
        <b class="app_comn">Комнат</b><strong class="rom"><?php echo get_field('rom');?></strong>
        <b>Застройщик</b><strong class="bld"><?php echo  get_field('bld') ;?></strong>
        <b>Район</b><strong class="block"><?php echo get_field('block')  ;?></strong>
        <b>Площадь</b><strong class="sqrt"><?php echo  get_field('sqrt') ;?></strong>
        <b>Цена</b><strong class="prc"><?php echo  get_field('prc') ;?></strong>
             <?php
          print_r('<b class="editka">');
            edit_post_link();?><a href=" <?php the_permalink();?>">Смотреть</a><?
              print_r('</div>');
             print_r('</b>');


              $counter++;
              endwhile;
              print_r('</div>');
            print_r('<div class="special_counter">Показывается квартир: '. $counter .'</div>');
          };
        default_kvartiri_behaviour();
              get_footer();
           ?>
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/kvarts.js">
        </script>
           <script>
        jQuery('body').append('<div class="fixie"></div>');
        let app_res = jQuery('.appartment_res ');
        let special_counter = jQuery('div.special_counter');
        special_counter.prependTo(app_res);
        special_counter.wrap('<div id="srch_stat"></div>');
        jQuery('#searchstarter').attr('search-direct', '<?php echo home_url('kvartiri'); ?>');
        var url = jQuery('#searchstarter').attr('href');
        jQuery('.fixie').text(url);
        const input_tables = [jQuery('#rom'), jQuery('#bld'), jQuery('#block'), jQuery('#sqrt_inp'), jQuery('#prc_inp')];
        const slctbl_np_tbls = [jQuery('#rom'), jQuery('#bld'), jQuery('#block')];
        const possible_received_args = ['rom', 'bld', 'block', 'mnp', 'mxp', 'mns', 'mxs'];
        var link_prefix = '/?';
        var link_addon = '';
        var default_url = '<?php echo home_url('kvartiri'); ?>'+ link_prefix +'';
        var get_req_object =  new search_any_req(possible_received_args);
        jQuery.each(get_req_object, function(name, value) {
          value = value.split(',');
          var value_len = value.length;
          if (value_len == 1)
            {jQuery('input.' + name + '').each(function(){  if (jQuery(this).val() == value){ jQuery(this).attr('checked',true);  }}); } else  {  for (k = 0 ; k < value_len; k++){  jQuery('input.' + name + '').each(function(){  if (jQuery(this).val() == value[k]){ jQuery(this).attr('checked',true);  }});}}
        });
        function src_val(){
                 var c = {};
          jQuery('div#src_val input[type="checkbox"]').each(function(){
          if (jQuery(this).prop( "checked" ) == true){
                  var a = jQuery(this).attr('srch-type');
                  var b = jQuery(this).val();
             if (!c[a]){ c[a] = b; }
            else {
          var g = c[a];
           c[a] = ''+ b + ',' + g + '';
            }
          };
          })  ;
          var o = c;
            var generated_url = '';
          for (var key in o) {
            generated_url += key + '=' + o[key] +'&';
          };
            var cut_url = generated_url;
            var default_url = '<?php echo home_url('kvartiri'); ?>'+ link_prefix +'';
            var done_url = default_url += cut_url;
            console.clear();
            jQuery('#searchstarter').attr('search-direct', done_url);
        }
        jQuery('div#src_val').on('change', 'input[type="checkbox"]', function() {
        src_val();
        });
        jQuery('#searchstarter').click(function(){
          src_val();
        var readysearchdirect = jQuery(this).attr('search-direct');
        var input_link_builder = '';
        var finish_link_builder = '';
        var curloc = readysearchdirect;
        if (curloc.indexOf('rom=') == -1 && curloc.indexOf('bld=') == -1 &&
        curloc.indexOf('block=') == -1 && curloc.indexOf('mnp=') == -1 &&
         curloc.indexOf('mxp=') == -1 && curloc.indexOf('mns=') == -1 && curloc.indexOf('mxs=') == -1 )
        {
          jQuery('div#sqrt_inp input, div#prc_inp input').each(function(){
          var srch_type = jQuery(this).attr('data-srch-type');
          var srch_val = jQuery(this).val();
              if (jQuery(this).val())
                {
                  input_link_builder += srch_type + '=' + srch_val + '&';
                };
            }),
          input_link_builder = input_link_builder.slice(0, -1),
        readysearchdirect += '?' + input_link_builder,
         window.location.replace( readysearchdirect );
        } else {
          if ( curloc.indexOf('mnp=') != -1 || curloc.indexOf('mxp=') != -1 || curloc.indexOf('mns=') != -1 || curloc.indexOf('mxs=') != -1 )
           {
        console.log(curloc);
        console.log('hardway');
           } else {
             jQuery('div#sqrt_inp input, div#prc_inp input').each(function(){
             var srch_type = jQuery(this).attr('data-srch-type');
             var srch_val = jQuery(this).val();
                 if (jQuery(this).val())
                   {
                     input_link_builder += srch_type + '=' + srch_val + '&';
                   };
               }),
             input_link_builder = input_link_builder.slice(0, -1),
           readysearchdirect += input_link_builder,
            window.location.replace( readysearchdirect );
           }
         }
           });
        </script>
































        <!--OLD BEGINNING-->
        <?php $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;   $params = array( 'category_name' => 'Строящиеся дома', 'posts_per_page' => 100, 'paged' => $current_page ); query_posts($params); $wp_query->is_archive = true; $wp_query->is_home = false; while(have_posts()): the_post(); ?>
        <?php endwhile; ?>
        <!--OLD END-->
        <?php
$term = get_queried_object();
$image = get_field('image', $term);
if( is_category() )
if ( have_posts() ) :
if ( get_queried_object()->name == 'Строящиеся дома' || get_queried_object()->name == 'Сданные дома')  {
$i=1;
$cat = get_query_var('cat');
$categories = get_categories('parent='.$cat.'');
foreach ($categories as $category) { $i++; }
if ($i > 1) {
echo "<div id='catblocks'>";
    $g = 1;
foreach ($categories as $category) {
$term = get_queried_object();
$adress = get_field('адрес', $category);
$quantity = get_field('количество_квартир', $category);
$sqrt = get_field('площадь_квартир', $category);
$status = get_field('статус_дома', $category);
$image = get_field('image', $category);
$rayon = get_field('район', $category);
$srok = get_field('срок_сдачи', $category);
$vendor = get_field('застройщик', $category);
$sqrtprice = get_field('цена_за_квадратный_метр', $category);
if($desc_acf=get_field("image",get_category($cat))){
echo apply_filters("the_content", $desc_acf);
}
/*   Надо добавить район застройщик срок сдачи   и поле цена за квадратный метр   */

        ?>
        <div class="col-md-4 bldng" name="building-<?php echo $g;?>">
          <div class="blda" title="<?php echo $category->name; ?>">
            <span class="bdg-name"><?php echo $category->name; ?></span>
            <a class="imga" href="<?php echo get_category_link($category->term_id); ?>">
              <span class="bdg-image"><?php echo '<img alt="'.$category->name.'" src="'.$image.'">';?></span>
            </a>

<?php if (!empty($sqrtprice)){echo '<span class="bdg-sqrtprice"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/003-gps.png">Цена за квадратный метр:<p>'.$sqrtprice.'</p></span>';}; ?>
<?php if (!empty($vendor)){echo '<span class="bdg-vendor"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/003-gps.png">Застройщик:<p>'.$vendor.'</p></span>';}; ?>
<?php if (!empty($rayon)){echo '<span class="bdg-block"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/003-gps.png">Район:<p>'.$rayon.'</p></span>';}; ?>
<?php if (!empty($adress)){echo '<span class="bdg-adress"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/003-gps.png">Адрес:<p>'.$adress.'</p></span>';}; ?>
<?php if (!empty($quantity)){echo '<span class="bdg-quantity"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/002-appartments.png">Количество квартир: <p>'.$quantity.'</p></span>'; }?>
<?php if (!empty($sqrt)){echo '<span class="bdg-sqrt"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/001-ruler.png">Площадь квартир: <p>'.$sqrt.'</p></span>'; }?>
<?php if (!empty($status)){echo '<span class="bdg-status"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/004-list.png">Статус дома: <p>'.$status.'</p></span>'; }?>
<?php if (!empty($srok)){echo '<span class="bdg-srok"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/004-list.png">Срок сдачи: <p>'.$srok.'</p></span>'; }?>


          </div>
        </div>
        <?php $g++;
}
        	echo "</div>";
        } else {
        	$pcat = get_category(get_query_var('cat'),false);
        	$pcatid = $pcat->category_parent;
        	$categories = get_categories('parent='.$pcatid.'');
        	echo "<div>";
        	foreach ($categories as $category) {
$term = get_queried_object();
$image = get_field('image', $category);
$adress = get_field('адрес', $category);
$quantity = get_field('количество_квартир', $category);
$sqrt = get_field('площадь_квартир', $category);
$status = get_field('статус_дома', $category);
if($desc_acf=get_field("image",get_category($cat))){
echo apply_filters("the_content", $desc_acf);
}?>
        <div class="col-md-4 bldng" name="building-<?php echo $g;?>">
          <div class="blda" title="<?php echo $category->name; ?>">
            <span class="bdg-name"><?php echo $category->name; ?></span>
            <a href="<?php echo get_category_link($category->term_id); ?>"><span class="bdg-image"><?php echo '<img alt="'.$category->name.'" src="'.$image.'">';?></span></a>
            <span class="data">
    <span class="bdg-adress">            <img class="icon" src="http://novostroy/wp-content/uploads/2017/12/003-gps.png">
            Адрес:  <p><?php echo $adress; ?></p> </span>
            <span class="bdg-quantity">  <img class="icon" src="http://novostroy/wp-content/uploads/2017/12/002-appartments.png">
            Количество квартир: <p> <?php echo $quantity; ?></p></span>
            <span class="bdg-sqrt"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/001-ruler.png">
            Площадь квартир: <p> <?php echo $sqrt; ?></p></span>
            <span class="bdg-status"><img class="icon" src="http://novostroy/wp-content/uploads/2017/12/004-list.png">
            Статус дома: <p><?php echo $status; ?></p> </span></span>
          </div>
        </div>
        <?php $g++;
 } }
        	echo "</div>";
        }
   else {
   include('catbaner.php');
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
                <li>Описание :
                  <?php echo get_field('описание');?>
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
   }
?>
          <?php
		else :
			get_template_part( 'content', 'none' );
		endif;
		?>
      </div>
      <div id="root"></div>
      <script src="/wp-content/themes/ss/webpack/dist/bundle.js"></script>

    <?php get_footer();?>
