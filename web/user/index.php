<?php
$mod = 'blank';
include("../api.inc.php");
$u = daddslashes($_GET['user']);
$u = sql_check($u);
$p = daddslashes($_GET['pass']);
$p = sql_check($p);
$res = $DB->get_row("SELECT * FROM `openvpn` where `iuser`='$u' && `pass`='$p' limit 1");
if (!$res) {
    exit("<script language='javascript'>alert('未正确登录，或用户名或密码不正确！');window.location.href='/user/login.php';</script>");
}

$tian=$res['tian'];
$by=$res['by'];
if($by==1){
    echo "<style>#kmcz{display: none;}</style>";
}
$web_dl=$res['dlid'];
if($tian>0){

    /**
     * PHP里的日期加减方法
     */
    // 第一步，假设有一个时间
    $a = date('Y-m-d');
     
    // 第二步，获得这个日期的时间戳
    $a_time = strtotime($a);
     
    // 第三步，获得加五个月后的时间戳
    $b_time = strtotime('+'.$tian.' Day',$a_time);
    //echo "<script language='javascript'>alert('".$b_time."');</script>";

    /*$endtime = strtotime(time());*/
    $DB->query("update `openvpn` set `endtime`='$b_time',`i` ='1',`tian` ='0' where `iuser`='{$u}'");
    echo "<script language='javascript'>alert('您好，这是第一次登录，帐号已激活，使用天数为".$tian."天！');window.location.reload();</script>";

}
if($_POST['km']){
    if($by==1){
        echo "<script language='javascript'>alert('您好，您是包月用户，不可以使用充值卡密，请联系代理商！');</script>";
    }else{
        if($_POST['km']){
            $km = daddslashes($_POST['km']);
            $myrow=$DB->get_row("select * from auth_kms where kind=1 and km='$km' limit 1");
            if(!$myrow){
                exit("<script language='javascript'>alert('此激活码不存在');history.go(-1);</script>");
            }elseif($myrow['isuse']==1){
                exit("<script language='javascript'>alert('此激活码已被使用');history.go(-1);</script>");
            }else{
                //$duetime = ($res['endtime'] < time() ? time() : $res['endtime']) + $myrow['value']*24*60*60;
                $duetime = time() + $myrow['value']*24*60*60;

                $addll = $myrow['values']*1024*1024*1024;
                if($res['endtime'] < time()){//已到期
                    $sql="update `openvpn` set `isent`='0',`irecv`='0',`maxll`='{$addll}',`endtime`='{$duetime}',`dlid`='{$myrow['daili']}',`i`='1' where `iuser`='{$u}' && `pass`='{$p}'";
                    if($DB->query($sql)){
                        $DB->query("update `auth_kms` set `isuse` ='1',`user` ='$u',`usetime` ='$date' where `id`='{$myrow['id']}'");
                        wlog('账号激活','用户'.$u.'使用激活码'.$km.'开通账号['.$date.']');

                        //赠送推荐人流量1
                        $zrs=$DB->get_row("SELECT * FROM openvpn where `iuser`='{$u}'");
                        $tj_user=$zrs['tj_user'];
                        $tj_ok=$zrs['tj_ok'];

                        $zzrs=$DB->get_row("SELECT * FROM auth_config");
                        $user_cash_con=$zzrs['user_cash'];
                        //echo "<script language='javascript'>alert('推荐成功赠送流量：".$user_cash_con."');</script>";

                        if($tj_ok>0){
                            $tjr=$DB->get_row("SELECT * FROM openvpn where `iuser`='{$tj_user}'");
                            $tj_new_maxll=round($tjr['maxll']+$user_cash_con);
                            //echo "<script language='javascript'>alert('新流量".$tj_new_maxll."');</script>";

                            $DB->query("update `openvpn` set `maxll`='$tj_new_maxll', `i`='1' where `iuser`='{$tj_user}'");
                            $DB->query("update `openvpn` set `tj_ok` ='0' where `iuser`='{$u}'");
                            echo "<script language='javascript'>alert('您的推荐人：".$tj_user."，获得".round($user_cash_con/1024/1024)."MB流量！');</script>";
                            //echo "<script language='javascript'>alert('推荐人：".$tj_user."');</script>";
                        }

                        exit("<script language='javascript'>alert('开通成功！');history.go(-1);</script>");
                    }else{
                        exit("<script language='javascript'>alert('开通失败！');history.go(-1);</script>");
                    }
                }else{
                    $sql="update `openvpn` set `isent`='0',`irecv`='0',`maxll`='{$addll}',`endtime`='{$duetime}',`dlid`='{$myrow['daili']}',`i`='1' where `iuser`='{$u}' && `pass`='{$p}'";
                    if($DB->query($sql)){
                        $DB->query("update `auth_kms` set `isuse` ='1',`user` ='$u',`usetime` ='$date' where `id`='{$myrow['id']}'");
                        wlog('账号充值','用户'.$u.'使用激活码'.$km.'续费账号['.$date.']');

                        //赠送推荐人流量2
                        $zrs=$DB->get_row("SELECT * FROM openvpn where `iuser`='{$u}'");
                        $tj_user=$zrs['tj_user'];
                        $tj_ok=$zrs['tj_ok'];

                        $zzrs=$DB->get_row("SELECT * FROM auth_config");
                        $user_cash_con=$zzrs['user_cash'];
                        //echo "<script language='javascript'>alert('推荐成功赠送流量：".$user_cash_con."');</script>";

                        if($tj_ok>0){
                            $tjr=$DB->get_row("SELECT * FROM openvpn where `iuser`='{$tj_user}'");
                            $tj_new_maxll=round($tjr['maxll']+$user_cash_con);
                            //echo "<script language='javascript'>alert('新流量".$tj_new_maxll."');</script>";

                            $DB->query("update `openvpn` set `maxll`='$tj_new_maxll', `i`='1' where `iuser`='{$tj_user}'");
                            $DB->query("update `openvpn` set `tj_ok` ='0' where `iuser`='{$u}'");
                            echo "<script language='javascript'>alert('您的推荐人：".$tj_user."，获得".round($user_cash_con/1024/1024)."MB流量！');</script>";
                            //echo "<script language='javascript'>alert('推荐人：".$tj_user."');</script>";
                        }

                        exit("<script language='javascript'>alert('续费成功！');history.go(-1);</script>");
                    }else{
                        exit("<script language='javascript'>alert('续费失败！');history.go(-1);</script>");
                    }
                }
                //$duetime = ($res['endtime'] < time() ? time() : $res['endtime']) + $myrow['value']*24*60*60;
                //$addll = ($res['endtime'] < time() ? $myrow['values'] : $res['endtime']) + $myrow['values'];
                //$sql="update `openvpn` set `maxll`=`maxll` + '0',`endtime`='{$duetime}' where `iuser`='{$u}' && `pass`='{$p}'";
                
            }
            //if($DB->query("update `openvpn` set `pass`='$pass',`maxll`='$maxll',`i`='$state',`endtime`='$endtime' where iuser='$user'"))
        }
    }   
}

$title = '用户中心';
include './index_css.php';
$config = $DB->get_row("SELECT * FROM auth_config");
$gonggao = $config['ggs'];

if ($_POST['passwdu']) {
    $passwdu = daddslashes($_POST['passwdu']);
    $passwdu = $_POST['passwdu'];
    $sqlp = "UPDATE  `ov`.`openvpn` SET  `pass` = '$passwdu' WHERE  `openvpn`.`iuser` ='$u'";

    if ($DB->query($sqlp)) {
        $DB->query("UPDATE  `ov`.`openvpn` SET  `pass` = '$passwdu' WHERE  `openvpn`.`iuser` ='$u'");
        exit("<script language='javascript'>alert('密码修改成功,请重新登录！');history.go(-1);</script>");
    }
}

/*获取代理信息*/
$daili_info = $DB->get_row("SELECT * FROM openvpn where `iuser`='{$u}'");
$daili_info_id=$daili_info['dlid'];
//echo "<script language='javascript'>alert('获取代理信息：".$daili_info_id."');</script>";

if($daili_info_id){
    $config_dl = $DB->get_row("SELECT * FROM auth_daili WHERE id='$daili_info_id' limit 1");
    $config_name=$config_dl['name'];//代理姓名
    $config_qq=$config_dl['qq'];
    $config_tel=$config_dl['tel'];
    $config_buy=$config_dl['buy'];//购买链接
    $config_buy2=$config_dl['buy2'];//购买代码
    //echo "<script language='javascript'>alert('获取代理信息：".$config_name."');</script>";
}else{
    $rs=$DB->get_row("SELECT * FROM website");
    $config_name=$rs['title'];
    $config_qq=$rs['qq'];
    $config_tel=$rs['tel'];

    $rs2=$DB->get_row("SELECT * FROM auth_config");
    $config_buy=$rs2['shopUrl'];
    $config_buy2=$rs2['shopCode'];
}

/*获取支付宝*/
$alpay= $DB->get_row("SELECT * FROM alipay");
$alpay_on=$alpay['partner'];

/*签到*/
$qrs=$DB->get_row("SELECT * FROM auth_config");
$user_cash_con=$qrs['user_cash'];
$qian_con=$qrs['qian'];

if($_POST['qiandao']){

    $qian_num_con=1;
    //echo "<script language='javascript'>alert('签到赠送流量为：".$qian_con."');</script>";
    $qrs2=$DB->get_row("SELECT * FROM openvpn where `iuser`='{$u}'");
    $now_time = date("Y-m-d");
    $qian_date = $qrs2['qian_date'];
    $qian_num = $qrs2['qian_num'];
    //echo "<script language='javascript'>alert('今天".$qian_date."');</script>";

    if($qian_date != $now_time){
        //echo "<script language='javascript'>alert('可以钱都');</script>";
        $new_maxll=round($qrs2['maxll']+$qian_con);
        $qian_num=round($qrs2['qian_num']+$qian_num_con);
        //echo "<script language='javascript'>alert('该用户的流量".$maxll."');</script>";
        //echo "<script language='javascript'>alert('更新的流量为".$maxll."');</script>";
        $DB->query("update `openvpn` set `maxll`='$new_maxll',`qian_date` ='$now_time',`qian_num` ='$qian_num' where `iuser`='{$u}'");
        echo "<script language='javascript'>alert('签到成功，新增".round($qian_con/1024/1024)."MB流量！');</script>";
    }else{
        echo "<script language='javascript'>alert('您今天已经签到了！');</script>";
    }

}

?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-10">
                <!--          <div class="row" style="margin: 1em auto;">-->
                <!--            <div class="col-md-12">-->
                <!--              <img src="/user/images/logo.png" class="img-responsive center-block" alt="Flipwalls Logo" width="257" height="77"></div>-->
                <!--          </div>-->
                <br><br>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar-collapse" aria-expanded="false">
                                <span class="sr-only">菜单</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">用户中心</a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="#">账号状态</a></li>
                                <li>
                                    <a href="<?php echo $config_buy;?>" target="view_window">在线购买</a>
                                </li>
                                <li>
                                    <form id="kmcz" role="form" method="POST" class="navbar-form navbar-left">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="km" placeholder="请输入充值卡密">
                                        </div>
                                        <button type="submit" class="btn btn-default">确定充值</button>
                                    </form>
                                </li>
                                <li>
                                    <form role="form" method="POST" class="navbar-form navbar-left">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="passwdu" placeholder="请输入新密码">
                                        </div>
                                        <button type="submit" class="btn btn-default">确定修改</button>
                                    </form>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="login.php" target="view_window">
                                        <span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;退出</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="row visible-lg-block vmargin-15">
                    <div class="col-md-12 text-center">
                        <ul class="pagination" style="margin: 0px; vertical-align: middle;">
                            <li>
                  <span style="color: #bb1e10; background-color: #e7e7e7">
                    <div style="display: inline; margin: 0px 5px; float: left;">公告：</div>
                    <div style="display: inline; margin: 0px 5px; float: left;"><?php echo $gonggao; ?></div>
                    <div style="display: inline; margin: 0px 5px; float: left;"></div>
                  </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
                if (round(($res['endtime'] - time()) / 86400) < 3) {
                    echo '<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong>提醒：</strong> 尊敬的<font color="#dc143c"> ' . $u . ' </foont>您好，您的流量即将耗尽或流量剩余时间已不足3天，请及时充值！
                </div>';
                }
                ?>
                 <div class="row">
                <div class="col-sm-6">
                    <form action="" method="POST" id="qiandao_f" role="form">
                    <input type="hidden" name="qiandao" value="1"/>
                    <button type="submit" class="btn btn-warning btn-turquoise btn-icon btn-icon-standalone btn-block">
                        <i class="fa-magic"></i>
                        <span style="
    padding-left: 35px;
">每日签到赠送<?php echo round($qian_con/1024/1024); ?>MB（已签到<?php
                        $qqrs2=$DB->get_row("SELECT * FROM openvpn where `iuser`='{$u}'");
                        $qian_num2 = $qqrs2['qian_num'];
                         echo $qian_num2;
                         ?>次）</span>
                    </button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <a target="_blank" href="/user/reg.php?tj_user=<?php echo $res['iuser'];?>" class="btn btn-info btn-icon btn-icon-standalone btn-block">
                        <i class="fa-group"></i>
                        <span style="
    padding-left: 35px;
">推荐送<?php echo round($user_cash_con/1024/1024); ?>MB（新用户激活卡密即可）</span>
                    </a>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">用户信息</h3></div>
                            <div class="panel-body">
                                <p class="text-center">
                                    <span class="text-xxlg"><?php echo $res['iuser']; ?></span>
                                    <span class="text-lg">VIP客户</span></p>
                                <p class="text-center">注册日期:<?php echo date('Y-m-d', $res['starttime']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;到期时间:<?php echo date('Y-m-d', $res['endtime']); ?></p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 100%;">∞</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">服务状态 <a href="<?php echo $config_buy;?>" class="btn btn-default btn-xs" target="view_window"> 续费</a></h3></div>
                            <div class="panel-body">
                                <p class="text-center">
                                    <?php
                                    if ($res['i'] == 1) {
                                        echo '<span class="text-xxlg">正常服务</span>';
                                    } else {
                                        echo '<span class="text-xxlg">暂停服务</span>';
                                    }
                                    ?>
                                </p>
                                <p class="text-center">流量剩余天数:<span
                                        class="label label-danger"><?php echo round(($res['endtime'] - time()) / 86400); ?>
                                        天</p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 100%;">∞</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">流量信息</h3></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <p class="text-lg">上传的流量</p>
                                        <p>
                                            <span
                                                class="text-xlg"><?php echo round($res['isent'] / 1024 / 1024); ?></span>MB
                                        </p></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">流量信息</h3></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <p class="text-lg">下载的流量</p>
                                        <p>
                                            <span
                                                class="text-xlg"><?php echo round($res['irecv'] / 1024 / 1024); ?></span>MB
                                        </p></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">流量信息</h3></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <p class="text-lg">剩余的流量</p>
                                        <p>
                                            <span
                                                class="text-xlg"><?php echo round(($res['maxll'] - $res['isent'] - $res['irecv']) / 1024 / 1024); ?></span>MB
                                        </p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
        </div>
    </div>
    <script>(function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] ||
                function () {
                    (i[r].q = i[r].q || []).push(arguments)
                },
                i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-68906813-1', 'auto');
        ga('send', 'pageview');</script>

    </center>


<?php 