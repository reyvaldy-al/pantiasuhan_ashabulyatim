<?php

$koneksi = mysqli_connect("localhost", "root", "", "pantiasuhan");

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

function hapus($id)
{

	global $koneksi;
	mysqli_query($koneksi, "DELETE from barang where id = $id");


	return mysqli_affected_rows($koneksi);
}

// function input($data){
// 	global $koneksi;

// 	$kode = htmlspecialchars($data["kode"]);  
// 	$nama = htmlspecialchars($data["nama"]);
// 	$jenis = htmlspecialchars($data["jenis"]);
// 	$stok = htmlspecialchars($data["stok"]);
// 	$ket = htmlspecialchars($data["ket"]);

// 	$query = "INSERT INTO barang values ('','$kode','$nama','$jenis', '$stok', '$ket')";

// 	mysqli_query($koneksi, $query);

// 	return mysqli_affected_rows($koneksi);

// }

function register($data)
{
	global $koneksi;

	$nama = htmlspecialchars($data['nama']);
	$user = htmlspecialchars($data['user']);
	$password = htmlspecialchars($data['password']);
	$level = htmlspecialchars($data['level']);

	$query = "INSERT INTO donatur values ('','$nama','$user','$password','$level')";

	mysqli_query($koneksi, $query);

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

	WHERE No = $id";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}
