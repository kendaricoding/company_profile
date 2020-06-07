<!DOCTYPE html>
<html>
<head>
	<title>Form Uji</title>
</head>
<body>

	<h1>Form Pengujian Helper</h1>

	<?php echo tampilkan($nama_saya); ?><br><hr>
	Penjumlahan nilai 1 + nilai 2 : <?php echo penjumlahan($nilai1,$nilai2); ?><br><hr>
	<?php echo get_data_barang($id_barang) ?>
	
	<h1>Form Pengujian Library</h1>

	<?php echo $data_lib; ?><br><hr>
	

</body>
</html>