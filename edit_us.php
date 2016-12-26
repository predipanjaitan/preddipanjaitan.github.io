<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit User</h3>
<a class="btn" href="admin.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id=mysql_real_escape_string($_GET['id']);
$det=mysql_query("select * from admin where id='$id'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>		
	<div class="col-md-5 col-md-offset-3">		
	<form action="update_admin.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $d['id'] ?>"></td>
			</tr>
			<tr>
				<td>USERNAME</td>
				<td><input type="text" class="form-control" name="uname" value="<?php echo $d['uname'] ?>"></td>
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td><input type="password" class="form-control" name="pass" value="<?php echo $d['pass'] ?>"></td>
			</tr>
			<tr>
				<td>FOTO</td>
				<td><input type="file" class="form-control" name="foto" value="<?php echo $d['foto'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
<?php include 'footer.php'; ?>