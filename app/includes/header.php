<div class="bg-image" style="background-image: url('assets/img/bg.jpeg')">
      <div class="container-sm web_header py-5">
        <div class="logo d-flex justify-content-between">
          <div class="logoimg">
            <a href="index.php"><img src="assets/img/logo.png" alt="logoimg" /></a>
          </div>
          <div class="loginb d-flex">
            <nav>
            <ul class="nav_barr">  
              <?php if (isset($_SESSION['id'])): ?>
                 <div class="dropdown">
                   <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                     <?php echo $_SESSION['username']; ?>
                  </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <?php if ($_SESSION['admin']): ?>
                   <li><a class="dropdown-item" href="admin/dashboard.php">Dashboard</a></li>
            <?php endif; ?>
          <li ><a class="dropdown-item" href="<?php echo BASE_URL . '/logout.php' ?>">Sign Out</a></li>
      </ul>
</div> 
            <?php else: ?>     
                <div class="btn1">
                  <a href="signup.php "
                    ><button class="btn11">Join Now</button></a>
                </div>
                <a href="login.php"> <li class="headli mt-1">Log in</li></a>
            <?php endif; ?>
              </ul>
            </nav>
          </div>
        </div>
        <div class="head">
          <p>
            Need help figuring out how to make your processes more efficient
            with Pipefy? Check out the article collections below!
          </p>
        </div>

        <form method="post">
         <div class="searchform">
          <svg
            fill="#000000"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 30 30"
            width="30px"
            class="search_icon"
            height="30px"
          >
            <path
              d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z"
            />
          </svg>

          <input type="text" class="form-control" id="searchid" placeholder="Search for articles..."/>
          <span id = "search_result"> </span>
        </div>
      </form>
      </div>
    </div>

    <script type="text/javascript">
  $(function() {
     $( "#searchid" ).autocomplete({
       source: 'search.php',
     });
  });
</script>