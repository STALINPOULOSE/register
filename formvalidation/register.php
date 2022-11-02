<html>
<head>


</head>
<body>
<?php
if(isset($_POST["name"]))
{
$name=$_POST["name"];
if($name=="")
{
echo "<h1>Please Enter the name</h1>";
}
else
{

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

$sql = "INSERT INTO store (name)
VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<a href='view.php'>view</a>";

$conn->close();
}
}
?>
<form name="registration" method="post" action="register.php">

name:<input type="text" name="name" ></br>

<input type="submit" name="register here" value="register here">















</form>
</body>

</html>