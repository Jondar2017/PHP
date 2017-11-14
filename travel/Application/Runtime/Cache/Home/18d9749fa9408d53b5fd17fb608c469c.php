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
<div class="content">
    <div class="sideL">
        <div class="fn-clear"></div>
        <div class="food_city">
            <div class="t">
                <i class="icon_che"></i>
                广东交通指南
            </div>
            <div class="a">
                <a href="http://shenzhen.cncn.com/info/8344/">
                    <p class="tit">[深圳]深圳交通指南</p>
                    <p class="con">
                        航空：深圳宝安国际机场距离深圳市区32公里，现已开通国内航线76条，
                        运营航线53条，平均每天约有80多班航班飞往全国约50多个城市。
                        从机场至深圳火车站有K568路直达公交快线，深圳机场发车时间为每天7：30～23：30，
                        火车站发车时间为每天6：00～20：00，发车间隔为10分钟...
                    </p>
                </a>
                <a href="http://foshan.cncn.com/info/8343/">
                    <p class="tit">[佛山]佛山交通指南</p>
                    <p class="con">
                        佛山的交通基础设施完善，已形成一个公路、铁道、航空和河运齐备、
                        辐射力强的现代化交通网络。 广珠、广湛、广肇公路和广佛、佛开、
                        厂三高速公路穿越佛山，佛山公路通车总里程达3479.4 公里，
                        其中高速公路84.3公里，公路密度达91.7 公里／百平方公里，居全国前列。 广湛...
                    </p>
                </a>
                <a href="http://guangzhou.cncn.com/info/8342/">
                    <p class="tit">[广州]广州交通指南</p>
                    <p class="con">
                        方便快捷的公共汽车，线路遍布广州，可以让您到达市内任何角落。
                        外部交通 航空 广州白云国际机场离市区，6公里左右。
                        客运吞吐量仅次于北京首都国际机场，居全国第二，有至美国洛杉矶、
                        荷兰阿姆斯特丹、澳大利亚悉尼、墨尔本、日本大阪及遍布东南亚地区等16条国际航线及...
                    </p>
                </a>
                <a href="http://chaozhou.cncn.com/info/8341/">
                    <p class="tit">[潮州]潮州交通指南</p>
                    <p class="con">
                        潮州交通方便，陆海空立体交通网络已形成。辖区内国道、
                        省道和地方公路总长共760公里，新建广梅汕铁路已通车，
                        潮州至福建漳州的铁路也已列入省计划；潮州港经国务院批准为对外开放一类口岸，
                        潮州市区距离汕头机场仅有30多公里，距潮州市区仅17公里的潮汕天鹅机场正在规划...
                    </p>
                </a>
                <a href="http://zhuhai.cncn.com/info/8340/">
                    <p class="tit">[珠海]珠海交通指南</p>
                    <p class="con">
                        外部交通 珠海距广州不到150公里，一般去珠海旅游都取道广州，经中山市到达珠海。
                        航空 珠海机场在三灶岛上，毗邻航天城，距离市区40公里，
                        已开通飞往全国30多个城市的航线。珠海机场每一个航班到达都会有一班车到市区，
                        20元/人。如果乘坐的士可以选择红色的粤C车牌的，...
                    </p>
                </a>
                <a href="http://zhaoqing.cncn.com/info/8339/">
                    <p class="tit">[肇庆]肇庆交通指南</p>
                    <p class="con">
                        肇庆面向穗港澳，是粤港澳通往广西、云南等地的重要交通枢纽，
                        市区距广州90多公里，距深圳200多公里， 距澳门180公里，
                        距香港水路140海里。不过肇庆没有机场，在广州白云机场的路口有往返的巴士，
                        2小时左右就可以到达。 铁路 肇庆火车站位于市区北部的火车站路，就在七星...
                    </p>
                </a>
                <a href="http://qingyuan.cncn.com/info/8338/">
                    <p class="tit">[清远]清远交通指南</p>
                    <p class="con">
                        外部交通 清远的公路四通八达，107国道贯穿全市，沿广清高速公路从清
                        远市区到广州只需1个小时，从广州至清远，可以到环市西路省汽车站、
                        市汽车以及罗冲围汽车站乘班车，从6：30～19：30都有固定班车，
                        票价15～25元，全程约1．5小时。通过106国道可以直接到达韶关、江西，...
                    </p>
                </a>
                <a href="http://jiangmen.cncn.com/info/8337/">
                    <p class="tit">[江门]江门交通指南</p>
                    <p class="con">
                        外部交通 公路 205国道横贯江门市，为广州至湛江、海南岛公路交通要道。
                        广州天河客运站有广州到江门的大客车，票价35元，7:25～18:25，每隔60分钟一班。
                        江门及各市汽车咨询电话： 江门汽车总站：3332393 新会长途汽车：
                        6692695 鹤山长途汽车：8882597水运 江门市水陆交...
                    </p>
                </a>
                <a href="http://yunfu.cncn.com/info/8336/">
                    <p class="tit">[云浮]云浮交通指南</p>
                    <p class="con">
                        云浮市位于广东省中西部，西江中游以南。东紧接珠江三角洲，西靠桂东南，
                        是粤西地区和西江流域的重要交通枢纽。市区距肇庆60公里，广州160公里，
                        水路距香港177海里。 境内324国道一、二级水泥路的改造工程已基本完成，
                        并投入使用，由市区到市属各县（市）县城公路均为一...
                    </p>
                </a>
                <a href="http://meizhou.cncn.com/info/8335/">
                    <p class="tit">[梅州]梅州交通指南</p>
                    <p class="con">
                        航空 梅州机场位于梅州市梅江区三角镇。 铁路 梅州火车站位于梅州市梅江区三角镇。
                        路 梅州各公路客运站地址 梅州汽车客运公司 梅石路 奔腾小汽车出租公司 梅龙商场
                        梅州市公共汽车公司 梅江三路
                    </p>
                </a>
            </div>
            <div class="page">
                <div class="page_con">
                    <a class="num" href="<?php echo U('index');?>">1</a>
                    <span class="active">2</span>
                    <a class="num" href="<?php echo U('index3');?>">3</a>
                    <a class="num next" href="<?php echo U('index3');?>">
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