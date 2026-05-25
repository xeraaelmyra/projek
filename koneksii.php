<?php
$koneksi = mysqli_connect("localhost", "root", "", "nailahh");
if (!$koneksi) {
	die("koneksi ke gudang data gagal: " . mysqli_connect_error());
}
?>