<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>猫咪页面</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content=""
	/>
	<!--// Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
	<!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all" />
	<!-- Owl-Carousel-CSS -->
	<link rel="stylesheet" href="css/style_baike.css" type="text/css" media="all" />	
    <style>
	    body{
            background-attachment: fixed;
            background-image: url("images/bj1.jpg");
            width:100%;
            height:100%;
            background-position: center center;
            background-repeat:no-repeat;
            background-size:cover;
		}
		img {
            border-radius: 15px;
        }    
		.dropdown-content_b {
          
            
            background-color:#00cdc1;
            min-width:250px;
            box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.2);
            padding:1px 1px;
            z-index: 2;
			height: 40px;
        }
       
        .dropdown-content_b a {
            color: black;
            padding:1px 1px;
           
            display: block;
			height: 40px;
        }

       
        .dropdown-content_b a:hover {background-color:#Ffffff ;}
    </style>
	<!--// Meta tag Keywords -->
        <!-- css files -->
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
        <!-- Bootstrap-Core-CSS -->
        <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
        <!-- Font-Awesome-Icons-CSS -->
        <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all" />
        <!-- Owl-Carousel-CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <!-- Style-CSS -->
        <!-- web fonts -->
        <link href="http://fonts.googleapis.com/css?family=Molle:400i&amp;subset=latin-ext" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
	    rel="stylesheet">
        <!-- //web fonts -->
        <!-- //css files -->
</head>
<body>
<div class="nav-links">
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
<table width="1200" border="0"  style=" background:#FFF;opacity:0.9;">
  <tr>
    <td width="300px" style="vertical-align:baseline;"><dl>
        <dt></dt>
        <ul>
			<li style="height:33px;font-size:14px;background-color:rgba(244,238,238,0);text-align:left;text-indent:10px;list-style-position:inside;list-style-type: none;"><a style="color:#000;text-decoration:none;" href=""></a></li>
			<li style="height:33px;font-size:14px;background-color:rgba(244,238,238,0);text-align:left;text-indent:10px;list-style-position:inside;list-style-type: none;"><a style="color:#000;text-decoration:none;" href=""></a></li>
			<li style="height:33px;font-size:14px;background-color:rgba(244,238,238,0);text-align:left;text-indent:10px;list-style-position:inside;list-style-type: none;"><a style="color:#000;text-decoration:none;" href=""></a></li>
		  <li class="dropdown-content_b " style="font-size:20px;width:250px;text-align:leftr;text-indent:15px;list-style-position:inside;"><a style="color:#000;text-decoration:none;" href="baike_1.php">常见狗狗种类</a></li>
            <li class="dropdown-content_b "style="height:40px;width:250px;font-size:20px;text-align:left;text-indent:15px; "><a style="color:#000;text-decoration:none" href="baike_2.php">常见猫咪种类</a></li>
		    <li class="dropdown-content_b " style="font-size:20px;width:250px;text-align:leftr;text-indent:15px;list-style-position:inside;"><a style="color:#000;text-decoration:none" href="baike_3.php">护理常识</a></li>
        </ul>
      </dl></td> 
	  
	  
    <td style="text-align: center">
		<br><br>
		<h2>常见猫咪种类</h2> 
		<br><br>
		<table width="900" border="0">
  <tbody>
    <tr>
      <td align="center"><img src="images/tianyuanmao.jpg" width="250" height="250"></td>
      <td align="center"><img src="images/huban.jpg" width="250" height="250"></td>
      <td align="center"><img src="images/yingduanlanmao.jpg" width="250" height="250"></td>
    </tr>
    <tr>
      <td style="font-size:20px;font-family:"微软雅黑";text-align:center;">中华田园猫</td>
      <td style="font-size:20px;font-family:"微软雅黑";">虎斑猫</td>
      <td style="font-size:20px;font-family:"微软雅黑";">英短蓝猫</td>
    </tr>
    <tr>
      <td align="center"><img src="images/bosimao.jpg" width="250" height="250"></td>
      <td align="center"><img src="images/buou.jpg" width="250" height="250"></td>
      <td align="center"><img src="images/wumao.jpg" width="250" height="250"></td>
    </tr>
    <tr>
      <td style="font-size:20px;font-family:"微软雅黑";">波斯猫</td>
      <td style="font-size:20px;font-family:"微软雅黑";">布偶猫</td>
      <td style="font-size:20px;font-family:"微软雅黑";">无毛猫</td>
    </tr><tr>
      <td align="center"><img src="images/mengmai.jpg" width="250" height="250"></td>
      <td align="center"><img src="images/mianyin.jpg" width="250" height="250"></td>
      <td align="center"><img src="images/xianluo.jpg" width="250" height="250"></td>
    </tr>
	  <tr>
      <td style="font-size:20px;font-family:"微软雅黑";">孟买猫</td>
      <td style="font-size:20px;font-family:"微软雅黑";">缅因猫</td>
      <td style="font-size:20px;font-family:"微软雅黑";">暹罗猫</td>
    </tr>
  </tbody>
</table>

	  <br><br>
	 </td>
  </tr>
</table>

</body>