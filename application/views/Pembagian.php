<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title><?php echo $judul;?></title>
</head>
<body style="background: /*#ffcccc*/;
	font-family: sans-serif;">
	<div class="tampil"  style="width: 550px;
	background:  #ffe6ea ;
	margin: 100px auto;
	padding: 10px 20px 50px 20px;
	border-radius: 7px;
	box-shadow: 0px 10px 20px 0px #3C596C   ;">
	<h1 style="text-align: center">Hitung Pembagian</h1>
	<?php echo form_open('hitung/pembagian');?>
	<div style="text-align: center;">
		<?php echo form_input('angka1', $angka1);?> X
	<?php echo form_input('angka2', $angka2);?>
	</div>
	
	<br>
	<center>
	<button type="submit" class="btn btn-outline-secondary"><i class = "material-icons"><?php echo $submit; ?></button>
	</center>
	<?php echo form_close();?>
	<p style="text-align: center;">Hasil : <?php echo $hasil;?></p>
	<br>
	<p style="text-align: right;"><?php echo anchor('hitung','Kembali'); ?>
</p>
	</div>
	
</body>
</html>