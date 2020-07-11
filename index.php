<!DOCTYPE html>
<html>
<head>
	<title>Gizi Buruk | DempsterShafer</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">	
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
	$(document).ready(function(){
//alert('asdkfj');
	var namauser;
	var password;
	$("#txtuser").val("");
	$("#txtpassword").val("");
	$("#txtuser").focus();
	// ketika tombol login dikliks
	$("#btnlogin").click (function(){
	namauser=$("#txtuser").val();
	password=$("#txtpass").val();
	if (namauser==''){
		alert("Masukkan Username Anda..!");
		$("#txtuser").focus();
		return false;
		exit();
	}
	if (password==''){
		alert("Masukkan Password Anda..!");
		$("#txtpass").focus();
		return false;
		exit();
	}
	//Cek data base ke file cekuser.php
	$("#status").show();
	datanya = "&namauser="+namauser+"&password="+password;
	$.ajax({
		url: "cekuser.php",
		data: datanya,
		cache: false,
		success: function(msg){
			if (msg=="usersalah"){
				//alert("User salah..");
				$("#lbluser").show();
				$("#txtuser").focus();
				$("#status").hide();
				return false;
				exit();
				}
			if (msg=="passwordsalah"){
				//alert("Password Salah..!");
				$("#lbluser").hide();
				$("#lblpassword").show();
				$("#status").hide();
				exit();
				}
			if (msg=="sukses"){
				//alert("Sukses..!");
				//$("#lblpassword").hide();
				//alert("sukses");
				//$("#status").hide();
				$("#form1").submit();;
				}
		}
	});		
	});
});
</script>
</head>
<body>	
	<!-- membuat menu navigasi -->
	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><?php include("_header.php");?></a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="pasien_add_fm.php">Proses Diagnosa<span class="sr-only">(current)</span></a></li>
					<li><a href="pasien_add_fm2.php">Demo</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="daftar_penyakit.php">Daftar Penyakit</a></li>
					
				</ul>
				
				<ul class="nav navbar-nav navbar-right">					
					<li><button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#modal-login">Login Administrator</button></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	

	<!-- Modal -->
	<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Login Administrator</h4>
				</div>
				<div class="modal-body">
					<form name="form1" method="post" target="_blank" action="dologin.php">
						<div class="form-group">
							<label>Username :</label>
							<input type="text" class="form-control" id="txtuser">
                            <div id="lbluser" style="display:none;" class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      Username salah..!
                    </div>
						</div>
						<div class="form-group">
							<label>Password : </label>
							<input type="password" class="form-control" id="txtpass">
                            <div id="lblpassword" style="display:none;" class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      Password salah..!
                    </div>
						</div>						
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary" id="btnlogin">Login</button>
				</div></form>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal Daftar</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control">
						</div>						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="button" class="btn btn-primary">Daftar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- akhir modal -->

	<!-- akhir menu navigasi -->

	<div class="container">			
		<!-- membuat jumbotron -->
		<div class="jumbotron">
			<center>			
				<h2>Selamat datang di Sistem Pakar Deteksi Gangguan Gizi Buruk!</h2>
				<p align="justify"><img src="images/Gizi-Buruk(2).jpg" style="float:left; margin:2px 10px 3px 0px; border-radius:3px 0px 0px 3px;">Gizi buruk atau malnutrisi adalah sebuah kondisi serius yang terjadi ketika asupan makanan seseorang tidak sesuai dengan jumlah nutrisi yang dibutuhkan. Gizi buruk juga dapat berarti:<br/>
<p align="justify"><strong>Gizi kurang:</strong> tidak cukup mendapatkan nutrisi. Ini berarti seseorang tidak mencukupi asupan protein, kalori, vitamin, atau mineral yang dibutuhkannya. Efek dari kekurangan asupan ini adalah gizi kurus atau wasting, stunting, dan berat badan kurang.</p>
<p align="justify"><strong>Gizi lebih:</strong> mendapatkan nutrisi tertentu yang berlebihan. Konsumsi protein, lemak atau kalori yang berlebihan juga berimbuh kepada malnutrisi. Pada kondisi ini, yang terjadi adalah berat badan berlebih atau obesitas.</p>
<p align="justify">Gizi buruk bisa mengakibatkan masalah kesehatan yang serius, mulai dari stunting, diabetes, hingga penyakit jantung.

Menurut data Riset Kesehatan Dasar 2018, jumlah balita dengan gizi buruk di Indonesia adalah sebanyak 3,9% dan gizi kurang adalah 13,8%.</p>
</p>
<p align="justify">
Agar dapat mengetahui seorang anak menderita gizi buruk atau tidak, indikator yang digunakan adalah grafik berat badan dan panjang/tinggi badan badan menurut usia. Selain itu, lingkar lengan atas (LILA) juga termasuk ke dalam indikator pemeriksaan klinis gizi buruk. Anak-anak yang mengalami kondisi kekurangan biasanya telah mengalami kekurangan asupan nutrisi dalam jangka waktu yang sangat lama. Menurut Grafik Pertumbuhan Anak (GPA) yang mengacu pada World Health Organization (WHO) atau Organisasi Kesehatan Dunia dan disertai dengan berbagai indikator pendukung, gizi buruk berada dalam kategori tersendiri. Anak dikategorikan mengalami kondisi tersebut jika status gizinya kurang dari 70% nilai median hasil berat badan/tinggi badan.</p>
<p align="justify"><strong>Tujuan Sistem :</strong>Sistem pakar ini digunakan untuk menentukan jenis gangguan gizi buruk yang menyerang pada anak,berdasarkan analisis gejala-gejala klinis yang dialami oleh anak</p>
<p align="justify"><strong>Manfaat Sistem :</strong>Memberikan pengetahuan serta wawasan kepada para ibu mengenai masalah gizi buruk pada anak.</p>
<p align="justify">Informasi yang akan diperoleh berupa informasi jenis-jenis gangguan gizi buruk dan gejala-gejalanya serta solusi dari pakar.</p>
<p>
</p>
<p><a class="btn btn-primary btn-lg" href="pasien_add_fm.php" role="button">Mulai Diagnosa</a></p>
			</center>
		</div>
	<!-- akhir jumbotron --></div>
	<br/>
	<br><br><br><br>
	
	<div class="clearfix"></div>
		
	<nav class="navbar navbar-default" style="bottom: 0;margin: 0">
		<div class="container">	
			<center>
				
			<ul class="nav navbar-nav">
				<li><a href="#">Copyright @ 2020 Rose House Squad. All rights reserved.</a></li>				
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Develop by RH Squad</a></li>									
			</ul>
			</center>		
		</div>
	</nav>
	
</body>
</html>