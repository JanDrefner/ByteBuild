<?php
@include 'db-config.php';
@include 'AccountDAO.php';
session_start();
if (isset($_POST['submit'])) {
    $dao = new AccountDAO($servername, $database, $username, $password);
    $email = trim($_POST['email']);
    $password = md5($_POST['password']);

    $user = $dao->loginUser($email, $password);

    if (!is_null($user)) {
        $_SESSION['user'] = $user;
        header('Location: homepage.php');
        exit();
    } else {
        $_SESSION["error"] = "User does not Exist.";
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
        <form class="login-form" method="post" action="login.php">
            <input type="email" class="login-form-text" placeholder="Email Address" name="email" required>
            <input type="password" class="login-form-text" placeholder="Password" name="password" required>
            <input type="submit" name="submit" class="hero-btn" value="Login">
            <br><br>
            <a href="signup.php" class="btn-sl">Don't Have an Account?</a>
        </form>
        <?php
        if (isset($_SESSION["error"]) && !is_null($_SESSION["error"])) {
        ?>
            <span class="message"> <?php echo $_SESSION["error"]; ?></span>
        <?php
            $_SESSION["error"] = null;
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</body>

</html>