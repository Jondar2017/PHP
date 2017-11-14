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
    <link rel="stylesheet" type="text/css"
          media="screen" href="/travel/Public/Admin/Css/css-table.css" />
    <script type="text/javascript" src="/travel/Public/Admin/Js/style-table.js"></script>
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
                <dd><a href="<?php echo U('shop');?>">周边店铺</a></dd>
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
                <dd><a href="<?php echo U('show_view');?>" class="active">景点订单</a></dd>
            </dl>
        </li>
    </ul>
</aside>
<section class="rt_wrap content mCustomScrollbar">
    <div class="rt_content">
        <section>
            <table id="travel">
                <thead>
                <tr>
                    <th scope="col" rowspan="2">线路名称</th>
                    <th scope="col" colspan="10">订单详情</th>
                </tr>
                <tr>
                    <th scope="col">成人价</th>
                    <th scope="col">儿童价</th>
                    <th scope="col">票面价</th>
                    <th scope="col">成人数量</th>
                    <th scope="col">儿童数量</th>
                    <th scope="col">出行方式</th>
                    <th scope="col">手机号码</th>
                    <th scope="col">用户名</th>
                    <th scope="col">开始时间</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
                        <th scope="row"><?php echo ($val["line_name"]); ?></th>
                        <td><?php echo ($val["adult_price"]); ?></td>
                        <td><?php echo ($val["child_price"]); ?></td>
                        <td><?php echo ($val["total_price"]); ?></td>
                        <td><?php echo ($val["adults"]); ?></td>
                        <td><?php echo ($val["children"]); ?></td>
                        <td><?php echo ($val["travel_type"]); ?></td>
                        <td><?php echo ($val["phone"]); ?></td>
                        <td><?php echo ($val["username"]); ?></td>
                        <td><?php echo ($val["start_time"]); ?></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </section>
    </div>
</section>
</body>

</html>