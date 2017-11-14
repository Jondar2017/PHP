<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/index.css">
    <link rel="stylesheet" href="/travel/Public/Home/Css/traffic.css">
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
<div class="content">
    <div class="sideL">
        <div class="fn-clear"></div>
        <div class="food_city">
            <div class="t">
                <i class="icon_che"></i>
                广东交通指南
            </div>
            <div class="a">
                <a href="http://zhanjiang.cncn.com/info/8334/">
                    <p class="tit">[湛江]湛江交通指南</p>
                    <p class="con">
                        ◇ 湛江——湖光岩 霞山：汽车总站3线公共汽车每15分钟一班（路程：18公里，开车时间：
                        6：30－18：30，票价2．50元） 赤坎：汽车总站（寸金公园门口）6线公共汽车每30分钟一班
                        （路程：22公里，开车时间：6：30－17：30，票价：3．50元）
                        ◇ 湛江——雷州 大巴：每15分钟...
                    </p>
                </a>
                <a href="http://shanwei.cncn.com/info/8333/">
                    <p class="tit">[汕尾]汕尾交通指南</p>
                    <p class="con">
                        外部交通 汕尾市境内有324国道和深圳至汕头高速公路，海上距离香港81海里。
                        市区有汕尾至深圳（罗湖车站）、汕尾至九龙（体育馆）、汕尾至广州（天河客运站快 车中心）、
                        汕尾至汕头（总站）的高速直达快车，跨县区的高速直达车有汕尾至陆丰、
                        甲于、碣石，直达专线车有汕...
                    </p>
                </a>
                <a href="http://heyuan.cncn.com/info/8332/">
                    <p class="tit">[河源]河源交通指南</p>
                    <p class="con">
                        河源拥有广东省最长的铁路线（京九线和广梅汕线在龙川接轨），
                        205国道贯穿全境，105国道和河汕公路分别在西北和东南部穿过，河惠高速、
                        河龙高速、粤赣高速也在建设中，省际、市际之间的交通将更加快捷。
                        市区内拥有多种交通工具，出租汽车，公共汽车，营运摩托车，市民...
                    </p>
                </a>
                <a href="http://jieyang.cncn.com/info/8331/">
                    <p class="tit">[揭阳]揭阳交通指南</p>
                    <p class="con">
                        揭阳地理位置得天独厚，位于粤东沿海中部，历来是粤东、
                        赣南及闽西等地物资集散地，水陆空交通便利。被誉为粤东“黄金水道”的榕江，
                        全长１７５公里，是广东第二深水河，可通航５０００吨海轮，直航香港、广州、上海等地）
                        海岸线长８２公里，拥有神泉、靖海等优良港口。
                    </p>
                </a>
                <a href="http://shaoguan.cncn.com/info/8330/">
                    <p class="tit">[韶关]韶关交通指南</p>
                    <p class="con">航空：飞机场正在扩建改造，改建后南接广州、清远、惠州、河源等市，
                        东达江西，北连湖南，空运能力将大大增强。 铁路：京广铁路大动脉贯穿市境，
                        经韶关市区和乐昌、乳源、曲江三市县，每天有65对列车通过。
                        每天都有往返于韶关-深圳和韶关-广州的特快专列。 从北方来的客...
                    </p>
                </a>
                <a href="http://dongguan.cncn.com/info/8329/">
                    <p class="tit">[东莞]东莞交通指南</p>
                    <p class="con">
                        外部交通 航空 东莞虽然没有自己的机场，但附近有许多机场可以利用，
                        距广州白云机尝深圳机场都不到50公里，行车1小时左右可到，距珠海、
                        佛山及香港新机场也都不到100公里。东莞有机场往来于东莞巴士汽车总站与深圳机场间，
                        发车时间为每天7：00～19：20每小时一班，车票3...
                    </p>
                </a>
                <a href="http://zhongshan.cncn.com/info/6851/">
                    <p class="tit">[中山]中山旅游交通攻略</p>
                    <p class="con">
                        外部交通公路广州各大客运站都有豪华大巴前往中山市，票价20元，
                        车程约1小时。 中山汽车总站地址：中山市石岐本西区富华道与105国道交汇处电话：
                        0760－8633825、8633648售票时间：6：00～20：30（售四天内车票）水运
                        客轮地址：中山市中山港客运口岸 电话：0760－559635...
                    </p>
                </a>
                <a href="http://zhaoqing.cncn.com/info/6850/">
                    <p class="tit">[肇庆]肇庆旅游交通攻略</p>
                    <p class="con">
                        提示：肇庆不大，如果想悠闲地在市区逛逛，可以租一辆自行车，走走停停，
                        又舒服又省钱。肇庆面向穗港澳，是粤港澳通往广西、云南等地的重要交通枢纽，
                        市区距广州90多公里，距深圳200多公里， 距澳门180公里，距香港水路140海里。
                        不过肇庆没有机场，在广州白云机场的路口...
                    </p>
                </a>
                <a href="http://yangjiang.cncn.com/info/6774/">
                    <p class="tit">[阳江]阳江海陵島旅游交通</p>
                    <p class="con">
                        交通从珠海拱北去海陵岛，可至拱北大巴站搭乘每小时一班之中巴至阳江，
                        也可至信禾客运搭乘豪华大巴直达闸波。海陵岛地区以三轮车及机车...
                    </p>
                </a>
                <a href="http://yangjiang.cncn.com/info/6773/">
                    <p class="tit">[阳江]阳江旅游交通攻略</p>
                    <p class="con">
                        自驾车： 由广州北环高速公路经沙贝立交上广佛高速公路，再经324国道可至阳江，
                        车程需3个多小时。阳江至闸坡长45公里，半小时车程。 背包游：
                        省汽车站与阳江汽车站有豪华大巴对开，每日从07:30到20:30，
                        基本上一小时或一个半小时一班，车程3个半小时，车费75元。流花车...
                    </p>
                </a>
            </div>
            <div class="page">
                <div class="page_con">
                    <a class="num" href="<?php echo U('index');?>">1</a>
                    <a class="num" href="<?php echo U('index2');?>">2</a>
                    <span class="active">3</span>
                    <span class="text">共3页</span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>