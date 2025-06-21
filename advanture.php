<?php
include_once("header.php");
include('hms/include/config.php');
?>
    <section >
    <div class="banner">
        <div class="hanger">
            <h1>Advantures Book</h1>
        </div>
    </div>
      </section>

    <!-- products -->
    <section class="spir">

        <div class="container spirhead ">
            <center>
                <h2>Whispers Of the Lost World</h2>
            </center>
            <div class="spir">
                <div class="row spir1">
                <?php
             $procat='adventurebooks';
$sql=mysqli_query($con,"select * from product where procat='$procat'");


while($row=mysqli_fetch_array($sql))
{ 
?>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="hms/images/<?php echo $row['proimg'];?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['proname'];?></h5>
                                <p class="card-text"><b><?php echo $row['proauther'];?> </b><br>
                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i> <br>
                                  <b> ₹<?php echo $row['prodiscount'];?>  ₹</b><strike><?php echo $row['proprice'];?></strike> <br>
                                  <a href="openspiritual.php?id=<?php echo $row['id']; ?>"><button type="button" class="cardbtn1">View More</button></a>
                                </p><form class="form-submit">
                                       <input type="hidden" class="pname" value="<?php echo $row['proname'];?>">
                                        <input type="hidden" class="pprice" value="<?php echo $row['proprice'];?>">
                                        <input type="hidden" class="pimage" value="<?php echo $row['proimg'];?>">
                                        <input type="hidden" class="pcode" value="<?php echo $row['id'];?>">
                                        
                                                                              <div class="alert-message"></div>

                                      </form>

                                
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/adv1 - Copy - Copy - Copy.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> Adventures Sherlock</h5>
                                <p class="card-text">
                                    <b>by Sir Arthur Conan Doyle</b><br>

                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b> ₹400  ₹</b><strike>500</strike>
                                </p>

                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/adv3 - Copy - Copy - Copy.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Power of One Thought </h5>
                                <p class="card-text"> <b>by BK Shivani </b><br> <i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b>  ₹680 ₹</b><strike>739</strike> </p>
                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/adv4 - Copy - Copy - Copy.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">The Last Bear</h5>
                                <p class="card-text"><b>by Hannah Gold  </b><br>
                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b> ₹900  ₹</b><strike>1,000</strike>
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
                            <img src="images/adv9.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Penguin Select Classics</h5>
                                <p class="card-text"><b>by Mark Twain</b><br>
                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i> <br>
                                        <b> ₹2439  ₹</b><strike>2,539</strike> <br>

                                </p>

                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/adv10.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Leo Tolstoy</h5>
                                <p class="card-text">
                                    <b>by Leo Tolstoy</b><br>

                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b> ₹400  ₹</b><strike>500</strike>
                                </p>

                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/adv11.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kidnapped by Robert</h5>
                                <p class="card-text"> <b>by Robert Louis Stevenson </b><br> <i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b> ₹439  ₹</b><strike>539</strike> </p>
                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <d class="card">
                            <img src="images/adv12.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">The Secret Garden</h5>
                                <p class="card-text"><b>by Frances Hodgson</b><br>
                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b> ₹880  ₹</b><strike>1,000</strike>
                                </p>
                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </d
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