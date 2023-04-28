<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Test2
	</title>
</head>
<body>
	<form id="form">
		<input type="text" name="search">
		<input type="submit">
	</form>
	<?php
		session_start();
		if (array_key_exists('search', $_GET) && $_GET['search'] != NULL)
		{
			echo '<pre>No result for : ' . htmlentities($_GET['search']) . '</pre>';
		}
	?>
</body>
</html>

