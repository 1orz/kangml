<?php

include("../api.inc.php");

$u = daddslashes($_GET['user']);

$p = daddslashes($_GET['pass']);

$res=$DB->get_row("SELECT * FROM `openvpn` where `iuser`='$u' && `pass`='$p' limit 1");


$d2=ceil(($res['endtime']-time())/60/60/24);
if(!$res){
echo '密码错误';
}else
{
echo "<p>账号:".$res['iuser'];

echo "</p><p>发送:".round($res['isent']/1024/1024);

echo "MB</p><p>接收:".round($res['irecv']/1024/1024);

echo "MB</p><p>总量:".round($res['maxll']/1024/1024);

echo "MB</p><p>剩余:".round(($res['maxll']-$res['isent']-$res['irecv'])/1024/1024);

echo "MB</p><p>注册时间:".date('Y-m-d',$res['starttime']);

echo "</p><p>到期时间:".date('Y-m-d',$res['endtime']);

echo "</p><p>剩余天数:".$d2;

echo "       
";
}
?>

<?php 