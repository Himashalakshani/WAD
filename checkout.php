<html lang="en">

<head>
    <title>GLAMOROUS COSMETICS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="checkout.css">
</head>

<body>

    <header>
        <img src="images/logo.jpg">
        <nav>
            <ul>
                <li><a href="Home.php">HOME</a></li>
                <li><a href="product.php">PRODUCTS</a></li>
                <li><a href="About.php">ABOUT</a></li>
                <li><a href="Contact.php">CONTACT</a></li>
            </ul>
        </nav>
        <div style="margin-left: 40%; display: flex;align-items: center;">
            <li><a href="login.php"><img src="images/user-icon.png" style="width: 30px; height: 30px;"></a></li>
            <li><a href="logout.php"><i class="fa-sharp fa-solid fa-right-from-bracket fa-xl"></i></a></li>
            <li><a href="cart.php"><div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div></a></li>
         </div>
    </header>
    <br><br><br><br><br>
    <div class="row">

        <div class="col-75">
            <div class="container">
                <form action="#">

                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="user"></i> Full Name</label>
                            <input type="text" id="fname" name="firstname">
                            <label for="text"><i class="number"></i> Contact number</label>
                            <input type="text" id="Cnumber" name="number">
                            <label for="adr"><i class="address-card"></i> Address</label>
                            <input type="text" id="adr" name="address">
                            <label for="city"><i class="institution"></i> City</label>
                            <input type="text" id="city" name="city">
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>

                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname">
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber">
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth">

                            <div class="row">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear">
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv">
                                </div>
                            </div>
                        </div>

                    </div>

                    <input type="submit" value="Continue to checkout" class="btn">
                </form>
            </div>
        </div>
    </div>

</body>

</html>