<?php
   $router; switch($_SESSION['user_level']) {
      case "guru": $router = "route_teacher"; break;
      case "administrator": $router = "route_admin"; break;
   }