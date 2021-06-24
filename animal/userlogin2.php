<?php 
ob_start();
include 'connect.php';

if ($_GET['action']=='login'){
 	$query = mysqli_query($_conn,"select * from yhb where username = '{$_POST['username']}' and  password = '{$_POST['password']}'");
	if (mysqli_num_rows($query)<1){
 		echo "<script type='text/javascript'>alert('登录失败!');history.back();</script>";
 	}
  	else{
  		setcookie('yhm',$_POST['username']);
        $row = mysqli_fetch_array($query);
        setcookie('uid',$row['id']);
        setcookie('power',$row['power']);
  		if ($row['power']==0){
            echo "<script type='text/javascript'>alert('登录成功');window.location.href='admin/admin_message.php?kind=talk';</script>";
        }
  		else{
            echo "<script type='text/javascript'>alert('登录成功');window.location.href='index.php';</script>";
        }
  	}
}
?>