<html>
    <body>
        
        <?php
            require 'dbconn.php';

            $count = 0;

            //sql query to select all the doctor list with prepared statement
            $sql = "SELECT First_Name,Last_Name,Age,Reg_Number,Specialization as dept,Experience as expr,Visiting_Fee as fee,Email 
             FROM doctor_data";

            //prepare the procedural sql query 
           // echo var_dump($conn) . " ". var_dump($sql);
            $stmt=mysqli_prepare($conn,$sql);
            //execute the query
            mysqli_stmt_execute($stmt);

            //bind the result to the variable
            mysqli_stmt_bind_result($stmt,$fname,$lname,$age,$regno,$dept,$expr,$fee,$email);
           // $return = mysqli_stmt_get_result($stmt);

            //fetch the result
            while(mysqli_stmt_fetch($stmt)){
                $docname = $fname." ".$lname;
                // echo "<tr>";
                // echo "<td>".$docname."</td>";
                // echo "<td>".$age."</td>";
                // echo "<td>".$regno."</td>";
                // echo "<td>".$dept."</td>";
                // echo "<td>".$expr."</td>";
                // echo "<td>".$fee."</td>";
                // echo "<td>".$email."</td>";
                // echo "</tr>";


              $array[] = array('docname'=>$docname,'age'=>$age,'regno'=>$regno,'dept'=>$dept,'expr'=>$expr,'fee'=>$fee,'email'=>$email);
              
              //$count++;
                // $docname = $result['First_Name']." ".$result['Last_Name'];
                // $array[$count] = array('docname'=>$docname,'age'=>$result['Age'],'regno'=>$result['Reg_Number'],'dept'=>$result['dept'],'expr'=>$result['expr'],'fee'=>$result['fee'],'email'=>$result['Email']);
                // $count++;
            }

            json_encode($array);
            //close the statement
            mysqli_stmt_close($stmt);

            //close the connection
            mysqli_close($conn);

        ?>
    </body>
</html>