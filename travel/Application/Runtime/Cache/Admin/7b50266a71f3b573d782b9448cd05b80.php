<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台登录</title>
    <meta name="author" content="DeathGhost" />
    <link rel="stylesheet" type="text/css" href="/travel/Public/Admin/Css/style.css" />
    <style>
        body{height:100%;background:#16a085;overflow:hidden;}
        canvas{z-index:-1;position:absolute;}
    </style>
    <script src="/travel/Public/Admin/Js/jquery.js"></script>
    <script src="/travel/Public/Admin/Js/verificationNumbers.js"></script>
    <script src="/travel/Public/Admin/Js/Particleground.js"></script>
    <script>
        $(document).ready(function() {
            //粒子背景特效
            $('body').particleground({
                dotColor: '#5cbdaa',
                lineColor: '#5cbdaa'
            });
            //验证码
            createCode();
            //测试提交，对接程序删除即可
        });
    </script>
</head>
<body>
<form method="post">
    <dl class="admin_login">
        <dt>
            <strong>旅游后台管理系统</strong>
            <em>Management System</em>
        </dt>
        <dd class="user_icon">
            <input type="text" placeholder="账号" class="login_txtbx" name="username"/>
        </dd>
        <dd class="pwd_icon">
            <input type="password" placeholder="密码" class="login_txtbx" name="password"/>
        </dd>
        <dd class="val_icon">
            <div class="checkcode">
                <input type="text" id="J_codetext" placeholder="验证码" maxlength="4"
                       class="login_txtbx" name="code">
                <img src="<?php echo U('validate');?>" class="yzm-img"
                     id="image"/>
            </div>
        </dd>
        <dd>
            <input type="submit" value="立即登录" class="submit_btn"/>
        </dd>
    </dl>
</form>
</body>
<script type="text/javascript">
    var image = document.getElementById("image");
    image.onclick = function () {

        image.src = "/travel/index.php/Admin/Public/validate/t" + Math.random();
    };
</script>
</html>