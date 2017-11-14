<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/index.css">
    <link rel="stylesheet" href="/travel/Public/Home/Css/cityHotel.css">
    <script src="/travel/Public/Home/Js/jquery.js"></script>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/index.css">
    <link rel="stylesheet" href="/travel/Public/Home/Css/cityHotel.css">
    <script src="/travel/Public/Home/Js/jquery.js"></script>
    <style type="text/css">
        .city_channel .cityHotel_tag .chose_type_btn {
            float: left;
            padding: 0 10px;
            margin-right: 8px;
            color: black;
            font-size: 14px;
            line-height: 24px;
        }
        .city_channel .cityHotel_tag .on {
            background: #00bf4b;
            color: #fff;
            border-radius: 2px;
        }
        .spend {
            float: right;
            margin-top: 5px;
        }
        .spend:hover{cursor: pointer}
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
<div class="new_main city_channel fn-clear">
    <div class="sideR">
        <div class="hot_city">
            <div class="tit1 fn-clear">
                <h1 class="title">
                    <em></em>
                    <a href="#"><?php echo ($name["name"]); ?>酒店</a>
                </h1>
                <span class="cityHotel_tag fn-clear" id="js_cityHotel_tag">
                   <a href="#" class="chose_type_btn">三星级酒店</a>
                   <a href="<?php echo U('cityHotel_4', 'city_id='.$city_id.'&hotel_type=四星级');?>"
                      class="chose_type_btn">四星级酒店</a>
                   <a href="<?php echo U('cityHotel', 'city_id='.$city_id.'&hotel_type=五星级');?>"
                      class="chose_type_btn">五星级酒店</a>
                   <a href="<?php echo U('cityHotel_economics', 'city_id='.$city_id.'&hotel_type=经济型');?>"
                      class="chose_type_btn">经济型酒店</a>

                     <span class="spend">展开</span>
                </span>
                <br/>
                <br/>
                <div id="box">
                    <h1 class="title">
                        <em></em>
                        <a id="search">区域搜索</a>
                    </h1>
                    <form method="post" action="<?php echo U('Hotel/search');?>">
                        <select name="region_id">
                            <option>-----请选择----</option>
                            <?php if(is_array($region)): $i = 0; $__LIST__ = $region;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["id"]); ?>"><?php echo ($val["region_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <input type="hidden" name="city_id" value="<?php echo ($city_id); ?>"/>
                        <input type="submit" value="搜索"/>
                    </form>
                </div>
            </div>
            <div id="js_cityHotel_con">
                <div class="txt txt1" style="display: block;">
                    <ul class="hotel_hot clearfix" id="hotelList">
                        <?php if(is_array($hotel)): $i = 0; $__LIST__ = $hotel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
                                <div class="hotel_pic">
                                    <a href="<?php echo U('HotelDesc/index', 'id='.$val['hotel_id']);?>" target="_blank">
                                        <img src="http://pavo.elongstatic.com/i
                                        /Hotel180_135/0000i60l.jpg"
                                             class="lazy "
                                             data-original="http://pavo.elongstatic.com
                                             /i/Hotel180_135/0000i60l.jpg"
                                             style="width: 180px; height:
                                             120px; display: inline;" alt="广州百凯航空酒店"
                                             title="广州百凯航空酒店">
                                    </a>
                                </div>
                                <div class="hotel_info">
                                    <p class="title">
                                        <a href="/hotel-55755" target="_blank">
                                            <?php echo ($name["name"]); echo ($val["hotel_name"]); ?></a>
                                        <span class="icon ico_star">
                                        <i class="icon star_3"></i>
                                    </span>
                                    </p>
                                    <p class="address">
                                        <span title="<?php echo ($hotel["hotel_addr"]); ?>">
                                            <?php echo ($val["hotel_addr"]); ?>
                                        </span>
                                    </p>
                                    <div class="price">
                                        <i>￥</i>
                                        <span class="num"><?php echo ($val["hotel_price"]); ?></span>
                                        <span class="text">起</span>
                                    </div>
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="application/javascript">

    $("#box").hide();
    $(".spend").click(function () {

        $("#box").toggle();
    });


</script>
</html>
</body>
<script type="application/javascript">
    $(function () {
        $("#js_cityHotel_tag a:nth-child(4)").addClass("on");
    });

    $(function () {
        $(".city_top .city_menu ul li:nth-child(5)").addClass("on");
    });
</script>
</html>