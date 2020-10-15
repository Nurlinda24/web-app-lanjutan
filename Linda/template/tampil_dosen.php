<link rel="stylesheet" href="/../css/style.css">

<h3> Data Dosen </h3>
<table class='table'>
	<tr>
		<th>No</th>
		<th>NIDN</th>
		<th>Nama</th>
	</tr>
	<?php foreach($data_dosen as $key=>$dosen) {?>
	<tr>
		<td><?php echo $key+1; ?></td>
		<td><?php echo $dosen->nidn; ?></td>
		<td><?php echo $dosen->nama; ?></td>
	</tr>
	<?php } ?>
</table>