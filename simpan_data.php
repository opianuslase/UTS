<?php
$nama_negara = $_POST['nama_negara'];
$jumlah_pertandingan = $_POST['jumlah_pertandingan'];
$jumlah_menang = $_POST['jumlah_menang'];
$jumlah_seri = $_POST['jumlah_seri'];
$jumlah_kalah = $_POST['jumlah_kalah'];
$jumlah_poin = $_POST['jumlah_poin'];
$nama_operator = $_POST['nama_operator'];
$nim_mahasiswa = $_POST['nim_mahasiswa'];

$data = "<tr><td>$nama_negara</td><td>$jumlah_pertandingan</td><td>$jumlah_menang</td><td>$jumlah_seri</td><td>$jumlah_kalah</td><td>$jumlah_poin</td><td>$nama_operator</td><td>$nim_mahasiswa</td></tr>";

$file = fopen("db.html", "a");
fwrite($file, $data);
fclose($file);

echo "Data berhasil disimpan.";
?>