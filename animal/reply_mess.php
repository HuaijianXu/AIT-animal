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
<?php
include 'connect.php';
//phpstorm中不显示warning
error_reporting(0);
?>
<div>
    <hr align="center"><br>
    <div id="twjs">
        <table border=1px cellpadding="0" cellspacing="0" style=" width:80%; background:#FFF;margin:0 auto;opacity:0.8;">
            <?php
            echo '
                            <tr align="center" height="30px" style="font-size:20px">
                                <td>姓名</td> 
								<td>聊天</td>								
							</tr>';
            $FromUserID = $_COOKIE['uid'];
            $query = mysqli_query($_conn,"select * from message where FromUserID={$FromUserID} or ToUserID={$FromUserID} group by FromUserID,ToUserID order by id desc");
            $arr = array();
            while($row = mysqli_fetch_array($query)){
                if ($row['FromUserID']==$FromUserID){
                    array_push($arr,$row['ToUserID']);
                }
                elseif ($row['ToUserID']==$FromUserID){
                    array_push($arr,$row['FromUserID']);
                }
                $arr = array_unique($arr);
            }
            for ($i=0;$i<sizeof($arr);$i++){
                $query2 = mysqli_query($_conn,"select * from yhb where id = {$arr[$i]}");
                $row = mysqli_fetch_array($query2);
                echo '
                            <tr align="center" height="35px">                   
                                <td>'.$row['username'].'</td>                               
                                <td><a href=talk.php?ToUserID='.$row['id'].'>聊天</a></td>
                            </tr>';
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>