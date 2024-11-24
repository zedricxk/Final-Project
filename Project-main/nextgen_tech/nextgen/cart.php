<?php
session_start();

// Initialize the cart if it doesn’t exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle removing items from the cart
if (isset($_GET['remove_from_cart'])) {
    $product_name = $_GET['remove_from_cart'];
    foreach ($_SESSION['cart'] as $key => $product) {
        if ($product['name'] == $product_name) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
    // Reindex the array to maintain order after removing an item
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

// Handle the checkout process
$thank_you_message = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['checkout'])) {
    $name = htmlspecialchars($_POST['name']);
    $payment_method = htmlspecialchars($_POST['payment_method']);

    // Handle payment method
    if ($payment_method == 'paypal') {
        $payment_message = "You selected PayPal as your payment method.";
    } elseif ($payment_method == 'gcash') {
        $payment_message = "You selected GCash as your payment method.";
    } elseif ($payment_method == 'cash_on_delivery') {
        $payment_message = "You selected Cash on Delivery as your payment method.";
    }

    // Clear the cart
    $_SESSION['cart'] = [];
    $thank_you_message = "Thank you, $name! Your order has been successfully placed. $payment_message";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .nav-links {
            list-style: none;
            display: flex;
        }
        .nav-links li {
            margin-left: 20px;
        }
        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }
        .cart {
            font-size: 20px;
            cursor: pointer;
        }
        .cart-item {
            background-color: #fff;
            padding: 15px;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .cart-item img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 10px;
        }
        .cart-item h3 {
            margin: 0;
        }
        .cart-item button {
            background-color: #ff5722;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .cart-item button:hover {
            background-color: #e64a19;
        }
        .checkout-btn {
            display: block;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px;
            width: 200px;
            margin: 20px auto;
            border-radius: 5px;
            text-align: center;
            font-size: 18px;
            cursor: pointer;
        }
        .checkout-btn:hover {
            background-color: #45a049;
        }
        .empty-cart {
            text-align: center;
            margin: 50px 0;
        }
        .payment-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            width: 300px;
        }
        .payment-form input,
        .payment-form div {
            width: 100%;
            margin: 10px 0;
        }
        .payment-form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px;
            width: 100%;
            margin-top: 10px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        .payment-form button:hover {
            background-color: #45a049;
        }
        .thank-you {
            text-align: center;
            margin: 50px;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav>
    <div class="logo">NEXTGEN TECH</div>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="index.php">About</a></li>
        <li><a href="index.php">Contact</a></li>
        <li><a href="cart.php" class="cart">🛒 <span id="cart-count"><?= count($_SESSION['cart']) ?></span></a></li>
    </ul>
</nav>

<!-- Thank You Message -->
<?php if ($thank_you_message): ?>
    <div class="thank-you">
        <h1>Thank You!</h1>
        <p><?= $thank_you_message ?></p>
        <a href="shop.php"><button class="checkout-btn">Back to Shop</button></a>
    </div>
<?php else: ?>

<!-- Cart Items -->
<div class="cart-items-container">
    <?php if (count($_SESSION['cart']) > 0): ?>
        <?php foreach ($_SESSION['cart'] as $product): ?>
            <div class="cart-item">
                <img src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>">
                <div>
                    <h3><?= $product['name'] ?></h3>
                    <p><?= $product['price'] ?></p>
                </div>
                <a href="?remove_from_cart=<?= urlencode($product['name']) ?>">
                    <button>Remove</button>
                </a>
            </div>
        <?php endforeach; ?>

        <div class="payment-form">
            <h2>Enter Payment Details</h2>
            <form method="POST">
                <input type="text" name="name" placeholder="Full Name" required>
                <label for="payment-method">Select Payment Method:</label>
                <div>
                    <input type="radio" id="paypal" name="payment_method" value="paypal" required>
                    <label for="paypal">PayPal</label>
                </div>
                <div>
                    <input type="radio" id="gcash" name="payment_method" value="gcash" required>
                    <label for="gcash">GCash</label>
                </div>
                <div>
                    <input type="radio" id="cod" name="payment_method" value="cash_on_delivery" required>
                    <label for="cod">Cash on Delivery</label>
                </div>
                <button type="submit" name="checkout">Proceed to Checkout</button>
            </form>
        </div>
    <?php else: ?>
        <div class="empty-cart">
            <h2>Your cart is empty!</h2>
            <a href="shop.php"><button class="checkout-btn">Go to Shop</button></a>
        </div>
    <?php endif; ?>
</div>

<?php endif; ?>

</body>
</html>
