<?php
$class4_top_ul = array("新鲜水果","品质牛肉","低温乳品","大闸蟹","冷冻速食");

$class4_left_ul_tit = array("热辣火锅","火锅季","智利车厘子");
$class4_left_ul_con = array("199-60 299-130","领券满199减60","领券199-60");

$class4_right_ul_tit = array("时蔬香鲜","智利车厘子","火锅节","进口牛肉");
$class4_right_ul_con = array("爆款直降","领券199减60","199减60","满299减30");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<link href="indexs-css/class4.css" rel="stylesheet" type="text/css"/>
<body>
    <div class="class4_main">
        <div class="class4_top">
            <h3 style="line-height: 49px;float: left;width: 150px;margin-left: 20px">1号生鲜 ></h3>
            <ul class="class4_top_ul">
                <?php for($i = 0;$i<5;$i++){  ?>
                <li>
                    <a href="#" style="color: white;margin-right: 10px"><?php echo $class4_top_ul[$i] ?></a>|
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="class4_left" id="class4_left">
            <div class="class4_left_index">
              <ul id="class4_left_index_ul">
                  <li style="background-color: #0bcd96"></li>
                  <li></li>
                  <li></li>
              </ul>
            </div>
            <ul id="class4_left_ul">
                <?php for($i=0;$i<3;$i++){ ?>
                <li id="class4_left_li" style="display: none">
                    <a href="#">
                    <div class="class4_left_in">
                        <p class="class4_left_in_p1"><?php echo $class4_left_ul_tit[$i] ?></p>
                        <P class="class4_left_in_p2"><?php echo $class4_left_ul_con[$i] ?></P>
                    </div>
                    <img class="class4_left_img" src="img/index/class4-<?php echo $i+1 ?>.jpg" />
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="class4_right">
            <ul>
                <?php for($i=0;$i<4;$i++){ ?>
                    <a href="#"><li>
                    <p class="class4_right_p1" style="margin-top: 20px"><?php echo $class4_right_ul_tit[$i] ?></p>
                    <p class="class4_right_p2"><?php echo $class4_right_ul_con[$i] ?></p>
                    <img src="img/index/class4-<?php echo $i+4 ?>.jpg"/>
                </li></a>
                <?php } ?>
            </ul>
        </div>
    </div>
</body>
<script>
    var class4_left_index_ul = document.getElementById("class4_left_index_ul");
    var class4_left_ul = document.getElementById("class4_left_ul");
    var class4_left = document.getElementById("class4_left");
    var childs = class4_left_ul.children;
    var indexs = class4_left_index_ul.children;
    childs[0].style.display = "block";

    var class4Time = null;
    var class4 = 0;
    startClass4();
    function startClass4(){
        clearInterval(class4Time);
        class4Time = setInterval(function () {
            if(class4>2){
                class4 = 0;
            }
            for(var q = 0; q < childs.length; q++){
                childs[q].style.display = "none";
                indexs[q].style.backgroundColor = "#c3c3c3";
            }
            childs[class4].style.display = "block";
            indexs[class4].style.backgroundColor = "#0bcd96";
            class4++;
        },3000);
    }


    class4_left_index_ul.onmouseover = function (e) {
        var targets = e.target;
        for(var i = 0;i < indexs.length;i++){
            if(targets == indexs[i]){
                for(var s = 0; s < childs.length; s++){
                    childs[s].style.display = "none";
                    indexs[s].style.backgroundColor = "#c3c3c3";
                }
                childs[i].style.display = "block";
                indexs[i].style.backgroundColor = "#0bcd96";
                class4 = i;
                return;
            }
        }
    }


    class4_left.onmouseover = function () {
        clearInterval(class4Time);
    }
    class4_left.onmouseout = function () {
        startClass4();
    }
    
</script>
</html>