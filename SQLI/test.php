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
$sql = "SELECT name,description FROM products WHERE id='".$id."'";
$result = $conn->query($sql);
if (!empty($result) && $result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) 
{
    //echo "ID: " . $row["id"] . "<br>";
    echo "Name: " . $row["name"] . "<br>";
    echo "Description: " . $row["description"] . "<br>";
}
}
$conn->close();
}
?>