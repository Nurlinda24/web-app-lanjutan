<link rel="stylesheet" href="/../css/style.css">

<h3>Daftar Mahasiswa Prodi</h3>
<table class='table'>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Kode Prodi</th>
		<th>Prodi</th>
	</tr>
	<?php foreach($data_mahasiswa as $key=>$mahasiswa) { ?>
	<tr>
		<td><?php echo $key+1; ?></td>
		<td><?php echo $mahasiswa->nama ?></td>
		<td><?php echo $mahasiswa->kelamin ?></td>
		<td><?php echo $mahasiswa->programStudi->kode ?></td>
		<td><?php echo $mahasiswa->programStudi->nama ?></td>
	</tr>
	<?php } ?>
</table>