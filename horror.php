<?php
include_once("header.php");
include('hms/include/config.php');
?>
    <!-- banner -->
    <section>
    <div class="banner">
        <div class="hanger">
            <h1>Horror Book</h1>
        </div>
    </div>
      </section>

    <!-- products -->
    <section class="spir">

        <div class="container spirhead ">
            <center>
                <h2>Screams from the Deep</h2>
            </center>
            <div class="spir">
                <div class="row spir1">
                <?php
             $procat='horrorbook';
$sql=mysqli_query($con,"select * from product where procat='$procat'");


while($row=mysqli_fetch_array($sql))
{ 
?>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="hms/images/<?php echo $row['proimg'];?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['proname'];?></h5>
                                <p class="card-text"><b><?php echo $row['proauther'];?></b><br>
                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i><br>
                                  <b>₹<?php echo $row['prodiscount'];?> ₹</b><strike><?php echo $row['proprice'];?></strike> <br>

                                </p>

                                <a href="openspiritual.php?id=<?php echo $row['id']; ?>"><button type="button" class="cardbtn1">View More</button></a>
                                <form class="form-submit">
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
                            <img src="images/horror10.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">The Canterville Ghost</h5>
                                <p class="card-text">
                                    <b>by Oscar Wilde</b><br>

                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b>₹480  ₹</b><strike>580</strike>
                                </p>

                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/horror12.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Enter At Your Own Risk </h5>
                                <p class="card-text"> <b>by Anirban Bhattacharyya </b><br> <i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b>₹280  ₹</b><strike>349</strike> </p>
                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/horror5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">The Game of Death</h5>
                                <p class="card-text"><b>by Himanshu Rai  </b><br>
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
                    </div> -->
                    <?php } ?>
                </div>
                <!-- <div class="row spir1">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/horror13.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tantrics of Old </h5>
                                <p class="card-text"><b>by Krishnarjun Bhatt</b><br>
                                    <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                                        class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i> <br>
                                        <b> ₹1400 ₹</b><strike>1,539</strike> <br>

                                </p>

                                <a href=""><button type="button">Add Card</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/horror14.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> Tales of Horror</h5>
                                <p class="card-text">
                                    <b>by Nikesh Murali </b><br>

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
                            <img src="images/horror15.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Ghosts in the Dark </h5>
                                <p class="card-text"> <b>by Anita Krishan </b><br> <i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                                        style="color: #FFD43B;"></i><i class="fa-solid fa-star-half-stroke fa-lg"
                                        style="color: #FFD43B;"></i><br><b>₹439  ₹</b><strike>539</strike> </p>
                                <a href=""><button type="button">Order Now</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <img src="images/horror16.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">The Black Tiger</h5>
                                <p class="card-text"><b>by Srijan Pal Singh </b><br>
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
 
</script>
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