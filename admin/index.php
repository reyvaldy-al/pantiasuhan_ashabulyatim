<?php
session_start();
include '../koneksi.php';
$ambil = $koneksi->query("SELECT * FROM donatur");

if (!isset($_SESSION['admin'])) {
	echo "<script>alert('HARAP LOGIN TERLEBIH DAHULU');</script>";
	echo "<script>location='../login.php';</script>";
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/style_admin.css">
	<title>Admin Ashabul Yatim</title>
	<script type="text/javascript" src="../chartjs/Chart.js"></script>
</head>

<body>
	<header id="beranda">
		<nav class="isNavbar">
			<ul>
				<li><a href="../index.php">Website</a></li>
				<li><a href="index.php">List Donatur</a></li>
				<li><a href="tambah.php">Tambah Donatur</a></li>
				<li><a href="../logout.php">Logout</a></li>
			</ul>
		</nav>
		<div class="isJumbotron">
			<img src="./assets/image/0.jpg" alt="" class="isJumbotron-cover">
			<h1>Panti Asuhan - Ashabul Yatim</h1>
			<p>Jl. Raya Buntu Banyumas KM.01, Sidamulya RT 03 RW 02, Desa Sidamulya,
				Kec. Kemranjen, Kabupaten Banyumas, Jawa Tengah Indonesia 53194</p>
		</div>
	</header>
	<main>
		<section class="card">
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Instansi</th>
						<th>Kontak</th>
						<th>Alamat</th>
						<th>Jumlah</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<?php foreach ($ambil as $rows) {
					@$No++;
					$id = $rows['No'];
					$nama = $rows['nama'];
					$instansi = $rows['instansi'];
					$kontak = $rows['kontak'];
					$alamat = $rows['alamat'];
					$jumlah = $rows['jumlah'];
				?>
					<tbody>
						<tr>
							<td><?php echo $No; ?></td>
							<td><?php echo $nama; ?></td>
							<td><?php echo $instansi; ?></td>
							<td><?php echo $kontak; ?></td>
							<td><?php echo $alamat; ?></td>
							<td>Rp. <?php echo $jumlah; ?></td>
							<td>
								<a href="edit.php?No=<?php echo $id ?>">Edit</a> |
								<a href="hapus.php?No=<?php echo $id ?>" onclick="return confirm('Yakin Dihapus?');">Hapus</a>
							</td>
						</tr>
					</tbody>
				<?php
				}
				?>
			</table>
		</section>

		<div style="width: 800px;margin: 0px auto;">
			<canvas id="myChart"></canvas>
		</div>

		<script>
			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ["Pemerintahan", "Telkom", "Pribadi"],
					datasets: [{
						label: 'Grafik Instansi yang Donasi',
						data: [
							<?php
							$jumlah_pemerintahan = mysqli_query($koneksi, "select * from donatur where instansi='Pemerintahan'");
							echo mysqli_num_rows($jumlah_pemerintahan);
							?>,
							<?php
							$jumlah_telkom = mysqli_query($koneksi, "select * from donatur where instansi='Telkom'");
							echo mysqli_num_rows($jumlah_telkom);
							?>,
							<?php
							$jumlah_pribadi = mysqli_query($koneksi, "select * from donatur where instansi='Pribadi'");
							echo mysqli_num_rows($jumlah_pribadi);
							?>
						],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)'
						],
						borderColor: [
							'rgba(255,99,132,1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							}
						}]
					}
				}
			});
		</script>
		<?php
		?>
	</main>

	<footer>
		<p>Panti Asuhan Ashabul Yatim &#169; Admin Ashabul Yatim</p>
	</footer>
</body>

</html>