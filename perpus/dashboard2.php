<?php
    if(isset($_SESSION['level']) == "") {
      header("Location:login.php");
    } 
    ?>

<div class="row">
    <div class="alert alert-success">
        <h4 class="alert-heading">Hallo, <?= $_SESSION['nama']?></h4>
        <p>Selamat datang di Halaman <?= $_SESSION['level']?></p>
        <p>No user anda adalah <strong>"<?= $_SESSION['no_user']?>"</strong></p>
    </div>
</div>

<?php 
            if($_SESSION['level'] == "Admin"){
            ?>
<div class="row">
    <div class="col-3">
        <div class="card bg-primary text-center text-light">
            <div class="card-body">
                <h5 class="card-tittle"><i class="bi bi-people-fill"></i> Jumlah User</h5>
                <p class="card-text">
                    <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM user");
                    $hitung = mysqli_num_rows($data);
                    echo "{$hitung} User";
                    ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card bg-danger text-center text-light">
            <div class="card-body">
                <h5 class="card-tittle"><i class="bi bi-book-fill"></i> Jumlah Buku</h5>
                <p class="card-text">
                    <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM buku");
                    $hitung = mysqli_num_rows($data);
                    echo "{$hitung} Buku";
                    ?>
                </p>    
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card bg-warning text-center text-light">
            <div class="card-body">
                <h5 class="card-tittle"><i class="bi bi-bookmark-fill"></i> Jumlah Kategori Buku</h5>
                <p class="card-text">
                    <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM kategori_buku");
                    $hitung = mysqli_num_rows($data);
                    echo "{$hitung} Kategori Buku";
                    ?>
                </p>    
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card bg-success text-center text-light">
            <div class="card-body">
                <h5 class="card-tittle"><i class="bi bi-bar-chart-fill"></i> Jumlah Transaksi</h5>
                <p class="card-text">
                    <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
                    $hitung = mysqli_num_rows($data);
                    $data2 = mysqli_query($koneksi, "SELECT * FROM pengembalian");
                    $hitung2 = mysqli_num_rows($data2);
                    $total = $hitung + $hitung2;
                    echo "{$total} Pengembalian";
                    ?>
                </p>    
            </div>
        </div>
    </div>
</div>
<?php
            } else if($_SESSION['level'] == "User"){
            ?>
<div class="row justify-content-center">
    <div class="col-3">
        <div class="card bg-danger text-center text-light">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-book-fill"></i> Jumlah Buku</h5>
                <p class="card-text">
                    <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM buku");
                    $hitung = mysqli_num_rows($data);
                    echo "{$hitung} Buku";
                    ?>
                </p>    
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card bg-warning text-center text-light">
            <div class="card-body">
                <h5 class="card-tittle"><i class="bi bi-bookmark-fill"></i> Jumlah Kategori Buku</h5>
                <p class="card-text">
                    <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM kategori_buku");
                    $hitung = mysqli_num_rows($data);
                    echo "{$hitung} Kategori Buku";
                    ?>
                </p>    
            </div>
        </div>
    </div>
</div>
<?php
            } else if($_SESSION['level'] == "Kepala Perpus"){
            ?>
<div class="row">
    <div class="col-3">
        <div class="card bg-primary text-center text-light">
            <div class="card-body">
                <h5 class="card-tittle"><i class="bi bi-people-fill"></i> Jumlah User</h5>
                <p class="card-text">
                    <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM user");
                    $hitung = mysqli_num_rows($data);
                    echo "{$hitung} User";
                    ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card bg-danger text-center text-light">
            <div class="card-body">
                <h5 class="card-tittle"><i class="bi bi-book-fill"></i> Jumlah Buku</h5>
                <p class="card-text">
                    <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM buku");
                    $hitung = mysqli_num_rows($data);
                    echo "{$hitung} Buku";
                    ?>
                </p>    
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card bg-warning text-center text-light">
            <div class="card-body">
                <h5 class="card-tittle"><i class="bi bi-bookmark-fill"></i> Jumlah Kategori Buku</h5>
                <p class="card-text">
                    <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM kategori_buku");
                    $hitung = mysqli_num_rows($data);
                    echo "{$hitung} Kategori Buku";
                    ?>
                </p>    
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card bg-success text-center text-light">
            <div class="card-body">
                <h5 class="card-tittle"><i class="bi bi-bar-chart-fill"></i> Jumlah Transaksi</h5>
                <p class="card-text">
                    <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
                    $hitung = mysqli_num_rows($data);
                    $data2 = mysqli_query($koneksi, "SELECT * FROM pengembalian");
                    $hitung2 = mysqli_num_rows($data2);
                    $total = $hitung + $hitung2;
                    echo "{$total} Pengembalian";
                    ?>
                </p>    
            </div>
        </div>
    </div>
</div>
<?php
            }
            ?>