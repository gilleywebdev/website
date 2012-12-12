<!-- Encoding -->
<meta charset="UTF-8">

<!-- SEO -->
<title><?php echo $title ?></title>
<meta name="description" content="<?php echo $description ?>">

<!-- Styles -->
<?php Styles::output('styles', array(
		array('normalize', Styles::BASE),
		array('template', Styles::TEMPLATE),
	));  ?>
	
<?php
/* Styles::output()
		->add('normalize', Styles::BASE)
		->add('template', Styles::TEMPLATE);
*/
?>

<!-- Vanity -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Facebook info -->
<?php if(Kohana::$environment === Kohana::PRODUCTION): ?>
	<meta property="og:image" content="<?php echo DOMAIN.'/graphics/fb-thumb.jpg' ?> ">
<?php endif;