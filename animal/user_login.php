<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"; />
        <title>用户登录</title>
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
                width:450px;
                height:320px;
                border-radius: 25px;
                border: 2px solid #00cdc1;
                background:#FFF;
                opacity:0.8;
                margin:100px auto;
            }
        </style>
    </head>
    <body background="images/bj1.jpg" >
       
        <?php
            include 'connect.php';
        ?>
        <div class="box">
        <h3 style=" text-align:center; color:#000;">用户登录</h3>
        <hr align="center"/><br />
            <form id="form1" name="form1" method="post" action="userlogin2.php?action=login">
                <table width="400" border="0" align="center">
                    <tr>
                        <td height="30" align="center" style="font-size:18px">用户名：</td>
                        <td><input name="username" type="text" /></td>
                    </tr>
                    <tr>
                        <td height="30" align="center" style="font-size:18px">密码：</td>
                        <td><input name="password" type="password" id="password"/></td>
                        <td><img src="images/eye.jpg" width="30px" height="40px" onclick="change()"/></td>
                    </tr>
                    <tr>
                        <td height="15"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="登录"/></td>
                        <td><a href="find_password.php">找回密码</a></td>
                    </tr>
                    <tr>
                        <td height="10"></td>
                        <td></td>
                        </tr>
                    <tr>
                        <td height="10"><a href="index.php">返回首页</a></td>
                        <td align="right"><a href="reg.php">没有账号？立即注册</a></td>
                    </tr>
                </table>
			</form>
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
