<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>系统登录</title>
    <link href="/travel/Public/Admin/Css/login.css" rel="stylesheet"
          rev="stylesheet" type="text/css" media="all" />
    <link href="/travel/Public/Admin/Css/demo.css" rel="stylesheet"
          rev="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="/travel/Public/Admin/Js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/travel/Public/Admin/Js/jquery.SuperSlide.js"></script>
    <!--<script type="text/javascript" src="/travel/Public/Admin/Js/Validform_v5.3.2_min.js"></script>-->

    <script>
        $(function(){

            $(".i-text").focus(function(){
                $(this).addClass('h-light');
            });

            $(".i-text").focusout(function(){
                $(this).removeClass('h-light');
            });

            $("#username").focus(function(){
                var username = $(this).val();
                if(username=='输入账号'){
                    $(this).val('');
                }
            });

            $("#username").focusout(function(){
                var username = $(this).val();
                if(username==''){
                    $(this).val('输入账号');
                }
            });


            $("#password").focus(function(){
                var username = $(this).val();
                if(username=='输入密码'){
                    $(this).val('');
                }
            });


            $("#yzm").focus(function(){
                var username = $(this).val();
                if(username=='输入验证码'){
                    $(this).val('');
                }
            });

            $("#yzm").focusout(function(){
                var username = $(this).val();
                if(username==''){
                    $(this).val('输入验证码');
                }
            });
        });
    </script>
</head>
<body>
<div class="header">
    <h1 class="headerLogo">
        <a title="后台管理系统" target="_blank" href="http://www.17sucai.com/">
            <img alt="logo" src="/travel/Public/Admin/Images/logo.gif">
        </a>
    </h1>
    <div class="headerNav">

    </div>
</div>
<div class="banner">

    <div class="login-aside">
        <div id="o-box-up"></div>
        <div id="o-box-down"  style="table-layout:fixed;">
            <div class="error-box"></div>

            <form class="registerform"action="" method="post">
                <div class="fm-item">
                    <label  class="form-label">用户登录：</label>
                    <input type="text"  placeholder="输入账号"
                           maxlength="100" class="i-text"
                           name="username">
                    <div class="ui-form-explain"></div>
                </div>

                <div class="fm-item">
                    <label  class="form-label">登录密码：</label>
                    <input type="password" value="" maxlength="100"
                           class="i-text" name="password"
                           nullmsg="请设置密码！" placeholder="输入密码">
                    <div class="ui-form-explain"></div>
                </div>

                <div class="fm-item pos-r">
                    <label  class="form-label">验证码</label>
                    <input type="text" value="输入验证码"
                           maxlength="100" id="yzm" class="i-text yzm"
                           nullmsg="请输入验证码！" name="code">
                    <div class="ui-form-explain">
                        <img src="<?php echo U('validate');?>" class="yzm-img"
                             id="image"/>
                    </div>
                </div>
                <div class="fm-item">
                    <label  class="form-label"></label>
                    <input type="submit" value="登录" tabindex="4"
                           id="send-btn" class="btn-login">
                    <div class="ui-form-explain"></div>
                </div>

            </form>

        </div>

    </div>

    <div class="bd">
        <ul>
            <li style="background:url(/travel/Public/Admin/theme/theme_1.jpg)
            #CCE1F3 center 0 repeat;">
                <a target="_blank"></a>
            </li>
            <li style="background:url(/travel/Public/Admin/theme/theme_2.jpg) #BCE0FF
            center 0 repeat;">
                <a target="_blank"></a>
            </li>
        </ul>
    </div>

    <div class="hd"><ul></ul></div>
</div>
<script type="text/javascript">
    jQuery(".banner")
        .slide({ titCell:".hd ul", mainCell:".bd ul",
            effect:"fold",  autoPlay:true, autoPage:true,
            trigger:"click" });
    var image = document.getElementById("image");
    image.onclick = function () {

        image.src = "/travel/index.php/Admin/Public/validate/t" + Math.random();
    };
</script>
<div class="banner-shadow"></div>
<div class="footer">
</div>
</body>
</html>