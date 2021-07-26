<?php
session_start();
include '../koneksi.php';

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
    <title>Tambah Donatur</title>
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
            <form action="" method="POST">
                <div class="body">
                    <table align="center">
                        <tr>
                            <th colspan="2">
                                <h3>Tambah Data Donatur</h3>
                            </th>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama" required=""></td>
                        </tr>
                        <tr>
                            <td>Instansi</td>
                            <td><input type="text" name="instansi" required=""></td>
                        </tr>
                        <tr>
                            <td>Kontak</td>
                            <td><input type="text" name="kontak" required=""></td>
                        </tr>
                        <tr>
                            <td>Alamat : </td>
                            <td><input type="text" name="alamat" required=""></td>
                        </tr>
                        <tr>
                            <td>Jumlah : </td>
                            <td><input type="text" name="jumlah" required=""></td>
                        </tr>
                    </table>
                    <center><button type="submit" name="tambah" class="button">Tambah Data</button></center>
                </div>
            </form>
        </section>
    </main>
    <?php
    if (isset($_POST['tambah'])) {
        $koneksi->query("INSERT INTO donatur VALUES ('','$_POST[nama]','$_POST[password]','$_POST[instansi]','$_POST[kontak]','$_POST[alamat]','$_POST[jumlah]') ");
        echo "Data Berhasil";
        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    }
    ?>
    <footer>
        <p>Panti Asuhan Ashabul Yatim &#169; Admin Ashabul Yatim</p>
    </footer>
</body>

</html>