<link rel="stylesheet" href="/../css/style.css">

<h3> Data Mahasiswa </h3>
<table class='table'>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
	</tr>
	<?php foreach($data_mahasiswa as $key=>$mahasiswa) {?>
	<tr>
		<td><?php echo $key+1; ?></td>
		<td><?php echo $mahasiswa->nama; ?></td>
		<td><?php echo $mahasiswa->kelamin; ?></td>
	</tr>
	<?php } ?>
</table>