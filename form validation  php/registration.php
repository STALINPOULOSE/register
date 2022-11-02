<html>
<head>
</head>
<body><?php
if(isset($_POST["name"]))
{
$name=$_POST["name"];
if($name=="")
{
echo "<h1>Please Enter the name</h1>";
}
else
{
//echo "<h1> welcome to " . $name . "</h1>";
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

$sql = "INSERT INTO edetail (ename)
VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<h1>Employee name save sucessfully</h1>";
echo "<a href='db_select.php'>Click to view the details</a>";
$conn->close();
}
}
else
{
?>
<h2>PHP Form Validation Example</h2>
<form name="registration" method="post" action="registration.php">  
  Name: <input type="text" name="name">
  <br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
}
?>
</body>
</html>