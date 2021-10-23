<html>
    <body>

        <?php
            session_start();
            $prescriptionData = json_decode(file_get_contents("../Model/prescriptionData.json",true),true);
            $curr_mail =$_SESSION['Usermail'];
            $count=0;

            foreach($prescriptionData as $x => $val) {
               // echo "<hr>";
               if($val["Patient's email"] == $curr_mail ){ 
                   $issuedDate = $val["Prescribing Date"]." ". $val["Prescribing Time"];
                   $array[$count] =  array("Prescription ID:"=>$prescriptionData[$x]["ID"],"Doctor's Name:" => $prescriptionData[$x]["Doctor's Name"]," Diagnosis:"=> $prescriptionData[$x]["Diagnosis"]," Instruction:"=> $prescriptionData[$x]["Instruction"]," Issue Time:" => $issuedDate );
                //    echo "Doctor's Name: ".$prescriptionData[$x]["Doctor's Name"]." Diagnosis:".$prescriptionData[$x]["Diagnosis"].
                //    " Instruction:". $prescriptionData[$x]["Instruction"]." Issue Date-Time:". $issuedDate;
                        $count++;
                }
             }
           
            
        ?>
    </body>

</html>

