<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword= "";
$database = "payment_info";

//connection
$connection = mysqli_connect($dbhost , $dbuser , $dbpassword , $database);

//query
$query = "select * from user";

$result = mysqli_query($connection , $query);
?>
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>gender</th>
        <th>address</th>
        <th>email</th>
        <th>mobile no</th>
        <th>pin code</th>
        <th>card_type</th>
        <th>card_no</th>
        <th>expiry date</th>
        <th>cvv</th>
        <th>action</th>
    </tr>
<?php
while($row = mysqli_fetch_assoc($result)){
?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['address'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['mobile_no'];?></td>
        <td><?php echo $row['pincode'];?></td>
        <td><?php echo $row['card_type'];?></td>
        <td><?php echo $row['card_no'];?></td>
        <td><?php echo $row['exp_date'];?></td>
        <td><?php echo $row['cvv'];?></td>
        <td>
            <a href="delete.php?id=<?php echo $row['id']; ?>">delete</a> 
            &nbsp;
            <a href="edit.php?id=<?php echo $row['id'];?>">edit</a>
        </td>
    </tr>

<?php
}

mysqli_close($connection);
//connection close
?>
</table>