<?php
$mod='blank';
include("../api.inc.php");
$dl=$_REQUEST['dl'];
if($dl){
}else{
    $dl='0';
}

$rs=$DB->get_row("SELECT * FROM auth_daili WHERE id='$dl' limit 1");
$dl_id=$rs['id'];
$user=$rs['user'];
$adtext=$rs['adtext'];
$adimg=$rs['adimg'];
$qq=$rs['qq'];
if($adimg<>""){
    
}
else{
    $adimg = "./ad.jpg";
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head2.php';?>
<body class="page-body" style="
    background: #fff;
">

    <div class="ad_bg">
        <div class="ad_title">
            <?php echo $adtext; ?>
        </div>
        <div class="ad_img">
            <a href="/user/reg.php?dl=<?php echo $dl_id;?>"><img src="<?php echo $adimg; ?>" width="100%" alt="" /></a>
        </div>
        <div class="ad_btn">
            <a href="/user/reg.php?dl=<?php echo $dl_id;?>" class="btn btn-purple btn-icon btn-icon-success btn-block">
                <i class="fa-wifi"></i>
                <span>注册VPN账号</span>
            </a>
            <a href="mqqwpa://im/chat?chat_type=wpa&uin=<?php echo $qq; ?>&version=1&src_type=web&web_src=oicqzone.com" class="btn btn-info btn-icon btn-icon-success btn-block">
                <i class="fa-qq"></i>
                <span>联系在线客服QQ</span>
            </a>
        </div>
        <div class="ad_rcode">
            <div id="qrcode"></div>
            <span>手机扫码立即注册</span>
            <br><br>
        </div>
    </div>
    
    <!-- Bottom Scripts -->
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/TweenMax.min.js"></script>
    <script src="./assets/js/resizeable.js"></script>
    <script src="./assets/js/joinable.js"></script>
    <script src="./assets/js/xenon-api.js"></script>
    <script src="./assets/js/xenon-toggles.js"></script>

    <script src="/assets/js/jquery-validate/jquery.validate.min.js"></script>

    <!-- JavaScripts initializations and stuff -->
    <script src="./assets/js/xenon-custom.js"></script>
<script type="text/javascript" src="./assets/js/jquery.qrcode.min.js"></script>
<script>
jQuery('#qrcode').qrcode({
        render      : "canvas",//也可以替换为table
        width   : 150,
        height  : 150,
        text      : "http://<?php echo $_SERVER['HTTP_HOST'];?>/user/reg.php?dl=<?php echo $dl_id;?>"
});
</script>
</body>
</html>