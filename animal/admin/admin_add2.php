<!DOCTYPE html>
<html>
    <head>
        <title>管理留言</title>
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
        <script src="../js/bootstrap.js"></script>
        <script src="../js/jquery-2.2.3.min.js"></script>
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
        //phpstorm中不显示warning
        error_reporting(0);
        ?>
        <div>
            <hr align="center"><br>
            <div id="twjs">
                <table class='table table-hover table-striped table-bordered table-sm'>
                    <?php
                        if ($_GET['action']=="del"){
                            $query = mysqli_query($_conn,"delete from send where id= ".$_GET['id']);
                            echo "<script type='text/javascript'>alert
                            ('删除成功');</script>";
                        }
//                        未回复的留言
                        if ($_GET['status']=="not_rep"){
                            $query = mysqli_query($_conn,"select * from send where status=0 order by id desc");
                            echo '
                            <tr align="center" height="30px" style="font-size:20px">
                                <td>姓名</td> 
								<td>邮箱</td>
								<td>主题</td>
								<td>电话</td>
								<td>详细留言</td>
								<td>回复</td>
								<td>删除</td>
							</tr>';
                            while($row = mysqli_fetch_array($query)){
                                echo '
                            <tr align="center" height="35px">                   
                                <td>'.$row['name'].'</td>
                                <td>'.$row['email'].'</td>                   
                                <td>'.$row['subject'].'</td>
                                <td>'.$row['phone'].'</td> 
                                <td>'.$row['message'].'</td>
                                <td><a href="reply.php?id='.$row['id'].'">回复</a></td>
                                <td><a href="?action=del&id='.$row['id'].'">删除</a></td>
                            </tr>';
                            }
                        }
//                        已回复的留言
                        elseif ($_GET['status']=="replyed"){
                            $query = mysqli_query($_conn,"select * from send where status!=0 order by id desc");
                            echo '
                            <tr align="center" height="30px" style="font-size:20px">
                                <td>姓名</td> 
								<td>邮箱</td>
								<td>主题</td>
								<td>电话</td>
								<td>详细留言</td>
								<td>回复留言</td>
								<td>删除</td>
							</tr>';
                            while($row = mysqli_fetch_array($query)){
                                echo '
                            <tr align="center" height="35px">                   
                                <td>'.$row['name'].'</td>
                                <td>'.$row['email'].'</td>                   
                                <td>'.$row['subject'].'</td>
                                <td>'.$row['phone'].'</td> 
                                <td>'.$row['message'].'</td>
                                <td>'.$row['reply'].'</td>
                                <td><a href="?action=del&id='.$row['id'].'">删除</a></td>
                            </tr>';
                            }
                        }
                    ?>  
                </table>
            </div>
        </div>
    </body>
</html>
