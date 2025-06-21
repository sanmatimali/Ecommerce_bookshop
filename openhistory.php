<?php
include_once("header.php")
?>
  <div class="container kalki">
    <div class="row">
      <!-- Book Image -->
      <div class="col-md-4 position-relative">
        <div class="discount-badge">30%</div>
        <img src="images/history8.jpg" alt="Book Cover" class="book-img" />
      </div>

      <!-- Book Details -->
      <div class="col-md-5"><br>
        <h4 class="text-danger">
        Knowledge Encyclopedia - World History</h4>

        <p>
          <strong>By:</strong>
          Wonder House Books 
          <strong>Publisher:</strong>
          Wonder House Books

        </p>
        <p><strong>Released:</strong> 28 Jan 2020</p>

        <!-- Rating -->
        <div class="rating mb-2">
          ★★★☆☆ <span class="text-muted">(900 Reviews)</span>
        </div>

        <!-- Pricing -->
        <div class="price">₹837
          <span class="old-price">₹1,572</span>
  
        </div>

        <!-- Stock -->
        <p class="text-success mt-2 mb-1">In Stock</p>
        <p class="text-muted">Ships within 1-2 Business Days</p>


      </div>

      <!-- Action Box -->

      <div class="col-md-3"><br><br>
        <div class="card-box">
          <label for="qty">Quantity:</label>
          <select class="form-select mb-3" id="qty">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
          
          <button class="btn btn-buy w-100 mb-2">Buy Now</button>
          <button class="btn btn-outline-secondary w-100">Add to Wishlist</button>
        </div>
      </div>
    </div>
  </div>
  <br><br>

  


  <section>
    <div class="container">
      <!-- Tabs Nav -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description"
            type="button" role="tab">Services</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button"
            role="tab">About Description</button>
        </li>
        
      </ul>

      <!-- Tabs Content -->
      <div class="tab-content mt-3" id="myTabContent">
        <div class="tab-pane fade show active tab" id="description" role="tabpanel">
          <div class="row text-center mb-4">
            <div class="col-6 col-md-2">
              <div class="icon-box blue">🚚</div>
              <div class="feature-text">Free Delivery</div>
            </div>
            <div class="col-6 col-md-2">
              <div class="icon-box orange">🔄</div>
              <div class="feature-text">7 days Replacement</div>
            </div>
            <div class="col-6 col-md-2">
              <div class="icon-box gray">📦</div>
              <div class="feature-text">Amazon Delivered</div>
            </div>
            <div class="col-6 col-md-3">
              <div class="icon-box brown">💰</div>
              <div class="feature-text">Cash/Pay on Delivery</div>
            </div>
            <div class="col-6 col-md-3">
              <div class="icon-box silver">🔒</div>
              <div class="feature-text">Secure Transaction</div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="info" role="tabpanel">
          <div class="mb-4">
<h5></h5>
            <p>
            When and where did the first civilisations emerge? How did Britain lead the Industrial Revolution? What was the Suffrage Movement? This encyclopedia will answer these and more hows and whats for you. Learning is made simpler with well-labelled diagrams and an extensive glossary of difficult words. Bonus: the engrossing book comes loaded with Isn’t It Amazing—a section of fun facts to keep you glued for more. This encyclopedia is a must-read for all children!
            </p>
            <ul>
              <li>It is an excellent selection for gifting and school libraries</li>
              <li>It is well-researched and has child-friendly content</li>
              <li>The various topics improve knowledge about the world around us and beyond</li>
              <li>The content will cater to curious minds and expand their horizon</li>
              <li>The book comprises a glossary of new and difficult terms.</li>
            </ul>
          </div>
        </div>
        <div class="tab-pane fade" id="reviews" role="tabpanel">  
          
      
          </div>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </div>
  </section>
  <?php
  include_once("footer.php")
  ?>