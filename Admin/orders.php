<?php
  include "../connect.php";

  $sql1 =  "SELECT * FROM orders";
  $result1 = $conn->query($sql1);

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
        <a href="dashboard.php"><i class="fas fa-columns"></i> &nbspDashboard</a>
        <a href="food.php"><i class="fas fa-utensils"></i> &nbspFood</a>
        <a class="active" href="orders.php"><i class="fas fa-check-double"></i> &nbspOrders</a>
        <a href="users.php"><i class="fas fa-users"></i> &nbspUsers</a>
        <a href="../logout_action.php"><i class="fas fa-sign-out-alt"></i> &nbspMain Page</a>
      </div>
    </div>
    <div class="col-md-10">
      <div class="orderboard">
        <div class="row orderhead">
          <div class="order w3-animate-opacity col-6">ORDERS</div>
          <div class="col-6">
            <form action="orderorderid.php">
              <button class="orderidbtn btn btn-outline-light btn-lg" type="submit">Group by Order ID</button>
            </form>
          </div>
        </div>
          <table class="table table-dark table-hover w3-animate-opacity">
            <thead>
              <tr>
                <th scope="col">Order Id</th>
                <th scope="col">Cust. Name</th>
                <th scope="col">Food </th>
                <th scope="col">Food Qty.</th>
              </tr>
            </thead>
            <tbody>
              <?php if($result1->num_rows>0) {
                while($row1=$result1->fetch_assoc()) {
              ?>
              <tr>
                <th scope="row"><?php echo $row1["order_id"]?></th>
                <td><?php echo $row1["user_name"]?></td>
                <?php
                $sql2 = "SELECT * FROM food WHERE id='".$row1["food_id"]."'";
                $result2 = $conn->query($sql2);
                $row2 = $result2->fetch_assoc();
                if($result2->num_rows>0) {
                ?>
                <td><?php echo $row2["fname"]?></td>
                <?php }
                  else {
                ?><td><i>Food menu deleted</i></td>
              <?php } ?>
                <td><?php echo $row1["food_qty"]?></td>
              </tr>
            <?php } } ?>
            </tbody>
          </table>
      </div>
    </div>
  </div>




</body>
