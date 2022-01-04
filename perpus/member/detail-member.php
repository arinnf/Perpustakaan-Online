<?php
if(isset($_GET['no_user'])){
    $no_user    =$_GET['no_user'];
}
else {
    die ("Error. No ID Selected!");    
}
    include "./koneksi.php";
    $query    =mysqli_query($koneksi, "SELECT * FROM user WHERE no_user='$no_user'");
    $result    =mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
</head>
<body>
    <h2>Detail Data User</h2>
    <p><i>Note: Dibawah ini adalah detail informasi user</i> <b><?php echo $no_user?></b></p>
    <div class="bg-light p-4">
        <table width="400px" height="300px">
            <tr>
                <td><strong>No User</strong></td>
                <td>:</td>
                <td><?php echo $result['no_user']?></td>
            </tr>
            <tr>
                <td><strong>Nama</strong></td>
                <td>:</td>
                <td><?php echo $result['nama']?></td>
            </tr>
            <tr>
                <td><strong>Jenis Kelamin</strong></td>
                <td>:</td>
                <td><?php echo $result['jk_user']?></td>
            </tr>
            <tr>
                <td><strong>Alamat</strong></td>
                <td>:</td>
                <td><?php echo $result['alamat_user']?></td>
            </tr>
            <tr>
                <td><strong>Tanggal Lahir</strong></td>
                <td>:</td>
                <td><?php echo $result['tgl_lahir']?></td>
            </tr>
            <tr>
                <td><strong>Level User</strong></td>
                <td>:</td>
                <td><?php echo $result['level']?></td>
            </tr>
        </table>
    </div>
    <div class="mt-3">
        <a href="index.php?menu=lihat-member" class="btn btn-primary">Kembali</a>
    </div>
</body>
</html>