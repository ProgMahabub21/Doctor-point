<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat With Our Doctors</title>
</head>
<body>
    <form action="" >
        <?php include "../Controller/chatlist.php"?>
        <fieldset>
            <legend>Chat With Doc</legend>
            <p><h4>Want to chat with new doc? <a href="newchat.php">Create Chat</a></h4></p>
            <h4>Previous Chat History</h4>
            <?php
                 echo "<hr>";
                echo "<table border='1'>";
                echo "<tr><th>Doctor's Name+ Designation</th><th>Your Message</th><th>Doctor's Reply</th>";
                for($i=0;$i<=$count-1;$i++)
                {
                    echo"<tr>";
                    foreach($array[$i] as $key=>$val)
                    {
                        echo "<td>".$val."</td>";
                    }
                    echo"</tr>";
                }
                echo "</table>";
            ?>
        </fieldset>
    </form>
</body>
</html>