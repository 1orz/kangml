<?php
$mod='blank'; include("../api.inc.php"); 
$u = daddslashes($_GET['user']); 
$p = daddslashes($_GET['pass']); 
$res=$DB->get_row("SELECT * FROM `openvpn` where `iuser`='$u' && `pass`='$p' limit 1"); 
if(!$res){ header('location: login.php'); exit; } 
$tcsc = $DB->get_row("SELECT tcsc FROM `tc_name` where `id`='{$res['tcid']}'");
if ($res['endtime'] == 0){
    $ttime = time() + $tcsc['tcsc']*24*3600;
    $ttime=intval($ttime);
    $stime=time();
    $jhsql = $DB->query("UPDATE `openvpn` SET `endtime`={$ttime} WHERE `iuser`='{$u}' && `pass`='{$p}'");
    if($jhsql){
        $DB->query("upadate 'openvpn' set `endtime`='{$ttime}' where `iuser`='{$u}' && `pass`='{$p}'");
        wlog('套餐账号激活','用户'.$u.'成功激活账号['.$date.']');
        echo "<script language='javascript'>alert('账号激活成功,请刷新页面查看');</script>";
    }
}
if($_POST['km']){ 
	$km = daddslashes($_POST['km']); 
	$myrow=$DB->get_row("select * from auth_kms where kind=1 and km='$km' limit 1"); 
	if(!$myrow){ 
		exit("<script language='javascript'>alert('此激活码不存在');history.go(-1);</script>"); 
		}elseif($myrow['isuse']==1){ 
			exit("<script language='javascript'>alert('此激活码已被使用');history.go(-1);</script>"); 
			}else{ 
				$jjjh = time() + 86400 ;
				$addll = $myrow['values']; 
				if ($res['endtime'] < $jjjh){
				    $duetime=time() + $myrow['value']*24*60*60;
					$zjsj=time();
					$sql="update `openvpn` set `isent`='0',`irecv`='0',`maxll`=`maxll` + '{$addll}',`endtime`=`endtime` + '{$duetime}' -'{$zjsj}',`dlid`='{$myrow['daili']}',`i`='1' where `iuser`='{$u}' && `pass`='{$p}'"; 
					if($DB->query($sql)){
						$DB->query("update `auth_kms` set `isuse` ='1',`user` ='$u',`usetime` ='$date' where `id`='{$myrow['id']}'"); 
						wlog('账号激活','用户'.$u.'使用激活码'.$km.'开通账号['.$date.']');
						exit("<script language='javascript'>alert('开通成功！');history.go(-1);</script>"); 
						}else{ 
							exit("<script language='javascript'>alert('开通失败！');history.go(-1);</script>"); 
							} 
				}else{ 
					$sql="update `openvpn` set `maxll`=`maxll` + '{$addll}',`dlid`='{$myrow['daili']}',`i`='1' where `iuser`='{$u}' && `pass`='{$p}'";
					if($DB->query($sql)){
						$DB->query("update `auth_kms` set `isuse` ='1',`user` ='$u',`usetime` ='$date' where `id`='{$myrow['id']}'"); 
									wlog('账号激活','用户'.$u.'使用激活码'.$km.'续费账号['.$date.']'); 
									exit("<script language='javascript'>alert('续费成功！');history.go(-1);</script>"); 
									}else{ 
										exit("<script language='javascript'>alert('续费失败！');history.go(-1);</script>"); 
										} 
										}
										}
										} 
$title='用户中心'; 
include './index_css.php'; 
$config = $DB->get_row("SELECT * FROM auth_config"); 
$gonggao=$config['ggs'];
?>
  	<div class="alert alert-success" >
			</div>
			<form role="form" method="POST" class="form-inline">
				<div class="form-group">
					<input type="text" class="form-control" name="km" placeholder="请输入激活码卡密">
				</div>
				<button type="submit" class="btn btn-success">
					确定输入
				</button>
				</a>
			</form>
			<br />
			</div>
			</div>
			</div>

  </center>