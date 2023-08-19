<?php 

    $Role = $_POST['SelectRole'];
    $user = $_POST['username'];
    $CollageCode = $_POST['CollageCode'];
    $password = $_POST['password'];
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

    if($Role == "Student")
    {
        
        $sql = "SELECT * FROM STUDENTS WHERE EmailId = '$user' && CollageCode = '$CollageCode' &&  password = '$password'";
        $result = $conn->query($sql);
        $StudentDetails = $result->fetch_assoc();
        $row = mysqli_num_rows($result);

        
        if($row ==0)
        {
            header("Location: ../index.php?NoUser");
            die();    
        }

        $sql = "SELECT * FROM Collage WHERE CollageCode = '$CollageCode' ";
        $result = $conn->query($sql);
        $Collage = $result->fetch_assoc();
        $row = mysqli_num_rows($result);
        if($row ==0)
        {
            header("Location: ../index.php?NoCollageFound");
            die();    
        }

        session_start();
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
        $_SESSION['CollageName']= $Collage['CollageName'];
        $_SESSION['StudentId']= $StudentDetails['studentId'];
        $_SESSION['JobId']= $StudentDetails['JobId'];

        header("Location: ../index3.php");
       
    }
    else if($Role == "College")
    {

        $sql = "SELECT * FROM Collage WHERE UserID = '$user' && CollageCode = '$CollageCode' &&  Password = '$password'";
        $result = $conn->query($sql);
        $CollageDetails = $result->fetch_assoc();
        $row = mysqli_num_rows($result);

        if($row ==0)
        {
            header("Location: ../index.php?NoUser");
            die();    
        }
        session_start();

        $_SESSION['CollageId'] = $CollageDetails['CollageId'];
        $_SESSION['CollageCode'] = $CollageDetails['CollageCode'];
        $_SESSION['CollageName'] = $CollageDetails['CollageName'];


        header("Location: ../clg.html");
        
    }
    else if($Role == "Employer")
    {

        $sql = "SELECT * FROM company WHERE UserID = '$user' &&  password = '$password'";
        $result = $conn->query($sql);
        $CompanyDetails = $result->fetch_assoc();
        $row = mysqli_num_rows($result);

        if($row ==0)
        {
            header("Location: ../index.php?NoUser");
            die();    
        }

        session_start();

        $_SESSION['CompanyID'] = $CompanyDetails['CompanyId'];
        $_SESSION['CompanyName'] = $CompanyDetails['Company_Name'];
        $_SESSION['JobDetails'] = $CompanyDetails['JobDetails'];
        $_SESSION['IndustryArea'] = $CompanyDetails['IndustryArea'];
        $_SESSION['MonthlySalary'] = $CompanyDetails['MonthlySalary'];
        $_SESSION['TrainingPeriod'] = $CompanyDetails['TrainingPeriod'];
        $_SESSION['Location'] = $CompanyDetails['Location'];
        $_SESSION['Emp_status'] = $CompanyDetails['Emp_status'];

        header("Location: ../emp.html");
    }
    else
    {
        echo("hello");
        header("Location: ../index.php");
        die();
    }


?>