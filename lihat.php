<?php include 'header.php'; ?>
	<?php 
$per_hal=10;
$jumlah_record=mysql_query("SELECT COUNT(*) from data_karyawan");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
     <!-- /.row -->	
<div class="row">	
  <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Rincian Data Surat Keluar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
								<form action="cari_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari Surat Keluar di sini .." aria-describedby="basic-addon1" name="cari">	
	</div>
	</br>
		<a style="margin-bottom:10px" href="cetak_keluar.php" target="_blank" class="btn btn-info pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
                                    <thead>
	<tr bgcolor="#FFA800">
	<th width="30">No</td>&nbsp;
	<th width="60" height="42">NIK</td>&nbsp;
	<th width="90">Nama</td>&nbsp;
	<th width="70">Foto</td>&nbsp;      
	<th width="30">J.Kelamin</td>&nbsp;
	<th width="70">Jabatan</td>&nbsp;
	<th width="80">Departemen</td>&nbsp;
	<th width="90">Tanggal Lahir</td>&nbsp;
	<th width="40">Action</th> 
</tr>
  </thead>
                                    <tbody>
									
<?php

	$Open = mysql_connect("localhost","root","12345");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysql_select_db("karyawan");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
	$Cari="SELECT * FROM data_karyawan ORDER BY nik";
	$Tampil = mysql_query($Cari);
	$nomer=0;
    while (	$hasil = mysql_fetch_array ($Tampil)) {
			$nik = stripslashes ($hasil['nik']);
			$nama = stripslashes ($hasil['nama']);
			$namafoto = stripslashes ($hasil['namafoto']);
			$foto = $hasil['namafoto'];
			$jk = stripslashes ($hasil['jk']);
			$jab = stripslashes ($hasil['jab']);
			$dept = stripslashes ($hasil['dept']);
			$tgl_lhr = $hasil['tgl_lhr'];
		{
	$nomer++;
	
?>
	<tr align="center">
		<td><?=$nomer?>
		<div align="center"></div></td>
		<td><?=$nik?>
		<div align="center"></div></td>
		<td><?=$nama?>
		<div align="center"></div></td>
		<td><? 
			if (empty($foto)) 
		        echo "<strong><img src='images/nopic.gif' width='70' height='110'> <br> No Image </strong>";
		        else
				echo "<img class='shadow' src='images/$foto' width='70' height='110' title='$nama' >";
				?>&nbsp;</td>
		<td><?=$jk?><div align="center"></div></td>
		<td><?=$jab?><div align="center"></div></td>
		<td><?=$dept?><div align="center"></div></td>
		<td><?php
			if ($hasil['tgl_lhr'] === NULL)
				$hasil['tgl_lhr'] = "NULL"; 
				echo("$tgl_lhr\n");
		?><div align="center"></div></td>
		<td class="text-center">
				<a href="det_surat_keluar.php?id=<?php echo $b['id']; ?>" class="btn btn-info glyphicon glyphicon-eye-open"></a>
				<a href="edit_suratkeluar.php?id=<?php echo $b['id']; ?>" class="btn btn-warning glyphicon glyphicon-pencil"></a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_keluar.php?id=<?php echo $b['id']; ?>' }" class="btn btn-danger glyphicon glyphicon-trash"></a>
			</td>
	</tr>
		</font>					
		</div>
			</div>
							</br>
<?php  
		}
	}
//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</table>

<div class="col-md-12">
	<table class="col-md-3">
		<tr>
			<td>Jumlah Record Data</td>		
			<td><?php echo $jum; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>
	</div>
	</div>
</div>
</div>
<ul class="pagination">			
			<?php 
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>						
		</ul>