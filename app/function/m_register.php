<?php
    require '../partial/db_connect_inc.php';

    if(!empty($_POST))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $c_email = $_POST['confirm_email'];
        $password = $_POST['password'];
        $c_pass = $_POST['confirm_password'];
        $pass_hash = md5($password);


        /*echo "success";*/
        $db_query = mysqli_query($db_con,"INSERT INTO registration (firstname,lastname, email, password) VALUES('$firstname', '$lastname', '$email', '$pass_hash')");

        if($email == $c_email and $password == $c_pass)
        {
            header("location: ../views/auth/login.php");
        }else
        {
            header("location:../views/auth/register.php");
        }


    }