<?php
session_start();
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admin/assets/style_admin.css">
    <title>Tambah Donatur</title>
</head>

<body>
    <header id="beranda">
        <nav class="isNavbar">
            <ul>
                <li><a href="index.php">Website</a></li>
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
                                <h3>REGISTRASI DONATUR</h3>
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
                            <td>Password : </td>
                            <td><input type="text" name="password" required=""></td>
                        </tr>
                    </table>
                    <center><button type="submit" name="tambah" class="button">Tambah Data</button></center>
                </div>
            </form>
        </section>
    </main>
    <?php
    if (isset($_POST['tambah'])) {
        $koneksi->query("INSERT INTO login_donatur VALUES ('','$_POST[nama]','$_POST[password]'");
        echo "Data Berhasil";
        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    }
    ?>
    <footer>
        <p>Panti Asuhan Ashabul Yatim &#169; Admin Ashabul Yatim</p>
    </footer>
</body>

</html>