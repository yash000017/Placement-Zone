<?php
    $ID = $_GET['id'];
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
    $sql = "delete from students where studentId = $ID";
    $result = $conn->query($sql);

    $sql = "delete from jobstatus where studentId = $ID";
    $result = $conn->query($sql);

    header("Location: ../clg4.php");

?>