<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up | Placement Zone</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <section class="index2">
        <div class="index2-box">
            <div class="index2-banner">
                <img class="index2-logo" src="Images/logo1.jpeg">
                <p class="index2-banner-wrapper">Make the most of your professional life</p>
            </div>

            <div class="index2-form">
                <form action="./PHP/InsertNewEntry.php?value=Company" method="POST">
                   
                    <div class="index2-name">
                        <input type="text" class="index2-name-wrapper" placeholder="Company name" name="CompanyName" required>
                    </div>

                    <div class="index2-email">
                        <input type="text" class="index2-email-wrapper" placeholder="Industry Area" name="IndustryArea" required>
                    </div>

                    <div class="index2-phone">
                        <input type="text" class="index2-phone-wrapper" placeholder="Location" name="Location" required>
                    </div>
                    <div class="index2-phone">
                        <input type="text" class="index2-phone-wrapper" placeholder="Email address" name="Email" required>
                    </div>

                    <div class="index2-password">
                        <input type="password" class="index2-password-wrapper" placeholder="Password" name="Password" required>
                    </div>

                    <div class="index2-submit">
                        <input type="submit" class="index2-submit-wrapper" value="Sign up" required>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>