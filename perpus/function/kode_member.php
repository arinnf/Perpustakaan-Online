<?php 
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT MAX(no_user) AS kode_user FROM user");
$data = mysqli_fetch_array($query);
$kodeUser = $data['kode_user'];

$urutan = (int) substr($kodeUser, 3, 3);
$urutan++;

$huruf = 'P';

$kodeUser = $huruf . sprintf("%04s",$urutan); 

?>