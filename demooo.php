<?php 
session_start();
include_once("header.php");
include('hms/include/config.php');
$grand_total = 0;
$allItems = "";
$items = array();
$test = array();

$ret = mysqli_query($con, "SELECT CONCAT (proname,'(',quantity,')') As ItemQty, total_price, cart_id FROM cart");

while ($row = mysqli_fetch_array($ret)) { 
    $grand_total += $row['total_price'];
    $items[] = $row['ItemQty'];
    $test[] = $row['cart_id'];
}

$test1 = implode(',', $test);
$allItems = implode(',', $items);
?>

<style>
    /* Custom styles */
    body {
        background-color: #f8f9fa;
    }
    .order-form {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 20px auto;
        max-width: 600px;
    }
    .form-control {
        border-radius: 5px;
    }
    .btn-danger {
        background-color:rgb(235, 152, 131);
        border: none;
    }
    .btn-danger:hover {
        background-color: #c82333;
    }
    #showOrder {
        margin-top: 20px;
    }
    .checkorder{
        color: chocolate;
        font-family: serif;
        font-size: 30px;
    }
</style>

<div class="container mt-5">
    <div class="order-form">
        <h3 class="text-center checkorder">Place Your Order</h3>
        <form method='post' id="placeOrder">
            <input type='hidden' name='products' value="<?php echo htmlspecialchars($allItems); ?>">
            <input type='hidden' name='grand_total' value="<?php echo htmlspecialchars($grand_total); ?>">
            <input type='hidden' name='testid' value="<?php echo htmlspecialchars($test1); ?>">
            
            <div class="form-group">
                <input type='text' name='name' class="form-control" placeholder="Enter name" required>
            </div>
            
            <div class="form-group">
                <input type='email' name='email' class="form-control" placeholder="Enter email" required>
            </div>
            
            <div class="form-group">
                <input type='tel' name='phone' class="form-control" placeholder="Enter phone" required>
            </div>
            
            <div class="form-group">
                <textarea name='address' class="form-control" rows="3" placeholder="Enter address" required></textarea>
            </div>
            
            <h5 class="text-center lead"> Select Payment Mode</h5>
            <div class="form-group">
                <select name="pmode" class="form-control" required>
                    <option value="">Select payment</option>
                    <option value="Cash on Delivery">Cash on Delivery</option>
                </select>
            </div>
            
            <div class="form-group">
                <input type='submit' name='submit' class="btn btn-danger btn-block" value="Place Order">
            </div>
        </form>

        <!-- Cancel Order Button -->
        <div class="form-group mt-4">
            <button id="cancelOrder" class="btn btn-secondary btn-block">Cancel Order</button>
        </div>
    </div>

    <div id="showOrder"></div>
</div>

<script>
$(document).ready(function() {
    // Place Order form submission
    $('#placeOrder').submit(function(e) {
        e.preventDefault();

        // Validate phone number
        var phone = $('input[name="phone"]').val();
        if (!/^\d{10}$/.test(phone) || phone.startsWith('0')) {
            alert('Please enter a valid 10-digit mobile number that does not start with 0.');
            return;
        }

        // Validate email format
        var email = $('input[name="email"]').val();
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            alert('Please enter a valid email address.');
            return;
        }

        // Validate payment method selection
        var paymentMode = $('select[name="pmode"]').val();
        if (paymentMode === "") {
            alert('Please select a payment method.');
            return;
        }

        // Proceed with AJAX request if validations pass
        $.ajax({
            url: 'action.php',
            method: 'post',
            data: $('form').serialize() + "&action=order",
            success: function(response) {
                $("#showOrder").html(response);
            }
        });
    });

    // Cancel Order button action
    $('#cancelOrder').click(function(e) {
        e.preventDefault();
        
        var confirmCancel = confirm("Are you sure you want to cancel the order?");
        if (confirmCancel) {
            $.ajax({
                url: 'action.php',
                method: 'post',
                data: { action: 'cancelOrder' },
                success: function(response) {
                    alert("Your order has been canceled.");
                    $("#showOrder").html(response);
                }
            });
        }
    });
});
</script>

<?php
include_once("footer.php");
?>
