<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/index.css">
    <link rel="stylesheet" href="/travel/Public/Home/Css/traffic.css">
    <script src="/travel/Public/Home/Js/jquery.js"></script>
    <link rel="stylesheet" href="/travel/Public/Home/Css/info.css">
    <style type="text/css">
        .show_info .show_info_con {
            padding: 15px 0 0 0;
            font-size: 16px;
        }
    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/index.css">
    <script src="/travel/Public/Home/Js/jquery.js"></script>
    <script src="/travel/Public/Home/plugin/layer/layer.js"></script>
</head>
<body>
<div class="head">
    <div class="head_con">
        <div class="logo">
            <a href="#">
                <img src="/travel/Public/Home/Images/tuniu.jpg" alt="">
            </a>
        </div>
    </div>
</div>
<div class="menu">
    <div class="menu_con">
        <div class="login_con">
            <i></i>
            <div class="user">
                <a href="<?php echo U('Admin/Public/register');?>">注册</a>
                &nbsp;|&nbsp;
                <a href="<?php echo U('Admin/Public/index');?>">登录</a>
                <div class="message">
                        <span>
                            <a href="<?php echo U('Admin/Public/index');?>"
                               class="btn_login">退出</a>
                            <a id="m" userId="<?php echo (session('id')); ?>">查看订单</a>

                        </span>
                </div>
            </div>
            <b>
                我的途牛
                <s id="s1"></s>
            </b>
        </div>
        <div class="login_content">
                <span class="welcome">
                    欢迎登录途牛旅游网
                </span>
        </div>
    </div>
</div>
<script>
    $(function(){
        $(".login_con").hover(
            function(){
                $(".menu_con .user .message").css("display", "block");
                $(".menu_con .login_con s").css("transform", "rotate(180deg)")
            },
            function(){
                $(".menu_con .user .message").css("display", "none");
                $(".menu_con .login_con s").css("transform", "rotate(0)")
            }
        );
    });


</script>
<div class="head_city">
    <div class="city_top">
        <h1>
            <strong>广东旅游</strong>
            <span>Guangdong</span>
        </h1>
        <div class="slogan">
            <a href="">
                <img src="/travel/Public/Home/Images/img_v1/slogan.png" alt="">
            </a>
        </div>
        <div class="weather">
            <p>广东，简称“粤”，省会广州。位于南岭以南，南海之滨，是岭南文化的重要传承地，也是中国第一经济大省。</p>
        </div>
        <div class="go">
                <span class="want J-want">
                    <i></i>
                    <p>
                        <span>想去</span>
                        <em>520</em>
                    </p>
                </span>
            <span class="been J-been">
                    <i></i>
                    <p>
                        <span>去过</span>
                        <em>520</em>
                    </p>
                </span>
        </div>
        <div class=".j_menu_fixed"></div>
        <div class="city_menu">
            <ul>
                <li><a href="<?php echo U('Home/Blog/index');?>">主页</a></li>
                <li><a href="<?php echo U('Home/Sign/index');?>">景点</a></li>
                <li><a href="">线路</a></li>
                <li><a href="<?php echo U('Home/Food/index');?>">美食</a></li>
                <li><a href="<?php echo U('Home/Hotel/index');?>">住宿</a></li>
                <li><a href="<?php echo U('Home/Traffic/index');?>">交通</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    $("#m").click(function () {

        //判断是否登录
        var userId = $(this).attr("userId");
        if(userId != "") {

           $(this).prop({"href": "http://localhost/travel/" +
           "index.php/Home/OrderInfo/query.html?userId=" + userId, "target": "_blank"});
        }else {

            layer.alert('您尚未登录，请先登录', {
                skin: 'layui-layer-molv' //样式类名
                ,closeBtn: 0
            });
        }
    });
</script>
</html>
<div class="show_info">
    <h1>广东交通指南</h1>
    <div class="show_info_con">
        <p></p>
        <font color="#000000">
            &nbsp;民航：省内的广州、深圳、汕头、珠海、湛江、佛山、惠州、梅州等地都有民用机场。
            <br>铁路：广东省对外铁路运输主要依靠京广、京九两条大动脉。广州站是京广线的南方始发站，
            深圳站、广州东站、东莞东站又是京九铁路南端的客运始发站。广州到粤西的肇庆、
            阳江、茂名、湛江和西部地区的南宁、昆明、柳州、贵阳、重庆等城市的列车经由广湛铁路，
            广州到粤东的惠州、河源、梅州、潮州、揭阳、汕头经由广梅汕铁路。
            <br>公路：广东是目前中国高速公路通车里程最高的省份，已建成的高速公路有：
            广州环城高速公路、广州－花都－清远、广州－佛山－三水、广州－鹤山－开平、
            广州－虎门－深圳、深圳－汕尾－汕头、虎门－珠海、深圳机场－盐田港、
            深圳龙岗－惠州等。105、106、107、205、321、324、325七条国道在省会广州交汇。
            <br>省会广州及珠江三角洲各城市与香港、澳门之间每天都有数十班直通巴士往返。
            <br>水运：珠江是仅次于长江的中国第二大通航运河。客运航线从香港、澳门、深圳、
            珠海直达广州、肇庆、梧州等内河港口。汕头港是港、台之间重要的中转港，有
            往香港的定期客运班轮。雷州半岛南端的海安港是大陆连接海南岛的门户，每天有
            数十班车客渡昼夜通航。
        </font>
    </div>
</div>
</body>
<script type="text/javascript">
    $(function () {
        $(".city_top .city_menu ul li:nth-child(6)").addClass("on");
    });
</script>
</html>