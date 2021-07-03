<?php
  include "../connect.php";

  $sql1 =  "SELECT * FROM food ORDER BY cat_id";
  $result1 = $conn->query($sql1);


  $sql2 =  "SELECT * FROM categories";
  $result2 = $conn->query($sql2);
  $row2 = $result2->fetch_assoc();

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
        <a class="active" href="food.php"><i class="fas fa-utensils"></i> &nbspFood</a>
        <a href="orders.php"><i class="fas fa-check-double"></i> &nbspOrders</a>
        <a href="users.php"><i class="fas fa-users"></i> &nbspUsers</a>
        <a href="../logout_action.php"><i class="fas fa-sign-out-alt"></i> &nbspMain Page</a>
      </div>
    </div>
    <div class="col-md-10">
      <div class="foodboard">
        <div class="row foodhead">
          <div class="food w3-animate-opacity col-6">FOODS</div>
          <div class="col-6">
            <button class="addfoodbtn btn btn-outline-light btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Food</button>
          </div>
        </div>
        <table class="table table-dark table-hover w3-animate-opacity">
          <thead>
            <tr>
              <th scope="col">Food Name</th>
              <th scope="col">Category</th>
              <th scope="col">Price</th>
              <th scope="col"> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php if($result1->num_rows>0) {
              while($row1 = $result1->fetch_assoc()) { ?>
              <th scope="row"><?php echo $row1["fname"] ?></th>
              <?php
              $sql3 = "SELECT * FROM categories WHERE id='".$row1["cat_id"]."'";
              $result3 = $conn->query($sql3);
              $row3 = $result3->fetch_assoc();
              ?>
              <td><?php echo $row3["name"] ?></td>
              <td><?php echo $row1["price"] ?></td>
              <td><a href="deletefood_action.php?id=<?php echo $row1["id"]; ?>" class="trash"><i class="fas fa-trash-alt trash"></i></a></td>
            </tr>
          <?php } } ?>
          </tbody>
        </table>
        <form>

        </form>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Food</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="foodadd_action.php" method="post">
          <div class="modal-body">
            <label><b>Food Name: </b></label>
            <input class="w3-input" type="text" required name="foodname"><br />
            <label><b>Category: </b></label>
            <select class="w3-select" name="catname">
              <option value="0" disabled selected>Choose an option</option>
              <option value="1">South Indian</option>
              <option value="2">North Indian</option>
              <option value="3">Beverages</option>
            </select><br /><br />
            <label><b>Price: </b></label>
            <input class="w3-input" type="number" required name="price">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
