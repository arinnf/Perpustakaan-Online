<?php 
if (isset($_POST['edit'])) {
    $no_user = $_POST['no_user'];
    $nama = $_POST['nama'];
    $jk_user = $_POST['jk_user'];
    $alamat_user = $_POST['alamat_user'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $level = $_POST['level'];

    $query = mysqli_query($koneksi, "UPDATE user SET no_user='$no_user', nama='$nama', jk_user='$jk_user', alamat_user='$alamat_user', tgl_lahir='$tgl_lahir', level='$level' WHERE no_user='$no_user'");

    if ($query) {
        $pesan = "User dengan nama  \"<b>$nama</b>\" berhasil diubah";
        $pesan = urlencode($pesan);
        header("Location:index.php?menu=lihat-member&pesan={$pesan}");
        } else {
            echo "Gagal";
    }
}
?>