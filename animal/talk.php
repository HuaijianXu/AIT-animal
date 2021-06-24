<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title></title>
</head>
<style>
    .item {
        display: flex;
        margin-bottom: 10px;
    }

    .left {
        flex-direction: row;
    }

    .right {
        flex-direction: row-reverse;
    }

    .right .message {
        margin-right: 10px;
    }
    .left .message{
        margin-left: 10px;
    }

    .header-img {
        width: 42px;
        height: 42px;
        border-radius: 100px;
    }

    .message_left{
        border-radius: 10px;
        display: flex;
        background: #efefef;
        min-height: 25px;
        padding: 9px 10px;
        align-items: center;
        color: #222121;
    }
    .message_right{
        border-radius: 10px;
        display: flex;
        background: #50c5fa;
        min-height: 25px;
        padding: 9px 10px;
        align-items: center;
        color: #222121;
    }

    .input-box {
        bottom: 0px;
        left: 0;
        right: 0;
        display: flex;
        padding: 4px 6px;
        box-sizing: border-box;
    }

    .input-box input {
        flex: 1;
        border-radius: 10px;
        border: 1px #cecece solid;
        padding: 3px 4px;
        outline: none;
    }

    .input-box button {
        width: 80px;
        background: #2196F4;
        border-radius: 21px;
        border: 1px #fffa solid;
        color: #ffffff;
        margin: 0px 6px;
        outline: none;
    }
    button:active{}

    .chart-timer{
        text-align: center;
        color: #616161;
        font-size: 13px;
    }
</style>
<body>
<?php
    include 'connect.php';
    if(isset($_COOKIE['yhm'])) {
        $FromUserID = $_COOKIE['uid'];
        $ToUserID = $_GET['ToUserID'];
        $query1 = mysqli_query($_conn," select * from message where FromUserID= '{$FromUserID}' and ToUserID = '{$ToUserID}' or FromUserID= '{$ToUserID}' and ToUserID = '{$FromUserID}'");
    }
    else {
        echo "<script type='text/javascript'>alert('请先登录');window.location.href='user_login.php';</script>";
    }
    ?>
<div class="box">
    <a href="index.php">返回首页</a>
<?php
    $time = '';
    while($row = mysqli_fetch_array($query1)){
        if ($row["time"]!=$time){
            echo
                '<div class="chart-timer">
                '.$row["time"].'</span>
             </div>';
            $time = $row['time'];
        }
        if ($row['FromUserID']==$FromUserID){
            echo
                '<div class="item right">
                    <img class="header-img" src="images/me.jpg" />
                    <span class="message_right">'.$row["content"].'</span>
                </div>';
        }
        elseif($row['FromUserID']==$ToUserID){
            echo
                '<div class="item left">
                    <img class="header-img" src="images/you.jpg" />
                    <span class="message_left">'.$row["content"].'</span>
                </div>';
        }
    }
?>
</div>
<form action="talk_ok.php" method="get">
    <div class="input-box">
        <input type="text" name="content"/>
        <input type="hidden" name="ToUserID" value="<?php echo $ToUserID?>"/>
        <button type="submit">发送</button>
    </div>
</form>
</body>
</html>