<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>旅游主页显示</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/sign/sign.css">
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
        <div class=".j_menu_fixed"></div>
        <div class="city_menu">
            <ul>
                <li><a href="<?php echo U('Home/Index/index');?>">主页</a></li>
                <li class="on"><a href="<?php echo U('Home/Sign/index');?>">景点</a></li>
                <li><a href="<?php echo U('Home/Line/Index');?>">线路</a></li>
                <li><a href="">美食</a></li>
                <li><a href="">住宿</a></li>
                <li><a href="">交通</a></li>
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
<div class="content mt20">
    <div class="box_list">
        <div class="city_spots">
            <div class="first_con"></div>
            <div class="city_spots_list">
                <ul>
                    <?php if(is_array($views)): foreach($views as $key=>$v): ?><li class="">
                            <a href=<?php echo U('Home/Sign/desc','view_id='.$v['view_id']);?>"" class="pic">
                                <div class="icon"></div>
                                <img src="/travel/Public/Home/Images/view/<?php echo ($v["images_path"]); ?>" alt="<?php echo ($v["view_name"]); ?>" data-original="/travel/Public/Home/Images/view/<?php echo ($v["images_path"]); ?>" width="287" height="190"  style="display: block;">
                                <div class="title">
                                    <b><?php echo ($v["view_name"]); ?></b>
                                    <span><?php echo ($v["view_want"]); ?>人想去</span>
                                </div>
                            </a>
                            <div class="text_con">
                                <p>
                                    <?php echo (msubstr($v["view_content"],0,35)); ?>
                                </p>

                                <div class="num">
                                <span class="price">
                                   ￥<b><?php echo ($v["view_price"]); ?></b>起
                                </span>
                                    <span class="sale"><?php echo ($v["view_discount"]); ?></span>
                                    <a href="<?php echo U('Home/Sign/desc','view_id='.$v['view_id']);?>" class="btn">购买门票</a>
                                </div>
                            </div>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
        <div class="page">
            <div class="page_con">
                <?php echo ($page); ?>
                <i class="triangle"></i>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <div class="tit">
            <strong>广东景点攻略</strong>
        </div>
        <div class="txt">
            <ul>
                <li>
                    <a href="">世界之窗住宿指南</a>
                </li>
                <li>
                    <a href="">广州塔旅游指南</a>
                </li>
            </ul>
        </div>
    </div>
    <script>
        $(function(){

            $(".change_con dd.btn").hover(
                    function(){
                        $(this).css({"background":"#f70", "color":"#fff"});
                        $(this).find("i").css("border-top","4px solid #fff");

                    },
                    function(){
                        $(this).css({"background":"#c9c9c9", "color":"#666"});
                        $(this).find("i").css("border-top","4px solid #666");
                    }
            );
            var fli_click = 0;
            $(".change_con dd#btn1").click(
                    function(){
                        var pi = "<i></i>";
                        if (fli_click++ % 2 === 0) {
                            $(this).html("收起");
                            $(this).append(pi);
                            $(this).find("i").css({"transform":"rotate(180deg)","border-top":"4px solid #fff"});
                            $(this).prev().css("height", "auto");
                        } else {
                            $(this).html("展开");
                            $(this).append(pi);
                            $(this).find("i").css({"transform":"rotate(0deg)","border-top":"4px solid #fff"});
                            $(this).prev().css("height", "26px");
                        }
                    }
            );
            $(".change_con dd#btn2").click(
                    function(){
                        var pi = "<i></i>";
                        if (fli_click++ % 2 === 0) {
                            $(this).html("收起");
                            $(this).append(pi);
                            $(this).find("i").css({"transform":"rotate(180deg)","border-top":"4px solid #fff"});
                            $(this).prev().css("height", "auto");

                        } else {
                            $(this).html("展开");
                            $(this).append(pi);
                            $(this).find("i").css({"transform":"rotate(0deg)","border-top":"4px solid #fff"});
                            $(this).prev().css("height", "26px");
                        }
                    }
            );
        });
    </script>
</div>
</body>
</html>