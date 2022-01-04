<?php 
if (isset($_POST['pinjam'])) {
	$no_transaksi = $_POST['no_transaksi'];
	$tanggal_peminjaman = $_POST['tgl_peminjaman'];
	$tanggal_kembali = $_POST['tgl_kembali'];
	$no_member = $_POST['no_member'];
	$isbn = $_POST['isbn'];

	$query = mysqli_query($koneksi, "INSERT INTO peminjaman VALUES('$no_transaksi','$tanggal_peminjaman','$tanggal_kembali','$no_member','$isbn')");

	if ($query) {
		$pesan = "Peminjaman Berhasil";
		$pesan = urlencode($pesan);
		header("Location:index.php?menu=tambah-peminjaman&pesan={$pesan}");
	}else{
		echo "Gagal";
	}
}
?>