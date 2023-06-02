<?php
@include 'db-config.php';
@include 'AccountDAO.php';
if (isset($_POST['register'])) {
    $dao = new AccountDAO($servername, $database, $username, $password);
    $email = trim($_POST['Email']);
    $firstname = trim($_POST['FName']);
    $lastname = trim($_POST['LName']);
    $password = md5($_POST['Pass']);
    $confirmpassword = md5($_POST['ConPass']);

    if (strlen($password) < 8) {
        echo "1";
        $error[] = 'Password must be at least 8 characters';
    } else if (!preg_match("/[a-z]/i", $password)) {
        $error[] = 'Password must contain at least one letter';
        echo "2";
    } else if ($_POST['Pass'] != $_POST['ConPass']) {
        $error[] = 'Password must match';
        echo "3";
    } else if (!preg_match("/[0-9]/", $password)) {
        $error[] = 'Password must contain at least one number';
        echo "4";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = 'Valid Email is required';
        echo "5";
    } else {
        $isAdded = $dao->signUpUser($email, $firstname, $lastname, $password);
        if (!$isAdded) {
            $error[] = 'There was an error in adding a User';
            echo "6";
        } else {
            header("Location: login.php");
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>BYTE BUILD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="bg-dark text-white">
    <div class="container-fluid d-flex justify-content-center mt-5">
        <a href="homepage.html"><img src="imgs/bytebuildlogo.png" alt="logo"></a>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <form method="POST" class="login-form" action="signup.php">
            <input type="email" class="login-form-text" placeholder="Email Address" id="Email" name="Email" autocomplete="off" required>
            <input type="text" class="login-form-text" placeholder="First Name" id="FName" name="FName" autocomplete="off" required>
            <input type="text" class="login-form-text" placeholder="Last Name" id="LName" name="LName" autocomplete="off" required>
            <input type="password" class="login-form-text" placeholder="Password" id="Pass" name="Pass" autocomplete="off" required>
            <input type="password" class="login-form-text" placeholder="Confirm Password" id="ConPass" name="ConPass" autocomplete="off" required>
            <input type="submit" name="register" id="register" class="hero-btn" value="Sign Up">
            <br><br>
            <a href="login.php" class="btn-sl">Already a Member?</a>



        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</body>

</html>