<!DOCTYPE html>
<html>
<head>
    <title>管理招领</title>
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
    //phpstorm中不显示warning
    error_reporting(0);
    $query1 = mysqli_query($_conn,"select * from yhb where not id=1 order by id desc");
    $query2 = mysqli_query($_conn,"select count(id) as num from yhb");
    $row2 = mysqli_fetch_array($query2)
?>
<div>
    <div style="float: right;font-family:黑体;font-size: 30px">当前注册人数:<span style="color: red"><?php echo $row2['num']-1?></span>人</div>
    <h3 style=" text-align:center; color:#000; margin-bottom:20px; font-size:24px; font-family:宋体">管理用户</h3>
    <hr align="center">
    <div id="twjs">
        <table class='table table-hover table-striped table-bordered table-sm'>
            <tr>
                <td>用户名</td>
                <td>性别</td>
                <td>手机号</td>
                <td>电子邮箱</td>
                <td>地址</td>
                <td>聊天</td>
            </tr>
            <?php
            while($row = mysqli_fetch_array($query1)){
                echo '
                                <tr>
                                    <td>'.$row['username'].'</td>
                                    <td>'.$row['Gender'].'</td>
                                    <td>'.$row['tel'].' </td>
                                    <td>'.$row['email'].'</td>
                                    <td>'.$row['address'].'</td>
                                    <td><a href=talk.php?ToUserID='.$row['id'].'>聊天</a></td>                                  
                                </tr>';
            }
            ?>
        </table>
        <?php
        if ($_GET['action']=="del"){
            $query = mysqli_query($_conn,"delete from product  where id= ".$_GET['id']);
            echo "<script type='text/javascript'>alert('删除成功');window.location.href='admin_product.php';</script>";
        }
        ?>
        <p>&nbsp;</p>
    </div>
</div>
</body>
</html>