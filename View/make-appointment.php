<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take Appoinment</title>
</head>
<body>

    <?php
        require '../Controller/doclist.php';
        
        // $doclist = json_decode(file_get_contents("../Model/doctorData.json",true),true);
        echo "<form action ='../Controller/appointment-process.php' method= 'POST'>
        <fieldset>
            <legend>Doctors List </legend>".
            "<table>"; 
            echo "<tr>";
            echo "<table>";
           // for($i=0;$i<$count-1;$i++) {
                // $docname = $key['First Name']." ".$key['Last Name']; 
                // $age = $key['age(yrs)'];
                // $email = $key['email'];
                foreach($array as $key) {
                    $email = $key['email'];
                    // echo "  <tr>
                    // <td> Doctor's Name: ".$key['docname']."</td>
                    // <td>"."Department : ".$key['dept']."</td>
                    // <td>"."Age(yrs) : ".$key['age'] ."</td>
                    // <td>"."BMDC Reg. Number : ".$key['regno']."</td>
                    // <td>"."Appointment Fee(Tk) : ".$key['visiting fee']."</td>
                    // <td><button type='submit' name='submit' value ='$email'>Make Appointment</button></td>
                    // </tr>"

                    echo "  <tr>
                    <td> Doctor's Name: ".$key['docname']."</td>
                    <td>"."Department : ".$key['dept']."</td>
                    <td>"."Age(yrs) : ".$key['age']."</td>
                    <td>"."BMDC Reg. Number : ".$key['regno']."</td>
                    <td>"."Experience : ".$key['expr']."</td>
                    <td>"."Appointment Fee(Tk) : ".$key['fee']."</td>
                    <td><button type='submit' name='submit' value ='$email'>Make Appointment</button></td>
                    </tr>"
                    
                    ;
                }
                
            
            //}
            echo "</table>";
            echo "</tr></table>".

        "</fieldset>
        </form>";
            ?>
        
   
  

</body>
</html>


