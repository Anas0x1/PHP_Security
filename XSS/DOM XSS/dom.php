<!DOCTYPE html>
<html>
<head>
	<title>DOM XSS Vulnerability Example</title>
</head>
<body>
<form method="get">
	<input type="text" name="name">
	<input type="submit">
</form>

<script>
	// Get the 'name' parameter from the URL
	const params = new URLSearchParams(window.location.search);
	const name = params.get('name');

	// Directly write unescaped user input to the page, making it vulnerable to XSS
	if (name) {
		document.write("<p>Hello, " + name + "!</p>");
	}
</script>
</body>
</html>
