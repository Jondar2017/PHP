<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/travel/Public/Home/Css/order.css">
    <script type="text/javascript" src="/travel/Public/Home/Js/jquery.min.js"></script>
    <script src="/travel/Public/Home/Js/foundation-datepicker.js"></script>
    <script src="/travel/Public/Home/Js/foundation-datepicker.zh-CN.js"></script>
    <link rel="stylesheet" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
    <!--<link href="/travel/Public/Home/Css/foundation.min.css" rel="stylesheet" type="text/css">-->
    <link href="/travel/Public/Home/Css/foundation-datepicker.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    </style>
    </head>
<body>
<div class="book_order">
    <div class="order_con fn-clear">
        <div class="sideBar">
            <dl class="hotel_info">
                <dt>
                    <img src="/travel/Public/Home/Images/hotel/<?php echo ($hotelInfo["hotel_image"]); ?>"
                         class="lazy "
                         data-original="http://pavo.
                         elongstatic.com/i/Hotel350_350/00008ya3.jpg"
                         style="width: 70px; height: 70px; display: block;" alt="广州汇金大酒店">
                </dt>
                <dd class="adress">
                    <h3>
                        <a href="/hotel-62565" target="_blank" title="广州汇金大酒店">
                            <?php echo ($hotelInfo["name"]); echo ($hotelInfo["hotel_name"]); ?>
                        </a>
                        <i class="star4e1" title="欣欣用户评定为高档型酒店"></i>
                    </h3>
                    <p><?php echo ($hotelInfo["hotel_addr"]); ?></p>
                </dd>
                <dd class="bed_inf">
                    <h3><?php echo ($room["room_name"]); ?></h3>
                    <ul class="fn-clear">
                        <li>床型：<em><?php echo ($room["room_bed"]); ?></em></li>
                        <li>面积：<em><?php echo ($room["room_size"]); ?></em></li>
                        <li>早餐：<em>不含早</em></li>
                        <li>宽带：<em><?php echo ($room["room_wifi"]); ?></em></li>
                    </ul>
                    <div style="clear: both"></div>
                </dd>
                <dd class="prompt">
                    <h3>温馨提示：</h3>
                    <p>到酒店前台请提供入住人姓名及手机号、并出示有效证件办理入住手续。</p>
                </dd>
                <dd class="money">
                    <em>订单金额</em>
                    <strong price="<?php echo ($room["room_price"]); ?>">
                        <b>¥</b>
                        <?php echo ($room["room_price"]); ?>
                    </strong>
                </dd>
            </dl>
        </div>
        <div class="sideCon">
             <div class="orderCon">
                  <p class="firstP"><?php echo ($room["room_name"]); ?></p>
                  <form id="orderForm" method="post">
                      <?php if($order != null): ?><input type="hidden" value="1" name="update"/>
                          <input type="hidden" value="<?php echo ($order["id"]); ?>" name="id"/><?php endif; ?>
                      <input type="hidden" name="roomcharge"
                             value="<?php echo ($room["room_price"]); ?>"/>
                      <p>
                          <label>从</label>
                          <input type="text"  value="<?php echo ($order["startdate"]); ?>"
                                 id="dpd1" name="startdate">
                          &nbsp;&nbsp;&nbsp;
                          <label>到</label>
                          <input type="text"  value="<?php echo ($order["enddate"]); ?>"
                                 id="dpd2" name="enddate">
                      </p>
                      <p>
                          <span>房间数量</span>
                          <select class="roomSelect" name="roomcount"
                                  orderPrice="<?php echo ($order["roomcharge"]); ?>"
                                  roomCount="<?php echo ($order["roomcount"]); ?>">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                          </select>
                      </p>
                      <p>
                          <span>房费总计</span>
                          <strong style="color: red;font-size: 18px" id="fee">
                              <b>￥</b>
                              <?php echo ($room["room_price"]); ?>
                          </strong>
                          <span>(预订免费，入住后酒店前台付款)</span>
                          <input type="hidden" name="roomid" value="<?php echo ($room["room_id"]); ?>"/>
                          <input type="hidden" name="hotelid" value="<?php echo ($hotelInfo["hotel_id"]); ?>"/>
                          <input type="hidden" name="userid" value="<?php echo (session('id')); ?>"/>
                      </p>
                      <br/>
                      <p>入住信息</p>
                      <p>
                          <label>客人姓名</label>
                          <input type="text" class="inputStyle" name="name"
                                 value="<?php echo ($order["name"]); ?>"/>
                      </p>
                      <p>
                          <label>联系手机</label>
                          <input type="text" class="inputStyle" name="phone"
                                 value="<?php echo ($order["phone"]); ?>"/>
                      </p>
                      <br/>
                      <p>
                          <input type="submit" class="complete" value="完成预定"/>
                      </p>
                  </form>
             </div>
        </div>
    </div>
</div>
</body>
<script type="application/javascript">

      var charge = $(".roomSelect").attr("orderPrice");
      var count = $(".roomSelect").attr("roomCount");
      if(charge != null && charge != "") {

          $(".roomSelect").val(count);
          $(".money strong").html("￥" + charge);
          $("#fee").html("￥" + charge);
      }else {

          var price = $(".money strong").attr("price");

          $("#fee").html("￥" + price);
          $(".money strong").html("￥" + price);
      }
      $(".roomSelect").change(function () {

          var value = $(".roomSelect").val();
          var price = $(".money strong").attr("price");
          $("#fee").html("￥" + value * price);
          $(".money strong").html("￥" + value * price);

      });

      var nowTemp = new Date();
      var now = new Date(nowTemp.getFullYear(),
          nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
      var checkin = $('#dpd1').fdatepicker({
          onRender: function (date) {
              return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
      }).on('changeDate', function (ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
              var newDate = new Date(ev.date)
              newDate.setDate(newDate.getDate() + 1);
              checkout.update(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
      }).data('datepicker');
      var checkout = $('#dpd2').fdatepicker({
          onRender: function (date) {
              return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
      }).on('changeDate', function (ev) {
          checkout.hide();
      }).data('datepicker');
</script>
</html>