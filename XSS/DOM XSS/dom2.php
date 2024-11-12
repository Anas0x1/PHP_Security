<!DOCTYPE html>
<html>
<head>
	<title>DOM XSS Example</title>
</head>
<body>
	<h1>DOM XSS Example</h1>

	<p id="greeting">Enter your name:</p>
	<form method="get">
		<input type="text" name="name">
		<input type="submit" value="Submit">
	</form>

	<script>
		// Get the 'name' parameter from the URL
		const params = new URLSearchParams(window.location.search);
		const name = params.get('name');

		// Directly use unescaped user input in the DOM, making it vulnerable to XSS
		if (name) {
			const greeting = "<p>Hello, " + name + "!</p>";
			document.getElementById("greeting").innerHTML = greeting;
		}
	</script>
</body>
</html>
