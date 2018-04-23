<html>
<?php

    session_start();

    include 'dbh.php';
    
    
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM PATIENTS WHERE user_name='$name' AND user_pnum='$pwd'";

    $result = $conn->query($sql);

    if (!$row=$result->fetch_assoc()){
        header("Location: loginerror.php");
    }else{
        $_SESSION['ID'] = $row['user_id'];
        header("Location: Home.php");

    }

    

?>
<html>