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
        .room {

            width: 500px;
            height: 340px;
            border: solid 1px green;
            margin-left: 20px;
            margin-top: 30px;
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
                <dd><a href="<?php echo U('shop');?>">周边店铺</a></dd>
                <dd><a href="<?php echo U('hotel');?>" class="active">地方酒店</a></dd>
            </dl>
        </li>
    </ul>
</aside>
<section class="rt_wrap content mCustomScrollbar">
    <!--<div class="room">-->
        <form method="post" enctype="multipart/form-data">
            <div class="rt_content">
                <section id="form_section">
                    <?php $__FOR_START_6977__=0;$__FOR_END_6977__=$num;for($i=$__FOR_START_6977__;$i < $__FOR_END_6977__;$i+=1){ ?><div class="room">
                            <ul class="ulColumn2">
                                <li>
                                    <span class="item_name" style="width:120px;">房型名称：</span>
                                    <input type="text" class="textbox textbox_295"
                                           placeholder="房型名称..." name="room_name[]"/>
                                    <input type="hidden" name="hotel_id" value="<?php echo ($hotel_id); ?>"/>
                                </li>
                                <li>
                                    <span class="item_name" style="width:120px;">房型面积：</span>
                                    <input type="text" class="textbox textbox_295"
                                           placeholder="房型面积..." name="room_size[]"/>
                                </li>
                                <li>
                                    <span class="item_name" style="width:120px;">可住：</span>
                                    <input type="text" class="textbox textbox_295"
                                           placeholder="可住..." name="room_people[]"/>
                                </li>
                                <li>
                                    <span class="item_name" style="width:120px;">楼层：</span>
                                    <input type="text" class="textbox textbox_295"
                                           placeholder="楼层..." name="room_floor[]"/>
                                </li>
                                <li>
                                    <span class="item_name" style="width:120px;">上传图片：</span>
                                    <label class="uploadImg">
                                        <input type="file" name="file"/>
                                        <span>上传图片</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <br/><?php } ?>
                   <input type="button" class="link_btn" value="添加"/>
                    &nbsp;&nbsp;&nbsp;
                   <input type="submit" class="link_btn" value="提交"/>
                </section>
            </div>
        </form>
    <!--</div>-->
</section>
</body>
</html>