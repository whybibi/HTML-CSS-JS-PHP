
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>注册1号店</title>
		<link href="css/register.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<?php include ("content/logRegTop.php");?>
		<div style="width: 100%;height: auto;overflow: hidden;border-bottom: 1px solid #f7ecea;background-image: url(img/registBg.jpg);">
			<div id="registerDiv">
				<h2>1号店注册</h2>
				<input type="text" class="registerInput" placeholder="用户名"/>
				<input type="text" class="registerInput" placeholder="手机号"/>
				<input type="text" id="yzm" placeholder="短信验证码"/>
				<input type="button" id="yzmBtn" value="获取验证码"/>
				<input type="text" class="registerInput" placeholder="设置密码"/>
				<input type="text" class="registerInput" placeholder="确认密码"/>
				<p id="registerP1">点击注册，表示您同意1号店 <a href="http://cms.yhd.com/cms/view.do?topicId=10">《服务协议及隐私声明》</a></p>
				<input type="button" id="registerBtn"value="同意协议并注册"/>
			</div>
			<br />
			<br />
         </div>
		<?php include ("content/logRegBottom.php");?>
	</body>
</html>