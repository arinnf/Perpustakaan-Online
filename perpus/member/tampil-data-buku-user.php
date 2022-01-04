<?php 
if (isset($_GET['pesan'])) {
    $pesan = $_GET['pesan'];
}
?>

<div class="row">
    <?php 
    if (isset($pesan)) {
        echo "<div class='alert alert success'>$pesan</div>";
    }
    ?>
</div>
<div class="row">
    <div class="col-12">
        <h2>Halaman Buku</h2>
        <p>Pada halaman ini menampilkan data buku yang tersedia di perpustakaan!</p>
    </div>
</div>

<div class="row py-4 m-4">
    <div class="col">
        <h3>Data Buku</h3>
        <table class="table table-success table-responsive table-striped table-hover mt-4">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>ISBN</th>
                    <th>Judul Buku</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "koneksi.php";

                $no=1;
                $query    =mysqli_query($koneksi, "SELECT * FROM buku ORDER BY isbn DESC");
                while($result    =mysqli_fetch_array($query)){  
                ?>
                    <tr class="text-center">
                        <td><?= $no; ?></td>
                        <td><?= $result['isbn']; ?></td>
                        <td><?= $result['judul_buku']; ?></td>
                        <td>
                            <a href="index.php?menu=detail-buku-user&isbn=<?=$result['isbn']?>"class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                <?php 
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>