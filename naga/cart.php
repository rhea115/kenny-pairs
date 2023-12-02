<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rhea Mae Naga">
	<link rel="stylesheet" href="styles.css">
   
    <title>Shopping Cart</title>
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

        .cart-container {
            max-width: 300px;
            margin: 30px auto;
            background-color: #FFFFDD;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cart-item {
            display: flex;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .item-image {
            flex: 1;
            margin-right: 20px;
        }

        .item-image img {
            max-width: 100%;
            height: auto;
        }

        .item-details {
            flex: 2;
        }

        .item-details h3 {
            margin: 0;
            font-size: 18px;
        }

        .item-details p {
            margin: 5px 0;
            color: #777;
        }

        .item-price {
            font-weight: bold;
            color: #333;
        }

        .cart-total {
            margin-top: 20px;
            text-align: right;
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
        <div class="cart-container">
    <h2>Your Shopping Cart</h2>

    <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) : ?>
        <?php foreach ($_SESSION['cart'] as $product_id => $product) : ?>
            <div class="cart-item">
                <div class="item-image">
                    <!-- You may use the actual path for product images -->
                    <img src="path/to/images/<?php echo $product_id; ?>.jpg" alt="<?php echo $product['name']; ?>">
                </div>
                <div class="item-details">
                    <h3><?php echo $product['name']; ?></h3>
                    <p>Price: $<?php echo number_format($product['price'], 2); ?></p>
                    <p>Quantity: <?php echo $product['quantity']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="cart-total">
            <p>Total: $<?php echo calculateTotal(); ?></p>
        </div>
    <?php else : ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>

    <?php
// functions.php

function calculateTotal()
{
    $total = 0;

    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product) {
            $total += $product['price'] * $product['quantity'];
        }
    }

    return number_format($total, 2);
}
?>
<a href="cart.php">HISTORY OF PURCHASE</a>
</nav>
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      const nav = document.querySelector('nav');
      const aTags = document.querySelectorAll('nav a');

      // Function to calculate the luminance of a color
      function getLuminance(rgb) {
        const [r, g, b] = rgb.match(/\d+/g);
        return (0.299 * r + 0.587 * g + 0.114 * b) / 255;
      }

      // Get the computed background color of the navigation
      const bgColor = window.getComputedStyle(nav).backgroundColor;

      // Check the background luminance and adjust text color accordingly
      const luminance = getLuminance(bgColor);
      if (luminance > 0.5) {
        aTags.forEach(aTag => {
          aTag.style.color = '#000'; // Dark text color for light background
        });
      } else {
        aTags.forEach(aTag => {
          aTag.style.color = '#fff'; // Light text color for dark background
        });
      }
    });
  </script>
  <script>
cart navigateToPage() {
    const categories = document.getElementById('categories');
    const selectedCategory = categories.value;

    // Define your URLs for different categories and navigate accordingly
    if (selectedCategory === 'earrings') {
        window.location.href = 'shop.php'; // Change 'fmenu.php' to the correct URL
    } else if (selectedCategory === 'necklaces') {
        window.location.href = 'Necklaces.php'; // Change 'dmenu.php' to the correct URL
    } else if (selectedCategory === 'bracelets') {
        window.location.href = 'Bracelates.php'; // Change 'dmenu.php' to the correct URL
    }else if (selectedCategory === 'rings') {
        window.location.href = 'rings.php'; // Change 'dmenu.php' to the correct URL
    }
}
</script>
<div id="cart">
    <h1>Shopping Cart (
        <?php
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            echo count($_SESSION['cart']);
        } else {
            echo '0';
        }
        ?> items)
    </h1>
</div>

		<div class="container">
        <?php
    // Check if the 'cart' key in $_SESSION is set and is an array
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        ?>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop through the items in the cart and display them
                $totalPrice = 0; // Initialize the total price
                foreach ($_SESSION['cart'] as $product_id => $product) {
                    $product_name = $product['name'];
                    $product_price = $product['price'];
                    $quantity = $product['quantity'];

                    // Calculate the total price for this product
                    $product_total = $product_price * $quantity;
                    $totalPrice += $product_total; // Update the total price
                    echo "<tr>
                            <td>{$product_name}</td>
                            <td>{$product_price}</td>
                            <td>{$quantity}</td>
                            <td>{$product_total}</td>
                        </tr>";
                }
                ?>
                 </tbody>
        </table>
        <p>Total: <?php echo $totalPrice; ?></p>
        <a href="placeorder.php">Proceed to Checkout</a>
        <?php
    } else {
        echo "<p>Your cart is empty.</p>";
    }
    ?>
    </div>

    <div class="back-button">
        <a href="placeorder.php">Place Order</a>
    </div>
    <div class="back-buttom">
        <a href="shop.php">Back to Shop</a>
    </div>
</div>
</body>
</html>