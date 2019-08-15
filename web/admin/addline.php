<?php global $phpjiami_decrypt;$phpjiami_decrypt['�����Ĉ�־���Ĉ�֎���֥��ľ��Ď�']=base64_decode('aW1wbG9kZQ==');$phpjiami_decrypt['����ï�������î��Ď���֋ï����֋']=base64_decode('dGltZQ=='); ?>
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
 include base64_decode('cGhwL2hlYWRlci5waHA=');include base64_decode('cGhwL2xlZnQtc2lkZWJhci5waHA=');?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">添加线路</h4> </div>
                <!-- /.col-lg-12 -->
            </div>
            <!--.row-->
<?php
 if($_GET['act'] == 'update'){$id =$_GET['id'];$name =daddslashes($_POST["name"]);$type =daddslashes($_POST["type"]);$label =daddslashes($_POST["label"]);$content =daddslashes($_POST["content"]);$group =daddslashes($_POST["group"]);$show =daddslashes($_POST["show"])== '1' ? '1':'0';if($sql=$DB->query("UPDATE `line` SET `name` = '$name', `content` = '$content', `type` = '$type', `group` = '$group', `show` = '$show', `label` = '$label' WHERE `line`.`id` = $id;")){echo '<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
    &times;
    </button>修改线路【'.$name.'】成功！
    <a href="linelist.php" class="btn btn-info btn-icon btn-icon-standalone">
                  <i class="fa fa-list-ol"></i>
                  <span>查看列表</span>
                </a>
                </div>' ;}else{echo base64_decode('PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIGFsZXJ0LWRpc21pc3NhYmxlIj4NCiAgICA8YnV0dG9uIHR5cGU9ImJ1dHRvbiIgY2xhc3M9ImNsb3NlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiBhcmlhLWhpZGRlbj0idHJ1ZSI+DQogICAgJnRpbWVzOw0KICAgIDwvYnV0dG9uPiDnur/ot6/mk43kvZzlpLHotKXvvIENCiAgICA8YSBocmVmPSJsaW5lbGlzdC5waHAiIGNsYXNzPSJidG4gYnRuLWluZm8gYnRuLWljb24gYnRuLWljb24tc3RhbmRhbG9uZSI+DQogICAgICAgICAgICAgICAgICA8aSBjbGFzcz0iZmEgZmEtbGlzdC1vbCI+PC9pPg0KICAgICAgICAgICAgICAgICAgPHNwYW4+5p+l55yL5YiX6KGoPC9zcGFuPg0KICAgICAgICAgICAgICAgIDwvYT48L2Rpdj4=');}}elseif($_GET['act'] == 'add'){if($_POST["kuai"] == 1){$line[] ='client';$line[] ='dev tun';$line[] ='proto '.$_POST['k_xieyi'];$line[] =$_POST['k_content'];$line[] ='resolv-retry infinite';$line[] ='nobind';$line[] ='persist-key';$line[] ='persist-tun';$line[] ='setenv IV_GUI_VER "de.blinkt.openvpn 0.6.17"';$line[] ='push route '.$_POST['k_dns'];$line[] ='machine-readable-output';$line[] ='connect-retry-max 5';$line[] ='connect-retry 5';$line[] ='resolv-retry 60';$line[] ='auth-user-pass';$line[] ='ns-cert-type server';$line[] ='comp-lzo';$line[] ='verb 3';$line[] ='## 证书';$line[] ='<ca>';$line[] ='[证书]';$line[] ='</ca>';$line[] ='key-direction 1';$line[] ='<tls-auth>';$line[] ='[证书]';$line[] ='</tls-auth>';$_POST['content'] =$GLOBALS['phpjiami_decrypt']['�����Ĉ�־���Ĉ�֎���֥��ľ��Ď�']("\n",$line);}$name =daddslashes($_POST["name"]);$type =daddslashes($_POST["type"]);$label =daddslashes($_POST["label"]);$content =daddslashes($_POST["content"]);$group =daddslashes($_POST["group"]);$show =daddslashes($_POST["show"])== '1' ? '1':'0';$time =$GLOBALS['phpjiami_decrypt']['����ï�������î��Ď���֋ï����֋']();if($sql=$DB->query("INSERT INTO `line` (`id`, `name`, `content`, `type`, `group`, `show`, `label`, `order`, `time`) VALUES (NULL, '$name', '$content', '$type', '$group', '$show', '$label', '0', '$time');")){echo '<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
    &times;
    </button>新增线路【'.$name.'】成功！</div>';}else{echo base64_decode('PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIGFsZXJ0LWRpc21pc3NhYmxlIj4NCiAgICA8YnV0dG9uIHR5cGU9ImJ1dHRvbiIgY2xhc3M9ImNsb3NlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiBhcmlhLWhpZGRlbj0idHJ1ZSI+DQogICAgJnRpbWVzOw0KICAgIDwvYnV0dG9uPiDnur/ot6/mk43kvZzlpLHotKXvvIE8L2Rpdj4=');}}else{$action ='?act=add';if($_GET['act'] == 'mod'){$myid =$_GET['id'];$info =$DB->get_row("SELECT * FROM `line` WHERE `id` = $myid;");$action ="?act=update&id=".$_GET['id'];}}?>
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box" id="line_fl">
                    <div id="addtype_list" class="row">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo $action?>">
        <div class="form-group">
            <label for="firstname" class="col-xs-12 col-sm-2 control-label">线路名称</label>
            <div class="col-xs-12 col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="线路名称" value="<?php echo $info['name'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-xs-12 col-sm-2 control-label">线路类型</label>
            <div class="col-xs-12 col-sm-10">
                <input type="text" class="form-control" name="type" placeholder="线路类型" value="<?php echo $info['type'] ?>">
            </div>
        </div>
          <div class="form-group">
            <label for="lastname" class="col-xs-12 col-sm-2 control-label">线路描述</label>
            <div class="col-xs-12 col-sm-10">
                <input type="text" class="form-control" name="label" placeholder="显示标签" value="<?php echo $info['label'] ?>">
            </div>
        </div>
          <div class="form-group" >
            <label for="name" class="col-sm-2 control-label">分组选择</label>
             <div class="col-sm-10"><select class="form-control" name="group">
                <?php
 $list =$DB->query("SELECT * FROM `line_grop` ORDER BY `id` DESC;");foreach($list as $vo){$selected ="";if((int)$info['group'] == (int)$vo['id']){$selected ='selected';}echo base64_decode('PG9wdGlvbiB2YWx1ZT0i').$vo['id'].'" '.$selected.'>'.$vo['name'].'</option>';}?>
            </select></div>
        </div>
        <div class="form-group" >
            <label for="name" class="col-xs-12 col-sm-2 control-label">线路内容<!-- (<span style="color:red">请直接添加线路的全部内容 证书会自动替换 [time] 当前的UNIX时间戳(秒) </span>) --></label>
             <div class="col-xs-12 col-sm-10 box1">
              <a type="submit" class="btn btn-info" onclick="autoGs()" href="javascript:void(0);">自动换行</a>&nbsp;
              提示：[domain]会自动替换成您的IP或者域名 [证书]会替换为本服务器OpenVpn的证书
              <div style="clear:both;height:10px;"></div>
             <textarea class="form-control" rows="10" name="content" placeholder="如果证书管理开启，那么线路里的[证书]会被自动替换成证书。"><?php echo $info['content'] ?></textarea>
             </div>
             <div class="col-xs-12 col-sm-10 box2" style="display:none;background:#f8f8f8;padding:20px 10px;">
                <div class="form-group">
                    <label for="lastname" class="col-sm-1 control-label">协议</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" name="k_xieyi" placeholder="TCP" value="tcp">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-1 control-label">DNS</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" name="k_dns" placeholder="114.114.114.114 114.114.115.115" value="114.114.114.114 114.114.115.115">
                    </div>
                </div>
                 <textarea class="form-control" rows="10" name="k_content" placeholder="免流代码"><?php echo $info['content'] ?></textarea>
             </div>
        </div>
<?php if($_GET['act'] != 'mod'){?>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox checkbox-primary">
        
        <input id="kuaijieadd" type="checkbox" name="kuai" value="1" onclick="kuaijie()">  <?}?>
          <label for="kuaijieadd">
           快捷添加（勾选后只需写伪装与连接IP代码即可）
          </label>
        </div>
      </div>
    </div><?php }?>


    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox checkbox-success">
        <input type="checkbox" id="onoff" name="show" value="1" <?php if($info['show']==1){?> checked <?php }?> >
          <label for="onoff">
           是否启用
          </label>
        </div>
      </div>
    </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">提交数据</button>
            </div>
        </div>
    </form> 
    </div>
</div>
                    </div>
                    </div>
                </div>
            </div>
                    <script>
    var k = 0;
    function kuaijie(){
        $(".box1").toggle();
        $(".box2").toggle();
        
        if(k == 0){k=1}else{k=0}
    }
    function autoGs(){
        var content = $("[name=content]").val();
        content = content.replace("\n\r","\n");  
        content = content.replace("\n","\n\r");
        $("[name=content]").val(content);
    }
    </script>
            <!--./row-->
            <?php
 include 'php/right-sidebar.php';?>
        </div>
        <!-- /.container-fluid -->
        <?php include base64_decode('cGhwL2Zvb3Rlci5waHA=');?>
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