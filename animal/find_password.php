<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>找回密码</title>
    <link rel="stylesheet" href="css/zcdl.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
    <style>
        input[type=text], input[type=email] {
            width: 100%;
            padding: 9px 15px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 100%;
            background-color: #00cdc1;
            color: white;
            padding: 10px 15px;
            margin: 5px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #F98C93;
        }
        .box{
            width:550px;
            height:430px;
            border-radius: 25px;
            border: 2px solid #00cdc1;
            background:#FFF;
            opacity:0.8;
            margin:40px auto;
        }
    </style>
</head>
<body background="images/bj1.jpg" >

<?php
include 'connect.php';
error_reporting(0)
?>
<div class="box">
    <h3 style=" text-align:center; color:#000; ">找回密码</h3>
    <hr align="center"/><br>
    <?php
    if ($_GET['action']=='reged'){
        $query = mysqli_query($_conn,"select password from yhb where username = '{$_POST['username']}' and email = '{$_POST['email']}'");
        $row = mysqli_fetch_array($query,1);
        if($row){
            echo "<script type='text/javascript'>window.location.href='send_email.php?username={$_POST['username']}&email={$_POST['email']}&password={$row['password']}';</script>";
        }
        else{
            echo "<script type='text/javascript'>alert('信息错误');history.back();</script>";
            exit;
        }
    };
    ?>
    <form action="?action=reged" method="post" name="reg" id="reg">
        <table width="400" border="0"  align="center">
            <tr>
                <td width="100" height="29" style="font-size:18px">用户名: </td>
                <td width="300"> <input type="text" name="username" placeholder="请输入用户名" id="username" required />  </td>
            </tr>
            <tr>
                <td height="29" style="font-size:18px">邮箱 ：</td>
                <td> <input type="email" name="email" id="email" placeholder="请输入注册时的邮箱" required  />密码会发送至该邮箱</td>
            </tr>
            <tr>
                <td height="5"></td>
                <td height="38" colspan="2" style="text-align:center"><input type="submit" class="submit" value="发送"/></td>
            </tr>
            <tr>
                <td height="10"><a href="index.php">返回首页</a></td>
                <td align="right"><a href="user_login.php">前往登录</a></td>
            </tr>
        </table>
    </form>
    <p>&nbsp;</p>
</div>
</body>
</html>
