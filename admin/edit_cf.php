<html>
<head>
<title>Edit Nilai CF Pada Gejala</title>
<style type="text/css">
p {text-indent:0pt;}
</style>
<script type="text/javascript">
function konfirmasi(id_rule){
	var kd_hapus=id_rule;
	var url_str;
	url_str="hapus_relasi.php?id_rule="+kd_hapus;
	var r=confirm("Yakin ingin menghapus data..?"+kd_hapus);
	if (r==true){   
		window.location=url_str;
		}else{
			//alert("no");
			}
	}
</script>
</head>
<body>
<h2>Data Nilai | Basis Pengetahuan</h2><hr>
<div class="konten">
<?php
include "koneksi.php";
$kd_gejala=$_GET['id_evidence'];
$kdpenyakit=$_GET['id_problem']; $queryP=mysqli_query($koneksi,"SELECT * FROM tb_penyakit WHERE id='$kdpenyakit' "); $dataP=mysqli_fetch_array($queryP); echo $dataP['kdpenyakit']."|".$dataP['nama_penyakit'];
?>
<form id="form1" name="form1" method="post" action="update_cf.php?id_problem=<?php echo $_GET['id_problem'];?>&id_evidence=<?php echo $_GET['id_evidence'];?>" enctype="multipart/form-data"><div>
  
  </div>

<table width="700" border="0" cellpadding="4" cellspacing="1" bordercolor="#F0F0F0" >
  <tr style="background:linear-gradient(to top, #9C0, #CF0);">
    <td width="61"><strong>KD Gejala</strong></td>
    <td width="725"><strong>Nama Gejala</strong><span style="float:right; margin-right:25px;"><strong></strong></span></td>
    <td width="88" align="center">CF</td>
    <td width="88" align="center">Action</td>
    </tr>
    <?php
    $query=mysqli_query($koneksi," SELECT * FROM tb_gejala WHERE id='$_GET[id_evidence]' ")or die(mysqli_error());
	while($row=mysqli_fetch_array($query)){
	?>
  <tr bgcolor="#FFFFFF" bordercolor="#333333">
    <td valign="top"><?php echo $row['kdgejala'];?></td>
    <td><?php echo $row['gejala'];?>
    <td style="background:linear-gradient(to top, #9C0, #CF0);"><input name="txtCF" type="text" size="2" value="<?php echo $_GET['cf'];?>"></td>
    <td style="background:linear-gradient(to top, #9C0, #CF0);"><input type="submit" value="Update Nilai"></td>
    </tr>
  <?php } ?>
</table></form>
</div>
</body>
</html>