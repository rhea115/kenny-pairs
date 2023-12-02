<?php
function getProductById($product_id) {
    // Replace this with your actual database query or data retrieval logic
    $products = [
        1 => ['name' => 'Beef Tapa', 'price' => 130],
        2 => ['name' => 'Chicken Cordon', 'price' => 140],
        3 => ['name' => 'Breaded Pork', 'price' => 125],
        4 => ['name' => 'Clubhouse with fries (2-3 persons)', 'price' => 165],
        5 => ['name' => 'Grilled Tuna Sandwich', 'price' => 68],
        6 => ['name' => 'Crispy Coated Fries (1-2 persons)', 'price' => 95],
        7 => ['name' => 'Snitzel Stixs (12 pcs)', 'price' => 96],
        8 => ['name' => 'Garlic and Buttered Chicken (500g)', 'price' => 240],
        9 => ['name' => 'Tuna Carbonara (3-4 persons) *Spicy or Original Flavor', 'price' => 239],
        10 => ['name' => 'Solo Carbonara w/ Garlic Bread', 'price' => 120],
        11 => ['name' => 'Lemon', 'price' => 90],
        12 => ['name' => 'Passion Fruit Green Tea', 'price' => 90],
        13 => ['name' => 'Lychee', 'price' => 105],
        14 => ['name' => 'Blueberry', 'price' => 105],
        15 => ['name' => 'Strawberry', 'price' => 105],
        16 => ['name' => 'Caramel', 'price' => 95],
        17 => ['name' => 'Honeydew', 'price' => 95],
		18 => ['name' => 'Okinawa', 'price' => 95],
		
        // Add more products as needed
    ];

    // Check if the product ID exists in the array
    if (isset($products[$product_id])) {
        return $products[$product_id];
    } else {
        return null; // Return null if the product ID is not found
    }
}
// Define a function to calculate the total cost of items in the cart
function calculateTotal() {
    $total = 0;

    // Check if the 'cart' key in $_SESSION is set and is an array
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product_id => $product_data) {
            $product = getProductById($product_id); // Define this function
            if ($product !== null) {
                // Cast quantity and price to appropriate data types
                $quantity = (int)$product_data['quantity'];
                $price = (float)$product['price'];

                // Calculate total for each product and add it to the overall total
                $total += $price * $quantity;
            }
        }
    }

    return $total;
}
?>

