<?php
   function dashboard_navbar ($page_name) {
      echo "dashboard.php?user_level=".$_SESSION['user_level']."&page=".$page_name;
   }
   
   function readdir_dashboard () {
      header("Location: dashboard.php?user_level=".$_SESSION['user_level']."&page=home");
   }

   function active_navbar ($page_name) {
      if (!isset($_GET['page']) && $page_name == "home") echo "active";
      elseif ($_GET['page'] == $page_name) echo "active";
      else echo "";
   }