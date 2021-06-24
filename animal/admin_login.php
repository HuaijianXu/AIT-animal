<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>管理登录</title>
        <link rel="stylesheet" href="css/zcdl.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
        <style>
            input[type=text], input[type=password] {
                width: 100%;
                padding: 9px 15px;
                margin: 5px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type=submit],input[type=reset] {
                width: 40%;
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
                border-radius: 25px;
                border: 2px solid #00cdc1;
                width:450px;
                height:320px;
                background:#FFF;
                opacity:0.8;
                margin:100px auto;
            }
        </style>
    </head>
    <body background="images/bj1.jpg" >
        <nav class='navbar navbar-default' style="background-image: linear-gradient(to right,#00cdc1,#F98C93) ">
            <div class='container'>             
                <ul>
                    <li><a href="index.php">首页</a></li>
                    <li><a href="zhaoling.php">招领中心</a></li>    
                    <li><a href="baike_1.php">猫狗百科</a></li>  
					<?php
                                if(isset($_COOKIE['yhm']))
                                {
                                    echo ' <li><a href="message.php">用户中心</a></li>';
                                }
                                else{
                                    echo ' <li><a href="user_login.php" >管理登录</a></li>';
								}
                            ?>
                    <?php
                        if(isset($_COOKIE['yhm']))
                        {
                            echo ' <li><a href="message.php" >用户中心</a></li>';
                            echo ' <li><a href="login_out.php">'. $_COOKIE['yhm'].' 退出</a>';
                        }
                        else{
                            echo "
                                <li><a href=user_login.php>用户登录</a></li>
                                <li ><a href=reg.php>用户注册</a></li>" ;
                        }
                    ?>    
                   
                </ul>
            </div>
        </nav>
        <?php  
            include 'connect.php';
        ?>
        <div class="box">
            <h3 style=" text-align:center; color:#000; ">管理登录</h3>
            <hr align="center" / ><br />
            <form id="form2" name="form1" method="post" action="adminlogin1.php?action=login" >
                <table width="400" border="0" align="center">
                    <tr>
                        <td height="30" style="font-size:18px">用户名： </td>
                        <td><input name="username" type="text" /></td>
                    </tr>
                    <tr>
                        <td height="30" style="font-size:18px">密码：</td>
                        <td><input name="password" type="password" id="password"/></td>
                        <td><img src="images/eye.jpg" width="30px" height="40px" onclick="change()"/></td>
                    </tr>
                    <tr>
                        <td height="15"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="35">&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;<input type="submit" value="登录"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="重置"/></td>
                    </tr>
                </table>
            </form>
            <p>&nbsp;</p>
        </div>
    </body>
<script>
    // 设置明文暗文显示密码
    function change() {
        var pass = document.getElementById('password');
        if (pass.getAttribute('type')=='password')
            pass.setAttribute('type','text');
        else
            pass.setAttribute('type','password');
    }
</script>
</html>
