<?php 
	session_start(); 
	if (isset($_SESSION['active']) == false || !isset($_SESSION['active'])) {
      header("Location: constant/logout.php");
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- JS -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(() => {
			$("#verifSiswa").animate({ opacity: 1 }, 250);
			setTimeout(() => {
				var list_id = ["#verifSiswa p", "#logoutSubmit"], i = 500;
				list_id.forEach(x => { $(x).animate({ opacity: 1 }, i); i += 200; })
			}, 250);
		})
	</script>
	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css_component/test_login/test_login.css">
	<title>Absensi Berbasis Scanner</title>
</head>

<body style="background-color: #a1a1a1">
	<div class="container">
		<div id="verifSiswa">
			<p>Anda login dengan nama: <?php echo $_SESSION['nama']; ?></p>
			<p>NIK/NIS: <?php echo $_SESSION['id']; ?></p>
			<form action="logout.php" method="post">
				<input type="submit" value="Log Out" name="logoutSubmit" id="logoutSubmit" class="btn btn-dark">
			</form>
		</div>
	</div>
</body>

</html>