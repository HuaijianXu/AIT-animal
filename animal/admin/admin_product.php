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
    <style>
        input[type=text] {
            width: 85%;
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
    </style>
    <script src="../js/jquery-2.2.3.min.js"></script>
    <script src="../js/echarts.min.js"></script>
    <script>
        function find() {
            var context = document.getElementById('context').value;
            window.location.href='admin_product.php?context='+context;
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
        ?>
        <div>
            <h3 style=" text-align:center; color:#000; margin-bottom:20px; font-size:24px; font-family:宋体">管理招领</h3>
            <hr align="center">
            <div align="center">
                <input type="text" name="context" id="context" placeholder="请输入关键字">
                <input type="button" value="查找" onclick="find()">
            </div>
            <table>
                <tr>
                    <td id="kind" style="width: 500px;height: 300px;"></td>
                    <td id="place" style="width: 500px;height: 300px;"></td>
                </tr>
            </table>
            <div id="twjs">
                <table class='table table-hover table-striped table-bordered table-sm'>
                    <?php
                    error_reporting(0);
                    $context = $_GET['context'];
                    if ($context==''||$context==null){
                        $query1 = mysqli_query($_conn,"select * from product order by id desc");
                    }
                    else{
                        $sql = "select * from product where title like '%".$_GET['context']."%' or content like '%".$_GET['context']."%' or price like '%".$_GET['context']."%' or place like '%".$_GET['context']."%' or province like '%".$_GET['context']."%' or city like '%".$_GET['context']."%' order by id desc";
                        $query1 = mysqli_query($_conn,$sql);
                    }
                    echo '
                            <tr>
                                <td width="20%">标题</td>  
                                <td>发布人</td>
                                <td>图片</td> 
                                <td>地区</td>
                                <td width="40%">简介</td>   
                                <td>修改</td>
                                <td>删除</td>
                            </tr>';
                    while($row = mysqli_fetch_array($query1)){
                        echo '
                                <tr>
                                    <td class="finKey">'.$row['title'].'</td> 
                                    <td class="finKey">'.$row['price'].'</td>  
                                    <td  width=100px><img src=../upload/'.$row['pic'].' width=100px></td> 
                                    <td class="finKey">'.$row['province'].$row['city'].$row['place'].'</td> 
                                    <td class="finKey">'.$row['content'].' </td>
                                    <td><a href=xiu1.php?id='.$row['id'].'>修改</a></td>
                                    <td><a href="?action=del&id='.$row['id'].'">删除</a></td>
                                </tr>';
                    }
                    echo "<script type='text/javascript'>changeKeyRed('$context')</script>";
                    ?>
                </table>
                <?php
                //phpstorm中不显示warning
                error_reporting(0);
                if ($_GET['action']=="del"){
                    $_query = mysqli_query($_conn,"select * from product where id = ".$_GET['id']);
                    $_rows = mysqli_fetch_array($_query);
                    $query = mysqli_query($_conn,"delete from product  where id= ".$_GET['id']);
                    //删除图片
                    $picname = $_rows['pic'];
                    //获取当前路径
                    $dir= str_replace("/","\\",$_SERVER['DOCUMENT_ROOT']);
                    //拼接图片路径
                    $img_url = $dir."\\"."upload\\".$picname;
                    //执行删除
                    unlink(iconv("utf-8","gb2312",$img_url));
                    $query = mysqli_query($_conn,"delete from product where id= ".$_GET['id']);
                    echo "<script type='text/javascript'>alert('删除成功');window.location.href='admin_product.php';</script>";
                }
                ?>
                <p>&nbsp;</p>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        window.onload = function () {
            var dt;
            var myEcharts_kind = echarts.init(document.getElementById("kind"));
            var xd = new Array();
            var yd = new Array();
            $.ajax({
                url:"echarts.php",
                async:false,
                type:"post",
                data:{
                    method:'kind',
                },
                success:function (data) {
                    dt = data;
                    for (var j=0;j<dt.length;j++) {
                        xd.push(dt[j].name);
                    }
                },
                error:function () {
                    alert('请求失败');
                },
                dataType:'json'
            });
            // 指定图表的配置项和数据
            var option_kind = {
                title: {
                    text: '招领丢失比例'
                },
                tooltip: {
                    show: true
                },
                legend: {
                    data: xd
                },
                series :[
                    {
                        radius:['0%','60%'], //半径
                        label:{
                            normal:{
                                // 取消在原来的位置显示
                                show:false,
                                // 在中间显示
                                // position:'center'
                            },
                            // 高亮扇区
                            emphasis:{
                                show:true,
                                textStyle:{
                                    fontSize:15,
                                    fontWeight:'bold'
                                }
                            }
                        },
                        data:dt,
                        type:'pie',
                        //关掉南丁格尔图
                        //roseType:'radius'
                    }
                ]
            };
            // 使用刚指定的配置项和数据显示图表。
            myEcharts_kind.setOption(option_kind);

            var myEcharts_place = echarts.init(document.getElementById("place"));
            $.ajax({
                url:"echarts.php",
                async:false,
                type:"post",
                data:{
                    method:'place',
                },
                success:function (data) {
                    dt = data;
                    for (var j=0;j<dt.length;j++) {
                        xd.push(dt[j].name);
                    }
                },
                error:function () {
                    alert('请求失败');
                },
                dataType:'json'
            });
            // 指定图表的配置项和数据
            var option_place = {
                title: {
                    text: '所在地域'
                },
                tooltip: {
                    show: true
                },
                legend: {
                    data: xd
                },
                series :[
                    {
                        radius:['0%','60%'], //半径
                        label:{
                            normal:{
                                // 取消在原来的位置显示
                                show:false,
                                // 在中间显示
                                // position:'center'
                            },
                            // 高亮扇区
                            emphasis:{
                                show:true,
                                textStyle:{
                                    fontSize:15,
                                    fontWeight:'bold'
                                }
                            }
                        },
                        data:dt,
                        type:'pie',
                        //关掉南丁格尔图
                        //roseType:'radius'
                    }
                ]
            };
            // 使用刚指定的配置项和数据显示图表。
            myEcharts_place.setOption(option_place);
        }
    </script>
</html>