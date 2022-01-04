<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <title>Index</title>
  </head>
  <body> 

  <?php
    session_start();
    if(isset($_SESSION['level']) == "") {
      header("Location:login.php");
    } 
    ?>
    <!-- membuat navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <div class="container">
        <span class="bi bi-book-half text-white"><a class="navbar-brand">      Perpustakaan</a></span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php?menu=dashboard2">Dashboard</a>
            </li>
            <?php 
            if($_SESSION['level'] == "Admin"){
            ?>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kelola</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="index.php?menu=lihat-member">User</a>
                  </li>
                  <li><a class="dropdown-item" href="index.php?menu=lihat-buku">Buku</a>
                  </li>
                </ul>
              </li>
            <?php
            } else if($_SESSION['level'] == "User"){
            ?> 
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?menu=tampil-data-buku-user">Lihat Buku</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Transaksi</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="index.php?menu=tambah-peminjaman">Peminjaman</a></li>
                  <li><a class="dropdown-item" href="index.php?menu=cari-transaksi">Pengembalian</a></li>
                </ul>
              </li>
            <?php
            } else if($_SESSION['level'] == "Kepala Perpus"){
            ?> 
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tampil Data</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="index.php?menu=tampil-data-member">Member</a>
                  </li>
                  <li><a class="dropdown-item" href="index.php?menu=tampil-data-buku">Buku</a>
                  </li>
                </ul>
              </li>
            <?php
            }
            ?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
              </li>
            </ul>
        </div>
      </div>
    </nav>
    <!-- akhir dari navbar -->

    <div class="container py-4">
      <?php
      include "koneksi.php";
      include "menu.php"
      ?>
    </div>
    
    <div class="container border-top border-light text-center p-4">
      <?php include "footer.php"; ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

  </body>
</html>


  