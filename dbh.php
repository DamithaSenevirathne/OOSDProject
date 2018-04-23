<?php

    $conn = mysqli_connect("localhost","root","","MEDICAL_CENTRE");

    if (!$conn){
        die("connection failed : ".mysqli_connect_error());
    }

?>