<?php
include "koneksi.php";
if(isset($_POST['tambah'])) {
    $no_user = $_POST['no_user'];
    $nama = $_POST['nama'];
    $jk_user = $_POST['jk_user'];
    $alamat_user = $_POST['alamat_user'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $query = mysqli_query($koneksi, "INSERT INTO user VALUES('$no_user','$nama','$jk_user','$alamat_user','$tgl_lahir','$username','$password','$level')");

    if ($query) {
        $pesan = "User dengan nama  \"<b>$nama</b>\" berhasil ditambahkan";
        $pesan = urlencode($pesan);
        header("Location:index.php?menu=lihat-member&pesan={$pesan}");
        } else {
            echo "Gagal";
    }
}
?>