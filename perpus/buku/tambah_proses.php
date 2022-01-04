<?php 

include "koneksi.php";

if (isset($_POST['tambah'])) {
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul_buku'];
    $penerbit = $_POST['penerbit'];
    $penulis = $_POST['penulis'];
    $kategori = $_POST['id_kategori'];
    $deskripsi = $_POST['deskripsi_buku'];

    $query = mysqli_query($koneksi, "INSERT INTO buku VALUES('$isbn', '$judul', '$penerbit', '$penulis', '$kategori', '$deskripsi')");

    if ($query) {
        $pesan = "<div class='alert alert-success'>Data buku berhasil ditambah</div>";
        $pesan = urlencode($pesan);
        header("Location:index.php?menu=lihat-buku&pesan={$pesan}");
    } else {
        echo "Gagal";
    }
}
?>