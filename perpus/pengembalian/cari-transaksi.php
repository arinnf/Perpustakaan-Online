<?php
if (isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
}
?>
<div class="row">
	<?php 
	if (isset($pesan)) {
		echo "<div class='alert alert-success'>$pesan</div>";
	}
	?>
</div>

<div class="row">
	<h3>Form Pengembalian</h3>
	<p>Silahkan cari transaksi berdasarkan nomor transaksi</p>
	<form action="index.php?menu=cari-transaksi" method="POST">
		<div class="mb-3">
			<label for="no_transaksi" class="form-label">No Transaksi</label>
			<input class="form-control" list="listTransaksi" name="no_transaksi" id="no_transaksi"
			placeholder="Cari Berdasarkan No Transaksi" autocomplete="off">
			<datalist id="listTransaksi">
				<?php
				$query = mysqli_query($koneksi, "SELECT * FROM peminjaman");
				foreach ($query as $data) {
				
				?>
					<option value="<?= $data['no_transaksi']; ?>"><?= $data['no_member']; ?></option>
				<?php
				}
				?>
			</datalist>
		</div>
		<div class="mb-3">
			<input type="submit" value="Cari" name="cari" class="btn btn-primary">
		</div>
	</form>
	<?php
	if (isset($_POST['cari'])) {
		$no_transaksi = $_POST['no_transaksi'];
		$tgl_kembali = date("Y-m-d");
		$query =  mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE no_transaksi = '$no_transaksi'");
		$data = mysqli_fetch_array($query);

		$cariHari = abs(strtotime($data['tgl_kembali']) - strtotime($tgl_kembali));
		$hitungHari = floor($cariHari/(60*60*24));

		if ($hitungHari > 7) {
			$telat = $hitungHari - 7;
			$denda = 1000*$telat;
		}else{
			$telat = 0;
			$denda = 0;
		}
	}
	?>
	<?php
	if (isset($_POST['cari'])) {
		if ($no_transaksi) {
	?>
		<form action="index.php?menu=pengembalian-proses" class="row g-3 mt-4 bg-light" method="POST">
			<?php
			if ($telat > 0) {
				echo "<div class'alert alert-danger'>Anda Telat Mengembalikan Buku
				$telat Hari</div>";
			}
			?>
			<div class="col-md-6">
				<div class="mb-3">
					<label for="no_transaksi" class="form-label">No Transaksi</label>
					<input type="text" name="no_transaksi" id="no_transaksi"
					class="form-control" value="<?= $no_transaksi ?>" readonly>
				</div>
			</div>
			<div class="col-md-6">
				<div class="mb-3">
					<label for="no_member" class="form-label">No Member</label>
					<input type="text" name="no_member" id="no_member"
					class="form-control" value="<?= $data['no_member'] ?>" readonly>
				</div>
			</div>
			<div class="col-md-6">
				<div class="mb-3">
					<label for="tgl_peminjaman" class="form-label">Tanggal Pinjam</label>
					<input type="text" name="tgl_peminjaman" id="tgl_peminjaman"
					class="form-control" value="<?= $data['tgl_peminjaman'] ?>" readonly>
				</div>
			</div>
			<div class="col-md-6">
				<div class="mb-3">
					<label for="denda" class="form-label">Denda</label>
					<input type="text" name="denda" id="denda"class="form-control" 
					value="<?= $denda ?>" readonly>
				</div>
			</div>
			<div class="col-md-6">
				<div class="mb-3">
					<label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
					<input type="text" name="tgl_kembali" id="tgl_kembali"
					class="form-control" value="<?= $tgl_kembali ?>" readonly>
				</div>
			</div>
			<div class="col-md-6">
				<div class="mb-3">
					<label for="isbn" class="form-label">ISBN</label>
					<input type="text" name="isbn" id="isbn" class="form-control" 
					value="<?= $data['isbn'] ?>" readonly>
				</div>
			</div>
			<div class="col-md-6">
				<input type="submit" value="Kembalikan" name="kembali" class="btn btn-primary">
			</div>
		</form>
    <?php
		}else{
			echo "<div class='alert alert-success'>Data Tidak Tersedia</div>";
		}
	}
	?>
</div>			