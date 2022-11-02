<html>
<head>
</head>
<body> 
<?php
$name=$_GET["name"];
if($name=="")
{
echo "<h1>Please Enter the name</h1>";
}
else
{
echo "<h1> welcome to " . $name . "</h1>";
}
?>
</body>
</html>