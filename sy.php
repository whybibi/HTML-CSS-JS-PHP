<?php
/**
 * Created by PhpStorm.
 * User: why
 * Date: 2017/11/13
 * Time: 下午 02:14
 */

$fastBuy = array("温碧泉透芯润精选九件套（又名温碧泉透芯润五件套装 新老包装随机发货） 补水保湿护肤套装","张裕（CHANGYU）进口红酒 爱欧公爵（ATRIO）德比梦干红葡萄酒750ml*6整箱装",
    "网易严选 网易智造 超薄聚合物 移动电源/充电宝 10000毫安 ","机械革命(MECHREVO)深海泰坦X6Ti-S(黑曜金)15.6英寸游戏笔记本 i7-7700HQ 8G 128GSSD+1T GTX1050 4G IPS",
    " 罗莱生活100%水洗白鸭绒冬被芯220*240cm（填充物重2.5斤）","【男士护肤套装】樱古矿物泥男士洗面奶男去黑头洁面乳 洗面奶+爽肤水+面霜","苏泊尔（SUPOR）电压力锅 智能触控 尚膳节能煲 球釜双胆 一键排压 SY-50YC8103Q  5L高压锅",
    "康夫（Kangfu）电吹风机家用 KF-8936 大功率2300W电吹风筒冷热风电吹风");
$fastBuyPrice = array(199,219,68,5999,1199,39,299,75);
$fastBuyOldPrice = array(397,300,129,6999,4598,129,499,109);
$saleOut = array(45,50,42,39,61,71,57,51);

$paihang = array("蓝月亮 深层洁净洗","心相印 抽纸","加厚五连卷垃圾袋","蓝月亮 洗衣液袋装","威露士（Walch）","立白 柑橘去油洗洁");

$importUl = array("进口饼干","进口坚果","进口水饮","进口食用油","进口调料","进口方便面");

$import_right_bgcolor = array("#ffe6ee","#fff3e4","#e9fbf0","#f9eee9","#f0f8ff","#e2f8f2");
$import_right_pcolor = array("#f06291","#ee9832","#54a472","#ad7d62","#468bcb","#54a472");
$import_right_pt = array("进口美护","进口母婴","进口生鲜","进口家居","厨卫清洁进口馆","进口保健品");
$import_right_pc = array("BEAUTY","MOM&BABY","FRESH","HOME","CLEANING","HEALTH");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>网上超市一号店，省钱省力省时间</title>
    <link href="css/index.css" rel="stylesheet" type="text/css" />
    <script src="js/index.js" type="text/javascript"></script>

</head>
<!--最小宽度1230px-->
<body>
<?php include("content/fixedTop.php") ?>
<?php include("content/fixedRight.php") ?>
<?php include("content/tops.php") ?>


<div class="index_head_div" id="index_head_div">
    <div class="index_head_top_div">
        <div class="index_head_top_divs">
            <div class="index_head_top_uldiv">
                <ul class="index_head_top_ul">
                    <li style="margin-top: 2px"><img src="img/indexImgs/nav1.png"/><a href="#">全球进口</a></li>
                    <li><img src="img/indexImgs/nav2.png"/><a href="#">食品</a> / <a href="#">酒</a> / <a href="#">生鲜</a></li>
                    <li><img src="img/indexImgs/nav3.png"/><a href="#">母婴</a> / <a href="#">玩具</a> / <a href="#">童装</a></li>
                    <li><img src="img/indexImgs/nav4.png"/><a href="#">纸巾</a> / <a href="#">厨卫清洁</a></li>
                    <li><img src="img/indexImgs/nav5.png"/><a href="#">家居</a> / <a href="#">家装</a> / <a href="#">家纺</a> / <a href="#">宠物</a></li>
                    <li><img src="img/indexImgs/nav6.png"/><a href="#">美妆个人清洁</a></li>
                    <li><img src="img/indexImgs/nav7.png"/><a href="#">女装</a> / <a href="#">男装</a> / <a href="#">内衣</a> / <a href="#">珠宝</a></li>
                    <li><img src="img/indexImgs/nav8.png"/><a href="#">鞋靴</a> / <a href="#">箱包</a> / <a href="#">运动户外</a></li>
                    <li><img src="img/indexImgs/nav9.png"/><a href="#">家用电器</a> / <a href="#">汽车用品</a></li>
                    <li><img src="img/indexImgs/nav10.png"/><a href="#">医疗</a> / <a href="#">保健滋补</a> / <a href="#">成人</a></li>
                    <li><img src="img/indexImgs/nav10.png"/><a href="#">图书</a></li>
                </ul>
            </div>
            <!--右边个人登录div-->
            <div class="index_head_persion_div">
                <!-- 用户登录顶部头像-->
                <div class="index_persion_headimg_div">
                    <a href="login.php"><img src="img/detailsImg/t9.jpg"/></a>
                </div>
                <!--中间部分-->
                <div class="index_persion_center_div">
                    <p>Hi~你好!</p>
                    <a href="login.php" class="persion_a1">登录</a>
                    <a href="register.php" class="persion_a2">注册</a>
                </div>
                <div class="index_persion_ul_div">
                    <a href="#" title="优选"><em style="color: red">【优选】</em><span>冬日火锅计划，燥起来！</span></a>
                    <a href="#" title="优选"><em>【优选】</em><span>全球购物之旅-美国站</span></a>
                    <a href="#" title="优选"><em>【优选】</em><span>提升厨房逼格的好货专辑</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="index_head_uldiv">
        <ul class="index_head_ul" id="index_head_ul">
            <li style="display: block;background-color: rgb(237, 32, 75); position: absolute; z-index: 0;width: 100%">
                <!--最小宽度1230px-->
                <div class="index_head_ul_inDiv">
                    <a href="#" title="美妆返场"><div class="index_head_ul_imgDiv">
                            <img src="img/indexImgs/tou1.jpg"/>
                        </div></a>
                    <a href="#" class="index_head_left"><p class="index_head_lrp"> < </p></a>
                    <a href="#" class="index_head_right"><p class="index_head_lrp"> > </p></a>
                </div>
            </li>
            <li style="display: none;background-color: #24e686; position: absolute; z-index: 0;width: 100%">
                <!--最小宽度1230px-->
                <div class="index_head_ul_inDiv">
                    <a href="#" title="生鲜"><div class="index_head_ul_imgDiv">
                            <img src="img/indexImgs/tou2.jpg"/>
                        </div></a>
                    <a href="#" class="index_head_left"><p class="index_head_lrp"> < </p></a>
                    <a href="#" class="index_head_right"><p class="index_head_lrp"> > </p></a>
                </div>
            </li>
            <li style="display: none;background-color: #4fa9ff; position: absolute; z-index: 0;width: 100%">
                <!--最小宽度1230px-->
                <div class="index_head_ul_inDiv">
                    <a href="#" title="厨卫清洁特惠"><div class="index_head_ul_imgDiv">
                            <img src="img/indexImgs/tou3.jpg"/>
                        </div></a>
                    <a href="#" class="index_head_left"><p class="index_head_lrp"> < </p></a>
                    <a href="#" class="index_head_right"><p class="index_head_lrp"> > </p></a>
                </div>
            </li>
            <li style="display: none;background-color: #00b4ff; position: absolute; z-index: 0;width: 100%">
                <!--最小宽度1230px-->
                <div class="index_head_ul_inDiv">
                    <a href="#" title="进口"><div class="index_head_ul_imgDiv">
                            <img src="img/indexImgs/tou4.jpg"/>
                        </div></a>
                    <a href="#" class="index_head_left"><p class="index_head_lrp"> < </p></a>
                    <a href="#" class="index_head_right"><p class="index_head_lrp"> > </p></a>
                </div>
            </li>
            <li style="display: none;background-color: #ef437b; position: absolute; z-index: 0;width: 100%">
                <!--最小宽度1230px-->
                <div class="index_head_ul_inDiv">
                    <a href="#" title="护肤达人"><div class="index_head_ul_imgDiv">
                            <img src="img/indexImgs/tou5.jpg"/>
                        </div></a>
                    <a href="#" class="index_head_left"><p class="index_head_lrp"> < </p></a>
                    <a href="#" class="index_head_right"><p class="index_head_lrp"> > </p></a>
                </div>
            </li>
            <li style="display: none;background-color: #651eac; position: absolute; z-index: 0;width: 100%">
                <!--最小宽度1230px-->
                <div class="index_head_ul_inDiv">
                    <a href="#" title="潮流服饰"><div class="index_head_ul_imgDiv">
                            <img src="img/indexImgs/tou6.jpg"/>
                        </div></a>
                    <a href="#" class="index_head_left"><p class="index_head_lrp"> < </p></a>
                    <a href="#" class="index_head_right"><p class="index_head_lrp"> > </p></a>
                </div>
            </li>
            <li style="display: none;background-color: #3432b9; position: absolute; z-index: 0;width: 100%">
                <!--最小宽度1230px-->
                <div class="index_head_ul_inDiv">
                    <a href="#" title="手机返场"><div class="index_head_ul_imgDiv">
                            <img src="img/indexImgs/tou7.jpg"/>
                        </div></a>
                    <a href="#" class="index_head_left"><p class="index_head_lrp"> < </p></a>
                    <a href="#" class="index_head_right"><p class="index_head_lrp"> > </p></a>
                </div>
            </li>
            <li style="display: none;background-color: #75009f; position: absolute; z-index: 0;width: 100%">
                <!--最小宽度1230px-->
                <div class="index_head_ul_inDiv">
                    <a href="#" title="美酒"><div class="index_head_ul_imgDiv">
                            <img src="img/indexImgs/tou8.jpg"/>
                        </div></a>
                    <a href="#" class="index_head_left"><p class="index_head_lrp"> < </p></a>
                    <a href="#" class="index_head_right"><p class="index_head_lrp"> > </p></a>
                </div>
            </li>
            <li style="display: none;background-color: #0267ff; position: absolute; z-index: 0;width: 100%">
                <!--最小宽度1230px-->
                <div class="index_head_ul_inDiv">
                    <a href="#" title="智能数码感恩会场"><div class="index_head_ul_imgDiv">
                            <img src="img/indexImgs/tou9.jpg"/>
                        </div></a>
                    <a href="#" class="index_head_left"><p class="index_head_lrp"> < </p></a>
                    <a href="#" class="index_head_right"><p class="index_head_lrp"> > </p></a>
                </div>
            </li>
        </ul>
    </div>
    <div  class="index_head_ollist_div">
        <ol class="index_head_ol" id="index_head_ol">
            <li style="background-color: #ff1842;"></li>
            <?php for($i=0;$i<8;$i++) { ?>
                <li></li>
            <?php } ?>
        </ol>
    </div>

</div>

<div class="index_body_div" id="index_body_div">
    <div class="index_main_div">
        <!--            秒杀DIV-->
        <div class="index_main_topDiv">
            <!--                左边秒杀时间-->
            <a href="#" class="index_main_topa">
                <p class="index_main_topa_p1">本场剩余</p>
                <div class="index_main_top_timediv">
                    <span class="indextop_timespan">00</span>
                    <i>:</i>
                    <span class="indextop_timespan">00</span>
                    <i>:</i>
                    <span class="indextop_timespan">00</span>
                </div>
                <p class="index_main_topa_p2">查看更多 ></p>
            </a>

            <!--                右边商品列表-->
            <div class="index_main_top_rightDiv">
                <a href="#" class="fast_left_a"> < </a><!--上一页-->
                <ul class="index_main_top_rightUl">
                    <?php for($i=0;$i<8;$i++) { ?>
                        <li>
                            <a href="#" title="<?php echo $fastBuy[$i] ?>">
                                <div class="index_main_top_rightUlli_div">
                                    <p class="rightUlliP1"><?php echo $fastBuy[$i] ?></p>
                                    <p class="rightUlliP2">¥<?php echo $fastBuyPrice[$i] ?></p>
                                    <p class="rightUlliP3">参考价：¥<?php echo $fastBuyOldPrice[$i] ?></p>
                                </div>
                                <img class="pro_pic" src="img/other/qianggou<?php echo $i+1 ?>.jpg"/>
                                <div class="marking_label">已售<?php echo $saleOut[$i] ?>%</div>
                            </a>
                            <div class="dotted_lineDiv"></div>
                        </li>
                    <?php } ?>
                </ul>
                <a href="#" class="fast_right_a"> > </a><!--下一页-->
            </div>
        </div>

        <!--一号闪购-->
        <div class="index_main_cenDiv">
            <div class="index_main_cenleftDiv">
                <a href="#">
                    <img style="width: 267px;height: 400px" src="img/index/flash<?php echo rand(1,4); ?>.jpg"/>
                    <div class="index_main_cenleft_inDiv">
                        <h4>1号闪购</h4>
                        <p class="index_main_cenleft_p1"></p>
                        <p class="index_main_cenleft_p2">每日10:00上新！</p>
                    </div>
                </a>
            </div>
            <div class="index_main_cenCenterDiv">
                <div class="index_main_cenCenterDiv_topD"> <img src="img/index/tuangou.png"/></div>
                <div class="index_main_cenCenter_in_Div">
                    <div class="index_main_cenCenter_in_left_Div">
                        <a href="#"><img style="width: 250px;height: 346px" src="img/index/groupPurchase<?php echo rand(1,3); ?>.jpg"/></a>
                    </div>
                    <div class="index_main_cenCenter_in_right_Div">
                        <div class="index_main_cenCenter_in_right_Div1">
                            <a href="#">
                                <p class="group_tit">量贩团</p>
                                <p class="sub_tit">维达买就赠</p>
                                <img class="sub_img" src="img/index/ip2.jpg"/>
                            </a>
                        </div>
                        <div class="index_main_cenCenter_in_right_Div2">
                            <a href="#">
                                <p class="group_tit">进口牛奶</p>
                                <p class="sub_tit">满99减20</p>
                                <img class="sub_img" src="img/index/ip3.jpg"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="index_main_cenRightDiv">
                <div class="index_main_cenCenterDiv_topD"> <img src="img/index/paihang.png"/></div>
                <div class="index_main_cenCenter_in_Div">
                    <div class="index_main_cenRight_topDiv">
                        <ul>
                            <li>清洁用品</li>
                            <li>粮油调味</li>
                            <li>饮料冲调</li>
                            <li>进口食品</li>
                            <li>休闲食品</li>
                        </ul>
                        <div class="cur_item" style="left: 22px;"></div>
                    </div>
                    <div class="index_main_cenRight_inDiv">
                        <ul>
                            <?php for($i = 4; $i<10; $i++) { ?>
                                <li>
                                    <img src="img/index/ip<?php echo $i ?>.jpg"/>
                                    <p><?php echo $paihang[$i-4] ?></p>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--一号闪购结束-->

        <!--爱上新-->
        <div class="index_main_cenDiv">
            <div class="index_main_cenleftDiv">
                <a href="#">
                    <img style="width: 267px;height: 400px" src="img/index/loveNew<?php echo rand(1,3); ?>.jpg"/>
                </a>
            </div>
            <div class="index_main_cenCenterDiv" style="border-top: 1px solid #dfa747;">
                <div class="index_main_cenCenterDiv_topD"> <img src="img/index/shuadapai.png"/></div>
                <div class="index_main_cenCenter_in_Div" style="overflow: hidden">
                    <div class="index_main_cenCenter_in_left_Div">
                        <a href="#"><img style="width: 250px;height: 346px" src="img/index/majorSuit<?php echo rand(1,3); ?>.jpg"/></a>
                    </div>
                    <div class="index_main_cenCenter_in_right_Div">
                        <div class="index_main_cenCenter_in_right_Div1" style="height: 100px">
                            <a href="#">
                                <p class="group_tit">华硕ASUS</p>
                                <p class="sub_tit">女神 值得好的</p>
                                <img class="sub_img" src="img/index/ip11.jpg"/>
                            </a>
                        </div>
                        <div class="index_main_cenCenter_in_right_Div2" style="height: 100px;border-bottom: 1px solid #f0f0f0">
                            <a href="#">
                                <p class="group_tit">味全</p>
                                <p class="sub_tit">酸奶 简单点</p>
                                <img class="sub_img" src="img/index/ip12.jpg"/>
                            </a>
                        </div>
                        <div class="index_main_cenCenter_in_right_Div2" style="height: 100px">
                            <a href="#">
                                <p class="group_tit">养生</p>
                                <p class="sub_tit">纯净水 选养生</p>
                                <img class="sub_img" src="img/index/ip13.jpg"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="index_main_cenRightDiv" style="border-top: 1px solid #f39156">
                <div class="index_main_cenCenterDiv_topD"> <img src="img/index/shenghuopai.png"/></div>
                <div class="liftStyle_in_Div">
                    <div class="liftStyle_in_top_Div">
                        <div class="liftStyle_in_top_leftDiv">
                            <a href="#">
                                <div class="lifeStyleP_div">
                                    <p class="lifeStyle_P_title">品质厨房</p>
                                    <p class="lifeStyle_P_content">美味囤货3件5折</p>
                                </div>
                                <img src="img/index/ip14.jpg"/>
                            </a>
                        </div>
                        <div class="liftStyle_in_top_rightDiv">
                            <div class="liftStyle_in_top_rightinDiv">
                                <a href="#">
                                    <div class="liftStyle_in_top_rightinPdiv">
                                        <p class="liftStyle_in_top_rightinP1">秋日小时光</p>
                                        <p class="liftStyle_in_top_rightinP2">暖心热饮DIY</p>
                                    </div>
                                    <img src="img/index/ip16.jpg"/>
                                </a>
                            </div>
                            <div class="liftStyle_in_top_rightinDiv" style="border: none">
                                <a href="#">
                                    <div class="liftStyle_in_top_rightinPdiv">
                                        <p class="liftStyle_in_top_rightinP1">吃货都爱的</p>
                                        <p class="liftStyle_in_top_rightinP2">百变色拉</p>
                                    </div>
                                    <img src="img/index/ip17.jpg"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="liftStyle_in_bottom_Div">
                        <div class="liftStyle_in_bottom_left_Div">
                            <a href="#" class="liftStyle_in_bottom_a">
                                <div class="liftStyle_in_bottom_p_div">
                                    <p>萌宝福利社</p>
                                    <p>GO></p>
                                </div>
                                <img src="img/index/ip15.jpg"/>
                            </a>
                        </div>
                        <div class="liftStyle_in_bottom_right_Div">
                            <a href="#" class="liftStyle_in_bottom_a">
                                <div class="liftStyle_in_bottom_p_div">
                                    <p style="color: #a2715b">美由内而外</p>
                                    <p style="color: #a2715b">GO></p>
                                </div>
                                <img src="img/index/ip18.jpg"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--爱上新结束-->
        <h3 style="margin-top: 30px"><a href="#" style="color: #7c3d21;margin-left: 10px">全球进口 ➤</a></h3>
        <!--全球进口-->
        <div class="import_main_div">
            <div class="import_left_div">
                <div class="import_left_photo_div">
                    <a class="import_left_photo_a" title="全球进口" href="#">
                        <img src="img/index/import1.jpg" />
                    </a>
                    <div class="import_left_ul_div">
                        <ul>
                            <?php for($i = 0; $i < 6; $i++) { ?>
                                <a href="#"><li><?php echo $importUl[$i]?></li></a>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="import_on">
                    <div class="import_on_left">
                        <a class="import_on_a" href="#">
                            <img src="img/index/import_on1.jpg"/>
                        </a>
                        <div id="import_on_div1" class="import_on_div">
                            <a href="#">
                                <p class="import_on_tit">进口粮油</p>
                                <p class="import_on_sub">3件5折</p>
                                <img src="img/index/import_on2.jpg"/>
                            </a>
                        </div>
                        <div id="import_on_div2" class="import_on_div">
                            <a href="#">
                                <p class="import_on_tit">饼干蛋糕</p>
                                <p class="import_on_sub">99元选10件</p>
                                <img src="img/index/import_on3.jpg"/>
                            </a>
                        </div>
                    </div>
                    <div class="import_on_right">
                        <div id="import_on_div3" class="import_on_div"
                             style="width: 203px;height: 220px;z-index: 10;float: left;position: relative;background-color: white; ">
                            <a href="#">
                                <p class="import_on_tit">休闲零食</p>
                                <p class="import_on_sub">休闲零食</p>
                                <img src="img/index/import_on4.jpg"/>
                            </a>
                        </div>
                        <div id="import_on_div4" class="import_on_div"
                             style="width: 203px;height: 220px;z-index: 10;float: left;position: relative;background-color: white; margin-top: 1px">
                            <a href="#">
                                <p class="import_on_tit">进口咖啡</p>
                                <p class="import_on_sub">滴滴香浓，醇享健康</p>
                                <img src="img/index/import_on5.jpg"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="import_right_div">
                <ul>
                    <?php for($i=0;$i<6;$i++){ ?>
                        <li style=" background-color: <?php echo $import_right_bgcolor[$i] ?>;">
                            <a href="#" class="import_right_a">
                                <div class="import_right_inDiv">
                                    <p class="import_right_p1" style="color: <?php echo $import_right_pcolor[$i] ?>;"><?php echo $import_right_pt[$i] ?></p>
                                    <p class="import_right_p2"><?php echo $import_right_pc[$i] ?></p>
                                    <p class="import_right_p3" style="background-color: <?php echo $import_right_pcolor[$i] ?>;"></p>
                                </div>
                                <img src="img/index/import_right<?php echo $i+1 ?>.png"/>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <!--全球进口结束-->
        <br/>
    </div>

</div>
<?php include("content/bottoms.php") ?>
</body>
</html>
