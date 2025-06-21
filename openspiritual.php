<?php
include_once('header.php');
include('hms/include/config.php');

// Get product ID from URL
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Use prepared statement for security
    $stmt = $con->prepare("SELECT * FROM product WHERE id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <title><?php echo htmlspecialchars($row['proname']); ?> - Product Details</title>
            <style>
                .product-container {
                    padding: 30px;
                    border: 1px solid black;
                    border-radius: 10px;
                    margin: 40px 0;
                    padding: 40px;
                }

                .product-img {
                    max-height: 800px;

                    border-radius: 5px;
                    object-fit: contain;
                }

                .product-title {
                    font-size: 2rem;
                    margin-bottom: 15px;
                    color: #333;
                }

                .info-container p {
                    font-size: 1.1rem;
                    margin: 10px 0;
                }

                .btn-success {
                    padding: 10px 25px;
                    font-size: 1rem;
                    border-radius: 8px;
                }

                .alert-message {
                    margin-top: 10px;
                }

                .image-container img {
                    height: 500px;
                }
            </style>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        </head>

        <body>

            <div class="container product-container mt-5">
                <div class="row">
                    <!-- Product Image -->
                    <div class="col-md-6 image-container">
                        <img src="hms/images/<?php echo htmlspecialchars($row['proimg']); ?>" alt="Product Image"
                            class="img-fluid product-img">
                    </div>

                    <!-- Product Info -->
                    <div class="col-md-6 info-container">
                        <h1 class="product-title">&nbsp;<?php echo htmlspecialchars($row['proname']); ?></h1>
                        <p><strong>Auther:</strong>&nbsp;<?php echo htmlspecialchars($row['proauther']); ?></p>
                        <p><strong>By Publisher</strong>&nbsp;<?php echo htmlspecialchars($row['propub']); ?></p>
                        <p><strong>Released:</strong> <?php echo htmlspecialchars($row['prorel']); ?></p>

                        <p><strong>Discount:</strong> Rs. <?php echo htmlspecialchars($row['prodiscount']); ?>
                            <strike>Rs. <?php echo htmlspecialchars($row['proprice']); ?></strike>
                        </p>
                        <p><strong>Description:</strong> <?php echo htmlspecialchars($row['prodesc']); ?></p>

                        <p><strong>Availability:</strong> In stock</p>

                        <!-- Add to Cart Form -->
                        <form class="form-submit">
                            <input type="hidden" class="pname" value="<?php echo htmlspecialchars($row['proname']); ?>">
                            <input type="hidden" class="pprice" value="<?php echo htmlspecialchars($row['proprice']); ?>">
                            <input type="hidden" class="prodiscount"
                                value="<?php echo htmlspecialchars($row['prodiscount']); ?>">
                            <input type="hidden" class="pimage" value="<?php echo htmlspecialchars($row['proimg']); ?>">
                            <input type="hidden" class="pcode" value="<?php echo htmlspecialchars($row['id']); ?>">
                            <button type="submit" id="addItem" class="btn btn-success">Add To Cart</button>
                            <div class="alert-message mt-2"></div>
                        </form>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        </body>

        </html>
        <?php
    } else {
        echo "<p>Product not found.</p>";
    }
} else {
    echo "<p>No product selected.</p>";
}
include_once('footer.php');
?>
<script>
    $(document).ready(function () {
        $(document).on('click', '#addItem', function (e) {
            e.preventDefault();
            var form = $(this).closest(".form-submit");
            var pcode = form.find('.pcode').val();
            var pname = form.find('.pname').val();
            var pimage = form.find('.pimage').val();
            var pprice = form.find('.pprice').val();
            var prodiscount = form.find('.prodiscount').val();

            var alertmsg = form.find('.alert-message');

            $.ajax({
                url: 'action.php',
                method: 'post',
                data: { pcode: pcode, pname: pname, pimage: pimage, pprice: pprice, prodiscount: prodiscount },
                success: function (response) {
                    alertmsg.html(response);
                    load_cart_item_number();
                },
                error: function () {
                    alertmsg.html('<div class="alert alert-danger">Something went wrong.</div>');
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