<?php

if (isset($_POST['submitButton'])) {
    echo 'Form was submitted';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to NetflixClone</title>
    <!-- css -->
    <link rel='stylesheet' type='text/css' href='assets/style/style.css'>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="signInContainer">
        <div class="column">
            <div class="header">
                <img src='assets/images/logo.png' title='logo' alt='site logo'>
                <h3>Sign Up</h3>
                <span>to continue to KamilFlix</span>
            </div>
            <form method="POST">
                <input type="text" name="firstName" id="firstName" placeholder="First Name" required>
                <input type="text" name="lastName" id="lastName" placeholder="Last Name" required>
                <input type="text" name="username" id="username" placeholder="Username" required>
                <input type="email" name="email" id="email" placeholder="Email Address" required>
                <input type="email" name="email" id="email" placeholder="Confirm Email" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <input type="password" name="password" id="password" placeholder="Confirm password" required>
                <input type="submit" name="submitButton" id="submitButton" name="SUBMIT">
            </form>
            <div>
                <span>Already have an account? Sign in <a href='login.php' class='signInMessage'>here!</a></span>
            </div>

        </div>
    </div>
</body>

</html>