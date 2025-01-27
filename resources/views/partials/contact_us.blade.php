<div class="global_contact_us_section">
<div class="container contact-container">
  <div class="row">
    <!-- Form Column -->
    <div class="col-lg-6 col-md-12 form-column animate__animated animate__fadeInLeft">
      <h3>Contact Us</h3>
      <form id="contactForm">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" id="name" class="form-control" placeholder="Enter your Name" required />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" id="email" class="form-control" placeholder="Enter a valid email address" required />
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea id="message" class="form-control" rows="4" placeholder="Enter your Message" required></textarea>
        </div>
        <div class="form-check mb-3">
          <input type="checkbox" id="terms" class="form-check-input" required />
          <label for="terms" class="form-check-label">
            I accept the <a href="#" class="text-decoration-none">Terms of Service</a>
          </label>
        </div>
        <button type="submit" class="btn btn-warning w-100">SUBMIT</button>
      </form>
    </div>

    <!-- Details Column -->
    <div class="col-lg-6 col-md-12 details-column animate__animated animate__fadeInRight">
      <h5>CALL US</h5>
      <p>1 (234) 567-891</p>
      <p>1 (234) 987-654</p>

      <h5>LOCATION</h5>
      <p>121 Rock Street, 21 Avenue,</p>
      <p>New York, NY 92103-9000</p>

      <h5>OUR TOP SERVICES</h5>
      <p>Local Transfers</p>
      <p>Airport Transfers</p>
      <p>Excursions and Tours</p>

      <!-- Map -->
      <h5>INDIA MAP</h5>
      <div id="map"></div>
    </div>
  </div>
</div>
</div>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<!-- Map Initialization Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize the map
        const map = L.map('map').setView([20.5937, 78.9629], 5); // Center on India

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        // Fetch city data from contact.json
        fetch('{{ asset("contact.json") }}')
            .then(response => response.json())
            .then(data => {
                data.cities.forEach(city => {
                    const marker = L.marker(city.coords).addTo(map);
                    marker.bindPopup(`<b>${city.name}</b>`).openPopup();
                });
            })
            .catch(error => console.error('Error loading city data:', error));
    });
</script>