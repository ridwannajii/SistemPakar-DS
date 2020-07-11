<?php
$namauser=$_POST['txtuser'];
$password=$_POST['txtpass'];
$id=$namauser;
		session_start();
		$_SESSION['user_forum_pdam']=$namauser;
		$_SESSION['agent_forum_pdam']=md5($_SERVER['HTTP_USER_AGENT']);
		header("location: index.php");
?>