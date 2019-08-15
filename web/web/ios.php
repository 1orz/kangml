<?php
/**
 * IOS系统
**/
$mod='blank';
include("../api.inc.php");
$title='IOS系统';
?>
<?php include 'head.php';?>
<body id="ios">
	
	<?php include 'nav2.php';?>

	<div id="fh5co-press" data-section="press">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="single-animate animate-press-1">IOS系统安装流程</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext single-animate animate-press-2">
							<h3>苹果手机仅需4步即可完成软件安装</h3>
							<p><a href="#" class="btn btn-primary btn-sm" target="_blank">已经安装了，请联系代理商获取配置文件！</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row set">
				<div class="col-md-6 text">
					<div class="to-animate">
						<div class="fh5co-press-text">
							<h3 class="h2 fh5co-press-title"><i class="id">1</i>进入“手机设置”</h3>
							<p>
								帐号：<?php echo $appleid1 ?><br>
								密码：<?php echo $appleps1 ?><br><br>
								帐号：<?php echo $appleid2 ?><br>
								密码：<?php echo $appleps2 ?><br><br>
								帐号：<?php echo $appleid3 ?><br>
								密码：<?php echo $appleps3 ?><br><br>
							</p>

							<p><b>* 该ID仅提供登陆App Store商店下载应用，请下载完成后退出此ID！</b></p>
							<p><a href="#" class="btn btn-primary btn-sm hide">Learn more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="to-animate">
						<img src="images/ios_03.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-pricing">
		<div class="container">
			<div class="row set">
				<div class="col-md-6 text">
					<div class="to-animate">
						<div class="fh5co-press-text">
							<h3 class="h2 fh5co-press-title"><i class="id">2</i>下载“OpenVPN”</h3>
							<p>如出现无法搜索空白页面，请稍作等待；<br>
							该软件无法下载或者遇到问题，请联系代理商；</p>
							<p><a href="#" class="btn btn-primary btn-sm hide">Learn more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="to-animate">
						<img src="images/ios_07.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-our-services">
		<div class="container">
			<div class="row set">
				<div class="col-md-6 text">
					<div class="to-animate">
						<div class="fh5co-press-text">
							<h3 class="h2 fh5co-press-title"><i class="id">3</i>加载“<?php echo $webtitle ?>”</h3>
							<p>打开代理商发送给你的运营商网络配置文件；<br>
							输入帐号和密码，未注册请联系代理商；</p>
							<p><a href="#" class="btn btn-primary btn-sm hide">Learn more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="to-animate">
						<img src="images/ios_11.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-features">
		<div class="container">
			<div class="row set">
				<div class="col-md-6 text">
					<div class="to-animate">
						<div class="fh5co-press-text">
							<h3 class="h2 fh5co-press-title"><i class="id">4</i>登录“<?php echo $webtitle ?>”</h3>
							<p>关闭OpenVPN软件仍然会在线，只有手动关闭才会下线此软件，请保持网站在后台运行；<br>
							自行开启浏览器打开百度输入关键词“ip”，如显示“<?php echo $ipinfo ?>”即成功连接；</p>
							<p><a href="http://ipip.net"  target="_blank">点击检测是否成功？</a></p>
							<p><b>* 搜索结果为“<?php echo $ipinfo ?>”即成功连接</b></p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="to-animate">
						<img src="images/ios_13.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'copy.php';?>
	
</html>
