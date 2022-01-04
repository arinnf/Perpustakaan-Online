<?php

include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT MAX(no_transaksi) AS kode_transaksi FROM peminjaman");
$data = mysqli_fetch_array($query);
$kodeTransaksi = $data['kode_transaksi'];

$urutan = (int) substr($kodeTransaksi, 3, 3);
$urutan++;
$huruf = 'PB-2021';
$kodeTransaksi = $huruf . "-" . sprintf("%04s", $urutan);

?>