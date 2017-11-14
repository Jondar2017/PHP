<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/index.css">
    <link rel="stylesheet" href="/travel/Public/Home/Css/traffic.css">
    <link rel="stylesheet" href="/travel/Public/Home/Css/info.css">
    <script src="/travel/Public/Home/Js/jquery.js"></script>
    <style type="text/css">

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
    <h1>广东机场汇总</h1>
    <div class="show_info_con">
        <p></p>
        <table>
            <tr>
                <td class="w1">广东</td>
                <td class="w2">广州白云国际机场</td>
                <td class="w3">中南地区</td>
                <td class="w1">广东</td>
                <td class="w1">CAN</td>
            </tr>
            <tr>
                <td class="w1"></td>
                <td class="w2">深圳宝安国际机场</td>
                <td class="w3">中南地区</td>
                <td class="w1">广东</td>
                <td class="w1">SAX</td>
            </tr>
            <tr>
                <td class="w1"></td>
                <td class="w2">深圳南头直升机场</td>
                <td class="w3">中南地区</td>
                <td class="w1">广东</td>
                <td class="w1">NNN</td>
            </tr>
            <tr>
                <td class="w1"></td>
                <td class="w2">湛江坡头直升机场</td>
                <td class="w3">中南地区</td>
                <td class="w1">广东</td>
                <td class="w1">NNN</td>
            </tr>
            <tr>
                <td class="w1"></td>
                <td class="w2">珠海九州直升机场</td>
                <td class="w3">中南地区</td>
                <td class="w1">广东</td>
                <td class="w1">NNN</td>
            </tr>
            <tr>
                <td class="w1"></td>
                <td class="w2">罗定机场</td>
                <td class="w3">中南地区</td>
                <td class="w1">广东</td>
                <td class="w1">NNN</td>
            </tr>
            <tr>
                <td class="w1"></td>
                <td class="w2">阳江合山机场</td>
                <td class="w3">中南地区</td>
                <td class="w1">广东</td>
                <td class="w1">NNN</td>
            </tr>
            <tr>
                <td class="w1"></td>
                <td class="w2">湛江新塘机场</td>
                <td class="w3">中南地区</td>
                <td class="w1">广东</td>
                <td class="w1">NNN</td>
            </tr>
            <tr>
                <td class="w1"></td>
                <td class="w2">珠海三灶机场</td>
                <td class="w3">中南地区</td>
                <td class="w1">广东</td>
                <td class="w1">ZUH</td>
            </tr>
            <tr>
                <td class="w1"></td>
                <td class="w2">梅县机场</td>
                <td class="w3">中南地区</td>
                <td class="w1">广东</td>
                <td class="w1">MXZ</td>
            </tr>
            <tr>
                <td class="w1"></td>
                <td class="w2">汕头外砂机场</td>
                <td class="w3">中南地区</td>
                <td class="w1">广东</td>
                <td class="w1">SWA</td>
            </tr>
            <tr>
                <td class="w1"></td>
                <td class="w2">湛江机场</td>
                <td class="w3">中南地区</td>
                <td class="w1">广东</td>
                <td class="w1">ZHA</td>
            </tr>
        </table>
    </div>
</div>
</body>
<script type="text/javascript">
    $(function () {
        $(".city_top .city_menu ul li:nth-child(6)").addClass("on");
    });
</script>
</html>