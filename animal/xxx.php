<!DOCTYPE html>
<html>
    <head>
        <title>修改信息</title>
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
                height:380px;
                border-radius: 25px;
                border: 2px solid #00cdc1;
                background:#FFF;
                opacity:0.8;
                margin:99px auto;
            }
        </style>
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
       
        <?php 
            include 'connect.php';
        //phpstorm中不显示warning
        error_reporting(0);
        ?>
        <div class="box">
            <h3 style=" text-align:center; color:#000; margin-top:20px; margin-bottom:20px; ">修改信息</h3>
            <?php 
                if ($_GET['action']=='edit'){
					move_uploaded_file($_FILES["file"]["tmp_name"], "./upload/" . $_FILES["file"]["name"]);
					$a=$_COOKIE['yhm'];
                    $query= mysqli_query($_conn,"update yhb set username = '{$_POST['username']}',Gender= '{$_POST['Gender']}',email= '{$_POST['email']}',tel = '{$_POST['tel']}',address = '{$_POST['address']}' where username = '$a'") or die(mysqli_error());
					
                    echo "<script type='text/javascript'>alert('修改成功');window.location.href='user_login.php';</script>";
                }
			    $a=$_COOKIE['yhm'];
                $_query = mysqli_query($_conn,"select * from yhb where username = '$a'");
                $_rows = mysqli_fetch_array($_query);
            ?>
            <form action="?action=edit&" method="post"  >
                <table width="400" border="0"  align="center">
                    <tr>
                        <td width="100" height="29" style="font-size:18px">用户名: </td>
                        <td width="300"> <input type="text" name="username" value="<?php echo $_rows['username'];?>" id="username" required />  </td>
                    </tr>
                    <tr>
                        <td height="35" style="font-size:18px">性别 ：</td>
                        <td> 
                            <input type="text" name="Gender" value="<?php echo $_rows['Gender'];?>"/>
                        </td>
                    </tr>		   
                    <tr>
                        <td height="29" style="font-size:18px">邮箱 ：</td>
                        <td> <input type="email" name="email" id="email" value="<?php echo $_rows['email'];?>" required  />   xxx@xxx.com</td>
                    </tr>
                    <tr>
                        <td height="29" style="font-size:18px">电话<span style="color:red"> *</span> ：</td>
                        <td> <input type="text" name="tel" value="<?php echo $_rows['tel'];?>"/></td>
                    </tr>
                    <tr>
                        <td height="29" style="font-size:18px">地址<span style="color:red"> *</span>：</td>
                        <td> <input type="text" name="address" value="<?php echo $_rows['address'];?>" />  </td>
                    </tr>
                    <tr style="height:15px"></tr>
                    <tr>
					
                        <td colspan="2" style="text-align:center;">
                            <input style="width:150px" type="submit" name="submit" value="提交" />
                        </td>
                    </tr>
               </table>
            </form>
            <p>&nbsp;</p>
        </div>
    </body>
</html>
