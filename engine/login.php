<?php
   session_start();

   include_once("../config/db_config.php");

   $user = $_POST['username'];
   $pass = $_POST['password'];
   $user_level; switch ($_POST['user-level']) {
      case 0: $user_level = "siswa"; break;
      case 1: $user_level = "guru"; break;
      case 2: $user_level = "administrator"; break;
      default: $user_level = null;
   }
   $query = mysqli_query($koneksi, "SELECT * FROM $user_level WHERE id='$user' AND token='$pass';");

   if (!$user || !$pass || !$user_level) {
      return header("Location: ../login.php?failure=NO_DATA_COMPLETE");
   }
   if (mysqli_num_rows($query) == 0) {
      return header("Location: ../login.php?failure=NO_DATA_MATCH");
   }
   $row = mysqli_fetch_assoc($query);

   $_SESSION['id'] = $user;
   $_SESSION['user_level'] = $user_level;
   $_SESSION['nama'] = $row['nama'];

   $_SESSION['active'] = true;
   // header("Location: ../test_login.php");
   header("Location: ../index.php");