<?php
include "koneksi.php";
//--- deklarasi variabel ---
$namauser=$_GET['namauser'];
$password=$_GET['password'];
//-------------------------
$sql="SELECT * FROM login WHERE username='$namauser'";
$result=mysqli_query($koneksi,$sql);
$baris=mysqli_fetch_array($result);
	//-- cek keadaan namauser
	if(!$baris){
	echo"usersalah";
	//header("location: login.php?usr=error&pass=0&bag=pencari");
	}else{
	//-- cek password
	if ($password!=$baris['password']){
	//echo"passwordsalah";
	//header("location: login.php?usr=0&pass=error&bag=pencari");
		}else{
		echo"sukses";
		}
	}
?>