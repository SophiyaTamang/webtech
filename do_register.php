<?php

$name = $_GET['name'];
$gender = $_GET['gender'];
$address = $_GET['address'];
$email = $_GET['email'];
$mbnum = $_GET['mbnum'];
$pin_num = $_GET['pin_num'];
$card_type = $_GET['card_type'];
$c_number = $_GET['c_number'];
$exp_date = $_GET['exp_date'];
$cvv = $_GET['cvv'];

// echo '<h1> hi </h1>'. $name . " " . $mbnum . $address . $email . $pin_num . $cvv ;

$dbhost = "localhost";
$dbuser = "root";
$dbpassword= "";
$database = "payment_info";

$connection = mysqli_connect($dbhost , $dbuser , $dbpassword , $database);

if($connection) {
    echo"database connected";
}else{
    echo "problem to connect database ";
}

$sql = "insert into user (name , gender , address , email , mobile_no , 
pincode , card_type , card_no , exp_date , cvv) values ('$name', '$gender' , '$address','$email' , '$mbnum' , '$pin_num' , '$card_type'
, '$c_number' , '$exp_date' , '$cvv')";


if(mysqli_query($connection, $sql)) {
    echo " thank you!";
}else{
    echo"sorry not connected";
}
mysqli_close($connection);

?>

 <!-- <tr>
 <td>
 <?php echo $name; ?> 
 </td>
 <td>
 <?php echo $mbnum; ?>
</td>

<tr> -->

