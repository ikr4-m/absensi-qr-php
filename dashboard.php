<?php session_start(); ?>
<?php
   include_once("router.php");
   include_once("engine/dashboard_navbar.php");

   if (isset($_SESSION['active']) == false || !isset($_SESSION['active'])) {
      header("Location: logout.php");
   }
   if ($_SESSION['user_level'] != $_GET['user_level']) {
      readdir_dashboard();
   }
   if (!isset($_GET['page'])) {
      readdir_dashboard();
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Dashboard <?php echo ucfirst($_SESSION['user_level']) ?> | Absensi Berbasis Scanner</title>

   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background-color: #a1a1a1">
   <div class="nav-bar">
      <?php include_once("$router/navbar.php"); ?>
   </div>
   <div class="container">
      <?php include_once("$router/".$_GET['page'].".php"); ?>
   </div>
</body>
</html>