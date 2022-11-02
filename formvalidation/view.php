<html>
<head>


</head>
<body>

<h1>details from database</h1>
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
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `store`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["roll_no"]. "</td><td>" . $row["name"]. "</td>";
       echo "<td>" . "<a href='update.php?roll_no=".$row["roll_no"] . "'>update</a>" . "</td>";
     echo "<td>" . "<a href='delete.php?roll_no=".$row["roll_no"] . "'>Delete</a>" . "</td>";

    echo "</tr>"; 
}
} else {
  echo "0 results";
}
mysqli_close($conn);
?>




</table>
</body>

</html>