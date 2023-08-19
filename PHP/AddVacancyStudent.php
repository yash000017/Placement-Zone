<?php
    

    if(isset($_GET['JobId']) && $_GET['StudentId'])
    {
        session_start();
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
        }

        $sql = "SELECT JobId FROM students where studentId = ".$_GET['StudentId'];
        $result = $conn->query($sql);
        $JobId = $result->fetch_assoc();
        //to do
        $AllJobId=NULL;
        if($JobId['JobId'] != NULL)
        {
            $AllJobId = $JobId['JobId']." ".$_GET['JobId'];
        }
        else
        {
            $AllJobId=$_GET['JobId'];
        }
        echo($AllJobId);

        $sql = "UPDATE `students` SET `JobId`= '$AllJobId' WHERE studentId = ".$_GET['StudentId'];
        $result = $conn->query($sql);


        $sql = "SELECT * FROM STUDENTS WHERE studentId = ".$_GET['StudentId'];
        $result = $conn->query($sql);
        $StudentDetails = $result->fetch_assoc();

        $_SESSION['JobId']= $StudentDetails['JobId'];



        $sql = "INSERT INTO jobstatus (`StudentId`,`JobId`,`JobStatus`,`CompanyId`) VALUES ('".$_SESSION['StudentId']."','".$_GET['JobId']."','0','".$_GET['CompanyId']."')";
        $result = $conn->query($sql);

        header("Location: ../index6.php");



    }
    else
    {
        header("Location: ../index6.php");
    }



?>