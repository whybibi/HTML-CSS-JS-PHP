
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>1号店登录</title>
		<link href="css/log.css" rel="stylesheet" type="text/css"/>
        <script>
            window.onload=function () {
                h();
            }
            window.onresize=function () {
                h();
            }
            function h() {
                var logMainDiv = document.getElementById("logMainDiv");
                var cwidth = document.documentElement.clientWidth || document.body.clientWidth;
                var cheight = document.documentElement.clientHeight || document.body.clientHeight;
                logMainDiv.style.height = cheight -81 + "px";
            }
        </script>
	</head>

	<body>
		<?php include ("content/logRegTop.php");?>
	<div id="logMainDiv" style="width: 100%;height: 100%;overflow: hidden;background-color: #fcfcfc;">
       <div style="width: 100%;height: 3px;background: linear-gradient(to top,#fcfcfc,#ebedef);background: -webkit-linear-gradient(to top,#fcfcfc,#ebedef)"></div>
        <div id="loginDivCentet">
		<img id="loginImg1" src="img/logRegImgs/logGuanggao.png"/>
		<div id="loginDiv">
            <div id="logDivIn">
			<div id="loginTopDiv">
				<p id="loginP1">一号店用户登录</p>
				<p id="loginP2"><a href="register.php">注册账号</a></p>
			</div>
		
			<div id="loginInputDiv1">
				<img style="padding-left: 10px;" src="img/logRegImgs/userHead.png" />
				<input type="text" placeholder="邮箱/手机/用户名" />
			</div>
			<div id="loginInputDiv2">
				<img style="padding-left: 10px;" src="img/logRegImgs/lock.png" />
				<input type="password" placeholder="密码" />
			</div>
			
			<div id="loginInputDiv3"><p style="float: left;width: 150px;line-height: 30px;font-size: 12px;"><input type="checkbox" />自动登录</p><p style="float: right;line-height: 30px;font-size: 12px;"><a href="#">忘记密码？</a></p></div>
			<div id="loginInputDiv4">
				<input type="button" value="登录" />
			</div>
			<div id="loginInputDiv5">
				<p>更多合作网站登录</p>
				<p><img src="img/logRegImgs/l_4.png"/><img src="img/logRegImgs/l_2.png"/><img src="img/logRegImgs/l_3.png"/><img src="img/logRegImgs/b_sh_2.png"/></p>
			</div>

            </div>
		</div>
	</div>
        <br/>
	<?php include ("content/logRegBottom.php");?>
    </div>
	</body>
	
</html>