<?php include "koneksi.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Data Rule</title>
<link rel="stylesheet" type="text/css" href="../jquery-ui.css" />
<script type="text/javascript" src="../jquery-1.10.2.js"></script>
<script type="text/javascript" src="../jquery-ui.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('div.TxtKdPenyakit option[value="<?php echo $_GET['kdpenyakit'];?>').prop("selected", true);
	$('TxtKdPenyakit').val("<?php echo $_GET['kdpenyakit'];?>");
	
	var gejala2="1";
	if(gejala2=="0"){ $("#gejala2").prop('checked', false);}else{ $("#gejala2").prop('checked', true);}
	//jns_tanaman_sbl
	 <?php
		$kd_penyakit=$_GET['kdpenyakit'];
        $query_G=mysqli_query($koneksi,"SELECT * FROM tbrule WHERE kd_penyakit='$kd_penyakit' ");
		while($data_G=mysqli_fetch_array($query_G)){
			//echo $data_G['kd_gejala'] ."<br>";
		?>
		var gejala<?php echo $data_G['kd_gejala'];?>;
		gejala<?php echo $data_G['kd_gejala'];?>="<?php echo $data_G['kd_gejala'];?>";
		//alert(gejala<?php echo $data_G['kd_gejala'];?>);
		if(gejala<?php echo $data_G['kd_gejala'];?>=="0"){ $("#gejala[<?php echo $data_G['kd_gejala'];?>]").prop('checked', false);}else{ $("#gejala[<?php echo $data_G['kd_gejala'];?>]").prop('checked', true);}
		<?php } ?>
});
function centang(){
	alert("tes");
	}
function kembali(){
	window.location="haladmin.php?top=basis_pengetahuan.php";
	}

</script>
</head>
<body>
<form id="form1" name="form1" method="post" action="update_kaidah_produksi.php" enctype="multipart/form-data"><div>
  <table class="tab" width="650" border="0" align="center" cellpadding="4" cellspacing="1" bordercolor="#F0F0F0" bgcolor="#CCCC99">
      <tr bgcolor="#FFFFFF">
        <td style="background:linear-gradient(to top, #0CC, #09C);">Kode Rule : <?php echo $_GET['kdpenyakit'];?></td>
        <td style="background:linear-gradient(to top, #0CC, #09C);"><strong>Edit Data Basis Pengetahuan</strong></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td colspan="2"><ul style="list-style:none;"><strong>
          
          IF</strong> <?php
	$query=mysqli_query($koneksi,"SELECT * FROM tb_gejala ORDER BY id ASC") or die("Query Error..!" .mysqli_error);
	while ($row=mysqli_fetch_array($query)){
	//mencari data gejala yang di edit
	$kd_penyakit=$_GET['kdpenyakit'];
	$kd_gejala=$row['id'];
		$kueri = mysqli_query ($koneksi,"SELECT * FROM tb_rules WHERE id_problem='$kd_penyakit' AND id_evidence='$kd_gejala' ORDER BY id_evidence desc ");
		$edit = mysqli_fetch_array($kueri);
		$checked = explode(', ', $edit['id_evidence']);
	//#end data gejala
	?>
    	<li><input type="checkbox" name="gejala[]" id="gejala" value="<?php echo $row['id'];?>" <?php in_array ($row['id'], $checked) ? print "checked" : "";  ?>>
    	<?php echo $row['kdgejala'] ."<strong>|&nbsp;</strong>".$row['gejala'];?><strong>&nbsp;&nbsp;AND</strong></li>
		 <?php } ?></ul>
         
         <strong>&nbsp;&nbsp;THEN
		 <div class="TxtKdPenyakit">
         	   <?php 
	$sqlp = "SELECT * FROM tb_penyakit WHERE id='$kd_penyakit' ";
	$qryp = mysqli_query($koneksi,$sqlp)or die ("SQL Error: ".mysqli_error());
	while ($datap=mysqli_fetch_array($qryp)) {
		echo "$datap[id]&nbsp;|&nbsp;$datap[nama_penyakit]";
	}
  ?><input type="hidden" name="TxtKdPenyakit" value="<?php echo $_GET['kdpenyakit'];?>" /></div>
	    </strong></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td> <a href="../admin/basis_pengetahuan.php"><input type="button" name="batal" id="batal" value="Batal" /></a><input type="submit" name="Submit" value="Update Rule" /></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>