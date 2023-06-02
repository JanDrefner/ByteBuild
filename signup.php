<?php
@include 'config.php';

if (isset($_POST['register'])) {
    $ea = mysqli_real_escape_string($conn, $_POST['Email']);
    $fn = mysqli_real_escape_string($conn, $_POST['FName']);
    $ln = mysqli_real_escape_string($conn, $_POST['LName']);
    $p = md5($_POST['Pass']);
    $cp = md5($_POST['ConPass']);
    $select = " SELECT * FROM usertbl WHERE Email = '$ea' && Password_Hash = '$p' ";

    $result = mysqli_query($conn, $select);
    function valid_email($str)
    {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }

    if (strlen($p) < 8) {
        $error[] = 'Password must be at least 8 characters';
    } else if (!preg_match("/[a-z]/i", $p)) {
        $error[] = 'Password must contain at least one letter';
    } else if (!preg_match("/[0-9]/", $p)) {
        $error[] = 'Password must contain at least one number';
    } else if (!valid_email($ea)) {
        $error[] = 'Valid Email is required';
    } else {
        if (mysqli_num_rows($result) > 0) {
            $error[] = '<script>alert("Existing User")</script>';
        } else {
            if ($p != $cp) {
                $error[] = 'Password did not matched';
            } else {
                $insert = "INSERT INTO usertbl(Email,FirstName,LastName,Password_Hash) Values('$ea', '$fn', '$ln', '$p')";
                mysqli_query($conn, $insert);
            }
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
        <form method="POST" class="login-form" action="login.php">
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