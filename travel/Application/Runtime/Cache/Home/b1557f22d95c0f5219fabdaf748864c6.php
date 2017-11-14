<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>旅游主页显示</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/index.css">
    <link rel="stylesheet" href="/travel/Public/Home/Css/food.css">

    <link rel="stylesheet" href="/travel/Public/Home/Css/autocomplete.css">
    <link rel="stylesheet" href="/travel/Public/Home/Css/style.css">

    <script type="text/javascript" src="/travel/Public/Home/Js/jquery.js"></script>
    <script type="text/javascript" src="/travel/Public/Home/Js/autocomplete.js"></script>

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
    <div>
        <!--<h3>试试输入"百度"</h3>-->
        <div id="search-form">
            <div class="autocomplete-container" style="height: 60px; width: 408px;">
                <form method="post" action="<?php echo U('search');?>">
                    <input autocomplete="off" name="search" placeholder="搜索..."
                           class="autocomplete-input" style="width: 300px; height: 30px;
                       border-radius: 3px 0px 0px 3px;"
                           type="text">
                    <div class="proposal-box" style="width: 318px; top: 50px;">
                        <ul class="proposal-list"></ul>
                    </div>
                    <input class="autocomplete-button" type="submit"
                         style="height: 48px; line-height: 32px;" onclick="search()"
                           value="搜索"/>
                </form>
            </div>
        </div>
    </div>
    <div class="con_left">
        <div class="food_li">
            <div class="t">广东美食</div>
            <div class="a">
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$food): $mod = ($i % 2 );++$i;?><a id="my_a" href="<?php echo U('showFoodDetail?food_id='.$food['food_id']);?>">
                        <?php if($food["image_path"] == null): ?><img src="/travel/Public/Home/Images/food/nopic.gif"/>
                            <?php else: ?>
                            <img src="/travel/Public/Home/Images/food/<?php echo ($food["image_path"]); ?>"/><?php endif; ?>
                        <div>
                            <span><?php echo ($food["food_name"]); ?></span>
                            <font>
                                热度 <?php echo ($food["food_taste"]); ?>
                            </font>
                            <p><?php echo (msubstr($food["food_decs"],0, 43)); ?></p>
                        </div>
                    </a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="page">
                <div class="page_con">
                    <?php echo ($show); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="clear: both;"></div>
</body>
<script>
    $(function () {
        $(".city_top .city_menu ul li:nth-child(4)").addClass("on");
    });

</script>
</html>
</body>
</html>