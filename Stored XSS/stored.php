<!DOCTYPE html>
<html>
<head>
	<title>XSS Stored</title>
</head>
<body>

	<h1>XSS Vulnerability Example - Comments</h1>

	<?php
		// Connect to the database
		$db = new PDO('mysql:host=localhost;dbname=test', 'root', '');

		// Check if a comment was submitted
		if (isset($_POST['comment'])) {
			// Get the user's comment from the form
			$comment = $_POST['comment'];

			// Sanitize the comment to prevent XSS attacks
			//$comment = htmlspecialchars($comment);

			// Insert the comment into the database
			$stmt = $db->prepare("INSERT INTO comments(comment) VALUES (:comment)");
			$stmt->bindParam(':comment', $comment);
			$stmt->execute();
		}

		// Fetch all comments from the database
		$stmt = $db->prepare("SELECT comment FROM comments");
		$stmt->execute();
		$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

		// Output all comments to the page
		echo "<ul>";
		foreach ($comments as $comment) {
			echo "<li>" . $comment['comment'] . "</li>";
		}
		echo "</ul>";
	?>

	<form method="post">
		<label for="comment">Leave a comment:</label>
		<textarea name="comment" id="comment"></textarea>
		<button type="submit">Submit</button>
	</form>

	<p>Try entering some HTML or JavaScript code into the comment field above to see how it gets executed on this page.</p>

</body>
</html>