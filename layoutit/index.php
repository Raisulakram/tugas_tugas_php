<?php

$namasiswa = "Raisul Akram"; 
$umur = 20;
$alamat = "Pidie,Aceh";
$email = "raisul.akram13@gmail.com";
$hobby = "Belajar coding dan bermain badminton";
$telephone = "+62 022-4955-9976";
$perguruan = "Universitas Jabal Ghafur Pidie";

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tugas 1 PHP</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
	<link rel="stylesheet" href="css/bootstrap.min.css">


    <link href="css/style1.css" rel="stylesheet">

  </head>
  <body>

	<div class="container-fluid" id="profile">
		<div class="row1">
			<div class="col-md-19">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link active" href="#profile">profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#portofolio">portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>
				</ul>
			<div class="data">
				<img src="img/raisul.png" alt="raisul">
				<p><?= $namasiswa?>
				, <?= $alamat?> 
				, <?= $umur?>
				, <?= $telephone?>
				<br><?= $hobby?>
				<br><?= $email?>
				, <?= $perguruan?></p>
			</div>
			</div>
		</div>
	
	<div class="row3" id="portofolio">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<div class="jumbotron">
						<img src="img/foto10.jpg" alt="foto1">
						<h2>
							Landing Page
						</h2>
						<h6>
							HTML, CSS, JAVASCRIPT
						</h6>
						<p>
							Landing page adalah halaman dalam website yang didesain khusus dengan mindset marketing. Halaman inilah yang ditampilkan ketika pengunjung mengakses website dari hasil pencarian berbayar (paid search).						</p>
						<p>
							<a class="btn btn-primary btn-large" href="#">Learn more</a>
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="jumbotron">
						<img src="img/foto11.jpg" alt="foto1">
						<h2>
							Online Shop
						</h2>
						<h6>
							HTML, CSS, JAVASCRIPT
						</h6>
						<p>
							Online shop adalah model bisnis yang muncul karena perkembangan zaman. Setelah dunia bergeser ke teknologi digital, transaksi jual-beli pun bisa dilakukan secara online.
						</p>
						<p>
							<a class="btn btn-primary btn-large" href="#">Learn more</a>
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="jumbotron">
						<img src="img/foto7.jpg" alt="foto1">
						<h2>
							Kalkulator
						</h2>
						<h6>
							PYTHON
						</h6>
						<p>
							kalkulator adalah alat untuk menghitung dari perhitungan sederhana seperti penjumlahan, pengurangan, perkalian dan pembagian sampai kepada rumus matematika tertentu.
						</p>
						<p>
							<a class="btn btn-primary btn-large" href="#">Learn more</a>
						</p>
					</div>
				</div>
			</div>
			<div class="row4" id="contact">
				<div class="col-md-12">
					<dl>
						<dt>
							Contact
						</dt>
						<dd>
							+62 822-4955-9976
						</dd>
						<dt>
							Sosmet
						</dt>
						<dd>
							instagram : Raisulakram13_ <br>
							facebook  : Raisul Akram <br>
							raisul.akram13@gmail.com
						</dd>
						<dt>
							GitHub
						</dt>
						<dd>
							RaisulAkram
						</dd>
						<div class="footer">
							<p>Created with by Raisul Akram</p>
						</div>
					</dl>
				</div>
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>