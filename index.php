<?php
include_once("header.php");
include('hms/include/config.php');
?>


<div class="main-slider">
  <div class="slider">
    <div>
      <div class="slider-img">
        <img src="images/banner3.jpg">
        <div class="slider-text">
          <div class="container" id="slide">
            <div class="col-md-8 textside position-relative">
              <div class="content text-center ">
                <div class="row">

                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <h6 class="mb-0 content1">"The <b style="color:rgb(218, 139, 87);">Magic</b> Begins With a <b
                        style="color:rgb(218, 139, 87);">Book</b>"
                    </h6>
                    <h1 class="mb-0">" From bestsellers to hidden gems — it’s all here."</h1>
                    <a href="contact.php"><button type="button" class="cardbtn1">Join us Now</button></a>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"></div>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div> <!-- img -->
    </div><!-- slider -->
    <div>
      <div class="slider-img ">
        <img src="images/banner7.png">
        <div class="slider-text">
          <div class="container" id="slide">
            <div class="col-md-8 textside position-relative">
              <div class="content text-center">
                <div class="row" style="padding-left: 150px;">
                  <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"></div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <h6 class="mb-0 content1" style="color: white;">"<b style="color:rgb(218, 139, 87);">Find </b>Your
                      Next Great <b style="color:rgb(218, 139, 87);">Read</b>"
                    </h6>
                    <h1 class="mb-0">"Get lost in word,discover new worlds,and fuel your imagination"</h1>
                    <a href="contact.php"><button type="button" class="cardbtn1">Join us Now</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div> <!-- img -->
    </div><!-- slider -->
    <div>
      <div class="slider-img ">
        <img src="images/banner2.jpg">
        <div class="slider-text">
          <div class="container" id="slide">
            <div class="col-md-8 textside position-relative">
              <div class="content text-center">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"></div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <h6 class="mb-0 content1">" <b style="color:rgb(218, 139, 87);">Where</b> Every Page Tells a <b
                        style="color:rgb(218, 139, 87);">Story..!</b>"
                    </h6>
                    <h1 class="mb-0">"Explore our collection and start your reading journey."</h1>
                     <a href="contact.php"><button type="button" class="cardbtn1">Join us Now</button></a>
                  </div>

                </div>
              </div>
            </div>

          </div>

        </div>
      </div> <!-- img -->
    </div><!-- slider -->

  </div>
</div><!-- main-slider -->
<br><br>

<!-- about us -->
<section>
  <div class="container">


    <div class="row c">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col">
          <img src="images/book6.jpg" alt="">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col">
          <h3>About INKSPIRE</h3>
          <p> <b>Welcome to INKSPIRE</b> , a paradise for book lovers! We are dedicated to bringing you an extensive
            collection of books, ranging from timeless classics to the latest bestsellers. Whether you’re a passionate
            reader, a student, or someone looking for inspiration, we have the perfect book for you. <br>
            INKSPIRE was founded with a simple vision – to make books accessible to everyone. We believe that books
            hold
            the power to transform minds, spark creativity, and open doors to endless possibilities. Our journey began
            with a small collection, and today, we take pride in offering thousands of books to readers across the
            world

            <a href="bookabout.html">Read More</a>
          </p>
        </div>
      </div>
    </div>
</section>

<section class="demo">

  <center>
    <h2 class="chead" style="padding-top: 70px;">Explore Worlds through Words</h2>
  </center>
  <div class="container ">
    <div class="category">
      <div class="row rowcon">
        <?php

        $sql = mysqli_query($con, "select * from category");


        while ($row = mysqli_fetch_array($sql)) {
          ?>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card card1">
              <img src="hms/images/<?php echo $row['catimg']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['catname']; ?></h5>
                <p class="card-text"><?php echo $row['catdis']; ?></p>

                <a href="category.php?viewid=<?php echo $row['id']; ?>"><button style="background-color:rgb(245, 186, 98);
  border: none;
  border-radius: 10px;
  padding: 10px 20px;">View More</button></a>
              </div>
            </div>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="card">
              <img src="images/c5politics - Copy - Copy - Copy.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Global Politics</h5>
                <p class="card-text">Keep up-to-date with current events happening both domestically and globally with
                  this list of political books </p>
                <a href="politics.html"><button type="button">View More</button></a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="card">
              <img src="images/c2history - Copy - Copy - Copy.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Historical Biographies</h5>
                <p class="card-text"> books are like time machines, taking us back to moments that shaped our world.
                  books
                  offer a treasure</p>
                <a href="history.html"><button type="button">View More</button></a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="card">
              <img src="images/adventure - Copy - Copy - Copy.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Adventure Begins Here</h5>
                <p class="card-text">If you're feeling overwhelmed by the number of amazing adventure books on hand,
                  book
                  recommendation</p>
                <a href="advanture.html"><button type="button">View More</button></a>
              </div>
            </div>
          </div> -->
        <?php } ?>
      </div>
    </div>
  </div>
</section>



<!-- <--hero section -->
<section class="h">
  <div class="container">
    <div class="hcon">
      <center> <b>Upto 10% Off</b></center>


      <p>"Shop Now and Enjoy Next Exclusive Book Discounts-Don't Miss Out!"
      </p>
      <center><button type="button">View More</button></center>

    </div>
  </div>
</section>

<!-- best seller -->
<section class="best">
  <center>
    <h2 style="padding-top: 60px;">Best Sellers</h2>
  </center>
  <div class="container">
    <div class="row bestseller">
     <?php
    // Step 1: collecting all product id's from orders
    $pid = [];
    $sql = mysqli_query($con, "SELECT pro_id FROM orders");
    while ($row = mysqli_fetch_array($sql)) {
        $ids = explode(',', $row['pro_id']); 
        foreach ($ids as $id) {
            $id = intval(trim($id));
            if ($id > 0) $pid[] = $id;
        }
    }

    // Step 2: how many product are repeated
    $repeat = array_count_values($pid);

    // Step 3: descending order and it gives first reference of the product
    uksort($repeat, function($a, $b) use ($repeat, $pid) {
        $cmp = $repeat[$b] <=> $repeat[$a]; 
        if ($cmp === 0) {
            return array_search($a, $pid) <=> array_search($b, $pid);
        }
        return $cmp;
    });

    // Step 4: fetch product data from DB in sorted order
    $sorted_ids = array_keys($repeat);
    if (!empty($sorted_ids)) {
        $idList = implode(',', $sorted_ids);
        $bestsell = mysqli_query($con, "SELECT * FROM product WHERE id IN ($idList) Limit 4");

        $products_map = [];
        while ($row = mysqli_fetch_assoc($bestsell)) {
            $products_map[$row['id']] = $row;
        }

        foreach ($sorted_ids as $product_id) {
            if (isset($products_map[$product_id])) {
                $row1 = $products_map[$product_id];
    ?>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <div class="card">
            <img src="hms/images/<?php echo $row1['proimg']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row1['proname']; ?></h5>
              <p class="card-text">
                <b><?php echo $row1['proauther']; ?></b><br>
                <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                  style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                  class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i class="fa-solid fa-star-half-stroke fa-lg"
                  style="color: #FFD43B;"></i> <br>
              <h5>₹<?php echo $row1['prodiscount']; ?> ₹<strike><?php echo $row1['proprice']; ?></strike></h5>

              </p>
              <a href="openspiritual.php?id=<?php echo $row1['id']; ?>"><button type="button" class="cardbtn1">View
                  More</button></a>
              <form class="form-submit">
                <input type="hidden" class="pname" value="<?php echo $row1['proname']; ?>">
                <input type="hidden" class="pprice" value="<?php echo $row1['proprice']; ?>">
                <input type="hidden" class="pimage" value="<?php echo $row1['proimg']; ?>">
                <input type="hidden" class="pcode" value="<?php echo $row1['id']; ?>">


                <div class="alert-message"></div>

              </form>
            </div>
          </div>
        </div>
        <!-- <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="card">
          <img src="images/history12.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">HerStory</h5>
            <p class="card-text"><b>by Nikita Thakur</b>
              <br>
              <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i class="fa-solid fa-star-half-stroke fa-lg"
                style="color: #FFD43B;"></i>
              <br>
            <h5>₹950 ₹<strike>1050</strike></h5>
            </p>
            <a href="order.php"><button type="button" class="cardbtn1">Order Now</button></a>
          </div>
        </div>
      </div> -->
        <!-- <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="card">
          <img src="images/horror13.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tantrics of Old</h5>
            <p class="card-text"><b>by Krishnarjun Bhatt</b> <br><i class="fa-solid fa-star fa-lg"
                style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                style="color: #FFD43B;"></i><i class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i>
              <br>
            <h5>₹1050 ₹<strike>1150</strike></h5>
            </p>
            <a href="order.php"><button type="button" class="cardbtn1">Order Now</button></a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="card">
          <img src="images/spir17.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ashtavakra Mahagita</h5>
            <p class="card-text"><b>by M. I. Rajasve</b> <br><i class="fa-solid fa-star fa-lg"
                style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                style="color: #FFD43B;"></i><i class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i>
              <br>
            <h5>₹1000 ₹<strike>950</strike></h5>
            </p>
            <a href="order.php"><button type="button" class="cardbtn1">Order Now</button></a>
          </div>
        </div>
      </div> -->
        <?php
         }
        }

      }
      else{
        echo"<p>No best seller product found</p>";
      }
    ?>
    
    </div>
  </div>
</section>
<br>
<!-- services -->
<div class="container service"><br>
  <h1>Our services</h1>
  <section class="features">

    <div class="feature-box">
      <img src="images/box_1.png" alt="Fast Delivery">
      <div class="feature-title">FAST DELIVERY</div>
      <div class="feature-desc">Free standard delivery</div>
    </div>
    <div class="feature-box">
      <img src="images/gift-box_1.png" alt="Best Offers">
      <div class="feature-title">BEST PRICES & OFFERS</div>
      <div class="feature-desc">Multiple gift available</div>
    </div>
    <div class="feature-box">
      <img src="images/fire_1.png" alt="Great Deals">
      <div class="feature-title">GREAT DAILY DEAL</div>
      <div class="feature-desc">Orders $50 or more</div>
    </div>
    <div class="feature-box">
      <img src="images/box4.png" alt="Click & Collect">
      <div class="feature-title">CLICK & COLLECT</div>
      <div class="feature-desc">Check your local stores</div>
    </div>

  </section>
</div>
<!-- newsletter -->
<?php
$successMsg = '';
$errorMsg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Connect to database
    $conn = new mysqli("localhost:3307", "root", "", "bookshop"); // Change this!

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert into table
    $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        $successMsg = "Subscribed successfully!";
    } else {
        $errorMsg = "You may have already subscribed.";
    }

    $stmt->close();
    $conn->close();
}
?>

<section class="subscribe-section" style="display: flex; align-items: center; justify-content: space-between; background-color: #fef0dc; padding: 40px; border-radius: 20px;">
  <div class="subscribe-text" style="max-width: 600px;">
    <h2>Join the community</h2>
    <p>Enter your email address to receive regular updates, as well as news on upcoming events and specific offers.</p>
    <form class="subscribe-form" method="POST" style="display: flex; margin-top: 20px;">
      <input type="email" name="email" placeholder="Your email address" required style="padding: 15px; border-radius: 30px 0 0 30px; border: none; flex: 1;">
      <button type="submit" style="background-color: #f75e52; color: white; border: none; padding: 15px 30px; border-radius: 0 30px 30px 0; cursor: pointer;">Subscribe</button>
    </form>
    <?php if ($successMsg): ?>
        <p style="color: green; margin-top: 10px;"><?= $successMsg ?></p>
    <?php elseif ($errorMsg): ?>
        <p style="color: red; margin-top: 10px;"><?= $errorMsg ?></p>
    <?php endif; ?>
  </div>
  <div class="subscribe-image">
    <img src="images/girl.png" alt="Reading Girl Illustration" style="max-width: 300px;">
  </div>
</section>


<!-- authers -->
<section class="authors-section">
  <h2 class="authors-title">Featured authors</h2>
  <div class="authors-list">

    <div class="author">
      <img src="images/auther1.jpg" alt="Joe Knight">
      <div class="author-name">Shubha Vilas</div>
    </div>

    <div class="author">
      <img src="images/auther2.jpg" alt="Summer Chandler">
      <div class="author-name">Ravindra Tagore</div>
    </div>

    <div class="author">
      <img src="images/auther3.jpg" alt="Dennis Daniels">
      <div class="author-name"> Anita Krishan</div>
    </div>

    <div class="author">
      <img src="images/auther4.jpeg" alt="Aubrie Butler">
      <div class="author-name">Aubrie Butler</div>
    </div>

    <div class="author">
      <img src="images/auther5.jpeg" alt="Matias Casey">
      <div class="author-name">Matias Casey</div>
    </div>

    <div class="author">
      <img src="images/auther6.jpg" alt="Melany Rodriguez">
      <div class="author-name">Anirban</div>
    </div>

    <div class="author">
      <img src="images/auther7.jpeg" alt="Camelia Doe">
      <div class="author-name"> Krishnarjun</div>
    </div>

  </div>
</section>

<!-- blog -->
<section class="blogs">
  <center>
    <h2>Our Blogs</h2>
  </center>
  <div class="container">
    <div class="row blog">
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
          <img src="images/blog1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Genre: Fiction, Self-Help</h5>
            <p class="card-text">
              <b>The Alchemist – Paulo Coelho</b><br>
              The Alchemist is a story about a young shepherd named Santiago who embarks on a journey to follow his
              dreams. Along the way, he meets different people who teach him valuable life lessons. <br>
              <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                class="fa-solid fa-star-half-stroke fa-lg" style="color: #FFD43B;"></i> <br>


            </p>
            <a href=""><button type="button">Read More</button></a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
          <img src="images/blog3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> Atomic Habits – James Clear
            </h5>
            <p class="card-text"><b>Genre: Self-Improvement, Psychology</b>
              <br>
              If you want to change your habits and improve your daily life, Atomic Habits is a must-read. James Clear
              explains how small changes can lead to big results.Why You Should Read It: <br>
              <i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i></i><i
                class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i>
              <br>

            </p>
            <a href=""><button type="button">Read More</button></a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
          <img src="images/blog2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">1984 – George Orwell</h5>
            <p class="card-text"><b>Genre: Dystopian Fiction, Political Thriller</b> <br>1984 is a gripping novel that
              presents a world where the government controls everything, even people’s thoughts. This book explores
              themes of surveillance.. <br><i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i
                class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i><i class="fa-solid fa-star fa-lg"
                style="color: #FFD43B;"></i></i><i class="fa-solid fa-star fa-lg" style="color: #FFD43B;"></i> <br>

            </p>
            <a href=""><button type="button">Read More</button></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- review -->
<div class="container py-5">
  <div class="text-center mb-5"><br><br>
    <h2 class="section-title"> What Our Customers Say!</h2>
    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore
      et dolore magna aliqua.</p>
  </div>

  <div class="row">
    <!-- Testimonial 1 -->
    <div class="col-md-4">
      <div class="testimonial-card">
        <div class="quote-icon">“</div>
        <div class="testimonial-header">
          <img src="images/auther3.jpg" alt="Alex">
          <div>
            <div class="stars">★★★★★</div>
            <strong>Alex Ritchell</strong>
          </div>
        </div>
        <p class="testimonial-text">Perfect Themes and the best of all that you have many options to choose! Best
          Support team ever!</p>
      </div>
    </div>

    <!-- Testimonial 2 -->
    <div class="col-md-4">
      <div class="testimonial-card">
        <div class="quote-icon">“</div>
        <div class="testimonial-header">
          <img src="images/auther5.jpeg" alt="Leaax">
          <div>
            <div class="stars">★★★★☆</div>
            <strong>Leaax May</strong>
          </div>
        </div>
        <p class="testimonial-text">It has survived not only five Lorem Ipsum is simply dummy text of the printing and
          typesetting industry.</p>
      </div>
    </div>

    <!-- Testimonial 3 -->
    <div class="col-md-4">
      <div class="testimonial-card">
        <div class="quote-icon">“</div>
        <div class="testimonial-header">
          <img src="images/auther6.jpg" alt="Alan">
          <div>
            <div class="stars">★★★☆☆</div>
            <strong>Alan Sears</strong>
          </div>
        </div>
        <p class="testimonial-text">I'm one of those custom satisfied, Satisfied customer is the best source of
          advertisement. It has survived.</p>
      </div>
    </div>
  </div>
</div>

<?php
include_once("footer.php")
  ?>