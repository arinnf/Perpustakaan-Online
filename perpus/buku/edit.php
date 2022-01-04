<?php
    if(isset($_SESSION['level']) == "") {
    header("Location:login.php");
    } 
    ?>

<div class="row">
    <h2>Edit Data Buku</h2>
    <p class="text-secondary">Silahkan untuk mengubah data buku dengan benar!</p>
    <?php 
    $isbn = $_GET['isbn'];
    $query = mysqli_query($koneksi, "SELECT * FROM buku where isbn='$isbn'");
    $data = mysqli_fetch_array($query);
    ?>

    <form action="index.php?menu=edit-buku-proses" method="POST" class="py-4 bg-light">
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" name="isbn" id="isbn" class="form-control" value="<?= $isbn ?>" required readonly>
        </div>
        <div class="mb-3">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <input type="text" name="judul_buku" id="judul_buku" class="form-control" value="<?= $data['judul_buku'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?= $data['penerbit'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" name="penulis" id="penulis" class="form-control" value="<?= $data['penulis'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="id_kategori" class="form-label">Kategori</label>
            <select name="id_kategori" id="id_kategori" class="form-select" required>
                <?php 
                $query = mysqli_query($koneksi, "SELECT * FROM kategori_buku");
                foreach($query as $kategori){
                ?>
                    <option value="<?= $kategori['id']; ?>" <?php if ($data['id_kategori'] == "") {
                        echo " ";
                    } else {
                        echo "selected"; 
                    } ?>><?= $kategori['nama_kategori']; ?></option>
                <?php 
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="deskripsi_buku" class="form-label">Deskripsi Buku</label>
            <textarea name="deskripsi_buku" id="deskripsi_buku" class="form-control"><?= $data['deskripsi_buku'] ?></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" value="Edit" name="edit" class="btn btn-primary">
        </div>
    </form>
</div>