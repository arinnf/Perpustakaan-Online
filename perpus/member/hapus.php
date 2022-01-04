<?php
$no_user = $_GET['no_user'];

$data = mysqli_query($koneksi, "DELETE FROM user WHERE no_user = '$no_user'");

if ($data) {
	$pesan = "Data user berhasil dihapus";
	$pesan = urlencode($pesan);
	header("Location:index.php?menu=lihat-member&pesan={$pesan}");
}else{
	echo "Gagal";
}
?>