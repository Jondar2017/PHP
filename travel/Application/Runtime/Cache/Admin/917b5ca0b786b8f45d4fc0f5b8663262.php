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
    <script src="/travel/Public/Admin/Js/jquery.min.js"></script>
    <script src="/travel/Public/Admin/Js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript" src="/travel/Public/Admin/Js/module.js"></script>
    <script type="text/javascript" src="/travel/Public/Admin/Js/hotkeys.js"></script>
    <script type="text/javascript" src="/travel/Public/Admin/Js/uploader.js"></script>
    <script type="text/javascript" src="/travel/Public/Admin/Js/simditor.js"></script>
    <script type="text/javascript" src="/travel/Public/Admin/Js/jquery-clock-timepicker.min.js"></script>

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
        .time { display:inline-block; font-size:26px;
            padding:5px; text-align:center; width:86px; border: 1px #139667 solid}

        .room {

            width: 540px;
            border: solid 1px green;
            display: inline-block;
            margin-left: 40px;
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
                <dt>添加数据</dt>
                <dd><a href="<?php echo U('index');?>">地方美食</a></dd>
                <dd><a href="<?php echo U('shop');?>">周边店铺</a></dd>
                <dd><a href="<?php echo U('hotel');?>">地方酒店</a></dd>
                <dd><a href="<?php echo U('recommend');?>">旅游线路</a></dd>
                <dd><a href="<?php echo U('view');?>" class="active">旅游景点</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>查看订单</dt>
                <dd><a href="<?php echo U('index');?>">门票订单</a></dd>
                <dd><a href="<?php echo U('shop');?>">酒店订单</a></dd>
                <dd><a href="<?php echo U('hotel');?>">景点订单</a></dd>
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
                        <span class="item_name" style="width:120px;">景点名称：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="景点名称..." name="view_name"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">景点地址：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="景点地址..." name="view_addr"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">景点价格：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="景点价格..." name="view_price"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">景点开放时间：</span>
                        <input class="time" type="text" value="14:30"
                               name="view_start_time"/>
                        &nbsp;—&nbsp;
                        <input type="text" class="time"
                               value="14:30" name="view_end_time"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">上传图片：</span>
                        <label class="uploadImg">
                            <input type="file" name="file"/>
                            <span>上传图片</span>
                        </label>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">景点类型：</span>
                        <select name="view_type_id">
                            <?php if(is_array($view_type)): $i = 0; $__LIST__ = $view_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val['view_type_id']); ?>">
                                    <?php echo ($val["view_type_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">景点等级：</span>
                        <select name="view_level_id">
                            <option value="1">五星级</option>
                            <option value="2">四星级</option>
                            <option value="3">三星级</option>
                        </select>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">景点所在地：</span>
                        <select name="view_city" class="select">
                            <option>广州</option>
                            <option>深圳</option>
                            <option>珠海</option>
                            <option>佛山</option>
                            <option>东莞</option>
                            <option>中山</option>
                            <option>江门</option>
                            <option>肇庆</option>
                            <option>惠州</option>
                            <option>汕头</option>
                            <option>潮州</option>
                            <option>揭阳</option>
                            <option>汕尾</option>
                            <option>湛江</option>
                            <option>茂名</option>
                            <option>阳江</option>
                            <option>韶关</option>
                            <option>清远</option>
                            <option>云浮</option>
                            <option>梅州</option>
                            <option>河源</option>
                        </select>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px">景点介绍：</span>
                            <br/>
                        <div style="width: 1000px;margin-left: 40px">
                            <textarea name="view_content"  id="edit"></textarea>
                        </div>
                    </li>
                    <li id="roomLi">
                        <span class="item_name"
                              style="width:120px;
                              display: block;
                              text-align: center;
                              margin-bottom: 20px">门票：</span>
                        <div class="room">
                            <ul>
                                <li>
                                    <span class="item_name"
                                          style="width:60px;
                                          text-align: right;">门票：</span>
                                    <input type="text" class="textbox textbox_295"
                                           placeholder="门票..."
                                           name="ticket_title[]"/>
                                    <input type="hidden" name="hotel_id" value="<?php echo ($hotel_id); ?>"/>
                                </li>
                                <li>
                                    <span class="item_name"
                                          style="width:60px;
                                          text-align: right">票面价：</span>
                                    <input type="text" class="textbox textbox_295"
                                           placeholder="票面价..."
                                           name="ticket_cost[]"/>
                                </li>
                                <li>
                                    <span class="item_name"
                                          style="width:60px;
                                          text-align: right">价格：</span>
                                    <input type="text" class="textbox textbox_295"
                                           placeholder="价格..."
                                           name="ticket_price[]"/>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li id="ticket">
                        <input type="button" class="link_btn" value="添加门票"/>
                        &nbsp;&nbsp;
                        <input type="submit" class="link_btn" value="提交"/>
                    </li>
                </ul>
            </section>
        </div>
    </form>
</section>
</body>
<script type="text/javascript">
    var edit = new Simditor({
        textarea: $('#edit'),
        toolbar: ['title', 'bold', 'italic', 'underline',
            'strikethrough', 'color', '|', 'ol', 'ul', 'blockquote',
            'code', 'table', '|', 'link', 'image', 'hr', '|', 'indent', 'outdent']
    });

    $(document).ready(function() {
        $('.time').clockTimePicker({});
    });

    $("input:button").click(function () {

        var roomLi = $("#roomLi").clone();
        $("#ticket").before(roomLi);
    });
</script>
</html>