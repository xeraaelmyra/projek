<?php
include 'koneksii.php';

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$nama_siswa = $_POST['nama_siswa'];
	$jurusan = $_POST['jurusan'];
	$query = "UPDATE siswa SET nama_siswa='$nama_siswa', jurusan='$jurusan' WHERE id='$id'";
	$hasil = mysqli_query($koneksi, $query);

	if ($hasil) {
		header("location:tampill.php?pesan=update_berhasil");
	} else {
		echo "Gagal mengupdate data: " . mysqli_error($koneksi);

	}

}
?>