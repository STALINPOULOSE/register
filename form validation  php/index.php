<html>
<head>
<title>welcome to PHP Programming </title>
</head>
<body>
<center>
<h1>
<?php
$count=0;
do
{
$count++;
?>
<h1>
<?php echo "The number is" . $count . ""; ?>
</h1>
<?php
}while($count<10);
?>
</h1>
</center>
</body>
</html>