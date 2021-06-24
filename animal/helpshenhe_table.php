<!DOCTYPE html>
<html>
<head>
    <title>管理招领</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content=""/>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="stylesheet" href="./css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="./css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" href="./css/owl.carousel.css" type="text/css" media="all" />
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="all" />
</head>
<body background="./images/bj1.jpg">
<!-- sticky navigation -->
<div class="nav-links">
    <nav class='navbar navbar-default' style="background-image: linear-gradient(to right,#00cdc1,#F98C93) ">
        <div class='container'>
            <div class='collapse navbar-collapse'>
                <ul>
                    <li>
                        <a href="index.php">首页</a>
                    </li>
                    <li>
                        <a href="zhaoling.php">招领中心</a>
                    </li>
                    <li>
                        <a href="help.php">救助站</a>
                    </li>
                    <li>
                        <a href="goods.php">好物推荐</a>
                    </li>
                    <li>
                        <a href="baike_1.php">猫狗百科</a>
                    </li>
                    <?php
                    error_reporting(0);
                    if($_COOKIE['power']==1)
                    {
                        echo ' <li>	 <div class="dropdown">
						<a>用户中心</a>
						<div class="dropdown-content">
                                                 <a href="shanchu1.php">编辑招领</a>
                                                <a href="message.php">发布招领</a>
                                                <a href="goodsmanager.php">我的货物</a>
                                                <a href="myhelp.php">救助站信息</a>
                                                <a href="reply_mess.php">消息通知</a>
                                                <a href="xxx.php">修改信息</a>
												<a href="xmm.php">修改密码</a>
                                                </div>
                                               </div>
                                            </li>';
                    }
                    elseif($_COOKIE['power']==2)
                    {
                        echo ' <li>	 <div class="dropdown">
						<a>用户中心</a>
						<div class="dropdown-content">
						                        <a href="goodsupload.php">发布货物</a>
                                                <a href="goodsmanager.php">编辑货物</a>
                                                <a href="reply_mess.php">消息通知</a>
                                                <a href="xxx.php">修改信息</a>
												<a href="xmm.php">修改密码</a>
                                                </div>
                                               </div>
                                            </li>';
                    }
                    elseif($_COOKIE['power']==3)
                    {
                        echo ' <li>	 <div class="dropdown">
						<a>用户中心</a>
						<div class="dropdown-content">
						                        <a href="helpshenhe.php">审核</a>
                                                <a href="reply_mess.php">消息通知</a>
                                                <a href="xxx.php">修改信息</a>
												<a href="xmm.php">修改密码</a>
                                                </div>
                                               </div>
                                            </li>';
                    }
                    ?>
                    <?php
                    if(isset($_COOKIE['yhm']))
                    {
                        echo ' <li style="width:20%"><a href="login_out.php">'. $_COOKIE['yhm'].' 退出</a></li>';
                    }
                    else{
                        echo "
                                    <li><a href=user_login.php>用户登录</a></li>
                                    <li ><a href=reg.php>用户注册</a></li>" ;
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- //sticky navigation -->
<?php
include 'connect.php';
//phpstorm中不显示warning
error_reporting(0);
$id = $_GET['id'];
$status = $_GET['status'];
$query1 = mysqli_query($_conn,"select * from help where id={$id}");
$row = mysqli_fetch_array($query1);
if ($_GET['action']=='dj'){
    if ($status!=-3) {
        echo "<script type='text/javascript'>alert('该信息已审核');history.back();</script>";
        exit;
    }
}
if ($_GET['action']=='ly'){
    if ($status!=0) {
        echo "<script type='text/javascript'>alert('该信息已审核');history.back();</script>";
        exit;
    }
}
if ($_GET['action']=='add'){
    $status = $_POST['status'];
    date_default_timezone_set('PRC');
    //按规定格式获取当前时间
    $time2 = date("Y-m-d h:i:s",time());
    $sql = "update help set status = {$status},newendtime = '{$time2}' where id = {$id}";
    $query2 = mysqli_query($_conn,$sql);
    echo "<script type='text/javascript'>alert('提交成功');window.location.href='helpshenhe.php';</script>";
}
?>
<div>
    <form action="?action=add&id=<?php echo $id?>" method="post" enctype="multipart/form-data">
        <table border="1" align="center">
            <tr align="center">
                <td colspan="2" style="font-size: 30px">审核表</td>
            </tr>
            <?php
            if ($_GET['action']=='dj'||$_GET['action']=='ly'){
                echo '<tr>
                <td rowspan="5"><img src="./help/'.$row['pic'].'" width=200px title="imag-name" /></td>
            </tr>
            <tr>
                <td>标题：'.$row['title'].'</td>
            </tr>
            <tr>
                <td>登记人：'.$row['username'].'</td>
            </tr>
            <tr>
                <td>领养人：'.$row['rusername'].'</td>
            </tr>
            <tr>
                <td>发布时间：'.$row['starttime'].'</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><textarea style="width: 100%;height: 100%">'.$row['content'].'</textarea></td>
            </tr>';
            }
            elseif ($_GET['action']=='jy'){
                echo '<tr>
                <td rowspan="5"><img src="./help/'.$row['pic'].'" width=200px title="imag-name" /></td>
            </tr>
            <tr>
                <td>标题：'.$row['title'].'</td>
            </tr>
            <tr>
                <td>寄养人：'.$row['username'].'</td>
            </tr>
            <tr>
                <td>登记时间：'.$row['starttime'].'</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><textarea style="width: 100%;height: 100%">'.$row['content'].'</textarea></td>
            </tr>';
            }
            ?>

            <tr>
                <?php
                if ($_GET['action']=='ly'){
                    echo '<td colspan="2" align="center">
                    <input type="radio" name="status" value="2">通过
                    <input type="radio" name="status" value="1">不通过
                </td>';
                }
                elseif ($_GET['action']=='dj'||$_GET['action']=='jy'){
                    echo '<td colspan="2" align="center">
                    <input type="radio" name="status" value="3">通过
                    <input type="radio" name="status" value="-2">不通过
                </td>';
                }
                ?>

            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="提交"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>