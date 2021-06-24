<!DOCTYPE html>
<html>
<head>
    <title>删除留言</title>
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
                    <li><a href="../login_out.php">退出管理</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<form action="?id=<?php echo $_GET['id']?>" method="post">
    <table align="center" height="30px" style="font-size:20px">
        <tr >
            <td>内容</td>
            <td><textarea name="reply"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="发送"></td>
        </tr>
    </table>
</form>
<?php
    include 'connect.php';
    error_reporting(0);
    if ($_POST['reply']!=null){
        $query = mysqli_query($_conn,"update send set reply='".$_POST['reply']."', status=1 where id= ".$_GET['id']);
        echo "<script type='text/javascript'>alert('发送成功');window.location.href='admin_add2.php?status=not_rep';</script>";
    }
?>
</body>
</html>

