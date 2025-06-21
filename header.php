<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>


  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script>$(document).ready(function () {
      $('.slider').bxSlider({ auto: true, mode: 'fade', controls: false, pager: true, touchEnabled: false, speed: 1000 });


    });</script>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    /* tabing content */
    .nav-tabs .nav-link {
      color: #000;
      border: 1px solid #dfdcdc;
      background-color: white;
    }

    .nav-tabs .nav-link.active {
      background-color: rgb(245, 197, 167);
      color: #fff;
      border: none;
      border-color: rgb(95, 143, 95);
    }

    .tab-content {
      background-color: rgb(255, 249, 246);
      margin-bottom: 70px;
    }

    .tab-content h5 {
      color: #b85c00;
      font-weight: bold;
    }

    .tab-content p {
      font-size: 17px;
    }

    .tab b {
      font-size: 20px;

    }
.cartcolor{
  color: black;
  font-size: 20px;
}
    .tab-content {
      border: 1px solid rgb(238, 235, 235);
      padding: 20px;
    }
  </style>
</head>


<body>



  <header>
    <div class="marq">
      <marquee behavior="scroll" direction="left">Welcome to INKSPIRE! Enjoy exciting discounts and latest arrivals!
      </marquee>
    </div>


    <div class="container">

      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="images/logo.png" class="im1" height="70px" width="90px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nv" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bookabout.php">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Library
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="category.php?viewid=4">Spiritual books</a>
                <a class="dropdown-item" href="category.php?viewid=9">Politics Books</a>
                <a class="dropdown-item" href="category.php?viewid=8">Historical Books</a>
                <a class="dropdown-item" href="category.php?viewid=14">Adventures Books</a>
                <a class="dropdown-item" href="category.php?viewid=6">Horror Books</a>

              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li>
              <a class="nav-link" href="cart.php"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              <span id="cart-item" class=" cartcolor"></span>
              </a>
              
            </li>
          </ul>
        </div>
      </nav>
    </div>

  </header>