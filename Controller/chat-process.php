<html>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){	
                $docname = $_POST['docname'];
                $msg= $_POST['msg'];
                $subject = $_POST['subject'];
                $patient = $_COOKIE['UserName'];

            }
        $is_validate = true;	
        if(empty($docname) || empty($msg) )
        {
            if(empty($docname))
                echo "*Please select a doctor name";
            if(empty($msg)){
                    echo "<br>";
                    echo "*Please write your message";
                } 
            header("refresh:5;url = ../View/newchat.php");       
        }

        else{
            echo "message sent successfully ";
            $chatID = time()*320;
            $fetchData = json_decode(file_get_contents("../Model/chatData.json",true));
            $array = array("Chat ID"=> $chatID,"Patient's Name" => $patient, "Doctor's Name" => $docname, 'Subject'=> $subject ,"Patient's Message" => $msg,"Doctor's Message"=> null);
            array_push($fetchData, $array);
            $fp = fopen('../Model/chatData.json', 'w');
            fwrite($fp, json_encode($fetchData, JSON_PRETTY_PRINT));  
            fclose($fp);

            header("refresh:3;url=../View/patient-profile.php");
        }

        ?>
    </body>
</html>