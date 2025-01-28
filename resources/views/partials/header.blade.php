<div class="global_header">
<nav class="navbar navbar-expand-lg py-3 py-lg-2 shadow nav-custom" style="background-color: rgb(244, 241, 39)">
  <a class="navbar-brand d-flex align-items-center" href="/">
    <img src="{{ asset($header['header']['logo']['src']) }}" alt="Pentapolis Foundation" height="40" />
    <span class="ms-2 nv-logo-title">Pentapolis Foundation</span>
  </a>
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

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto align-items-center">
      <li class="nav-item">
        <a class="nav-link" href="/"><i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#my-talent-workforce"><i class="fas fa-briefcase"></i> My Talent & Workforce</a>
      </li>
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle"
          id="goalsDropdown"
          href="#"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-bullseye"></i> Goals
        </a>
        <ul class="dropdown-menu p-3 mb-2 text-dark" aria-labelledby="goalsDropdown">
          <li><a class="dropdown-item" href="/capacity-building"><i class="fas fa-graduation-cap"></i> Capacity Building</a></li>
          <li><a class="dropdown-item" href="/humanitarian-assistance"><i class="fas fa-hand-holding-heart"></i> Humanitarian Assistance</a></li>
          <li><a class="dropdown-item" href="/community-engagement"><i class="fas fa-users"></i> Community Engagement</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle"
          href="#"
          id="giveDropdown"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-hand-holding-usd"></i> Give
        </a>
        <ul class="dropdown-menu p-3 mb-2 text-dark" aria-labelledby="giveDropdown">
          <li><a class="dropdown-item" href="/monetary-donation"><i class="fas fa-dollar-sign"></i> Monetary Donation</a></li>
          <li><a class="dropdown-item" href="/inkind"><i class="fas fa-box"></i> In-Kind Donation</a></li>
          <li><a class="dropdown-item" href="/volunteering"><i class="fas fa-hands-helping"></i> Volunteering</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact"><i class="fas fa-envelope"></i> Contact</a>
      </li>
    </ul>

    <!-- Login and Signup Buttons -->
    <div class="d-flex align-items-center ms-lg-3">
      <a href="/login" class="nav-btn nav-btn-outline-primary me-2"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
    </div>
  </div>
</nav>
</div>
