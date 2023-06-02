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
                                <li><a class="dropdown-item text-center" href="login.php">Sign Out</a></li>
                            </ul>
                        </div>
                    </li>
            </div>
    </div>
    <div class="border"></div>
<br>
    <div class="contact-section">

            <h2 class="contact-txt">Contact Us</h2>
            <form class="contact-form" method="post">
                <input type="text" class="contact-form-text" placeholder="Name" name="name">
                <input type="email" class="contact-form-text" placeholder="Email" name="email">
                <textarea class="contact-form-text" placeholder="Your message" name="msg"></textarea>
                <input type="hidden" name="form" value="A">
                <input type="submit" class="hero-btn" value="Submit">
                
            </form>

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>