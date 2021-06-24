<?php
include 'connect.php';
if (!isset($_COOKIE['yhm'])){
    echo "<script type='text/javascript'>alert('请先登录');window.location.href='user_login.php';</script>";
}
else{
    $sql = "update goods set status = '买家已购买',buyer = '{$_COOKIE['yhm']}' where id = {$_GET['id']}";
    $query= mysqli_query($_conn,$sql);
    echo "<script type='text/javascript'>alert('购买成功');window.location.href='goodsmanager.php';</script>";
}


