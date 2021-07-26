 <?php

    //membuat konkesi dengan database
    $koneksi = mysqli_connect("localhost", "root", "", "pantiasuhan");

    //ambil data
    function query($query)
    {

        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    //simpan data
    function simpan($data)
    {
        global $koneksi;

        $nama = htmlspecialchars($data["nama"]);
        $instansi = htmlspecialchars($data["instansi"]);
        $kontak = htmlspecialchars($data["kontak"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $jumlah = htmlspecialchars($data["jumlah"]);

        $query = "INSERT INTO donatur values ('','$nama','$instansi','$kontak', '$alamat', '$jumlah')";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    //hapus data
    function hapus($id)
    {

        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM donatur where No = $id");


        return mysqli_affected_rows($koneksi);
    }
function ubah($data)
{
    global $koneksi;
    $id = $data["No"];
    $nama = htmlspecialchars($data["nama"]);
    $instansi = htmlspecialchars($data["instansi"]);
    $kontak = htmlspecialchars($data["kontak"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $query = "UPDATE donatur SET 
    nama = '$nama',
    instansi = '$instansi',
    kontak = '$kontak',
    alamat = '$alamat',
    jumlah = '$jumlah'

    WHERE No = $id ";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}