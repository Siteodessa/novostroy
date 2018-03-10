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
	<?php //wp_head(); ?>
