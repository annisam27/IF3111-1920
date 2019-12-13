<!DOCTYPE html>
<html>

<head>
</head>

<body>
	<center>
		<h1>Daftar Laporan</h1>
	</center>
	<center><?php echo anchor('crud/tambah', 'Buat Laporan'); ?></center>
	<table style="margin:20px auto;" border="1">


		<?php $no = 1;
		foreach ($laporan as $u) : ?>
			<h1><?php echo $u['Aspek'] ?></h1>
			<p><?php echo $u['Laporan_Komentar'] ?></p>
			<small>Lampiran :<?php echo $u['Lampiran'] ?></small><br>
			<small>Aspek: <?php echo $u['Aspek'] ?></small>
			&nbsp;
			<small>Waktu: <?php echo $u['Waktu'] ?></small>
			<hr />
			<br>
		<?php endforeach; ?>
	</table>
</body>

</html>