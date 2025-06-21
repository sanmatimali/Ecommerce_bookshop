<?php
include_once("header.php")
?>
  <div class="container kalki">
    <div class="row">
      <!-- Book Image -->
      <div class="col-md-4 position-relative">
        <div class="discount-badge">30%</div>
        <img src="images/horror9.jpg" alt="Book Cover" class="book-img" />
      </div>

      <!-- Book Details -->
      <div class="col-md-5"><br>
        <h4 class="text-danger">Ghosts of The Silent Hills: Stories based on true hauntings
        </h4>

        <p>
          <strong>By:</strong>
          Anita Krishan  (Author)|
          <strong>Publisher:</strong>
          Fingerprint! Publishing

        </p>
        <p><strong>Released:</strong> 28 Jan 2020</p>

        <!-- Rating -->
        <div class="rating mb-2">
          ★★★☆☆ <span class="text-muted">(900 Reviews)</span>
        </div>

        <!-- Pricing -->
        <div class="price">₹189
          <span class="old-price">₹249</span>
          
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
            The dead do not rest till they get what they want. You have arrived in the hills. In here, you are surrounded by dense, menacing forests, enveloped in a deadly silence... You never know what lurks here in the Cold, dark night. Do not walk alone after sunset in the hills. A beautiful woman in white haunts the Lonely pathways, looking to enchant and ensnare men... All the people who died in accidents here... They say you hear their screams at night. And the deserted lodges sitting amidst lush greenery and calm streams... Spirits lie in wait here, ready to prey on the living. There are sceptics who did not heed these warnings. They tried to rationalize what they saw, what they felt. But when they came face to face with the beings that they believed didn’t exist, they couldn’t run away anymore... Ghosts of the silent hills is a collection that will make your nights a little scarier, encompassing the very best spine-chilling stories based on true hauntings.
            </p>
            
          </div>
        </div>
        <div class="tab-pane fade" id="reviews" role="tabpanel">  
          <!-- <div class="row text-center gy-3">
            <div class="col-6 col-md-2">
              <div class="icon-box silver">📄</div>
              <div><strong>312 pages</strong></div>
            </div>
            <div class="col-6 col-md-2">
              <div class="icon-box silver">🌐</div>
              <div><strong>English</strong></div>
            </div>
            <div class="col-6 col-md-2">
              <div class="icon-box silver">🏢</div>
              <div><strong>PRAKASH</strong></div>
            </div>
            <div class="col-6 col-md-3">
              <div class="icon-box silver">📅</div>
              <div><strong>1 December 2015</strong></div>
            </div>
            <div class="col-6 col-md-3">
              <div class="icon-box silver">📐</div>
              <div><strong>2.5 x 12.8 x 19.7 cm
              </strong></div>
            </div>
          </div> -->
      
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