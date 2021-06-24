<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>护理常识</title>
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

       
        }
	</style>
	<!--// Meta tag Keywords -->
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
    <td width="300px" style="vertical-align:baseline;" ><dl>
        <dt></dt>
        <ul >
			<li style="height:33px;font-size:14px;background-color:rgba(244,238,238,0);text-align:left;text-indent:10px;list-style-position:inside;list-style-type: none;"><a style="color:#000;text-decoration:none;" href=""></a></li>
			<li style="height:33px;font-size:14px;background-color:rgba(244,238,238,0);text-align:left;text-indent:10px;list-style-position:inside;list-style-type: none;"><a style="color:#000;text-decoration:none;" href=""></a></li>
			<li style="height:33px;font-size:14px;background-color:rgba(244,238,238,0);text-align:left;text-indent:10px;list-style-position:inside;list-style-type: none;"><a style="color:#000;text-decoration:none;" href=""></a></li>
		     
			<li class="dropdown-content_b " style="font-size:20px;width:250px;text-align:leftr;text-indent:15px;list-style-position:inside;"><a style="color:#000;text-decoration:none;" href="baike_1.php">常见狗狗种类</a></li>
            <li class="dropdown-content_b "style="height:40px;width:250px;font-size:20px;text-align:left;text-indent:15px; "><a style="color:#000;text-decoration:none" href="baike_2.php">常见猫咪种类</a></li>
		    <li class="dropdown-content_b " style="font-size:20px;width:250px;text-align:leftr;text-indent:15px;list-style-position:inside;"><a style="color:#000;text-decoration:none" href="baike_3.php">护理常识</a></li>
        </ul>
      </dl></td> 
	  
	  
    <td >
		<br>
		<h2 align="center">护理常识</h2>
		<br>
		<h3 align="left" style="color:#B87070">狗狗日常护理常识</h3>
		<session style="float:right;	margin-right:20px;"><img src="images/dog.png" width="300" height="200"></session>
		<br>
		<p style="text-indent:30px;font-size:15px;text-align:left;color:black;font-family:"微软雅黑"">眼睛：狗儿与人类勾通主要靠眼睛，狗儿如果眼睛不舒服就要用爪子抓，因此很容易损伤眼睛和角膜，由其是眼睛突出的北京狗。眼内的变化都是身体某部份疾病的反映。所以定期检查和管理狗儿的眼睛有利于防病和治疗。</p>
		<p style="text-indent:30px;font-size:15px;color:black;text-align:left;font-family:"微软雅黑"">牙齿：由于现代狗儿不需要用牙捕猎其它动物，而是由主人喂食各种饲粮，因此70%以上的家犬在四岁左右便会患上牙龈病（有些品种狗儿会更早些）。口臭是口腔疾病的先兆，这是由于残留在牙缝中的细菌繁殖或牙龈发炎之故，不及时治疗容易导致龋齿，在啃骨头或进食时引起牙齿轻微的裂伤，也会因挫伤而发炎。最终脱落或拔掉不能进食影响胃肠功能，提早衰老。定期检查狗儿的牙齿和牙床，清理牙垢用淡盐水或兽医提供的牙膏、软牙刷轻轻刷洗犬牙。注意不能把人用的牙膏用于犬的牙齿。</p>
		<p style="text-indent:30px;font-size:15px;text-align:left;color:black;font-family:"微软雅黑"">耳朵：狗儿经常摇头、抓耳并有刺鼻的分泌物都是耳疾的表现，多数都是由于耳道或者喉咙感染引发异味，任何狗儿因为耳疾都会引起平衡失调。引发耳疾的原因在于有些狗儿耳内生长毛发，长期得不到清理，还有此狗儿因主人护理不周，洗澡时将水灌入耳内却不知，所以应定期将狗儿带到美容院进行清洁，同时检查耳内皮肤的颜色，还可预防耳螨的发生。 健康的狗儿天生爱干净，它们会在地上滚擦来清洁自己，但打滚时会沾上脏东西，毛被弄乱后会打结成团，造成皮肤发病的隐患，而且打结后的被毛也很不好看，因此需要帮助它定期梳理和洗澡，使你的狗儿更健康。</p>
	  	<p style="text-indent:30px;font-size:15px;color:black;text-align:left;font-family:"微软雅黑"">毛发：健康的狗儿天生爱干净，它们会在地上滚擦来清洁自己，但打滚时会沾上脏东西，毛被弄乱后会打结成团，造成皮肤发病的隐患，而且打结后的被毛也很不好看，因此需要帮助它定期梳理和洗澡，使你的狗儿更健康。</p>
	  	<p style="text-indent:30px;font-size:15px;color:black;text-align:left;font-family:"微软雅黑"">肛门：如果狗儿不断舔肛门、将屁股坐在地上向前蹭或者啃咬尾部，这说明肛门腺不通畅，需要放空，如果不及时治疗，狗儿会咬烂自己的尾巴，还可能因发炎而引起肛门周围的皮肤化脓、溃烂。</p>
	  	<p style="text-indent:30px;font-size:15px;color:black;text-align:left;font-family:"微软雅黑"">指甲：狗儿足指甲的长短会直接影响狗儿的行动，足趾过长会使骨胳或关节变形，影响行走，有些指甲过长会刺进脚垫中，造成破溃、发炎。有些狗儿因指甲弯曲经常被挂住，造成指甲断裂、出血，所以应定期修剪。</p>
		<br>
		<h3 align="left" style="color:#B87070">猫咪日常护理常识</h3>
		<br>
		<session style="float:left;	margin-right:20px;"><img src="images/cat11.png" width="200" height="250"></session>
		<br>
		<p style="text-indent:30px;font-size:15px;color:black;text-align:left;font-family:"微软雅黑"">眼睛:猫的眼睛是炯炯有神的。猫的第三眼脸变化同病情也密切相关。正常情况下第三眼脸在猫眼睛有内角，平时看不到。当小猫有病时，第三眼脸就会突出而掩盖一部分眼球，有时甚至可以挡住眼球的一半。第三眼脸突出得越多，说明病情越严重。另外，健康时猫的眼睛都很干净，很少有分泌物。若患病时，眼睛就会出现脓性或浆液性分泌物。观察猫眼睛时还需注意两侧眼脸是否对称，如例肿胀，常表示眼睛局部有病，如两侧同时肿胀，则多半是由心脏、肾脏、严重营养不良等全身性疾病引起的。</p>
		<p style="text-indent:30px;font-size:15px;color:black;text-align:left;font-family:"微软雅黑"">口部:猫的正常口色为浅粉红色。猫发烧时口色变成潮红，贫
血时苍白，有肝脏病时焦黄色，病重时表紫色等。此外，还应注意猫口腔的分泌物、舌面、齿龈、两颊粘膜、咽喉部位有没有水泡、溃烂、肿胀等异常情况。</p>
		<p style="text-indent:30px;font-size:15px;color:black;text-align:left;font-family:"微软雅黑"">鼻部:正常的猫鼻端为凉而湿润。如猫的鼻端发热、发干，甚
至龟裂就不正常了。另外，猫很少流鼻涕，如鼻涕增多就可以是某种疾病的征兆。</p>
		<p style="text-indent:30px;font-size:15px;color:black;text-align:left;font-family:"微软雅黑"">耳朵:猫两耳活动自如，对声音反应灵敏。而病猫却相反。另
外，应注意猫耳部是否有分泌物、脱毛等异常现象。</p>
		<p style="text-indent:30px;font-size:15px;color:black;text-align:left;font-family:"微软雅黑"">呕吐:猫告别容易呕吐。猫的呕吐可分为病理性和生理性呕吐
两种。生理性呕吐属于正常现象，但如果是由胃肠道疾病、发烧。感冒、肺炎、肝脏疾病、食物中毒、胃内有异物、寄生虫或胃出血、贵疡等引起的则不能掉以轻心。</p>
		<p style="text-indent:30px;font-size:15px;color:black;text-align:left;font-family:"微软雅黑"">咳嗽和喷嚏:猫打喷嚏常常是受凉的表现或患感冒。咳嗽则暗
示有肺部或呼吸道感染的可能。</p>
		<p style="text-indent:30px;font-size:15px;color:black;text-align:left;font-family:"微软雅黑"">粪便:猫在正常情况下排粪次数、粪便形状、数量、气味、色
泽都较稳定。如出现便干、硬、少、颜色深并带有少量粘液，则可能是发热、便秘、慢性胃肠炎征兆。如粪便稀软、不成形，或成水样，甚至混有粘液、脓液、血、气泡等，则说明病情较重。</p>
		<p style="text-indent:30px;font-size:15px;color:black;text-align:left;font-family:"微软雅黑"">腹部:猫腹围如明显增大，腹壁紧张，叩诊时像敲鼓声，是胀
气的表现。相反，如腹围减少，并且触之敏感，就有可能是腹膜感染或腹痛。</p>
		<br>
		<br>
		
	  	 </td>
  </tr>
</table>

</body>