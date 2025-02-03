<div class="global_header">
  <nav class="navbar navbar-expand-lg py-3 py-lg-2 shadow nav-custom" style="background-color: rgb(244, 241, 39)">
    <div class="container-fluid">
      <!-- Brand Logo -->
      <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="{{ asset($header['header']['logo']['src']) }}" alt="Pentapolis Foundation" height="40" />
        <span class="ms-2 nv-logo-title">Pentapolis Foundation</span>
      </a>

      <!-- Hamburger Menu Button -->
      <button
        class="navbar-toggler border-0"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="burger-menu"><i class="fas fa-bars"></i></span>
      </button>

      <!-- Navbar Links -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link" href="/" onclick="closeNavbar()"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#my-talent-workforce" onclick="closeNavbar()"><i class="fas fa-briefcase"></i> My Talent & Workforce</a>
          </li>

          <!-- Goals Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="goalsDropdown" role="button">
              <i class="fas fa-bullseye"></i> Goals
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/capacity-building"><i class="fas fa-graduation-cap"></i> Capacity Building</a></li>
              <li><a class="dropdown-item" href="/humanitarian-assistance"><i class="fas fa-hand-holding-heart"></i> Humanitarian Assistance</a></li>
              <li><a class="dropdown-item" href="/community-engagement"><i class="fas fa-users"></i> Community Engagement</a></li>
            </ul>
          </li>

          <!-- Give Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="giveDropdown" role="button">
              <i class="fas fa-hand-holding-usd"></i> Give
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/monetary-donation"><i class="fas fa-dollar-sign"></i> Monetary Donation</a></li>
              <li><a class="dropdown-item" href="/inkind"><i class="fas fa-box"></i> In-Kind Donation</a></li>
              <li><a class="dropdown-item" href="/volunteering"><i class="fas fa-hands-helping"></i> Volunteering</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/contact"><i class="fas fa-envelope"></i> Contact</a>
          </li>
        </ul>

        <!-- Conditional Login/Profile Button -->
        @auth
          <!-- If user is authenticated, show profile button -->
          <div class="d-flex align-items-center ms-lg-3">
            <a href="/profile" class="nav-btn nav-btn-outline-primary me-2"><i class="fa fa-user"></i> Profile</a>
          </div>
  
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
              @csrf
              <button type="submit" class="nav-btn nav-btn-outline-primary me-2">
                  <i class="fa fa-sign-out-alt"></i> Logout
              </button>
          </form>
  
        @else
          <!-- If user is not authenticated, show login button -->
          <div class="d-flex align-items-center ms-lg-3">
            <a href="/login" class="nav-btn nav-btn-outline-primary me-2"><i class="fa fa-sign-in"></i> Login</a>
          </div>
        @endauth
      </div>
    </div>
  </nav>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const navbarToggler = document.querySelector(".navbar-toggler");
  const navbarCollapse = document.querySelector("#navbarNav");

  // Toggle Navbar Collapse on Click
  navbarToggler.addEventListener("click", function () {
    navbarCollapse.classList.toggle("show");
  });

  // Handle Dropdown Toggle Clicks
  document.querySelectorAll(".dropdown-toggle").forEach((dropdown) => {
    dropdown.addEventListener("click", function (event) {
      event.preventDefault();
      let menu = this.nextElementSibling;
      
      // Close all other open dropdowns
      document.querySelectorAll(".dropdown-menu").forEach((otherMenu) => {
        if (otherMenu !== menu) {
          otherMenu.classList.remove("show");
        }
      });

      // Toggle the clicked dropdown menu
      menu.classList.toggle("show");
    });
  });

  // Close Dropdowns when Clicking Outside
  document.addEventListener("click", function (event) {
    if (!event.target.closest(".nav-item.dropdown")) {
      document.querySelectorAll(".dropdown-menu").forEach((menu) => {
        menu.classList.remove("show");
      });
    }
  });

  // Close Navbar when clicking a Nav Link (Mobile)
  document.querySelectorAll(".nav-link, .dropdown-item").forEach((link) => {
    link.addEventListener("click", function () {
      navbarCollapse.classList.remove("show");
    });
  });
});
</script>
