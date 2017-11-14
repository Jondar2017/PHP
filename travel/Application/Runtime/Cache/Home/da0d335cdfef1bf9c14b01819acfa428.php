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
<link rel="stylesheet" href="/travel/Public/Home/Css/sign/desc.css">
<div class="content mt20">
    <div class="box_list">
        <div class="spots_info_con">
            <div class="spots_info">
                <?php if(is_array($views)): foreach($views as $key=>$v): ?><div class="scroll_pic_con">
                        <div class="scroll_pic">
                            <a href="">
                                <img src="/travel/Public/Home/Images/view/<?php echo ($v["images_path"]); ?>" alt="<?php echo ($v["view_name"]); ?>" width="300" height="200">
                            </a>
                        </div>
                    </div>
                    <div class="type">
                        <h1><?php echo ($v["view_name"]); ?> <em><?php echo ($v["view_level"]); ?></em></h1>
                        <dl class="first">
                            <dt>景点地址：</dt>
                            <dd><?php echo ($v["view_addr"]); ?></dd>
                        </dl>
                        <dl class="introduce">
                            <dd>
                                <?php echo (msubstr($v["view_content"],0,120)); ?>
                                [<a href="profile">阅读全文</a>]
                            </dd>
                        </dl>
                        <dl>
                            <dt>开放时间：</dt>
                            <dd>
                                <p class="text_over"><?php echo ($v["view_start_time"]); ?>-<?php echo ($v["view_end_time"]); ?></p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>门票信息：</dt>
                            <dd>
                                <p class="more J_why" detail="途牛票价：￥90">
                                    途牛票价: 170元起  儿童价：60元起... <i></i>
                                </p>
                                <a href="">购买门票</a>
                            </dd>
                        </dl>
                        <a href="#write" class="btn_write">写点评</a>
                    </div>
                    <div class="fn-clear"></div><?php endforeach; endif; ?>
            </div>
            <!--<div class="spots_info_tit">-->
            <!--<strong>华侨城景点推荐</strong>-->
            <!--</div>-->
            <!--<div class="scroll_spots_con">-->
            <!--<div class="scroll_spots w890" id="scroll_spots">-->
            <!--<ul>-->
            <!--<li>-->
            <!--<a href="">-->
            <!--<img src="/travel/Public/Home/Images/view/view01.jpg" alt="" width="150" height="100">-->
            <!--<p>世界之窗</p>-->
            <!--</a>-->
            <!--</li>-->
            <!--</ul>-->
            <!--</div>-->
            <!--</div>-->
        </div>
        <div class="list_ticket mt20">
            <div class="top_con">
                <span class="title">产品/供应商</span>
                <span class="cost">票面价</span>
                <span class="price">途牛价</span>
                <span class="type">取票方式</span>
            </div>
            <div class="type_con">
                <div class="type_l">
                    <span>成人票</span>
                </div>
                <div clss="type_r">
                    <ul>
                        <?php if(is_array($ticket)): foreach($ticket as $key=>$v): ?><li class="">
                                <span class="title">
                                    <a href="<?php echo U('Home/SignOrder/index?ticket_id='.$v['ticket_id']);?>" target="_blank" ><?php echo ($v["ticket_title"]); ?></a>
                                    <div class="vendor">供应商：<?php echo ($v["ticket_owner"]); ?></div>
                                </span>
                                <span class="cost">
                                    ￥<del><?php echo ($v["ticket_cost"]); ?></del>
                                </span>
                                <span class="price">
                                    <em>
                                        ￥<b><?php echo ($v["ticket_price"]); ?></b>
                                    </em>
                                    起
                                    <i class="sale"><?php echo ($v["ticket_discount"]); ?></i>
                                </span>
                                <span class="type" title="请您凭入园辅助码于游玩当天10:00 - 19:00至阿尔卑斯冰雪世界团购兑换处（从世界之窗停车场或世界之窗地铁H出口旁边的欧陆风情街入口，前行100米）换取门票入园，换票时请务必携带本人身份证；当天下单2小时后生效">
                                    请您凭入园辅...
                                </span>
                                <span class="must J_must">须知<i></i></span>
                                <span class="pay">在线支付</span>
                                <span class="btn">
                                    <a href="<?php echo U('Home/SignOrder/index?ticket_id='.$v['ticket_id']);?>" target="_blank">预订</a>
                                </span>
                                <div class="hide_box">
                                    <i></i>
                                    ①取票方式：景区售票处<br>
                                    ②门票当天有效，出园需入园，请再次购票。<br>
                                    ③为保证取票、入园顺利，预订时请务必填写真是姓名、手机号码等信息 <br>
                                    ④如需退款或改期请在游玩日前一天（提前24个小时）申请退款或改期，否则不可退改
                                </div>
                            </li><?php endforeach; endif; ?>
                    </ul>
                    <script>
                        $(function(){
                            var click_time = 0;
                            $(".list_ticket li span.must").click(function(){
                                if (click_time++ % 2 == 0){
                                    $(this).parent().addClass("open");
                                    $(this).find("i").css("transform", "rotate(180deg)");
                                } else {
                                    $(this).parent().removeClass("open");
                                    $(this).find("i").css("transform", "rotate(0deg)");
                                }

                            });
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="review_con mt20">
            <strong id="write">
                最新评论 <em>(0条)</em>
            </strong>
            <div class="publish_con">
                <img src="/travel/Public/Home/Images/img_v1/default_56.png" alt="" width="56" height="56">
                <form action="<?php echo U('Home/Sign/write');?>" id="comment_form" class="comment_form" method="post">
                    <input type="hidden" name="ve" id="ve" value="<?php echo ($ve); ?>">
                    <input type="hidden" name="user_id" id="user_id" value="1">
                    <div class="textarea_con">
                        <i></i>
                        <textarea name="comment_v" class="w263" id="saytext" placeholder="点此发表评论"></textarea>
                        <span class="textar_box_num js_textCount">
                            还剩下 <em>500</em>/500
                        </span>
                        <input type="hidden" value="1802" name="hotel_id">
                        <a class="btn_publish">发表评论</a>
                        <div class="page">
                            <div class="page_con"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="publish_cont">
                <ul>
                    <li>
                        <!--<div class="top">-->
                        <!--<img src="/travel/Public/Home/Images/img_v1/top.jpg" alt="">-->
                        <!--<span class="username">hahaha</span>-->
                        <!--<p class="time">2017-12-12 23:00:00</p>-->
                        <!--</div>-->
                        <!--<div class="text_user">-->
                        <!--12121212121221-->
                        <!--</div>-->
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--<div class="comment">-->
    <!--<img class="warm" src="/travel/Public/Home/Images/img_v1/warm.jpg"/>-->
    <!--<span>请填写评论内容</span>-->
    <!--</div>-->
    <script>
        $(function(){
            $(".btn_publish").click(function(){
                var text = $(".textarea_con #saytext").val();
                var len = text.length;
                if (len<=0){
                    var div = $("<div></div>");
                    var img = $("<img src='/travel/Public/Home/Images/img_v1/warm.jpg'>");
                    var span = $("<span>请填写评论内容</span>");
                    div.addClass("comment");
                    img.addClass("warm");
                    span.addClass("tdd");
                    div.append(img);
                    div.append(span);
                    $(document.body).append(div);

                    //设置div消失
                    setTimeout(function(){
                        var box = $(".comment");
                        box.remove();
                    },3000);//2秒，可以改动
                    return false;
                } else {
                    var view_id = $("#ve").val();
                    var user_id = $("#user_id").val();
                    var comment = $("#saytext").val();
                    var now = get_now();

//                    alert(view_id + "fen" + user_id + "ewwe" + comment);
                    $.ajax({
                        url:"<?php echo U('Home/Sign/write');?>",//这里指向的就不再是页面了，而是一个方法。
                        data:{view:view_id, user_id:user_id, comment:comment, now:now},
                        type:"POST",
                        dataType:"JSON",
                        success: function(data){
                            //alert(data[0].code);//这里要用索引，使用eq读取不出来数据。
                            $(".publish_cont ul li").remove();
                            for(a in data)
                            {
                                var li = $("<li></li>");
                                var top = $("<div class='top'></div>");
                                var img = $("<img src='/travel/Public/Home/Images/img_v1/top.jpg'>");
                                var username = $("<span class='username'>" + data[a].user_id +"</span>");
                                var time = $("<p class='time'>" + data[a].now + "</p>");
                                var text_user = $("<div class='text_user'>" + data[a].comment + "</div>");

                                top.append(img);
                                top.append(username);
                                top.append(time);
                                li.append(top);
                                li.append(text_user);

                                $(".publish_cont ul").append(li);
                            }

                        }
                    })
                }
                return false;
            });
            //输入字数的减少
            $(function(){
                $('#saytext').on('keyup',function(){
                    var txtval = $('#saytext').val().length;
                    console.log(txtval);
                    var str = parseInt(500-txtval);
                    console.log(str);
                    if(str > 0 ){
                        $('.textarea_con span em').html(str);
                    }else{
                        $('#textarea_con span em').html('0');
                        $('#saytext').val($('#saytext').val().substring(0,500)); //意思是当里面的文字小于等于0的时候，那么字数不能再增加，只能是500个字
                    }
                });
            })

            //格式化获取当前时间
            function p(s) {
                return s < 10 ? '0' + s: s;
            }

            //获取当前时间
            function get_now(){
                var myDate = new Date();
                //获取当前年
                var year=myDate.getFullYear();
                //获取当前月
                var month=myDate.getMonth()+1;
                //获取当前日
                var date=myDate.getDate();
                var h=myDate.getHours();       //获取当前小时数(0-23)
                var m=myDate.getMinutes();     //获取当前分钟数(0-59)
                var s=myDate.getSeconds();
                var now=year+'-'+p(month)+"-"+p(date)+" "+p(h)+':'+p(m)+":"+p(s);

                return now;
            }

        });

        $(function () {
            $(".city_top .city_menu ul li:nth-child(2)").addClass("on");
        });

    </script>
</div>
</body>
</html>