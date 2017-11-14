<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/hotel.css"/>
    <link rel="stylesheet" href="/travel/Public/Home/Css/index.css">
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
<div id="wrapper">
    <div class="sideL">
        <div class="change_box">
            <div class="tit">
                <h1>
                    <a>广东酒店预订</a>
                </h1>
            </div>
            <div class="txt jd">
                <dl>
                    <dt>
                        入住城市
                        <s>
                            <a class="open" id="open">展开</a>
                        </s>
                    </dt>
                    <dd class="jd_bg">
                        <a href="http://jiudian.cncn.com/guangzhou" target="_blank" title="广州酒店">广州</a>
                        <a href="http://jiudian.cncn.com/shenzhen" target="_blank" title="深圳酒店">深圳</a>
                        <a href="http://jiudian.cncn.com/dongguan" target="_blank" title="东莞酒店">东莞</a>
                        <a href="http://jiudian.cncn.com/huizhou" target="_blank" title="惠州酒店">惠州</a>
                        <a href="http://jiudian.cncn.com/zhongshan" target="_blank" title="中山酒店">中山</a>
                        <a href="http://jiudian.cncn.com/foshan" target="_blank" title="佛山酒店">佛山</a>
                        <a href="http://jiudian.cncn.com/zhuhai" target="_blank" title="珠海酒店">珠海</a>
                        <a href="http://jiudian.cncn.com/shaoguan" target="_blank" title="韶关酒店">韶关</a>
                        <a href="http://jiudian.cncn.com/zhanjiang" target="_blank" title="湛江酒店">湛江</a>
                        <a href="http://jiudian.cncn.com/yangjiang" target="_blank" title="阳江酒店">阳江</a>
                        <a href="http://jiudian.cncn.com/qingyuan" target="_blank" title="清远酒店">清远</a>
                        <a href="http://jiudian.cncn.com/shantou" target="_blank" title="汕头酒店">汕头</a>
                        <a href="http://jiudian.cncn.com/zhaoqing" target="_blank" title="肇庆酒店">肇庆</a>
                        <a href="http://jiudian.cncn.com/maoming" target="_blank" title="茂名酒店">茂名</a>
                        <div class="more_box" id="more_box">
                            <a href="http://jiudian.cncn.com/heyuan" target="_blank" title="河源酒店">河源</a>
                            <a href="http://jiudian.cncn.com/jiangmen" target="_blank" title="江门酒店">江门</a>
                            <a href="http://jiudian.cncn.com/meizhou" target="_blank" title="梅州酒店">梅州</a>
                            <a href="http://jiudian.cncn.com/jieyang" target="_blank" title="揭阳酒店">揭阳</a>
                            <a href="http://jiudian.cncn.com/shanwei" target="_blank" title="汕尾酒店">汕尾</a>
                            <a href="http://jiudian.cncn.com/chaozhou" target="_blank" title="潮州酒店">潮州</a>
                            <a href="http://jiudian.cncn.com/yunfu" target="_blank" title="云浮酒店">云浮</a>
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>酒店星级：</dt>
                    <dd id="hotel_type">
                        <a href="<?php echo U('index');?>">全部</a>
                        <a title="广东经济型酒店" href="<?php echo U('economics');?>" class="on">经济型酒店</a>
                        <a title="广东三星级酒店">三星级酒店</a>
                        <a title="广东四星级酒店">四星级酒店</a>
                        <a title="广东五星级酒店">五星级酒店</a>
                    </dd>
                </dl>
            </div>
        </div>
        <div class="fn-clear"></div>
        <div class="hot_city mt20">
            <div class="tit1">
                <a href="/hotel/">
                    <h1>特价酒店预订</h1>
                </a>
                <span class="cityHotel_tag" id="tag_cityHotel">
                       <a href="http://jiudian.cncn.com/guangzhou" class="on">广州</a>
                       <a href="http://jiudian.cncn.com/shenzhen" class="city_style">深圳</a>
                       <a href="http://jiudian.cncn.com/dongguan" class="city_style">东莞</a>
                       <a href="http://jiudian.cncn.com/huizhou" class="city_style">惠州</a>
                       <a href="http://jiudian.cncn.com/zhongshan" class="city_style">中山</a>
                       <a href="http://jiudian.cncn.com/foshan" class="city_style">佛山</a>
                   </span>
            </div>
            <div class="con_cityHotel" id="cityHotel_con">
                <div class="txt txt1" style="display: block;">
                    <ul>
                        <?php if(is_array($gz)): $i = 0; $__LIST__ = $gz;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
                                <a target="_blank">
                                    <img src="/travel/Public/Home/Images/hotel/<?php echo ($val["hotel_image"]); ?>" class="lazy "
                                         data-original="http://jiudian.cncn.com/photo/63/62565_m.jpg"
                                         style="width: 210px; height: 140px;
                                            display: block;" alt="广州汇金大酒店">
                                    广州<?php echo ($val["hotel_name"]); ?>
                                </a>
                                <?php if($val["hotel_type"] != '经济型'): ?><p>星级：<span class="star4e1" title="欣欣用户评定为高档型酒店"></span></p><?php endif; ?>
                                <p class="price">价格：<em>￥<b><?php echo ($val["hotel_price"]); ?></b></em></p>
                                <p>位置：<?php echo ($val["hotel_addr"]); ?></p>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="txt txt1" style="display: none;">
                    <ul>
                        <?php if(is_array($sz)): $i = 0; $__LIST__ = $sz;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
                                <a target="_blank" href="http://jiudian.cncn.com/hotel-24196"><img
                                        src="http://jiudian.cncn.com/photo/25/24196_m.jpg" class="lazy "
                                        data-original="http://jiudian.cncn.com/photo/25/24196_m.jpg"
                                        style="width: 210px; height: 140px; display: block;" alt="山水时尚酒店(深圳华强北店)">
                                    深圳<?php echo ($val["hotel_name"]); ?></a>
                                <?php if($val["hotel_type"] != '经济型'): ?><p>星级：<span class="star4e1" title="欣欣用户评定为高档型酒店"></span></p><?php endif; ?>
                                <p class="price">价格：<em>￥<b><?php echo ($val["hotel_price"]); ?></b></em></p>
                                <p>位置：<?php echo ($val["hotel_addr"]); ?></p>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                </div>
                <div class="txt txt1" style="display: none;">
                    <ul>
                        <?php if(is_array($gz)): $i = 0; $__LIST__ = $gz;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
                                <a target="_blank" href="http://jiudian.cncn.com/hotel-328704"><img
                                        src="http://jiudian.cncn.com/photo/329/328704_m.jpg" class="lazy "
                                        data-original="http://jiudian.cncn.com/photo/329/328704_m.jpg"
                                        style="width: 210px; height: 140px; display: block;" alt="东莞厚街天天住宿">
                                    东莞<?php echo ($val["hotel_name"]); ?>
                                </a>
                                <?php if($val["hotel_type"] != '经济型'): ?><p>星级：<span class="star4e1" title="欣欣用户评定为高档型酒店"></span></p><?php endif; ?>
                                <p class="price">价格：<em>￥<b><?php echo ($val["hotel_price"]); ?></b></em></p>
                                <p>位置：<?php echo ($val["hotel_addr"]); ?></p>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="txt txt1" style="display: none;">
                    <ul>
                        <?php if(is_array($sz)): $i = 0; $__LIST__ = $sz;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
                                <a target="_blank" href="http://jiudian.cncn.com/hotel-328704"><img
                                        src="http://jiudian.cncn.com/photo/329/328704_m.jpg" class="lazy "
                                        data-original="http://jiudian.cncn.com/photo/329/328704_m.jpg"
                                        style="width: 210px; height: 140px; display: block;" alt="东莞厚街天天住宿">
                                    惠州<?php echo ($val["hotel_name"]); ?>
                                </a>
                                <?php if($val["hotel_type"] != '经济型'): ?><p>星级：<span class="star4e1" title="欣欣用户评定为高档型酒店"></span></p><?php endif; ?>
                                <p class="price">价格：<em>￥<b><?php echo ($val["hotel_price"]); ?></b></em></p>
                                <p>位置：<?php echo ($val["hotel_addr"]); ?></p>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="txt txt1" style="display: none;">
                    <ul>
                        <?php if(is_array($gz)): $i = 0; $__LIST__ = $gz;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
                                <a target="_blank" href="http://jiudian.cncn.com/hotel-328704"><img
                                        src="http://jiudian.cncn.com/photo/329/328704_m.jpg" class="lazy "
                                        data-original="http://jiudian.cncn.com/photo/329/328704_m.jpg"
                                        style="width: 210px; height: 140px; display: block;" alt="东莞厚街天天住宿">
                                    中山<?php echo ($val["hotel_name"]); ?>
                                </a>
                                <?php if($val["hotel_type"] != '经济型'): ?><p>星级：<span class="star4e1" title="欣欣用户评定为高档型酒店"></span></p><?php endif; ?>
                                <p class="price">价格：<em>￥<b><?php echo ($val["hotel_price"]); ?></b></em></p>
                                <p>位置：<?php echo ($val["hotel_addr"]); ?></p>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="txt txt1" style="display: none;">
                    <ul>
                        <?php if(is_array($sz)): $i = 0; $__LIST__ = $sz;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
                                <a target="_blank" href="http://jiudian.cncn.com/hotel-328704"><img
                                        src="http://jiudian.cncn.com/photo/329/328704_m.jpg" class="lazy "
                                        data-original="http://jiudian.cncn.com/photo/329/328704_m.jpg"
                                        style="width: 210px; height: 140px; display: block;" alt="东莞厚街天天住宿">
                                    佛山<?php echo ($val["hotel_name"]); ?>
                                </a>
                                <?php if($val["hotel_type"] != '经济型'): ?><p>星级：<span class="star4e1" title="欣欣用户评定为高档型酒店"></span></p><?php endif; ?>
                                <p class="price">价格：<em>￥<b><?php echo ($val["hotel_price"]); ?></b></em></p>
                                <p>位置：<?php echo ($val["hotel_addr"]); ?></p>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<script type="application/javascript">
    $("#open").click(function () {

        $("#more_box").toggleClass("more_box");
    });
    $("#hotel_type a").click(function () {

        $("#hotel_type a").removeClass("on");
        $(this).addClass("on");
    });
    $("#tag_cityHotel a").hover(function () {

        $("#tag_cityHotel a").removeClass("on");
        $(this).addClass("on");
        $("#cityHotel_con div").css("display", "none");
        var index = $("#tag_cityHotel a").index($(this));
        $("#cityHotel_con div").eq(index).css("display", "block");
    });
    $(function () {
        $(".city_top .city_menu ul li:nth-child(5)").addClass("on");
    });
</script>
</body>
</html>