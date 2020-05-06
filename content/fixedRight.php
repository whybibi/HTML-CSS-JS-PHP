<?php
/**
 * Created by PhpStorm.
 * User: why
 * Date: 2017/11/26
 * Time: 下午 03:23
 */?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        #right_user_div{
            width: 35px;
            height: 100%;
            position: fixed;
            right: 0;
            top: 0;
            background-color: #303030;
            z-index: 200;
            text-align: center;
        }
        #right_user_div a{
            color: white;
        }
        /*#right_user_div img{*/
            /*width: 28px;*/
            /*height: 22px;*/
        /*}*/
        #user_main{
            width: 35px;
            height: 30px;
            text-align: center;
            margin-top: 200px;
        }
        #user_buyCar{
            width: 35px;
            height: 130px;
            font-size: 16px;
            margin-top: 5px;
            background-color: #4c4c4c;
        }
        #user_buyCar:hover{
            background-color: #f27d76;
            cursor: pointer;
        }
        #user_buyCar p{
            width: 25px;
            font-size: 13px;
            color: white;
            text-align: center;
            margin-left: 5px;
            margin-top: 10px;
        }
        #user_coupon{
            width: 35px;
            height: 30px;
            font-size: 11px;
            margin-top: 5px;
        }
        #user_qr_code{
            width: 35px;
            height: 35px;
            position: absolute;
            bottom: 35px;
        }
        #user_to_top{
            width: 35px;
            height: 35px;
            position: absolute;
            bottom: 0;
        }
        .fixRD:hover{
            background-color: #f27d76;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div id="right_user_div">
    <div id="user_main" class="fixRD"><a href="#" id="user_a"><img style="margin-top: 3px" src="img/index/user_24px.png"/></a></div>
    <div id="user_buyCar" class="fixRD"><a href="#" id="user_buyCar"><img style="margin-top: 20px;width:25px;height:22px;margin-left: -5px" src="img/index/shopping_cart_24px.png"/><p>购物车</p></a></div>
    <div id="user_coupon" class="fixRD"><a href="#" id="user_coupon"><img style="margin-top: 7px" src="img/index/ticket_16px.png"/></a></div>

    <div id="user_qr_code" class="fixRD"><a href="#"><img style="margin-top: 6px" src="img/index/qr_code_24px.png"/></a></div>
    <div id="user_to_top" class="fixRD"><a href="#"><img style="margin-top: 7px" src="img/index/vertal_align_top_24px.png"/></a></div>
</div>
</body>
</html>
