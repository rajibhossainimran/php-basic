<?php 
     include("common_file/header.php")
?>
  
<?php
echo<<<START
  <!-- Contact Section -->
  <section class="contact-section bg-light py-4">
    <div class="container">
      <div class="row">
        <!-- Contact Form Column -->
        <div class="col-md-6">
          <h2 class="mb-4">Contact Us</h2>
          <form action="#" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>

        <!-- Contact Info Column -->
        <div class="col-md-6">
          <h2 class="mb-4">Our Location</h2>
          <div class="contact-info">
            <h5>Office Address:</h5>
            <p>1234 Street Name, City, Country</p>
            <h5>Email:</h5>
            <p><a href="mailto:info@example.com">info@example.com</a></p>
            <h5>Phone:</h5>
            <p><a href="tel:+1234567890">+1 (234) 567-890</a></p>
          </div>
          <div class="map-container">
            <!-- Embed Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.310443236897!2d-74.00601538459327!3d40.71277677933023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a20a2b180e9%3A0x1b42804c1e3c2d7b!2sNew+York+City%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1631830928045!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  START;
?>

  <?php 
     include("common_file/footer.php")
?>