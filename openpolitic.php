<?php
include_once("header.php")
?>
  <div class="container kalki">
    <div class="row">
      <!-- Book Image -->
      <div class="col-md-4 position-relative">
        <div class="discount-badge">30%</div>
        <img src="images/politic17.jpg" alt="Book Cover" class="book-img" />
      </div>

      <!-- Book Details -->
      <div class="col-md-5"><br>
        <h4 class="text-danger">Nationalism</h4>

        <p>
          <strong>By:</strong>
           Rabindranath Tagore  (Author)|
          <strong>Publisher:</strong>
         Fingerprint!
        </p>
        <p><strong>Released:</strong> 28 Jan 2020</p>

        <!-- Rating -->
        <div class="rating mb-2">
          ★★★☆☆ <span class="text-muted">(900 Reviews)</span>
        </div>

        <!-- Pricing -->
        <div class="price">₹836
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
            Nationalism is a comprehensive exploration of the historical, political, and cultural phenomenon of nationalism. Written by Rabindranath Tagore, a renowned poet and philosopher, this thought-provoking book delves into the complexities and consequences of nationalistic fervor. Engaging readers with insightful analysis, Tagore challenges prevailing notions of patriotism and encourages a broader understanding of humanity.ligious texts.
            </p>
            <ul>
              <li></li>
              <li>A profound examination of the impact of nationalism on society and individual identity.</li>
              <li>Tagore's eloquent prose that stimulates critical thinking and introspection.</li>
              <li>Relevant and timely reflections on the pitfalls and potential of nationalist ideologies.</li>
              <li>A valuable resource for students, scholars, and anyone interested in political and social theory.</li>
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