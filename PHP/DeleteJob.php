<?php

    $ID = $_GET['ID'];

    // Connectiong to Database
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "placement zone";
    try
    {
        $conn = new mysqli($servername,$username,$dbpassword,$dbname);
    }
    catch(Exception)
    {
        header("Location: ../index.php?DbConnectionError");
        die();
    }
    $sql = "delete from job where JobId = $ID";
    $result = $conn->query($sql);
    
    $sql = "delete from jobstatus where JobId = $ID";
    $result = $conn->query($sql);

        header("Location: ../clg3.php");



?>