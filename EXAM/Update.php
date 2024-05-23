<?php
$id=$_GET['Update_id'];
$con=mysqli_connect("localhost","root","","cgs");

$sql=mysqli_query($con,"DELETE FROM register Where id=$id");

if ($sql) {
	header("location:Register.php");
}
?>

