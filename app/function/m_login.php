<?php
    require '../partial/db_connect_inc.php';



    if(!empty($_POST))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $pass_hash = md5($password);
        $db_query = mysqli_query($db_con, "SELECT * FROM registration WHERE email='$email' AND password='$pass_hash'");

        if($db_query -> fetch_assoc())
        {
            header("location: ../views/home/dashboard.php");
        }
        else
        {
            header("location: ../views/auth/login.php");
        }
    }

