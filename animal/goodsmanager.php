<!DOCTYPE html>
<html>
<head>
    <title>编辑招领</title>
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
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all" />
    <!-- Owl-Carousel-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- web fonts -->
    <link href="http://fonts.googleapis.com/css?family=Molle:400i&amp;subset=latin-ext" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
          rel="stylesheet">
    <!-- //web fonts -->
    <!-- //css files -->
    <style>
        body{
            background-attachment: fixed;
            background-image: url("images/bj1.jpg");
            width:100%;
            height:100%;
            background-position: center center;
            background-repeat:no-repeat;
            background-size:cover;
        }
    </style>
</head>
<body>
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
                    if (!isset($_COOKIE['yhm'])){
                        echo "<script type='text/javascript'>alert('请先登录');window.location.href='user_login.php';</script>";
                    }
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
?>
<div>
    <h3 style=" text-align:center; color:#000;margin-top:20px; margin-bottom:20px; font-size:28px; font-family:宋体">管理商品</h3>
    <hr align="center"><br><br>
    <div id="twjs">
        <table border=1px cellpadding="0" cellspacing="0" style=" width:70%; text-align:center;margin:0 auto; background:#FFF; opacity:0.8" >
            <?php
            $query1 = mysqli_query($_conn," select * from goods where username= '{$_COOKIE['yhm']}' or buyer='{$_COOKIE['yhm']}'");
            echo '
                            <tr height="30px">
                                <td>标题</td>  
                                <td>价格</td>
                                <td>图片</td> 
                                <td>简介</td>
                                <td>状态</td>  
                            </tr>';
            while($row = mysqli_fetch_array($query1)){
                echo '
                                <tr>
                                    <td>'.$row['title'].'</td> 
                                    <td>'.$row['price'].'</td>  
                                    <td  width=100px><img src=./goods/'.$row['pic'].' width=100px></td>  
                                    <td>'.$row['content'].' </td>
                                    <td>'.$row['status'].' </td>
                                </tr>';
            }
            ?>
        </table>
        <?php
        if ($_GET['action']=="del"){
            $_query = mysqli_query($_conn,"select * from goods where id = ".$_GET['id']);
            $_rows = mysqli_fetch_array($_query);
            $query = mysqli_query($_conn,"delete from goods  where id= ".$_GET['id']);
            //删除图片
            $picname = $_rows['pic'];
            //获取当前路径
            $dir= str_replace("/","\\",$_SERVER['DOCUMENT_ROOT']);
            //拼接图片路径
            $img_url = $dir."\\"."goods\\".$picname;
            //执行删除
            unlink(iconv("utf-8","gb2312",$img_url));
            echo "<script type='text/javascript'>alert('删除成功');window.location.href='goodsmanager.php';</script>";
        }
        ?>
        <p>&nbsp;</p>
    </div>
</div>
</body>
</html>