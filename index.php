<?php session_start();
 error_reporting(E_ALL & ~E_NOTICE);
 ini_set('display_errors', 'Off');?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="GET" action="">
<form method="GET" action="">
<input type='text'name="a" placeholder="Введите число"><br>
<input type='text'name="b" placeholder="Введите число"><br>
<input type="submit" name="+" value="+">
<input type="submit" name="-" value="-">
<input type="submit" name="/" value="/">
<input type="submit" name="*" value="*"><br>
</form>

<?php
$a=$_GET["a"];
$b=$_GET["b"];
$c=$_GET["c"];

	if(isset($_GET['+'])){
		$c=$a+$b;}
	if(isset($_GET['-'])){
		$c=$a-$b;}
	if(isset($_GET['*'])){
		$c=$a*$b;}
	if(isset($_GET['/'])){
		$c=$a/$b;}
		echo $c;
?>


</body>
</html>
