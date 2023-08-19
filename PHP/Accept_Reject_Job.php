<?php
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
     }

    if($_GET['value'] =="accept")
    {
        $sql = "UPDATE jobstatus set JobStatus = '2' where JobId = ".$_GET['id'];
        $result = $conn->query($sql);
    }
    else if($_GET['value'] =="reject")
    {
        $sql = "UPDATE jobstatus set JobStatus = '1' where JobId = ".$_GET['id'];
        $result = $conn->query($sql);
    }

    header('Location: ../emp5.php');


?>