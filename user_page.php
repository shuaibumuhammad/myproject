
<?php

// check if a user is logged in with the email before that user can access this page

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to M&M Stroes</title>
    <link rel="stylesheet" href="asset/css/home.css">

    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />

</head>
<body>

    <header>
        <a href="" class="logo">M&M Stores</a>
        <div id="cart-icon">
           <i class="ri-shopping-bag-line"></i>

            <span class="cart-item-count"></span>
        </div>
    </header>

    <!-- cat -->
    <div class="cart">
        <h2 class="cart-title">Your Cart</h2>
        <div class="cart-content">
            <div class="cart-box">
                <img src="asset/image/phone1.jpeg" alt="" class="cart-img">
                <div class="cart-detail">
                    <h2 class="cart-product-title">Ultra Sound Headphone</h2>
                    <span class="cart-price">&#8358,100</span>
                    <div class="cart-quantity">
                        <button id="decrement">-</button>
                        <span class="number">1</span>
                        <button id="increment">+</button>
                    </div>
                </div>
                <i class="ri-delete-bin-line cart-remove"></i>
            </div>
        </div>

        <div class="total">
            <div class="total-tile">Total</div>
            <div class="total-price">No</div>
        </div>
        <button class="btn-buy">Buy Now</button>
        <i class="ri-close-line" id="cart-close"></i>

    </div>

    <section class="shop">
        <h1 class="section-title">
            Shop Products
        </h1>
        <div class="product-content">
            <div class="product-box">
                <div class="img-box">
                    <img src="asset/image/phone1.jpeg" alt="">
                </div>
                <h2 class="product-title">Ultra sound Headphone</h2>
                <div class="price-and-cart">
                    <span class="price">&#8358;100,000</span>
                    <i class="ri-shopping-bag-line add-cart"></i>
                </div>
            </div>

            <div class="product-box">
                <div class="img-box">
                    <img src="asset/image/phone1.jpeg" alt="">
                </div>
                <h2 class="product-title">Ultra sound Headphone</h2>
                <div class="price-and-cart">
                    <span class="price">&#8358;100,000</span>
                    <i class="ri-shopping-bag-line add-cart"></i>
                </div>
            </div>

            <div class="product-box">
                <div class="img-box">
                    <img src="asset/image/phone1.jpeg" alt="">
                </div>
                <h2 class="product-title">Ultra sound Headphone</h2>
                <div class="price-and-cart">
                    <span class="price">&#8358;100,000</span>
                    <i class="ri-shopping-bag-line add-cart"></i>
                </div>
            </div>

            <div class="product-box">
                <div class="img-box">
                    <img src="asset/image/phone1.jpeg" alt="">
                </div>
                <h2 class="product-title">Ultra sound Headphone</h2>
                <div class="price-and-cart">
                    <span class="price">&#8358;100,000</span>
                    <i class="ri-shopping-bag-line add-cart"></i>
                </div>
            </div>

            <div class="product-box">
                <div class="img-box">
                    <img src="asset/image/phone1.jpeg" alt="">
                </div>
                <h2 class="product-title">Ultra sound Headphone</h2>
                <div class="price-and-cart">
                    <span class="price">&#8358;100,000</span>
                    <i class="ri-shopping-bag-line add-cart"></i>
                </div>
            </div>

        </div>
    </section>


      <button onclick="window.location.href='logout.php'">Logout</button>
    

    <script src="asset/js/home.js"></script>
</body>
</html>