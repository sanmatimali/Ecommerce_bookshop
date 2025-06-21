<?php include_once('header.php'); ?>
<?php include('hms/include/config.php'); ?>

<?php
// Get the product ID from the URL
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $sql = mysqli_query($con, "SELECT * FROM product WHERE id='$product_id'");
    $row = mysqli_fetch_array($sql);

    if ($row) {
        // Display product details using Bootstrap grid
        echo '<div class="container mt-5">';  // Added margin-top for spacing
        echo '<div class="row">';

        // Left side: Product image
        echo '<div class="col-md-6">'; // Use 6 columns for medium screens and above
        echo '<img src="hms/images/' . htmlspecialchars($row['proimg']) . '" alt="Product Image" class="img-fluid" style="max-height: 400px;">';
        echo '</div>';

        // Right side: Product info
        echo '<div class="col-md-6">'; // Use the other 6 columns for product info
        echo '<h1>' . htmlspecialchars($row['proname']) . '</h1>';
        echo '<p><strong>Price:</strong> Rs. ' . htmlspecialchars($row['proprice']) . '</p>';
        echo '<p><strong>Description:</strong> ' . htmlspecialchars($row['prodesc']) . '</p>';
        echo '<p><strong>Rental Price:</strong> $100 per day</p>';
        echo '<p><strong>Availability:</strong> In stock</p>';
        
        // Form for adding to cart
        echo '<form class="form-submit">';
        echo '<input type="hidden" class="pname" value="' . htmlspecialchars($row['proname']) . '">';
        echo '<input type="hidden" class="pprice" value="' . htmlspecialchars($row['proprice']) . '">';
        echo '<input type="hidden" class="pimage" value="' . htmlspecialchars($row['proimg']) . '">';
        echo '<input type="hidden" class="pcode" value="' . htmlspecialchars($row['id']) . '">';
        echo '<button type="submit" id="addItem" class="btn btn-success">Add To Cart</button>';
        echo '<div class="alert-message"></div>';
        echo '</form>';

        echo '</div>'; // End of product info column
        echo '</div>'; // End of row
        echo '</div>'; // End of container
    } else {
        echo '<p>Product not found.</p>';
    }
} else {
    echo '<p>No product selected.</p>';
}
?>

<script>
$(document).ready(function() {
    $(document).on('click', '#addItem', function(e) {
        e.preventDefault();
        var form = $(this).closest(".form-submit");
        var pcode = form.find('.pcode').val();
        var pname = form.find('.pname').val();
        var pimage = form.find('.pimage').val();
        var pprice = form.find('.pprice').val();
        var alertmsg = form.find('.alert-message');

        $.ajax({
            url: 'action.php',
            method: 'post',
            data: { pcode: pcode, pname: pname, pimage: pimage, pprice: pprice },
            success: function(response) {
                console.log(response);
                alertmsg.html(response);
                load_cart_item_number();
            }
        });
    });

    load_cart_item_number();
    function load_cart_item_number() {
        $.ajax({
            url: 'action.php',
            method: 'get',
            data: { cartItem: "cart_item" },
            success: function(response) {
                $("#cart-item").html(response);
            }
        });
    }
});
</script>


<?php include_once('footer.php'); ?>