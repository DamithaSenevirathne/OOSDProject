<?php


    session_start();


    include 'dbh.php';

    if(isset($_POST['submit'])){

    
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $bday = $_POST['bday'];
        $pwd = $_POST['pwd'];
        $pwd1 = $_POST['pwd1'];
        $email = $_POST['email'];
        $addr = $_POST['addr'];

        $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);

        $sql = "INSERT INTO PATIENTS (user_name,user_sex,user_bday,user_address,user_email,user_pnum) 
                VALUES ('$name','$sex','$bday','$addr','$email','$hashedPwd')";

        $result = $conn->query($sql);

        header("Location: Home.php");

    }else{
        header("Location: patientsignup.php");
        exit();

    }


?>