<?php
include_once("header.php");
include('hms/include/config.php');
?>
<section>
    <div class="banner">
        <div class="hanger">
            <h1>Historical Book</h1>
        </div>
    </div>
</section>

<!-- products -->
<section class="spir">

    <div class="container spirhead ">
        <center>
            <h2>Secrets of the Forgotten Ages</h2>
        </center>
        <div class="spir">
            <div class="row spir1">
                <?php
                $procat = 'historicalbooks';
                $sql = mysqli_query($con, "select * from product where procat='$procat'");


                while ($row = mysqli_fetch_array($sql)) {
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="hms/images/<?php echo $row['proimg']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['proname']; ?></h5>
                                <p class="card-text"><b><?php echo $row['proauther']; ?></b> <br>
                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i> <br>
                                    <b>₹ <?php echo $row['prodiscount'];?> ₹</b><strike><?php echo $row['proprice']; ?></strike><br>

                                </p>
                                <a href="openspiritual.php?id=<?php echo $row['id']; ?>"><button type="button" class="cardbtn1">View More</button></a>
                                <form class="form-submit">
                                    <input type="hidden" class="pname" value="<?php echo $row['proname']; ?>">
                                    <input type="hidden" class="pprice" value="<?php echo $row['proprice']; ?>">
                                    <input type="hidden" class="pimage" value="<?php echo $row['proimg']; ?>">
                                    <input type="hidden" class="pcode" value="<?php echo $row['id']; ?>">

                                    

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/history9.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> Space</h5>
                                <p class="card-text">
                                    <b>by Wonder House Books </b><br>

                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b>₹480  ₹</b><strike>499</strike>
                                </p>

                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/history10.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Short History of  World  </h5>
                                <p class="card-text"> <b>by H. G. Wells </b><br> <i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b>₹480  ₹</b>539 </p>
                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/history11.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">The Art of War</h5>
                                <p class="card-text"><b>by Sun Tzu </b><br>
                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b> ₹900 ₹</b>1,000
                                </p>
                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div> -->

                <?php } ?>
            </div>
            <!-- <div class="row spir1">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/history12.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">HerStory</h5>
                                <p class="card-text"><b>by Nikita Thakur</b><br>
                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i> <br>
                                        <b>₹1400  ₹</b><strike>1,539</strike><br>

                                </p>

                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/history13.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">The Odyssey by Homer</h5>
                                <p class="card-text">
                                    <b>by Homer</b><br>

                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b> ₹400 ₹</b><strike>500</strike>
                                </p>

                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/history14.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> Maharaj </h5>
                                <p class="card-text"> <b>by Krishnarao Arjun  </b><br> <i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b>₹480  ₹</b><strike>539</strike></p>
                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/history15.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Shivcharitra </h5>
                                <p class="card-text"><b> by Sir Jadunath Sarkar</b><br>
                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b>₹900  ₹</b><strike>1,000</strike>
                                </p>
                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
</section>
<?php
include_once("footer.php")
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
                alertmsg.html(response);
                load_cart_item_number();
            },
            error: function() {
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