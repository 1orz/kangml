<?php
require_once 'conn.php';

$u = @$_GET['user'];
$p = @$_GET['pass'];
$res=db(_openvpn_)->where(array(_iuser_=>$u,_ipass_=>$p))->find();
if(!$res){
	header("location:login.php");
	exit;
}
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; minimum-scale=1.0; maximum-scale=2.0">
<title>iPhone用户线路下载</title>
<style type="text/css">
* { padding: 0; margin: 0; list-style: none; text-decoration: none; }
body{font:1pc/30px "Microsoft YaHei";line-height:0px;font-size:0px;}
.main,body{background:#f2f2f2;}
.main{margin:0 auto;max-width:45pc;line-height:30px;}
.logo {padding-top: 30px; background: #fff;}
.logo img {width: 100px; text-align: center; display: block;margin: 0 auto;}
.tip{margin-bottom:15px;padding:25px 10px;font-size:15px}
.tip,.tips{background:#fff;color:#777;text-align:center}
.tips{margin-top:15px;padding:15px 10px;font-size:14px}
.xianlu{padding:20px;background:#fff}
.xianlu h3{margin-bottom:15px;color:#333;text-align:center;font-size:18px}
.form-control{background: #ffffff;margin:0 auto;margin-bottom:25px;min-width:80%;display:block;width:80%;height:40px;padding:6px 9pt;font-size:14px;line-height:1.428571429;color:#555;vertical-align:middle;background-color:#fff;border:1px solid #ccc;border-radius:3px;box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;}
.btn-upapp{background:#007aff;color:#fff}
.btn-l{display:block;margin:0 auto;height:40px;min-width:80%;border:none;border-radius:3px;text-align:center;font-size:14px;line-height:36px}
.btn{cursor:pointer;-webkit-transition:all ease-in-out .4s;transition:all ease-in-out .4s;-ms-transition:all ease-in-out .4s}
</style>
<script src="//cdn.bootcss.com/jquery/2.0.0/jquery.min.js"></script>

</head>

<body>
	<div class="main">
	<div class="logo"><img src="./logo.png"></div>
		<div class="tip">此页面仅供ios用户安装免流线路使用</br>
			请使用iPhone自带的safari浏览器下载安装
		</div>
		<div class="xianlu">
		<form action="download.php?user=<?php echo $_GET["user"]?>&pass=<?php echo $_GET["pass"]?>" method="post">
			<h3>第一步：选择运营商</h3>
			<select id="yxs" name="cid" class="form-control" >
				<?php 
$result = db("line_grop")->select();
foreach($result as $row){
	echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
}
?>
				
			</select>
			<h3>第二步：选择线路</h3>
			<select id="dq" name="aid" class="form-control" >
			</select>
			<button class="btn btn-l btn-upapp" type="submit">安装线路</button>
		</div>
		<div class="tips">点击下载后请使用openvpn的方式打开即可导入线路</div>
	</div>
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