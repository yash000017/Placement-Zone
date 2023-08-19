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

    $sql = "SELECT * from job where CompanyId=".$_SESSION['CompanyID'];
    $result = $conn->query($sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a job | Placement Zone</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body style="background-color:#edf1f5;">
    <section class="index3-navigation">
        <div class="index3-logo">
            <img class="index3-logo-wrapper" src="Images/logo1.jpeg">
        </div>

        <div class="index3-home">
            <p class="index3-home-wrapper"><a href="index3.html">Home</a></p>
        </div>

        <div class="index3-home">
            <p class="index3-home-wrapper"><a href="">About us</a></p>
        </div>

        <div class="index3-home">
            <p class="index3-home-wrapper"><a href="">Contact us</a></p>
        </div>
    </section>   

    <section class="index4-edit">
        <p class="index4-edit-wrapper">Edit a job</p>
    </section>

    <?php

        while($JobDetails = $result->fetch_assoc())
        {

    ?>
    <section class="index4-detail">
        <div class="index4-detail-wrapper">
            <form action="./PHP/UpdateJob.php?JobId=<?php echo($JobDetails['JobId']);?>" method="POST">
                <div class="index4-first">
                    <p class="index4-first-wrapper">Company name</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="TCS" value="<?php echo($JobDetails['CompanyName'])?>" name="CompanyName" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Job details</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="xyz" value="<?php echo($JobDetails['JobDetails'])?>" name="JobDetails" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Industry area</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Technology" value="<?php echo($JobDetails['IndustryArea'])?>" name="IndustryArea" required>
                </div>

                <div class="index4-radio">
                    <p class="index4-radio-wrapper">Gender</p>
                    <p class="index4-radio-colon">:</p>
                    <input type="radio" class="index4-radio-edit" value="Male" name="Gender" <?php if($JobDetails['Gender'] == "Male"){ echo("checked");}?> required>
                    <label for="index4-radio-edit" class="index4-radio-edit-wrapper">Male</label>
                    <input type="radio" class="index4-radio-edit" value="Female" name="Gender" <?php if($JobDetails['Gender'] == "Female"){ echo("checked");}?> required>
                    <label for="index4-radio-edit" class="index4-radio-edit-wrapper">Female</label>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Monthly Salary</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="30,XXXX/-" value="<?php echo($JobDetails['MonthlySalary'])?>" name="MonthlySalary" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Training period</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="6 months" value="<?php echo($JobDetails['TrainingPeriod'])?>" name="TrainingPeriod" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Location</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Ahmedabad" value="<?php echo($JobDetails['Location'])?>" name="Location" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Employment status</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Junior developer" value="<?php echo($JobDetails['Emp_status'])?>" name="Emp_status" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Employment type</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Full-Time Employee" value="<?php echo($JobDetails['Emp_Type'])?>" name="Emp_Type" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Experience</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="None" value="<?php echo($JobDetails['Experience'])?>" name="Experience" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Number of vacancies</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="05" value="<?php echo($JobDetails['NumberOfVacancies'])?>" name="NumberOfVacancies" required>
                </div>

                <div class="index4-submit">
                    <input type="submit" style="cursor: pointer;" class="index4-submit-wrapper" value="Edit a job" required>
                </div>
            </form>
        </div>
    </section>

    <?php } ?>