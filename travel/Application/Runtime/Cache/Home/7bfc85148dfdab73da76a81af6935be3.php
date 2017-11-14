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
    <h1>惠州交通指南</h1>
    <div class="show_info_con">
        <font face="宋体">&nbsp;&nbsp;&nbsp;
            惠州交通便利，广汕公路、惠深高速公路、广梅汕铁路贯通惠州；惠州港是对外客货运的深水良港；
            距市区22公里的平潭机场，班机通往北京、杭州、无锡等旅游城市。目前惠州市的交通已是陆、海、
            空全方位运行。
            <br>&nbsp;&nbsp;&nbsp; 惠州水、陆、空的交通都十分便利。 <br>　　
            珠江三角洲地区许多城市都有直通车到惠州。在广州天河客运站，从早6:15分至晚8:00，
            每隔20分钟就有一班车到惠州，票价50元；在深圳，东湖车站从早6:30分起至晚7:30分、
            罗湖车站从早7:00起至晚7:40分每隔20分钟就有一班车到惠州，票价40元。
            市内有28条公共汽车线，贯通市区及周边；市内出租车起表价为5元，2公里后跳表，
            0.5元/200米。
            <br><strong>水路：</strong> <br>&nbsp;&nbsp;&nbsp; 惠州地处东江中下游，
            水路沿东江上航可至河源、龙川，下航可至博罗、石龙、广州，每天都有客轮对开；
            惠州港已对外籍船舶开放，已能航至香港。
            <br><strong>公路： <br></strong>&nbsp;&nbsp;&nbsp; 广汕、广梅公路干线，
            穿越惠州大部分县和乡镇，惠深公路直通深圳和香港，除此之外有惠博沿江公路、金龙大道，
            惠淡公路、深汕公路惠州段等公路，这些道路把惠州联成一个交通网络。公路运输四通八达。
            每天从惠州开往广州、深圳、樟木头等的班车各十多班次。
            <br><strong>铁路：</strong> <br>&nbsp;&nbsp;&nbsp; 广梅汕铁路惠州站已开通至广州、衡阳、
            长沙、深圳、河源等班次。另外，广深铁路在樟木头下车可转车到惠州，
            而在石龙下车可转搭客轮到惠州。
            <br><strong>空运：</strong> <br>&nbsp;&nbsp;&nbsp; 惠阳机场开办了北京、杭州、
            无锡、 苏州、庐山、郑州等民航线。惠阳机场经扩建，：开通了至北京、杭州等七条航线。
            <br><br><br></font>
    </div>
</div>
</body>
</html>