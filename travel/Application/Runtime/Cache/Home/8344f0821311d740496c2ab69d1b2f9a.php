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
                <li><a href="<?php echo U('HomePage/Blog/index');?>">主页</a></li>
                <li><a href="<?php echo U('HomePage/Sign/index');?>">景点</a></li>
                <li><a href="">线路</a></li>
                <li><a href="<?php echo U('HomePage/Food/index');?>">美食</a></li>
                <li><a href="<?php echo U('HomePage/Hotel/index');?>">住宿</a></li>
                <li class="on"><a href="<?php echo U('HomePage/Traffic/index');?>">交通</a></li>
            </ul>
        </div>
    </div>
</div>
<script>
    $(function(){
        $(".go .want").hover(
            function(){
                $(".go .want i").css("background-position", "0px -34px");
                $(".go .want span").html("我想去");
            },
            function(){
                $(".go .want i").css("background-position", "0px 0px");
                $(".go .want span").html("想去");
            }
        );
        $(".go .been").hover(
            function(){
                $(".go .been i").css("background-position", "-34px -34px");
                $(".go .been span").html("我去过");
            },
            function(){
                $(".go .been i").css("background-position", "-34px 0px");
                $(".go .been span").html("去过");
            }
        )
    });
</script>
<div class="show_info">
    <h1>阳江交通指南</h1>
    <div class="show_info_con">
        阳江市东与江门市相邻，西与茂名市交界，北与云浮市相接，南临南海，毗邻港澳，
        距广州247公里，距湛江230公里，距珠海160公里，距香港165公里，是连接粤中与粤西的交通走廊。
        325国道(广湛公路)和广茂铁路横贯全市，交通便利。
        <br>自驾车：
        <br>　　由广州北环高速公路经沙贝立交上广佛高速公路，再经324国道可至阳江，车程需3个多小时。
        阳江至闸坡长45公里，半小时车程。
        <br>背包游：
        <br>　　省汽车站与阳江汽车站有豪华大巴对开，每日从07:30到20:30，
        基本上一小时或一个半小时一班，车程3个半小时，车费75元。流花车站以及市汽车站（
        都在广州火车站附近）也有车到阳江。
        <br>　　海陵岛与阳江市汽车站之间有旅游专线车对开，每15分钟一班，半小时车程，车费12元。
        <br>　　海陵岛内交通便利，陆路有公共汽车、的士、电瓶车、黄包车等交通工具，海上有载人机动艇、
        快艇等，到岛内各景点交通十分便利。
        <br>　　闸坡有车抵达广州，一小时或一个半小时一班车，但非直达车，速度较慢，需4个多小时。
        最好是在阳江市区转车到广州，更为便捷。 　
    </div>
</div>
</body>
</html>