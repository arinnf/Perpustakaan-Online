<?php 
include "function/kode_transaksi.php";

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
	<h3>Form Peminjaman Buku</h3>
	<p class="text-secondary">Silahkan untuk mengisi data peminjaman buku dengan benar!</p>

	<?php 
	$tanggal_peminjaman = date("Y-m-d");
	$tanggal_pengembalian = date("Y-m-d", strtotime('+7 days',strtotime($tanggal_peminjaman)));
	?>
	<div class="col-12">
		<form action="index.php?menu=tambah-peminjaman-proses" method="POST" class="mt-4 bg-light p-4">
			<div class="mb-3">
				<label for="no_transaksi" class="form-label">No Transaksi</label>
				<input type="text" name="no_transaksi" id="no_transaksi"
				class="form-control" value="<?= $kodeTransaksi ?>" readonly required>
			</div>
			<div class="mb-3">
				<label for="tgl_peminjaman" class="form-label">Tanggal Peminjaman</label>
				<input type="text" name="tgl_peminjaman" id="tgl_peminjaman" class="form-control"
				value="<?= $tanggal_peminjaman ?>" required readonly>
			</div>
			<div class="mb-3">
				<label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
				<input type="text" name="tgl_kembali" id="tgl_kembali" class="form-control"
				value="<?= $tanggal_pengembalian ?>" readonly required>
			</div>
			<div class="mb-3">
				<label for="no_member" class="form-label">No Member</label>
				<input class="form-control" list="listMember" name="no_member" id="no_member" 
				placeholder="Cari Berdasarkan No Member" autocomplete="off" required>
				<datalist id="listMember">
					<?php 
					$query = mysqli_query($koneksi, "SELECT * FROM member");
					foreach ($query as $data) {
					?>
						<option value="<?= $data['no_member']; ?>"><?= $data['nama_member']; ?>></option>
					<?php
					}
					?>
				</datalist>
			</div>
			<div class="mb-3">
					<label for="isbn" class="form-label">Judul Buku</label>
					<input class="form-control" list="listBuku" name="isbn" id="isbn" placeholder="Cari Berdasarkan ISBN" autocomplete="off" required>
					<datalist id="listBuku">
						<?php 
						$query = mysqli_query($koneksi, "SELECT * FROM buku");
						foreach($query as $data) {
						?>
							<option value="<?= $data['isbn']; ?>"><?= $data['judul_buku']; ?></option>
						<?php	
						}
						?>
					</datalist>
			</div>
			<div class="mb-3">
				<input type="submit" value="Pinjam" name="pinjam" class="btn btn-primary">
			</div>

		</form>
	</div>
</div>