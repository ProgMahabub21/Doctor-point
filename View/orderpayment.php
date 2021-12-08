<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method</title>

    <link rel="stylesheet" href="css/payment.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <form action="../Controller/confirm-order.php" method="POST" class="payment-form">
   
        <div class="form-header">
            <h2>Payment Details</h2>
        </div>
        <div class="form-body">
            <label for="amt" class="label-title">Due Amount:</label>
            <input type="text" class="form-input" name="amt" id="amt" value="<?php echo $_COOKIE['price']." TK" ?>">
            <label for="cardowner" class="label-title">CardHolder Name:</label><br>
            <input type="text" class="form-input" name="cardowner" id="cardowner"><br>
            <label for="carno" class="label-title">Card No:</label><br>
            <input type="text" class="form-input" name="cardno" id="cardno"><br>
            <label for="expiry" class="label-title">Expiry Date:</label><br>
            <input type="date" class="form-input" name="expiry" id="expiry"><br>
            <label for="cardcvv" class="label-title">CVV (3 digits):</label><br>
            <input type="number" class="form-input" name="cardcvv" id="cardcvv"><br>

        </div>
        <div class="form-footer">
            <input type="submit" class="btn" name = "confirm" value="Confirm">
        </div>
 
    </form>

    <?php include 'footer.php'; ?>
</body>
</html>