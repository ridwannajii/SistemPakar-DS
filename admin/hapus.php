<?php
include "koneksi.php";
$aksi=$_GET['aksi'];
$data_hapus=$_GET['data_hapus'];
// hapus Penyakit
if ($aksi=="penyakit"){
	$sql="DELETE FROM tb_penyakit WHERE id='$data_hapus'";
	$result=mysqli_query($koneksi,$sql)or die (mysqli_error($koneksi));
	//jika berhasil di hapus
	if ($result){
		echo "sukses";
	}else{
		echo "gagal";
	}
}
// hapus Gejala
if ($aksi=="gejala"){
	$sql="DELETE FROM tb_gejala WHERE id='$data_hapus'";
	$result=mysqli_query($koneksi,$sql)or die (mysqli_error());
	//jika berhasil di hapus
	if ($result){
		echo "sukses";
	}else{
		echo "gagal";
	}
}
// hapus Hasil
if ($aksi=="hasil"){
	$sql="DELETE FROM   tb_hasil WHERE idpasien='$data_hapus'";
	$result=mysqli_query($koneksi,$sql)or die (mysqli_error($koneksi));
	//jika berhasil di hapus
	if ($result){
		echo "sukses";
	}else{
		echo "gagal";
	}
}
// hapus desa
if ($aksi=="umkm"){
	$sql="DELETE FROM   tb_umkm WHERE idumkm='$data_hapus'";
	$sqlHapusLokasi="DELETE FROM tb_lokasi WHERE idumkm='$data_hapus' ";
	$result=mysqli_query($koneksi,$sql)or die (mysqli_error($koneksi));
	$resulHapusLokasi=mysqli_query($koneksi,$sqlHapusLokasi) or die (mysqli_error($koneksi));
	//jika berhasil di hapus
	if ($result){
		echo "sukses";
	}else{
		echo "gagal";
	}
}
// hapus kelompok
if ($aksi=="kelompok"){
	$sql="DELETE FROM tbkelompok WHERE kd_kelompok='$data_hapus'";
	$result=mysqli_query($koneksi,$sql)or die (mysqli_error($koneksi));
	//jika berhasil di hapus
	if ($result){
		echo "sukses";
	}else{
		echo "gagal";
	}
}
// hapus lokasi
if ($aksi=="anggota"){
	$sql="DELETE FROM tb_anggota WHERE idanggota='$data_hapus'";
	$result=mysqli_query($koneksi,$sql)or die (mysqli_error($koneksi));
	//jika berhasil di hapus
	if ($result){
		echo "sukses";
	}else{
		echo "gagal";
	}
}
// hapus lokasi
if ($aksi=="kegiatan"){
	$sql="DELETE FROM tbkegiatan WHERE id_kegiatan='$data_hapus'";
	$result=mysqli_query($koneksi,$sql)or die (mysqli_error($koneksi));
	//jika berhasil di hapus
	if ($result){
		echo "sukses";
	}else{
		echo "gagal";
	}
}
// hapus lokasi
if ($aksi=="lokasi"){
	$id_lokasi=$_GET['data_hapus']; $idumkm=$_GET['idumkm'];
	$sql="DELETE FROM tb_lokasi WHERE id_lokasi='$id_lokasi'";
	$sql2="DELETE FROM tb_umkm WHERE idumkm='$idumkm'";
	$result=mysqli_query($sql)or die (mysqli_error());
	$result2=mysqli_query($sql2)or die(mysqli_error());
	//jika berhasil di hapus
	if ($result2){
		echo "sukses";
	}else{
		echo "gagal";
	}
}
?>