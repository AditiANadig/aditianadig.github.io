<?php
  include "../connect.php";

  $food_id = $_REQUEST['id'];

  $sql3 = "DELETE FROM food WHERE id='".$food_id."'";
  $result3 = $conn->query($sql3);

  header("location:./food.php");

?>
