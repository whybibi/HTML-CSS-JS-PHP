<?php
$class4_top_ul1 = array("牛奶乳品","酒水","茗茶","咖啡/奶茶","饮用水","饮料饮品");


$class4_left_ul_tit1 = array("不负时光不负你","冲饮好物","酒水分会场");
$class4_left_ul_con1 = array("满199减100","低至5折起","满199减100");

$class4_right_ul_tit1 = array("水饮冲调","自营啤酒会场","牛奶中心","瞎编的");
$class4_right_ul_con1 = array("低至1元秒","满199减100","满99减20","啦啦啦");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<link href="indexs-css/class4-1.css" rel="stylesheet" type="text/css"/>
<body>
    <div class="class4_main1">
        <div class="class4_top1"">
            <h3 style="line-height: 49px;float: left;width: 150px;margin-left: 20px">酒水饮料 ></h3>
            <ul class="class4_top_ul1">
                <?php for($i = 0;$i<6;$i++){  ?>
                <li>
                    <a href="#" style="color: white;margin-right: 10px;"><?php echo $class4_top_ul1[$i] ?></a>|
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="class4_left1" id="class4_left1">
            <div class="class4_left_index1">
              <ul id="class4_left_index_ul1">
                  <li style="background-color: #96374e"></li>
                  <li></li>
                  <li></li>
              </ul>
            </div>
            <ul id="class4_left_ul1">
                <?php for($i=0;$i<3;$i++){ ?>
                <li id="class4_left_li1" style="display: none">
                    <a href="#">
                    <div class="class4_left_in1">
                        <p class="class4_left_in_p11"><?php echo $class4_left_ul_tit1[$i] ?></p>
                        <P class="class4_left_in_p21"><?php echo $class4_left_ul_con1[$i] ?></P>
                    </div>
                    <img class="class4_left_img1" src="img/index/class4-1-<?php echo $i+1 ?>.jpg" />
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="class4_right1">
            <ul>
                <?php for($i=0;$i<4;$i++){ ?>
                    <a href="#"><li>
                    <p class="class4_right_p11" style="margin-top: 20px"><?php echo $class4_right_ul_tit1[$i] ?></p>
                    <p class="class4_right_p21"><?php echo $class4_right_ul_con1[$i] ?></p>
                    <img src="img/index/class4-1-<?php echo $i+4 ?>.jpg"/>
                </li></a>
                <?php } ?>
            </ul>
        </div>
    </div>
</body>
<script>
    var class4_left_index_ul1 = document.getElementById("class4_left_index_ul1");
    var class4_left_ul1 = document.getElementById("class4_left_ul1");
    var class4_left1 = document.getElementById("class4_left1");
    var childs1 = class4_left_ul1.children;
    var indexs1 = class4_left_index_ul1.children;
    childs1[0].style.display = "block";

    var class4Time1 = null;
    var class41 = 0;
    setTimeout(startClass41,1500);
    function startClass41(){
        clearInterval(class4Time1);
        class4Time1 = setInterval(function () {
            if(class41>2){
                class41 = 0;
            }
            for(var q = 0; q < childs1.length; q++){
                childs1[q].style.display = "none";
                indexs1[q].style.backgroundColor = "#c3c3c3";
            }
            childs1[class41].style.display = "block";
            indexs1[class41].style.backgroundColor = "#96374e";
            class41++;
        },3000);
    }
    

    class4_left_index_ul1.onmouseover = function (e) {
        var targets1 = e.target;
        for(var i = 0;i < indexs1.length;i++){
            if(targets1 == indexs1[i]){
                for(var s = 0; s < childs1.length; s++){
                    childs1[s].style.display = "none";
                    indexs1[s].style.backgroundColor = "#c3c3c3";
                }
                childs1[i].style.display = "block";
                indexs1[i].style.backgroundColor = "#96374e";
                class41 = i;
                return;
            }
        }
    }


    class4_left1.onmouseover = function () {
        clearInterval(class4Time1);
    }
    class4_left1.onmouseout = function () {
        startClass41();
    }
    
</script>
</html>