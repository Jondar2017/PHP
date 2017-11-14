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
        strong, b {
            font-weight: bold;
        }
    </style>
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
    <h1>中山交通指南</h1>
    <div class="show_info_con">
        <strong>外部交通
            <br>公路
        </strong>
        <br>广州各大客运站都有豪华大巴前往中山市，票价20元，车程约1小时。
        <br>中山汽车总站
        <br>地址：中山市石岐本西区富华道与105国道交汇处
        <br>电话：0760－8633825、8633648
        <br>售票时间：6：00～20：30（售四天内车票）
        <br>
        <strong>水运</strong>
        <br>客轮地址：中山市中山港客运口岸
        <br>电话：0760－5596350、5595333－282
        <br>下列各点往中山港乘船可享受免费乘车服务：
        <br>石岐：西区广场售票处211、212卡、富华酒店、中山纪念堂对面、京华酒店
        <br>小榄：固力酒店、菊城酒店、花城酒店、菊城迎宾馆、小榄大酒店、东升粤化酒店
        <br>
        <br><strong>市内交通 <br>旅游专线车</strong>
        <br>行车路线：富华酒店—紫马岭公园—海上庄园路口—影视城—中山故居—影视城—海上庄园路口—紫马岭公园
        —富华酒店站。开车时间8：00～17：00，每小时一班，其中中山故居站：9：00～18：00。
        <br><strong>旅游观光巴士</strong>
        <br>行车路线：富华酒店站—孙文公园—经博爱路、起湾道—紫马岭公园—嘉华电子厂—紫马岭公园—人
        大政协大楼—中银大厦—富华酒店站。开车时间8：00～17：00，每半小时一班。
    </div>
</div>
</body>
</html>