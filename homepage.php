<?php
session_start();
@include 'config.php';
if (isset($_SESSION['user'])) {
  $user = $_SESSION['user'];
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

    <title>BYTE BUILD</title>
</head>

<body class="bg-dark text-white">

    <div class="container-fluid d-flex justify-content-center">
        <nav class="navbar navbar-expand-xl navbar-light">
            <img src="imgs/bytebuildlogo.png" class="d-inline-block align-top">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="toggleMobileMenu">
                <ul class="navbar-nav text-center">
                    <li><a href="homepage.php" class="w3-bar-item w3-button">HOME</a></li>
                    <li><a href="shop.php" class="w3-bar-item w3-button">SHOP</a></li>
                    <li><a href="homepage.php#about" class="w3-bar-item w3-button">ABOUT</a></li>
                    <li><a href="contact.php" class="w3-bar-item w3-button">CONTACT</a></li>
                    <!-- PROFILE DROPDOWN -->
                    <li>
                        <div id="profiledrop" class="dropdown d-flex justify-content-center ms-1 mt-1">
                            <a class="btn btn-warning dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-center" href="#">ACCOUNT</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <?php
                                if (isset($user)){
                                ?>
                                <li><span class="dropdown-item text-center"><?php echo $user['FirstName'] ." ". $user['LastName']; ?></span></li>
                                <li><a class="dropdown-item text-center" href="logout.php">Sign Out</a></li>
                                <?php
                                } else {
                                ?>
                                    <li><a class="dropdown-item text-center" href="signup.php">Sign Up</a></li>
                                    <li><a class="dropdown-item text-center" href="login.php">Login</a></li>    
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </li>
            </div>
    </div>

    <hr>

    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgs/pcsetup4.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h1>WELCOME TO BYTE BUILD!</h1>
                    <a href="shop.php" class="hero-btn">Shop Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/pcsetup2.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h1>WELCOME TO BYTE BUILD!</h1>
                    <a href="shop.php" class="hero-btn">Shop Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/pcsetup3.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h1>WELCOME TO BYTE BUILD!</h1>
                    <a href="shop.php" class="hero-btn">Shop Now</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <hr>
    <br><br>

    <div class="card container-fluid d-flex justify-content-center bg-warning" style="opacity: .9">
        <div class="container-fluid d-flex justify-content-center card-body">
            <blockquote class="blockquote mb-0">
                <p style="font-size: 64px;">"Building the future, one byte at a time."</p>
            </blockquote>
        </div>
    </div>

    <br><br><br>

    <section id="about" class="ms-5 mx-5 mb-5">
        <h1 class="d-flex justify-content-center">About Us</h1><br>
        <div class="container d-flex justify-content-center">
            <p id="about" style="font-size: 30pt;" class="text-center">
                Welcome to Byte Build Store, where we provide cutting-edge technology solutions for all your computing needs.
                We understand the fast-paced nature of the technology industry and strive to provide the latest hardware and software products to help you stay ahead of the game.
                Whether you're a professional gamer or a business owner, we have a wide selection of products to meet your needs, from high-performance CPUs and GPUs to the latest in software and peripherals.
                Our experienced and knowledgeable staff are always available to answer your questions and provide recommendations.
                At Byte Build Store, we're committed to providing the best possible experience for all our customers.</p>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>