<?php
$dbhostname = "localhost";
$dbusername = "Your_Username";
$dbpassword = "Your_Password";
$dbname = "test";
if (isset($_GET['id'])){
    $id = $_GET['id'];
    // Create connection
    $conn = new mysqli($dbhostname, $dbusername, $dbpassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Prepare a statement with a parameter placeholder
    $sql = "SELECT name, description FROM products WHERE id=?";
    $stmt = $conn->prepare($sql);
    // Bind the parameter to the statement
    $stmt->bind_param("i", $id);
    // Execute the statement
    $stmt->execute();
    // Get the result
    $result = $stmt->get_result();
    if (!empty($result) && $result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "Name: " . $row["name"] . "<br>";
            echo "Description: " . $row["description"] . "<br>";
        }
    } else {
        echo "No results found.";
    }
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
