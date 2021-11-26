<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription</title>
    
</head>
<body>
        <?php require "../Controller/prescriptionHistory.php";
        include "navbar.php";
        ?>
        <br><br>
        <fieldset>
            <legend>Prescription History</legend>
            <?php
                 echo "<hr>";
                echo "<table border='1'>";
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
                echo "</table>";
            ?>



        </fieldset>
        <br><br>
        <?php include "footer.php"; ?>
</body>
</html>