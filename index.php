<?php
// session_start();
include 'koneksi.php';
// $ambil = $koneksi->query("SELECT * FROM donatur");

// if (!isset($_SESSION['donatur'])) {
//     echo "<script>alert('HARAP LOGIN TERLEBIH DAHULU');</script>";
//     echo "<script>location='login_donatur.php';</script>";
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>PANTI ASUHAN ASHABUL YATIM</title>
</head>

<body>
    <header id="beranda">
        <nav class="isNavbar">
            <ul>
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#tentang">Tentang Kami</a></li>
                <li><a href="#visimisi">Visi-Misi</a></li>
                <li><a href="#kegiatan">Kegiatan Kami</a></li>
                <li><a href="login_donatur.php">Login/Register</a></li>
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
        <div id="content">
            <article id="tentang" class="card">
                <div class="judul">Tentang Kami</div>
                <img src="./assets/image/1.jpg" alt="" class="featured-image">
                <p>Yayasan Ashabul Khoirul Ummah (AKU) merupakan Yayasan yang mempunyai izin kegiatan dibidang Sosial,
                    Kemanusiaan dan Keagamaan. Secara de facto kegiatan Yayasan ini sudah berjalan sejak tahun 2012
                    namun legalitas Yayasan baru di miliki di awal tahun 2017</p>
            </article>

            <article id="visimisi" class="card">
                <div class="visi">
                    <div class="judul">visi</div>
                    <p>Menjadi lembaga sosial yang mampu memberikan kesetaraan hidup dan pendidikan yang baik
                        bagi anak asuh.</p>
                </div>
                <div class="misi">
                    <div class="judul">misi</div>
                    <p>Menjadi orang tua asuh, mendidik dan menyantuni anak-anak yatim, piatu, yatim piatu
                        dan dhu'afa berdasarkan kaidah agama Islam.
                        Memberikan kesempatan bagi anak asuh untuk memperoleh pendidikan umum dan keterampilan untuk
                        bekal
                        hidup mandiri dimasyarakat.
                        Menggali, membangun dan mengembangkan potensi, bakat dan minat anak asuh dalam menghadapi
                        perkembangan zaman.</p>
                </div>
            </article>

            <article id="kegiatan" class="card">
                <div class="judul">Kegiatan Kami</div>
                <p>Kegiatan yang diikuti oleh anak-anak Ashabul Yatim</p>
                <section>
                    <div class="judul">lorem</div>
                    <img src="./assets/image/2.jpg" alt="" class="featured-image">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis eaque similique error deserunt
                        obcaecati! Earum repellat vel eaque, dolores a quae, quibusdam deleniti, esse alias magnam rerum
                        pariatur consectetur autem!</p>
                </section>
                <section>
                    <div class="judul">lorem</div>
                    <img src="./assets/image/3.jpg" alt="" class="featured-image">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum expedita natus obcaecati
                        accusamus, dolorem nihil omnis sunt, mollitia libero sed qui quibusdam iure ullam aliquam vero,
                        soluta quae. Atque, dolorum.</p>
                </section>
            </article>
            <!-- <article id="Kontak" class="card">
                <div class="donasi">
                    <div class="judul">Donasi</div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quam explicabo consequuntur,
                        doloribus voluptas culpa praesentium assumenda hic ad nobis ipsa. Sapiente, mollitia ad?
                        Repellat aperiam velit perspiciatis dolore similique?</p>
                </div>
                <div class="isKontak">
                    <form action="tambah_donatur.php" method="POST" class="isKontak">
                        <table>
                            <tr>
                                <td>Nama </td>
                                <td><input type="text" name="nama" required=""></td>
                            </tr>
                            <tr>
                                <td>Instansi </td>
                                <td><input type="text" name="instansi" required=""></td>
                            </tr>
                            <tr>
                                <td>Kontak </td>
                                <td><input type="text" name="kontak" required=""></td>
                            </tr>
                            <tr>
                                <td>Alamat </td> -->
            <!-- <td><input type="text" name="alamat" required=""></td> -->
            <!-- <td><textarea type="text" name="alamat" cols=25 rows=6></textarea></td>
                            </tr>
                            <tr>
                                <td>Jumlah </td>
                                <td><input type="text" name="jumlah" required=""></td>
                            </tr>
                        </table>
                        <center><button type="submit" name="tambah" class="button">Tambah Data</button></center>
                    </form>
                </div>
            </article> -->
        </div>

        <aside>
            <article class="profile card">
                <header>
                    <div class="judul">Kontak</div>
                    <figure>
                        <img src="">
                        <figcaption>Panti Asuhan Ashabul Yatim</figcaption>
                    </figure>
                </header>
            </article>
        </aside>
    </main>
    <footer>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </footer>
</body>

</html>