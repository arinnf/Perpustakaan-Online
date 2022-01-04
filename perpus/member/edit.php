<div class="row">
    <h2>Edit Data User</h2>
    <p class="text-secondary">Silahkan untuk memasukkan data user dengan benar!</p>
    <?php
    $no_user = $_GET['no_user'];
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE no_user = '$no_user'");
    $query = mysqli_fetch_array($data);
    ?>

    <form action="index.php?menu=edit-member-proses" enctype="multipart/form-data" method="POST" class="py-4 bg-light">
        <div class="mb-3">
            <label for="no_user" class="form-label">No User</label>
            <input type="text" name="no_user" id="no_user" class="form-control" value="<?= $no_user ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="nama">Nama User</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?= $query['nama'] ?>">
        </div>
        <div class="mb-3">
            <label for="jk_user" class="form-label">Jenis Kelamin</label>
            <div class="form-check">
                <input type="radio" name="jk_user" id="laki-laki" class="form-check-input" value="L" <?php if ($query['jk_user'] == "L") echo 'checked' ?>>
                <label for="laki-laki" class="form-check-label">Laki-laki</label>
            </div>
            <div class="form-check">
                <input type="radio" name="jk_user" id="perempuan" class="form-check-input" value="P" <?php if ($query['jk_user'] == "P") echo 'checked' ?>>
                <label for="perempuan" class="form-check-label">Perempuan</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="alamat_user">Alamat</label>
            <textarea name="alamat_user" id="alamat_user" class="form-control"><?= $query['alamat_user']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?= $query['tgl_lahir'] ?>">
        </div>
        <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <div class="form-check">
                <input type="radio" name="level" id="Admin" class="form-check-input" value="Admin" <?php if ($query['level'] == "Admin") echo 'checked' ?>>
                <label for="Admin" class="form-check-label">Admin</label>
            </div>
            <div class="form-check">
                <input type="radio" name="level" id="User" class="form-check-input" value="User" <?php if ($query['level'] == "User") echo 'checked' ?>>
                <label for="User" class="form-check-label">User</label>
            </div>
            <div class="form-check">
                <input type="radio" name="level" id="kepala perpus" class="form-check-input" value="Kepala Perpus" <?php if ($query['level'] == "Kepala Perpus") echo 'checked' ?>>
                <label for="Kepala Perpus" class="form-check-label">Kepala Perpus</label>
            </div>
        </div>
        <div class="mb-3">
            <input type="submit" value="Edit" name="edit" class="btn btn-primary" value="<?= $query['nama_file'] ?>">
        </div>
    </form>
</div>