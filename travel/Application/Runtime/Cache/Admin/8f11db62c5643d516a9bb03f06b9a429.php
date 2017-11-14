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
    <script type="text/javascript" src="/travel/Public/Admin/Js/module.js"></script>
    <script type="text/javascript" src="/travel/Public/Admin/Js/hotkeys.js"></script>
    <script type="text/javascript" src="/travel/Public/Admin/Js/uploader.js"></script>
    <script type="text/javascript" src="/travel/Public/Admin/Js/simditor.js"></script>
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
        <li>
            <a href="<?php echo U('Public/adminLoginOut');?>" class="quit_icon">
                安全退出
            </a>
        </li>
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
                <dd><a href="<?php echo U('hotel');?>">地方酒店</a></dd>
                <dd><a href="<?php echo U('recommend');?>" class="active">旅游线路</a></dd>
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
                        <span class="item_name" style="width:120px;">线路名称：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="线路描述..." name="recomend_des"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">所在城市：</span>
                        <select name="recomend_city" class="select">
                            <option value="广州">广州</option>
                            <option value="深圳">深圳</option>
                            <option value="珠海">珠海</option>
                            <option value="佛山">佛山</option>
                            <option value="东莞">东莞</option>
                            <option value="中山">中山</option>
                            <option value="江门">江门</option>
                            <option value="肇庆">肇庆</option>
                            <option value="惠州">惠州</option>
                            <option value="汕头">汕头</option>
                            <option value="潮州">潮州</option>
                            <option value="揭阳">揭阳</option>
                            <option value="汕尾">汕尾</option>
                            <option value="湛江">湛江</option>
                            <option value="茂名">茂名</option>
                            <option value="阳江">阳江</option>
                            <option value="韶关">韶关</option>
                            <option value="清远">清远</option>
                            <option value="云浮">云浮</option>
                            <option value="梅州">梅州</option>
                            <option value="河源">河源</option>
                        </select>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">景点图片：</span>
                        <label class="uploadImg">
                            <input type="file" name="file"/>
                            <span>上传图片</span>
                        </label>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">门市价：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="门市价..." name="recomend_all"
                               id="total_price"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">价格：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="价格..." name="recomend_price" id="price"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">儿童价：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="儿童价..." name="recomend_child"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">出游方式：</span>
                        <select name="recomend_type">
                            <option value="跟团游">跟团游</option>
                            <option value="独立出行">独立出行</option>
                            <option value="自由行">自由行</option>
                            <option value="自驾游">自驾游</option>
                        </select>
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
<script type="text/javascript">
    var editor = new Simditor({
        textarea: $('#editor'),
        toolbar: ['title', 'bold', 'italic', 'underline',
            'strikethrough', 'color', '|', 'ol', 'ul', 'blockquote',
            'code', 'table', '|', 'link', 'image', 'hr', '|', 'indent', 'outdent']
    });

</script>
</html>