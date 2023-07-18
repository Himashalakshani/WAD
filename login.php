<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: home.php");
}
if(isset($_POST["submit"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE  email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      $userRole = $row["userrole"];
        if($userRole == 0)
            header("Location: home.php");
        elseif($userRole == 1)
            header("Location: adminpage.php");
    
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="Form.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/d86ac3d16c.js" crossorigin="anonymous"></script>
    <title>Login & Registration Form</title>
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

    <div class="container">
        <div class="forms">
            <div class="form login">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <span class="title">Login</span>
                    <div class="input-field">
                        <input type="text" id="email" name="email" placeholder="Enter your email" required>
                        <i class="email"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" id="password" name="password" class="password"
                            placeholder="Enter your password" required>
                        <i class="password"></i>

                    </div>
                    <div class="input-field button">
                        <input type="submit" name="submit" id="submit" value="Login">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="register.php" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

</body>

</html>