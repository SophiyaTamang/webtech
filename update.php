<?php
//GETTING THE DB CONFIG DETAILS
require "database.php";

$id = $_POST['id'];
$name = $_POST['name'];
//$gender = $_POST['gender'];
$address = $_POST['address'];
$email = $_POST['email'];
$mbnum = $_POST['mbnum'];
$pin_num = $_POST['pin_num'];
$card_type = $_POST['card_type'];
$c_number = $_POST['c_number'];
$exp_date = $_POST['exp_date'];
$cvv = $_POST['cvv'];

//QUERT TO UPDATE RECORD INTO DATABASE
$query = "update user set name = '$name', address = '$address', email = '$email', mobile_no = '$mbnum', pincode = '$pin_num',
card_type = '$card_type',
card_no = '$c_number',
exp_date = '$exp_date',
cvv = '$cvv'
where id ='$id'";

mysqli_query($connection , $query);
header("Location:display.php");
