<div class="container-fluid width=100%">
      <nav class="navbar navbar-custom navbar-expand-sm">
        <a class="navbar-brand ms-4" href="<?php echo BASE_URL . '/index.php'?>">
          <img
            src="../../assets/img/footerlogo.png"
            alt="logoimg"
            height="35"
            class="d-inline-block align-top"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#toggleMobileMenu"
          aria-controls="toggleMobileMenu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="dropdown ms-auto text-center me-4">
            <?php if (isset($_SESSION['id']));?>
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
         <?php echo $_SESSION['username']?>
        </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
         <li><a class="dropdown-item" href="<?php echo BASE_URL . '/logout.php';?> ">Logout</a></li> 
  </ul>
</div>
      </nav>
    </div>