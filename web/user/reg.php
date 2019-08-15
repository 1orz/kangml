<?php
/**
 * 注册
**/
include("../api.inc.php");
$dlconfig=$DB->get_row("SELECT * FROM auth_config WHERE 1");
$tj_user = $_GET['tj_user'];
$dl = $_GET['dl']; 
if($dl == ''){
    $dl='0';
}
if($_POST['user'] && $_POST['pass']){
    $user=daddslashes($_POST['user']);
    $pass=daddslashes($_POST['pass']);
    $fwq=daddslashes($_POST['fwq']);
    $dl=daddslashes($_POST['dl']);
    if($fwq){
    }else{
        $fwq='0';
    }
    $verifycode=daddslashes($_POST['verifycode']);
    $user = sql_check($user);
    $row = $DB->get_row("SELECT * FROM `openvpn` WHERE `iuser`='$user' limit 1");

    $i=0;
    $b_time =time();

    //赠送新注册用户流量
    $rs=$DB->get_row("SELECT * FROM auth_config");
    $reg_cash_con=$rs['reg_cash'];
    $user_endtime_con=$rs['user_endtime'];

    if($reg_cash_con>0){
        $i=1;
        /**
         * PHP里的日期加减方法
         */
        // 第一步，假设有一个时间
        $a = date('Y-m-d');
         
        // 第二步，获得这个日期的时间戳
        $a_time = strtotime($a);
         
        // 第三步，获得加五个月后的时间戳
        $b_time = strtotime('+'.$user_endtime_con.' Day',$a_time);
        //echo "<script language='javascript'>alert('".$b_time."');</script>";
         
        // 第四部，把时间戳转换回日期格式
        //$b = date('Y-m-d H:i:s',$b_time);
        //echo '这是加了3天后的日期'.$b;
        
    }


    //记录赠送流量给推荐人
    $tj_user=$_REQUEST['tj_user_c'];
    $zrs=$DB->get_row("SELECT * FROM auth_config");
    $user_cash_con=round($zrs['user_cash']/1024/1024);
    if($tj_user){
        $tj_ok=1;
        //echo "<script language='javascript'>alert('推荐人：".$tj_user."');</script>";
    }

    if(!is_username($user)){
        exit("<script language='javascript'>alert('用户名只能是2~20位的字母数字！');history.go(-1);</script>");
    }elseif($row){
        exit("<script language='javascript'>alert('用户名已被使用！');history.go(-1);</script>");
    }elseif(!$verifycode || $verifycode!=$_SESSION['verifycode']){
            exit("<script language='javascript'>alert('验证码不正确！');history.go(-1);</script>");
    }else{
        //$DB->query("insert `openvpn`(`iuser`,`pass`,`isent`,`irecv`,`maxll`,`i`,`starttime`,`endtime`,`fwqid`) values('{$user}','{$pass}',0,0,0,0,'".time()."','".time()."','".$fwq."')");
        $DB->query("insert `openvpn`(`iuser`,`pass`,`isent`,`irecv`,`maxll`,`i`,`starttime`,`endtime`,`fwqid`,`tj_user`,`tj_ok`,`dlid`) values('{$user}','{$pass}',0,0,'{$reg_cash_con}','$i','".time()."','".$b_time."','".$fwq."','".$tj_user."','".$tj_ok."','".$dl."')");
        $row = $DB->get_row("SELECT * FROM `openvpn` WHERE `iuser`='$user' limit 1");
        if($row['id']){
            unset($_SESSION['verifycode']);
            exit("<script language='javascript'>alert('注册成功！');window.location.href='/user/index.php?dl=".$dl."&user=".$user."&pass=".$pass."';</script>");
        }else{
            exit("<script language='javascript'>alert('注册失败，请联系管理员！');history.go(-1);</script>");
        }
    }
}

$fwqlist=$DB->query("SELECT * FROM auth_fwq");


$title='用户注册';
include './css.php';
?>


 <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <h3>欢迎注册</h3>
            <p>创建一个账户</p>
          <form action="./reg.php" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                    <input type="text" class="form-control" name="user"  placeholder="请输入用户名" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="请输入密码" required="">
                </div>
                    <input type="hidden" name="dl" value="<?php echo $dl; ?>" >
                      <div class="form-group">
                    <input type="text" name="verifycode" class="form-control"  placeholder="验证码" required="" style="max-width: 82%;display:inline-block;vertical-align:middle;"/>&nbsp;<img title="点击刷新" src="verifycode.php" onclick="this.src='verifycode.php?'+Math.random();" style="max-height:32px;vertical-align:middle;" class="img-rounded">
                </div>

                
                <button type="submit" class="btn btn-primary block full-width m-b">点击注册</button>

                <p class="text-muted text-center"><small>已经有账户了？</small><a href="index.php">点我登陆</a>
                </p>

            </form>
        </div>
    </div>
	
    <script src="./js/jquery.min.js?v=2.1.4"></script>
    <script src="./js/bootstrap.min.js?v=3.3.6"></script>
    <script src="http://www.zi-han.net/theme/hplus/js/plugins/iCheck/icheck.min.js"></script>
    


  
<?php footer();