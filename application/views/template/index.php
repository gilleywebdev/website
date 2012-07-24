<!DOCTYPE html>
<html>
	<head>
		<?php
			echo View::factory('includes/header')
				->bind('title', $title)
				->bind('description', $description);
		?>
	</head>
	<body class="<?php echo $pagename; ?>_page">
		<div class="wrapper">
			<div class="content"><?php echo $content; ?></div>
		</div>
	</body>
</html>
<?php Scripts::output() ?>