<?php
$host="localhost";
$user="root";
$pass="";
$dbName="gizipakar";
$koneksi=mysqli_connect($host,$user,$pass);
$db=mysqli_select_db($koneksi,$dbName)or die("<center color='red'><strong>" .mysqli_error($koneksi)."</strong></center>"
."<center><font color='red'><strong>Koneksi Gagal...! karena database tidak ada</strong></font></center><center><p align='center'>Silahkan buat database dan periksa koneksi databsae </p>
<font color='red'><strong></strong></font></center>
<center><font color='red'><strong></strong></font></center>
<center><font color='red'><strong></strong></font></center>
<center><font color='red'><strong></strong></font></center>"
);
if(!$koneksi){
	echo"<center><font color='red'><strong>Koneksi Gagal...!</strong></font></center>";
	echo"<center><font color='red'><strong>DATABASE $dbName tidak ditemukan...!</strong></font></center>";
	}
?>