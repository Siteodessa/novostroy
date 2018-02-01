<?php
/**
 * WordPress Administration Template Footer
 *
 * @package WordPress
 * @subpackage Administration
 */

// don't load directly
if ( !defined('ABSPATH') )
	die('-1');

/**
 * @global string $hook_suffix
 */
global $hook_suffix;
?>

<div class="clear"></div></div><!-- wpbody-content -->
<div class="clear"></div></div><!-- wpbody -->
<div class="clear"></div></div><!-- wpcontent -->

<div id="wpfooter" role="contentinfo">
	<?php
	/**
	 * Fires after the opening tag for the admin footer.
	 *
	 * @since 2.5.0
	 */
	do_action( 'in_admin_footer' );
	?>
	<p id="footer-left" class="alignleft">
		<?php
		$text = sprintf( __( 'Thank you for creating with <a href="%s">WordPress</a>.' ), __( 'https://wordpress.org/' ) );
		/**
		 * Filters the "Thank you" text displayed in the admin footer.
		 *
		 * @since 2.8.0
		 *
		 * @param string $text The content that will be printed.
		 */
		echo apply_filters( 'admin_footer_text', '<span id="footer-thankyou">' . $text . '</span>' );
		?>
	</p>
	<p id="footer-upgrade" class="alignright">
		<?php
		/**
		 * Filters the version/update text displayed in the admin footer.
		 *
		 * WordPress prints the current version and update information,
		 * using core_update_footer() at priority 10.
		 *
		 * @since 2.3.0
		 *
		 * @see core_update_footer()
		 *
		 * @param string $content The content that will be printed.
		 */
		echo apply_filters( 'update_footer', '' );
		?>
	</p>
	<div class="clear"></div>
</div>
<?php
/**
 * Prints scripts or data before the default footer scripts.
 *
 * @since 1.2.0
 *
 * @param string $data The data to print.
 */
do_action( 'admin_footer', '' );

/**
 * Prints scripts and data queued for the footer.
 *
 * The dynamic portion of the hook name, `$hook_suffix`,
 * refers to the global hook suffix of the current page.
 *
 * @since 4.6.0
 */
do_action( "admin_print_footer_scripts-{$hook_suffix}" );

/**
 * Prints any scripts and data queued for the footer.
 *
 * @since 2.8.0
 */
do_action( 'admin_print_footer_scripts' );

/**
 * Prints scripts or data after the default footer scripts.
 *
 * The dynamic portion of the hook name, `$hook_suffix`,
 * refers to the global hook suffix of the current page.
 *
 * @since 2.8.0
 */
do_action( "admin_footer-{$hook_suffix}" );

// get_site_option() won't exist when auto upgrading from <= 2.7
if ( function_exists('get_site_option') ) {
	if ( false === get_site_option('can_compress_scripts') )
		compression_test();
}

?>

<div class="clear"></div></div><!-- wpwrap -->

<script type="text/javascript">if(typeof wpOnload=='function')wpOnload();

jQuery('body.admin-bar.post-type-objects.taxonomy-category tr.form-field.term-description-wrap').detach();

jQuery('body.admin-bar.post-type-objects.taxonomy-category table.form-table tbody').after('<div id="afteradmin"></div>');
jQuery('body.admin-bar.post-type-objects.taxonomy-category table.form-table tbody').after('<div id="afteradmin2"></div>');
setTimeout(function(){
	jQuery('#afteradmin').append(jQuery('tr#acf-отделка'));
jQuery('#afteradmin').append(jQuery('tr#acf-коммерческие_помещения'));
jQuery('#afteradmin').append(jQuery('tr#acf-охраняемая_территория'));
jQuery('#afteradmin').append(jQuery('tr#acf-паркинг_подземный'));
jQuery('#afteradmin').append(jQuery('tr#acf-парковка'));
jQuery('#afteradmin').append(jQuery('tr#acf-детские_площадки'));
jQuery('#afteradmin').append('<p class="closy">Рядом есть:</p>');
jQuery('#afteradmin').append(jQuery('tr#acf-рядом_есть_детский_сад_'));
jQuery('#afteradmin').append(jQuery('tr#acf-рядом_есть_супермаркет'));
jQuery('#afteradmin').append(jQuery('tr#acf-рядом_есть_аптека'));
jQuery('#afteradmin').append(jQuery('tr#acf-рядом_есть_фитнес-клуб'));
jQuery('#afteradmin').append(jQuery('tr#acf-рядом_есть_сквер_парк_зеленая_зона'));

},1400);
setTimeout(function(){
jQuery('#afteradmin2').append(jQuery('tr#acf-фото'));
jQuery('#afteradmin2').append(jQuery('tr#acf-добавить_фото2'));
jQuery('#afteradmin2').append(jQuery('tr#acf-добавить_фото3'));
jQuery('#afteradmin2').append(jQuery('tr#acf-добавить_фото4'));
jQuery('#afteradmin2').append(jQuery('tr#acf-добавить_фото5'));
jQuery('#afteradmin2').append(jQuery('tr#acf-добавить_фото6'));
jQuery('#afteradmin2').append(jQuery('tr#acf-добавить_фото7'));
jQuery('#afteradmin2').append(jQuery('tr#acf-добавить_фото8'));
jQuery('#afteradmin2').append(jQuery('tr#acf-добавить_фото9'));
jQuery('#afteradmin2').append(jQuery('tr#acf-добавить_фото10'));
jQuery('#afteradmin2, #afteradmin').wrapAll('<div id="adm_sect"></div>');
jQuery('#afteradmin2, #afteradmin').wrapAll('<div id="desc_photo"></div>');

},1600);
setTimeout(function(){
jQuery('tr.form-field.field.field_type-image.field_key-field_5a6caa8ec0004').addClass('dno');
jQuery('tr.form-field.field.field_type-image.field_key-field_5a6caa96c0009').addClass('dno');
jQuery('tr.form-field.field.field_type-image.field_key-field_5a6caa93c0008').addClass('dno');
jQuery('tr.form-field.field.field_type-image.field_key-field_5a6caa93c0008').addClass('dno');
jQuery('tr.form-field.field.field_type-image.field_key-field_5a6caa91c0005').addClass('dno');
jQuery('tr.form-field.field.field_type-image.field_key-field_5a6caa92c0006').addClass('dno');
jQuery('tr.form-field.field.field_type-image.field_key-field_5a6caa93c0007').addClass('dno');
jQuery('tr.form-field.field.field_type-image.field_key-field_5a6caaf3a6b99').addClass('dno');
jQuery('tr.form-field.field.field_type-image.field_key-field_5a6caafca6b9a').addClass('dno');
jQuery('tr.form-field.field.field_type-image.field_key-field_5a6cab10a6b9b').addClass('dno');
jQuery('tr.form-field.field.field_type-text.field_key-field_5a6b92e927a81').append(jQuery('div#desc_photo'));
jQuery('tr.form-field.field.field_type-image.field_key-field_5a6cab10a6b9b').after('<div id="photoadder"><img class="plusico" src="/wp-content/uploads/2018/01/plus.png"></div>');
jQuery('body.auto-fold.admin-bar.post-type-objects .inside').first().append('<div id="photos"></div>');
	jQuery('body').find('#photos').append(jQuery('div#acf-фото'));
	jQuery('body').find('#photos').append(jQuery('div#acf-фото2'));
	jQuery('body').find('#photos').append(jQuery('div#acf-фото3'));
	jQuery('body').find('#photos').append(jQuery('div#acf-фото4'));
	jQuery('body').find('#photos').append(jQuery('div#acf-фото5'));
	jQuery('body').find('#photos').append(jQuery('div#acf-фото6'));
	jQuery('body').find('#photos').append(jQuery('div#acf-фото7'));
	jQuery('body').find('#photos').append(jQuery('div#acf-фото8'));
	jQuery('body').find('#photos').append(jQuery('div#acf-фото9'));
	jQuery('body').find('#photos').append(jQuery('div#acf-фото10'));

jQuery('#photoadder').on('click', 'img', function(){
	jQuery('body').find('.dno').first().removeClass('dno');
});
},400);

jQuery(document).ready(function(){

	setTimeout(function(){
    jQuery("h2.hndle.ui-sortable-handle span").text(function(index, text) {
    return text.replace("рубрики", "дома");

    });
console.log('');
	},1700);
});

</script>
</body>
</html>
