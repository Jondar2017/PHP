<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/index.css">
    <link rel="stylesheet" href="/travel/Public/Home/Css/traffic.css">
    <script src="/travel/Public/Home/Js/jquery.js"></script>
    <style type="text/css">
        .page .active {
            border: 1px solid #00bf4a;
            font-weight: bold;
            color: #fff;
            background-color: #00bf4a;
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
                <?php if($_SESSION['username']== null): ?><a href="<?php echo U('Admin/Public/register');?>">注册</a>
                    &nbsp;|&nbsp;
                    <a href="<?php echo U('Admin/Public/index');?>">登录</a>
                    <?php else: ?>
                    <span><?php echo (session('username')); ?></span><?php endif; ?>
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
                <li><a href="<?php echo U('Home/Index/index');?>">主页</a></li>
                <li><a href="<?php echo U('Home/Sign/index');?>">景点</a></li>
                <li><a href="<?php echo U('Home/Line/index');?>">线路</a></li>
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
           "index.php/Home/OrderInfo/query.html?id=2&userId=" + userId, "target": "_blank"});
        }else {

            layer.alert('您尚未登录，请先登录', {
                skin: 'layui-layer-molv' //样式类名
                ,closeBtn: 0
            });
        }
    });
</script>
</html>
<div class="content">
    <div class="sideL">
        <div class="fn-clear"></div>
        <div class="food_city">
            <div class="t">
                <i class="icon_che"></i>
                广东交通指南
            </div>
            <div class="a">
                <a href="<?php echo U('Info/info');?>">
                    <p class="tit">[广东]广东机场汇总</p>
                    <p class="con">
                        广东 广州白云国际机场 中南地区 广东 CAN 深圳宝安国际机场 中南地区 广东 SZX
                        深圳南头直升机场 中南地区 广东 NNN 湛江坡头直升机场 中南地区 广东 NNN
                        珠海九州直升机场 中南地区 广东 NNN 罗定机场 中南地区 广东 NNN 阳江合山机场
                        中南地区 广东 NNN 湛江新塘机场...
                    </p>
                </a>
                <a href="<?php echo U('Info/info1');?>">
                    <p class="tit">[广东]广东交通指南</p>
                    <p class="con">
                        民航：省内的广州、深圳、汕头、珠海、湛江、佛山、惠州、梅州等地都有民用机常铁路：
                        广东省对外铁路运输主要依靠京广、京九两条大动脉。广州站是京广线的南方始发站，
                        深圳站、广州东站、东莞东站又是京九铁路南端的客运始发站。广州到粤西的肇庆、阳江、
                        茂名、湛江和西...
                    </p>
                </a>
                <a href="<?php echo U('Info/info2');?>">
                    <p class="tit">[阳江]阳江交通指南</p>
                    <p class="con">
                        阳江市东与江门市相邻，西与茂名市交界，北与云浮市相接，南临南海，毗邻港澳，
                        距广州247公里，距湛江230公里，距珠海160公里，距香港165公里，是连接粤中与粤西的交通走廊。
                        325国道(广湛公路)和广茂铁路横贯全市，交通便利。 自驾车：
                        由广州北环高速公路经沙贝立交上广...
                    </p>
                </a>
                <a href="<?php echo U('Info/info3');?>">
                    <p class="tit">[中山]中山交通指南</p>
                    <p class="con">
                        外部交通 公路 广州各大客运站都有豪华大巴前往中山市，票价20元，车程约1小时。
                        中山汽车总站 地址：中山市石岐本西区富华道与105国道交汇处 电话：
                        0760－8633825、8633648 售票时间：6：00～20：30（售四天内车票） 水运
                        客轮地址：中山市中山港客运口岸 电话：0760－...
                    </p>
                </a>
                <a href="<?php echo U('Info/info4');?>">
                    <p class="tit">[汕头]汕头交通指南</p>
                    <p class="con">
                        航空 汕头外沙机场位于汕头市区东北方向13公里处。在汕头机场，可以坐机场中巴到市中心，每位10元。
                        铁路 汕头火车站位于汕头市区东端，公交2路、4路、6路、8路、11路、12路的终点站都在火车站前的广场上
                        。 公路 汕头--广州（高速直达，约5小时30分） 汽车总站发车时间：...
                    </p>
                </a>
                <a href="<?php echo U('Info/info5');?>">
                    <p class="tit">[惠州]惠州交通指南</p>
                    <p class="con">
                        惠州交通便利，广汕公路、惠深高速公路、广梅汕铁路贯通惠州；惠州港是对外客货运的深水良港；
                        距市区22公里的平潭机场，班机通往北京、杭州、无锡等旅游城市。目前惠州市的交通已是陆、海、空全
                        方位运行。 惠州水、陆、空的交通都十分便利。 珠江三角洲地区许多城市都有...
                    </p>
                </a>
                <a href="http://maoming.cncn.com/info/8345/">
                    <p class="tit">[茂名]茂名交通指南</p>
                    <p class="con">
                        往来交通：广州-茂名交通指南 广州—茂名 ◇汽车：广州市汽车站发车，票价101元，
                        全程5－6个小时，，每天有10趟，分别是上午8：40时、10：00时，中午12：30时、13：00时
                        、13：50时，下午14：50时、16：30时及晚上18：30时、20：00时和20：50时。
                        ◇火车：共有7趟，时间和...
                    </p>
                </a>
            </div>
            <div class="page">
                <div class="page_con">
                    <span class="active">1</span>
                    <a class="num" href="<?php echo U('index2');?>">2</a>
                    <a class="num" href="<?php echo U('index3');?>">3</a>
                    <a class="num next" href="<?php echo U('index2');?>">
                        <span>下一页</span>
                        <i class="triangle"></i>
                    </a>
                    <span class="text">共3页</span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    $(function () {
        $(".city_top .city_menu ul li:nth-child(6)").addClass("on");
    });
</script>
</html>