<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment-form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
    <form action="do_register.php" method="post" enctype="multipart/form-data">
        <div id="form_element">
            <h1>Payment Form</h1>
            <hr>
            <p>required fields are followed by *</p>
            <h2>User Information</h2>
        <div class="useri">
            <label>Name:* </label>
            <input type="text" name="name" required>

        </div>
        <div class="useri">
            <fieldset>
                <legend>select your gender *</legend>
                Male<input type="radio" name="gender" id="male" value="male" required>
                Female<input type="radio" name="gender" id="female" value ="female"required>
            </fieldset>
        </div>
        <div class="useri">
            <label>Address:</label>
             <textarea name="address" id="address" cols="50" rows="5" placeholder="enter your address"></textarea>
        </div>
        <div class="useri">
            <label>Email:*</label>
             <input type="email" name="email" id="email" placeholder="xyz@gmail.com" required>
        </div>
        <div class="useri">
            <label>mobile no:</label>
            <input type="number" name="mbnum" id="mbnum">
        </div>
        <div class="useri">
            <label>Pincode: *</label>
            <input type="number" name="pin_num" id="pin_num" placeholder="12456">
        </div>
        
            <div class="useri">
                <label>Card type: *</label>
                <select name="card_type" id="card_type" required>
                    <option value="">--Select a card type--</option>
                    <option value="visa">Visa</option>
                    <option value="Mastercard">Mastercard</option>
                    <option value="Americanexp">American Express</option>
                </select>
            </div>
            <h2>Payment Information</h2>
            <div class="useri">
                <label>Card number: * </label>
                <input type="number" name="c_number" id="c_number" value="c_number" required>
            </div>
            <div class="useri">
                <label>Expiration Date: *</label>
                 <input type="date" name="exp_date" value = "exp_date" id="exp_date" required>
            </div>
            <div class="useri">
                <label>CVV: *</label>
                 <input type="password" name="cvv" value= "cvv" id="cvv" required>
            </div>
            <div class="useri">
                <input type="submit" value="Pay Now">
            </div>
        </div>
    </form>
    </div>
</body>
</html>