<?php
  include "../connect.php";

  $fname = mysqli_real_escape_string($conn, $_POST["foodname"]);
  $cid = mysqli_real_escape_string($conn, $_POST["catname"]);
  $fprice = mysqli_real_escape_string($conn, $_POST["price"]);

  echo $fname;
  echo $cid;
  echo $fprice;


  $sql3 = "INSERT INTO food (cat_id, fname, price) VALUES ('$cid', '$fname', '$fprice')";
  $result3 = $conn->query($sql3);
  header("location:./food.php");

?>
