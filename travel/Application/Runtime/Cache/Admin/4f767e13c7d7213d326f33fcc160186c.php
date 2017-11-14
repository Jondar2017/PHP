<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台管理系统</title>
    <meta name="author" content="DeathGhost" />
    <link rel="stylesheet" type="text/css" href="/travel/Public/Admin/Css/style.css" />
    <!--[if lt IE 9]>
    <!--<script src="/travel/Public/Admin/Js/html5.js"></script>-->
    <![endif]-->
    <script src="/travel/Public/Admin/Js/jquery.js"></script>
    <script src="/travel/Public/Admin/Js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript" src="/travel/Public/Admin/Js/module.js"></script>
    <script type="text/javascript" src="/travel/Public/Admin/Js/hotkeys.js"></script>
    <script type="text/javascript" src="/travel/Public/Admin/Js/uploader.js"></script>
    <script type="text/javascript" src="/travel/Public/Admin/Js/simditor.js"></script>

    <link rel="stylesheet" type="text/css" href="/travel/Public/Admin/Css/simditor.css" />

    <script>

        (function($){
            $(window).load(function(){

                $("a[rel='load-content']").click(function(e){
                    e.preventDefault();
                    var url=$(this).attr("href");
                    $.get(url,function(data){
                        $(".content .mCSB_container").append(data);
                        //scroll-to appended content
                        $(".content").mCustomScrollbar("scrollTo","h2:last");
                    });
                });

                $(".content").delegate("a[href='top']","click",function(e){
                    e.preventDefault();
                    $(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
                });

            });
        })(jQuery);
    </script>
    <style type="text/css">
        .doc{margin-left: 50px}
        .doc p{margin-bottom: 20px}
        .link_btn {
            border: 1px #139667 solid;
            border-radius: 2px;
            background: #19a97b;
            color: white;
            padding: 8px 15px;
            display: inline-block;
            cursor: pointer;
            margin-left: 50px;
        }
    </style>
</head>
<body>
<!--header-->
<header>
    <h1><img src="/travel/Public/Admin/Images/admin_logo.png"/></h1>
    <ul class="rt_nav">
        <li><a href="<?php echo U('Public/adminLoginOut');?>" class="quit_icon">安全退出</a></li>
    </ul>
</header>
<!--aside nav-->
<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
    <ul>
        <li>
            <dl>
                <dt>管理员</dt>
                <dd><a href="<?php echo U('index');?>">地方美食</a></dd>
                <dd><a href="<?php echo U('shop');?>" class="active">周边店铺</a></dd>
                <dd><a href="<?php echo U('hotel');?>">地方酒店</a></dd>
                <dd><a href="<?php echo U('recommend');?>">旅游线路</a></dd>
                <dd><a href="<?php echo U('view');?>">旅游景点</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>查看订单</dt>
                <dd><a href="<?php echo U('show_ticket');?>">门票订单</a></dd>
                <dd><a href="<?php echo U('show_hotel');?>">酒店订单</a></dd>
                <dd><a href="<?php echo U('show_view');?>">景点订单</a></dd>
            </dl>
        </li>
    </ul>
</aside>
<section class="rt_wrap content mCustomScrollbar">
    <form method="post" enctype="multipart/form-data">
        <div class="rt_content">
            <section>
                <ul class="ulColumn2">
                    <li>
                        <span class="item_name" style="width:120px;">店铺名称：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="店铺名称..." name="shop_name"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">店铺地址：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="店铺地址..." name="shop_addr"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">人均消费：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="人均消费..." name="shop_price"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">电话：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="电话..." name="shop_tel"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">营业时间：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="营业时间..." name="shop_open"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">上传图片：</span>
                        <label class="uploadImg">
                            <input type="file" name="file"/>
                            <span>上传图片</span>
                        </label>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">店铺服务：</span>
                        <textarea name="shop_service" cols="40" rows="8"></textarea>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">店铺菜单：</span>
                        <textarea name="shop_menu" cols="40" rows="8"></textarea>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">店铺描述：</span>
                        <textarea name="shop_decs" cols="40" rows="8"></textarea>
                    </li>
                    <li>
                        <input type="submit" class="link_btn" value="提交"/>
                    </li>
                </ul>
            </section>
        </div>
    </form>
</section>
</body>

</html>