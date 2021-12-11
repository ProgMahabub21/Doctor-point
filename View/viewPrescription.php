<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription</title>

    <style>
         body {
            background-color: #bcacd4  ;
        }
        .div {
            margin-left: 10%;
            margin-right: 10%;
        }
        
        #prescription {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            background-color: antiquewhite;
        }

        #prescription td,
        #prescription th {
            border: 1px solid #ddd;
            padding: 8px;
        }



        #prescription tr:hover {
            background-color: #a4f4fc;
        }

        #prescription th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #213970;
            color: white;
        }
         h1 {
            background-color: #210070;
          
            font-size: 20px;
            text-align: center;
            color: #fff;
            width: 40%;
            padding: 10px 0; 
            border-bottom: 1px solid #cccccc;
        }
    </style>
    
</head>
<body>
        <?php require "../Controller/prescriptionHistory.php";
        include "navbar.php";
        ?>
        <br><br>
        <div class="div">
            <h1>Prescription History</h1>
            <br> <br>

            <?php
                echo "<hr>";
                echo "<table  id='prescription'>";
                echo "<tr><th>Prescription ID</th><th>Doctor's Name</th><th>Diagnosis</th><th>Instruction</th><th>Issued Time</th>
                </tr>";
                for($i=0;$i<=$count-1;$i++)
                {
                    echo"<tr>";
                    foreach($prescriptionData[$i] as $key=>$val)
                    {
                        echo "<td>".$val."</td>";
                    }
                    echo"</tr>";
                }
                if($count==0)
                {
                    echo "<tr><td colspan='5' style='text-align:center'>No Prescription Found</td></tr>";
                }
                echo "</table>";
            ?>
        </div>


    
        <br><br>
        <?php include "footer.php"; ?>
</body>
</html>