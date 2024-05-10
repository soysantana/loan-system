  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo url('/src/pages/index.php'); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link sub collapsed" data-bs-target="#clients-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-badge-fill"></i><span>Clientes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="clients-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a class="new-client" href="<?php echo url('/src/pages/new-client.php'); ?>">
              <i class="bi bi-circle"></i><span>Nuevo Cliente</span>
            </a>
          </li>
        </ul>
      </li><!-- End clients Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo url('/src/pages/user-profile.php'); ?>">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo url('/src/pages/register.php'); ?>">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

<script>
var currentUrl = window.location.pathname;
var actions = {
  "/src/pages/new-client.php": function () {
    activateMenuItem("#clients-nav .new-client");
    expandMenuItem(".sub");
  },
  "/src/pages/index.php": function () {
    expandMenuItem(".nav-link[href='/src/pages/index.php']");
  },
  "/src/pages/user-profile.php": function () {
    expandMenuItem(".nav-link[href='/src/pages/user-profile.php']");
  },
};

if (actions[currentUrl]) {
  actions[currentUrl]();
}

function activateMenuItem(selector) {
  document.querySelector(selector).classList.add("active");
}

function expandMenuItem(selector) {
  var element = document.querySelector(selector);
  if (element) {
    element.classList.remove("collapsed");
    var navContent = element.nextElementSibling;
    if (navContent && navContent.classList.contains("nav-content")) {
      navContent.classList.add("show");
    }
  }
}
</script>