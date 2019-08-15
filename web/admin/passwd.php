<!DOCTYPE html>  
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>康师傅流控管理后台</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!--alerts CSS -->
    <link href="../plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-19175540-9', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<?php
    include 'php/header.php';
    include 'php/left-sidebar.php';
    ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">修改密码</h4> </div>
                <!-- /.col-lg-12 -->
            </div>
            <!--.row-->
<?php
if(isset($_POST['newname'])&&isset($_POST['newpasswd'])) {
	// 	echo "<script language='javascript'>alert('".$_POST['newname'].$_POST['newpasswd']."')</script>";
	$newname = trim($_POST['newname']);
	$newpasswd = trim($_POST['newpasswd']);
	if($newname==""||$newpasswd=="") {
		echo "<script language='javascript'>alert('用户名和密码不能为空！')</script>";
	}else {
		$sql = "update `admin` set `username` = '".$newname."', `password` = '".$newpasswd."'";
		$result = $DB->query($sql);
		if($result) {
			echo "<script language='javascript'>alert('修改成功！新账号：".$newname."  新密码：".$newpasswd."请重新登录...')</script>";
			echo "<script language='javascript'>window.location.href='./index.php'</script>";
		}else {
			echo "<script language='javascript'>alert('修改失败')</script>";
		}
	}
}
?>
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">修改管理员账号和密码</h3>
                        <br/>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="passwd.php" method="post" class="form-material form-horizontal">
                                            <div class="form-group">
                                            <label class="col-md-1 control-label">新账号</label>
                                              <div class="col-md-10">
                                             <input type="text" class="form-control form-control-line" name="newname" placeholder="请输入新账号" required>
                                               </div>
                                               </div>
                                               <div class="form-group">
                                            <label class="col-md-1 control-label">新密码</label>
                                              <div class="col-md-10">
                                             <input type="text" class="form-control form-control-line" name="newpasswd" placeholder="请输入新密码" required>
                                               </div>
                                               </div>
                                    <button type="submit" class="btn btn-info btn-block waves-effect waves-light m-r-10">修改</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--./row-->
            <?php include 'php/right-sidebar.php';?>
        </div>
        <!-- /.container-fluid -->
        <?php include 'php/footer.php';?>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script><!-- Sweet-Alert  -->
    <script src="../plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <script src="../plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/jasny-bootstrap.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>