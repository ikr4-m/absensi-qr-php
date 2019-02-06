<link rel="stylesheet" href="<?php echo $router; ?>/css/home.css">
<script>
   $(() => {
      $(".welcoming-message").animate({ opacity: 1 }, 500);
      var list_form = ["#welcome-nama", "#horizontal-rule", "#welcome-statistic"], i = 1500;
      list_form.forEach(x => { $(x).animate({ opacity: 1 }, i); i += 700; });
   });
</script>
<div class="welcoming-message">
   <p id="welcome-nama">Selamat datang, <?php echo $_SESSION['nama'] ?>!</p>
   <div id="horizontal-rule"></div>
   <p id="welcome-statistic">[random_statistic]</p>
</div>