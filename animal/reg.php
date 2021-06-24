<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>用户注册</title>
        <link rel="stylesheet" href="css/zcdl.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
        <script src="js/jquery-2.2.3.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/distpicker.data.js"></script>
        <script src="js/distpicker.js"></script>
        <script src="js/main.js"></script>
        <style>
            input[type=text], input[type=password],input[type=email] {
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
                height:640px;
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
            <h4 style=" text-align:center; color:#000; ">用户注册</h4>
            <hr align="center"/><br>
            <?php 
                if ($_GET['action']=='reged'){ 
                    $_clean = array();
                    $_clean['username'] = _check_username($_POST['username'],2,20);
                    $_clean['password'] = _check_password($_POST['password'],$_POST['repassword'],6);
                    $query = mysqli_query($_conn,"select username from yhb where username = '{$_clean['username']}'");
                    if(mysqli_fetch_array($query,1)){
                        echo "<script type='text/javascript'>alert('不好意思！您输入的用户名已经被注册');history.back();</script>";	
                        exit;
                    };
                    //判断用户注册信息有效
                    // 在英文单词里就是用户的意思 在php语法里也是用户的意思
                    $sql = "insert into yhb (username,password,tel,email,province,city,place,Gender,power,num) values ('{$_clean['username']}','{$_clean['password']}','{$_POST['tel']}','{$_POST['email']}','{$_POST['province']}','{$_POST['city']}','{$_POST['place']}','{$_POST['Gender']}',{$_POST['power']},10)";
                    echo $sql;
                    mysqli_query($_conn,$sql);
                    //echo "<script type='text/javascript'>alert('注册成功');window.location.href='user_login.php';</script>";
                };
            ?>
            <form action="?action=reged" method="post" name="reg" id="reg" >
                <table width="400" border="0"  align="center">
                    <tr>
                        <td width="100" height="29" style="font-size:18px">用户名: </td>
                        <td width="300"> <input type="text" name="username" placeholder="请输入用户名" id="username" required />  </td>
                    </tr>
                    <tr>
                        <td height="35" style="font-size:18px">性别 ：</td>
                        <td> 
                            <table width="200">           
                                <tr>
                                    <td><label><input type="radio" name="Gender" value="女" id="RadioGroup1_0" />美女</label></td>   
                                    <td><label><input type="radio" name="Gender" value="男" id="RadioGroup1_1" />帅哥</label></td>      
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td height="35" style="font-size:18px">注册类别 ：</td>
                        <td>
                            <table width="200">
                                <tr>
                                    <td><label><input type="radio" name="power" value="1" id="RadioGroup2_0" />普通用户</label></td>
                                    <td><label><input type="radio" name="power" value="2" id="RadioGroup2_1" />商家</label></td>
                                    <td><label><input type="radio" name="power" value="3" id="RadioGroup2_2" />救助站</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td height="28" style="font-size:18px">密码: </td>
                        <td><input type="password" name="password" placeholder="请输入密码" id="password" required />   不少于6位数字</td>
                    </tr>
                    <tr>
                        <td height="27" style="font-size:18px">确认密码:</td>
                        <td><input type="password" name="repassword" placeholder="请确认密码" id="repassword" required />   不少于6位数字</td>
                    </tr>
                    <tr>
                        <td height="29" style="font-size:18px">邮箱 ：</td>
                        <td> <input type="email" name="email" id="email" placeholder="请输入邮箱地址" required  />   xxx@xxx.com</td>
                    </tr>
                    <tr>
                        <td height="29" style="font-size:18px">电话<span style="color:red"> *</span> ：</td>
                        <td> <input type="text" name="tel"/></td>
                    </tr>
                    <tr>
                        <td height="25" style="font-size:18px">省市</td>
                        <td data-toggle="distpicker">
                            <select name="province"></select>
                            <select name="city"></select>
                            <select name="place"></select>
                        </td>
                    </tr>
                    <tr>
                        <td height="15"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="5"></td>
                        <td height="38" colspan="2" style="text-align:center"><input type="submit" class="submit" value="提交"/></td>
                    </tr>
					<tr>
                        <td height="15"></td>
                        <td></td>
                        </tr>
					 <tr>
                        <td height="10"><a href="index.php">返回首页</a></td>
                        <td align="right"><a href="user_login.php">已有账号？立即登录</a></td>
                    </tr>
                </table>
            </form>
            <p>&nbsp;</p>
		</div>
    </body>
</html>
