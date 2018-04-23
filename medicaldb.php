<?php

    $conn = mysqli_connect("localhost","root","","LOGINTEST");

    if (!$conn){
        die("connection failed : ".mysqli_connect_error());
    }

?>