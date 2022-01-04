<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <style>
    body { 
      background: url(buku.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  
  </style>
    <title>Login</title>
  </head>
  <body>

    <?php
    session_start();
    if(isset($_GET['pesan_error'])){
        $pesan_error = $_GET['pesan_error'];
    } else if (isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
    }
    ?>

    <!-- style navigasi bar atas-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <span class="bi bi-book-half text-white"><a class="navbar-brand">      Perpustakaan</a></span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

      <div class="container">
        <div class="row mt-4 pt-5">
          <div class="col-md-6 mx-auto">
            <br>
            <br>
            <div class="card p-4 border-0 shadow-sm">
              <h2 class="text-center" style="font: maroon">Login</h2>
              <p class="text-center">Silahkan untuk login terlebih dahulu!</p>
              <?php
              if(isset($pesan_error)){
                echo "<div class=\"alert alert-danger\">$pesan_error</div>";
              } else if(isset($pesan)){
                echo "<div class=\"alert alert-success\">$pesan</div>";
              }

              ?>
              <form action="login_proses.php" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" value="Login" class="btn btn-primary btn-block" name="login">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

  </body>
</html>

