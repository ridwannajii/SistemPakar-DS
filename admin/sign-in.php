<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>PakarPadi|DempsterShafer</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
<!-- 
Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
//alert('asdkfj');
	var namauser;
	var password;
	$("#txtuser").val("");
	$("#txtpass").val("");
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
	//$("#status").show();
	datanya = "&namauser="+namauser+"&password="+password;
	$.ajax({
		url: "cekuser.php",
		data: datanya,
		cache: false,
		success: function(msg){
			alert(msg);
			if (msg=="usersalah"){
				//alert("User salah..");
				$("#lbluser").show();
				$("#txtuser").focus();
				//$("#status").hide();
				return false;
				exit();
				}
			if (msg=="passwordsalah"){
				//alert("Password Salah..!");
				$("#lbluser").hide();
				$("#lblpassword").show();
				//$("#status").hide();
				return false;
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
  <div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Dashboard - Admin Template</h1></div>
      </div>   
    </div>
    <div class="template-page-wrapper">
      <form class="form-horizontal templatemo-signin-form" id="form1" role="form" method="post" action="dologin.php" >
        <div class="form-group">
          <div class="col-md-12">
            <label for="username" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtuser" placeholder="Username">
            </div>
            <div id="lbluser" style="display:none;" class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      Username salah..!
                    </div>
          </div>              
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="txtpass" placeholder="Password">
            </div>
            <div id="lblpassword" style="display:none;" class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      Password salah..!
                    </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" value="Sign in" id="btnlogin" class="btn btn-default">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>