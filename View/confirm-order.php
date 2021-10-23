<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Order</title>
</head>
<body>
    <form action="orderPayment.php" method="post">
        <fieldset>
            <legend>Order Details</legend>
            <label for="medname">Medicine Name:</label>
            <input type="text" name="medname" id="medname" value="<?php echo $_COOKIE['bname'] ?>"><br><br>
            <label for="medname">Generics Name:</label>
            <input type="text" name="genericname" id="genericname" value="<?php echo $_COOKIE['gname'] ?>"><br><br>
            <label for="qtny">Quantity:</label>
            <input type="text" name="qtn" id="qtn" value="<?php echo $_COOKIE['amount']?>"><br><br>
            <label for="price">Total Price:</label>
            <input type="text" name="price" id="price" value="<?php echo $_COOKIE['price']?>"><br><br>



        </fieldset><br><br>
        <input type="submit" value="Confirm">
    </form>
</body>
</html>