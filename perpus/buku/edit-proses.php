<?php 
if (isset($_POST['edit'])){
	$isbn = $_POST['isbn'];
	$judul = $_POST['judul_buku'];
	$penerbit = $_POST['penerbit'];
	$penulis = $_POST['penulis'];
	$kategori = $_POST['id_kategori'];
	$deskripsi = $_POST['deskripsi_buku'];

	$query = mysqli_query($koneksi, "UPDATE buku SET judul_buku='$judul',penerbit='$penerbit',penulis='$penulis',id_kategori='$kategori',deskripsi_buku='$deskripsi' WHERE isbn='$isbn'");

	if ($query){
		$pesan = "<div class='alert alert-success'>Data buku berhasil diubah</div>";
		$pesan = urlencode($pesan);

		header("Location: index.php?menu=lihat-buku&pesan={$pesan}");
	}else{
		echo "Gagal";
	}

}

 ?>