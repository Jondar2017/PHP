<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/index.css">
    <link rel="stylesheet" href="/travel/Public/Home/Css/traffic.css">
    <script src="/travel/Public/Home/Js/jquery.js"></script>
    <link rel="stylesheet" href="/travel/Public/Home/Css/info.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/index.css">
    <script src="/travel/Public/Home/Js/jquery.js"></script>
</head>
<body>
<div class="head">
    <div class="head_con">
        <div class="logo"><a href="#"><img src="/travel/Public/Home/Images/tuniu.jpg" alt=""></a></div>
    </div>
</div>
<div class="menu">
    <div class="menu_con">
        <div class="login_con">
            <i></i>
            <div class="user">
                <a href="#">注册</a>
                &nbsp;|&nbsp;
                <a href="#">登录</a>
                <div class="message">
                        <span>
                            <a href="#" target="_blank" class="btn_login">登录途牛</a>
                            <a href="#" target="_blank">查看订单</a>
                            <a href="#" target="_blank">手机查订单</a>
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
</html>
<div class="show_info">
    <h1>汕头交通指南</h1>
    <div class="show_info_con">
        <font face="宋体"><strong>航空　</strong>
            <br>　　汕头外沙机场位于汕头市区东北方向13公里处。在汕头机场，可以坐机场中巴到市中心，
            每位10元。
            <br></font><font face="宋体"><strong>铁路 <br>
    </strong>　　汕头火车站位于汕头市区东端，公交2路、4路、6路、8路、11路、
        12路的终点站都在火车站前的广场上。 <br><strong>公路</strong> <br>　　汕头--广州（高速直达，约5小时30分）
        <br>　　汽车总站发车时间：7:35-1:00 每小时一班。 <br>　　东站发车时间：8:05-1:15 每小时一班。 <br>　　汕头-深圳 <br>　　汽车总站发车时间：6:10-21:00 每小时一至二班。
        <br>　　东站发车时间：6:40-21:30 每小时两至三班。 <br><strong>内部交通</strong> <br>　　汕头的公共汽车票价1～2元。出租车的收费有几种，起步价为8元，起步价为7元，
        3公里后开始跳表，还有起步价9元的。在汕头坐三轮车最方便，还可以讲价。</font>
        <br></div>
</div>
</body>
<script type="text/javascript">
    $(function () {
        $(".city_top .city_menu ul li:nth-child(6)").addClass("on");
    });
</script>
</html>