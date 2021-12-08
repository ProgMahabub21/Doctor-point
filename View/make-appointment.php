<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take Appoinment</title>
    <style>
        body {
            background-image: url('image/pic2.jpg');
        }
        #doctors {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            margin: 5%;
            padding: 15px;
            border-radius: 10px;
            background-color: white;
           
        }

        #doctors td,
        #doctors th {
            border: 1px solid #ddd;
            
            padding: 8px;
        }



        #doctors tr:hover {
            background-color: #a4f4fc;
        }

        #doctors th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #213970;
            color: white;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #1BBA93;
            font-size: 17px;
            border: none;
            border-radius: 5px;
            color: #bcf5e7;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #bcacd4;
            color: white;
        }
         h1 {
            background-color: #210070;
          
            border-radius: 10px;
            font-size: 30px;
            text-align: center;
            color: #fff;
            margin: 5%;
            padding: 15px 0;
            width: 40%;

            border-bottom: 1px solid #cccccc;
        }
    </style>
</head>

<body>

    <?php
    require '../Controller/doclist.php';
    include 'navbar.php';
    echo "<br>  <br>";
    // $doclist = json_decode(file_get_contents("../Model/doctorData.json",true),true);
    echo "<form action ='../Controller/appointment-process.php' method= 'POST'>
          <table id='doctors'>
            <h1>Available Doctors List </h1>" ;
        // "<table>";
    echo "<tr>";
    echo "
    <th>Doctor's Name</th>
    <th>Department</th>
    <th>Age(yrs)</th>
    <th>BMDC Reg. Number</th>
    <th>Experience</th>
    <th>Appointment Fee(Tk)</th>
    <th>Make Appointment</th>";
    // for($i=0;$i<$count-1;$i++) {
    // $docname = $key['First Name']." ".$key['Last Name']; 
    // $age = $key['age(yrs)'];
    // $email = $key['email'];
    foreach ($array as $key) {
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
                  
                    <td> Doctor's Name: " . $key['docname'] . "</td>
                    <td>" . "Department : " . $key['dept'] . "</td>
                    <td>" . "Age(yrs) : " . $key['age'] . "</td>
                    <td>" . "BMDC Reg. Number : " . $key['regno'] . "</td>
                    <td>" . "Experience : " . $key['expr'] . "</td>
                    <td>" . "Appointment Fee(Tk) : " . $key['fee'] . "</td>
                    <td><button type='submit' name='submit' value ='$email' class='btn'>Confirm</button></td>
                    </tr>";
    }


    //}
    echo "</table>";
    echo "</tr>" .

        "</form>";
    ?>
    <br><br>
    <?php include 'footer.php'; ?>




</body>

</html>