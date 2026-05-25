<?php include 'koneksii.php'; ?>
<form method="POST">
	<input type="text" name="v_nama_siswa" placeholder="nama siswa" required>
	<input type="text" name="v_nohp" placeholder="nohp" required>
	<input type="text" name="v_jurusan" placeholder="jurusan" required>
	<button type="submit" name="b_simpan">simpan</button>
</form>

<?php
if (isset($_POST['b_simpan'])) {
	$nama_siswa = $_POST['v_nama_siswa'];
	$nohp = $_POST['v_nohp']; 
	$jurusan = $_POST['v_jurusan'];
	$query = "INSERT INTO siswa (nama_siswa, nohp, jurusan) VALUES ('$nama_siswa', '$nohp','$jurusan')";
	mysqli_query($koneksi, $query);
	echo "data berhasil masuk!!";
}
?>
