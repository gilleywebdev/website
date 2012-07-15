<?php // SEO ?>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">

<?php // Styles ?>
<link rel="stylesheet" href="/styles/css/styles.css" type="text/css">

<?php // Vanity ?>
<link rel="shortcut icon" href="favicon.ico">
<?php
	// Facebook thumnbail on production
	if(Kohana::$environment !== Kohana::PRODUCTION && $_SERVER['SERVER_NAME'])
	{
		echo '<meta property="og:image" content="'.$_SERVER['SERVER_NAME'].'/graphics/fb-thumb.jpg">';
	}
?>