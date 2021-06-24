<?php
include 'connect.php';
    $content = $_GET['content'];
    $FromUserID = $_COOKIE['uid'];
    $ToUserID = $_GET['ToUserID'];
    if ($content!=''){
        //设置时区为中国
        date_default_timezone_set('PRC');
        //按规定格式获取当前时间
        $time = date("Y-m-d",time());
        $sql = "insert into message (FromUserID,ToUserID,content,time) values ({$FromUserID},{$ToUserID},'{$content}','{$time}')";
        $query = mysqli_query($_conn,$sql);
        echo "<script type='text/javascript'>self.location=document.referrer;</script>";
    }
    elseif($content==''){
        echo "<script type='text/javascript'>alert('消息不能为空');history.back(-1)</script>";
}
?>