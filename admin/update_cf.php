<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Update Nilai CF Gejala</title>
</head>
<body>
<?php
include "koneksi.php";
$kd_gejala=$_GET['id_evidence'];
$kd_penyakit=$_GET['id_problem'];
$cf=$_POST['txtCF'];
	// jika data nol maka simpan data
	$perintah="UPDATE tb_rules SET cf='$cf' WHERE id_evidence='$kd_gejala' AND id_problem='$kd_penyakit' ";
	//$perintah2=mysqli_query("UPDATE tbrule SET md='$NilaiMD' WHERE kd_gejala='$kd_gejala' ");
	$berhasil=mysqli_query($koneksi,$perintah) or die (" Data tidak masuk database / data telah ada ".mysqli_error($koneksi));
	if ($berhasil){
		echo "<center><b>Data Berhasil Disimpan </b></center>";
		echo "<center><a href='../admin/basis_pengetahuan.php'>OK</a></center>";
		}else{
		echo "<center><font color='#ff0000'><strong>Penyimpanan Gagal</strong></font></center><br>";
		echo "<center><a href='../admin/basis_pengetahuan.php'>Kembali</a></center>";
		}

?>
</body>
</html>
  
