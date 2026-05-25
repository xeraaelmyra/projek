<?php include 'koneksii.php'; ?>
<table border="1" cellpadding="10">
	<tr>
		<th>no</th>
		<th>nama_siswa</th>
		<th>nohp</th>
		<th>jurusan</th>
	
	<?php
	$data = mysqli_query($koneksi, "SELECT * FROM  siswa");
	$no = 1;
	while ($d = mysqli_fetch_array($data)) {
		?>
	</tr>
		<tr>
			<td><?php echo $no++; ?></td>
	 		<td><?php echo $d['nama_siswa']; ?></td>
	 		<td><?php echo $d['nohp']; ?></td>
			<td><?php echo $d['jurusan']; ?></td>

			<td>
				<a href="edit.php?id=<?php echo $d['id']; ?>">edit</a>
				<a href="deleteet.php?id=<?php echo $d['id']; ?>" onclick="return confirm('yakin mau hapus?')">hapus</a>
			</td>

		</tr>
		<?php
	}
	?>
</table>