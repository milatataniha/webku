
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body style="background: /*#ffcccc*/;
	font-family: serif;">
	<div class="tampil"  style="width: 700px;
	background:  #ffe6ea ;
	margin: 100px auto;
	padding: 10px 20px 50px 20px;
	border-radius: 7px;
	box-shadow: 0px 10px 20px 0px #3C596C   ;">
	<h1 style="text-align: center">Silahkan pilih menu di bawah ini.</h1>
<ul>
	<li><?php echo anchor('hitung/perkalian','Perkalian'); ?></li>
	<li><?php echo anchor('hitung/pembagian','Pembagian'); ?></li>
</ul>
	</div>
	
</body>
</html>