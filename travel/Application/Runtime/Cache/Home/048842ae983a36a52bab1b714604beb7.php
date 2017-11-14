<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/index.css">
    <link rel="stylesheet" type="text/css" href="/travel/Public/Home/Css/s.css" />
    <script src="/travel/Public/Home/Js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/travel/Public/Home/Js/jquery.js"></script>
    <script src="/travel/Public/Home/plugin/layer/layer.js"></script>
    <link rel="stylesheet" type="text/css"
          media="screen" href="/travel/Public/Home/Css/css-table.css" />
    <script type="text/javascript" src="/travel/Public/Home/Js/style-table.js"></script>
</head>
<body>
<header>
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
            <div class="login_content">
                <span class="welcome">
                    欢迎登录途牛旅游网
                </span>
            </div>
        </div>
    </div>
</header>
<aside class="lt_aside_nav content mCustomScrollbar">
    <ul style="color: white">
        <li>
            <dl>
                <dt>查看订单</dt>
                <dd><a href="<?php echo U('OrderInfo/ticket');?>">门票订单</a></dd>
                <dd><a href="<?php echo U('OrderInfo/query');?>">酒店订单</a></dd>
                <dd><a href="<?php echo U('OrderInfo/sign');?>">景点订单</a></dd>
            </dl>
        </li>
    </ul>
</aside>

<section class="rt_wrap content mCustomScrollbar">
    <div class="rt_content">
        <table id="travel">
            <thead>
            <tr>
                <th scope="col" rowspan="2">景点名称</th>
                <th scope="col" colspan="10">订单详情</th>
            </tr>
            <tr>
                <th scope="col">门票</th>
                <th scope="col">门票价格</th>
                <th scope="col">门票数量</th>
                <th scope="col">票面价</th>
                <th scope="col">日期</th>
                <th scope="col">手机号码</th>
                <th scope="col">用户名</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
                    <th scope="row"><?php echo ($val["view_name"]); ?></th>
                    <td><?php echo ($val["ticket_name"]); ?></td>
                    <td><?php echo ($val["ticket_price"]); ?></td>
                    <td><?php echo ($val["num"]); ?></td>
                    <td><?php echo ($val["total_price"]); ?></td>
                    <td><?php echo ($val["travel_date"]); ?></td>
                    <td><?php echo ($val["phone"]); ?></td>
                    <td><?php echo ($val["username"]); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
</section>
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
</body>
</html>