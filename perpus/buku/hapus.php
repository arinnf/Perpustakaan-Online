<?php 
$isbn = $_GET['isbn'];

$query = mysqli_query($koneksi, "DELETE FROM buku WHERE isbn='$isbn'");

if ($query) {
	$pesan = "<div class='alert alert-success'>Data buku berhasil dihapus</div>";

	$pesan = urlencode($pesan);
	header("Location: index.php?menu=lihat-buku&pesan={$pesan}");
}else{
	echo "Gagal";
}
?>