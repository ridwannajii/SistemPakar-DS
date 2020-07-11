<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Penyakit | admin </title>
<link href="/image/aq.JPG" rel='shortcut icon'>
<style>
<!--
body
{
background-image:url(/image/background.jpg);
background-repeat:no-repeat;
background-attachment:fixed;
}
</style>
</head>
<body>
</body>
</html>
<?php
include "koneksi.php" ;
$kdpenyakit=$_POST['kdpenyakit'];
$penyakit=$_POST['in_penyakit'];
$definisi=$_POST['in_definisi'];
$solusi =$_POST['in_solusi'];
$sql = "UPDATE tb_penyakit SET nama_penyakit='$penyakit',definisi='$definisi', solusi='$solusi' WHERE id='$kdpenyakit'";
$result=mysqli_query($koneksi,$sql)or die ("SQL Error".mysqli_error($koneksi));
if($result){
		echo "<center>Data Telah Berhasil Diubah</center>";
		echo "<center><a href='../admin/penyakit.php'>OK</a></center>";
	}else{
		echo "<center><font color='#ff0000'>Error update</font></center>";
		echo "<center><a href='../admin/penyakit.php'>Kembali</a></center>";
		}
?>