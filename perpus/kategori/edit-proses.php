<?php

if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama_kategori'];
    
    $query = mysqli_query($koneksi, "UPDATE kategori_buku SET nama_kategori='$nama' WHERE id='$id'");

    if($query) {
        $pesan = "<div class='alert alert-success'>Kategori berhasil diubah</div>";
        $pesan = urlencode($pesan);
        header("Location:index.php?menu=lihat-buku&pesan={$pesan}");
    } else {
        echo "Gagal";
    }
}
?>