<!DOCTYPE html>
<html>
<head>
	<title>Gizi Buruk | DempsterShafer</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">	
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.contoh1 {font-size:10px; line-height: 10px;}

</style>
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
					<li><a href="pasien_add_fm.php">Proses Diagnosa <span class="sr-only">(current)</span></a></li>
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
					<h4 class="modal-title" id="myModalLabel">Modal Login</h4>
				</div>
				<div class="modal-body">
					<form>
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
					<button type="button" class="btn btn-primary">Login</button>
				</div>
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
				<h2>Masukkan Data Diri Anda</h2>
                <form onSubmit="return validasi(this)" method="post" name="form1" target="_self" action="pasienaddsim2.php">
<table class="tab" width="415" style="border:0px;"  border="0" align="center">
    <tr> 
      <td colspan="2"><div align="center"></div></td>
    </tr>
    <tr> 
      <td><p class="contoh1" style="width: 200px; height: 10px;">Nama</td></p>
      <td><input name="TxtNama" id="TxtNama" type="text" size="35" maxlength="30"><p class="contoh1"></p></td>
    </tr>
    <tr> 
      <td><p class="contoh1" style="width: 200px; height: 10px;">Kelamin</td></p>
      <td> 
      <select name="cbojk" id="cbojk">
      <option value="0" selected="selected">-Jenis Kelamin-</option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Wanita">Wanita</option>
      </select>
      <p class="contoh1"></p>
      </td>
    </tr>
    <tr></tr>
    <tr> 
      <td><p class="contoh1" style="width: 200px; height: 10px;">Umur</td></p> <td><input name="TxtUmur" id="TxtUmur" type="text" size="2" maxlength="3"><p class="contoh1"></p></td>
    </tr>
    <tr> 
      <td width="76"><p class="contoh1" style="width: 200px; height: 10px;">Alamat</td></p>
      <td width="312"> 
      <input name="TxtAlamat" id="TxtAlamat" type="text" size="35" maxlength="60"><p class="contoh1"></p></td>
    </tr>
    <tr></tr>
    <tr>
      <td width="76"><p class="contoh1" style="width: 200px; height: 10px;">Nama Orang Tua</td></p>
      <td width="">
      <input type="text" name="textnamaorangtua" id="textnamaorangtua" size="35" maxlength="25"><p class="contoh1"></p></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" class="btn btn-primary" name="Submit" value="Lanjut">
        <input type="reset" class="btn btn-warning" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form><br/><br/>
			</center>
		</div>
		<!-- akhir jumbotron -->

		<div class="col-sm-6 col-md-3">
	  
		</div>

		<br><br><br>
        
	</div>
	<br/>
	
	
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