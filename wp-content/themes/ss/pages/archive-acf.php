<?php get_header();?>
<?php/** * Template Name:  Архив АЦФ
* * @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0 */?>


<div id="archive-filters">
<?php foreach( $GLOBALS['my_query_filters'] as $key => $name ):

	// get the field's settings without attempting to load a value
	$field = get_field_object($key, false, false);


	// set value if available
	if( isset($_GET[ $name ]) ) {

		$field['value'] = explode(',', $_GET[ $name ]);

	}


	// create filter
	?>
	<div class="filter" data-filter="<?php echo $name; ?>">
		<l><label><?php echo $name; ?></label><?php create_field( $field ); ?></l>
	</div>

<?php endforeach; ?>
</div>



    <?php get_footer();?>
