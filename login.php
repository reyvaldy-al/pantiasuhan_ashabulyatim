<?php
include 'koneksi.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		/* Popup container - can be anything you want */
		.popup {
			position: relative;
			display: inline-block;
			cursor: pointer;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			color: blue;
		}

		/* The actual popup */
		.popup .popuptext {
			visibility: hidden;
			width: 160px;
			background-color: #555;
			color: #fff;
			text-align: center;
			border-radius: 6px;
			padding: 8px 0;
			position: absolute;
			z-index: 1;
			bottom: 125%;
			left: 50%;
			margin-left: -80px;
		}

		/* Popup arrow */
		.popup .popuptext::after {
			content: "";
			position: absolute;
			top: 100%;
			left: 50%;
			margin-left: -5px;
			border-width: 5px;
			border-style: solid;
			border-color: #555 transparent transparent transparent;
		}

		/* Toggle this class - hide and show the popup */
		.popup .show {
			visibility: visible;
			-webkit-animation: fadeIn 1s;
			animation: fadeIn 1s;
		}

		/* Add animation (fade in the popup) */
		@-webkit-keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}
	</style>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./admin/assets/style_admin.css">
	<title>Login Admin Ashabul Yatim</title>
</head>

<body>
	<header id="beranda">
		<div class="isJumbotron">
			<img src="" alt="" class="isJumbotron-cover">
			<h1>Panti Asuhan - Ashabul Yatim</h1>
			<p>Jl. Raya Buntu Banyumas KM.01, Sidamulya RT 03 RW 02, Desa Sidamulya,
				Kec. Kemranjen, Kabupaten Banyumas, Jawa Tengah Indonesia 53194</p>
		</div>
	</header>
	<main>
		<section class="card">
			<form action="login.php" method="post">
				<center>
					<h2>Login Form</h2>
				</center>
				<table align="center">
					<tr>
						<td>Username</td>
						<td>:</td>
						<td><input type="text" name="username" placeholder="Username" required /></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="password" name="password" placeholder="Password" required /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><input type="submit" name="login" value="Login" /></td>
					</tr>
				</table>
			</form>

			<div class="popup" onclick="myFunction()">Lupa Password?
				<span class="popuptext" id="myPopup">Coba rileks dulu, ingat baik-baik, coba lagi</span>
			</div>
			<p>
				<a href="login_donatur.php">Login Sebagai Donatur?</a>

		</section>
	</main>
	<?php
	if (isset($_POST['login'])) {
		$ambil = $koneksi->query("SELECT * FROM admin WHERE user='$_POST[username]' AND password='$_POST[password]'");
		$yangcocok = $ambil->num_rows;
		if ($yangcocok == 1) {
			$_SESSION['admin'] = $ambil->fetch_assoc();
			echo "<div class = 'alert alert-info'>Login Sukses</div>";
			echo "<meta http-equiv = 'refresh' content='1;url=admin/index.php'>";
		} else {
			echo "<div class = 'alert alert-danger'>Login Gagal</div>";
			echo "<meta http-equiv = 'refresh' content='1;url=login.php'>";
		}
	}
	?>
	<footer>
		<p>Panti Asuhan Ashabul Yatim &#169; Admin Ashabul Yatim</p>
	</footer>

	<script>
		// When the user clicks on <div>, open the popup
		function myFunction() {
			var popup = document.getElementById("myPopup");
			popup.classList.toggle("show");
		}
	</script>
</body>

</html>