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
         die();
     }

     echo($_SESSION['StudentId'].$_POST['Fname']);

     $sql = "UPDATE `students` SET `Fname`='".$_POST['Fname']."',`Mname`='".$_POST['Mname']."',`Lname`='".$_POST['Lname']."',`Gender`='".$_POST['Gender']."',`Enrollment_number`='".$_POST['Enrollment_number']."',`EmailId`='".$_POST['EmailId']."',`PhoneNumber`='".$_POST['PhoneNumber']."',`Skills`='".$_POST['Skills']."',`Achievements`='".$_POST['Achievements']."',`IntrestedFields`='".$_POST['IntrestedFields']."',`CPI`='".$_POST['CPI']."',`CGPI`='".$_POST['CGPI']."',`Total_Backlogs`='".$_POST['Total_Backlogs']."',`Current_Backlogs`='".$_POST['Current_Backlogs']."',`CollageCode`='".$_POST['CollageCode']."' WHERE studentId = ".$_SESSION['StudentId'];
     $result = $conn->query($sql);



     $sql = "SELECT * FROM STUDENTS WHERE studentId = ".$_SESSION['StudentId'];
     $result = $conn->query($sql);
     $StudentDetails = $result->fetch_assoc();

        try
        {

            $sql = "SELECT * FROM Collage WHERE CollageCode = '".$_POST['CollageCode']."' ";
            $result = $conn->query($sql);
            $Collage = $result->fetch_assoc();
            $_SESSION['CollageName']= $Collage['CollageName'];
        }
        catch(Exception)
        {
            $_SESSION['CollageName']= "NotFound";   
        }

        $_SESSION['Fname']= $StudentDetails['Fname'];
        $_SESSION['Mname']= $StudentDetails['Mname'];
        $_SESSION['Lname']= $StudentDetails['Lname'];
        $_SESSION['Gender']= $StudentDetails['Gender'];
        $_SESSION['Enrollment_number']= $StudentDetails['Enrollment_number'];
        $_SESSION['EmailId']= $StudentDetails['EmailId'];
        $_SESSION['PhoneNumber']= $StudentDetails['PhoneNumber'];
        $_SESSION['Skills']= $StudentDetails['Skills'];
        $_SESSION['Achievements']= $StudentDetails['Achievements'];
        $_SESSION['IntrestedFields']= $StudentDetails['IntrestedFields'];
        $_SESSION['CPI']= $StudentDetails['CPI'];
        $_SESSION['CGPI']= $StudentDetails['CGPI'];
        $_SESSION['Total_Backlogs']= $StudentDetails['Total_Backlogs'];
        $_SESSION['Current_Backlogs']= $StudentDetails['Current_Backlogs'];
        $_SESSION['CollageCode']= $StudentDetails['CollageCode'];
        $_SESSION['Password']= $StudentDetails['Password'];
        $_SESSION['StudentId']= $StudentDetails['studentId'];



     header("Location:../index4.php");

    exit();
     



?>