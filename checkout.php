<?php 
session_start();
include_once("header.php");
include('hms/include/config.php');

$grand_total = isset($_GET['total']) ? floatval($_GET['total']) : 0;
$allItems = "";
$items =[];
$cartIds = [];
$pid=[];

$ret = mysqli_query($con, "SELECT CONCAT (proname,'(',quantity,')') AS ItemQty, total_price, cart_id ,product_code FROM cart");

while ($row = mysqli_fetch_array($ret)) { 
    $items[] = $row['ItemQty'];
    $cartIds[] = $row['cart_id'];
    $pid[]=$row['product_code'];
}
$pid1=implode(', ',$pid);
$cartIds1 = implode(', ', $cartIds);
$allItems = implode(',', $items);
?>

<style>
    body { background-color: #f8f9fa; }
    .order-form {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 20px auto;
        max-width: 600px;
    }
    .form-control { border-radius: 5px; }
    .btn-danger {
        background-color:#e9c692;
        border: none;
        color: black;
    }
    .btn-danger:hover {
        background-color:#e9c692;
        color: #000;
    }
    .ch { color: brown; }
    #showOrder { margin-top: 20px; }
</style>

<div class="container mt-5">
    <div class="order-form">
        <h3 class="text-center ch">Place Your Order</h3>
        <form method="post" id="placeOrder">
            <input type="hidden" name="products" value="<?php echo htmlspecialchars($allItems); ?>">
            <input type="hidden" name="grand_total" value="<?php echo htmlspecialchars($grand_total); ?>">
            <input type="hidden" name="testid" value="<?php echo htmlspecialchars($cartIds1); ?>">
            <input type="hidden" name="pid" value="<?php echo htmlspecialchars($pid1); ?>">

            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <input type="tel" name="phone" class="form-control" placeholder="Enter phone" required>
            </div>
            <div class="form-group">
                <textarea name="address" class="form-control" rows="3" placeholder="Enter address" required></textarea>
            </div>
            <h5 class="text-center lead">Select Payment Mode</h5>
            <div class="form-group">
                <select name="pmode" class="form-control" required>
                    <option value="">Select payment</option>
                    <option value="Cash On Delivery">Cash on Delivery</option>
                </select>
            </div>
            <div class="form-group text-center">
                <strong>Total Amount Payable: ₹<?php echo number_format($grand_total, 2); ?></strong>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-danger btn-block" value="Place Order">
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
    $('#placeOrder').submit(function(e) {
        e.preventDefault();

        var phone = $('input[name="phone"]').val();
        if (!/^[1-9]\d{9}$/.test(phone)) {
            alert('Please enter a valid 10-digit mobile number that does not start with 0.');
            return;
        }

        var email = $('input[name="email"]').val();
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            alert('Please enter a valid email address.');
            return;
        }

        var paymentMode = $('select[name="pmode"]').val();
        if (paymentMode === "") {
            alert('Please select a payment method.');
            return;
        }

        $.ajax({
            url: 'action.php',
            method: 'post',
            data: $('#placeOrder').serialize() + "&action=order",
            success: function(response) {
                $("#placeOrder").hide(); // hide form after placing order
                $("#showOrder").html(response); // show confirmation message
            }
        });
    });

    $('#cancelOrder').click(function(e) {
        e.preventDefault();
        if (confirm("Are you sure you want to cancel the order?")) {
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

<?php include_once("footer.php"); ?>