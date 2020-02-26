<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title><?php echo $judul; ?></title>
</head>
<body style="background: /*#ffcccc*/;
	font-family: sans-serif;">
	<center>
<div class="tampil"  style="width: 550px;
	background:  #ffe6ea ;
	margin: 100px auto;
	padding: 10px 20px 50px 20px;
	border-radius: 7px;
	box-shadow: 0px 10px 20px 0px #3C596C   ;">.
<h2><?php echo $subjudul; ?></h2>
<hr>
<div class="table" style="text-decoration-color: #FDFEFE ">
  <table border="0">
    <tr>
    	<td><label for="nama">Nama</label></td>
    	<td>=</td>
    	<td><label for="nama"><?php echo $nama; ?></label></td>
    </tr>
    <tr>
    	<td><label for="alamat">Alamat</label></td>
    	<td>=</td>
    	<td><label for="nama"><?php echo $alamat; ?></label></td>
    </tr>
    <tr>
    	<td><label for="gender">Gender</label></td>
		<td>=</td>
		<td><label for="nama"><?php echo $jk; ?></label></td>
    </tr>
    <tr>
    	<td><label for="asal_sekolah">Asal Sekolah</label></td>
    	<td>=</td>
    	<td><label for="nama"><?php echo $asal; ?></label></td>
    </tr>
  </table>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</center>
</body>
</html>