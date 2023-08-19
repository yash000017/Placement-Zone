
<?php 

    $Value = $_GET['value'];
    
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
    
    if($Value == "Student")
    {
        $sql = "INSERT INTO `students`(`Fname`, `Mname`, `Lname`, `Gender`, `Enrollment_number`, `EmailId`, `PhoneNumber`,`Password`,`CollageCode`) VALUES ('".$_POST['Fname']."','".$_POST['Mname']."','".$_POST['Lname']."','".$_POST['Gender']."','".$_POST['EnrollmentNumber']."','".$_POST['Email']."','".$_POST['PhoneNumber']."','".$_POST['Password']."','".$_POST['CollageCode']."')";
        $result = $conn->query($sql);
    }
    else if($Value == "Collage")
    {
        $sql = "INSERT INTO `collage`(`CollageCode`, `CollageName`, `UserID`, `Password`) VALUES ('".$_POST['CollageCode']."','".$_POST['CollageName']."','".$_POST['Email']."','".$_POST['Password']."')";
        $result = $conn->query($sql);
    }
    else if($Value == "Company")
    {
        $sql = "INSERT INTO `company`(`Company_Name`, `IndustryArea`, `Location`,`UserID`, `password`) VALUES ('".$_POST['CompanyName']."','".$_POST['IndustryArea']."','".$_POST['Location']."','".$_POST['Email']."','".$_POST['Password']."')";
        $result = $conn->query($sql);
    }

    header('Location: ../index.php');
    die();

?>