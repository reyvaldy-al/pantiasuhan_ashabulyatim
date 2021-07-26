<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['login_donatur'])) {
    echo "<script>alert('HARAP LOGIN TERLEBIH DAHULU');</script>";
    echo "<script>location='login_donatur.php';</script>";
    exit();
}
$id = $_SESSION["No"];
$ambil = $koneksi->query("SELECT * FROM donatur WHERE No = '$id'");
$pecah = $ambil->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/assets/style_admin.css">
    <title>Tambah Donatur</title>
</head>

<body>
    <header id="beranda">
        <nav class="isNavbar">
            <ul>
                <li><a href="index.php">Website</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="tambah.php">Tambah Donatur</a></li>
                <li><a href="logout_donatur.php">Logout</a></li>
            </ul>
        </nav>
        <div class="isJumbotron">
            <img src="" alt="" class="isJumbotron-cover">
            <h1>Panti Asuhan - Ashabul Yatim</h1>
            <p>Jl. Raya Buntu Banyumas KM.01, Sidamulya RT 03 RW 02, Desa Sidamulya,
                Kec. Kemranjen, Kabupaten Banyumas, Jawa Tengah Indonesia 53194</p>
        </div>
    </header>
    <main>
        <section class="card">
            <form action="" method="POST">
                <div class="body">
                    <table align="center">
                        <tr>
                            <th colspan="2">
                                <h3>Tambah Donasi</h3>
                            </th>
                        </tr>
                        <input type="hidden" name="No" value="<?php echo $pecah['No']; ?>">
                        <tr>
                            <td>Nama</td>
                            <td><?php echo $pecah['nama']; ?></td>
                        </tr>
                        <tr>
                            <td>Instansi</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Kontak</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Alamat : </td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </form>
        </section>
    </main>
    <?php
    if (isset($_POST['tambah'])) {
        $koneksi->query("INSERT INTO donatur VALUES ('','$_POST[nama]','$_POST[instansi]','$_POST[kontak]','$_POST[alamat]','$_POST[jumlah]') ");
        echo "Data Berhasil";
        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    }
    ?>
    <footer>
        <p>Panti Asuhan Ashabul Yatim &#169; Admin Ashabul Yatim</p>
    </footer>
</body>

</html>