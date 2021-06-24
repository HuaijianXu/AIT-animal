<?php 
ob_start();
include 'connect.php';

if ($_GET['action']=='login'){
 	$result = mysqli_query($_conn,"select * from admin where username='{$_POST['username']}' and password='{$_POST['password']}'");
 	if (mysqli_num_rows($result)<1){
 		echo "<script type='text/javascript'>alert('登录失败!');history.back();</script>";
 	}
  	else{
  	                setcookie('yhm',$_POST['username']);
  		echo "<script type='text/javascript'>alert('登录成功');window.location.href='admin/admin_add2.php?status=not_rep';</script>";
  	}
}
?>
