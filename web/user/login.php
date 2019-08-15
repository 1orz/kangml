<?php
$mod='blank'; include("../api.inc.php"); $title='用户登录'; include './css.php'; ?>

  		<div class="middle-box text-center loginscreen  animated fadeInDown">
			<div>
					<h3>账号登录</h3>
					<p>&nbsp</p>
                   <form action="./index.php" method="get" class="form-horizontal" role="form">
					<div class="form-group">
						<input type="text" class="form-control" name="user" placeholder="用户名" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="pass" placeholder="密码" required>
					</div>
					<button  class="btn btn-primary block full-width m-b" type="submit" >登 录</button>
					<p class="text-muted text-center"><a href="reg.php"><small>立即注册</small></a> | <a onclick="alert('忘记密码，请与代理商联系找回！')"><small>找回密码</small></a>
					</p>
                    </form>
			</div>
		</div>

		<script src="./js/jquery.min.js?v=2.1.4"></script>
		<script src="./js/bootstrap.min.js?v=3.3.6"></script>
		<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>

<?php footer();?><?php 