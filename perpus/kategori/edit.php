<?php
    if(isset($_SESSION['level']) == "") {
    header("Location:login.php");
    } 
    ?>

<?php
    if(isset($_GET['pesan_error'])){
        $pesan_error = $_GET['pesan_error'];
    } else if (isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
    }
    ?>
<?php 
if (isset($_GET['pesan'])) {
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

    <?php
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM kategori_buku WHERE id='$id'");
    $data = mysqli_fetch_array($query);
    ?>
    
    <h2>Edit Kategori Buku</h2>
    <p class="text-secondary">Silahkan untuk memasukkan kategori buku dengan benar!</p>
    <form action="index.php?menu=edit-kategori-proses" method="POST" class="py-4 bg-light">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="mb-3">
            <label for="nama_kategori" class="form-label">Nama Kategori</label>
            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="<?= $data['nama_kategori']; ?>" required>
        </div>
        <div class="mb-3">
            <input type="submit" value="Edit" name="edit" class="btn btn-primary">
        </div>
    </form>
</div>