<?php

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM kategori_buku WHERE id='$id'");

if($query) {
    $pesan = "<div class='alert alert-success'>Kategori berhasil dihapus</div>";
    $pesan = urlencode($pesan);
    header("Location: index.php?menu=lihat-buku&pesan={$pesan}");
} else {
    echo "Gagal";
}
?>