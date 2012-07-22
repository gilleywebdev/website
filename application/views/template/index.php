<!DOCTYPE html>
<html>
	<head>
		<?php
			echo View::factory('includes/header')
				->bind('title', $title)
				->bind('description', $description);
		?>
	<link rel="stylesheet" type="text/css" href="../template.css">
	</head>
	<body class="<?php echo $pagename; ?>_page">
		<div class="wrapper">
			<div class="content"><?php echo $content; ?></div>
		</div>
	</body>
</html>