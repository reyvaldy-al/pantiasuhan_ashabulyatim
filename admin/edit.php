<?php
session_start();
//calling function.php
include '../koneksi.php';
include 'function.php';

$id = $_GET["No"];
$ambil = $koneksi->query("SELECT * FROM donatur WHERE No = '$id'");
$pecah = $ambil->fetch_assoc();

if (isset($_POST["edit"])) {

    if (ubah($_POST) > 0) {
        echo "

        <script>
            alert('Data Berhasil di Edit');
            document.location.href = 'index.php';
        </script>

        ";
    }
    else {
        echo "
        <script>
            alert('Data Gagal di Edit');
            document.location.href = 'index.php';
        </script>

        ";
    }
}

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
    <title>Edit Page</title>
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
            <form action="" method="post">
                <div class="body">
                    <table align="center">
                        <tr>
                            <th colspan="2">
                                <h3>Silahkan ubah data</h3>
                            </th>
                        </tr>
                        <input type="hidden" name="No" value="<?php echo $pecah['No']; ?>">
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama" required="" value="<?php echo $pecah['nama']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Instansi</td>
                            <td><input type="text" name="instansi" required="" value="<?php echo $pecah['instansi']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Kontak</td>
                            <td><input type="text" name="kontak" required="" value="<?php echo $pecah['kontak']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Alamat : </td>
                            <td><input type="text" name="alamat" required="" value="<?php echo $pecah['alamat']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Jumlah : </td>
                            <td><input type="text" name="jumlah" required="" value="<?php echo $pecah['jumlah']; ?>"></td>
                        </tr>
                    </table>
                    <center><button type="submit" name="edit" class="button">Edit Data</button></center>
                </div>
            </form>
        </section>
    </main>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <footer>
        <p>Panti Asuhan Ashabul Yatim &#169; Admin Ashabul Yatim</p>
    </footer>
    <?php
    if (isset($_POST['edit'])) {
        $koneksi->query("UPDATE donatur SET nama='$_POST[nama]', instansi='$_POST[instansi]', alamat='$_POST[alamat]',jumlah='$_POST[jumlah]' WHERE id='$_GET[id]'");

        echo "Data Berhasil";
        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    }
    ?>

</body>

</html>