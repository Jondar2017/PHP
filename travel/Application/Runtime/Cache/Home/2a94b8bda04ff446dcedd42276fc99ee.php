<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>旅游主页显示</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/index.css">
    <script src="/travel/Public/Home/Js/jquery.js"></script>
</head>
<body>
    <div class="head">
        <div class="head_con">
            <div class="logo"><a href="#"><img src="/travel/Public/Home/Images/tuniu.jpg" alt=""></a></div>
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
                            <a id="m"
                               userId="<?php echo (session('id')); ?>" style="cursor: pointer">查看订单</a>
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
            <script>
                //“我想去”的切换
                $(function(){
                    $(".go .want").hover(
                            function(){
                                $(".go .want i").css("background-position", "0px -34px");
                                $(".go .want span").html("我想去");
                            },
                            function(){
                                $(".go .want i").css("background-position", "0px 0px");
                                $(".go .want span").html("想去");
                            }
                    );
                    $(".go .been").hover(
                            function(){
                                $(".go .been i").css("background-position", "-34px -34px");
                                $(".go .been span").html("我去过");
                            },
                            function(){
                                $(".go .been i").css("background-position", "-34px 0px");
                                $(".go .been span").html("去过");
                            }
                    )
                });
            </script>
            <div class=".j_menu_fixed"></div>
            <div class="city_menu">
                <ul>
                    <li class="on"><a href="<?php echo U('Home/Index/index');?>">主页</a></li>
                    <li><a href="<?php echo U('Home/Sign/index');?>">景点</a></li>
                    <li><a href="<?php echo U('Home/Line/index');?>">线路</a></li>
                    <li><a href="<?php echo U('Home/Food/index');?>">美食</a></li>
                    <li><a href="<?php echo U('Home/Hotel/index');?>">住宿</a></li>
                    <li><a href="<?php echo U('Home/Transport//index');?>">交通</a></li>
                </ul>
            </div>
        </div>
        <div class="banner_main">
            <div class="banner">
                <div class="banner_left">
                    <ul class="banner_nav">
                        <li class="on">
                            <b>景点门票</b>
                        </li>

                        <li class="">
                            <b>线路查询</b>
                        </li>
                    </ul>
                    <div class="J_search_box trip" style="display: none">
                            <form action="<?php echo U('Home/index/line_search');?>" name="line_so" id="line_so" target="_blank" method="post">
                                <ul class="com_ul tickets_search">
                                    <li>
                                        <span>线路搜索</span>
                                        <input type="text" class="ipt_text" placeholder="请输入线路名或者城市名" id="line_input" name="line_input">
                                    </li>
                                    <li class="tickets_btn">
                                        <a href="" class="btn_search">搜索</a>
                                    </li>
                                </ul>
                            </form>
                        <!--</div>-->
                    </div>

                    <div class="J_search_box tickets_box">
                        <form action="<?php echo U('Home/index/sign_search');?>" name="ticket_so" id="ticket_so" target="_blank" method="post">
                            <ul class="com_ul tickets_search">
                                <li>
                                    <span>景点门票</span>
                                    <input type="text" class="ipt_text" placeholder="请输入景点名或者城市名" id="ticket_input" name="ticket_input">
                                </li>
                                <li class="tickets_btn">
                                    <a class="btn_search">搜索</a>
                                </li>
                            </ul>
                        </form>
                        <script>
                            $(function(){
                                //景点表单提交
                               $(".tickets_box .btn_search").click(function(){
                                   var text = $("#ticket_input").val();
                                   var len = text.length;
                                   if (len<=0) {
                                       var div = $("<div></div>");
                                       var img = $("<img src='/travel/Public/Home/Images/img_v1/warm.jpg'>");
                                       var span = $("<span>请输入搜索内容</span>");
                                       div.addClass("comment");
                                       img.addClass("warm");
                                       span.addClass("tdd");
                                       div.append(img);
                                       div.append(span);
                                       $(document.body).append(div);

                                       //设置div消失
                                       setTimeout(function () {
                                           var box = $(".comment");
                                           box.remove();
                                       }, 3000);//2秒，可以改动
                                       return false;
                                   } else {
                                       $("#ticket_so").submit();
                                   }

                               });

                                //线路表单提交
                                $(".trip .btn_search").click(function(){
                                    var text = $("#line_input").val();
                                    var len = text.length;
                                    if (len<=0) {
                                        var div = $("<div></div>");
                                        var img = $("<img src='/travel/Public/Home/Images/img_v1/warm.jpg'>");
                                        var span = $("<span>请输入搜索内容</span>");
                                        div.addClass("comment");
                                        img.addClass("warm");
                                        span.addClass("tdd");
                                        div.append(img);
                                        div.append(span);
                                        $(document.body).append(div);

                                        //设置div消失
                                        setTimeout(function () {
                                            var box = $(".comment");
                                            box.remove();
                                        }, 3000);//2秒，可以改动
                                        return false;
                                    } else {
                                        $("#line_so").submit();
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
                <div class="banner_mdd prov">
                    <div style="display: none">
                        <a href="<?php echo U('/Home/Sign/desc?view_id=1');?>">
                            <img src="/travel/Public/Home/Images/flow/f1.jpg" alt="" data-tit="世界之窗">
                        </a>
                    </div>
                    <div style="display: none">
                        <a href="<?php echo U('/Home/Sign/desc?view_id=3');?>">
                            <img src="/travel/Public/Home/Images/flow/f2.jpg" alt="" data-tit="广州塔">
                        </a>
                    </div>
                    <div style="display: none">
                        <a href="<?php echo U('/Home/Sign/desc?view_id=5');?>">
                            <img src="/travel/Public/Home/Images/flow/f3.jpg" alt="" data-tit="韶关丹霞山">
                        </a>
                    </div>
                    <div style="display: none">
                        <a href="<?php echo U('/Home/Sign/desc?view_id=7');?>">
                            <img src="/travel/Public/Home/Images/flow/f4.jpg" alt="" data-tit="长隆乐园">
                        </a>
                    </div>
                    <div style="display: none">
                        <a href="<?php echo U('/Home/Sign/desc?view_id=8');?>">
                            <img src="/travel/Public/Home/Images/flow/f5.jpg" alt="" data-tit="南澳岛">
                        </a>
                    </div>
                    <a href="" class="more">查看更多图片</a>
                    <p>世界之窗</p>
                    <ul>
                        <li class="xz">
                            <img src="/travel/Public/Home/Images/flow/f1.jpg" alt="">
                        </li>
                        <li class="">
                            <img src="/travel/Public/Home/Images/flow/f2.jpg" alt="">
                        </li>
                        <li class="">
                            <img src="/travel/Public/Home/Images/flow/f3.jpg" alt="">
                        </li>
                        <li class="">
                            <img src="/travel/Public/Home/Images/flow/f4.jpg" alt="">
                        </li>
                        <li class="">
                            <img src="/travel/Public/Home/Images/flow/f5.jpg" alt="">
                        </li>
                    </ul>
                </div>
                <script src="/travel/Public/Home/JS/index/font.js"></script>
                <script>
                    $(function(){
                        $(".banner_mdd ul li").hover(
                                function(){
                                    var now_index = $(this).index();
                                    $(".banner_mdd div").eq(now_index).show();
                                    var title = $(".banner_mdd div").eq(now_index).find("img").attr('data-tit');
                                    $(".banner_mdd p").html(title);
                                    $(this).addClass("xz");
                                },
                                function(){
                                    var now_index = $(this).index();
//                                    $(".banner_mdd div").eq(now_index).hide();
                                    $(this).removeClass("xz");
                                }
                        )
                    });
                </script>
                <script>
                   $(function(){
                       //给banner_nav的li添加on类型
                       $(".banner_nav li").click(function(){
                           $(this).addClass("on").siblings().removeClass("on")
                           var index = $(this).index();
                           switch(index){
                               case 0:
                                   $(".J_search_box").css("display", "none");
                                   $(".tickets_box").css("display", "block");
                                   break;
                               case 1:
                                   $(".J_search_box").css("display", "none");
                                   $(".trip").css("display", "block");
                                   break;
                           }
                       });
                       var status = -1;
                       //输入框点击时
                       $(".ipt_text").click(function(){
                           $(this).css("border", "1px solid #00bf49");
                       });
                       //输入框失去焦点时
                       $(".ipt_text").blur(function(){
                           $(this).css("border", "1px solid #ddd");
                           if(status == -1)
                               $(".ui_city").css("display", "none");
                       });
                       //当点击出发城市列表时，获取值
                       $(".tag_nav_con li").click(function(){
                           var city = $(this).html();
                           $(".J_from_city").val(city);
                           $(".banner #from_city").css("display", "none");
                       });


                       //当点击出发地时，出现出发城市列表
                       $(".diy_search .J_from_city").click(function(){
                           $(".banner #from_city").css("display", "block");
                           $(".banner #to_city").css("display", "none");
                       });
                       //当点击目的地时，出现目的地城市列表
                       $(".diy_search .J_to_city").click(function(){
                           $(".banner #to_city").css("display", "block");
                       });

                       //鼠标离开时，城市列表隐藏
                       $(".banner .ui_city").mouseleave(function(){
                           status = -1;
                       });

                       $(".banner .ui_city").mouseover(function(){
                           status = 1;
                       });

                       //当点击目的地城市列表时，获取值
                       $(".tag_nav_top span").click(function(){
                           var to_city = $(this).html();
                           $(".J_to_city").val(to_city);
                           $(".banner #to_city").css("display", "none");
                       });
                   })
                </script>
            </div>
        </div>
    </div>
    <div class="floor">
        <div class="floor_con">
            <div class="title">
                <a href="<?php echo U('Home/Line/index');?>" class="more" target="_blank">更多&gt;&gt;</a>
                <strong>
                    <i class="l1"></i>
                    广东旅游
                </strong>
                <div class="tag_title_top" id="tag_xianlu_top">
                    <a href="" class="on">推荐<i></i></a>
                    <?php if(is_array($days)): foreach($days as $key=>$v): ?><a href="<?php echo U('Home/Line/get_days','days_id='.$v['days_id']);?>"><?php echo ($v["days"]); ?><i></i></a><?php endforeach; endif; ?>

                </div>
            </div>
            <div class="box_con">
                <div class="sidebar_city">
                    <div class="txt">
                        <dl>
                            <dt>热门目的地</dt>
                            <dd>
                               <?php if(is_array($host)): foreach($host as $key=>$v): ?><a href="<?php echo U('Home/Sign/desc?view_id='.$v['view_id']);?>"><?php echo ($v["view_name"]); ?></a><?php endforeach; endif; ?>
                            </dd>
                        </dl>
                        <dl>
                            <dt>热门线路城市</dt>
                            <dd>
                              <?php if(is_array($hotcity)): $i = 0; $__LIST__ = array_slice($hotcity,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/LineCity/index?city_name='.$vo);?>"><?php echo ($vo); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                            </dd>
                        </dl>
                        <dl>
                            <dt>景点类型</dt>
                            <dd>
                               <?php if(is_array($level)): foreach($level as $key=>$v): ?><a href="<?php echo U('Home/Sign/get_level_view?l_id='.$v['level_id']);?>"><?php echo ($v["level_name"]); ?></a><?php endforeach; endif; ?>
                            </dd>
                        </dl>
                        <div class="brand">
                            <img class="lazy" src="" alt="" style="width: 240px; height: 132px; display: inline;">
                        </div>
                    </div>
                </div>
                <div class="side_con" id="tag_xianlu_con">
                    <div class="txt_tw">
                        <ul>
                            <?php if(is_array($recomend)): foreach($recomend as $key=>$v): ?><li>
                                    <a href="<?php echo U('Home/Line/desc','id='.$v['recomend_id']);?>" target="_blank">
                                        <img calss="lazy" src="/travel/Public/Home/Images/recommend/<?php echo ($v["image_path"]); ?>" alt="" style="width: 221px; height: 146px; display: block;">
                                        <p><?php echo ($v["recomend_des"]); ?></p>
                                        <div class="text_con">
                                            <div class="num">
                                                <span class="sale">省￥<?php echo ($v["recomend_discount"]); ?></span>
                                            <span class="price">
                                                ￥<b><?php echo ($v["recomend_price"]); ?></b>起
                                            </span>
                                            </div>
                                        </div>
                                    </a>
                                </li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
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