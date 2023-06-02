<?php
@include 'db-config.php';
session_start();
if (isset($_POST['submit'])) {
    $conn = new PDO("mysql:host={$servername};dbname={$database};charset=utf8", $username, $password);
    $ea = trim($_POST['email']);
    $p = md5($_POST['password']);

    $sql = " SELECT UserID, Email, FirstName, LastName FROM usertbl WHERE Email = :email && Password_Hash = :password LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $ea, PDO::PARAM_STR);
    $stmt->bindParam(":password", $p, PDO::PARAM_STR);

    if ($stmt->execute() > 0) {
        while ($account = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $_SESSION['user'] = $account;
            header('location:homepage.php');
            exit();
        }
        $error[] = 'User does not exist';
    } else {
        $error[] = 'The connection to the database has failed. Please Try Again!';
    } $stmt=null;
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