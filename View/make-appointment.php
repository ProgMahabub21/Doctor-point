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
        $doclist = json_decode(file_get_contents("../Model/doctorData.json",true),true);
        echo "<form action ='../Controller/appointment-process.php' method= 'POST'>
        <fieldset>
            <legend>Doctors List </legend>".
            "<table>"; 
            echo "<tr>";
            echo "<table>";
            foreach($doclist as $key) {
                $docname = $key['First Name']." ".$key['Last Name']; 
                $age = $key['age(yrs)'];
                $email = $key['email'];
                echo "  <tr>
                        <td> Doctor's Name: ".$docname."</td>
                        <td>"."Department : ".$key['department']."</td>
                        <td>"."Age(yrs) : ".$age."</td>
                        <td>"."BMDC Reg. Number : ".$key['reg number']."</td>
                        <td>"."Appointment Fee(Tk) : ".$key['visiting fee']."</td>
                        <td><button type='submit' name='submit' value ='$email'>Make Appointment</button></td>
                        </tr>"
                        
                        ;
            
            }
            echo "</table>";
            echo "</tr></table>".

        "</fieldset>
        </form>";
            ?>
        
   
  

</body>
</html>


