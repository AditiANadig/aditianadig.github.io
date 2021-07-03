<?php

  include "../connect.php";

  $login_email = mysqli_real_escape_string($conn, $_POST["ademail"]);
  $login_pwd = mysqli_real_escape_string($conn, $_POST["adpass"]);

  echo $login_email;
  echo $login_pwd;

  $sql1 =  "SELECT * FROM admin WHERE email='".$login_email."' AND password='".$login_pwd."'";
  $result1 = $conn->query($sql1);
  $row1 = $result1->fetch_assoc();
  if($row1) {
    $_SESSION["loggedin_user"] = $row1["email"];
    $_SESSION['isUserValid'] = true;
    $_SESSION['LAST_ACTIVITY'] = time();
    header("location:dashboard.php");
  }
  else {
    session_destroy();
    die(header("location:./index.php?loginFailed=true"));
  }

 ?>
