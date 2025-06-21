<?php
include_once("header.php")
?>


  <div class="containerorder">
    <div class="booking-form">
      <h2>Book Your Favorite Book</h2>
      <form id="bookingForm" onsubmit="handleSubmit(event)">

        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required />

        <label for="mobile">Mobile Number</label>
        <input type="text" id="mobile" name="mobile" required />

        <label for="category">Book Category</label>
        <select id="category" name="category" required onchange="updateBooks()">
          <option value="">Select Category</option>
          <option value="spiritual">Spiritual</option>
          <option value="politics">Politics</option>
          <option value="horror">Horror</option>
          <option value="adventure">Adventure</option>
          <option value="history">History</option>
        </select>

        <label for="book">Book Title</label>
        <select id="book" name="book" required>
          <option value="">Select a book</option>
        </select>

        <label for="quantity">Quantity</label>
        <input type="number" id="quantity" name="quantity" min="1" required />

        <label for="address">Delivery Address</label>
        <textarea id="address" name="address" rows="3" required></textarea>

        <label for="delivery-date">Preferred Delivery Date</label>
        <input type="date" id="delivery-date" name="delivery_date" required />

        <button type="submit">Book Now</button>

        <p id="successMessage">Booking successful!</p>
      </form>
    </div>
  </div>

  

  <script>
    const booksByCategory = {
      spiritual: [
        "Krishna", "Sounds of Liberation", "Enlightenment", "Autobiography",
        "The Shiva Sutras", "Sunderkand", "By Acharya Prashant", "Ashtavakra Mahagita"
      ],
      politics: [
        "All Kinds of Stupid", "Political Mysteries", "Nationalism", "Capital",
        "The Prince", "Revolution 2020", "India After Gandhi", "Why I am an Atheist"
      ],
      adventure: [
        "Farseeker", "Adventures Sherlock", "Power of One Thought", "Enlightenment",
        "Penguin Select Classics", "Leo Tolstoy", "Kidnapped by Robert", "The Secret Garden"
      ],
      horror: [
        "Ghosts of The Silent", "The Canterville Ghost", "Enter At Your Own Risk", "The Game of Death",
        "Tantrics of Old", "Tales of Horror", "Ghosts in the Dark", "The Black Tiger"
      ],
      history: [
        "World History+", "Space", "Short History of World", "The Art of War",
        "HerStory", "The Odyssey by Homer", "Maharaj", "Shivcharitra"
      ]
    };

    function updateBooks() {
      const category = document.getElementById("category").value;
      const bookSelect = document.getElementById("book");
      bookSelect.innerHTML = '<option value="">Select a book</option>';

      if (category && booksByCategory[category]) {
        booksByCategory[category].forEach(book => {
          const option = document.createElement("option");
          option.value = book;
          option.textContent = book;
          bookSelect.appendChild(option);
        });
      }
    }

    function handleSubmit(event) {
      event.preventDefault(); // Stop form from submitting normally

      // Show success message
      const successMsg = document.getElementById("successMessage");
      successMsg.style.display = "block";

      // Clear form
      document.getElementById("bookingForm").reset();

      // Hide message after 4 seconds
      setTimeout(() => {
        successMsg.style.display = "none";
      }, 4000);
    }
  </script>
<?php
include_once("footer.php")
?>
