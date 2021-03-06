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
        .border{ border: solid 1px #19a97b}
        .room {

              width: 540px;
              border: solid 1px green;
              display: inline-block;
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
                <ul class="ulColumn2" id="ul">
                    <li>
                        <span class="item_name" style="width:120px;">酒店名称：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="酒店名称..." name="hotel_name"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">酒店消费价格：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="酒店消费价格..." name="hotel_price"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">地址：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="地址..." name="hotel_addr"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">酒店电话：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="酒店电话..." name="hotel_phone"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">城市：</span>
                        <select name="city_name" class="select">
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
                        <span class="item_name" style="width:120px;">开始营业时间：</span>
                        <input type="text" class="textbox textbox_295"
                               placeholder="开始营业时间..." name="hotel_open"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">酒店图片：</span>
                        <label class="uploadImg">
                            <input type="file" name="hotel_image"/>
                            <span>上传图片</span>
                        </label>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">酒店星级：</span>
                        <select name="hotel_type">
                            <option value="经济型">经济型</option>
                            <option value="三星级">三星级</option>
                            <option value="四星级">四星级</option>
                            <option value="五星级">五星级</option>
                        </select>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">上网服务：</span>
                        <select name="hotel_net">
                            <option value="无">无</option>
                            <option value="酒店提供宽带上网，公共区域提供WiFi">
                                酒店提供宽带上网，公共区域提供WiFi</option>
                        </select>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">餐饮设施：</span>
                        <textarea name="hotel_restaurant" cols="40"
                                  rows="8" class="border"></textarea>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">房间设施：</span>
                        <textarea name="hotel_rooms" cols="40"
                                  rows="8" class="border"></textarea>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">康体娱乐：</span>
                        <textarea name="hotel_sports" cols="40"
                                  rows="8" class="border"></textarea>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">酒店简介：</span>
                        <textarea name="hotel_desc" cols="40" rows="8"
                                  style="border: solid 1px #139667"></textarea>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">可接受的信用卡：</span>
                        <div style="width: 360px; display: inline-block;
                        border: 1px solid #139667; padding: 10px">
                            <input type="checkbox" name="hotel_card[]" value="Visacard"/>&nbsp;Visacard&nbsp;
                            <input type="checkbox" name="hotel_card[]" value="牡丹卡"/>&nbsp;牡丹卡&nbsp;
                            <input type="checkbox" name="hotel_card[]" value="金穗卡"/>&nbsp;金穗卡&nbsp;
                            <input type="checkbox" name="hotel_card[]" value="长城卡"/>&nbsp;长城卡&nbsp;
                            <br/>
                            <input type="checkbox" name="hotel_card[]" value="龙卡"/>&nbsp;龙卡&nbsp;
                            <input type="checkbox" name="hotel_card[]" value="太平洋卡"/>&nbsp;太平洋卡&nbsp;
                            <input type="checkbox" name="hotel_card[]" value="东方卡"/>&nbsp;东方卡&nbsp;
                            <input type="checkbox" name="hotel_card[]" value="万事达卡"/>&nbsp;万事达卡&nbsp;
                            <input type="checkbox" name="hotel_card[]" value="运通卡"/>&nbsp;运通卡&nbsp;
                            <input type="checkbox" name="hotel_card[]" value="大莱卡"/>&nbsp;大莱卡&nbsp;
                            <input type="checkbox" name="hotel_card[]" value="JCBcard"/>&nbsp;JCBcard&nbsp;
                        </div>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">酒店服务：</span>
                        <div style="width: 600px; display: inline-block;
                        border: 1px solid #139667; padding: 10px">
                            <input type="checkbox" name="hotel_service[]" value="免费Wifi"/>&nbsp;免费Wifi&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="免费停车"/>&nbsp;免费停车&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="商务中心"/>&nbsp;商务中心&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="会议室"/>&nbsp;会议室&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="中餐厅"/>&nbsp;中餐厅&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="接机服务（收费）"/>&nbsp;接机服务（收费）&nbsp;
                            <br/>
                            <input type="checkbox" name="hotel_service[]" value="邮政服务"/>&nbsp;邮政服务&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="叫车服务"/>&nbsp;叫车服务&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="房间消毒"/>&nbsp;房间消毒&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="多种语言服务人员"/>&nbsp;多种语言服务人员&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="叫醒服务"/>&nbsp;叫醒服务&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="洗衣服务"/>&nbsp;洗衣服务&nbsp;
                            <br/>
                            <input type="checkbox" name="hotel_service[]" value="旅游服务"/>&nbsp;旅游服务&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="租车服务"/>&nbsp;租车服务&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="擦鞋服务"/>&nbsp;擦鞋服务&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="行李寄存"/>&nbsp;行李寄存&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="会议室"/>&nbsp;票务服务&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="票务服务"/>&nbsp;外币兑换服务&nbsp;
                            <br/>
                            <input type="checkbox" name="hotel_service[]" value="有电梯"/>&nbsp;有电梯&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="前台保险柜"/>&nbsp;前台保险柜&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="自助取款机"/>&nbsp;自助取款机&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="安全消防系统"/>&nbsp;安全消防系统&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="电子结账系统"/>&nbsp;电子结账系统&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="无烟楼层"/>&nbsp;无烟楼层&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="24小时热水"/>&nbsp;24小时热水&nbsp;
                            <input type="checkbox" name="hotel_service[]" value="公共区域闭路电视监控系统"/>&nbsp;公共区域闭路电视监控系统&nbsp;
                        </div>
                    </li>
                    <li id="roomLi">
                        <span class="item_name" style="width:120px;">房型：</span>
                        <div class="room">
                            <ul>
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
                                    <span class="item_name" style="width:120px;">床型：</span>
                                    <select name="room_bed[]">
                                        <option value="单人床">单人床</option>
                                        <option value="大床">大床</option>
                                        <option value="双床">双床</option>
                                    </select>
                                </li>
                                <li>
                                    <span class="item_name" style="width:120px;">价格：</span>
                                    <input type="text" class="textbox textbox_295"
                                           placeholder="价格..." name="room_price[]"/>
                                </li>
                                <li>
                                    <span class="item_name" style="width:120px;">宽带：</span>
                                    <select name="room_wifi[]">
                                        <option value="无">无</option>
                                        <option value="免费wifi">免费wifi</option>
                                    </select>
                                </li>
                                <li>
                                    <span class="item_name" style="width:120px;">上传图片：</span>
                                    <label class="uploadImg">
                                        <input type="file" name="file[]"/>
                                        <span>上传图片</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li id="button">
                        <div style="margin-left: 80px">
                            <input type="button" class="link_btn"
                                   value="添加房型" onclick="add()"/>
                            &nbsp;&nbsp;&nbsp;
                            <input type="submit" class="link_btn" value="提交"/>
                        </div>

                    </li>
                </ul>
            </section>
        </div>
    </form>
</section>
</body>
<script type="text/javascript">

    function add() {

       var value = $("#roomLi").clone();
       $("#button").before(value);
    }

</script>
</html>