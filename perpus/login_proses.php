<?php 
include "koneksi.php";

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_hash = sha1($password);
	$pesan_error = "";

	if (empty($username)) {
		$pesan_error = "Username harus diisi"; 
	} else if (empty($password)) {
		$pesan_error = "Password harus diisi";
	}

	if ($pesan_error == "") {
		$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password_hash'");
		$data = mysqli_fetch_assoc($query);

			if (mysqli_num_rows($query) == 1) {
				if ($data['level'] == "Admin") {
					session_start();
					$_SESSION['nama'] = $data['nama'];
					$_SESSION['level'] = $data['level'];
					$_SESSION['no_user'] = $data['no_user'];

					header("Location: index.php");
				} else	if ($data['level'] == "User") {
					session_start();
					$_SESSION['nama'] = $data['nama'];
					$_SESSION['level'] = $data['level'];
					$_SESSION['no_user'] = $data['no_user'];

					header("Location: index.php");
				} else	if ($data['level'] == "Kepala Perpus") {
					session_start();
					$_SESSION['nama'] = $data['nama'];	
					$_SESSION['level'] = $data['level'];
					$_SESSION['no_user'] = $data['no_user'];

					header("Location: index.php");
				}
			}
	} else{
		header("Location: login.php?pesan_error={$pesan_error}");
	}

} else{
	$pesan_error = "";
}
?>

