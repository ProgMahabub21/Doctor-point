<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Medicine Shop</title>

    <style>
        body {
             background-image: url('image/pic7.jpg'); 
        }

        #medicine {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
      
            margin: 5%;
            padding: 15px;
            border-radius: 10px;
            top: 100px;
            background-color: white;

        }

        #medicine td,
        #medicine th {
            border: 1px solid #ddd;

            padding: 8px;
        }



        #medicine tr:hover {
            background-color: #a4f4fc;
        }

        #medicine th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #213970;
            color: white;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #1BBA93;
            font-size: 17px;
            border: none;
            border-radius: 5px;
            color: #bcf5e7;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #bcacd4;
            color: white;
        }

        #h1 {
            background-color: #210070;
           
            border-radius: 10px;
            font-size: 30px;
            text-align: center;
            color: #fff;
            margin: 5%;
            padding: 15px 0;
            width: 40%;
            top: 120px;

            border-bottom: 1px solid #cccccc;
        }

        #h2 {
       
            font-size: 45px;
            text-align: left;
            color: #210070;
            margin: 5%;
            top: 10px;
            padding: 15px 0;

        }

        .section1 {
       
            font-size: 20px;
            text-align: center;
            color: #210070;
            
            width: 100%;
            height: auto;

        }
        .section1 p {
            font-size: 20px;
            text-align: left;
            color: #210070;
            margin: 5%;
            top: 10px;
            padding: 15px 0;

        }
    </style>
</head>

<body>
    <?php include "../Controller/orderlist.php";
    include "navbar.php";
    ?>
    <br><br>
    <form action="">
        <div class="section1">
            <table style="margin: 4%;">
                <tr><td><h2 id='h2'>Online Medicine Shop</h2></td></tr>
                <tr><td> <p>Want to purchase medicine? Visit <a href="purchase-medicine.php">Order Medicine</a></p></td></tr>
               
            </table>
            
            
            <!-- <hr style=" position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            top: 180px;
            margin: 0;"> -->
        
        <?php
        
        echo "<table border='1' id='medicine'>";
        echo "<h1 id='h1'>Order List</h1> ";
        echo "<tr><th>Order ID</th><th>Medicine Name</th><th>Generics Name</th><th>Quantity</th><th>Price(TK)</th>
                <th>Payment Status</th><th>Order Placement Time</th><th>Order Status</th></tr>";
        for ($i = 0; $i <= $count - 1; $i++) {
            echo "<tr>";
            foreach ($orderData[$i] as $key => $val) {
                echo "<td>" . $val . "</td>";
            }
            echo "</tr>";
        }
        if($count==0)
        {
            echo "<tr><td colspan='5' style='text-align:center'>No Prescription Found</td></tr>";
        }
        echo "</table>";
        ?>

    </form>
    </div>
    <br><br>
    <?php include "footer.php"; ?>

</body>

</html>