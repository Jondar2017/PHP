<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="/travel/Public/Admin/Css/simditor.css" />
    <link rel="stylesheet" type="text/css" href="/travel/Public/Admin/Css/manageFood.css"/>
    <script type="text/javascript" src="/travel/Public/Admin/Js/jquery.min.js"></script>
    <script type="text/javascript" src="/travel/Public/Admin/Js/module.js"></script>
    <script type="text/javascript" src="/travel/Public/Admin/Js/hotkeys.js"></script>
    <script type="text/javascript" src="/travel/Public/Admin/Js/uploader.js"></script>
    <script type="text/javascript" src="/travel/Public/Admin/Js/simditor.js"></script>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <p>
            <label>美食名称</label>
            <input type="text" name="food_name"/>
        </p>
        <p>
            <label>所属城市</label>
            <select name="city_name">
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
        </p>
        <p>
            <label>上传图片</label>
            <input type="file" name="file"/>
        </p>
        <p class="doc">
            美食描述
            <textarea id="editor" placeholder="美食描述"
                      autofocus name="food_decs">

            </textarea>
        </p>
        <p>
            <input type="submit" value="提交" class="submit"/>
        </p>
    </form>
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