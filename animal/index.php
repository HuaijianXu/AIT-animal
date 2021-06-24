<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
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
        <div class="w3l-main" id="home">
            <div class="container">
                <!-- header -->
                <div class="header">
                    <div class="logo">
                        <h1>
                            <a href>
                                <img class="logo-img center-block" src="images/logo.png" alt="" /> Animal Shelter
                            </a>
                        </h1>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!-- //header -->
            </div>
            <!-- Slider -->
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                        <li>
                            <div class="slider-img-w3layouts one">
                                <div class="w3l-overlay">
                                    <div class="container">
                                        <div class="banner-text-info">
                                            <h3>we provide
                                                <span>love</span> for all
                                                <span>dogs and cats </span></h3>
                                            <p>A comprehensive guide to care to make your pet feel your love</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slider-img-w3layouts two">
                                <div class="w3l-overlay">
                                    <div class="container">
                                        <div class="banner-text-info">
                                            <h3>you can show your
                                                <span>love</span> to your
                                                <span>pet</span></h3>
                                            <p>A comprehensive guide to care to make your pet feel your love</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slider-img-w3layouts three">
                                <div class="w3l-overlay">
                                    <div class="container">
                                        <div class="banner-text-info">
                                            <h3>we provide
                                                <span>love</span> for all
                                                <span>dogs and cats </span></h3>
                                            <p>A comprehensive guide to care to make your pet feel your love</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slider-img-w3layouts four">
                                <div class="w3l-overlay">
                                    <div class="container">
                                        <div class="banner-text-info">
                                            <h3>you can show your
                                                <span>love</span> to your
                                                <span>pet</span></h3>
                                            <p>A comprehensive guide to care to make your pet feel your love</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--//Slider-->
        </div>
        <!--//banner-->

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
        <!-- welcome -->
        <div class="about" id="about">
            <div class="container">
                <h3 class="agile-title">简介</h3>
                <div class="about-top w3ls-agile">
                    <div class="col-md-6 red">
                        <img class="img-responsive" src="images/ab.jpg" alt="">
                    </div>
                    <div class="col-md-6 come">
                        <div class="about-wel">
                            <h5>流浪之家</h5>						
                            <p>这是一个公益小站，意在救助身边的流浪无家可归的动物。提供流浪动物的照片及尽可能齐全的信息，帮他们找到温馨温暖的主人。</p>
                            <ul>
                                <li>
                                    <i class="glyphicon glyphicon-ok"></i>你要有足够爱心，不能嫌弃它们身体瘦弱，毛发无光。</li>
                                <li>
                                    <i class="glyphicon glyphicon-ok"></i>不要嫌弃它们残疾、不够美丽或者不是名犬。</li>
                                <li>
                                    <i class="glyphicon glyphicon-ok"></i>把它们带回家，驯养它们，关心它们，它们会回报给你更多的爱。</li>
                                <li>
                                    <i class="glyphicon glyphicon-ok"></i>它可能是你生命中的一部分，但你是它的唯一。</li>
                            </ul>
                        </div>
                        <div class="button-styles">
                            <a href="#" data-toggle="modal" data-target="#myModal2">更多信息</a>
                            <!--<a href="#contact" class="button2-w3l scroll">联系我们</a>-->
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //welcome -->

        <!-- middle slider -->
        <div class="w3agile-spldishes">
            <div class="container">
                <div class="spldishes-grids">
                    <!-- Owl-Carousel -->
                    <div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
                        <a class="item g1">
                            <img class="lazyOwl" src="images/m1.jpg" title="Cat Life" alt="" />
                        </a>
                        <a class="item g1">
                            <img class="lazyOwl" src="images/m2.jpg" title="Cat Life" alt="" />
                        </a>
                        <a class="item g1">
                            <img class="lazyOwl" src="images/m3.jpg" title="Cat Life" alt="" />
                        </a>
                        <a class="item g1">
                            <img class="lazyOwl" src="images/m4.jpg" title="Cat Life" alt="" />
                        </a>
                        <a class="item g1">
                            <img class="lazyOwl" src="images/m5.jpg" title="Cat Life" alt="" />
                        </a>
                        <a class="item g1">
                            <img class="lazyOwl" src="images/m6.jpg" title="Cat Life" alt="" />
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //middle slider -->

        <!-- middle section -->
        <div class="middle-w3l">
            <div class="container">
                <h2>Get to know everything about your cats and dogs!</h2>
                <div class="button-styles">
                    <a href="#contact" class="button3-w3l scroll">联系我们</a>
                </div>
            </div>
        </div>
        <!-- //middle section -->

        <!-- services -->
        <div class="services" id="services">
            <div class="container">
                <h3 class="agile-title">寻&nbsp; &nbsp; &nbsp;宠</h3>
                <div class="w3_agile_services_grids">
                    <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid " data-aos="zoom-in">
                        <div class="ih-item circle effect1 agile_services_grid">
                            <div class="spinner"></div>
                            <div class="img">
                                <img src="images/c1.jpg" alt=" " class="img-responsive" />
                            </div>
                        </div>
                        <fieldset>
                            <legend>黑色拉布拉多</legend>
                            辽宁省，铁岭市，调兵山市丢失黑色拉布拉多母犬一只，下巴有白毛，三岁，体重60请，喜欢狗的朋友帮忙多留意。大家一直在帮忙寻找，都在期待它的消息。主人电话17740015085，有重谢谢！
                        </fieldset>
                  </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
                        <div class="ih-item circle effect1 agile_services_grid">
                            <div class="spinner"></div>
                            <div class="img">
                                <img src="images/c2.jpg" alt=" " class="img-responsive" />
                            </div>
                        </div>
                        <fieldset>
                            <legend>三花猫</legend>
                            老人养了一只三花猫，两岁多。不知是在西安城西客运站跑丢的，还是在扶风客运站跑丢的。老人听说爱猫不见了，心里有说不出的难受。有哪位热心人看到猫咪请联系，电话是17791991277李。有酬谢！
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
                        <div class="ih-item circle effect1 agile_services_grid">
                            <div class="spinner"></div>
                            <div class="img">
                                <img src="images/c3.jpg" alt=" " class="img-responsive" />
                            </div>
                        </div>
                        <fieldset>
                            <legend>橘猫</legend>
                            从楼上掉下去跑了，从没出过门，找不到回家的路。拜托大家帮忙留意一下！走失地点是吉林市日升南区。如果看到它请与我联系：13404687242。
                        </fieldset>
                    </div>
                    <div class="clearfix"> </div>
              </div>
                <div class="w3_agile_services_grids">
                    <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid " data-aos="zoom-in">
                        <div class="ih-item circle effect1 agile_services_grid">
                            <div class="spinner"></div>
                            <div class="img">
                                <img src="images/c4.jpg" alt=" " class="img-responsive" />
                            </div>
                        </div>
                        <fieldset>
                            <legend>银渐层英短</legend>
                            大概是在昨天晚上跑走的，银渐层英短，因为前几天下了大雨味道被冲淡了我担心他回不来，消失四天了，萍乡的各位麻烦关注一下。大概是在苏州街，金三角这里走丢。我已经下楼找了很久了都没有找到，现在很慌。
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
                        <div class="ih-item circle effect1 agile_services_grid">
                            <div class="spinner"></div>
                            <div class="img">
                                <img src="images/c5.jpg" alt=" " class="img-responsive" />
                            </div>
                        </div>
                        <fieldset>
                            <legend>中华田园猫</legend>
                            中华田园猫，白底黑花，三岁。4月13日下午7:30，在盐淮高速北侧九龙口服务区加油站附近挣脱猫窝走失，在附近小树林寻找后无果。虽是田园猫，无任何生活自理能力，主人心急如焚，望好心人看到后联系微信842696078。
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
                        <div class="ih-item circle effect1 agile_services_grid">
                            <div class="spinner"></div>
                            <div class="img">
                                <img src="images/c6.jpg" alt=" " class="img-responsive" />
                            </div>
                        </div>
                        <fieldset>
                            <legend>小柴犬</legend>
                            2019年5月17日下午四点半，在深圳市宝安区壹方城附近丢失，丢失时没有穿戴任何东西。三个月左右，体型小型。两个耳朵有裂耳，尿尿的位置两边有突出鼓鼓的包。如有看到可以用吃的留住，或者远远跟着。重酬118718886535赵小姐。
                        </fieldset>
                    </div>
                    <div class="clearfix"> </div>
                </div>
          </div>
            <div class="w3l-img-side">
                <img src="images/cat11.png" alt="" />
            </div>
            <div class="w3l-img-side w3l-img-side2">
                <img src="images/cat1.png" alt="" />
            </div>
        </div>
        <!-- //services -->

        <!-- blog -->
        <div class="blog" id="blog">
            <div class="container">
                <h3 class="agile-title">招&nbsp;&nbsp;&nbsp;领</h3>
                <div class="col-md-5 col-xs-6 blog-grids">
                    <div class="blog-full-wthree">
                        <div class="blog-left-agileits">
                            <p>瘸腿狗</p>
                            <!--<span>18</span>-->
                        </div>
                        <div class="blog-right-agileits-w3layouts">
                            <h4 style="color:white;opacity:0.8">
                                宜兴城东一只瘸腿狗。有想领养的或者失主看到请尽快联系。
                            </h4>
                            <p>
                                <!--<a href="#" data-toggle="modal" data-target="#myModal2">Cat Life</a>-->
                            </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="blog-full-wthree">
                        <div class="blog-left-agileits">
                            <p>田园犬</p>
                            <!--<span>22</span>-->
                        </div>
                        <div class="blog-right-agileits-w3layouts">
                            <h4 style="color:white;opacity:0.8">
                                <!--<a data-toggle="modal" data-target="#myModal2">-->特别乖的狗狗求领养。狗子性格非常温顺，很听话，能听懂英文，但找了近一个月还没找到主人。有想领养的尽快联系，好人一生平安。
                            </h4>
                            <p>
                                <!--<a href="#" data-toggle="modal" data-target="#myModal2">Cat Life</a>-->
                            </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="blog-full-wthree">
                        <div class="blog-left-agileits">
                            <p>灰泰迪</p>
                            <!--<span>15</span>-->
                        </div>
                        <div class="blog-right-agileits-w3layouts">
                            <h4 style="color:white;opacity:0.8">
                                本人于2019年6月23日上午于上下九附近捡到一只走失灰色泰迪，很干净，很听话，应该丢失不久，望主人看见及时与我联系！
                            </h4>
                            <!--<p>
                                <a href="#" data-toggle="modal" data-target="#myModal2">Cat Life</a>
                            </p>-->
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-5 col-xs-6 blog-grids">
                    <div class="blog-full-wthree">
                        <div class="blog-left-agileits">
                            <p>黄色毛</p>
                            <!--<span>26</span>-->
                        </div>
                        <div class="blog-right-agileits-w3layouts">
                            <h4 style="color:white;opacity:0.8">
                                <!--<a href="#" data-toggle="modal" data-target="#myModal2">-->11月19日凌晨，郑州二七区长江路京广路路中间草丛发现一只黄色的猫，附近谁家的猫找不到，早点联系15737318275。
                            </h4>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="blog-full-wthree">
                        <div class="blog-left-agileits">
                            <p>布偶猫</p>
                            <!--<span>06</span>-->
                        </div>
                        <div class="blog-right-agileits-w3layouts">
                            <h4 style="color:white;opacity:0.8">
                                坐标江苏南通崇川区，发现一只小猫，特瘦，毛挺短的，尾巴挺长，脸是肥的，眼睛淡黄色，全身好像是白毛，但是很脏都发灰了。
                            </h4>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="blog-full-wthree">
                        <div class="blog-left-agileits">
                            <p>小奶猫</p>
                        </div>
                        <div class="blog-right-agileits-w3layouts">
                            <h4 style="color:white;opacity:0.8">
                                冬至那天女儿带回一只白色的小奶猫。请失主看到尽快联系！
                            </h4>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-grids mid-blog-agile">
                <img src="images/cat2.png" class="img-responsive" alt="">
            </div>
        </div>
        <!-- Modal5 -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="modal-info">
                            <h4>Animal Shelter</h4>
                            <img src="images/g2.jpg" alt=" " class="img-responsive" />
                            <h5>Animal Shelter成立于2020年</h5>
                            <p class="para-agileits-w3layouts">如果你眼神能够给它半刻的降临<br><br>
                                如果你能听到它说话<br><br>
                                带它回家，它从来都是一无所求</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Modal5 -->
        <!-- //blog -->

        <!-- team -->
        <div class="team" id="team">
            <div class="container">
                <h3 class="agile-title">领&nbsp;养&nbsp;条&nbsp;件</h3>
                <div class="team-agileinfo agileits-w3layouts">
                    <div class="col-md-6 team-grid w3-agileits">
                        <div class="team-grid-right">
                            <img src="images/t1.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="team-grid-left">
                            <h4>领养人</h4>
                            <p>领养人须年满22岁，有稳定的工作稳定的收入和住房。（不符条件：未满22岁/学生/合租/店铺不建议领养）</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 team-grid w3-agileits">
                        <div class="team-grid-right aliquam">
                            <img src="images/t2.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="team-grid-left non">
                            <h4>领宠须知</h4>
                            <p>领养人要爱护看护好动物，家里有防护栏防护。领养宠物须在一年内完成绝育和接受固定10次回访。</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="team-agileinfo">
                    <div class="col-md-6 team-grid w3-agileits">
                        <div class="team-grid-right">
                            <img src="images/t3.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="team-grid-left">
                            <h4>领养资料</h4>
                            <p>领养动物须在一年之内完成动物绝育（请及时把绝育时的照片以及医院票据发给回访人员，以便登记）</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 team-grid w3-agileits">
                        <div class="team-grid-right aliquam">
                            <img src="images/t4.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="team-grid-left non">
                            <h4>注意事项</h4>
                            <p>领养人不得因为任何理由遗弃或私下转送领养宠物，为方便回访管理，领养人勿私下将领养猫带离主城。</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //team -->
        <?php   
            include 'connect.php';
        ?>
        <!-- contact -->
        <div class="contact" id="contact">
            <div class="container">
                <h3 class="agile-title">联&nbsp;&nbsp;系&nbsp;&nbsp;我&nbsp;&nbsp;们</h3>
                <div class="col-md-9 col-sm-9 contact-right">
                    <?php
                    error_reporting(0);
                        if ($_GET['action']=='add'){
                            if(isset($_COOKIE['yhm'])) {
                                $query = mysqli_query($_conn,"insert into send (name,email,subject,phone,message,username,status) values ('{$_POST['name']}','{$_POST['email']}','{$_POST['subject']}','{$_POST['phone']}','{$_POST['message']}','{$_COOKIE['yhm']}',0)")or die(mysqli_error());
                                //数据库操作命令 mysql_query();
                                echo "<script type='text/javascript'>alert('发送成功');window.location.href='index.php';</script>";
                            }
                            else {
                                echo "<script type='text/javascript'>alert('请先登录');window.location.href='user_login.php';</script>";
                            }
                        }

                    ?>
                    <form method="post" action="?action=add" >
                        <input type="text" name="name" placeholder="Your name" required>
                        <input type="email" name="email" placeholder="Your email" required>
                        <input type="text" name="subject" placeholder="Your subject" required>
                        <input type="text" name="phone" placeholder="Phone number" required>
                        <textarea name="message" placeholder="Your message" required></textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
                <div class="col-md-3 col-sm-3 contact-left">
                    <div class="address">
                        <h4><i class="fa fa-map-marker" aria-hidden="true"></i>位&nbsp;&nbsp;置</h4>          
                        <p>河北省石家庄市长安区</p>
                        <p>胜利北街道北二环东路十七号石家庄铁道大学</p>
                    </div>
                    <div class="phone">
                        <h4>
                            <i class="fa fa-phone" aria-hidden="true"></i>电&nbsp;&nbsp;话</h4>
                        <p>☛15633578736</p>
                        <p>☛18031464921</p>
                    </div>
                    <div class="email">
                        <h4>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>邮&nbsp;&nbsp;件</h4>
                        <p>
                            <a href="mailto:info@example.com">2856559871@qq.com</a>
                        </p>
                        <p>
                            <a href="mailto:info@example.com">2950093814@qq.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //contact -->

        <!-- footer -->
        <section class="footer-w3">
            <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-4 footer-agile1" data-aos="zoom-in">
                    <h3>关于流浪猫狗</h3>
                    <p class="footer-p1">猫猫狗狗也是有生命的，我们站在食物链的顶端，可以俯瞰一切生物，并不是要欺负我们之下的动物，而是要做到保护它们。流浪猫狗与人类一样享有生存的权利，保障流浪猫狗生存福利是社会发展之必然。
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 footer-mid-w3" data-aos="zoom-in">
                    <h3>照片墙</h3>
                    <div class="agileinfo_footer_grid1">
                        <a href="#">
                            <img src="images/f1.jpg" alt=" " class="img-responsive">
                        </a>
                    </div>
                    <div class="agileinfo_footer_grid1">
                        <a href="#">
                            <img src="images/f2.jpg" alt=" " class="img-responsive">
                        </a>
                    </div>
                    <div class="agileinfo_footer_grid1">
                        <a href="#">
                            <img src="images/f3.jpg" alt=" " class="img-responsive">
                        </a>
                    </div>
                    <div class="agileinfo_footer_grid1">
                        <a href="#">
                            <img src="images/f4.jpg" alt=" " class="img-responsive">
                        </a>
                    </div>
                    <div class="agileinfo_footer_grid1">
                        <a href="#">
                            <img src="images/f5.jpg" alt=" " class="img-responsive">
                        </a>
                    </div>
                    <div class="agileinfo_footer_grid1">
                        <a href="#">
                            <img src="images/f6.jpg" alt=" " class="img-responsive">
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 footer-agile1" data-aos="zoom-in">
                    <h3>寄语</h3>
                    <p class="footer-p1">※ 善待动物，不要丢弃，遇见流浪动物，请温柔相待。<br>
                        ※ 动物是人类亲密的朋友，人类是动物信赖的伙伴。<br>
                        ※ 动物和我们一样需要爱护。<br>
                        ※ 愿动物的爱永远伴随着你的成长。<br>
                        ※ 与动物和谐相处，共同构建和谐社会。
                    </p>
                </div>
            </div>
        </section>
        <!-- copyright -->
        <div class="w3layouts_copy_right">
            <div class="container">
                <p>三朵小花团队制作，如有侵权请联系删除。<a target="_blank"></p>
            </div>
        </div>
        <!-- //copyright -->
        <!-- //footer -->
		
        <!-- js -->
        <script src="js/jquery-2.2.3.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <!-- Necessary-JavaScript-File-For-Bootstrap -->
        <!-- //js -->

        <!-- Banner Slider -->
        <script src="js/responsiveslides.min.js"></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: true,
                    speed: 1000,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });
            });
        </script>
        <!-- //Banner Slider -->

        <!-- Sticky Navigation Script -->
        <script>
            $(window).scroll(function () {
                if ($(window).scrollTop() >= 795) {
                    $('nav').addClass('fixed-header');
                } else {
                    $('nav').removeClass('fixed-header');
                }
            });
        </script>
        <!-- //Sticky Navigation Script -->

        <!-- simple-lightbox -->
        <script src="js/simple-lightbox.min.js"></script>
        <script>
            $(function () {
                var gallery = $('.agileinfo-gallery-row a').simpleLightbox({
                    navText: ['&lsaquo;', '&rsaquo;']
                });
            });
        </script>
        <link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
        <!-- Light-box css -->
        <!-- //simple-lightbox -->

        <!-- smoothscroll -->
        <script src="js/SmoothScroll.min.js"></script>
        <!-- //smoothscroll -->

        <!-- start-smooth-scrolling -->
        <script src="js/move-top.js"></script>
        <script src="js/easing.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();

                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <!-- //end-smooth-scrolling -->

        <!-- smooth-scrolling-of-move-up -->
        <script>
            $(document).ready(function () {
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <!-- //smooth-scrolling-of-move-up -->

        <!-- Owl-Carousel-JavaScript -->
        <script src="js/owl.carousel.js"></script>
        <script>
            $(document).ready(function () {
                $("#owl-demo").owlCarousel({
                    items: 3,
                    lazyLoad: true,
                    autoPlay: true,
                    pagination: true,
                });
            });
        </script>
        <!-- //Owl-Carousel-JavaScript -->
        <?php 
            include 'connect.php';
        ?>
    </body>
</html>