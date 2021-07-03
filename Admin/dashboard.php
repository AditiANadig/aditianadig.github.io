<?php
  include "../connect.php";

  $sql1 =  "SELECT COUNT(id) FROM food";
  $result1 = $conn->query($sql1);
  $row1 = $result1->fetch_assoc();
  $no_food=$row1["COUNT(id)"];

  $sql2 =  "SELECT COUNT(DISTINCT order_id) FROM orders ";
  $result2 = $conn->query($sql2);
  $row2 = $result2->fetch_assoc();
  $no_order=$row2["COUNT(DISTINCT order_id)"];

  $sql2 =  "SELECT COUNT(id) FROM users";
  $result2 = $conn->query($sql2);
  $row2 = $result2->fetch_assoc();
  $no_user=$row2["COUNT(id)"];

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

  <div class="row mainrow">
    <div class="col-md-2">
      <div class="sidebar">
        <a class="active" href="dashboard.php"><i class="fas fa-columns"></i> &nbspDashboard</a>
        <a href="food.php"><i class="fas fa-utensils"></i> &nbspFood</a>
        <a href="orders.php"><i class="fas fa-check-double"></i> &nbspOrders</a>
        <a href="users.php"><i class="fas fa-users"></i> &nbspUsers</a>
        <a href="../logout_action.php"><i class="fas fa-sign-out-alt"></i> &nbspMain Page</a>
      </div>
    </div>
    <div class="col-md-10">
      <div class="dashboard">
        <div class="dash dashhead w3-animate-opacity">DASHBOARD</div>
        <div class="dash dashfood w3-animate-opacity">Foods Available: <?php echo $no_food ?></div>
        <div class="dash dashorder w3-animate-opacity">Orders Made: <?php echo $no_order ?></div>
        <div class="dash dashuser w3-animate-opacity">Total Users: <?php echo $no_user ?></div>
      </div>
    </div>
  </div>

</body>
