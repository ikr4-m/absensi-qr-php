<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <!-- Judul -->
   <a class="navbar-brand" href="#">Absensi</a>
   <!-- Button untuk di hp -->
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- sebelah kiri -->
      <ul class="navbar-nav mr-auto">
         <li class="nav-item <?php active_navbar("home"); ?>">
            <a class="nav-link" href="<?php dashboard_navbar("home"); ?>">Beranda</a>
         </li>
         <li class="nav-item <?php active_navbar("live_absent"); ?>">
            <a class="nav-link" href="<?php dashboard_navbar("live_absent"); ?>">Mulai Absen</a>
         </li>
         <li class="nav-item <?php active_navbar("history_absent"); ?>">
            <a class="nav-link" href="<?php dashboard_navbar("history_absent"); ?>">Riwayat Absen</a>
         </li>
         <li class="nav-item <?php active_navbar("export_absent"); ?>">
            <a class="nav-link" href="<?php dashboard_navbar("export_absent"); ?>">Rekap Absen</a>
         </li>
      </ul>
      <!-- Sebelah kanan -->
      <form action="logout.php" method="POST" class="form-inline my-2 my-lg-0">
         <span class="nav-link disabled" href="#"><?php echo $_SESSION['nama']; ?></span>
         <input type="submit" class="btn btn-outline-danger my-2 my-sm-0" value="Log Out">
      </form>
   </div>
</nav>