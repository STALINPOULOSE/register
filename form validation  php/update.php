<html>
<head>
</head>
<body>
<?php
if(!isset($_POST["name"]))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";
$id=$_GET["id"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `edetail` where id='$id'";
$name="";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) { 
$name=$row["ename"];
}
} 
else {
  echo "0 results";
}
mysqli_close($conn);

?>
<form name="update_registration" method="POST" action="update.php">
Name: <input type="text" name="name" value="<?php echo $name; ?>">
  <br>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
  <input type="submit" name="submit" value="Submit">  
</form>
<?Php
}
else
{
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
$name=$_POST['name'];
$id=$_POST['id'];
$sql = "update  edetail set ename='$name' where id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<h1>Employee name save sucessfully</h1>";
echo "<a href='db_select.php'>Click to view the details</a>";
$conn->close();
}
?>
</body>
</html>