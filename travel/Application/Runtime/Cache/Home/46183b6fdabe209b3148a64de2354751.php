<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/index.css">
    <script src="/travel/Public/Home/Js/jquery.js"></script>
    <link rel="stylesheet" href="/travel/Public/Home/Css/foodDetail.css">
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
<div class="content mt20">
    <div class="side_main">
        <div class="produce_info">
            <dl>
                <dt>
                    <a>
                        <img src="/travel/Public/Home/Images/food/<?php echo ($data["image_path"]); ?>"
                             alt="粤式早茶" border="0" width="210" height="140">
                    </a>
                </dt>
                <dd>
                    <div class="title">
                        <h1><?php echo ($data["food_name"]); ?></h1>
                        <span class="like" onclick="add()">
                          <i></i>
                            <em zan="0" food_id="<?php echo ($data["food_id"]); ?>">
                                <?php echo ($data["food_taste"]); ?></em>人喜欢
                       </span>
                    </div><?php echo (htmlspecialchars_decode($data["food_decs"])); ?>
                </dd>
            </dl>
        </div>
        <?php if($shop_info != null): ?><div class="box_con mt20">
                <div class="tit">
                    <strong>哪里吃<?php echo ($data["food_name"]); ?></strong>
                </div>
                <div class="txt_tw">
                    <ul>
                        <?php if(is_array($shop_info)): $i = 0; $__LIST__ = $shop_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><li>
                                <a href="<?php echo U('showShopInfo?food_shop_id='.$info['food_shop_id']);?>">
                                    <img src="/travel/Public/Home/Images/shop/<?php echo ($info["shop_image"]); ?>"
                                         width="210" height="140" alt="同记鸡粥粉面店">
                                    <div class="text_con">
                                        <strong><?php echo ($info["shop_name"]); ?></strong>
                                        <p>地址：<?php echo ($info["shop_addr"]); ?></p>
                                    </div>
                                </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div><?php endif; ?>
    </div>
    <div style="clear: both"></div>
</div>

</body>
<script>
    $(function () {
        $(".city_top .city_menu ul li:nth-child(4)").addClass("on");
    });

    function add() {

        var zan = parseInt($(".like em").attr("zan"));
        var food_id = parseInt($(".like em").attr("food_id"));
        if(zan == 0) {

            var like = parseInt($(".like em").html()) + 1;
            $(".like em").attr("zan", "1");
            $.ajax({
                url:"http://localhost/travel/index.php/Home/Food/like",
                data:{food_id:food_id, like:like},
                success:function (res) {

                    $(".like em").html(res);
                }
            });
        }
    }
</script>
</html>