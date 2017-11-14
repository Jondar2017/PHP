<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
<link rel="stylesheet" href="/travel/Public/Home/Css/sign/sign.css">
<div class="content mt20">
    <div class="box_list">
        <div class="box_change">
            <div class="change_con">
                <dl>
                    <dt>广东景点：</dt>
                    <dd class="choice choicel open" style="height:26px;">
                        <a href="" class="on">全部</a>
                        <?php if(is_array($cities)): $i = 0; $__LIST__ = $cities;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/SignCity/index?view_city='.$vo);?>"><?php echo ($vo); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                    <dd class="btn" id="btn1">展开<i></i></dd>
                </dl>
                <dl>
                    <dt>景点星级：</dt>
                    <dd>
                        <a href="" class="on">全部</a>
                        <?php if(is_array($level)): foreach($level as $key=>$v): ?><a href="<?php echo U('Home/Sign/get_level_view?l_id='.$v['level_id']);?>"><?php echo ($v["level_name"]); ?></a><?php endforeach; endif; ?>
                    </dd>

                </dl>
                <!--<dl>-->
                <!--<dt>景点类型：</dt>-->
                <!--<dd class="choice choicel open" style="height: 26px;">-->
                <!--<a href="" class="on">全部</a>-->
                <!--<?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                <!--<a href=""><?php echo ($vo); ?></a>-->
                <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                <!--</dd>-->
                <!--<dd class="btn" id="btn2">展开<i></i></dd>-->
                <!--</dl>-->
            </div>
        </div>
        <div class="city_spots">
            <div class="first_con"></div>
            <div class="city_spots_list">
                <ul>
                    <li class="first">
                        <?php if(is_array($view_top)): foreach($view_top as $key=>$v): ?><a href="<?php echo U('Home/Sign/desc','view_id='.$v['view_id']);?>" class="pic">
                                <div class="icon">
                                    <sup class="t1">NO.1</sup>
                                </div>
                                <img src="/travel/Public/Home/Images/view/<?php echo ($v["images_path"]); ?>" alt="<?php echo ($v["view_name"]); ?>" data-original="/travel/Public/Home/Images/view/<?php echo ($v["images_path"]); ?>" width="287" height="190" style="display: block;">
                                <div class="title">
                                    <b><?php echo ($v["view_name"]); ?></b>
                                    <span><?php echo ($v["view_want"]); ?>人想去</span>
                                </div>
                            </a>
                            <div class="text_con">
                                <p>
                                    <?php echo (msubstr($v["view_content"],0,120)); ?>
                                </p>
                                <div class="type">
                                    <dl>
                                        <dt>景点等级：</dt>
                                        <dd>
                                            <b><?php echo ($v["view_level"]); ?>&nbsp;</b>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>开放时间：</dt>
                                        <dd><?php echo ($v["view_start_time"]); ?>-<?php echo ($v["view_end_time"]); ?></dd>
                                    </dl>
                                    <dl>
                                        <dt>景点地址：</dt>
                                        <dd><?php echo ($v["view_addr"]); ?></dd>
                                    </dl>
                                </div>
                                <div class="num">
                                <span class="price">
                                    途牛价：￥<b><?php echo ($v["view_price"]); ?></b>起
                                </span>
                                    <span class="sale"><?php echo ($v["view_discount"]); ?></span>
                                    <a href="<?php echo U('Home/Sign/desc','view_id='.$v['view_id']);?>" class="btn">购买门票</a>
                                </div>
                            </div><?php endforeach; endif; ?>
                    </li>
                    <li class="">
                        <?php if(is_array($view_second)): foreach($view_second as $key=>$v): ?><a href="<?php echo U('Home/Sign/desc','view_id='.$v['view_id']);?>" class="pic">
                                <div class="icon">
                                    <sup class="t2">NO.2</sup>
                                </div>
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
                            </div><?php endforeach; endif; ?>

                    </li>
                    <li class="">
                        <?php if(is_array($view_third)): foreach($view_third as $key=>$v): ?><a href="<?php echo U('Home/Sign/desc','view_id='.$v['view_id']);?>" class="pic">
                                <div class="icon">
                                    <sup class="t3">NO.3</sup>
                                </div>
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

                            </div><?php endforeach; endif; ?>
                    </li>
                    <?php if(is_array($views)): foreach($views as $key=>$v): ?><li class="">
                            <a href="<?php echo U('Home/sign/desc', 'view_id='.$v['view_id']);?>" class="pic">
                                <div class="icon">
                                </div>
                                <img src="/travel/Public/Home/Images/view/<?php echo ($v["images_path"]); ?>" alt="<?php echo ($v["view_name"]); ?>" data-original="/travel/Public/Home/Images/view/<?php echo ($v["images_path"]); ?>" width="287" height="190" style="display: block;">
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
                                    <a href="<?php echo U('Home/sign/desc'), 'view_id='.$v['view_id'];?>" class="btn btn2">查看详情</a>
                                </div>
                            </div>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
        <div class="page">
            <div class="page_con">
                <!--<span class="active">1</span>-->
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
<script>
    $(function () {
        $(".city_top .city_menu ul li:nth-child(2)").addClass("on");
    });

</script>
</html>