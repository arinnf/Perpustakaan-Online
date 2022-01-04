<?php
include "function/kode_member.php";
?>

<div class="row">
    <h2>Tambah Data User</h2>
    <p class="text-secondary">Silahkan untuk memasukkan data user dengan benar!</p>
    <form action="index.php?menu=tambah-member-proses"  method="POST" class="py-4 bg-light">
        <div class="mb-3">
            <label for="no_user" class="form-label">No User</label>
            <input type="text" name="no_user" id="no_user" class="form-control" value="<?= $kodeUser ?>" required readonly>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama User</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jk_user" class="form-label">Jenis Kelamin</label>
            <div class="form-check">
                <input type="radio" name="jk_user" id="laki-laki" class="form-check-input" value="L" checked>
                <label for="laki-laki" class="form-check-label">Laki-laki</label>
            </div>
            <div class="form-check">
                <input type="radio" name="jk_user" id="perempuan" class="form-check-input" value="P" checked>
                <label for="perempuan" class="form-check-label">Perempuan</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="alamat_user" class="form-label">Alamat</label>
            <textarea name="alamat_user" id="alamat_user" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" name="password" id="password" class="form-control">
        </div>
        <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <div class="form-check">
                <input type="radio" name="level" id="Admin" class="form-check-input" value="Admin">
                <label for="Admin" class="form-check-label">Admin</label>
            </div>
            <div class="form-check">
                <input type="radio" name="level" id="User" class="form-check-input" value="User">
                <label for="User" class="form-check-label">User</label>
            </div>
            <div class="form-check">
                <input type="radio" name="level" id="kepala perpus" class="form-check-input" value="Kepala Perpus">
                <label for="Kepala Perpus" class="form-check-label">Kepala Perpus</label>
            </div>
        </div>
        <div class="mb-3">
            <input type="submit" value="Tambah" name="tambah" class="btn btn-primary">
        </div>
    </form>
</div>