<html>

<body>
    <?php
    
    if (isset($_POST['next'])) {

        $email = $_POST['email'];
        $userRole = $_POST['Usertype'] ?? "";
        
        $is_validate = true;
        function check()
        {
            global $is_validate;
            if(empty($email))
                $is_validate = false;
        }
        check();
        echo $is_validate;
        
        if (!empty($email) && !empty($userRole)) {
            setcookie("email",$email,time()+86400);
            setcookie("userRole",$userRole,time()+86400);

            if ($userRole == 'patients')
                header("location:../View/patients-form.html", TRUE, 302);
            if ($userRole == 'doctors')
                header("location: ../View/doctor-form.html", TRUE, 302);
            if ($userRole == 'admin')
                header("location: ../View/admin-form.html", TRUE, 302);
            if ($userRole == 'manager')
                header("location: ../View/shop-manager-form.html", TRUE, 302);
        } else {
            if (empty($email)) {
                echo "email must be given";
                echo "<br>";
            }
            if (empty($userRole))
                echo "User type must be selected\n";
        }
    }
    ?>
</body>

</html>