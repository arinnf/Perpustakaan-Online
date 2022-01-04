<?php
    if(isset($_GET['pesan_error'])){
        $pesan_error = $_GET['pesan_error'];
    } else if (isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
    }
    ?>
<?php 
if (isset($_GET['pesan'])) {
	$pesan = $_GET['pesan'];
}
?>
<div class="row">
	<?php 
		if (isset($pesan)) {
			echo "<div class='alert alert-success'>$pesan</div>";
		}
	?>
</div>
	<div class="row">
		<div class="col-12">
			<h2>Halaman User</h2>
			<p>Pada halaman ini menampilkan data user yang terdaftar di website perpustakaan!</p>
			<a href="index.php?menu=tambah-member" class="btn btn-primary">Tambah User</a>
		</div>
	</div>
<div class="row py-4 m-4">
	<table class="table table-success table-responsive table-striped table-hover mt-4">
		<h3>Data User</h3>
		<thead>
			<tr class="text-center">
				<th>No</th>
				<th>No User</th>
				<th>Nama User</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>

		<?php
        include "./koneksi.php";

        $no=1;
        $query=mysqli_query($koneksi, "SELECT * FROM user ORDER BY no_user DESC");
        while($user=mysqli_fetch_array($query)){ 
        ?>

		<tr class="text-center">
            <td><?php echo $no?></td>
            <td><?php echo $user['no_user']?></td>
            <td><?php echo $user['nama']?></td>
			<td>
				<a href="index.php?menu=detail-member&no_user=<?=$user['no_user']?>"class="btn btn-success">Detail</a>

				<a href="index.php?menu=edit-member&no_user=<?= $user['no_user']; ?>"class="btn btn-warning">Edit</a>

				<a href="index.php?menu=hapus-member&no_user=<?= $user['no_user']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin hapus data?')">Hapus</a>
			</td>
        </tr>
				
		<?php 
			$no++;
			}
		?>
		</tbody>
	</table>
</div>