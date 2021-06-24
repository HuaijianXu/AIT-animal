<!DOCTYPE html>
<html>
    <head>
        <title>管理货物</title>
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
    </head>
    <script src="../js/jquery-2.2.3.min.js"></script>
    <script src="../js/echarts.min.js"></script>
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
                    </div>
                </div>
            </nav>
        </div>
        <!-- //sticky navigation -->
        <?php 
            include 'connect.php';
        ?>
        <div>
            <h3 style=" text-align:center; color:#000; margin-bottom:20px; font-size:24px; font-family:宋体">管理货物</h3>
            <div id="twjs">
                <table class='table table-hover table-striped table-bordered table-sm'>
                    <?php
                        $query1 = mysqli_query($_conn,"select * from goods order by id desc");
                        echo '
                            <tr>
                                <td width="20%">标题</td>  
                                <td>价格</td>
                                <td>图片</td>
                                <td width="40%">简介</td>   
                                <td>状态</td>
                                <td>修改</td>
                                <td>删除</td>
                            </tr>';
                        while($row = mysqli_fetch_array($query1)){
                            echo '
                                <tr>
                                    <td>'.$row['title'].'</td> 
                                    <td>'.$row['price'].'</td>  
                                    <td  width=100px><img src=../goods/'.$row['pic'].' width=100px></td>                                 
                                    <td>'.$row['content'].' </td>
                                     <td>'.$row['status'].'</td> 
                                    <td><a href=xiu1_goods.php?id='.$row['id'].'>修改</a></td>
                                    <td><a href="?action=del&id='.$row['id'].'">删除</a></td>
                                </tr>';
                        }
                    ?>
                </table>
                <?php
                //phpstorm中不显示warning
                error_reporting(0);
                if ($_GET['action']=="del"){
                    $_query = mysqli_query($_conn,"select * from goods where id = ".$_GET['id']);
                    $_rows = mysqli_fetch_array($_query);
                    $query = mysqli_query($_conn,"delete from goods where id= ".$_GET['id']);
                    //删除图片
                    $picname = $_rows['pic'];
                    //获取当前路径
                    $dir= str_replace("/","\\",$_SERVER['DOCUMENT_ROOT']);
                    //拼接图片路径
                    $img_url = $dir."\\"."goods\\".$picname;
                    //执行删除
                    unlink(iconv("utf-8","gb2312",$img_url));
                    $query = mysqli_query($_conn,"delete from goods where id= ".$_GET['id']);
                    echo "<script type='text/javascript'>alert('删除成功');window.location.href='admin_goods.php';</script>";
                }
                ?>
                <p>&nbsp;</p>
            </div>
        </div>
    </body>
</html>