<html lang="en">

<head>
    <title>GLAMOROUS COSMETICS</title>
    <link rel="stylesheet" type="text/css" href="cart.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/d86ac3d16c.js" crossorigin="anonymous"></script>

</head>

<body>

    <header>
        <img src="images/logo.jpg">
        <nav>
            <ul>
                <li><a href="Home.php">HOME</a></li>
                <li><a href="Product.php">PRODUCTS</a></li>
                <li><a href="About.php">ABOUT</a></li>
                <li><a href="Contact.php">CONTACT</a></li>
            </ul>
        </nav>
        <div style="margin-left: 40%; display: flex;align-items: center;">
            <li><a href="login.php"><img src="images/user-icon.png" style="width: 30px; height: 30px;"></a></li>
            <li><a href="logout.php"><i class="fa-sharp fa-solid fa-right-from-bracket fa-xl"></i></a></li>
            <li><a href="cart.html"><img src="images/bag-icon.png" style="width: 30px; height: 30px;"></a></li>
         </div>
    </header>

    <body>
        <br><br><br><br><br><br>
        <div class="container">
            <div id="root"></div>
            <div class="sidebar">
                <div class="head">
                    <p>My Cart</p>
                </div>
                <div id="cartItem">Your cart is empty </div>
                <div class="foot">
                    <h3>Total</h3>
                    <h2 id="total">Rs.00</h2>
                </div>
                <br><br>
                <form action="checkout.html">
                    <button type="submit" class="btn">Proceed to checkout</button>
                </form>

            </div>

        </div>
        <script src="cart.js"></script>
    </body>