

<div class="row">
	<?php 
	if (isset($pesan)) {
		echo "<div class='alert alert-success'>$pesan</div>";
	}
	?>
</div>

<?php
    if(isset($_SESSION['level']) == "") {
    header("Location:login.php");
    } 
    ?>


<div class="row">
    <h2>Tambah Data Buku</h2>
    <p class="text-secondary">Silahkan untuk memasukkan data buku dengan benar!</p>

    <form action="index.php?menu=tambah-buku-proses" method="POST" class="py-4 bg-light">
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" name="isbn" id="isbn" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <input type="text" name="judul_buku" id="judul_buku" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" name="penulis" id="penulis" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_kategori" class="form-label">Kategori</label>
            <select name="id_kategori" id="id_kategori" class="form-select" required>
                <?php 
                $query = mysqli_query($koneksi, "SELECT * FROM kategori_buku");
                foreach($query as $kategori){
                ?>
                <option value="<?= $kategori['id']; ?>"><?= $kategori['nama_kategori']; ?></option>
            <?php 
                }
            ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="deskripsi_buku" class="form-label">Deskripsi Buku</label>
            <textarea name="deskripsi_buku" id="deskripsi_buku" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" value="Tambah" name="tambah" class="btn btn-primary">
        </div>
    </form>
</div>