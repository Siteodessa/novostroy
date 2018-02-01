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










// управление перекрытием меню делается через релатив и з индекс  home-c container и srch_vals, управляй классом который перебрасывает индекс доминацию между этими двумя, короче два тогла вряд вполне хватит








get_header();
print_r('<link rel="stylesheet" href="'. get_template_directory_uri() .'/home.css">');
function default_kvartiri_behaviour()
{
  function there_is_any_get(){
  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $entry1 = strpos($actual_link,"&");
  $entry2 = strpos($actual_link,"?");
  if ($entry1 !== false ||  $entry2 !== false ) { return true;} else { return false;};
  }
  function make_search_values_checkboxes($search_tag){
$search_tago = $search_tag;
 $field = get_field_object($search_tago);
if( $field ) {
  echo '<div id="'. $search_tag .'" class="'. $search_tag .'_values"><aside><p class="srch_labl">'. $field['label']  .'</p><div class="choices nxpan">';
  foreach( $field['choices'] as $k => $v )
  {
    $z = $k;$where = $k;$what = "_";$position = strpos($where,$what);if ($position !== false ){    $phrase  = $k;$healthy = array("_");$yummy   = array(" ");$newphrase = str_replace($healthy, $yummy, $phrase); $z = $newphrase; };
         echo '<div class="choice" data-filter="'. $search_tag .'"><input type="checkbox" '. $checked .' srch-type="'. $search_tag .'" class="'. $search_tag .'" placeholder="' . $k . '" value="' . $v . '"><label title="'. $v . '" req="'. $req . '" class="srch_labl_val">'. $z . '</label><br></div>';
      };
       echo '</div></aside></div>';
     };
  };
  print_r('<div id="srch_vals" class="search_block">');
  print_r('<div id="mini_block" class="srch-top">');
  print_r('</div>');
print_r('<div class="container">');
print_r('<div id="src_val" class="search_values">');
make_search_values_checkboxes("rom");
make_search_values_checkboxes("bld");
make_search_values_checkboxes("block");
make_search_values_checkboxes("floor");
if (isset($_GET[mns])){ $received_value_mns = $_GET[mns]; } else { $received_value_mns = '';}
if (isset($_GET[mxs])){ $received_value_mxs = $_GET[mxs]; } else { $received_value_mxs = '';}
if (isset($_GET[mnp])){ $received_value_mnp = $_GET[mnp]; } else { $received_value_mnp = '';}
if (isset($_GET[mxp])){ $received_value_mxp = $_GET[mxp]; } else { $received_value_mxp = '';}
print_r('<div id="sqrt_inp" class="sqrt_inp"><p class="srch_labl">Площадь</p><div class="inps choices nxpan"><label><input type="text" data-srch-type="mns" value="'. $received_value_mns .'" placeholder="От" /> </label><label><input value="'. $received_value_mxs .'"  type="text" data-srch-type="mxs" placeholder="До" /></label></div></div>');
print_r('<div id="prc_inp" class="prc_inp"><p class="srch_labl">Цена</p><div class="inps choices nxpan"><label><input type="text" value="'. $received_value_mnp .'" data-srch-type="mnp" placeholder="От" /> </label><label><input type="text" value="'. $received_value_mxp .'" data-srch-type="mxp" placeholder="До" /></label></div></div><a id="searchstarter"><button id="start" class="btn">Поиск</button></a>');
  print_r('</div>');
    print_r('<div id="mini_block_b" class="srch-bot">');
    // print_r('a');
    print_r('</div>');
    print_r('</div>');
    print_r('</div>');
 // end search_values block
 function push_all_possible_meta_values($meta_key_slug)
 { $arr =  array(); $search_tago = $meta_key_slug; $field = get_field_object($search_tago); if( $field ) { foreach( $field['choices'] as $k => $v ) { array_push($arr, $k); } } return $arr; }
 $rom_value = push_all_possible_meta_values("rom");
 $bld_value = push_all_possible_meta_values("bld");
 $block_value = push_all_possible_meta_values("block");
 $floor_value = push_all_possible_meta_values("floor");
 $min_possible_price_value = '0';
 $max_possible_price_value = '10000000';
 $min_possible_sqrt_value = '0';
 $max_possible_sqrt_value = '10000000';
if (isset( $_GET['rom'] )) {  $rom_value = $_GET['rom'];}
  if (isset( $_GET['bld'] )) {  $bld_value = $_GET['bld'];}
     if (isset( $_GET['block'] )) {$block_value = $_GET['block'];}
     if (isset( $_GET['floor'] )) {$floor_value = $_GET['floor'];}
     if (isset( $_GET['mnp'] )) {$min_possible_price_value = $_GET['mnp'];}
     if (isset( $_GET['mxp'] )) {$max_possible_price_value = $_GET['mxp'];}
     if (isset( $_GET['mns'] )) {$min_possible_sqrt_value = $_GET['mns'];}
     if (isset( $_GET['mxs'] )) {$max_possible_sqrt_value = $_GET['mxs'];}
$params = array(
  'post_type' =>  'objects',
  'posts_per_page' => 500,
  'order'  => 'DESC',
 	'meta_query'	=> array(
		  'relation'		=> 'AND',
		  array( 'key'	 	=> 'rom',
      'value'	  	=>  $rom_value,
      'compare' 	=> 'IN', ),
      array( 'key'	  	=> 'bld',
      'value'	  	=> $bld_value,
      'compare' 	=> 'IN', ),
    array( 'key'	 	=> 'block',
      'value'	  	=> $block_value,
      'compare' 	=> 'IN', ),
    array( 'key'	 	=> 'floor',
      'value'	  	=> $floor_value,
      'compare' 	=> 'IN', ),
      array( 'key'	  	=> 'sqrt',
      'value'   => array( $min_possible_sqrt_value, $max_possible_sqrt_value ),
      'type'    => 'numeric',
      'compare' => 'BETWEEN', ),
      array( 'key'	  	=> 'prc',
      'value'   => array( $min_possible_price_value, $max_possible_price_value ),
      'type'    => 'numeric', 'compare' => 'BETWEEN', )
      )
     );
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts($params); $wp_query->is_archive = true;
$wp_query->is_home = false;
$counter = 0;
print_r('<div class="home-c container z-dom">');
  print_r('<div class="appartment_res">');



  print_r('<div class="sub_search_menu"></div>');
  print_r('<div class="apps_holder">');




while(have_posts()): the_post();?>
<ul class="appartment">
<li class="im"><img src="<?php echo get_field('фото');?>" /></li>
<li class="bd"><p>Застройщик</p><strong class="bld"><?php echo  get_field('bld') ;?></strong></li>
<li class="ro"><p class="app_comn">Комнат</p><strong class="rom"><?php echo get_field('rom');?></strong></li>
<li class="bl"><p>Район</p><strong class="block"><?php echo get_field('block')  ;?></strong></li>
<li class="sq"><p>Площадь</p><strong class="sqrt"><?php echo  get_field('sqrt') ;?></strong></li>
<li class="pr"><p>Цена</p><strong class="prc"><?php echo  get_field('prc') ;?></strong></li>
<li class="fl"><p>Этаж</p><strong class="floor"><?php echo  get_field('floor') ;?></strong></li>
     <?php
     if (!is_admin){
  print_r('<b class="editka">');
    edit_post_link();?><a href=" <?php the_permalink();?>">Смотреть</a><?
         print_r('</b>');
       };
           print_r('</ul>');
      $counter++;
      endwhile;
      print_r('</div>');
      print_r('</div>');
      print_r('</div>');
          print_r('<div class="after_search">');
        if (there_is_any_get()){print_r('<a class="flush_search" href="/">Сбросить поиск</a>');}
    print_r('<div class="special_counter">Показывается квартир: '. $counter .'</div>');
    print_r('</div>');
  };
default_kvartiri_behaviour();
      get_footer();
   ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/kvarts.js">
</script>
<script src="/wp-content/themes/ss/webpack/dist/bundle.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


   <script>


let app_res = jQuery('.sub_search_menu');

let after_search = jQuery('div.after_search');

after_search.prependTo(app_res);

after_search.wrap('<div id="srch_stat"></div>');

jQuery('#searchstarter').attr('search-direct', '<?php echo $_SERVER['SERVER_NAME']; ?>');

var url = jQuery('#searchstarter').attr('href');

const input_tables = [jQuery('#rom'), jQuery('#bld'), jQuery('#block'), jQuery('#sqrt_inp'),
 jQuery('#prc_inp')];
const slctbl_np_tbls = [jQuery('#rom'), jQuery('#bld'), jQuery('#block'), jQuery('#floor')];

const possible_received_args = ['rom', 'bld', 'block', 'floor', 'mnp', 'mxp', 'mns', 'mxs'];

var link_prefix = '/?';
var link_addon = '';
var default_url = '<?php echo $_SERVER['SERVER_NAME']; ?>'+ link_prefix +'';
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
    var default_url = ''+ link_prefix +'';
    var done_url = default_url += cut_url;
    // console.clear();
         done_url = done_url.slice(0, -1),
    jQuery('#searchstarter').attr('search-direct', done_url);
}
jQuery('div#src_val').on('change', 'input[type="checkbox"]', function() {
src_val();
});











































jQuery('#searchstarter').click(function(){
jQuery('.choices').addClass('nxpan');
src_val();
var readysearchdirect = jQuery(this).attr('search-direct');
var input_link_builder = '';
var finish_link_builder = '';
var curloc = readysearchdirect;
if (curloc.indexOf('rom=') == -1 && curloc.indexOf('bld=') == -1 && curloc.indexOf('block=') == -1 && curloc.indexOf('floor=') == -1 && curloc.indexOf('mnp=') == -1 && curloc.indexOf('mxp=') == -1 && curloc.indexOf('mns=') == -1 && curloc.indexOf('mxs=') == -1 )
{
  jQuery('div#sqrt_inp input, div#prc_inp input').each(function(){
  var srch_type = jQuery(this).attr('data-srch-type');
  var srch_val = jQuery(this).val();
      if (jQuery(this).val())
        {
          input_link_builder += srch_type + '=' + srch_val + '&';
  input_link_builder = input_link_builder.slice(0, -1),
readysearchdirect += '?' + input_link_builder,
 window.location.replace( readysearchdirect );
}
 else
{
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

}
  window.location.replace( readysearchdirect );
});
function any_opened_dropdwns(){
  var choices = jQuery('div.choices');
  var gt = 0;

jQuery(choices).each(function () {
  if (jQuery(this).hasClass('nxpan') != true)
  {
console.log(' !=true')
  }
});


jQuery(choices).each(function () {
  if (jQuery(this).hasClass('nxpan') == true)
  {
console.log(' !=true')
  }
});



setTimeout(function(){
  if (gt > 0)  {return true} else { return false }
},100);

};
jQuery('p.srch_labl').each(function () {
jQuery(this).click(function () {
if (jQuery(this).siblings('.choices').hasClass('nxpan') != true)
{

  setTimeout(function(){
    jQuery('.home-c.container, #srch_vals').toggleClass('z-dom');
  },300);
    jQuery(this).siblings('.choices').addClass('nxpan');
    console.log(any_opened_dropdwns());

}
else
{ //   console.log('fork2'); событие при открытии
   jQuery('.home-c.container, #srch_vals').toggleClass('z-dom');
    jQuery('.choices').addClass('nxpan');
    jQuery(this).siblings('.choices').removeClass('nxpan');
  console.log(any_opened_dropdwns());



}
});
});
   // Не сккладывается при повторном нажатии, нужно сделать тк чтобы можно было сбросиь параметры поиска и раскрыть все ячейки
</script>
<script>
var current = 0;
  var slides = $(".slide");
  $("#right").click(function() {
    slide(1);
  });
  $("#left").click(function() {
    slide(-1);
  });
  function slide(offset) {
    var next = (current + offset) % slides.length;
    if (next < 0) {
      next = slides.length + next;
    }
    $(slides[next]).removeClass("fromRight");
    $(slides[next]).removeClass("fromLeft");
    $(slides[current]).removeClass("fromLeft");
    $(slides[current]).removeClass("fromRight");
    if (offset > 0) {
      $(slides[current]).addClass("fromLeft");
      $(slides[next]).addClass("fromRight");
    } else {
      $(slides[current]).addClass("fromRight");
      $(slides[next]).addClass("fromLeft");
    }
    $(slides[next]).addClass("active");
    $(slides[current]).removeClass("active");
    $(slides[current]).addClass("closing");
    var oldCur = current;
    current = next;
    $("#count").html(current + 1);
  }
  setInterval(function() {
    $("#left").click();
  }, 5000);
</script>
      </div>
      <div class="clearfix"> </div>
    </div>
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
                <img src="http://novostroy/wp-content/uploads/2017/12/2-825x510.jpg" />
              </div>
              <div class="col-md-8">
                <a href="">ЖК «42 Жемчужина</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h3>Мы в соц.сетях</h3>
          </div>
        </div>
        <div class="sf">
          <p>novostroyi.od.ua&nbsp;©&nbsp;2017</p>
          <p>Создание сайта: <a href="http://siteodessa.com">Siteodessa.com</a></div>
      </div>
    </div>
    <div id="root"></div>
  </div>
  </div>
  <?php get_footer(); ?>
