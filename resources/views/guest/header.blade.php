
  <nav class="navbar d-flex justify-content-center rounded navbar-expand-lg navbar-light color-light bg-primary container" style="position:sticky; top:5;">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand d-none d-sm-block" href="index.php"><img width="60" height="60" src="assets/img/logo/logo.png" alt="Logo" /></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-md-9 ">
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="index.php#landingslide">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php#shop">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php#landingContact">Contact us</a>
        </li>
      </ul>
    </div>
    <div class="col-md-3 d-flex justify-content-end">
      <button type="button" class="btn btn-dark" onclick="window.location.href='cart.php'">
        <span class=" d-inline p-2">
          <i class="fas fa-shopping-cart"></i> Cart
        </span>
        <span class="badge bg-secondary"><?php echo count($_SESSION['cart']); ?></span>
      </button>
    </div>
  </div>
</nav>





