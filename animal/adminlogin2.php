<?php 
ob_start();
include 'connect.php';

if ($_GET['action']=='login'){
 	$query = mysqli_query($_conn,"select * from yhb where username like '{$_POST['username']}' and  password like '{$_POST['password']}'");
	if (mysqli_num_rows($query)<1){
 		echo "<script type='text/javascript'>alert('登录失败!');history.back();</script>";
 	}
  	else{
  		setcookie('yhm',$_POST['username']);
  		echo "<script type='text/javascript'>alert('登录成功');window.location.href='index.php';</script>"; 
		
  	}
}
?>