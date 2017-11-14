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
<link rel="stylesheet" href="/travel/Public/Home/Css/line/line.css">
<link rel="stylesheet" href="/travel/Public/Home/Css/line/desc.css">
<link rel="stylesheet" href="/travel/Public/Home/Css/date/font-awesome.min.css">
<link rel="stylesheet" href="/travel/Public/Home/Css/date/foundation-datepicker.css">
<div id="conten">
    <div class="rht">
        <div id="main">
            <?php if(is_array($line)): foreach($line as $key=>$v): ?><div class="top">
                    <h1>
                        <?php echo ($v["recomend_des"]); ?>
                        <i class="recommend" title="推荐">
                            <img src="/travel/Public/Home/Images/line/ico_recommend.png" alt="">
                        </i>
                    </h1>
                    <div class="top_lft">
                        <p class="pic">
                            <img src="/travel/Public/Home/Images/recommend/<?php echo ($v["image_path"]); ?>" alt="<?php echo ($v["recomend_des"]); ?>" style="width: 270px; height: 170px">
                        </p>
                        <div class="pic_bottom">
                            <ul>
                                <li>
                                    <i class="i1"></i>
                                    关注(6320)
                                </li>
                                <li>
                                    <a href="">
                                        <i class="i3"></i>
                                        收藏
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="top_rht">
                        <div class="txt">
                            <div class="custom_tip">
                                本线路行程无购物，以您与旅行社签订的系列合同为准
                            </div>
                            <div class="xianluMoney">
                                <dl>
                                    <dt>门市价：</dt>
                                    <dd><del id="price_span"><?php echo ($v["recomend_all"]); ?></del>元</dd>
                                </dl>
                                <dl>
                                    <dt>途牛价：</dt>
                                    <dd class="z_price">
                                    <span id="price_cncn_span">
                                        <em><?php echo ($v["recomend_price"]); ?></em>元起
                                    </span>
                                    <span id="price_cncn_child_span" style="padding-left: 10px;">
                                        儿童价：<em><?php echo ($v["recomend_child"]); ?></em>元起
                                    </span>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>出发城市：</dt>
                                    <dd><a href=""><?php echo ($v["recomend_city"]); ?></a></dd>
                                </dl>
                                <dl>
                                    <dt>发团时间：</dt>
                                    <dd class="fa_riqi">天天发团，请至少提前<b>1</b>天报名</dd>
                                </dl>
                            </div>
                        </div>
                        <form action="<?php echo U('Home/Order/index');?>" method="post" name="form_order" id="form_order" target="_self">
                            <input type="hidden" id="line_id" name="id" value="<?php echo ($v["recomend_id"]); ?>">
                            <input type="hidden" name="uid" value>
                            <input type="hidden" id="adult_price" name="adult_price" value="<?php echo ($v["recomend_price"]); ?>">
                            <input type="hidden" id="child_price" name="child_price" value="<?php echo ($v["recomend_child"]); ?>">
                            <input type="hidden" id="discount" name="discount" value="<?php echo ($v["recomend_discount"]); ?>">
                            <input type="hidden" id="type_id" name="type_id" value="跟团游">
                            <input type="hidden" id="price_type_arrs" name="price_type_arrs" value="<?php echo ($v["recomend_city"]); ?>">
                            <input type="hidden" id="name_mobile" name="name_mobile">
                            <div class="key" id="key_css">
                                <p class="tb-note-title">请选择您的出游信息 <b class="J_PanelCloser">关闭</b></p>
                                <dl>
                                    <dt>预定类型：</dt>
                                    <dd class="order_type">
                                        <ul>
                                            <li class="selected" id="li_date_type3719455">
                                                <a href="">跟团游</a>
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>出发日期：</dt>
                                    <dd>
                                        <input type="text" id="start_time" name="start_time" class="text text110 riqi" placeholder="请选择出发日期" value=""  title="点击选择出发日期">
                                    </dd>
                                </dl>
                                <dl class="table_date">
                                    <div class=""></div>
                                </dl>
                                <dl>
                                    <dt>预定人数：</dt>
                                    <dd>
                                        <input type="text" name="adult_num" class="text text30" value="1" onkeyup="CheckInputInt(this);" maxlength="2">
                                        <span>成人</span>
                                        <span id="child_num_span">
                                            <input type="text"  name="child_num" class="text text30" value="0" onkeyup="CheckInputInt2(this); check_child_price();" maxlength="2">
                                            <span>儿童</span>
                                        </span>
                                        <span class="child_message" id="child_message"></span>
                                    </dd>
                                </dl>
                                <div class="button">
                                    <input type="button" id="submit_button" class="submit1" onclick="check_order(this);">
                                    <p>在线预订可以享受途牛优惠价，预定后客服会主动联系您确认！</p>
                                </div>
                            </div>

                            <script src="/travel/Public/Home/Js/date/jquery-1.11.3.min.js"></script>
                            <script src="/travel/Public/Home/Js/date/foundation-datepicker.js"></script>
                            <script src="/travel/Public/Home/Js/date/locales/foundation-datepicker.zh-CN.js"></script>
                            <script>

                                var nowTemp = new Date();
                                var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate()+1, 0, 0, 0, 0);
                                var checkin = $('#start_time').fdatepicker({
                                    format: 'yyyy-mm-dd',
                                    onRender: function (date) {
                                        return date.valueOf() <= now.valueOf() ? 'disabled' : '';
                                    }
                                }).on('changeDate', function (ev) {
                                    checkin.hide();
                                }).data('datepicker');
                            </script>
                            <script>
                                //判断form表单中的数据是否全部都不为空
                                $(function(){
                                    $("#submit_button").click(function(){
                                        $("input:text").each(function() {
                                            if($.trim($(this).val()) == "")
                                            {
                                                $("#key_css").addClass("key2");
                                                $(".top_rht .key .tb-note-title").css("display", "block");
                                                return false;
                                            } else {
                                                $("#form_order").submit();
                                            }
                                        });
                                    });
                                   $(".J_PanelCloser").click(function(){
                                       $("#key_css").removeClass("key2");
                                       $(".top_rht .key .tb-note-title").css("display", "none");
                                   });

                                });
                                //判断输入的成人票数是否是int类型
                                function CheckInputInt(value){
                                    var v = value;
                                    var pattern = /^[1-9]\d*|0$/; //匹配非负整数
                                    v.value = v.value.replace(/[^\d]/g, "");
                                    if (!pattern.test(v.value)) {
                                        v.value = "";
                                        return false;
                                    }
                                }
                                function CheckInputInt2(value){
                                    var v = value;
                                    var pattern = /^[1-9]\d*|0$/; //匹配非负整数
                                    v.value = v.value.replace(/[^\d]/g, "");
                                    if (!pattern.test(v.value)) {
                                        v.value = "";
                                        return false;
                                    }
                                }
                            </script>
                        </form>
                    </div>
                </div><?php endforeach; endif; ?>

        </div>
        <div class="box" id="tab_fxd">
            <div class="tit">
                <ul>
                    <li class="on">
                        <span>线路特色</span>
                    </li>
                    <li >
                        <span>参考行程</span>
                    </li>
                    <li>
                        <span>费用说明</span>
                    </li>
                    <li>
                        <span>预定指南</span>
                    </li>
                    <li>
                        <span>游客点评</span>
                    </li>
                </ul>
            </div>
            <script>
                $(function(){
                    $(".box .tit li").click(function(){
                        $(this).addClass("on").siblings().removeClass("on");
                        $index = $(this).index();
                        switch ($index) {
                            case 1:
                                $(".sectionBox .txt1").css("display", "none");
                                $(".sectionBox #scheduling_main2").css("display", "block");

                        }
                    });
                });
            </script>
        </div>
        <div class="sectionBox">
            <div id="scheduling" class="box section">
                <div class="txt1" id="scheduling_main1">
                    <?php if(is_array($feature)): foreach($feature as $key=>$v): echo ($v["feature_des"]); endforeach; endif; ?>
                </div>
                <div class="txt1" id="scheduling_main2">
                    <?php if(is_array($feature)): foreach($feature as $key=>$v): echo ($v["feature_des"]); ?>1111<?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fn_clear"></div>
<script>
    $(function () {
        $(".city_top .city_menu ul li:nth-child(3)").addClass("on");
    });

</script>
</body>
</html>