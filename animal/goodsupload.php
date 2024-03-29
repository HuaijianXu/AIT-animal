﻿<!DOCTYPE html>
<html>
    <head>
        <title>发布货物</title>
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
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <!-- Style-CSS -->
        <!-- //css files -->
        <style>
            input[type=text], input[type=file] {
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
                width:650px;
                height:540px;
                border-radius: 25px;
                border: 2px solid #00cdc1;
                background:#FFF;
                opacity:0.8;
                margin:40px auto;
            }
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
        <?php 
            include 'connect.php';
        ?>
        <div class="box">
            <h3 style=" text-align:center; color:#000; margin-top:20px; margin-bottom:20px; ">发布货物</h3>
            <hr align="center" /><br/>
            <?php
                //phpstorm中不显示warning
                error_reporting(0);
                if ($_GET['action']=='add'){
                    if (empty($_POST['title']) || empty($_POST['content'])||empty($_POST['price']) || empty($_FILES['file']['name'])){
                        echo "<script type='text/javascript'>alert('请填写完整信息');history.back();</script>";
                        exit;
                    }
                    //设置时区为中国
                    date_default_timezone_set('PRC');
                    //按规定格式获取当前时间
                    $time = date('Ymdhis',time());
                    //重命名图片名为时间_用户名_图片名
                    $_newfile = $time."_".$_COOKIE['yhm']."_".$_FILES["file"]["name"];
                    move_uploaded_file($_FILES["file"]["tmp_name"], "./goods/" . $_newfile);
                    $sql = "insert into goods (title,price,pic,content,username,status) values ('{$_POST['title']}','{$_POST['price']}','{$_newfile}','{$_POST['content']}','{$_COOKIE['yhm']}','待出售')";
                    $query = mysqli_query($_conn,$sql);
                    echo "<script type='text/javascript'>alert('发表成功');window.location.href='goodsmanager.php';</script>";
                }
            ?>
            <form action="?action=add" method="post" enctype="multipart/form-data" >
                <table width="500" border="0"  align="center">
                    <tr>
                        <td height="28" style="font-size:18px">标题：</td>
                        <td><input type="text" name="title" /></td>
                    </tr>
                    <tr>
                        <td height="25" style="font-size:18px">价格：</td>
                        <td><input type="text" name="price" /></td>
                    </tr>
                    <tr>
                        <td height="25" style="font-size:18px">图片：</td>
                        <td><input type="file" name="file" id="file"/></td>
                    </tr>
                    <tr>
                        <td height="25" style="font-size:18px"> 内容：</td>
                        <td><textarea name="content" style="width:350px;height:180px;"></textarea></td>
                    </tr>
                    <tr>
					    <td height="10"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center;"><input type="submit" name="submit" value="提交" /></td>
                    </tr>
                </table>
            </form>
		</div>
    </body>
</html>
