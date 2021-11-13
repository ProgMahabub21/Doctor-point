<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Medicine Shop</title>
</head>
<body>
    <form action="purchase-medicine.php" ><p>Want to purchase medicine? Visit <button type="submit">Order Medicine</button></p></form>
    <?php include "../Controller/orderlist.php"?>
    <fieldset>
        <legend>Order List</legend>
        <?php
                 echo "<hr>";
                echo "<table border='1'>";
                echo "<tr><th>Order ID</th><th>Medicine Name</th><th>Generics Name</th><th>Quantity</th><th>Price(TK)</th>
                <th>Payment Status</th><th>Order Placement Time</th><th>Order Status</th></tr>";
                for($i=0;$i<=$count-1;$i++)
                {
                    echo"<tr>";
                    foreach($orderData[$i] as $key=>$val)
                    {
                        echo "<td>".$val."</td>";
                    }
                    echo"</tr>";
                }
                echo "</table>";
            ?>

    </fieldset>
</body>
</html>