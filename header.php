<!DOCTYPE html>
<html>
<head>
	<title>KIOS MALASNGODING</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>
	<?php include 'admin/config.php'; ?>
	
</head>
<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="logo/slide1.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>
      </div>

      <div class="item">
        <img src="logo/slide2.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago - A night we won't forget.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="logo/slide1.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-light" style="background-color: #FFA500;">
  <div class="container">
    <div class="navbar-header">
	
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin.php">ABOUT</a></li>
        <li><a href="forminputkaryawan.php">SERVICES</a></li>
        <li><a href="lihat.php">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
		
      </ul>
	   <ul class="nav navbar-nav navbar-right">
	   <img src="images/11.png" width="100" height="60">
      </ul>
    </div>
  </div>
</nav>
<div class="col-md-2">
		<div class="row"></div>
		 <div class="panel panel-primary">
		  <div class="panel-heading">Login System</div>
		  
		  <blockquote class="blockquote-reverse">
  
    <footer>Silahkan masukkan username dan password Anda untuk masuk ke dalam sistem. </footer>
  </blockquote>

			<form action="login_act.php" method="post">
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control" placeholder="Username" name="uname">
					</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" class="form-control" placeholder="Password" name="pass">
					</div>
					<br>
					<div class="input-group">			
						<input type="submit" class="btn-xs btn-primary" value="Login">
					</div>
				</div>
			</form>

<div class="row"></div>
 <div class="panel panel-warning">
   <div class="panel-heading">Menu</div>
    <ul class="nav nav-list">
        <li><a href="index.php?link=tambahBerita.php">&rarr; Tambah Berita</a></li>
        <li><a href="lihatBerita.php">&rarr; Lihat Berita</a></li>
        <li class="nav-header">Baca Juga</li>
        <ul type="square">
        	<?php
				while($hasil_recent= mysql_fetch_array($ambil_recent)){
        				echo "<li><a href='index.php?link=lihatDetailBerita.php&id=$hasil_recent[id_berita]'>".$hasil_recent['judul']."</a></li>";
				}
			?>
        </ul>
    </ul>
</div><!--/.well ko-->
</div>
<div class="col-md-10">


