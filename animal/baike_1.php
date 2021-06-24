<!DOCTYPE html>
<html>
	<head>
        <title>猫狗百科</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content=""/>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style_baike.css" type="text/css" media="all" />	
        <style>
            body
			{
                background-attachment: fixed;
                background-image: url("images/bj1.jpg");
                width:100%;
                height:100%;
                background-position: center center;
                background-repeat:no-repeat;
                background-size:cover;
            }
            img
			{
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
			/*--//responsive--*/
/*下拉内容*/
.dropdown{
	position:relative;
	display:inline-block;
}
/* 下拉内容 (默认隐藏) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color:#00cdc1;
    min-width:100px;
    box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.2);
    padding:1px 1px;
    z-index: 2;
}
/* 下拉菜单的链接 */
.dropdown-content a {
    color: black;
    padding:1px 1px;
    text-decoration: none;
    display: block;
}

/* 鼠标移上去后修改下拉菜单链接颜色 */
.dropdown-content a:hover {background-color:#Ffffff ;}

/* 在鼠标移上去后显示下拉菜单 */
.dropdown:hover .dropdown-content {
    display: block;
}
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
        <!-- //css files -->
    </head>
    <body>
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
        <table width="1200" border="0"  style=" background:#FFF;opacity:0.9;">
            <tr>
                <td width="300px" style="vertical-align:baseline;">
					<dl>
                    <!--<dt></dt>-->
                        <ul>
                            <li style="height:33px;font-size:14px;background-color:rgba(244,238,238,0);text-align:left;text-indent:10px;list-style-position:inside;list-style-type: none;"><a style="color:#000;text-decoration:none;" href=""></a></li>

                            <li style="height:33px;font-size:14px;background-color:rgba(244,238,238,0);text-align:left;text-indent:10px;list-style-position:inside;list-style-type: none;"><a style="color:#000;text-decoration:none;" href=""></a></li>

                            <li style="height:33px;font-size:14px;background-color:rgba(244,238,238,0);text-align:left;text-indent:10px;list-style-position:inside;list-style-type: none;"><a style="color:#000;text-decoration:none;" href=""></a></li>
           
                            <li class="dropdown-content_b " style="font-size:20px;width:250px;text-align:leftr;text-indent:15px;list-style-position:inside;"><a style="color:#000;text-decoration:none;" href="baike_1.php">常见狗狗种类</a></li>
            <li class="dropdown-content_b "style="height:40px;width:250px;font-size:20px;text-align:left;text-indent:15px; "><a style="color:#000;text-decoration:none" href="baike_2.php">常见猫咪种类</a></li>
		    <li class="dropdown-content_b " style="font-size:20px;width:250px;text-align:left;text-indent:15px;list-style-position:inside;"><a style="color:#000;text-decoration:none" href="baike_3.php">护理常识</a></li>
                        </ul>
                    </dl>
				</td> 
                <td style="text-align: center">
					<br><br>
                <h2>常见狗狗种类</h2> 
					<br>
                    <table width="900" border="0"  >
                        
                            <tr >
                                <td align="center"><img src="images/tianyuan.jpg" width="250" height="250"></td>
                                <td align="center"><img src="images/chaiquan.jpg" width="250" height="250"></td>
                                <td align="center"><img src="images/douniu.jpg" width="250" height="250"></td>
                            </tr>
                            <tr>
                                <td style="font-size:20px;font-family:"微软雅黑";">田园犬</td>
                                <td style="font-size:20px;font-family:"微软雅黑";">柴犬</td>
                                <td style="font-size:20px;font-family:"微软雅黑";">斗牛犬</td>
                            </tr>
                            <tr>
                                <td align="center"><img src="images/hashiqi.jpg" width="250" height="250"></td>
                                <td align="center"><img src="images/jinmao.jpg" width="250" height="250"></td>
                                <td align="center"><img src="images/keji.jpg" width="250" height="250"></td>
                            </tr>
                            <tr>
                                <td style="font-size:20px;font-family:"微软雅黑";">哈士奇</td>
                                <td style="font-size:20px;font-family:"微软雅黑";">金毛</td>
                                <td style="font-size:20px;font-family:"微软雅黑";">柯基</td>
                            </tr>
							<tr>
                                <td align="center"><img src="images/labuladuo.jpg" width="250" height="250"></td>
                                <td align="center"><img src="images/muyang.jpg" width="250" height="250"></td>
                                <td align="center"><img src="images/taidi.jpg" width="250" height="250"></td>
                            </tr>
                                <tr>
                                <td style="font-size:20px;font-family:"微软雅黑";">拉布拉多</td>
                                <td style="font-size:20px;font-family:"微软雅黑";">牧羊犬</td>
                                <td style="font-size:20px;font-family:"微软雅黑";">泰迪</td>
                            </tr>
                        <br>
                    </table><br>
						<br>
                </td>
            </tr>
        </table>
    </body>
</html>