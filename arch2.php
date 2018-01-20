<?php
/**
 * The template for displaying archive pages
 * @link https://codex.wordpress.org/Template_Hierarchy
 * // max query template link //http://novostroy/kvartiri/?rom=2&bld=Кадорр&block=Киевский&mnp=10000&mxp=20000&mns=20&mxs=40
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header();
?><style>
div#srch_stat {
    width: 100%;
    display: flex;
    justify-content: flex-end;
}
div.special_counter {
    text-align: right;
    font-size: 14px;
    font-family: sans-serif;
    text-transform: lowercase;
    background: #e4e4e4;
    color: #444;
    padding: 4px;
}
strong.rom {
    border-radius: 100%;
    border: 1px solid;
    padding: 5px 11px !important;
    margin: 0 0px;
}
.appartment b {
    padding: 5px 7px 0 12px;
}
.appartment b.app_comn {
    border: none;
    padding: 5px 7px 0 3px !important;
}
.appartment {
    width: 100%;
    display: grid;
    border: 1px solid;
    padding: 10px 12px;
    margin: 5px;
    grid-template-columns: 50px 32px 100px 250px 60px 110px 80px 50px 50px 1fr 1fr;
    grid-gap: 6px;
}
.appartment strong {
    padding: 5px 6px;
    border: 1px solid;
    display: table;
}
b {
    padding: 5px 4px 0 0;
    border-left: 1px solid;
    margin: 0 7px 0 0px;
} .editka a.post-edit-link { padding: 5px; display:  inline; } .search_values { display: grid; grid-template-columns: 100px 350px 190px 180px 180px; grid-gap: 15px; } .search_values div { margin: 0 10px; } .search_values .sqrt_inp input, .search_values .prc_inp input { width: 70px; margin: 0 10px 0 0; } p.srch_labl { margin: 0; background: #bdbdbde6; color: #444444; font-weight: bold; padding: 4px; } aside { background-color: #6ac2e71f; }
</style><?php
function default_kvartiri_behaviour()
{
  function make_search_values_checkboxes($search_tag){
    $search_tago = $search_tag; $field = get_field_object($search_tago);
    if( $field ) {
      echo '<div class="'. $search_tag .'_values"><aside><p class="srch_labl">'. $field['label']  .'</p>';
      foreach( $field['choices'] as $k => $v )
      {
         echo '<div class="choice" data-filter="'. $search_tag .'"><label class="srch_labl_val">'. $k . '</label><input type="checkbox" placeholder="' . $k . '" value="' . $v . '"><br></div>';
      };
       echo '</aside></div>';
     };
  };
print_r('<a href="http://novostroy/kvartiri/?rom=2&bld=Кадорр&block=Киевский&mnp=10000&mxp=20000&mns=20.2&mxs=40">Следующий этап - НАЧНИ С ЭТОГО твой onchange должен начать заставить также обрабатывать и другие по отдельности, и потом уже их группами , а еще тут Проверка поиска если сюда нажать</a>');
print_r('<div class="search_values">');
make_search_values_checkboxes("rom");
make_search_values_checkboxes("bld");
make_search_values_checkboxes("block");
print_r('<div class="sqrt_inp"><p>Площадь</p><label><input type="text" placeholder="От" /> </label><label><input type="text" placeholder="До" /></label></div>');
print_r('<div class="prc_inp"><p>Цена</p><label><input type="text" placeholder="От" /> </label><label><input type="text" placeholder="До" /></label></div></div>'); // end search_values block
 function push_all_possible_meta_values($meta_key_slug)
 { $arr =  array(); $search_tago = $meta_key_slug; $field = get_field_object($search_tago); if( $field ) { foreach( $field['choices'] as $k => $v ) { array_push($arr, $k); } } return $arr; }
 $rom_value = push_all_possible_meta_values("rom"); //default show all rooms possible
 $bld_value = push_all_possible_meta_values("bld"); //default all bld companies
 $block_value = push_all_possible_meta_values("block"); //default all rayoni
 $min_possible_price_value = '0';  //default min price
 $max_possible_price_value = '10000000'; //default max price
 $min_possible_sqrt_value = '0'; //default min ploshad'
 $max_possible_sqrt_value = '10000000'; //default max ploshad'
if (isset( $_GET['rom'] )) {$rom_value = $_GET['rom'];} if (isset( $_GET['bld'] )) {$bld_value = $_GET['bld'];} if (isset( $_GET['block'] )) {$block_value = $_GET['block'];} if (isset( $_GET['mnp'] )) {$min_possible_price_value = $_GET['mnp'];} if (isset( $_GET['mxp'] )) {$max_possible_price_value = $_GET['mxp'];} if (isset( $_GET['mns'] )) {$min_possible_sqrt_value = $_GET['mns'];} if (isset( $_GET['mxs'] )) {$max_possible_sqrt_value = $_GET['mxs'];}
//if get was set- previous block sets it as a meta query parameter
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
while(have_posts()): the_post();
 print_r('<div class="appartment">');
 print_r('<b class="app_comn">Комнат</b><strong class="rom">'. get_field('rom') .'</strong>');
 print_r('<b>Застройщик</b><strong class="bld">'. get_field('bld') .'</strong>');
 print_r('<b>Район</b><strong class="block">'. get_field('block') .'</strong>');
 print_r('<b>Площадь</b><strong class="sqrt">'. get_field('sqrt') .'</strong>');
 print_r('<b>Цена</b><strong class="prc">'. get_field('prc') .'</strong>');
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
   <script>
   let app_res = jQuery('.appartment_res ');
   let special_counter = jQuery('div.special_counter');
special_counter.prependTo(app_res);
special_counter.wrap('<div id="srch_stat"></div>');
   </script>
<script type="text/javascript">
  function magicBox(a,b){

//  перед каментом update url надо вставить проверку на то , есть ли в ссылке другие гетовые запросы
//  и если есть - не использовать url текущим - он не учитывает состояние а берет базовый. Нужно взять все геты поштучно проверить if ( 1=1||2!=3 ||bla ) затем сделать проверку текущего гет пожелания , не совпадает ли оно с текущим
//  , если совпадает - вроде должно each обработаться, если нет - url заменяется на текущий window.location.href += '&' += fdf += '=' += value .......value уже в иче должен внедряться. При тестировании найдо проверить что будет если выбрать
//  1 комната потом район примор потом 2 комната и посмотреть вставится ли значение комнаты в нужную часть гета, а хуй там правда что вставится

  (function($) {
      a.each(function(i){
         var df = jQuery(this).data('filter');
    jQuery(this).attr('data-count', df + (i+1));
  });
  var fdf = a.data('filter');
	b.each(function(){
      $(this).on('change', 'input[type="checkbox"]', function(){ // change
		var url = '<?php echo home_url('kvartiri'); ?>';// vars
			args = {};
		a.each(function(){    // loop over filters
			var filter = $(this).data('count'),
				vals = [];
			jQuery(this).find('input:checked')
      .each(function()
      { // find checked inputs
				vals.push( $(this).val() );
			});
			args[ filter ] = vals.join(',');// append to args
		});
		url += '?';// update url
        url += fdf;
        url += '=';
		jQuery.each(args, function( name, value ){// loop over args
          if (value != ''){
		 url += value + ',';
          }
		});
		url = url.slice(0, -1);// remove last &

        console.log( url );
//		window.location.replace( url );// reload page
	});
    });
})(jQuery);
  };
var z = jQuery('.rom_values .choice ');
var f = jQuery('.rom_values ');
var d = jQuery('.bld_values .choice ');
var j = jQuery('.bld_values ');
var n = jQuery('.block_values .choice ');
var p = jQuery('. block_values ');
new magicBox(z, f), new magicBox(d, j), new magicBox(n, p);
</script>
