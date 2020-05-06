<?php
	$price1 = array(888,198,368,188,998,1899,2988,3999,6888,2333,666,789,1030,250,150,670,188,360,600,988,7500,320);
	$title1 = array("周大福（CHOW TAI FOOK）优雅 珍珠项链 T70425 560 40cm","黛米珠宝 浓情 淡水珍珠项链 送妈妈 8-9mm45cm","凯亚斯GAIA’SPEARL 925银淡水珍珠吊坠简约珍珠项链女 微瑕",
	"京润珍珠致爱S925银镶白色淡水珍珠项链10-11mm长款80cm","京润珍珠牵绊2-5mm淡水珍珠吊坠项链S925银镶圆形白色40cm","凯亚斯GAIA’SPEARL珍珠项链椭圆强光温婉紫色淡水珍珠珠链S925扣7-8mm43cm",
	"凯亚斯GAIA'SPEARL18K金AKOYA海水珍珠项链黄金满天星九颗项链女带加长链可调节长度","凯亚斯GAIA’SPEARL珍珠项链强光淡水馒头珠珍珠珠链10-11mm47cm","凯亚斯GAIA’SPEARL珍珠吊坠925银强光淡水珍珠项链简约女",
	"卡雷尼奥.杜兰（Carrenoduran）珍珠项链强光淡水近圆珍珠项链珠链9-10mm47cm","凯亚斯GAIA’SPEARL10-11MM淡水珍珠项链女正圆强光微暇送妈妈礼物45CM XL03011","凯亚斯GAIA’SPEARL珍珠项链强光淡水圆珍珠珠链吊坠9.5-10.5mm47cm",
	"京润珍珠静心7-8mm淡水珍珠项链40cm配红玛瑙","凯亚斯GAIA’SPEARL珍珠吊坠925银强光淡水珍珠项链胜利女神女","凯亚斯GAIA’SPEARL珍珠项链强光淡水圆珍珠珠链吊坠7.5-8.5mm43cm","银生（YESON）吸扣毛衣链 3-7mm 淡水珍珠项链 白色 圆珠 合金 一款两戴式毛衣链 白色 均码",
	"海蒂（haidi）圆珠满天星淡水珍珠项链","黛米（daimi） 姗阑 近圆强光淡水珍珠满天星毛衣链 白色 7-8mm160","黛米珠宝 轻奢 满天星项链强光淡水珍珠 18K金链 5-5.5mm 40cm","卡雷尼奥.杜兰（Carrenoduran） 淡水珍珠项链近正圆强光微暇女送妈妈9-10mm43cm XL06125",
	"京润珍珠世界大鱼海棠系列6-7mm圆形925银镶淡水珍珠吊珠项链珠宝吊链45cm银色款");
	$dianpu = array("周大福自营官方旗舰店","黛米自营官方旗舰店","凯亚斯自营官方旗舰店","京润自营官方旗舰店","京润自营官方旗舰店","凯亚斯自营官方旗舰店","凯亚斯自营官方旗舰店","凯亚斯自营官方旗舰店",
	"卡雷尼奥.杜兰自营官方旗舰店","凯亚斯自营官方旗舰店","凯亚斯自营官方旗舰店","京润自营官方旗舰店","黛米自营官方旗舰店","黛米自营官方旗舰店","卡雷尼奥.杜兰自营官方旗舰店","京润自营官方旗舰店","自营官方旗舰店","自营官方旗舰店",
	"自营官方旗舰店","自营官方旗舰店");
	$select = array("施华洛世奇(Swarovski)","海盗船(CORSAIR)","Julie","卡地亚(Cartier)","宝格丽(Bvlgari)","宝格丽(Bvlgari)","蒂凡尼(Tiffany)",
	"蒙奇奇(Monchhichi)","梵克雅宝(Vancleef)","爱马仕(Hermes)","迪奥(Dior)","0~100","100~199","199~299","299~499","499~899","899~1000",
	"1000~2000","2000以上","混彩","黑色系","紫色系","粉色系","白色系","金色系","天然海水珍珠","养殖海水珍珠","天然淡水珍珠","养殖淡水珍珠");
	?>
	
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link href="css/select.css" rel="stylesheet" type="text/css" />
		<script src="js/size.js"></script>
	</head>
	<body>
        <?php include("content/fixedTop.php") ?>
        <?php include("content/fixedRight.php") ?>
		<?php include("content/tops.php");?>
    	<?php include ("content/top2.php")?>
    	
    		<div id="selectTop">
    			<p>全部 > 珠宝饰品 > 珍珠项链 > </p>
    			<div id="selectTopPinPai">品牌：<i>珠韵首饰</i></div>
    			</div>
    		<div id="selectInfoDiv">
    			<div id="selectInfoDiv1">
    				<p>品牌 &nbsp;&nbsp;</p>
    				<ul>
    					<?php for($i=0;$i<11;$i++){ ?>
    						<li><?php echo $select[$i] ?></li>
    						<?php } ?>
    				</ul>
    			</div>
    			<div id="selectInfoDiv2">
    				<p>价格&nbsp;&nbsp;</p>
    				<ul>
    					<?php for($i=11;$i<19;$i++){ ?>
    						<li><?php echo $select[$i] ?></li>
    					<?php } ?>
    				</ul>
    			</div>
    			<div id="selectInfoDiv3">
    				<p>珍珠颜色&nbsp;&nbsp;</p>
    				<ul>
    					<?php for($i=19;$i<25;$i++){ ?>
    						<li><?php echo $select[$i] ?></li>
    					<?php } ?>
    				</ul>
    			</div>
    			<div id="selectInfoDiv4">
    				<p>珍珠分类&nbsp;&nbsp;</p>
    				<ul>
    					<?php for($i=25;$i<29;$i++){ ?>
    						<li><?php echo $select[$i] ?></li>
    					<?php } ?>
    				</ul>
    			</div>
    		</div>
    		
    		<div id="selectCenterDiv">
    			<div id="selectLeftDiv">
    				<div id="selectLeftTopDiv">
    					<p id="selectLeftP1">▋ 浏览历史</p>
    					<a href="#"><p id="selectLeftP2">清空</p></a>
    				</div>
    				<ul>
    					<?php for($i=0;$i<6;$i++) {?>
    						<a href="#"><li class="selectli1">
    						<img src="img/other/select<?php echo $i+1?>.jpg" title="<?php echo $title1[$i]?>"/>
    						<p class="selectli1P2" title="<?php echo $title1[$i]?>"><?php echo $title1[$i]?></p>
    						<p class="selectli1P1">￥<?php echo $price1[$i]?>.00</p>
    						<button>查看详情</button>
    						</li></a>
    						<?php } ?>
    				</ul>
    			</div>
    			
				<div id="selectRightDiv">
					<div id="selectRightTopDiv">
						<ul>
							<li style="background-color: #f27e56;color: white;">默认</li>
							<li>销量 ⇧⇩</li>
							<li>价格 ⇧⇩</li>
							<li>新品</li>
						</ul>
						<p>共发现120件</p>
					</div>
				</div>
				<ul id="selectRightUl">
					<?php for($i=7;$i<27;$i++) {?>
						<a href="details.php"><li class="selectRightli">
						<img  class="selectRightliImg1" src="img/other/select<?php echo $i?>.jpg"/>
						<p class="selectRightliP1">￥<?php echo $price1[$i-7]?>.00</p>
						<p class="selectRightliP2" title="<?php echo $title1[$i-7]?>"><?php echo $title1[$i-7]?></p>
						<p class="selectRightliP3"><img style="vertical-align: middle;" src="img/other/cu.png"/>满329减20</p>
						<input id="selectText" type="text" value="1"/>
						<div id="selectTextUpDowDiv">
							<input class="selectTextInput" type="button" value="▲"/>
							<input class="selectTextInput" type="button" value="▼"/>
						</div>
						<input class="selectRightBtn" type="button" value="加入购物车"/><br /><br />
						<p style="font-size: 12px;text-align: left;text-indent: 1em;margin-bottom: 5px;"><span style="color: #e60012;">👍90%</span> 👇89</p>
						<p class="selectRightliP4"><?php echo $dianpu[$i-7]?></p>
						</li>
                        </a>
					<?php }?>	
				</ul>
				<ul id="nextUl">
					<li style="width: 60px;">上一页</li>
					<li style="background-color: #f27e56;color: white;">1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>...</li>
					<li>20</li>
					<li style="width: 60px;">下一页</li>
				</ul>
    		</div>
    		
    		
    	<?php include ("content/bottoms.php"); ?>
	</body>
</html>