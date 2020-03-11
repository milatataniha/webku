<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/framework7-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<title><?php echo $judul; ?></title>
</head>
<body style="background: #17202A;">
	<div style="background: #17202A; width: 400px;   margin: 100px auto;
    padding: 10px 20px 50px 20px;
    border-radius: 9px;
    box-shadow: 0px 10px 20px 0px #F1C40F;">
    <h2 style="color: #FDFEFE; text-align: center;"><?php echo $isi; ?></h2>
    <center>
    <?php echo form_open('admin/edit_submit');?>
    <table border="0" style="color: #FDFEFE;">
    	<?php foreach ($data->result_array() as $row) { ?>
    		<tr>
        <td>ID </td>
        <td> </td>
        <td><input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>"></td>
    </tr>
    <tr>
        <td>Username </td>
        <td> </td>
        <td><input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>"></td>
    </tr>
    
    <tr>
        <td>Password </td>
        <td> </td>
        <td><input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>"></td>
    </tr>
    <tr>
        <td> </td>
        <td> </td>
        <td><button type="submit" name="update" class="btn btn-outline-secondary"><i class="fa fa-floppy-o" aria-hidden="true"></i>       Save</button><button type="reset" class="btn btn-outline-warning"><i class="fa fa-trash-o" aria-hidden="true"></i>       Delete</button></td>
    </tr>
    	<?php } ?>
    
</table>
<?php echo form_close();?>

</body>
</html>