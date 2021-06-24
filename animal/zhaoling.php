<!DOCTYPE html>
<html>
    <head>
        <title>招领中心</title>     
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
    <script src="js/china.js"></script>
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
        <table>
            <tr>
                <td id="cloud" style="width: 500px;height: 500px;"></td>
                <td id="china" style="width: 700px;height: 500px;"></td>
            </tr>
        </table>
    </div>
        <?php 
        include 'connect.php';
        error_reporting(0)
        ?>
        <?php
            $context = $_GET['context'];
            if ($context==''||$context==null){
                $query1 = mysqli_query($_conn,"select * from product order by id desc");
            }
            else{
                $sql = "select * from product where title like '%".$_GET['context']."%' or content like '%".$_GET['context']."%' or price like '%".$_GET['context']."%' order by id desc";
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
                                        <img src=./upload/'.$row['pic'].' width=200px title="imag-name" />
                                    </div>
                                </td>
                                <td style="vertical-align:middle;text-align:left;">
                                    <div class="artical-info" style="width:1000px;" id="test">                                         
                                        <h3 class="finKey">'.$row['title'].'</h3>
                                        <h5 class="finKey">'.$row['province'].$row['city'].$row['place'].'&nbsp&nbsp'.$row['time'].'</h5>                                                                                 
                                        <a href=talk.php?ToUserID='.$row['uid'].'>'.$row['price'].'</a>                                                                                                                                                                                                                  
                                        <p style="font-size: 20px;" class="finKey">'.$row['content'].'</p>
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
    <script type="text/javascript">
        window.onload = function(){
            $.ajax({
                url:"./cloud.php",
                async : true ,
                type : "POST",
                dataType : "json",
                success : function(data){
                    var dt;
                    var mydata = new Array();
                    dt = data;
                    for(var i=0;i<dt.length;i++){
                        var d = {};
                        d['name'] = dt[i].name;
                        d['value'] = dt[i].value;
                        mydata.push(d);
                    }
                    var option = {
                        title:{
                            text:'热词榜',
                            x:'center',
                            textStyle:{
                                fontSize:20
                            }
                        },
                        backgroundColor:'#FFFFFF',
                        tooltip:{
                            show:true
                        },
                        series: [{
                            type: 'wordCloud',
                            gridSize:2,
                            sizeRange: [20, 50],//画布范围，如果设置太大会出现少词（溢出屏幕）
                            rotationRange: [-90, 90],//数据翻转范围
                            shape: 'circle',
                            drawOutOfBound:false,
                            textStyle: {
                                normal: {
                                    color: function() {
                                        return 'rgb(' + [
                                            Math.round(Math.random() * 160),
                                            Math.round(Math.random() * 160),
                                            Math.round(Math.random() * 160)
                                        ].join(',') + ')';
                                    }
                                },
                                emphasis: {
                                    shadowBlur: 10,
                                    shadowColor: '#333'
                                }
                            },
                            data: mydata
                        }]
                    };
                    var chart = echarts.init(document.getElementById('cloud'));
                    chart.setOption(option);
                    chart.on('click',function(params){
                        var url = "zhaoling.php?context="+params.name;
                        window.location.href = url;
                    });
                },
                error : function(){
                    alert("请求失败");
                },
            });
            $.ajax({
                url:"./china.php",
                async : true,
                type : "POST",
                dataType : "json",
                success : function(data){
                    var dt;
                    var mydata = new Array();
                    dt = data;
                    for(var i=0;i<dt.length;i++){
                        var d = {};
                        d['name'] = dt[i].name;
                        d['value'] = dt[i].value;
                        mydata.push(d);
                    }
                    var optionMap = {
                        backgroundColor : '#FFFFFF',
                        title : {
                            text : '全国数据统计',
                            x : 'center'
                        },
                        tooltip : {
                            formatter : function(params) {
                                return params.name + '<br/>' + '数量 : '
                                    + params['data']['value'];
                            }//数据格式化
                        },
                        //左侧小导航图标
                        visualMap : {
                            min : 0,
                            max : 100,
                            text : [ '多', '少' ],
                            realtime : false,
                            calculable : true,
                            inRange : {
                                color : [ 'lightskyblue', 'yellow', 'orangered' ]
                            }
                        },
                        //配置属性
                        series : [ {
                            type : 'map',
                            mapType : 'china',
                            label : {
                                show : true
                            },
                            data : mydata,
                            nameMap : {
                            '南海诸岛' : '南海诸岛',
                            '北京' : '北京市',
                            '天津' : '天津市',
                            '上海' : '上海市',
                            '重庆' : '重庆市',
                            '河北' : '河北省',
                            '河南' : '河南省',
                            '云南' : '云南省',
                            '辽宁' : '辽宁省',
                            '黑龙江' : '黑龙江省',
                            '湖南' : '湖南省',
                            '安徽' : '安徽省',
                            '山东' : '山东省',
                            '新疆' : '新疆维吾尔自治区',
                            '江苏' : '江苏省',
                            '浙江' : '浙江省',
                            '江西' : '江西省',
                            '湖北' : '湖北省',
                            '广西' : '广西壮族自治区',
                            '甘肃' : '甘肃省',
                            '山西' : '山西省',
                            '内蒙古' : "内蒙古自治区",
                            '陕西' : '陕西省',
                            '吉林' : '吉林省',
                            '福建' : '福建省',
                            '贵州' : '贵州省',
                            '广东' : '广东省',
                            '青海' : '青海省',
                            '西藏' : '西藏自治区',
                            '四川' : '四川省',
                            '宁夏' : '宁夏回族自治区',
                            '海南' : '海南省',
                            '台湾' : '台湾',
                            '香港' : '香港',
                            '澳门' : '澳门'
                        }
                        } ]
                    };
                    //初始化echarts实例
                    var myChart = echarts.init(document.getElementById('china'));
                    myChart.on('click', function (params) {
                        window.location.href = "./province.php?province="+params.name;
                    });
                    //使用制定的配置项和数据显示图表
                    myChart.setOption(optionMap);
                },
                error : function(){
                    alert("请求失败");
                },
            });
        }
    </script>
</html>

