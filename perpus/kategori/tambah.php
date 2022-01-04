<?php 
include "koneksi.php";
?>

<div class="row">
    <h2>Tambah Kategori Buku</h2>
    <p class="text-secondary">Silahkan untuk memasukkan Kategori buku dengan benar!</p>
    <form action="index.php?menu=tambah-kategori-buku-proses" method="POST" class="py-4 bg-light">
        <div class="mb-3">
            <label for="nama_kategori" class="form-label">Nama Kategori</label>
            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="submit" value="Tambah" name="tambah" class="btn btn-primary">
        </div>
    </form>
</div>