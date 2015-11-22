<!DOCTYPE html>
<html>
<head>
	<title>Hello, world!</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
	body {
		background-color: white;
		text-align: center;
		padding: 50px;
		font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	}
	</style>
</head>
<body>
	<img id="logo" src="logo.png" alt="logo.png"/>
	<h1><?php echo "Hello, world!"; ?></h1>
	<?php if($_ENV["HOSTNAME"]) {?>Container <?php echo $_ENV["HOSTNAME"]; ?><?php } ?>
</body>
</html>