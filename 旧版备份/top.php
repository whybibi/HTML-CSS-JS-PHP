<?php
/**
 * Created by PhpStorm.
 * User: why
 * Date: 2017/10/22
 * Time: 上午 08:37
 */
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/top.css" rel="stylesheet" type="text/css"/>
<!--    <script src="js/size.js"></script>-->
</head>

<body>
<div id="divTop1">
    <div id="tops1"><p style="color: #ff1842"><img src="img/topImgs/location.png"/> 送货至：<a style="color: #7d7d7d;" href="#">山东</a></p></div>
    <div id="tops2">
        <p><span style="color: orange">你好，请 <a style="color: orange" href="login.php"> 登录</span></a>&nbsp; <a href="register.php">免费注册</a> | 客户服务 | 网站导航 | 关注我们
            <a href="#"><img src="img/topImgs/sh1.png"/></a>
            <a href="#"><img src="img/topImgs/sh2.png"/></a>
        </p>
    </div>
</div>
<div id="divTop">

    <div id="divLogo"><a href="index.php"><img src="img/topImgs/logo.png"></a></div>
    <div id="divSearch">
    	<form action="select.php" method="get">
            <input id="kuang" type="text" size="30" placeholder="   请输入关键字"/><input id="searchBtn" type="submit" value="搜索">
        	<p id="btnCar"><img src="img/topImgs/car.png"><input type="button" value="购物车"/></p>
        </form>
            
        <p style="font-size: 12px;padding-top: 7px;padding-left: 5px">咖啡   mate10   神舟笔记本</p>
    </div>
    </div>

</div>


</body>
</html>
