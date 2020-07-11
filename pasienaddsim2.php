<?php 
include "admin/koneksi.php";
# Baca variabel Form (If Register Global ON)
$TxtNama 	= $_REQUEST['TxtNama'];
$RbKelamin 	= $_POST['cbojk'];
$TxtUmur	= $_REQUEST['TxtUmur'];
$TxtAlamat 	= $_REQUEST['TxtAlamat'];
$NOIP = $_SERVER['REMOTE_ADDR'];
$namaorangtua=$_POST['textnamaorangtua'];
# Validasi Form
if (trim($TxtNama)=="") {
	include "pasien_add_fm.php";
	echo "Nama belum diisi, ulangi kembali";
}
elseif (trim($TxtUmur)=="") {
	include "pasien_add_fm.php";
	echo "Umur masih kosong, ulangi kembali";
}
elseif (trim($TxtAlamat)=="") {
	include "pasien_add_fm.php";
	echo "Alamat masih kosong, ulangi kembali";
}
else {
    $NOIP = $_SERVER['REMOTE_ADDR'];

	//$sqldel = "DELETE FROM tmp_pasien WHERE noip='$NOIP'";	mysql_query($sqldel, $koneksi);
	
	$sql  = " INSERT INTO tbpasien (nama,kelamin,umur,alamat,noip,tanggal,namaorangtua) 
		 	  VALUES ('$TxtNama','$RbKelamin','$TxtUmur','$TxtAlamat','$NOIP',NOW(),'$namaorangtua')";
	mysqli_query($koneksi,$sql) 
		  or die ("SQL Error 2".mysqli_error($koneksi));
	echo "<meta http-equiv='refresh' content='0; url=konsultasifm2.php'>";
}
?>
	