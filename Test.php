<?php
	$detaArr1 = array("珠宝首饰","珍珠","珍珠项链","欧诗漫（OSM）","欧诗漫（OSM） 欧诗漫【恩心】扁圆强光亮泽白色淡水珍珠项链锁骨S925银扣送妈妈婆礼物 6-7mm 40cm升级延长链 S925银鱼钩扣");
	$detaArr2 = array("赠品","限制","满赠");
	$detaArr3 = array("赠品随商品附送，赠完即止，请在购物车查看","此价格不与套装优惠同时享受","满299元即赠热销商品，赠完即止，满599元即赠热销商品，赠完即止。");
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
	</head>
    <style>
        *{margin: 0; padding: 0;}
        .text-center{text-align:center}
        .col_cont{width:300px;height:300px;margin:auto}
        .thumbnail{cursor:pointer;text-decoration:none;display:block;padding:4px;height:200px;font-weight:bold;">#fff;border:1px solid #ddd; }
        .thumbnail img, .thumbnail h3{transition:all .5s;-webkit-transition:all .5s;-ms-transition:all .5s;}
        .thumbnail img{width:35%;margin-top:30px}
        .thumbnail h3{color:silver}
        .thumbnail:hover img{-webkit-transform:translateY(-20px);-moz-transform:translateY(-20px);-ms-transform:translateY(-20px);
            -o-transform:translateY(-20px);transform:translateY(-20px)}
        .thumbnail:hover h3{color:#2c3e50}
    </style>
	<body>
		<?php for($i=0;$i<3;$i++) { ?>
    							<div class="detail_center_midleRight_div">
    							<div class="detail_midle_div"><div class="detailDivin"><?php echo $detaArr3[$i] ?></div><p title="<?php echo $detaArr2[$i] ?>"><?php echo $detaArr2[$i] ?></p></div>
    							</div>
    						<?php } ?>

        <div class="col_cont">
            <a class="thumbnail text-center">
                <img src="images/service-1.png" alt="...">
                <div class="caption">
                    <h3>产品介绍产品介绍</h3>
                </div>
            </a>
        </div>
        随机数测试<br/>
        <?php for($s = 0;$s < 100; $s++) { ?>
        <?php
            $x = rand(1,3);
            if($x<3||$x>1){
                echo "数值正常：";
            }
            echo $x  ?> <br/>
       <?php }
        ?>


	</body>
</html>