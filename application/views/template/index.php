<!DOCTYPE html>
<html>
	<head>
		<?php
			echo View::factory('includes/header')
				->bind('title', $title)
				->bind('description', $description);
		?>
		<link rel="stylesheet" href="/styles/css/index.css" type="text/css">
	</head>
	<body id="<?php echo $pagename; ?>">
		<div id="wrapper">
			<div id="content"><?php echo $content; ?></div>
		</div>
	</body>
</html>