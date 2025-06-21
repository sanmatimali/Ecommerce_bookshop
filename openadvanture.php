<?php
include_once("header.php")
?>
  <div class="container kalki">
    <div class="row">
      <!-- Book Image -->
      <div class="col-md-4 position-relative">
        <div class="discount-badge">44%</div>
        <img src="images/adv12.jpg" alt="Book Cover" class="book-img" />
      </div>

      <!-- Book Details -->
      <div class="col-md-5"><br>
        <h4 class="text-danger">Farseeker: The Rod and Staff Epic Fantasy Sci-Fi Adventure</h4>

        <p>
          <strong>By:</strong>
          Joanna Starr  (Author)|
         
        </p>
        <p><strong>Released:</strong> 28 Jan 2020</p>

        <!-- Rating -->
        <div class="rating mb-2">
          ★★★☆☆ <span class="text-muted">(900 Reviews)</span>
        </div>

        <!-- Pricing -->
        <div class="price">₹736
          <span class="old-price">₹1,372</span>
          <div class="save">Save: ₹536 (30%)</div>
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
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button"
            role="tab">Book details</button>
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
            Enlightened. Enslaved. Erased.
Earth, 50,000 years ago before the magic vanished. Invaded by aliens posing as gods, advanced civilisations crumbled. Now, these powerful off-worlders war for control of the planet, and the people who remain no longer remember what they once were. Seduced then enslaved, humanity has fallen.

Beneath the destroyed remains of an ancient temple, Thaya discovers a relic and a scroll written by the last of an advanced civilisation. The scroll contains a message and a vision of a forgotten world. The relic unlocks a memory about her own past that she should not have forgotten. The truth sets her free but it comes at a great cost, and now she must flee.
            </p>
            You can read them in any order, but most people prefer to read them in the order of publication:

<ol type="1">
    <li>Farseeker</li>
    <li>Flamerunner</li>
    <li>Sunbreaker</li>
    <li>Gatewalker</li>
</ol>
          </div>
        </div>
        <div class="tab-pane fade" id="reviews" role="tabpanel">  
          <div class="row text-center gy-3">
            <div class="col-6 col-md-2">
              <div class="icon-box silver">📄</div>
              <div><strong>490 pages</strong></div>
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
              <div><strong>25 March 2020</strong></div>
            </div>
            <div class="col-6 col-md-3">
              <div class="icon-box silver">📐</div>
              <div><strong>1.5 x 12.8 x 19.5 cm
              </strong></div>
            </div>
          </div>
      
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