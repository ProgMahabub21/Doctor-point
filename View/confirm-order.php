<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Order</title>
    <link rel="stylesheet" href="css/feedback.css">
    <style>
        body{
            background-color: #a4f4fc;
           
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <form action="orderPayment.php" method="post" class="signup-form">
        <div class="form-header">
            <h1>Medicine Order Details</h1>
        </div>
        <div class="form-body">
        <div class="form-group">
            <label for="medname" class="label-title">Medicine Name:</label>
            <input type="text" class="form-input" name="medname" id="medname" value="<?php echo $_COOKIE['bname'] ?>" readonly><br><br>
            <label for="medname" class="label-title">Generics Name:</label>
            <input type="text" class="form-input" name="genericname" id="genericname" value="<?php echo $_COOKIE['gname'] ?>" readonly><br><br>
            <label for="qtny" class="label-title">Quantity:</label>
            <input type="text"  class="form-input" name="qtn" id="qtn" value="<?php echo $_COOKIE['amount']?>" readonly><br><br>
            <label for="price" class="label-title">Total Price:</label>
            <input type="text"  class="form-input" name="price" id="price" value="<?php echo $_COOKIE['price']?>" readonly><br><br>

        </div>
        </div>
        <div class="form-footer">
        <input type="submit" class="btn" value="Confirm">
        </div>
    </form>

    <?php include 'footer.php'; ?>
</body>
</html>