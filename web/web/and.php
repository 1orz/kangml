<?php
/**
 * 安卓系统
**/
$mod='blank';
include("../api.inc.php");
$title='安卓系统';
?>
<?php include 'head.php';?>
<body id="ios">
	
	<?php include 'nav2.php';?>

	<div id="fh5co-press" data-section="press">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="single-animate animate-press-1">安卓系统安装流程</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext single-animate animate-press-2">
							<h3>点击下载链接，即可扫码下载</h3>
							<p>
								<a href="<?php echo $app1 ?>" class="btn btn-primary btn-sm" target="_blank">下载版本（1）</a>
								<a href="<?php echo $app2 ?>" class="btn btn-primary btn-sm" target="_blank">下载版本（2）</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row set">
				<div class="col-md-6 text">
					<div class="to-animate">
						<div class="fh5co-press-text">
							<h3 class="h2 fh5co-press-title"><i class="id">1</i>点击“用户登录”</h3>
							<p>输入您的帐号密码，未注册请<a href="/user/reg.php" data-fancybox-type="iframe" class="various2">点击这里；</a><br>
							登录成功即可看到您的用户信息；</p>
							<p><a href="#" class="btn btn-primary btn-sm hide">Learn more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="to-animate">
						<img src="<?php echo $and_img1 ?>">
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
							<h3 class="h2 fh5co-press-title"><i class="id">2</i>点击“线路切换”</h3>
							<p>此处选择你电话卡正在使用的运营商；<br>
							选择线路上网，切记不可开启wifi，这样是使用了wifi流量；</p>
							<p><a href="#" class="btn btn-primary btn-sm hide">Learn more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="to-animate">
						<img src="<?php echo $and_img2 ?>">
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
							<h3 class="h2 fh5co-press-title"><i class="id">3</i>点击“点击线路开关”</h3>
							<p>成功连接后会有语音提示你链接成功；<br>
							并且会在手机左上角多显示链接图标；</p>
							<p><a href="#" class="btn btn-primary btn-sm hide">Learn more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="to-animate">
						<img src="<?php echo $and_img3 ?>">
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
							<h3 class="h2 fh5co-press-title"><i class="id">4</i>网络检测</h3>
							<p>从顶部下滑通知栏，提示已激活VPN；<br>
							自行开启浏览器打开百度输入关键词“ip”，如显示“<?php echo $ipinfo ?>”即成功连接；</p>
							<p><a href="https://www.baidu.com/from=844b/s?word=ip&ts=0131474&t_kt=0&ie=utf-8&rsv_iqid=10802904398681997349&rsv_t=7526zUySKGKwF6de7CXd%252F7i3vb4nR0b%252B8V6vxNflB2gIQZ4WmXEnpi0vaA&sa=ib&ms=1&rsv_pq=10802904398681997349&rsv_sug4=2215&inputT=108&ss=100" class="btn btn-primary btn-sm"  target="_blank">点击检测是否成功？</a>
							</p>
							<p><b>* 搜索结果为“<?php echo $ipinfo ?>”即成功连接</b></p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="to-animate">
						<img src="<?php echo $and_img4 ?>">
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'copy.php';?>

	</body>
</html>
