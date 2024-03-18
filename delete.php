<?php
$id = $_GET["id"];//url bata ako lai access gareko 
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$database = "payment_info";

//first step
$con = mysqli_connect($dbhost, $dbuser, $dbpassword , $database);

$query = "delete from user where id=$id";

//second step
mysqli_query($con , $query);

header("Location:display.php");

mysqli_close($con);
?>