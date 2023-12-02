<?php
session_start(); // Start the session at the very beginning

if (!isset($_SESSION["user"]) || $_SESSION["user"] !== "yes") {
    // If the user is not logged in, redirect to the login page or any other appropriate action.
}

// Include the functions.php file using a relative path, but use require_once to ensure it's included only once
require_once('checkout.php');

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    // Retrieve product information from the form submission
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Initialize the cart session if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Check if the product is already in the cart
    if (isset($_SESSION['cart'][$product_id])) {
        // Increment the quantity if the product is already in the cart
        $_SESSION['cart'][$product_id]['quantity'] += 1;
    } else {
        // Add the product to the cart if it's not already there
        $_SESSION['cart'][$product_id] = [
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => 1,
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Maria Chrissa Ecleo">
	<link rel="stylesheet" href="styles.css">
  <title>CART</title>
</head>
<body>
  <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/400486039_1078560006496196_4399481876869341213_n.png?stp=dst-png_p206x206&_nc_cat=105&ccb=1-7&_nc_sid=510075&_nc_eui2=AeEChTQU7IWtHXoN4ScdZCS0cfzw9ht5tplx_PD2G3m2mSGO8iwN0pEVr7dvNlx50FbvoHfvqKjq9WQqD-wIVb0T&_nc_ohc=9bRZJ8PcKkAAX8CWCGL&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTnOxUcCmUxuK63Z4Tm6RYJKOwOmZlc8oUppTBspH4EFA&oe=65855870" alt="Tea Shop Logo" class="logo">
  <nav>
  <a href="index.php">Home</a>
  <a href="profile.php">Profile</a>
  <div class="dropdown">
  <a href="usermenu.php">Menu</a>
    <div class="dropdown-content">
      <a href="rings.php">Earrings</a>
      <a href="Necklaces.php">Necklaces</a>
      <a href="Bracelates.php">Bracelets</a>
      <a href="rings.php">Rings</a>
    </div>
  </div>
  <a href="profile.php">About Us</a>
  <a href="shop.php">Shop</a>
  <a href="cart.php" style="text-decoration: none; color: #333;">
  <i class="fas fa-shopping-bag" style="margin-right: 5px;"></i>
    Cart (<?php echo isset($_SESSION['cart']) && is_array($_SESSION['cart']) ? count($_SESSION['cart']) : '0'; ?>)
</a>
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
function navigateToPage() {
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
        <a href="cart.php">Proceed to Checkout</a>
        <?php
    } else {
        echo "<p>Your cart is empty.</p>";
    }
    ?>
    </div>
 <footer>
    <p>&copy; 2023 CTea Online Shop</p>
    <a href="usertac.php">Terms of Service</a>
    <a href="userpap.php">Privacy Policy</a>
  </footer>
</body>
</html>
