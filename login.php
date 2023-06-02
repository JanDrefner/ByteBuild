<?php
@include 'config.php';
session_start();
if (isset($_POST['submit'])) {

    $ea = mysqli_real_escape_string($conn, $_POST['Email']);
    $p = md5($_POST['Pass']);

    $select = " SELECT * FROM usertbl WHERE Email = '$ea' && Password_Hash = '$p' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        header('location:homepage.php');
        $_SESSION["Email"] = $ea;
        $_SESSION["Pass"] = $p;
        $_SESSION["user"] = 'user';
    } else {
        $error[] = 'User does not exist';
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
        <form class="login-form" method="post" action="homepage.php">
            <input type="email" class="login-form-text" placeholder="Email Address" name="email" required>
            <input type="password" class="login-form-text" placeholder="Password" name="password" required>
            <input type="submit" class="hero-btn" value="Login">
            <br><br>
            <a href="signup.php" class="btn-sl">Don't Have an Account?</a>
        </form>
        <?php
        if (isset($error)) {
            foreach ($error as $error) {
                $_SESSION["user"] = 'user';
                echo '<span class ="errormsg">' . $error . '</span>';
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</body>

</html>