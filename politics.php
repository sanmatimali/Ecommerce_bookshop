<?php
include_once("header.php");
include('hms/include/config.php');
?>
<section>
    <div class="banner">
        <div class="hanger">
            <h1>Politics Book</h1>
        </div>
    </div>
</section>

<!-- products -->
<section class="spir">

    <div class="container spirhead ">
        <center>
            <h2>The Changing Landscape of Politics</h2>
        </center>
        <div class="spir">
            <div class="row spir1">
                <?php
                $procat = 'politicalbooks';
                $sql = mysqli_query($con, "select * from product where procat='$procat'");


                while ($row = mysqli_fetch_array($sql)) {
                    ?>

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="hms/images/<?php echo $row['proimg']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['proname']; ?> </h5>
                                <p class="card-text"><b><?php echo $row['proauther']; ?> </b><br>
                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i> <br>
                                    <b>₹<?php echo $row['prodiscount'];?> ₹</b><strike><?php echo $row['proprice']; ?></strike><br>

                                </p>
                                <a href="openspiritual.php?id=<?php echo $row['id']; ?>"><button type="button" class="cardbtn1">View More</button></a>
                                <form class="form-submit">
                                    <input type="hidden" class="pname" value="<?php echo $row['proname']; ?>">
                                    <input type="hidden" class="pprice" value="<?php echo $row['proprice']; ?>">
                                    <input type="hidden" class="pimage" value="<?php echo $row['proimg']; ?>">
                                    <input type="hidden" class="pcode" value="<?php echo $row['id']; ?>">

                                     
                                    <div class="alert-message"></div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/politic18.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> Political Mysteries</h5>
                                <p class="card-text">
                                    <b>by K R Malkani</b><br>

                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b>₹400  ₹</b><strike>500</strike>
                                </p>

                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/politic17.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nationalism</h5>
                                <p class="card-text"> <b>by Rabindranath Tagore </b><br> <i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b>₹580  ₹</b><strike>639</strike> </p>
                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/politic16.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Enlightenment</h5>
                                <p class="card-text"><b>by Sadhguru </b><br>
                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b>₹800  ₹</b><strike>1,000</strike>
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
                            <img src="images/politic15.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Capital (Das Capital)</h5>
                                <p class="card-text"><b>by Karl Marx (Author)</b><br>
                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i> <br>
                                        <b>₹480  ₹</b><strike>539</strike> <br>

                                </p>

                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/politic14.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> The Prince </h5>
                                <p class="card-text">
                                    <b>by Niccolo Machiavelli </b><br>

                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b>₹400  ₹</b><strike>500</strike>
                                </p>

                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/politic12.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nationalism </h5>
                                <p class="card-text"> <b>by Rabindranath Tagore </b><br> <i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b>₹200  ₹</b><strike>300</strike> </p>
                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/politic10.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Prince by Niccolò </h5>
                                <p class="card-text"><b>by Niccolò Machiavelli</b><br>
                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b>₹800  ₹</b><strike>900</strike>
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
  $(document).ready(function(){
 $(document).on('click','#addItem',function(e){
e.preventDefault();
var form=$(this).closest(".form-submit");
var pcode=form.find('.pcode').val();
var pname=form.find('.pname').val();
var pimage=form.find('.pimage').val();

var pprice=form.find('.pprice').val();
//var $this = $(this);
var alertmsg=form.find('.alert-message');
$.ajax({
url:'action.php',
method:'post',
data:{pcode:pcode,pname:pname,pimage:pimage,pprice:pprice},
success:function(response){
  console.log(response);
  alertmsg.html(response);

  // $this.closest('.alert-message').html(response)
  //$(this).closest('.alert-message').html(response);
 //alertmsg.html(response);
  //window.scrollto(0,0);
  load_cart_item_number();
}
});

 });

  load_cart_item_number();
function load_cart_item_number(){
  $.ajax({
url:'action.php',
method:'get',
data:{cartItem:"cart_item"},
success:function(response){

  $("#cart-item").html(response);
  
}
});
}

  });
