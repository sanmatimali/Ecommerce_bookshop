<?php
session_start();
include('hms/include/config.php');

// Add product to cart
if (isset($_POST['pcode']) && isset($_POST['pname']) && isset($_POST['pimage']) && isset($_POST['pprice'])) {
    $code = $_POST['pcode'];
    $name = $_POST['pname'];
    $image = $_POST['pimage'];
    $price = $_POST['pprice'];
    $prodiscount = $_POST['prodiscount'];
   
    $qty = 1;

    // Check if product is already in cart
    $ret = mysqli_query($con, "SELECT product_code FROM cart WHERE product_code='" . mysqli_real_escape_string($con, $code) . "'");
    $num = mysqli_fetch_array($ret);
    $check_code = isset($num['product_code']) ? $num['product_code'] : '';

    if (!$check_code) {
        // Insert into cart
        $query = mysqli_query($con, "INSERT INTO cart (proname, proprice, prodiscount, proimg, quantity, total_price, product_code) 
            VALUES (
                '" . mysqli_real_escape_string($con, $name) . "', 
                '" . mysqli_real_escape_string($con, $price) . "', 
                '" . mysqli_real_escape_string($con, $prodiscount) . "', 
                '" . mysqli_real_escape_string($con, $image) . "', 
                '" . mysqli_real_escape_string($con, $qty) . "', 
                '" . mysqli_real_escape_string($con, $price * $qty) . "', 
                '" . mysqli_real_escape_string($con, $code) . "'
            )");

        if ($query) {
            echo "Item added to your cart";
        }
    } else {
        echo "Item already added to your cart";
    }
}

// Count cart items
if (isset($_GET['cartItem']) && ($_GET['cartItem'] == 'cart_item')) {
    $ret1 = mysqli_query($con, "SELECT * FROM cart");
    $num1 = mysqli_num_rows($ret1);
    echo json_encode($num1);
}

// Remove one item
if (isset($_GET['remove'])) {
    $id = $_GET['remove'];
    mysqli_query($con, "DELETE FROM cart WHERE cart_id='" . mysqli_real_escape_string($con, $id) . "'");
    $_SESSION["showAlert"] = "block";
    $_SESSION["message"] = "Item removed from cart";
    header("location:cart.php");
}

// Clear all items
if (isset($_GET['clear'])) {
    mysqli_query($con, "DELETE FROM cart");
    $_SESSION["showAlert"] = "block";
    $_SESSION["message"] = "All items removed from the cart";
    header("location:cart.php");
}

// Update quantity
if (isset($_POST['pqty'])) {
    $qty1 = $_POST['pqty'];
    $id3 = $_POST['pid'];
    $price1 = $_POST['pprice'];
    $prodiscount = $_POST['prodiscount'];
    $total_price = ($price1 - $prodis) * $qty1;

    mysqli_query($con, "UPDATE cart SET 
        quantity='" . mysqli_real_escape_string($con, $qty1) . "', 
        total_price='" . mysqli_real_escape_string($con, $total_price) . "' 
        WHERE cart_id='" . mysqli_real_escape_string($con, $id3) . "'");
}

// Place order
if (isset($_POST['action']) && ($_POST['action'] == 'order')) {
    $name1 = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pmode = $_POST['pmode'];
    $products = $_POST['products'];
    $grand_total = $_POST['grand_total'];
    $testid = $_POST['testid'];
$pid=$_POST['pid'];
    $data = '';

    // Insert order
    $ret4 = mysqli_query($con, "INSERT INTO orders(name, email, phone, address, payment_mode, products,pro_id, paid_amount) 
        VALUES (
            '" . mysqli_real_escape_string($con, $name1) . "', 
            '" . mysqli_real_escape_string($con, $email) . "', 
            '" . mysqli_real_escape_string($con, $phone) . "', 
            '" . mysqli_real_escape_string($con, $address) . "', 
            '" . mysqli_real_escape_string($con, $pmode) . "', 
            '" . mysqli_real_escape_string($con, $products) . "', 
            '" . mysqli_real_escape_string($con, $pid) . "',
            '" . mysqli_real_escape_string($con, $grand_total) . "'
        )");

    // Clear the cart items that were ordered
    if ($ret4 && !empty($testid)) {
        mysqli_query($con, "DELETE FROM cart WHERE cart_id IN (" . mysqli_real_escape_string($con, $testid) . ")");
    }

    // Order success message
    $data .= '<div class="text-center animated-message">
                <h1><i class="fa fa-check-circle" aria-hidden="true"></i> Thank You!</h1>
                <h2>Your order is successfully placed!</h2>
                <h4 class="text-center">Item Purchased: ' . htmlspecialchars($products) . '</h4>
                <h4>Your name: ' . htmlspecialchars($name1) . '</h4>
                <h4>Your email: ' . htmlspecialchars($email) . '</h4>
                <h4>Your Phone: ' . htmlspecialchars($phone) . '</h4>
                <h4>Total Amount Paid: ' . number_format($grand_total, 2) . '</h4>
                <h4>Payment mode: ' . htmlspecialchars($pmode) . '</h4>
            </div>';
    echo $data;
}
?>


<style>
/* Custom Styles for Order Confirmation */
body {
    background-color: #f8f9fa; /* Light background */
    font-family: Arial, sans-serif; /* Font family */
}

.animated-message {
    background: linear-gradient(135deg, #ffffff, #e2e2e2); /* Gradient background */
    border: 1px solid #28a745; /* Green border */
    border-radius: 20px; /* Rounded corners */
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1); /* Enhanced shadow */
    padding: 40px; /* Increased padding for a spacious feel */
    margin: 30px auto; /* Center alignment */
    max-width: 600px; /* Limit max width */
    opacity: 0; /* Initial opacity for fade-in effect */
    transform: translateY(-30px); /* Slight upward movement */
    animation: slideIn 0.8s forwards, pulse 2s infinite; /* Animation for appearance and pulsating effect */
    position: relative; /* Position for pseudo-elements */
}

@keyframes slideIn {
    0% {
        opacity: 0;
        transform: translateY(-30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05); /* Slightly enlarge during pulse */
    }
}

h1 {
    color: #28a745; /* Green color for the thank you message */
    margin-bottom: 10px; /* Spacing below the header */
    font-size: 2.5rem; /* Larger font size */
    animation: fadeIn 0.5s ease-in; /* Fade-in animation */
}

h2 {
    color: #6c757d; /* Gray color for the sub-header */
    margin-bottom: 15px; /* Spacing below the sub-header */
    font-size: 1.5rem; /* Larger font size */
    animation: fadeIn 0.7s ease-in; /* Fade-in animation */
}

h4 {
    color: #343a40; /* Dark gray color for item details */
    margin-bottom: 10px; /* Spacing below each item */
    animation: fadeIn 0.9s ease-in; /* Fade-in animation */
}

h4:hover {
    color: #007bff; /* Change color on hover */
    transition: color 0.3s ease-in-out; /* Smooth transition */
}

/* Adding a wave effect for h1 */
@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Floating confetti animation */
.confetti {
    position: fixed;
    pointer-events: none;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 999;
}

.confetti-piece {
    position: absolute;
    width: 10px;
    height: 10px;
    opacity: 0.8;
    background: #28a745; /* Color of confetti */
    animation: fall 5s infinite;
}

@keyframes fall {
    0% {
        transform: translateY(-100%);
    }
    100% {
        transform: translateY(100vh); /* Fall to the bottom of the viewport */
    }
}
</style>

<script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Font Awesome for icons -->
<script>
    // Confetti effect
    function createConfetti() {
        const confettiContainer = document.createElement('div');
        confettiContainer.classList.add('confetti');
        document.body.appendChild(confettiContainer);

        for (let i = 0; i < 100; i++) {
            const confettiPiece = document.createElement('div');
            confettiPiece.classList.add('confetti-piece');
            confettiPiece.style.left = Math.random() * 100 + 'vw'; // Random horizontal position
            confettiPiece.style.animationDuration = (Math.random() * 3 + 2) + 's'; // Random duration
            confettiPiece.style.backgroundColor = '#' + Math.floor(Math.random() * 16777215).toString(16); // Random color
            confettiContainer.appendChild(confettiPiece);
        }
    }

    window.onload = function() {
        createConfetti(); // Start confetti effect on load
    };
</script>


<!-- action.php file -->