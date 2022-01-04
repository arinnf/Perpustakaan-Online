<?php
    if(isset($_POST['tambah'])) {
        $nama = $_POST['nama_kategori'];
        $query = mysqli_query($koneksi, "INSERT INTO kategori_buku VALUES(null,'$nama')");
        if($query) {
            $pesan = "<div class='alert alert-success'>Kategori berhasil ditambah</div>";
            $pesan = urlencode($pesan);
            header("Location: index.php?menu=lihat-buku&pesan={$pesan}");
        } else {
            echo "Gagal";
        }
    }
?>