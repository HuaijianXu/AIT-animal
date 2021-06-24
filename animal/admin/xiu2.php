<!DOCTYPE html>
<html>
    <head>
        <title>修改招领</title>
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
        <div class="nav-links">
            <nav class='navbar navbar-default' style="background-image: linear-gradient(to right,#00cdc1,#F98C93) ">
                <div class='container'>
                    <div class='collapse navbar-collapse'>
                        <ul>
                            <li><div class="dropdown">
                                    <a>管理留言</a>
                                    <div class="dropdown-content">
                                        <a href="admin_add2.php?status=not_rep">未回复</a>
                                        <a href="admin_add2.php?status=replyed">已回复</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="admin_add1.php">发布招领</a></li>
                            <li><a href="admin_product.php">管理招领</a></li>    
                            <li><a href="../login_out.php">退出管理</a></li>
                        </ul>    
                    </div>
                </div>
            </nav>
        </div>
        <!-- //sticky navigation -->
        <?php 
            include 'connect.php';
        ?>
        <div class="box">
            <h3 style=" text-align:center; color:#000; margin-top:20px; margin-bottom:20px; ">修改招领</h3>
            <?php
            $_query = mysqli_query($_conn,"select * from product where id = ".$_GET['id']);
            $_rows = mysqli_fetch_array($_query);
                if ($_GET['action']=='edit'){
                    //设置时区为中国
                    date_default_timezone_set('PRC');
                    //按规定格式获取当前时间
                    $time = date('Ymdhis',time());
                    //重命名图片名为:时间_用户名_图片名
                    $_newfile = $time."_".$_COOKIE['yhm']."_".$_FILES["file"]["name"];
					move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/" . $_newfile);
                    $query= mysqli_query($_conn,"update product set title = '{$_POST['title']}',price = '{$_POST['price']}',pic='{$_newfile}',content= '{$_POST['content']}' where id = ".$_GET['id']) or die(mysqli_error());
                    echo "<script type='text/javascript'>alert('修改成功');window.location.href='admin_product.php';</script>";
                }
            ?>
            <form action="?action=edit&id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data" >
                <table width="500" border="0"  align="center">
                    <tr>
                        <td height="28" style="font-size:18px">标题：</td>
                        <td><input type="text" name="title" value="<?php echo $_rows['title'];?>" /></td>
                    </tr>
                    <tr>
                        <td height="25" style="font-size:18px">发布人：</td>
                        <td> <input type="text" name="price" value="<?php echo $_rows['price'];?>" /></td>
                    </tr>
					<tr>
                        <td height="25"  style="font-size:18px">图片：</td>
                        <td><input type="file" name="file"/> </td>
                    </tr>
                    <tr>
                        <td height="25" style="font-size:18px">内容：</td>
                        <td><textarea name="content" style="width:400px;height:200px;"> <?php echo $_rows['content'];?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center;">
                            <input type="submit" name="submit" value="提交" />
                        </td>
                    </tr>
                </table>
            </form>
            <p>&nbsp;</p>
        </div>
    </body>
</html>
