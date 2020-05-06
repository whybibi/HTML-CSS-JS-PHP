<?php
/**
 * Created by PhpStorm.
 * User: why
 * Date: 2017/11/26
 * Time: 下午 02:16
 */?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <script src="../js/topbtm.js" type="text/javascript"></script>
    <style>
        body{
            margin: 0;
            padding: ;
        }
        *{
            margin: 0;
            padding: 0;
        }
        #fix_top_div{
            width: 100%;
            height: 60px;
            background-color: white;
            position: fixed;
            top: 0;
            z-index: 150;
            display: none;
            overflow: hidden;
        }

        .fix_top_textInput{
            float: left;
            width: 630px;
            height: 35px;
            outline: none;
            font-size: 15px;
            padding-left: 13px;
            vertical-align:top;
            margin-top: 10px;
            margin-left: 100px;
            border: 2px solid #ff4040;
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }
        .fix_top_btnSearch{
            float: left;
            width: 50px;
            height: 39px;
            background-image: url("img/topImgs/search.png");
            background-repeat: no-repeat;
            background-position: center;
            margin-top: 10px;
            text-align: center;
            outline: none;
            padding: 0;
            background-color: #ff4040;
            border: none;
            cursor: pointer;
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }
        #fix_in_btm{
            width: 100%;
            height: 2px;
            position: absolute;
            bottom: 0;
            background: linear-gradient(to top, #f0f2f4, #eaecee);
            background: -webkit-linear-gradient(to top,#f0f2f4,#eaecee)
        }
    </style>
</head>

<body>
    <div id="fix_top_div">
            <a href="index.php" style="float: left"><img style="margin-left: 100px;margin-top: 5px" src="img/topImgs/loginlogoNew.jpg"/></a>
        <input class="fix_top_textInput" placeholder="请输入要搜索的商品" type="text"/>
        <a href="select.php"><button class="fix_top_btnSearch" type="button"></button></a>

        <div id="fix_in_btm"></div>
    </div>
    <script>
        var fix_top_div = document.getElementById("fix_top_div");
        window.onscroll = function(){
            var scrolltops = document.documentElement.scrollTop || document.body.scrollTop;
            if(scrolltops > 500){
                fix_top_div.style.display = "block";
            }
            if(scrolltops < 500){
                fix_top_div.style.display = "none";
            }
        }

    </script>
</body>
</html>