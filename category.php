<?php
include_once("header.php");
include('hms/include/config.php');
?>
 <?php 
   $idtext=$_GET['viewid'];
      $catslug=mysqli_query($con,"select catname,catslug from category where id='$idtext'");
      $row1=mysqli_fetch_array($catslug);
       ?>
<section >
    <div class="banner">
        <div class="hanger">
        <h1><?php echo $row1['catname'] ?></h1>
        </div>
    </div>
   
         
</section>


<!-- products -->
<section class="spir">

    <div class="container spirhead ">
        <center>
            <h2>Timeless Wisdom:Must-Read Spiritual Books</h2>
        </center>
        <div class="spir anianimate__bounceInDown">
            <div class="row spir1">
            <?php
      $procat=$row1['catslug'];
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
                                <i class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star-half-stroke " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star-half-stroke "
                                    style="color: #FFD43B;"></i><br><b> ₹<?php echo $row['prodiscount'];?> ₹</b><strike><?php echo $row['proprice'];?></strike>
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
                        <img src="images/spir10.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sounds of Liberation</h5>
                            <p class="card-text">
                                <b>by Ranjit Chaudhri</b><br>

                                <i class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star" style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star-half-stroke "
                                    style="color: #FFD43B;"></i><br><b>₹400 ₹</b><strike>500</strike>
                            </p>

                            <a href=""><button type="button">Add Card</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card">
                        <img src="images/spir12.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Enlightenment</h5>
                            <p class="card-text"> <b>by Sadhguru </b><br> <i class="fa-solid fa-star "
                                    style="color: #FFD43B;"></i><i class="fa-solid fa-star "
                                    style="color: #FFD43B;"></i><i class="fa-solid fa-star "
                                    style="color: #FFD43B;"></i><i class="fa-solid fa-star"
                                    style="color: #FFD43B;"></i><i class="fa-solid fa-star-half-stroke "
                                    style="color: #FFD43B;"></i><br><b>₹450 ₹</b><strike>539</strike> </p>
                            <a href=""><button type="button">Add Card</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card">
                        <img src="images/spir13.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Autobiography </h5>
                            <p class="card-text"><b>by Paramahansa Yogananda </b><br>
                                <i class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star" style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star-half-stroke " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star-half-stroke"
                                    style="color: #FFD43B;"></i><br><b>₹900 ₹</b><strike>1,000</strike>
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
                        <img src="images/spir14.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">The Shiva Sutras </h5>
                            <p class="card-text"><b>by Ranjit Chaudhri </b><br>
                                <i class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star-half-stroke " style="color: #FFD43B;"></i> <br>
                                <b>₹450 ₹</b><strike>1,539</strike> <br>

                            </p>

                            <a href=""><button type="button">Add Card</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card">
                        <img src="images/spir15.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> Sunderkand</h5>
                            <p class="card-text">
                                <b> by Goswami Tulsidas</b><br>

                                <i class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star" style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star-half-stroke"
                                    style="color: #FFD43B;"></i><br><b>₹400 ₹</b><strike>500</strike>
                            </p>

                            <a href=""><button type="button">Add Card</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card">
                        <img src="images/spir16.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mukti </h5>
                            <p class="card-text"> <b> by Acharya Prashant </b><br> <i class="fa-solid fa-star"
                                    style="color: #FFD43B;"></i><i class="fa-solid fa-star "
                                    style="color: #FFD43B;"></i><i class="fa-solid fa-star "
                                    style="color: #FFD43B;"></i><i class="fa-solid fa-star "
                                    style="color: #FFD43B;"></i><i class="fa-solid fa-star-half-stroke "
                                    style="color: #FFD43B;"></i><br><b>₹400 ₹</b><strike>539</strike> </p>
                            <a href=""><button type="button">Add Card</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card">
                        <img src="images/spir17.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ashtavakra Mahagita</h5>
                            <p class="card-text"><b> by M. I. Rajasve </b><br>
                                <i class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star " style="color: #FFD43B;"></i><i
                                    class="fa-solid fa-star-half-stroke " style="color: #FFD43B;"></i> <br>
                                <b>₹1800 ₹</b><strike>1,939</strike> <br>

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
