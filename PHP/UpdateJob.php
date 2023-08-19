<?php
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

    $sql = "UPDATE `job` SET `JobDetails`='".$_POST['JobDetails']."',`IndustryArea`='".$_POST['IndustryArea']."',`Gender`='".$_POST['Gender']."',`MonthlySalary`='".$_POST['MonthlySalary']."',`TrainingPeriod`='".$_POST['TrainingPeriod']."',`Location`='".$_POST['Location']."',`Emp_status`='".$_POST['Emp_status']."',`Emp_Type`='".$_POST['Emp_Type']."',`Experience`='".$_POST['Experience']."',`NumberOfVacancies`='".$_POST['NumberOfVacancies']."',`CompanyName`='".$_POST['CompanyName']."',`CompanyId`='".$_SESSION['CompanyID']."' WHERE JobId = ".$_GET['JobId'];
    $result = $conn->query($sql);

    header('Location: ../emp3.php');
    exit();
?>