<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail ADMIN</h3>

<?php
$id=mysql_real_escape_string($_GET['id']);
$det=mysql_query("select * from admin where id='$id'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
	?>					
	<table class="table">		
		<tr>
		<td><? 
			if (empty($foto)) 
		        echo "<strong><img src='images/nopic.gif' width='70' height='110'> <br> No Image </strong>";
		        else
				echo "<img class='shadow' src='images/$foto' width='70' height='110' title='$nama' >";
				?>&nbsp;</td>
					</tr>
		<tr>
			<td>USER NAMAE</td>
			<td><?php echo $d['uname'] ?></td>
		</tr>
		<tr>
			<td>PASWORD</td>
			<td><?php echo $d['pass'] ?></td>
		</tr>
		</div>
	</table>
	<a class="btn" href="admin.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
	<?php 
}
?>
<?php include 'footer.php'; ?>