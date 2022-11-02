<html>
<head>
<title>welcome to PHP Programming </title>
</head>
<body>
<Center>
<h1>Student Registration Details</h1>
<center><a href="registration.php">Add New</a></center>
<table border="1"> 
<tr>
<td><b>Id</b></td>
<td><b>Name</b></td>
<td><b>Edit</b></td>
<td><b>Delete</b></td>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `edetail`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"]. "</td><td>" . $row["ename"]. "</td>";
       echo "<td>" . "<a href='update.php?id=".$row["id"] . "'>update</a>" . "</td>";
     echo "<td>" . "<a href='delete.php?id=".$row["id"] . "'>Delete</a>" . "</td>";

    echo "</tr>"; 
}
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
</table></center>
</body>
</html>