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
    <link rel="stylesheet" href="./css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="./css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" href="./css/owl.carousel.css" type="text/css" media="all" />
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="all" />
</head>
<body background="./images/bj1.jpg">
<!-- sticky navigation -->
<div class="nav-links">
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
</div>
<!-- //sticky navigation -->
<div>
    <table class="table table-hover table-striped table-bordered table-sm" id="resultshow">
        <tr align="center">
            <td><a href="?action=dj" >登记审核</a></td>
            <td><a href="?action=ly" >领养审核</a></td>
            <td><a href="?action=jy" >寄养审核</a></td>
        </tr>
<?php
include 'connect.php';
//phpstorm中不显示warning
error_reporting(0);
$hid = $_COOKIE['uid'];
if ($_GET['action']=='dj'){
    $query1 = mysqli_query($_conn,"select * from help where kind=0 and hid={$hid} and (status=-3 or status=-2 or status=-1 or status=3) order by status desc");
}
elseif ($_GET['action']=='ly'){
    $query1 = mysqli_query($_conn,"select * from help where kind=0 and hid={$hid} and (status=0 or status=1 or status=2) order by status desc");
}
elseif ($_GET['action']=='jy'){
    $query1 = mysqli_query($_conn,"select * from help where kind=1 and hid={$hid} order by status desc");
}
if ($_GET['action']=='dj'){
    echo '<tr>
            <th>登记用户名</th>
            <th>领养用户名</th>
            <th width="100px">图片</th>
            <th>标题</th>
            <th>内容</th>
            <th>登记时间</th>
            <th width="100px">救助站发布图片</th>
            <th>救助站发布标题</th>
            <th>救助站发布内容</th>
            <th>救助站发布时间</th>
            <th>领养时间</th>
            <th>状态</th>
            <th>操作</th>
            <th>操作</th>
        </tr>';
    while ($row = mysqli_fetch_array($query1)) {
        echo '
                                <tr>
                                     <td>' . $row['username'] . '</td>
                                    <td>' . $row['rusername'] . '</td>
                                    <td><img src="./help/' . $row['pic'] . '" width=100px /></td>
                                    <td>' . $row['title'] . ' </td>
                                    <td>' . $row['content'] . '</td>
                                    <td>' . $row['starttime'] . '</td>
                                    <td><img src="./help/' . $row['newpic'] . '" width=100px /></td>
                                    <td>' . $row['newtitle'] . ' </td>
                                    <td>' . $row['newcontent'] . '</td>
                                    <td>' . $row['newstarttime'] . '</td>
                                    <td>' . $row['newendtime'] . '</td>
                                    ';
        if ($row['status'] == -3 || $row['status'] == 0) {
            echo '<td>待审核</td>';
        } elseif ($row['status'] == -2 || $row['status'] == 1) {
            echo '<td>未通过</td>';
        } elseif ($row['status'] == 3 || $row['status'] == 2) {
            echo '<td>已通过</td>';
        }elseif ($row['status'] == -1) {
            echo '<td>已发布</td>';
        }
        echo
            '
                                    
                                    <td><a href=helpshenhe_table.php?action=' . $_GET['action'] . '&id=' . $row['id'] . '&status=' . $row['status'] . '>审核</a></td>
                                    <td><a href=helpfabu.php?action=' . $_GET['action'] . '&id=' . $row['id'] . '&status=' . $row['status'] . '>发布</a></td>                                  
                                </tr>';
    }
}
if ($_GET['action']=='ly'){
    echo '<tr>
            <th>登记用户名</th>
            <th>领养用户名</th>
            <th width="100px">图片</th>
            <th>标题</th>
            <th>内容</th>
            <th>登记时间</th>
            <th width="100px">救助站发布图片</th>
            <th>救助站发布标题</th>
            <th>救助站发布内容</th>
            <th>救助站发布时间</th>
            <th>领养时间</th>
            <th>状态</th>
            <th>操作</th>
        </tr>';
    while ($row = mysqli_fetch_array($query1)) {
        echo '
                                <tr>
                                     <td>' . $row['username'] . '</td>
                                    <td>' . $row['rusername'] . '</td>
                                    <td><img src="./help/' . $row['pic'] . '" width=100px /></td>
                                    <td>' . $row['title'] . ' </td>
                                    <td>' . $row['content'] . '</td>
                                    <td>' . $row['starttime'] . '</td>
                                    <td><img src="./help/' . $row['newpic'] . '" width=100px /></td>
                                    <td>' . $row['newtitle'] . ' </td>
                                    <td>' . $row['newcontent'] . '</td>
                                    <td>' . $row['newstarttime'] . '</td>
                                    <td>' . $row['newendtime'] . '</td>
                                    ';
        if ($row['status'] == -3 || $row['status'] == 0) {
            echo '<td>待审核</td>';
        } elseif ($row['status'] == -2 || $row['status'] == 1) {
            echo '<td>未通过</td>';
        } elseif ($row['status'] == 3 || $row['status'] == 2) {
            echo '<td>已通过</td>';
        }elseif ($row['status'] == -1) {
            echo '<td>已发布</td>';
        }
        echo
            '
                                    
                                    <td><a href=helpshenhe_table.php?action=' . $_GET['action'] . '&id=' . $row['id'] . '&status=' . $row['status'] . '>审核</a></td>                                              
                                </tr>';
    }
}
elseif ($_GET['action']=='jy'){
    echo '<tr>
            <th>寄养用户名</th>
            <th width="100px">图片</th>
            <th>标题</th>
            <th>内容</th>
            <th>开始时间</th>
            <th>结束时间</th>
            <th>状态</th>
            <th>操作</th>
        </tr>';
    while ($row = mysqli_fetch_array($query1)) {
        echo '
                                <tr>
                                    <td>' . $row['username'] . '</td>
                                    <td><img src="./help/' . $row['pic'] . '" width=100px /></td>
                                    <td>' . $row['title'] . ' </td>
                                    <td>' . $row['content'] . '</td>
                                    <td>' . $row['starttime'] . '</td>
                                    <td>' . $row['endtime'] . '</td>
                                    ';
        if ($row['status'] == -3 || $row['status'] == 0) {
            echo '<td>待审核</td>';
        } elseif ($row['status'] == -2 || $row['status'] == 1) {
            echo '<td>未通过</td>';
        } elseif ($row['status'] == -1 || $row['status'] == 2) {
            echo '<td>已通过</td>';
        }
        echo
            '
                                    
                                    <td><a href=helpshenhe_table.php?action=' . $_GET['action'] . '&id=' . $row['id'] . '>审核</a></td>                                  
                                </tr>';
    }
}
?>
    </table>
</div>
</body>
</html>