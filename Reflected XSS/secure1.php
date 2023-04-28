<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>secure code</title>
</head>
<body>
<?php   
	session_start();
	echo '<h1>Hello ' . htmlspecialchars($_GET['name']) . '</h1>';  
?>
</body>
</html>