<?php
@include 'db-config.php';
@include 'ProductDAO.php';
$dao = new ProductDAO($servername, $database, $username, $password);
$parts = $dao->getAllPcParts();
$peripherals = $dao->getAllPeripherals();
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Shop page </title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="nav-container">
            <a href="homepage.php"><img src="imgs/bytebuildlogo.png" alt="logo" class="logo"></a>

            <!-- Cart -->

            <i class='bx bx-shopping-bag' id="cart-icon"></i>

            <div class="cart">
                <h2 class="cart-title">Your Cart</h2>
                <div class="cart-content">

                </div>

                <!-- total -->
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">$0</div>
                </div>
                <!-- Buy button -->
                <button type="button" class="btn-buy">Buy Now</button>
                <!-- close -->
                <i class='bx bx-x' id="close-cart"></i>

            </div>

        </div>
    </header>
    <!-- Shop Container -->
    <section class="shop-container">

        <h2 class="section-title">PC Parts</h2>

        <div class="shop-content">
            <?php
            if (empty($parts)) {
            ?>
                <span class="message">Sorry there are no available PC Parts as of now!</span>
                <?php
            } else {
                foreach ($parts as $part) {
                ?>
                    <div class="product-box">
                        <img src="<?php echo $part['ProductImage']; ?>" alt="" class="product-img">
                        <h2 class="product-title"><?php echo $part['ProductName']; ?></h2>
                        <span class="price">$ <?php echo number_format($part['ProductPrice'], 2); ?></span>
                        <i class='bx bx-shopping-bag add-cart' style='color:#ffc107'></i>
                    </div>
            <?php
                }
            }
            ?>
        </div>

        <br><br><br><br><br><br>
        <h2 class="section-title">Peripheral Devices</h2>

        <div class="shop-content">
            <?php
            if (empty($peripherals)) {
            ?>
                <span class="message">Sorry there are no available PC Parts as of now!</span>
                <?php
            } else {
                foreach ($peripherals as $peripheral) {
                ?>
                    <div class="product-box">
                        <img src="<?php echo $peripheral['ProductImage']; ?>" alt="" class="product-img">
                        <h2 class="product-title"><?php echo $peripheral['ProductName']; ?></h2>
                        <span class="price">$ <?php echo number_format($peripheral['ProductPrice'], 2); ?></span>
                        <i class='bx bx-shopping-bag add-cart' style='color:#ffc107'></i>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="main.js"></script>

</body>

</html>