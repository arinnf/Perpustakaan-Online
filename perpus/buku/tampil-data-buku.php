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
        <h3>Data Buku</h3>
        <table class="table table-success table-responsive table-striped table-hover mt-4">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>ISBN</th>
                    <th>Judul Buku</th>
                    <th>Penerbit</th>
                    <th>Penulis</th>
                    <th>ID Kategori</th>
                    <th>Deskripsi Buku</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "./koneksi.php";

                $no=1;
                $query    =mysqli_query($koneksi, "SELECT * FROM buku ORDER BY isbn DESC");
                while($result    =mysqli_fetch_array($query)){  
                ?>
                    <tr class="text-center">
                        <td><?= $no; ?></td>
                        <td><?= $result['isbn']; ?></td>
                        <td><?= $result['judul_buku']; ?></td>
                        <td><?= $result['penerbit']; ?></td>
                        <td><?= $result['penulis']; ?></td>
                        <td><?= $result['id_kategori']; ?></td>
                        <td><?= $result['deskripsi_buku']; ?></td>
                    </tr>
                <?php 
                    $no++;
                }
                ?>
            </tbody>
        </table>
        <h3 class="mt-4">Data Kategori</h3>
        <table class="table table-success table-responsive table-striped table-hover mt-4">
            <thead>
                <tr class="text-center">
                    <th>ID Kategori</th>
                    <th>Nama Kategori</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query = mysqli_query($koneksi, "SELECT * FROM kategori_buku");
                foreach($query as $kategori){
                ?>
                    <tr class="text-center">
                        <td><?= $kategori['id']; ?></td>
                        <td><?= $kategori['nama_kategori']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
</div>