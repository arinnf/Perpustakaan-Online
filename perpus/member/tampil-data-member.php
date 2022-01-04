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
		</div>
	</div>
<div class="row py-4 m-4">
	<h3>Data User</h3>
	<table class="table table-success table-responsive table-striped table-hover mt-4">
		<thead>
			<tr class="text-center">
				<th>No</th>
				<th>No User</th>
				<th>Nama User</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>Tanggal Lahir</th>
			</tr>
		</thead>
		<tbody>

		<?php
        include "./koneksi.php";

        $no=1;
        $query=mysqli_query($koneksi, "SELECT * FROM user ORDER BY no_user DESC");
        while($member=mysqli_fetch_array($query)){ 
        ?>

		<tr class="text-center">
            <td><?php echo $no?></td>
            <td><?php echo $member['no_user']?></td>
            <td><?php echo $member['nama']?></td>
            <td><?php echo $member['jk_user']?></td>
            <td><?php echo $member['alamat_user']?></td>
            <td><?php echo $member['tgl_lahir']?></td>
        </tr>
				
		<?php 
			$no++;
			}
		?>
		</tbody>
	</table>
</div>