<?php
   session_start();
   include_once("engine/dashboard_navbar.php");

   if (isset($_SESSION['active']) == false || !isset($_SESSION['active'])) {
      header("Location: login.php");
   }
   else {
      switch ($_SESSION['user_level']) {
         case "siswa":
            header("Location: test_login.php");
            break;
         default:
            readdir_dashboard();
      }
   }