<?php
require("conn.php");
if(@$_POST["act"] == "login"){
	$username = trim($_POST["username"]);
	$password = trim($_POST["password"]);
	if(db(_openvpn_)->where(array(_iuser_=>$username,_ipass_=>$password))->find()){
		die(json_encode(array("status"=>"success")));
	}else{
		die(json_encode(array("status"=>"error")));
	}
}
?>
<html>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>登录(Login)</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
            <h1>登录(Login)</h1>
            
                <input type="text" name="username" class="username" placeholder="请输入您的用户名！">
                <input type="password" name="password" class="password" placeholder="请输入您的用户密码！">
                <!--<input type="Captcha" class="Captcha" name="Captcha" placeholder="请输入验证码！">-->
                <button type="submit" class="submit_button">登录</button>
                <div class="error"><span>+</span></div>
           
            
        </div>
		
        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js" ></script>
        <script src="assets/js/supersized.3.2.7.min.js" ></script>
        <script src="assets/js/supersized-init.js" ></script>
        <script src="assets/js/scripts.js" ></script>
		<script>
		$(function(){
			
			$(".submit_button").click(function(){
				var username = $(".username").val();
				var password = $(".password").val();
				if(username == "" || password == ""){
					alert("用户密码不得为空");
				}else{
					$.post("login.php",{
							"act":"login",
							"username":username,
							"password":password
						},function(data){
							if(data.status=="success"){
								window.location.href="index.php?user="+username+"&pass="+password;
							}else{
								alert("登录失败");
							}
						},"JSON");
				}
			});
		});
		</script>
			<script type="text/javascript">
$(function(){
		
	
	
	var browser={
    versions:function(){
    var u = navigator.userAgent, app = navigator.appVersion;
    return {//移动终端浏览器版本信息
      trident: u.indexOf('Trident') > -1, //IE内核
      presto: u.indexOf('Presto') > -1, //opera内核
      webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
      gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
      mobile: !!u.match(/AppleWebKit.*Mobile.*/)||!!u.match(/AppleWebKit/), //是否为移动终端
      ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
      android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
      iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
      iPad: u.indexOf('iPad') > -1, //是否iPad
      webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
    };
   }(),
   language:(navigator.browserLanguage || navigator.language).toLowerCase()
}
if(browser.versions.iPhone||browser.versions.iPad){
	$("#yxs").change(function(){
		$.ajax({
			url:"xl.php",
			data:{cid:$("#yxs").val()},
			type:"post",
			success:function(data){
				$("#dq").empty();
				$("#dq").html(data);
			}
		});
	});
	$("#yxs").trigger("change");
}
else
{
	/*$("#yxs").change(function(){
		$.ajax({
			url:"xl.php",
			data:{cid:$("#yxs").val()},
			type:"post",
			success:function(data){
				$("#dq").empty();
				$("#dq").html(data);
			}
		});
	});
	$("#yxs").trigger("change");*/
	document.write("请使用safari浏览器访问")
}
}
);
</script>
    </body>
</html>

