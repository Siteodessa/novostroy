<?php
/**
 * The template for displaying archive pages
 * @link https://codex.wordpress.org/Template_Hierarchy
 * // max query template link ////http://novostroy/kvartiri/?rom=2&bld=Кадорр&block=Киевский&mnp=10000&mxp=20000&mns=20&mxs=40
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header();
?><style>
div#srch_stat {width: 100%;display: flex;justify-content: flex-end;}.fixie {position: fixed;top: 20px;background: green;color: #fff;padding: 12px;font-size: 17.5px;left: 0;}.fixie {position: fixed;top: 20px;background: green;color: #fff;padding: 12px;font-size: 17.5px;z-index: 999999;left: 0;}  #src_val input[type="checkbox"] {transform: scale(1.4);margin: 5px 12px;outline: 1px solid #cadbe1;}div.special_counter {text-align: right;font-size: 14px;font-family: sans-serif;text-transform: lowercase;background: #e4e4e4;color: #444;padding: 4px;}strong.rom {border-radius: 100%;border: 1px solid;padding: 5px 11px !important;margin: 0 0px;}.appartment b {padding: 5px 7px 0 12px;}.appartment b.app_comn {border: none;padding: 5px 7px 0 3px !important;}.appartment {width: 100%;display: grid;border: 1px solid;padding: 10px 12px;margin: 5px;grid-template-columns: 50px 32px 100px 250px 60px 110px 80px 50px 50px 1fr 1fr;grid-gap: 6px;}.appartment strong {padding: 5px 6px;border: 1px solid;display: table;}b {padding: 5px 4px 0 0;border-left: 1px solid;margin: 0 7px 0 0px;} .editka a.post-edit-link { padding: 5px; display:  inline; } button#searchstarter {height: 40px;width: 80px;}.search_values {display: grid;grid-template-columns: 100px 350px 190px 180px 180px 80px;grid-gap: 15px;}.search_values div { margin: 0 10px; } .search_values .sqrt_inp input, .search_values .prc_inp input { width: 70px; margin: 0 10px 0 0; } p.srch_labl { margin: 0; background: #bdbdbde6; color: #444444; font-weight: bold; padding: 4px; } aside { background-color: #6ac2e71f; }
</style><?php
function default_kvartiri_behaviour()
{
  function make_search_values_checkboxes($search_tag){
$search_tago = $search_tag; $field = get_field_object($search_tago);
if( $field ) {
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
if (isset($_GET[mns])){
  $received_value_mns = $_GET[mns];
} else { $received_value_mns = '';}
if (isset($_GET[mxs])){
  $received_value_mxs = $_GET[mxs];
} else { $received_value_mxs = '';}
if (isset($_GET[mnp])){
  $received_value_mnp = $_GET[mnp];
} else { $received_value_mnp = '';}
if (isset($_GET[mxp])){
  $received_value_mxp = $_GET[mxp];
} else { $received_value_mxp = '';}
print_r('<div id="sqrt_inp" class="sqrt_inp"><p>Площадь</p><label><input type="text" data-srch-type="mns" value="'. $received_value_mns .'" placeholder="От" /> </label><label><input value="'. $received_value_mxs .'"  type="text" data-srch-type="mxs" placeholder="До" /></label></div>');
print_r('<div id="prc_inp" class="prc_inp"><p>Цена</p><label><input type="text" value="'. $received_value_mnp .'" data-srch-type="mnp" placeholder="От" /> </label><label><input type="text" value="'. $received_value_mxp .'" data-srch-type="mxp" placeholder="До" /></label></div><a id="searchstarter"><button>Поиск</button></a></div>'); // end search_values block
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
//   На данный момент выделяются те поля, которые были в гет запросе  И точка.
//     Теперь рассматриваем остальную часть как отдельную задачу - мы должны на каждой смене инпута делать полный обход и собирать все данные полей, поэтому не надо идентифицировать что юзер там кликнул, пожалуйста
jQuery('div#src_val').on('change', 'input[type="checkbox"]', function() {

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
  var cut_url = generated_url
//  .slice(0, -1)
  ;
  var default_url = '<?php echo home_url('kvartiri'); ?>'+ link_prefix +'';
  var done_url = default_url += cut_url;
  console.clear();
// console.log("%cТы красава, сделал свой выбор", "color: #18b94a; font-size:16px;");
  jQuery('#searchstarter').attr('search-direct', done_url);
});
jQuery('#searchstarter').click(function(){
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
     // hardway - one of the same gets is already installed but how can this branch be? only if they were installed before ! so they must install if set in get in php 1st cycle
console.log(curloc);
console.log('hardway');
   } else {
     // easyway - just add the link  and go
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
   } // 1 tree 2 branch ifelse end
 } // 1 tree 1 branch ifelse end

  // console.log("%c" + input_link_builder + " Redirecting in 30 sec...", "color: #18acb9; font-size:36px;");
// var possible_other_args = ['rom', 'bld', 'block', 'mnp', 'mxp', 'mns', 'mxs'],
// var get_new_req_object = new search_any_req(possible_other_args),
// jQuery.each(get_new_req_object, function(name, value) {
//   get_req_object
   });
</script>
