<html>
<head>


</head>
<body>
<?php
$id=$_GET["roll_no"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "delete from store where roll_no='$id'";
if ($conn->query($sql) === TRUE) {
  //echo "Deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<h1>Employee deleted sucessfully</h1>";
echo "<a href='view.php'>Click to view the details</a>"
?>
</body>



</html>