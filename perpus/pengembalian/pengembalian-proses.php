<?php 
	if (isset($_POST['kembali'])) {
		$no_transaksi = $_POST['no_transaksi'];
		$no_member = $_POST['no_member'];
		$tgl_peminjaman = $_POST['tgl_peminjaman'];
		$tgl_kembali = $_POST['tgl_kembali'];
		$denda = $_POST['denda'];
		$isbn = $_POST['isbn'];

		$query = mysqli_query($koneksi, "INSERT INTO pengembalian VALUES ('$no_transaksi','$no_member','$tgl_peminjaman','$tgl_kembali','$denda','$isbn')");

		if ($query) {
			$pesan = "Pengembalian berhasil";
			$pesan = urlencode($pesan);
			header("Location: index.php?menu=cari-transaksi&pesan={$pesan}");
		}else{
			echo "Gagal";
		}
}
?>

