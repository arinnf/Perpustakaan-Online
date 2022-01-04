<?php 

if (isset($_GET['menu'])) {
	$menu = $_GET['menu'];
}else{
	$menu = "dashboard2";
}

switch ($menu) {
	case 'dashboard2':
		include "dashboard2.php";
		break;

	case 'tampil-data-member';
		include "member/tampil-data-member.php";
		break;

	case 'lihat-member':
		include "member/index.php";
		break;

	case 'tambah-member':
		include "member/tambah.php";
		break;

	case 'tambah-member-proses':
		include "member/tambah_proses.php";
		break;

	case 'edit-member':
		include "member/edit.php";
		break;

	case 'edit-member-proses':
		include "member/edit_proses.php";
		break;

	case 'hapus-member':
		include "member/hapus.php";
		break;

	case 'detail-member';
		include "member/detail-member.php";
		break;

	case 'tampil-data-buku';
		include "buku/tampil-data-buku.php";
		break;

	case 'tampil-data-buku-user';
		include "member/tampil-data-buku-user.php";
		break;

	case 'lihat-buku':
		include "buku/index.php";
		break;

	case 'detail-buku';
		include "buku/detail-buku.php";
		break;

	case 'detail-buku-user';
		include "member/detail-buku-user.php";
		break;

	case 'tambah-buku':
		include "buku/tambah.php";
		break;

	case 'tambah-buku-proses':
		include "buku/tambah_proses.php";
		break;
	
	case 'hapus-buku':
		include "buku/hapus.php";
		break;

	case 'edit-buku':
		include "buku/edit.php";
		break;

	case 'edit-buku-proses':
		include "buku/edit-proses.php";
		break;

	case 'tambah-kategori-buku':
		include "kategori/tambah.php";
		break;

	case 'tambah-kategori-buku-proses':
		include "kategori/tambah-proses.php";
		break;

	case 'hapus-kategori':
		include "kategori/hapus.php";
		break;

	case 'edit-kategori':
		include "kategori/edit.php";
		break;

	case 'edit-kategori-proses':
		include "kategori/edit-proses.php";
		break;

	case 'tambah-peminjaman':
		include "peminjaman/tambah-peminjaman.php";
		break;

	case 'tambah-peminjaman-proses':
		include "peminjaman/tambah-peminjaman-proses.php";
		break;

	case 'cari-transaksi':
		include "pengembalian/cari-transaksi.php";
		break;

	case 'pengembalian-proses':
		include "pengembalian/pengembalian-proses.php";
		break;
	}
?>