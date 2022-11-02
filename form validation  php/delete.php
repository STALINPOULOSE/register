<html>
<head>

</head>
<body>
<?php
$id=$_GET["id"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "delete from edetail where id='$id'";
if ($conn->query($sql) === TRUE) {
  //echo "Deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<h1>Employee deleted sucessfully</h1>";
echo "<a href='db_select.php'>Click to view the details</a>"
?>
</body>
</html>