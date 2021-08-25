
<?php include("path.php");?>
<?php include (ROOT_PATH . "/app/controllers/users.php");?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="assets/img/favicon.png" rel="shortcut icon" type="image/png" />

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="assets/css/signupcss.css" />
    <title>Pipefy | Log In  </title>
  </head>
  <body>
    <div class="container-sm">
      <div class="logo d-flex justify-content-center">
        <div class="logoimg">
          <a href="index.php"><img src="assets/img/logo.png" alt="logoimg" /></a>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="signup-form">
        <form action="login.php" method="post">


        <?php include (ROOT_PATH . "/app/helpers/formerrors.php");?>

          <h2>Log In</h2>
          <p>Please login here to access our dashboard</p>
          <hr />
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-paper-plane"></i>
                </span>
              </div>
              <input
                type="text"
                class="form-control"
                name="email"
                value= "<?php echo $email; ?>"
                placeholder="Email"
                
              />
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
              <input
                type="password"
                class="form-control"
                name="password"
                value= "<?php echo $password; ?>"
                placeholder="Password"
               
              />
            </div>
          </div>

          <div class="d-flex justify-content-center">
            <button type="submit" name="submit-login" class="btn btn-primary btn-lg">
              Log In
            </button>
          </div>
        </form>
        <div class="sa-link">
          <div class="text-center">
            Don't have an account yet?
            <a href="signup.php" style="color: blue">Create free account</a>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
