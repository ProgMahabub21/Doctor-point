<html>
    <body>
        
        <?php
        session_start();
		if ($_SERVER["REQUEST_METHOD"] == "POST"){	
			$docname = $_POST['docname'];
			$msg= $_POST['message'];  
		}
		$is_validate = true;	
        if(empty($docname) || empty($msg))
        {
            if(empty($docname))
                echo "*Please select a doctor name";
            if(empty($msg)){
                    echo "<br>";
                    echo "*Please write your message";
                }        
        }
        else{
            echo "feedback sent successfully ";
            $fetchData = json_decode(file_get_contents("../Model/feedbackData.json",true));
            $array = array("Patient's Name" => $_SESSION['UserName'], "Doctor's Name" => $docname, 'Feedback Message' => $msg);
            array_push($fetchData, $array);
            $fp = fopen('../Model/feedbackData.json', 'w');
            fwrite($fp, json_encode($fetchData, JSON_PRETTY_PRINT));  
            fclose($fp);

            header("refresh:2;url=../View/patient-profile.php");
        }
            
		


        ?>
    </body>
</html>