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
<link rel="stylesheet" href="/travel/Public/Home/Css/line/line.css">
<div class="content mt20">
    <div class="box_list">
        <div class="box_change">
            <div class="change_con">
                <dl>
                    <dt>行程天数：</dt>
                    <dd>
                        <a href="<?php echo U('Home/Line/index');?>">全部</a>
                       <?php if(is_array($days)): foreach($days as $key=>$v): if($v["days_id"] == 1): ?><a href="<?php echo U('Home/Line/get_days?days_id='.$v['days_id']);?>" class="on">一日游</a>
                               <?php else: ?><a href="<?php echo U('Home/Line/get_days?days_id='.$v['days_id']);?>"><?php echo ($v["days_id"]); ?>日游</a><?php endif; endforeach; endif; ?>
                    </dd>
                </dl>
                <dl>
                    <dt>&emsp;目的地：</dt>
                    <dd class="choice choicel open" style="height:26px;">
                        <?php if(is_array($cities)): $i = 0; $__LIST__ = $cities;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/LineCity/index?city_name='.$vo);?>"><?php echo ($vo); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                    </dd>
                    <dd class="btn">展开<i></i></dd>
                </dl>
                <!--<dl>-->
                    <!--<dt>出游方式：</dt>-->
                    <!--<dd>-->
                        <!--<a href="<?php echo U('Home/Line/index');?>" class="on">不限</a>-->
                        <!--<a href="">跟团游</a>-->
                    <!--</dd>-->
                <!--</dl>-->
            </div>
            <div class="change_ing">
                <dl>
                <dt>您已选择：</dt>
                <dd>
                <a href="<?php echo U('Home/Line/index');?>" class="now_color">一日游<i></i></a>
                <a href="<?php echo U('Home/Line/index');?>" class="btn_now">重新筛选</a>
                </dd>
                </dl>
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
                    $(".change_con dd.btn").click(
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
        <div class="xianlu_list spread">
            <div class="hot"></div>
            <ul>
                <?php if(is_array($line)): foreach($line as $key=>$v): ?><li id="line_418176">
                        <div class="tu">
                            <a href="" target="_blank">
                                <img src="/travel/Public/Home/Images/recommend/<?php echo ($v["image_path"]); ?>" alt="<?php echo ($v["recomend_des"]); ?>" width="120" height="90">
                            </a>
                            <a href="" class="btn_add"></a>
                        </div>
                        <div class="xl_con">
                            <div class="xl_type">
                                <div class="title">
                                    <i class="i0"></i>
                                    <a href="" target="_blank" data="418176"><?php echo ($v["recomend_des"]); ?></a>
                                </div>
                                <div class="lxs">
                                    <i></i>
                                    <a href="" target="_blank">广东和平旅行社</a>
                                </div>
                            </div>
                            <div class="xl_num">
                            <span class="price">
                                ￥<em><?php echo ($v["recomend_price"]); ?></em>起
                                <del>省<b><?php echo ($v["recomend_discount"]); ?></b>元</del>
                            </span>
                                <a href="<?php echo U('Home/Line/desc','id='.$v['recomend_id']);?>" class="btn_go" target="_blank"></a>
                                <span class="guanzhu">&nbsp;&nbsp;<?php echo ($v["recomend_focus"]); ?>人关注</span>
                            </div>
                        </div>
                        <div class="xl_other">
                            <span>
                                <em>行程天数</em><?php echo ($v["days_id"]); ?>天
                            </span>
                            <span>
                                <em>出发日期</em>天天发团
                            </span>
                            <span>
                                <em>往返交通</em>汽车去汽车回
                            </span>
                            <span>
                                <em>品质服务</em>无购物无自费
                            </span>
                        </div>
                    </li><?php endforeach; endif; ?>
            </ul>
        </div>
        <div class="page">
            <div class="page_con">
                <!--<span class="active">1</span>-->
                <?php echo ($page); ?>
                <i class="triangle"></i>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $(".city_top .city_menu ul li:nth-child(3)").addClass("on");
    });

</script>
</body>
</html>