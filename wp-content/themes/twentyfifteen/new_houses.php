<?php get_header();?>
<?php/** * Template Name:  Строящиеся дома в Одессе
* * @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0 */
?>
<?php
print_r('<link rel="stylesheet" href="'. get_template_directory_uri() .'/stroy-home.css">');
$title = get_the_title();
echo '<h1>'; echo strval($title); echo '</h1>';
function default_houses_behaviour()
{
$posts_per_page = '20';

if (isset( $_GET['район'] )) {$block_value = $_GET['район']; $posts_per_page = '2000';}
else { $block_value = push_all_possible_meta_values("район"); }
if (isset( $_GET['застройщик'] )) {$bld_value = $_GET['застройщик']; $posts_per_page = '2000';}
else { $bld_value = push_all_possible_meta_values("застройщик"); }
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
// bratan - paste right
if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
else { $paged = 1; }
$metaparams = array(
'relation'		=> 'AND',
array( 'key'	 	=> 'house_or_appartment',
'value'	  	=> 'Дом',
'compare' 	=> 'IN', ),
array( 'key'	  	=> 'дом_строится_или_сдан',
'value'	  	=> 'Строится',
'compare' 	=> 'IN', ),
array( 'key'	 	=> 'район',
'value'	  	=> $block_value,
'compare' 	=> 'IN', ),
array( 'key'	  	=> 'застройщик',
'value'	  	=> $bld_value,
'compare' 	=> 'IN', ),
);
$params = array(
'post_type' =>  'objects',
'posts_per_page' => $posts_per_page,
'orderby'    => 'date',
'paged'          => $paged,
'meta_query'	=> $metaparams,
);
query_posts($params); $wp_query->is_archive = true;
$wp_query->is_home = false;
// $counter = 0;
if (empty($block_value)) {
print_r('<div class="exp_block"><div class="explanation"><span class="bl_sr"> Район:  </span> <ul> <a href="/stroyashhiesya-doma-v-odesse/?район=Приморский" ><li>Приморский</li></a> <a href="/stroyashhiesya-doma-v-odesse/?район=Киевский" > <li>Киевский </li> </a> <a href="/stroyashhiesya-doma-v-odesse/?район=Суворовский" ><li>Суворовский </li> </a> <a href="/stroyashhiesya-doma-v-odesse/?район=Малиновский" ><li>Малиновский</li> </a> </ul></div></div>');
}
else{
print_r('<div class="exp_block"><div class="explanation"><span class="bl_sr"> Район:  </span> <ul> <li>'. $block_value .'</li> <a href="/stroyashhiesya-doma-v-odesse/" class="show_all"><li>показать все</li></a></ul></div></div>');
}
print_r('<div class="home-c container stroyashhiesya">');
print_r('<div class="appartment_res">');
print_r('<div class="sub_search_menu"></div>');
print_r('<div class="haus_grid">');
while(have_posts()): the_post();
?>
<div class="haus_grid_elem">
<button class="cta">показать на карте</button>
<button class="cta2">цены</button>
<figure class="im">
<a class="cat_img_h" href="<?= the_permalink()?>"><img style="<?php $vert = get_field('смещение_по_вертикали'); if($vert) { echo 'top:'. $vert .'px ';} else { }?>; <?php $hori =  get_field('смещение_по_горизонтали');  if($hori) { echo 'left:'. $hori .'px ;';} else { } ?>;" src="<?php echo get_field('основное_фото_дома');?>" /></a>
</figure>
<div class="appartment info-banner">
<ul class="app_main">
<li class="name"><strong class="dom_adres"><h2><?php echo the_title();?></h2></strong></li>
<li class="mini-data">
<div class="rayon"><p>Район: </p><strong class="dom_block"><a href="<?php echo '/stroyashhiesya-doma-v-odesse/?район='. get_field('район') .''; ?>"><?php echo  get_field('район') ;?></a></strong></div>
<div class="zastr"><p>Застройщик: </p><strong class="prc"><a href="<?php echo '/stroyashhiesya-doma-v-odesse/?застройщик='. get_field('застройщик') .''; ?>"><?php echo  get_field('застройщик') ;?></a></strong></div>
</li>
<li class="description"><p><?php echo  get_field('короткое_описание') ;?></p></li>
<li class="link">
<div class="app_features">
<div class="commerce"><p>коммерческие помещения</p>
<!-- <span><?php // echo get_field('коммерческие_помещения') ;?></span> -->
</div>
<div class="security"><p>охраняемая территория</p>
<!-- <span><?php// echo  get_field('охраняемая_территория') ;?></span> -->
</div>
<div class="parking"><p>парковка</p>
<!-- <span><?php// echo  get_field('парковка') ;?></span> -->
</div>
</div>
<a href="<?php echo get_the_permalink() ;?>"><button class="btn btn-details">Подробнее</button></a></li>
<?php //echo  edit_post_link(); ;?>
</ul>
</div>
<?php
print_r('</div>');
endwhile;
                            $metaparams = array(
                            'relation'		=> 'AND',
                            array( 'key'	 	=> 'house_or_appartment',
                            'value'	  	=> 'Дом',
                            'compare' 	=> 'IN', ),
                            array( 'key'	  	=> 'дом_строится_или_сдан',
                            'value'	  	=> 'Строится',
                            'compare' 	=> 'IN', ),
                            array( 'key'	 	=> 'район',
                            'value'	  	=> $block_value,
                            'compare' 	=> 'IN', ),
                            array( 'key'	  	=> 'застройщик',
                            'value'	  	=> $bld_value,
                            'compare' 	=> 'IN', ),
                            );
                            $params = array(
                            'post_type' =>  'objects',
                            'posts_per_page' => -1,
                            'orderby'    => 'date',
                            'paged'          => $paged,
                            'meta_query'	=> $metaparams,
                            );
                            query_posts($params); $wp_query->is_archive = true;
                            $wp_query->is_home = false;
                            $field_bld_key = 'field_застройщик';
                            $bld_arr =  array();
                            while(have_posts()): the_post();
                            $field = get_field_object($field_bld_key, get_the_ID()); array_push($bld_arr, $field[value]);
                            endwhile;
                            $bld_arr = array_unique($bld_arr);
                            $all_option_val = '/stroyashhiesya-doma-v-odesse/';
                            $all_option_val_name = 'Все';
                            $all_option_val_title = 'Застройщики: ';
                            if (isset( $_GET['застройщик'] )) {
                            $all_option_val = '/stroyashhiesya-doma-v-odesse/';
                            $all_option_val_name = ''. $_GET['застройщик'] .'';
                            $all_option_val_title = 'Застройщик: ';
                            }
                            if( $bld_arr )
                            {
                            echo '<div class="bld_arr"><span>'. $all_option_val_title .'</span><select class="bld_arr" name="' . $bld_arr['key'] . '">';
                            echo '<option value="'. $all_option_val .'">'. $all_option_val_name .'</option>';
                            foreach( $bld_arr as $k => $v )
                            {
                            if (!empty($v)) echo '<option value="/stroyashhiesya-doma-v-odesse/?застройщик=' . $v . '">' . $v . '</option>';
                            if (empty($v)) echo '<option value="'. $all_option_val .'">Все</option>';
                            }
                            echo '</select></div>';
                            }
print_r('</div>');
print_r('</div>');
print_r('<div class="after_search">');
print_r('</div>');
the_posts_pagination( array( 'mid_size'  => 2 ) );
};
default_houses_behaviour();
get_footer();
?>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/kvarts.js">
</script>
<script src="<?php echo get_template_directory_uri();?>/webpack/dist/bundle.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</div>
<div class="clearfix"> </div>
</div>
<?php get_template_part('footer_novostroy');?>
<?php get_footer();?>
