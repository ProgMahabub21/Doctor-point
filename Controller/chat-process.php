
        <?php
        session_start();
        // if ($_SERVER["REQUEST_METHOD"] == "POST"){	
        //         $docname = $_POST['docname'];
        //         $msg= $_POST['msg'];
        //         $subject = $_POST['subject'];
        //         $patient = $_SESSION['UserName'];

        //     }
        // $is_validate = true;	
        // if(empty($docname) || empty($msg) )
        // {
        //     if(empty($docname))
        //         echo "*Please select a doctor name";
        //     if(empty($msg)){
        //             echo "<br>";
        //             echo "*Please write your message";
        //         } 
        //     header("refresh:5;url = ../View/newchat.php");       
        // }

        // else{
        //     echo "message sent successfully ";
        //     $chatID = time()*320;
        //     $fetchData = json_decode(file_get_contents("../Model/chatData.json",true));
        //     $array = array("Chat ID"=> $chatID,"Patient's Name" => $patient, "Doctor's Name" => $docname, 'Subject'=> $subject ,"Patient's Message" => $msg,"Doctor's Message"=> null);
        //     array_push($fetchData, $array);
        //     $fp = fopen('../Model/chatData.json', 'w');
        //     fwrite($fp, json_encode($fetchData, JSON_PRETTY_PRINT));  
        //     fclose($fp);

        //     header("refresh:3;url=../View/patient-profile.php");
        // }

        //get data from request body

        if($_SERVER["REQUEST_METHOD"] == "POST"){
           $appid = $_POST['id'];
           $patient = $_SESSION['UserName'];

      

           if(empty($appid)){
               echo json_encode(array("statusCode"=>"401"));
               //header("refresh:5;url = ../View/patient-profile.php");
           }
           else{
              include 'dbconn.php';

              //sql query to check if the appointment id is valid with bind params procedural
                $sql = "SELECT * FROM appointment_data WHERE AppointmentID = ? and PatientName = ? and PaymentStatus=1";

                $stmt = mysqli_prepare($conn, $sql);

                mysqli_stmt_bind_param($stmt, "ss", $appid, $patient);

                mysqli_stmt_execute($stmt);

                $result = mysqli_stmt_get_result($stmt);

                $row = mysqli_fetch_assoc($result);

                if($row){
                    $chatperson = $row['PatientName'];
                    $chatdoc = $row['DoctorName'];

                    $_SESSION['chatperson'] = $chatperson;
                    $_SESSION['chatdoc'] = $chatdoc;

                    echo json_encode(array("statusCode"=>"200"));
                 
                }

                else
                {
                    echo json_encode(array("statusCode"=>"402"));
                    //header("refresh:5;url = ../View/patient-profile.php");
                }
        }
    }

        ?>
