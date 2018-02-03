<?php
/**
 * WordPress Administration Template Header
 *
 * @package WordPress
 * @subpackage Administration
 */

@header('Content-Type: ' . get_option('html_type') . '; charset=' . get_option('blog_charset'));
if ( ! defined( 'WP_ADMIN' ) )
	require_once( dirname( __FILE__ ) . '/admin.php' );

/**
 * In case admin-header.php is included in a function.
 *
 * @global string    $title
 * @global string    $hook_suffix
 * @global WP_Screen $current_screen
 * @global WP_Locale $wp_locale
 * @global string    $pagenow
 * @global string    $update_title
 * @global int       $total_update_count
 * @global string    $parent_file
 */
global $title, $hook_suffix, $current_screen, $wp_locale, $pagenow,
	$update_title, $total_update_count, $parent_file;

// Catch plugins that include admin-header.php before admin.php completes.
if ( empty( $current_screen ) )
	set_current_screen();

get_admin_page_title();
$title = esc_html( strip_tags( $title ) );

if ( is_network_admin() ) {
	/* translators: Network admin screen title. 1: Network name */
	$admin_title = sprintf( __( 'Network Admin: %s' ), esc_html( get_network()->site_name ) );
} elseif ( is_user_admin() ) {
	/* translators: User dashboard screen title. 1: Network name */
	$admin_title = sprintf( __( 'User Dashboard: %s' ), esc_html( get_network()->site_name ) );
} else {
	$admin_title = get_bloginfo( 'name' );
}

if ( $admin_title == $title ) {
	/* translators: Admin screen title. 1: Admin screen name */
	$admin_title = sprintf( __( '%1$s &#8212; WordPress' ), $title );
} else {
	/* translators: Admin screen title. 1: Admin screen name, 2: Network or site name */
	$admin_title = sprintf( __( '%1$s &lsaquo; %2$s &#8212; WordPress' ), $title, $admin_title );
}

/**
 * Filters the title tag content for an admin page.
 *
 * @since 3.1.0
 *
 * @param string $admin_title The page title, with extra context added.
 * @param string $title       The original page title.
 */
$admin_title = apply_filters( 'admin_title', $admin_title, $title );

wp_user_settings();

_wp_admin_html_begin();
?>
<title><?php echo $admin_title; ?></title>
<?php

wp_enqueue_style( 'colors' );
wp_enqueue_style( 'ie' );
wp_enqueue_script('utils');
wp_enqueue_script( 'svg-painter' );

$admin_body_class = preg_replace('/[^a-z0-9_-]+/i', '-', $hook_suffix);
?>
<script type="text/javascript">
addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof wpOnload!='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
var ajaxurl = '<?php echo admin_url( 'admin-ajax.php', 'relative' ); ?>',
	pagenow = '<?php echo $current_screen->id; ?>',
	typenow = '<?php echo $current_screen->post_type; ?>',
	adminpage = '<?php echo $admin_body_class; ?>',
	thousandsSeparator = '<?php echo addslashes( $wp_locale->number_format['thousands_sep'] ); ?>',
	decimalPoint = '<?php echo addslashes( $wp_locale->number_format['decimal_point'] ); ?>',
	isRtl = <?php echo (int) is_rtl(); ?>;
</script>
<style>
tr.form-field.term-description-wrap{ opacity:0; display: :none}#edittag {
    max-width: 100% !important;
}table.form-table tbody {
    display: grid;
    grid-template-columns: 1fr 800px;
}
body.admin-bar.post-type-objects.taxonomy-category table.form-table {
    /* display:  grid; */
    grid-template-columns:  1fr 270px;
    grid-gap:  80px;
}
tr.form-field.term-slug-wrap {
    display:  none;
}
body.admin-bar.post-type-objects.taxonomy-category p.description{
	display: none
}



body.admin-bar.post-type-objects.taxonomy-category img.acf-image-image {
    width: 140px;
}div#afteradmin2 tr.dno{
	display: none;
}
.dno{
	display: none;
}
div#wp-wysiwyg-acf-field-описание-5a6cb79f61776-wrap {
    width: 470px;
}
div#desc_photo {
    display: grid;
    grid-template-columns: 1fr 1fr 250px;
    background: #e1e1e1;
    padding: 20px;
}
tr.form-field.field.field_type-wysiwyg.field_key-field_5a6b93350e267 {
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 40px 1fr;
    background: #b4acac2b;
}
tr.form-field.field.field_type-wysiwyg.field_key-field_5a6b93350e267 label {
    padding: 13px;
}
div#afteradmin2 tr {
    display: grid;
    grid-template-columns: 1fr;
    padding: 0 3px;
    margin: 0 4px;
}
div#afteradmin tr {
    height: 10px !important;
    display: block;
    margin: 0  0 12px;
}

tr.form-field.field.field_type-true_false.field_key-field_5a6ca1b35c986 {
    padding: 20px 0;
}
tr.form-field.field.field_type-image.field_key-field_5a6b937a0e269 {
    display:  grid;
    grid-template-columns: 60px 1fr 1fr;
}
img.plusico:hover {
    cursor: pointer;
    background: transparent;
}img.plusico {
    width: 30px;
    position: relative;
    top: -20px;
    left: 5px;
    background: white;
    border-radius: 100%;
    transition: .4s;
}

tr.form-field.field.field_type-text.field_key-field_5a6b92e927a81

{
	background: #e1e1e1;
}
tr.form-field.field.field_type-text.field_key-field_5a6b92c927a7f { padding:0 20px;background: #dbdbdb; } tr.form-field.field.field_type-text.field_key-field_5a6c9641f1813 { padding:0 20px;background: #d2d1d1; } tr.form-field.field.field_type-text.field_key-field_5a6c9657f1814 { } tr.form-field.field.field_type-text.field_key-field_5a6c9657f1814 { padding:0 20px;background: #b4b4b4; }
tr#acf-цена_однокомнатных_квартир_от { padding:0 20px;background: #e4e2e2; } tr.form-field.field.field_type-number.field_key-field_5a6c97a5fa7c0 { padding:0 20px;background: #d2cdcd; } tr.form-field.field.field_type-number.field_key-field_5a6c97db191ff { padding:0 20px;background: #b4acac; }
p.closy {
    padding: 4px;
    margin: 50px 0 -20px;
    background: #d2cdcd;
}
div#photos {
    display: grid;
    grid-template-rows: 160px;
    grid-template-columns: 120px 120px 120px 120px 120px 120px 120px 120px 120px 120px;
    grid-gap: 2px;
}
div#photos p {
    width: 160px;
    transform: translate(0%, 130%);
}
div#photos div.field {
    border: 1px solid #e14d43;
    overflow: hidden;
}
div#photos p input {
    transform: translate(-1%, -20px);
    background: #e14d43;
    color: #fff;
    font-size: 0.8em;
    padding: 0 2px;
}
body.auto-fold.admin-bar.post-type-objects img.acf-image-image {
    position: absolute;
    left: 0;
    top: -10px;
    min-width: 120px;
}
div#photos label {
    display:  none;
}div#photos label {
    display:  none;
}
</style>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php

/**
 * Enqueue scripts for all admin pages.
 *
 * @since 2.8.0
 *
 * @param string $hook_suffix The current admin page.
 */
do_action( 'admin_enqueue_scripts', $hook_suffix );

/**
 * Fires when styles are printed for a specific admin page based on $hook_suffix.
 *
 * @since 2.6.0
 */
do_action( "admin_print_styles-{$hook_suffix}" );

/**
 * Fires when styles are printed for all admin pages.
 *
 * @since 2.6.0
 */
do_action( 'admin_print_styles' );

/**
 * Fires when scripts are printed for a specific admin page based on $hook_suffix.
 *
 * @since 2.1.0
 */
do_action( "admin_print_scripts-{$hook_suffix}" );

/**
 * Fires when scripts are printed for all admin pages.
 *
 * @since 2.1.0
 */
do_action( 'admin_print_scripts' );

/**
 * Fires in head section for a specific admin page.
 *
 * The dynamic portion of the hook, `$hook_suffix`, refers to the hook suffix
 * for the admin page.
 *
 * @since 2.1.0
 */
do_action( "admin_head-{$hook_suffix}" );

/**
 * Fires in head section for all admin pages.
 *
 * @since 2.1.0
 */
do_action( 'admin_head' );

if ( get_user_setting('mfold') == 'f' )
	$admin_body_class .= ' folded';

if ( !get_user_setting('unfold') )
	$admin_body_class .= ' auto-fold';

if ( is_admin_bar_showing() )
	$admin_body_class .= ' admin-bar';

if ( is_rtl() )
	$admin_body_class .= ' rtl';

if ( $current_screen->post_type )
	$admin_body_class .= ' post-type-' . $current_screen->post_type;

if ( $current_screen->taxonomy )
	$admin_body_class .= ' taxonomy-' . $current_screen->taxonomy;

$admin_body_class .= ' branch-' . str_replace( array( '.', ',' ), '-', floatval( get_bloginfo( 'version' ) ) );
$admin_body_class .= ' version-' . str_replace( '.', '-', preg_replace( '/^([.0-9]+).*/', '$1', get_bloginfo( 'version' ) ) );
$admin_body_class .= ' admin-color-' . sanitize_html_class( get_user_option( 'admin_color' ), 'fresh' );
$admin_body_class .= ' locale-' . sanitize_html_class( strtolower( str_replace( '_', '-', get_user_locale() ) ) );

if ( wp_is_mobile() )
	$admin_body_class .= ' mobile';

if ( is_multisite() )
	$admin_body_class .= ' multisite';

if ( is_network_admin() )
	$admin_body_class .= ' network-admin';

$admin_body_class .= ' no-customize-support no-svg';

?>
</head>
<?php
/**
 * Filters the CSS classes for the body tag in the admin.
 *
 * This filter differs from the {@see 'post_class'} and {@see 'body_class'} filters
 * in two important ways:
 *
 * 1. `$classes` is a space-separated string of class names instead of an array.
 * 2. Not all core admin classes are filterable, notably: wp-admin, wp-core-ui,
 *    and no-js cannot be removed.
 *
 * @since 2.3.0
 *
 * @param string $classes Space-separated list of CSS classes.
 */
$admin_body_classes = apply_filters( 'admin_body_class', '' );
?>
<body class="wp-admin wp-core-ui no-js <?php echo $admin_body_classes . ' ' . $admin_body_class; ?>">
<script type="text/javascript">
	document.body.className = document.body.className.replace('no-js','js');
</script>

<?php
// Make sure the customize body classes are correct as early as possible.
if ( current_user_can( 'customize' ) ) {
	wp_customize_support_script();
}
?>

<div id="wpwrap">
<?php require(ABSPATH . 'wp-admin/menu-header.php'); ?>
<div id="wpcontent">

<?php
/**
 * Fires at the beginning of the content section in an admin page.
 *
 * @since 3.0.0
 */
do_action( 'in_admin_header' );
?>

<div id="wpbody" role="main">
<?php
unset($title_class, $blog_name, $total_update_count, $update_title);

$current_screen->set_parentage( $parent_file );

?>

<div id="wpbody-content" aria-label="<?php esc_attr_e('Main content'); ?>" tabindex="0">
<?php

$current_screen->render_screen_meta();

if ( is_network_admin() ) {
	/**
	 * Prints network admin screen notices.
	 *
	 * @since 3.1.0
	 */
	do_action( 'network_admin_notices' );
} elseif ( is_user_admin() ) {
	/**
	 * Prints user admin screen notices.
	 *
	 * @since 3.1.0
	 */
	do_action( 'user_admin_notices' );
} else {
	/**
	 * Prints admin screen notices.
	 *
	 * @since 3.1.0
	 */
	do_action( 'admin_notices' );
}

/**
 * Prints generic admin screen notices.
 *
 * @since 3.1.0
 */
do_action( 'all_admin_notices' );

if ( $parent_file == 'options-general.php' )
	require(ABSPATH . 'wp-admin/options-head.php');
