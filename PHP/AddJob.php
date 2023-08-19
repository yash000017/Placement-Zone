
<?php
        session_start();

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


        $sql = "INSERT INTO `job`(`JobDetails`, `IndustryArea`, `Gender`, `MonthlySalary`, `TrainingPeriod`, `Location`, `Emp_status`, `Emp_Type`, `Experience`, `NumberOfVacancies`, `CompanyName`, `CompanyId`) VALUES ('".$_POST['JobDetails']."','".$_POST['IndustryArea']."','".$_POST['Gender']."','".$_POST['MonthlySalary']."','".$_POST['TrainingPeriod']."','".$_POST['Location']."','".$_POST['Emp_status']."','".$_POST['Emp_Type']."','".$_POST['Exprience']."','".$_POST['NumberOfVacancies']."','".$_POST['CompanyName']."','".$_SESSION['CompanyID']."')";
        $result = $conn->query($sql);

      
        header("Location: ../emp2.php");



?>