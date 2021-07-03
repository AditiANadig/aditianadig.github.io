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


  <style>

  @media (max-width:992px) {

    .navbar-toggler {
      order:0;
      margin-left:15px;
      margin-right:0;
    }
  }

</style>


</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><span class="just">Just</span><span class="desi">Desi</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="nosignin.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>
          <li class="nav-item ">
            <a href="" class="nav-link signin" data-toggle="modal" data-target="#modalLRForm">Sign-In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="aboutrow w3-animate-opacity" id="about">
    <div class="column picture">
      <img src="Images/Restaurant 2.jpg" class="restpic" alt="restaurant" />
    </div>
    <div class="column content">
      <h1 class="abouthead">get to know us</h1>
      <hr class="abouthr"/>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </div>
  <div class="contactrow w3-animate-opacity" id="contact">
    <div class="column reach">
      <h1 class="contacthead">how to reach us</h1>
      <i class="fas fa-map-marker-alt"></i>&nbsp&nbspBDA Shopping Complex, #2466, Bhaskar Grand Tower
      <br />24th Cross, Siddanna Layout, Banashankari Stage II
      <br />Bengaluru, Karnataka 560070
      <br /><i class="fas fa-phone-volume"></i>&nbsp&nbsp089718 18009
      <br /><i class="fas fa-envelope"></i>&nbsp&nbspjustdesi@gmail.com
      <br /><i class="fab fa-instagram"></i>&nbsp&nbsp@just.desi
    </div>
    <div class="column touch">
      <form action="mailto:justdesi@gmail.com" method="post" enctype="text/plain">
        <h1 class="contacthead">get in touch</h1>
        <div class="mb-3">
          <label for="formControlInput1" class="form-label">Name</label>
          <input type="text" class="form-control feed" id="formControlInput1">
        </div>
        <div class="mb-3">
          <label for="formControlTextarea1" class="form-label">Message</label>
          <textarea class="form-control feed" id="formControlTextarea1" rows="3"></textarea>
        </div>
        <dic class="mb-3">
          <button type="submit" class="btn btn-outline-light submit-1 w3-animate-opacity" value="Submit">Submit</button>
        </dic>
      </form>
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
