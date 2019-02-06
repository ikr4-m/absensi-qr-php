<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Redirect</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   <?php
      if (!isset($_GET['token'])) {
         session_destroy();
         echo 
            "
            <h1 style='text-align:center;'>Bad paramater</h1>
            <hr>
            <p style='text-align:center;'>Absensi-QR (github/skymunn)</p>
            ";
      }
      else {
         $_SESSION['token'] = $_GET['token'];
         header("Location: login.php");
      }
   ?>
</body>

</html>