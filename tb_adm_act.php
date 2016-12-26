<?php 
include 'config.php';
$uname=$_POST['uname'];
$pass=md5($_POST['pass']);
$namafoto=$_FILES['foto'] ['name'];
//Cek Photo
	if (strlen($namafoto)>0) {
		//upload Photo
		if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
			move_uploaded_file ($_FILES['foto']['tmp_name'], "images/".$namafoto);
		}
	}

mysql_query("insert into admin values('','$uname','$pass','$namafoto')");
header("location:admin.php");
 ?>