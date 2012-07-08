<!DOCTYPE html>
<html>
	<head>
		<?php echo View::factory('includes/header'); ?>
	</head>
	<body id="" class="subpage">
		<div id="wrapper">
			<div id="header">
				<div id="logo"></div>
				<div id="navigation">
					<?php echo View::factory('includes/navigation'); ?>
				</div>
			</div>
			<div id="content"><?php echo $content; ?></div>
			<div id="footer"></div>
		</div>
	</body>
</html>