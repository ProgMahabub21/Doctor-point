<html>

<body>
    <?php

    $chatlist = json_decode(file_get_contents("../Model/chatData.json", true), true);
    $curr_user = $_COOKIE['UserName'];
    $count = 0;

    foreach ($chatlist as $x => $val) {
        // echo "<hr>";
        if ($val["Patient's Name"] == $curr_user) {
            $array[$count] =  array("Doctor's Name:" => $chatlist[$x]["Doctor's Name"], "Patient's Message:" => $chatlist[$x]["Patient's Message"],"Doctor's Message:" => $chatlist[$x]["Doctor's Message"] );
            $count++;
        }
    }

    ?>
</body>

</html>