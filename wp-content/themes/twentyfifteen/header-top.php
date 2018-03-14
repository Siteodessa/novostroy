<?php
function push_all_possible_meta_values($meta_key_slug)
{ $arr =  array();
$search_tago = $meta_key_slug;
$field = get_field_object($search_tago);
if( $field ) {
foreach( $field['choices'] as $k => $v )
{ array_push($arr, $k);
} } return $arr;
};
function there_is_any_get(){
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$entry1 = strpos($actual_link,"&");
$entry2 = strpos($actual_link,"?");
if ($entry1 !== false ||  $entry2 !== false ) { return true;} else { return false;};
}
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
function  print_query($query_objects, $title, $image_field_name, $object_type, $pretext, $top_line, $mid_lines){
if( $query_objects ){
print_r(' <h3 class="related_appartments"> '. $pretext .' </h3>');
print_r(' <'. $top_line['parent_node'] .' class="'. $top_line['parental_clsname'] .'">');
foreach( $query_objects as $query_object ){
$chi_id = $query_object->ID;
if (get_field($image_field_name, $chi_id)) {
print_r(' <div class="one_appartment one_house">');
print_r('  <div class="rel_img"><div class="backfilter" style="background:url('. get_field($image_field_name, $chi_id) .')"></div><a href="'. get_permalink($chi_id) .'"><div class="img cover"><img src="'. get_field($image_field_name, $chi_id) .'" ></div> <span>'. get_the_title($chi_id) .'</span></a></div> ');
print_r(' <'. $top_line['nodetype'] .' class="'. $top_line['clsname'] .'">');
$mid_line_inner = array();
foreach($mid_lines as $row => $innerArray){
	foreach($innerArray as $innerRow => $value){
		$mid_line_inner[$innerRow] = $value;
	}
	if (get_field($mid_line_inner['meta_key_name'], $chi_id)) {
		print_r('  <'. $mid_line_inner['nodetype'] .' class="'. $mid_line_inner['clsname'] .'">'. $mid_line_inner['text'] .'<'. $mid_line_inner['secondary_node'] .'>'. get_field($mid_line_inner['meta_key_name'], $chi_id) .' </'. $mid_line_inner['secondary_node'] .'></'. $mid_line_inner['nodetype'] .'>');
	}
}
print_r(' <a class="btn-details" href="'. get_permalink($chi_id) .'">Перейти </a>');
print_r(' </'. $top_line['nodetype'] .'>');
print_r(' </div>');
}
}
print_r(' </'. $top_line['parent_node'] .'>');
}
};



?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<![endif]-->
<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$uri = $_SERVER['REQUEST_URI'];
if( $uri == '/')
{
$page_title = 'Квартиры в новостроях Одессы';
}
else {
if (stripos($_SERVER['REQUEST_URI'], '?') !== false || stripos($_SERVER['REQUEST_URI'], 'page/') !== false){
$page_title = 'Результаты поиска квартиры в Одессе';
} else {
$page_title = get_the_title();
}
}
?>
<title> <?= $page_title ?> </title>
<meta name="theme-color" content="#6ac2e7">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,minimum-scale=1">
<meta name="keywords" content="">
<meta name="generator" content="" />
<meta name="description" content="" />
<link rel="manifest" href="/manifest.json">
<link id="canonical" rel="canonical" href="<?=$url ?>" />
<link id="uri" href="<?=$uri ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
