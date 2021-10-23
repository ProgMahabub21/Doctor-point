<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method</title>
</head>
<body>
    <form action="../Controller/confirm-order.php" method="POST"><h3>Payment Details</h3>
        <fieldset>
            <legend>Payment Summary</legend>
            <label for="amt">Due Amount:</label>
            <input type="text" name="amt" id="amt" value="<?php echo $_COOKIE['price']." TK" ?>">
          
        </fieldset>
        <fieldset>
            <legend>Payment Method</legend>
            <label for="cardowner">CardHolder Name:</label><br>
            <input type="text" name="cardowner" id="cardowner"><br>
            <label for="carno">Card No:</label><br>
            <input type="text" name="cardno" id="cardno"><br>
            <label for="expiry">Expiry Date:</label><br>
            <input type="date" name="expiry" id="expiry"><br>
            <label for="cardcvv">CVV (3 digits):</label><br>
            <input type="number" name="cardcvv" id="cardcvv"><br>

        </fieldset><br>
        <input type="submit" name = "confirm" value="Confirm">
    </form>
</body>
</html>