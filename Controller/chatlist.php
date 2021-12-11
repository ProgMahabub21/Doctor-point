
    <?php
     session_start();
    // $chatlist = json_decode(file_get_contents("../Model/chatData.json", true), true);
    // $curr_user = $_SESSION['UserName'];
    // $count = 0;

    // foreach ($chatlist as $x => $val) {
    //     // echo "<hr>";
    //     if ($val["Patient's Name"] == $curr_user) {
    //         $array[$count] =  array("Doctor's Name:" => $chatlist[$x]["Doctor's Name"], "Patient's Message:" => $chatlist[$x]["Patient's Message"],"Doctor's Message:" => $chatlist[$x]["Doctor's Message"] );
    //         $count++;
    //     }
    // }
   

    function getAllMessage()
    {

        include 'dbconn.php';

        $sender = $_SESSION['chatperson'];
        $receiver = $_SESSION['chatdoc'];


        $sql = "SELECT * FROM message WHERE Sender= ? and Receiver= ? or Sender= ? and Receiver= ?";
        if (!$conn) {
            die("Failed to Connect: " . mysqli_connect_error());
        }

        $allMessages = array();
        //prepare statemnent
        $stmt = mysqli_prepare($conn, $sql);

        //bind parameters
        mysqli_stmt_bind_param($stmt, "ssss", $sender, $receiver, $receiver, $sender);

        //execute query
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            // echo "Login Successful <br>";

            // $messages = $result->fetch_assoc();
            //fetch all rows from the query


            while ($row = mysqli_fetch_assoc($result)) {
                array_push($allMessages, array(
                    "username" => $row["Sender"],
                    "receiver" => $row["Receiver"],
                    "msg" => $row["msg"],
                    "tym" => $row["sendtime"]
                ));
            }
            mysqli_close($conn);
            return $allMessages;
        }
        else
            echo "No Messages Found";

    }


    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        // echo "Hi";
        echo json_encode(getAllMessage());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        include 'dbconn.php';
        $json = file_get_contents('php://input'); //reads raw json input from request body

        $data = json_decode($json, true);

        if (!$conn) {
            die("Failed to Connect: " . mysqli_connect_error());
        }


        $username = $data["username"];
        $msg = $data["msg"];
        $time = $data["time"];
        $receiver = $_SESSION['chatdoc'];


        $sql = "INSERT INTO message (Sender,Receiver,msg,sendtime) VALUES (?,?,?,?)";

        //prepare statement
        $stmt = mysqli_prepare($conn, $sql);

        //bind parameters
        mysqli_stmt_bind_param($stmt, "ssss", $username, $receiver, $msg, $time);

        //execute statement
        mysqli_stmt_execute($stmt);

        //close statement
        mysqli_stmt_close($stmt);
        
        echo "success";
        mysqli_close($conn);
    }





    ?>
