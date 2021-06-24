<!DOCTYPE html>
<html>
<head>
    <title>好物推荐</title>
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
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/zhaoling.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <style>
        input[type=text] {
            width: 80%;
            padding: 9px 15px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=button]{
            width: 10%;
            background-color: #00cdc1;
            color: white;
            padding: 10px 15px;
            margin: 5px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .content {
            width: 100%;
        }
        .artical-info{
            width: 70%;
            float:right;
        }
        body{
            background-attachment: fixed;
            background-image: url("images/bj1.jpg");
            width:100%;
            height:100%;
            background-position: center center;
            background-repeat:no-repeat;
            background-size:cover;
        }
        /*---start-articals----*/
        .artical{
            padding: 10px 0px;
            border-bottom: 1px solid rgba(199, 199, 184, 0.29);
        }

        .artical-img{
            width: 250px;
        }
        .artical-img img {
            background: #FFF;
            padding: 7px;
            box-shadow: 0px 0px 10px rgba(138, 132, 132, 0.7);
        }
        .artical-info{
            float: left;
            width: 542px;
        }
        .artical-info p{
            font-family: Arial;
            font-size: 30px;
            line-height: 1.8em;
            color: #332A21;
        }
        .artical-info p a{
            color: #3062A7;
            padding: 0 0px 0 10px;
        }

    </style>
</head>
<script src="js/jquery-2.2.3.min.js"></script>
<link rel="stylesheet" href="css/zcdl.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
<script src="js/echarts.min.js"></script>
<script src="js/echarts-wordcloud.js"></script>
<script>
    function find() {
        var context = document.getElementById('context').value;
        window.location.href='zhaoling.php?context='+context;
    }
    /**
     * 将关键字变为红色
     * @param keyWord   关键字字符串
     * @returns .finKey class类为finKey
     */
    function changeKeyRed(keyword) {
        if (keyword!=''){
            $(".finKey").each(function () {
                var str=$(this).text();
                var substr="/("+keyword+")/g";
                var replaceStr=str.replace(eval(substr),"<span style='color:red;font-weight:bold'>"+keyword+"</span>")
                $(this).html(replaceStr);
            });
        }
    }
</script>
<body>
<!-- sticky navigation -->
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
<div align="center">
    <input type="text" name="context" id="context" placeholder="请输入关键字">
    <input type="button" value="查找" onclick="find()">
    <?php
    include 'connect.php';
    error_reporting(0)
    ?>
    <?php
    $context = $_GET['context'];
    if ($context==''||$context==null){
        $query1 = mysqli_query($_conn,"select * from goods where status='待出售' order by id desc");
    }
    else{
        $sql = "select * from goods where title like '%".$_GET['context']."%' or content like '%".$_GET['context']."%' order by id desc";
        $query1 = mysqli_query($_conn,$sql);
    }
    while($row = mysqli_fetch_array($query1)){
        echo '
                    <div style=" background:#FFF;opacity:0.8;margin:0px;padding:0px">
                        <div class="artical">
                            <table>
                                <tr>
                                <td>
                                    <div class="artical-img" align="center">
                                        <img src=./goods/'.$row['pic'].' width=200px title="imag-name" />
                                    </div>
                                </td>
                                <td style="vertical-align:middle;text-align:left;">
                                    <div class="artical-info" style="width:1000px;" id="test">                                         
                                        <h3 class="finKey">'.$row['title'].'</h3><h5 class="finKey">'.$row['time'].'</h5>                                           
                                        <h4 class="finKey">'.$row['price'].'元</h4>
                                        <a href=talk.php?ToUserID='.$row['uid'].'>'.$row['username'].'</a>                                      
                                        <p style="font-size: 20px;" class="finKey">'.$row['content'].'</p>
                                        <a href="goodsdo.php?id='.$row['id'].'">购买</a>
                                    </div>
                                </td>
                                </tr>
                            </table>
						</div>
				    </div>';
    }
    echo "<script type='text/javascript'>changeKeyRed('$context')</script>";
    ?>
</body>
</html>

