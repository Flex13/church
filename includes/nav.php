<div class="col-md-12 col-offset-0 text-center">
  <div id="logo">
      <img src="assets/img/churchLogo2.png" height="190" alt="Arms of SA">
  </div>

</div>

<nav class="navbar navbar-expand-lg navbar-dark danger-color">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
      <!-- Left links -->
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if ($page_title == 'Home') {
                                                echo "active";
                                            } ?>" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php if ($page_title == 'About') {
                                                echo "active";
                                            } ?>" href="about.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            About
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="about.php?m=about">About Us</a></li>
            <li><a class="dropdown-item" href="about.php?m=statement">Statement of Faith</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($page_title == 'Ministries') {
                                                echo "active";
                                            } ?>" href="ministry.php">Ministry</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($page_title == 'Register') {
                                                echo "active";
                                            } ?>" href="registration.php?m=register">Become a member</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($page_title == 'Login') {
                                                echo "active";
                                            } ?>" href="registration.php?m=login">Login</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
