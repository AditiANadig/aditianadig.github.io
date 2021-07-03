<?php

    include "validateuser.php";
	  include "user.php";

	  $login_email = $_SESSION["loggedin_user"];
    $sql0 =  "SELECT * FROM users WHERE email='".$login_email."'";
    $result0 = $conn->query($sql0);
    $row0 = $result0->fetch_assoc();

    $sql1 =  "SELECT * FROM categories";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    $sum=0;

    $pos=strpos($login_email,"@");
    $username=substr($login_email, 0, $pos);


?>

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

  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="logout_action.php"><span class="just">Just</span><span class="desi">Desi</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">My Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout_action.php">Logout</a>
          </li>
        </ul>
      </div>
      <span class="navbar-text welcome">
      welcome, <?php echo $username; ?>!
      </span>
    </div>
  </nav>

  <div class="menurow1 w3-animate-opacity">
    <div class="menutitle">
      <h1 class="menutitlehead">A taste of local seasonal & appetizing flavours</h1>
      <hr class="menuhr" />
      <span class="menutitledesc">Something for everyone and everyone for something! So many options. Only one stomach. That said, you are a decision maker. As such, this can only end well.</span>
    </div>
  </div>
  <div class="menurow2 w3-animate-opacity">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="card" style="width: 18rem;">
            <img src="Images/SI.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><b>SOUTH INDIAN CUISINE</b></h5>
              <p class="card-text">It includes the cuisines of the five southern states of India—Andhra Pradesh, Karnataka, Kerala, Tamil Nadu and Telangana—and the union territories.</p>
              <div class="col value">
                <button type="button" class="add btn btn-dark" onclick="window.location.href='#si'" data-field="">
                  Explore
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="width: 18rem;">
            <img src="Images/NI.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><b>NORTH INDIAN CUISINE</b></h5>
              <p class="card-text">It is distinguished by the proportionally high use of dairy products; milk, paneer, ghee (clarified butter), and yoghurt are all common ingredients.</p>
              <div class="col value">
                <button type="button" class="add btn btn-dark" onclick="window.location.href='#ni'" data-field="">
                  Explore
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="width: 18rem;">
            <img src="Images/Beverage.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><b>BEVERAGES</b></h5>
              <p class="card-text"> Detox your body by using one of the fastest and the most convenient ways, drinking healthy and nutiricious beverages. </p>
              <div class="col value">
                <button type="button" class="add btn btn-dark" onclick="window.location.href='#bev'" data-field="">
                  Explore
                </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container w3-animate-opacity">
    <div class="row">
      <div class="col-lg-7 menucol">
        <div class="menurow3">
          <div class="row menucatrow1" id="si">
            <span class="menuheadsi">south indian</span>

            <?php
            $sql2 =  "SELECT * FROM food WHERE cat_id=1";
            $result2  = $conn->query($sql2);
            $arr_all = $result2->fetch_all(MYSQLI_ASSOC);
              for ($i=1; $i <= count($arr_all); ) { ?>
                	<?php for ($j=1; $j <= 3; $j++) { ?>
                    <?php if ($i+$j-2 == count($arr_all)) {
                      break;
                    }  ?>

              <span class="menucontent">
                <form action="cart_action.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" method="post">
                <div class="row menunamerow">
                    <div class="col-7" id="menufetch">
                      <span class="menuname"> <?php echo $arr_all[$i+$j-2]['fname']; ?> </span><br />
                      <span class="menuprice"> <?php echo $arr_all[$i+$j-2]['price']; ?> </span>
                    </div>
                      <div class="col-3">
                        <input name="quantity" type="number" class="form-control menuqtyno" value="1" min="0" max="100" required/>
                      </div>
                      <div class="col-2">
                        <button type="submit" class="btn btn-outline-success menuaddsi">ADD</button>
                      </div>
                </div>
                </form>
              </span>

                  <?php } ?>
                <?php $i = $i + 3; ?>
              <?php } ?>

          </div>

          <div class="row menucatrow2" id="ni">
            <span class="menuheadni">north indian</span>

            <?php
            $sql2 =  "SELECT * FROM food WHERE cat_id=2";
            $result2  = $conn->query($sql2);
            $arr_all = $result2->fetch_all(MYSQLI_ASSOC);
              for ($i=1; $i <= count($arr_all); ) { ?>
                  <?php for ($j=1; $j <= 3; $j++) { ?>
                    <?php if ($i+$j-2 == count($arr_all)) {
                      break;
                    }  ?>

              <span class="menucontent">
                <form action="cart_action.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" method="post">
                <div class="row menunamerow">
                    <div class="col-7" id="menufetch">
                      <span class="menuname"> <?php echo $arr_all[$i+$j-2]['fname']; ?> </span><br />
                      <span class="menuprice"> <?php echo $arr_all[$i+$j-2]['price']; ?> </span>
                    </div>
                      <div class="col-3">
                        <input name="quantity" type="number" class="form-control menuqtyno" value="1" min="0" max="100" required/>
                      </div>
                      <div class="col-2">
                        <button type="submit" class="btn btn-outline-success menuaddsi">ADD</button>
                      </div>
                </div>
                </form>
              </span>

                  <?php } ?>
                <?php $i = $i + 3; ?>
              <?php } ?>

          </div>

          <div class="row menucatrow3" id="bev">
            <span class="menuheadbev">beverages</span>

            <?php
            $sql2 =  "SELECT * FROM food WHERE cat_id=3";
            $result2  = $conn->query($sql2);
            $arr_all = $result2->fetch_all(MYSQLI_ASSOC);
              for ($i=1; $i <= count($arr_all); ) { ?>
                	<?php for ($j=1; $j <= 3; $j++) { ?>
                    <?php if ($i+$j-2 == count($arr_all)) {
                      break;
                    }  ?>

              <span class="menucontent">
                <form action="cart_action.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" method="post">
                <div class="row menunamerow">
                    <div class="col-7" id="menufetch">
                      <span class="menuname"> <?php echo $arr_all[$i+$j-2]['fname']; ?> </span><br />
                      <span class="menuprice"> <?php echo $arr_all[$i+$j-2]['price']; ?> </span>
                    </div>
                      <div class="col-3">
                        <input name="quantity" type="number" class="form-control menuqtyno" value="1" min="0" max="100" required/>
                      </div>
                      <div class="col-2">
                        <button type="submit" class="btn btn-outline-success menuaddsi">ADD</button>
                      </div>
                </div>
                </form>
              </span>

                  <?php } ?>
                <?php $i = $i + 3; ?>
              <?php } ?>

          </div>

        </div>
      </div>

      <div class="col cartcol" id="mcart">
        <div class="menucart">
          <div class="menucarthead" style="margin-left:1rem;">
            <h1><b>Cart</b></h1>
          </div>

          <?php
          $sql3 =  "SELECT * FROM cart";
          $result3 = $conn->query($sql3);
          if ($result3->num_rows > 0)
          {
            $sum=0;
    				// output data of each row

    				while($row3 = $result3->fetch_assoc()) {

              $sum+=$row3["total_price"];

              ?>

          <div class="row menucartrow">
    				<div class="col-10">
    					 <span class="menuname"> <?php echo $row3["food_name"]; ?> </span><br />
    					 <span class="menuprice" style="color:#ffffff50;"> <?php echo $row3["food_price"]; ?> </span>
               <span class="menucartqty" style="color:#ffffff90;"> &nbspx <?php echo $row3["food_qty"]; ?> </span>
    				</div>
            <div class="col-2" class="trash">
              <a href="trash_action.php?id=<?php echo $row3["food_id"]; ?>"><i class="fas fa-trash-alt"></i></a>
            </div>

          </div>

        <?php	} ?>
          <div class="row menucartfoot">
            <div class="col-5" style="margin-top:auto; margin-bottom:auto;">
              <span>
                <h5><b>Rs. <?php echo $sum; ?></b></h5></span></div>
                  <div class="col-7 menucartcheckout">
                    <form action="cart.php#userdetails">
                      <button type="submit" class="btn btn-dark menucheckout">CHECKOUT&nbsp<i class="fas fa-long-arrow-alt-right"></i></button>
                    </form>
                  </div>
    			<?php }

          else { ?>

              <h3 style="padding:3rem; padding-top:0; text-align:center;">Your cart is empty!</h3>

          <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
