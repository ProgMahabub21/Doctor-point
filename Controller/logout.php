<html>

<body>


    <?php
    if (isset($_POST['logout'])) {
        echo "Good Bye, See you soon ".$_COOKIE['UserName']."<br>";
        echo "You're logging out. redirecting you to login page in 5 sec";
        setcookie('UserName', "", time() - 86400);
        setcookie("Usermail", "",time()-86400); 
        header("refresh:5;url=../View/login-form.html");
    }
    ?>

</body>

</html>