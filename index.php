<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Just Desi</title>


  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  <!-- W3Schools -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- CSS -->
  <link href="style.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cardo&family=Dancing+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Basic&display=swap" rel="stylesheet">

  <!-- Icons -->
  <script src="https://kit.fontawesome.com/67ab68277d.js" crossorigin="anonymous"></script>

</head>

<body>
  <div class="container-fluid">
    <div class="row r1 ">
      <div class="col col-md-6 c1 c1f">
        <h1 class="title"><span class="just">Just</span><span class="desi">Desi</span><br /><br />
          <span class="titledesc1 w3-animate-opacity">In the mood for some good food?</span><br />
          <span class="titledesc2 w3-animate-opacity">Sign in to order your food right now!</span><br /><br />
          <button type="button" class="btn btn-outline-light btn-lg w3-animate-opacity btnsignin" data-toggle="modal" data-target="#modalLRForm"><i class="fas fa-sign-in-alt"></i>&nbsp&nbspSign-In</button>
        </h1>
      </div>
      <div class="col c1 c1s">
        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Images/Desi Food 1.jpg" class="desifood w-100" alt="df1">
            </div>
            <div class="carousel-item">
              <img src="Images/Desi Food 2.jpg" class="desifood filter w-100" alt="df2">
            </div>
            <div class="carousel-item">
              <img src="Images/Desi Food 3.jpg" class="desifood filter w-100" alt="df3">
            </div>
            <div class="carousel-item">
              <img src="Images/Desi Food 4.jpg" class="desifood filter w-100" alt="df4">
            </div>
            <div class="carousel-item" style="filter: grayscale(20%);">
              <img src="Images/Desi Food 5.jpg" class="desifood filter w-100" alt="df5">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row r2 " id="features">
      <div class="col c2">
        <i class="fas fa-utensils fa-7x"></i><br /><br />
        <h3 class="adv">Variety of Food</h3>
        <span class="advdesc">A wide range of Indian food is offered for your cravings.</span>
      </div>
      <div class="col c2">
        <i class="fas fa-truck-loading fa-7x"></i><br /><br />
        <h3 class="adv">Quick Delivery</h3>
        <span class="advdesc">Experience the super-fast delivery of your fresh food, on time.</span>
      </div>
      <div class="col c2">
        <i class="fas fa-wallet fa-7x"></i><br /><br />
        <h3 class="adv">Reasonable Cost</h3>
        <span class="advdesc">We focus on giving the best customer-service for the most reasonable cost.</span>
      </div>
    </div>

    <div class="row r4" id="footer">
      <div class="col c4">
        <a href="nosignin.php" class="lc4">About Us</a>
      </div>
      <div class="col c4">
        <i class="fab fa-instagram"></i> &nbsp &nbsp <i class="fab fa-twitter"></i> &nbsp &nbsp <i class="fab fa-facebook"></i>
      </div>
      <div class="col c4">
        <a href="nosignin.php#contact" class="lc4">Contact Us</a>
      </div>
    </div>
  </div>
  <!--Modal: Login / Register Form-->
  <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
      <!--Content-->
      <div class="modal-content">

        <!--Modal cascading tabs-->
        <div class="modal-c-tabs">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs tabs-2" role="tablist">
            <li class="nav-item">
              <a class="nav-link active sr" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link sr" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                Register</a>
            </li>
            <li class="col-4 nav-item" style="padding-top:0.8rem; padding-left:0;">
              <a class="btn btn-outline-info waves-effect ml-auto close" data-dismiss="modal"><i class="fas fa-times"></i></a>
            </li>
          </ul>

          <!-- Tab panels -->
          <div class="tab-content" id="logreg">

            <!--Panel 7-->
            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

              <!--Body-->
              <div class="modal-body mb-1">
                <form action="login_action.php" method="post">
                  <div class="md-form form-sm mb-5">
                    <i class="fas fa-envelope prefix"></i>
                    <input type="email" name="login_email" class="form-control form-control-sm validate sform" placeholder="Your email" required>
                  </div>

                  <div class="md-form form-sm mb-4">
                    <i class="fas fa-lock prefix"></i>
                    <input type="password" name="login_pwd" class="form-control form-control-sm validate sform" placeholder="Your password" required>
                  </div>
                  <div class="text-center mt-2">
                    <button type="submit" class="btn btn-info sign">Sign in</button>
                  </div>
                </form>
              </div>
            </div>
            <!--/.Panel 7-->

            <!--Panel 8-->
            <div class="tab-pane fade" id="panel8" role="tabpanel">

              <!--Body-->
              <div class="modal-body">
                <form action="register_action.php" method="post">
                  <div class="md-form form-sm mb-5">
                    <i class="fas fa-envelope prefix"></i>
                    <input type="email" name="register_email" class="form-control form-control-sm validate sform" placeholder="Your email" required>
                  </div>

                  <div class="md-form form-sm mb-5">
                    <i class="fas fa-lock prefix"></i>
                    <input type="password" name="register_pwd" class="form-control form-control-sm validate sform" placeholder="Your password" required>
                  </div>

                  <div class="md-form form-sm mb-4">
                    <i class="fas fa-lock prefix"></i>
                    <input type="password" name="register_repwd" class="form-control form-control-sm validate sform" placeholder="Repeat password" required>
                  </div>

                  <div class="text-center form-sm mt-2">
                    <button type="submit" class="btn btn-info sign">Sign up</button>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>

<?php
    if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials ! Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    if (isset($_GET['diffPwd'])) {
      $message = "Passwords do not match, try again!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

    if (isset($_GET['usedEmail'])) {
      $message = "Email is already used, try again!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

    if (isset($_GET['regex'])) {
      $message = "Enter email and password in proper format.";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

?>
