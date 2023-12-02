<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            background-image: url("rings/hihi.jpg");
            background-size: cover;
        }
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Times New Roman', Times, serif;
    
      }

      .header1 {
        width: 100%;
        background: #fff;
        padding-left: 2%;
        padding-right: 2%;
      }

      .header1 p {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-transform: uppercase;
        font-size: 13px;
      }
      .top-nav {
        display: flex;
        padding: 13px 0 10px;
        border-bottom: 1px solid #bababa;
        text-align: center;
        padding: 15px 10px;
      }
	  .icons {
        display: flex;
        padding: 0%;
        margin-left: auto;
        gap: 30px;
        cursor: pointer;
      }
      nav {
        display: flex;
        position: relative;
        justify-content: space-between;
        text-align: center;
        padding: 15px 10px;
      }
      nav .icon {
        font-size: 25px;
        font-weight: 800;
        margin-right: 10px;
        margin-left: 5px;
        text-transform: uppercase;
        color: black;
      }
      nav ul {
        display: flex;
        margin: auto 0;
        flex-grow: 1;
      }

      nav ul li {
        margin: 0 2px;
        border-left: 1px solid #bababa;
        padding: 5px;
      }

      nav ul li a {
        color: white ;
        font-weight: bolder;
        font-size: 5px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-left: 15px;
      }

      nav ul li a:hover a {
        background: #fff;
      }
      nav .search_box {
        display: flex;
        height: 30px;
        padding-left: 10px;
        margin-top: 5px;
        flex-grow: 1;
        margin-left: 20px;
      }

      nav .search_box input {
        border: 1px solid;
        padding: 10px;
        box-shadow: 0 0 10px gray;
        background: #fff;
        height: 100%;
        padding: 0 10px;
        font-size: 15px;
        width: 350px;
      }

      nav .search_box span { font-size: 15px;
        background: #fff;
        height: 100%;
        padding: 5px;
        position: relative;
        cursor: pointer;
        z-index: 1;
      }
	  .second-nav {
        display: flex;
        align-items: center;
        background: #fff;
        border-top: 1px solid #bababa;
      }
      .second-nav ul {
        display: flex;
        list-style: none;
        padding-left: 40px;
        margin-top: 8px;
        margin-left: auto;
      }

      .second-nav ul li {
        margin: 0 5px;
      }

      .second-nav ul li a {
        font-size: 13px;
        color: #B68D52 ;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 1px;
      }

      .second-nav ul li a:hover {
        position: relative;
      }

      .second-nav ul li a:hover::after {
        content: "";
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #B68D52  ;
      }
  
        .container {
            max-width: 400px;
            margin: 30px auto;
            background-color: #FFFFDD;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0;
            font-weight: bold;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
 .back-button {
            margin-top: 20px;
            text-align: center;
        }

        .back-button a {
            text-decoration: none;
            background-color:  #B68D52;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .back-buttom {
            margin-top: 20px;
            text-align: center;
        }

        .back-buttom a {
            text-decoration: none;
            background-color: white;
            color: #B68D52;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        .summary {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }
    </style>
</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X</title>
</head>
<body style="background-color: #white ; font-family: Arial, sans-serif;">
    <header style="padding: 20px; background-color: #B68D52 ; text-align: center;">
        <h1 style="color: #333333; font-size: 24px; margin: 0;"></h1>
    </header>

    <body> 
	<nav class="second-nav">
        <div class="icon">Kenny Pairs</div>
            <div class="search_box">
                <input type="search" placeholder="Search">
                <span class="fas fa-search"></span>
            </div>
            <ul>
                     <li><a href="index.php">HOME</a></li>
                    <li><a href="profile.php">PROFILE</a></li>
                    <li><a href="shop.php">SHOP</a></li>
                    <li><a href="cart.php">CART</a></li>
                    <li><a href="aboutus.php">ABOUT US</a></li>
                    <li><a href="sign-in.php">SIGN IN</a></li>
                    <li><a href="sign-up.php">SIGN UP</a></li>
                </ul>
                </div>
        </nav>

<body>
    <div class="container">
        <h2>Checkout Form</h2>

        <form action="process_checkout.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>

            <div class="back-button">
            <a href="orderSuccess.php">Place Order</a>
        </div>
        <div class="back-buttom">
        <a href="cart.php">Back</a>
    </div>
    

        <div class="summary">
            <h2>Order Summary</h2>
            <?php
            // Display cart items from the session
            session_start();

            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $item) {
                    echo "<p>{$item['name']} - {$item['price']}</p>";
                }
            } else {
                echo "<p>No items in the cart</p>";
            }
            ?>
        </div>
    </div>
</body>

</html>
