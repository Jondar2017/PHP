<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>旅游主页显示</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/index.css">
    <script src="/travel/Public/Home/Js/jquery.js"></script>
    <link rel="stylesheet" href="/travel/Public/Home/Css/hotelDesc.css">
    <script src="/travel/Public/Home/plugin/layer/layer.js"></script>
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
<div class="first_screen clearfix">
    <div class="main">
        <div class="first_hd">
            <h1>
                <a><?php echo ($city); echo ($hotel["hotel_name"]); ?></a>
            </h1>
            <p>
                地址：<?php echo ($hotel["hotel_addr"]); ?>
            </p>
        </div>
        <div class="first_info clearfix">
            <div class="first_l">
                <ul>
                    <li src="http://pavo.elongstatic.com/i/Hotel350_350/000070uk.jpg"
                        class="lazy "
                        data-original="http://pavo.elongstatic.com/
                        i/Hotel350_350/000070uk.jpg"
                        style="width:410px;height:280px">
                        <a href="javascript:;"
                           path="http://pavo.elongstatic.com/i/Mobile640_960/000070uk.jpg"
                           class="preview">
                            <img src="/travel/Public/Home/Images/hotel/<?php echo ($desc["hotel_image"]); ?>"
                                 class="lazy "
                                 data-original="http://pavo.elongstatic.com/i/Hotel350_350/
                                 000070uk.jpg"
                                 style="width: 410px; height: 280px; display: block;" alt="其他">
                        </a>
                    </li>
                    <?php if(is_array($room)): $i = 0; $__LIST__ = $room;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li src="" class="lazy "
                        data-original="http://pavo.elongstatic.com/i/Hotel120_120/0000i5EZ.jpg"
                        style="width:130px;height:120px">
                        <a href="javascript:;"
                           path="http://pavo.elongstatic.com/i/Mobile640_960/0000i5EZ.jpg"
                           class="preview">
                            <img src="/travel/Public/Home/Images/room/<?php echo ($val["room_image"]); ?>" class="lazy "
                                 data-original="http://pavo.elongstatic.com/i/Hotel120_120/0000i5EZ.jpg"
                                 style="width: 130px; height: 120px; display: block;" alt="客房">
                        </a>
                      </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div><!-- first_l end -->
        </div>
    </div>
</div>
<div class="main">
    <div class="sideL">
        <div class="box740 mt20 J_info_box">
             <ul class="room_list clearfix">
                <?php if(is_array($room)): $i = 0; $__LIST__ = $room;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
                        <div class="room_hd clearfix">
                            <div class="room_pic">
                                <img src="/travel/Public/Home/Images/room/<?php echo ($val["room_image"]); ?>"
                                   style="width:88px; height:80px" alt="图片">
                            </div>
                            <div class="hd_right">
                                <p class="room_price">
                                    <i>￥</i>
                                    <span class="num"><?php echo ($val["room_price"]); ?></span>
                                </p>
                                <a class="order" room_id="<?php echo ($val["room_id"]); ?>"
                                   hotel_id="<?php echo ($val["hotel_id"]); ?>"
                                   username="<?php echo (session('id')); ?>">预订</a>
                            </div>
                            <div class="room_desc">
                                <p class="room_bed"><?php echo ($val["room_name"]); ?></p>
                                <p class="room_facility">
                                    <span>房间<?php echo ($val["room_size"]); ?>㎡</span>
                                    <span class="split">|</span>
                                    <span><?php echo ($val["room_bed"]); ?></span>
                                    <span class="split">|</span>
                                    <span>可住：<?php echo ($val["room_people"]); ?>人<i></i><i></i></span>
                                    <span class="split">|</span>
                                    <span title="楼层：1层-4层">楼层：<?php echo ($val["room_floor"]); ?>层</span>
                                    <span class="split">|</span>
                                    <span title="宽带：免费WIFI">宽带：<?php echo ($val["room_wifi"]); ?></span>
                                </p>
                            </div>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
             </ul>
        </div>
        <div class="box740 mt20">
            <div class="tit">
                <strong>设施服务</strong>
            </div>
            <div class="txt child-noborder">
                <dl>
                    <dt>酒店电话</dt>
                    <dd><?php echo ($facilities["hotel_phone"]); ?></dd>
                </dl>
                <dl>
                    <dt>开业时间</dt>
                    <dd>酒店开业时间 <?php echo ($facilities["hotel_open"]); ?> 年</dd>
                </dl>
                <dl>
                    <?php if($facilities["hotel_net"] != null): ?><dt>上网服务</dt>
                        <dd><?php echo ($facilities["hotel_net"]); ?></dd><?php endif; ?>
                </dl>
                <dl>
                    <?php if($facilities["hotel_service"] != null): ?><dt>酒店服务</dt>
                        <dd>
                            <?php echo ($facilities["hotel_service"]); ?>
                        </dd><?php endif; ?>
                </dl>
                <dl>
                    <?php if($facilities["hotel_restaurant"] != null): ?><dt>餐饮设施</dt>
                        <dd><?php echo ($facilities["hotel_restaurant"]); ?></dd><?php endif; ?>
                </dl>
                <dl>
                     <?php if($facilities["hotel_sports"] != null): ?><dt>康体娱乐</dt>
                         <dd><?php echo ($facilities["hotel_sports"]); ?></dd><?php endif; ?>
                </dl>
                <dl>
                    <dt>房间设施</dt>
                    <dd><?php echo ($facilities["hotel_rooms"]); ?></dd>
                </dl>
                <dl class="noborder">
                    <dt>可接受的信用卡</dt>
                    <dd><?php echo ($facilities["hotel_card"]); ?></dd>
                </dl>
            </div>
        </div>
        <div class="box740 mt20">
            <div class="tit">
                <strong>酒店简介</strong>
            </div>
            <div class="txt">
                <div><?php echo ($desc["hotel_desc"]); ?></div>
            </div>
        </div>
    </div>
    <div style="clear: both"></div>
</div>
</body>
<script type="application/javascript">
     $(".order").click(function () {

         var username = $(this).attr('username');
         //判断是否有登录
         if(username != "") {

             var room_id = $(this).attr("room_id");
             var hotel_id = $(this).attr("hotel_id");
             $(this).prop("href",
                 "http://localhost/travel/index.php/" +
                 "Home/HotelOrder/index/room_id/" + room_id +
                 "/hotel_id/" + hotel_id);
         }else {
             layer.alert('您尚未登录，请先登录', {
                 skin: 'layui-layer-molv' //样式类名
                 ,closeBtn: 0
             });
         }
     });
     $(function () {
         $(".city_top .city_menu ul li:nth-child(5)").addClass("on");
     });
</script>
</html>