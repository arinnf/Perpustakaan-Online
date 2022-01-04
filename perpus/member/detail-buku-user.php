<?php
    if(isset($_GET['isbn'])){
        $isbn    =$_GET['isbn'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "./koneksi.php";
    $query    =mysqli_query($koneksi, "SELECT * FROM buku WHERE isbn='$isbn'");
    $result    =mysqli_fetch_array($query);
?>
<html>
<head>
    <title>Detail Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
    <h2>Detail Data Buku</h2>
    <p><i>Note: Dibawah ini adalah detail informasi buku</i> <b><?php echo $isbn?></b></p>
    <div class="bg-light p-4">
    <table>
        <tr>
            <td><strong>ISBN</strong></td>
            <td>:</td>
            <td><?php echo $result['isbn']?></td>
        </tr>
        <tr>
            <td><strong>Judul Buku</strong></td>
            <td>:</td>
            <td><?php echo $result['judul_buku']?></td>
        </tr>
        <tr>
            <td><strong>Penerbit</strong></td>
            <td>:</td>
            <td><?php echo $result['penerbit']?></td>
        </tr>
        <tr>
            <td><strong>Kategori</strong></td>
            <td>:</td>
            <td><?php echo $result['id_kategori']?></td>
        </tr>
        <tr>
            <td><strong>Deskripsi</strong></td>
            <td>:</td>
            <td><?php echo $result['deskripsi_buku']?></td>
        </tr>
    </table>
    </div>
    <div class="mt-3">
        <a href="index.php?menu=tampil-data-buku-user" class="btn btn-primary">Kembali</a></td>
    </div>
</body>
</html>