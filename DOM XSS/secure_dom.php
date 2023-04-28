<!DOCTYPE html>
<html>
<head>
	DOM XSS vulnerability example
	<title>DOM XSS</title>
</head>
<body>
<form method="get">
	<input type="text" name="name">
	<input type="submit">
	<?php 
		if (isset($_GET['name']))
		{
			$name = htmlentities($_GET['name']);
			echo '<script>document.write("<p>Hello, ' . $name . '!</p>");</script>';
		}
	?>
</form>
</body>
</html>