<!-- Encoding -->
<meta charset="UTF-8">

<!-- SEO -->
<title><?php echo $title ?></title>
<meta name="description" content="<?php echo $description ?>">

<!-- Styles -->
<?php Styles::output() ?>

<!-- Vanity -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Facebook info -->
<?php if(Kohana::$environment === Kohana::PRODUCTION): ?>
	<meta property="og:image" content="<?php echo DOMAIN.'/graphics/fb-thumb.jpg' ?> ">
<?php endif;