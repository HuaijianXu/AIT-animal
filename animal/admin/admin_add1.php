<!DOCTYPE html>
<html>
    <head>
        <title>发布招领</title>
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
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="all">
        <link rel="stylesheet" href="../css/font-awesome.css" type="text/css" media="all">
        <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
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
        </style>
    </head>
    <body background="../images/bj1.jpg">
	<!-- sticky navigation -->
        <nav class='navbar navbar-default' style="background-image: linear-gradient(to right,#00cdc1,#F98C93) ">
            <div class='container'>
                <div class='collapse navbar-collapse'>
                    <ul>                     
                        <ul>
                            <li><div class="dropdown">
                                    <a>管理消息</a>
                                    <div class="dropdown-content">
                                        <a href="admin_message.php?kind=talk">查看消息</a>
                                        <a href="admin_message.php?kind=email">查看留言</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="admin_add1.php">发布招领</a></li>
                            <li><a href="admin_product.php">管理招领</a></li>
                            <li><a href="admin_goods.php">管理货物</a></li>
                            <li><a href="usermanager.php">管理用户</a></li>
                            <li><a href="../login_out.php">退出管理</a></li>
                        </ul>  
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
            <h3 style=" text-align:center; color:#000; margin-top:20px; margin-bottom:20px; ">发布招领</h3>
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
                move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/" . $_newfile);
                $query = mysqli_query($_conn,"insert into product (title,price,pic,content,username,kind,place) values ('{$_POST['title']}','{$_POST['price']}','{$_newfile}','{$_POST['content']}','{$_COOKIE['yhm']}','{$_POST['kind']}','{$_POST['place']}')") or die(mysqli_error());
                echo "<script type='text/javascript'>alert('发表成功');window.location.href='admin_product.php';</script>";
            }
            ?>
            <form action="?action=add" method="post" enctype="multipart/form-data" >
                <table width="500" border="0"  align="center">
                    <tr>
                        <td height="28" style="font-size:18px">标题：</td>
                        <td><input type="text" name="title" /></td>
                    </tr>
                    <tr>
                        <td height="25" style="font-size:18px">发布人：</td>
                        <td><input type="text" name="price" /></td>
                    </tr>
                    <tr>
                        <td height="25" style="font-size:18px">类别</td>
                        <td><input type="radio" name="kind" value="丢失">丢失<input type="radio" name="kind" value="招领">招领</td>
                    </tr>
                    <tr>
                        <td height="25" style="font-size:18px">图片：</td>
                        <td><input type="file" name="file" id="file"/></td>
                    </tr>
                    <tr>
                        <td height="25" style="font-size:18px">地区：</td>
                        <td><input type="text" name="place" /></td>
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
            <p>&nbsp;</p>
		</div>
    </body>
</html>
