<?php
//decode by QQ:270656184 http://www.yunlu99.com/

$mod='blank';include('../api.inc.php');$title='网站首页';?>
<?php include 'head.php';?>
<body>

	<?php include 'nav.php';?>

	<div id="slider" data-section="home">
		<div class="owl-carousel owl-carousel-fullwidth">

		    <div class="item" style="background-image:url(<?php echo $img1 ?>)">
		    	<div class="overlay"></div>
		    	<div class="container" style="position: relative;">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2 text-center">
		    				<div class="fh5co-owl-text-wrap">
						    	<div class="fh5co-owl-text">
		    						<h1 class="fh5co-lead to-animate"><?php echo $tit1 ?></h1>
									<h2 class="fh5co-sub-lead to-animate"><?php echo $info1 ?> </h2>
									<p class="to-animate-2"><a href="#" class="btn btn-primary btn-lg" data-nav-section="press">现在马上下载，获得<?php echo $reg_cash_con ?>免费体验</a></p>
								</div>
							</div>
		    			</div>
		    		</div>
		    	</div>
		    </div>
		    <div class="item" style="background-image:url(<?php echo $img2 ?>)">
		    	<div class="container" style="position: relative;">
		    		<div class="row">
					    <div class="col-md-7 col-sm-7">
			    			<div class="fh5co-owl-text-wrap">
						    	<div class="fh5co-owl-text">
						    		<h1 class="fh5co-lead to-animate"><?php echo $tit2 ?></h1>
									<h2 class="fh5co-sub-lead to-animate"><?php echo $info2 ?></h2>
									<p class="to-animate-2"><a href="ios.php" class="btn btn-primary btn-lg">查看安装流程</a></p>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>
		    <div class="item item3" style="background-image:url(<?php echo $img3 ?>)">
		    	<div class="container" style="position: relative;">
		    		<div class="row">
		    			<div class="col-md-7 col-md-push-1 col-md-push-5 col-sm-7 col-sm-push-1 col-sm-push-5">
			    			<div class="fh5co-owl-text-wrap">
						    	<div class="fh5co-owl-text">
						    		<h1 class="fh5co-lead to-animate"><?php echo $tit3 ?></h1>
									<h2 class="fh5co-sub-lead to-animate"><?php echo $info3 ?></h2>
									<p class="to-animate-2"><a href="and.php" class="btn btn-primary btn-lg">查看安装流程</a></p>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>

		</div>
	</div>
    
    <div class="copyrights">Collect from <a href="#" ><?php echo $webtitle ?></a></div>
	
	<div id="fh5co-pricing" data-section="pricing">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="single-animate animate-pricing-1">加入我们</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext single-animate animate-pricing-2">
							<h3>是否已经心动不已？马上合作加盟吧！</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 to-animate">
					<div class="price-box popular">
						<div class="popular-text">流量体验</div>
						<div class="price"><?php echo $jia1;?><small>元</small></div>
						<p>注册新用户赠送<?php echo $reg_cash_con ?>提供测试</p>
						<hr>
						<ul class="pricing-info">
							<li><?php echo $user_endtime_con ?>天免费体验</li>
							<li>推荐好友送流量</li>
							<li>在平台注册登录后可自行购买开通</li>
						</ul>
						<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $qq?>&Site=junjiecaiwu&Menu=yes" target="_blank" class="btn btn-default btn-sm">立即订购</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 to-animate">
					<div class="price-box popular">
						<div class="popular-text">按量计费</div>
						<div class="price"><?php echo $jia2;?><small>元起</small></div>
						<p>流量自由分配按需求订购，不限制速度与时间</p>
						<hr>
						<ul class="pricing-info">
							<li>多种套餐特惠</li>
							<li>可以顺延升级</li>
							<li>在平台注册登录后可自行购买开通</li>
						</ul>
						<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $qq?>&Site=junjiecaiwu&Menu=yes" target="_blank" class="btn btn-default btn-sm">立即订购</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 to-animate">
					<div class="price-box popular">
						<div class="popular-text">包月计费</div>
						<div class="price"><?php echo $jia3;?><small>元</small></div>
						<p>适合每月无限流量轻松上网看视频和网页较多用户</p>
						<hr>
						<ul class="pricing-info">
							<li>有网就看</li>
							<li>续费有送</li>
							<li>在平台注册登录后可自行购买开通</li>
						</ul>
						<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $qq?>&Site=junjiecaiwu&Menu=yes" target="_blank" class="btn btn-default btn-sm">立即订购</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 to-animate">
					<div class="price-box popular">
						<div class="popular-text">代理加盟</div>
						<div class="price"><?php echo $jia4;?><small>元起</small></div>
						<p>独立代理平台，可以自由组合套餐，手机都可以开卡</p>
						<hr>
						<ul class="pricing-info">
							<li>分级别代理，优惠提流量</li>
							<li>每周更新促销活动</li>
							<li>在平台注册登录后可自行购买开通</li>
						</ul>
						<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $qq?>&Site=junjiecaiwu&Menu=yes" target="_blank" class="btn btn-default btn-sm">立即订购</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $qq?>&Site=junjiecaiwu&Menu=yes" target="_blank" class="btn btn-primary btn-block">马上成为代理</a>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-press" data-section="press">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="single-animate animate-press-1">软件安装</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext single-animate animate-press-2">
							<h3>云流量无需等待，秒连接！全面兼容，安卓/IOS系统零风险！</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<div class="row row-bottom-padded-lg">
					<div class="col-md-6 text-center to-animate">
						<div class="person">
							<a href="ios.php"><img src="picture/person2.jpg" class="img-responsive img-rounded" alt="Person"></a>
							<a href="ios.php"><h3 class="name">IOS系统</h3></a>
							<div class="position">切换ID安装即可快速使用</div>
						</div>
					</div>
					<div class="col-md-6 text-center to-animate">
						<div class="person">
							<a href="and.php"><img src="picture/person3.jpg" class="img-responsive img-rounded" alt="Person"></a>
							<a href="and.php"><h3 class="name">安卓系统</h3></a>
							<div class="position">一键下载即可安装使用</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-our-services" data-section="services">
		<div class="container">
			<div class="row row-bottom-padded-sm">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">产品介绍</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 to-animate">
							<h3><?php echo $webtitle ?>是一个让用户体验超低的价格，高品质的流量服务，坚决让运营商让利惠民，我们将以实力赢得大家的青睐！</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box to-animate">
						<div class="icon colored-5"><span><i class="icon-rocket"></i></span></div>
						<h3>网速提升</h3>
						<p>移动联通4G网络轻松提升，无束缚，轻松上5M/s</p>
					</div>
					<div class="box to-animate">
						<div class="icon colored-4"><span><i class="icon-heart"></i></span></div>
						<h3>无需设置</h3>
						<p>只需要输入您注册的账号和密码，轻松登录即可</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box to-animate">
						<div class="icon colored-2"><span><i class="icon-screen-desktop"></i></span></div>
						<h3>安卓/苹果</h3>
						<p>支持目前最流行的机型，苹果IOS/安卓全机型兼容，我们坚持领先一步</p>
					</div>
					<div class="box to-animate">
						<div class="icon colored-1"><span><i class="icon-mustache"></i></span></div>
						<h3>轻松连接</h3>
						<p>有信号的地方即可使用，连接速度极快，您只需消耗几kb流量即可完成登录。</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box to-animate">
						<div class="icon colored-3"><span><i class="icon-user"></i></span></div>
						<h3>操作简单</h3>
						<p>提供会员中心查询流量，在线充值流量服务，随时了解使用情况</p>
					</div>
					<div class="box to-animate">
						<div class="icon colored-6"><span><i class="icon-eye"></i></span></div>
						<h3>海量资源</h3>
						<p>无论是差旅，商务，休闲，去到哪里随便看，再也不担心宝宝追不了《老九门》</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-testimonials" data-section="testimonials">		
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">常见问题</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>每实际使用1G流量仅扣几M套餐内流量，通过客户端使用的云节流功能，从而实现随时随地无限免费流量上网！</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony to-animate">
						<blockquote>
							<span class="quote"><span><i class="icon-quote-left"></i></span></span>
							<p>A、可能由于服务器连接过于频繁，请关闭软件重新登录重新连接即可<br>
							B、可能你的手机CPU过热，重启你的手机然后重新登录重新连接即可<br>
							C、可能是我们的服务器出现问题了，停止使用然后联系客服即可<br>
							D、每个地区所用线路不一样，使用过程中发现会扣掉自身流量套餐的流量，尝试更改手机网络接入点改为wap或者net试一下</p>
						</blockquote>
						<p class="author">账号正常，连接时却一直连接不上</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-testimony to-animate">
						<blockquote>
							<span class="quote"><span><i class="icon-quote-left"></i></span></span>
							<p>因为需要登录苹果美国版商店进行下载软件才可进行<?php echo $webtitle ?>的使用，中国苹果商店没有上架该软甲！</p>
						</blockquote>
						<p class="author">为什么要退出的苹果ID？</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-testimony to-animate">
						<blockquote>
							<span class="quote"><span><i class="icon-quote-left"></i></span></span>
							<p>A、由于4G手机数据和通话不在一个网络模式下的原因，用户在接打电话是会断开数据通信，所以在通话之后，需要重新连接软件，然后再继续上网；<br>B、锁屏熄屏或者手机清理后台都有可能造成软件掉线，从而不能使用<?php echo $webtitle ?>；<br>C、用户在观看视频的同时请留意屏幕左上角的小钥匙是否还显示，以防掉线完全消耗你自身的流量，具体消耗比例以测试为准。</p>
						</blockquote>
						<p class="author">为什么有时候断线连接不上？</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-testimony to-animate">
						<blockquote>
							<span class="quote"><span><i class="icon-quote-left"></i></span></span>
							<p>A、本软件在每次登陆或者连接时可能需要损耗50K左右手机套餐流量，手机自带的软件在后台运行会消耗少量流量。<br>
							B、在使用过程中如果遇到掉线又重新连接，掉线重新连接需要一定的时间。<br>
							C、本软件在部分城市存在盲区包括个别手机品牌型号不能兼容导致不能使用，首次使用时一定要先做测试，确认不会消耗你手机流量套餐的流量后再继续使用。</p>
						</blockquote>
						<p class="author">使用本软件为什么会消耗本机流量？</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-testimony to-animate">
						<blockquote>
							<span class="quote"><span><i class="icon-quote-left"></i></span></span>
							<p>1、关闭你的wifi，开启你的手机流量数据，把所有正在运行的软件都关闭<br>2、如果手机双卡双待，请切换到您用来上网的手机卡。<br>3、不支持手机开热点。</p>
						</blockquote>
						<p class="author">请问有什么注意事项？</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-testimony to-animate">
						<blockquote>
							<span class="quote"><span><i class="icon-quote-left"></i></span></span>
							<p>A、拨打电话时，手机网络会自行中断，通话完成之后软件会自动重新连接，可能有部分手机需要手动重新连接软件。<br>
							B、部分手机自带一键清理功能，或者安装360，手机管家，手机助手等此类软件，请将流量库设置为白名单，可以避免部分掉线问题<br>
							C、请不要随便恢复手机出厂设置，也不要随便清理手机数据，由此造成的损失自行承担。</p>
						</blockquote>
						<p class="author">软件在使用的过程中会发生掉线？</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'copy.php';?>
	</body>
</html>