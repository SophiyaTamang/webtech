<?php
require 'database.php';
$id = $_GET["id"];

//query
$query = "select * from user where id='$id'";

$result = mysqli_query($connection , $query);

$row = mysqli_fetch_array($result);
?>

<form action="update.php" method="post" id="payment_form" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div id="form_element">
        <h2>User Information</h2>
        <div class="useri">
            <label>Name:</label>
            <input type="text" name="name"  value ="<?php echo $row['name'] ?>">

        </div>
        <div class="useri">
            <fieldset>
                <legend>select your gender </legend>
                Male<input type="radio" name="gender" id="male" >
                Female<input type="radio" name="gender" id="female">
            </fieldset>
        </div>
        <div class="useri">
            <label>Address:</label>
             <textarea name="address" id="address" cols="50" rows="5" placeholder="enter your address" value ="<?php echo $row['address'] ?>"></textarea>
        </div>
        <div class="useri">
            <label>Email:</label>
             <input type="email" name="email" id="email" placeholder="xyz@gmail.com" value ="<?php echo $row['email'] ?>" />
        </div>
        <div class="useri">
            <label>mobile no:</label>
            <input type="number" name="mbnum" id="mbnum" value ="<?php echo $row['mobile_no'] ?>"/>
        </div>
        <div class="useri">
            <label>Pincode:</label>
            <input type="number" name="pin_num" id="pin_num" placeholder="12456" value ="<?php echo $row['pincode'] ?>"/>
        </div>
        
            <div class="useri">
                <label>Card type:</label>
                <select name="card_type" id="card_type" value ="<?php echo $row['card_type'] ?>">
                    <option value="">--Select a card type--</option>
                    <option value="visa">Visa</option>
                    <option value="Mastercard">Mastercard</option>
                    <option value="Americanexp">American Express</option>
                </select>
            </div>
            <h2>Payment Information</h2>
            <div class="useri">
                <label>Card number: </label>
                <input type="number" name="c_number" id="c_number" value ="<?php echo $row['card_no'] ?>" />
            </div>
            <div class="useri">
                <label>Expiration Date: </label>
                 <input type="date" name="exp_date" id="exp_date" value ="<?php echo $row['exp_date'] ?>" />
            </div>
            <div class="useri">
                <label>CVV: </label>
                 <input type="password" name="cvv" id="cvv" value ="<?php echo $row['cvv'] ?>">
            </div>
            <div class="useri">
                <input type="submit" value="update" >
            </div>
        </div>
    </form>
    </div>