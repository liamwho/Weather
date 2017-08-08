<?php 
$today = date('Ymd');
$stno = $_POST['stno'];
$mintp = $_POST['mintp'];
$maxtp = $_POST['maxtp'];
$rain = $_POST['rain'];
$wind = $_POST['wind'];



$connection = mysqli_connect("localhost","link192_admin","*192*");
mysqli_select_db($connection,"link192_weather");
$result=mysqli_query($connection,"UPDATE weatherstationdata SET maxtp=$maxtp, mintp=$mintp, rain=$rain, wdsp=$wind
	WHERE date = $today 
	AND stno = $stno"
);

mysqli_close($connection);

header("Location: admin.php");

?>
