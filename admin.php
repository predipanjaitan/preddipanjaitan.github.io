<?php include 'header.php'; ?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Data User</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Data</button>
<br/>
<br/>

<?php 
$per_hal=10;
$jumlah_record=mysql_query("SELECT COUNT(*) from admin");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Record</td>		
			<td><?php echo $jum; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>
	<a style="margin-bottom:10px" href="lap_barang.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
</div>
<form action="cari_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari barang di sini .." aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
<br/>
<table class="table table-hover">
<div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Bootstrap dataTables</div>
                                </div>
								<div class="bootstrap-admin-panel-content">
                                    <table class="table table-striped table-bordered" id="example">
									  <thead>
		<tr bgcolor="#FFA800">
		<th class="col-md-1">No</th>
		<th class="col-md-4">USER NAME</th>
		<th class="col-md-3">PASSWORD</th>
		<th class="col-md-1">FHOTO</th>
		<!-- <th class="col-md-1">Sisa</th>		 -->
		<th class="col-md-3">Opsi</th>
	</tr>
	
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysql_real_escape_string($_GET['cari']);
		$brg=mysql_query("select * from admin where nama like '$cari' or nuptk like '$cari'");
	}else{
		$brg=mysql_query("select * from admin limit $start, $per_hal");
	}
	$no=1;
	while($b=mysql_fetch_array($brg)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['uname'] ?></td>
			<td><?php echo $b['pass'] ?></td>
			
			 <td><?php
			if (empty($foto)) 
		        echo "<strong><img src='images/nopic.gif' width='70' height='110'> <br> No Image </strong>";
		        else
				echo "<img class='shadow' src='images/$foto' width='70' height='110' title='$nama' >";
				?></td>
			<td>
				<a href="det_admin.php?id=<?php echo $b['id']; ?>" class="btn btn-info">Detail</a>
				<a href="edit_us.php?id=<?php echo $b['id']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_us.php?id=<?php echo $b['id']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>		
		<?php 
	}
	?>
  </thead>
</table>
<ul class="pagination">			
			<?php 
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>						
		</ul>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Data User</h4>
			</div>
			<div class="modal-body">
			
				<form action="tb_adm_act.php" method="post" enctype="multipart/form-data">
					<div class="form-group"> 
						<label>USERNAME</label>
						<input name="uname" type="text" class="form-control" placeholder="nuptk ..">
					</div>
					<div class="form-group">
						<label>PASSWORD</label>
						<input name="pass" type="password" class="form-control" placeholder="Nama Guru ..">
					</div>
					<div class="form-group">
						<label>Foto</label>
						<input name="foto" type="file" class="form-control" placeholder="Password Lama ..">
					</div>		
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>



<?php 
include 'footer.php';

?>