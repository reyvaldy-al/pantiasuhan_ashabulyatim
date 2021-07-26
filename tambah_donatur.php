<?php 
    include 'koneksi.php';
    
    if (isset($_POST['tambah'])) {
        $koneksi->query("INSERT INTO login_donatur VALUES ('','$_POST[nama]','$_POST[password]','$_POST[instansi]','$_POST[kontak]','$_POST[alamat]','$_POST[jumlah]') ");

        echo "Data Berhasil";
        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    }
