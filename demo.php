<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Categories</title>
  <style>
    body {
      font-family: Georgia, serif;
      background-color: #fdfaf6;
      margin: 0;
      padding: 0;
    }

    .container {
      display: flex;
      justify-content: center;
      gap: 30px;
      padding: 50px;
    }

    .card-link {
      text-decoration: none;
    }

    .card {
      width: 130px;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #f0ece6;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.04);
      transition: transform 0.2s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .icon {
      height: 70px;
      margin-bottom: 10px;
    }

    .label {
      font-size: 18px;
      color: #2c2c2c;
    }
  </style>
</head>
<body>

  <div class="container">
    <!-- Fantasy -->
    <a href="fantasy.html" class="card-link">
      <div class="card">
        <img src="fantasy-icon.png" alt="Fantasy" class="icon">
        <div class="label">Fantasy</div>
      </div>
    </a>

    <!-- Horror -->
    <a href="horror.html" class="card-link">
      <div class="card">
        <img src="horror-icon.png" alt="Horror" class="icon">
        <div class="label">Horror</div>
      </div>
    </a>

    <!-- Family -->
    <a href="family.html" class="card-link">
      <div class="card">
        <img src="family-icon.png" alt="Family" class="icon">
        <div class="label">Family</div>
      </div>
    </a>

    <!-- Fiction -->
    <a href="horror.php" class="card-link">
      <div class="card">
        <img src="images/logo5.jpg" alt="Fiction" class="icon">
        <div class="label">Fiction</div>
      </div>
    </a>
  </div>

</body>
</html>
