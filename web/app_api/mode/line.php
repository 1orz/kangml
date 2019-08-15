<?php
include '../../full_config.php';

//-----配置选项
$line_app_key = "";//请输入32位授权码
$line_app_code = "";//请输入购买的激活码


function getvip() { 
       if (getenv("HTTP_CLIENT_IP"))
	$ip = getenv("HTTP_CLIENT_IP");
	else if(getenv("HTTP_X_FORWARDED_FOR"))
	$ip = getenv("HTTP_X_FORWARDED_FOR");
	else if(getenv("REMOTE_ADDR"))
	$ip = getenv("REMOTE_ADDR");
	else $ip = "Unknow";
	//return $ip;
        return $ip; 
   } 
	$app_key = "";//请输入32位授权码
	$domain = "";//请输入授权域名 例如app.dingd.cn
	
	$regionno = false;
	if(trim($_GET["s"]) == ""){
		if($_SESSION["is_tmp_location"] && $_GET["location"] != "true"){
			$region = $_SESSION["region"];
			$isp = $_SESSION["isp"];
		}else{
			$is_location = true;
			$api_uri = "http://www.dingd.cn/api/api.php?action=ip&ip=".getvip()."&app_key=".$app_key."&domian=".$domain;
			$json = file_get_contents($api_uri);
			$arr = json_decode($json,true);
			if($arr["data"]["isp"] == ""){
				$ispno = true;
			}
		
			$isp = '中国'.$arr["data"]["isp"]; //运行商 eg 电信
			$region = $arr["data"]["region"]; //省份 eg 河北省
			//$city = $arr["data"]["city"]; //市区 eg 保定市
			$ip = $arr["data"]["ip"]; //用户IP eg 123.57.89.18
		}
		//$region = 
	}else{
		$region = $_GET["s"];
		$isp = $_GET["i"];
		$_SESSION["region"] = $region;
		$_SESSION["isp"] = $isp;
		$_SESSION["is_tmp_location"] = true;
	}
	
	$find = str_replace("省","",$region);
	$find = str_replace("市","",$find);
	$find = str_replace("壮族自治区","",$find);
	$find = str_replace("维吾尔自治区","",$find);
	$find = str_replace("回族自治区","",$find);
	$find = str_replace("自治区","",$find);
	
	$line_grop = db('line_grop')->where(array("show"=>1))->order('id ASC')->select();
	//$line_grop = db('line_grop')->where('show=1 AND label LIKE \'%'.$region.'%\'')->order('id ASC')->select();
	?>
<style  type="text/css">
.auto{
	background:#fff;
	padding-left:10px;
	height:40px;
	line-height:40px;
	border-top:1px solid #ccc;
}

.box01_list{
	list-style:none;
	margin:0px;
	padding:0px;
}
.sx{
	background:#328cc9;
	color:#fff;
	border:none;
	height:40px;
	margin:0px;
	float:right;
}
.breadcrumb{
	margin:0px;
}
.tip{
	color:#999;font-size:14px;
	padding:5px 0px;
}
</style>
<!--
<option>北京市</option> 
<option>天津市</option> 
<option>上海市</option> 
<option>重庆市</option>
<option>河北省</option>
<option>山西省</option>
<option>辽宁省</option> 
<option>吉林省</option> 
<option>黑龙江省</option> 
<option>江苏省</option> 
<option>浙江省</option> 
<option>安徽省</option> 
<option>福建省</option> 
<option>江西省</option> 
<option>山东省</option> 
<option>河南省</option> 
<option>湖北省</option> 
<option>湖南省</option> 
<option>广东省</option> 
<option>海南省</option> 
<option>四川省</option> 
<option>贵州省</option> 
<option>云南省</option> 
<option>陕西省</option> 
<option>甘肃省</option> 
<option>青海省</option> 
<option>台湾省</option>
<option>香港</option>
<option>澳门</option>
-->
<form action="?" method="GET">
<input name="act" value="line" type="hidden">
<input name="app_key" value="<?php echo $_GET["app_key"] ?>" type="hidden">
<input name="username" value="<?php echo $_GET["username"] ?>" type="hidden">
<input name="password" value="<?php echo $_GET["password"] ?>" type="hidden">
<div class="auto">
	省区<select name="s">
<?php if($region != ""){?>
<option value="<?php echo $region;?>"><?php echo $region;?></option>
<?php }?>
<option>不限地区</option> 
<option>北京市</option> 
<option>天津市</option> 
<option>上海市</option> 
<option>重庆市</option>
<option>河北省</option>
<option>山西省</option>
<option>山东省</option>
<option>辽宁省</option> 
<option>吉林省</option> 
<option>黑龙江省</option> 
<option>江苏省</option> 
<option>浙江省</option> 
<option>安徽省</option> 
<option>福建省</option> 
<option>江西省</option> 
<option>山东省</option> 
<option>河南省</option> 
<option>湖北省</option> 
<option>湖南省</option> 
<option>广东省</option> 
<option>海南省</option> 
<option>四川省</option> 
<option>贵州省</option> 
<option>云南省</option> 
<option>陕西省</option> 
<option>甘肃省</option> 
<option>宁夏</option> 
<option>广西</option> 
<option>新疆</option> 
<option>西藏</option> 
<option>青海省</option> 
<option>台湾省</option>
<option>香港</option>
<option>澳门</option>
	</select>
	运营商<select name="i">
		<?php
		$i = 1;
		$p = "";
		
		$select_id = $line_grop[0]['id'];
		foreach($line_grop as $vo){
			if(!$ispno){
				if($vo["name"] == $isp){
					$p = 'selected';
					$select_id = $vo["id"];
				}
				echo '<option value="'.$vo["name"].'" '.$p.'>'.$vo["name"].'</option>';
			}else{
				if($i == 1){
					$p = 'selected';
					$select_id = $vo["id"];
				}
				echo '<option value="'.$vo["name"].'" '.$p.'>'.$vo["name"].'</option>';
			}
			$i++;
			$p = "";
		}
		?>
	</select>
	<input type="submit" class="sx" value="筛选线路">
</div><ol class="breadcrumb">
    <li><a href="#"><?php echo $find == "" ? "不限地区" : $find?></a></li>
    <li><a href="#"><?php echo $isp  == "" ? "中国移动" : $isp?></a></li>
    <li class="active">查看线路</li>
    <li><a href="?act=line&key=<?php echo $_GET["app_key"] ?>&username=<?php echo $_GET["username"] ?>&password=<?php echo $_GET["password"] ?>&location=true">[帮我自动定位]</a></li>
	</ol>
</form>

    <div id="slider" class="swipe">
	
      <ul class="box01_list">
      
				<li class="li_list" style="<?php echo $ss?>">
				<!---->
					<div class="main">
					<ul class="list-group">
					<?php if($is_location){?>
					<center>
							<div class="tip">--=自动定位：<?php echo $find == "" ? "不限地区" : $region?><?php echo $isp  == "" ? "中国移动" : $isp?>=--</div>
						</center>
					<?php  };
					$show = false;
						if(trim($region) == "" || $region == "不限地区"){
							$line = db('line')->where(array('show'=>'1','group'=>$select_id))->order('id DESC')->select();
						}else{
							$show = true;
							if(str_length(urldecode($region)) > 8){
								die("参数过长 len:".str_length(urldecode($region)));
							}
							$line = db('line')->where("`show`=1 AND `group`=".$select_id." AND (`label` LIKE '%".$find."%' OR `name` LIKE '%".$find."%')",array(":select_id"=>$select_id))->order('id DESC')->select();

							$line2 = db('line')->where("`show`=1 AND `group`=".$select_id." AND (`label` LIKE '%全国%' OR `label` LIKE '%通用%' OR `label` LIKE '%不限地区%' OR `name` LIKE '%全国%' OR `name` LIKE '%通用%' OR `name` LIKE '%不限地区%')",array(":select_id"=>$select_id))->order('id DESC')->select();
						}
						
						if($line){
							foreach($line as $vos){?>
							<li class="list-group-item"><b><?php echo $vos['name']?></b>&nbsp;<span class="badge"><?php echo $vos['type']?></span><br><p><?php echo $vos['label']?></p><button type="button" class="btn btn-primary btn-sm" onclick="addLine('<?php echo $vos['id']?>')">安装</button>&nbsp;<button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"  id="AZ2" onclick="feedback('<?php echo $vos['name']?>',<?php echo $vos['id']?>)">反馈</button></li>
						<?php }
						}else{
						?>
						<center>
							<div style="color:#ccc;font-size:12px;">暂无地区线路</div>
						</center>
						<?php
						}
						if($show){
						?>
						<center>
							<div class="tip">--=为您推荐全国线路=--</div>
						</center>
						<?php foreach($line2 as $vos){?>
							<li class="list-group-item"><b><?php echo $vos['name']?></b>&nbsp;<span class="badge"><?php echo $vos['type']?></span><br><p><?php echo $vos['label']?></p><button type="button" class="btn btn-primary btn-sm" onclick="addLine('<?php echo $vos['id']?>')">安装</button>&nbsp;<button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"  id="AZ2" onclick="feedback('<?php echo $vos['name']?>',<?php echo $vos['id']?>)">反馈</button></li>
						<?php }
						} ?>
					</ul>
					<div style="clear:both"></div>
				</div>
			</li>		
		<!---->
      </ul>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">工单反馈</h4>
            </div>
            <div class="modal-body">
				<?php 
					foreach($config["Feedback"]["Field"] as $key=>$vo){
				?>
				<div class="form-group">
					<label for="name"><?=$key?></label><br>
					<?php 
					if(is_array($vo)){
					$i = 0;
					foreach($vo as $v){
					$fix = $i == 0 ? "checked" : "";
					?>
						
						<label for="name"><input type="radio" value="<?=$v?>" name="<?=base64_encode($key)?>" <?=$fix?>><?=$v?></label>&nbsp;
					<?php $i++;}}else{
						echo '<input name="'.base64_encode($key).'" value="'.$vo.'" class="form-control">';
					} ?>
				</div>
					<?php } ?>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary add" data-dismiss="modal">确认发布</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<script type="text/javascript">
$(function(){
	$(".gitem").click(function(){
		var n = $(".gitem").index(this);
		$(".gitem a").removeClass("active").eq(n).addClass("active");
		$(".li_list").hide().eq(n).show();
	});
});
</script>

<script type="text/javascript">
var select_line_id = 0;
$(function(){
	$(".gitem").click(function(){
			var n = $(".gitem").index(this);
			$(".gitem a").removeClass("active").eq(n).addClass("active");
			$(".li_list").hide().eq(n).show();
		});
	});
	$(".add").click(function(){
		$.post("?act=feedback&username=<?php echo $_GET["username"]?>&password=<?php echo $_GET["password"]?>",{
				"line_id":select_line_id,
				<?php 
					foreach($config["Feedback"]["Field"] as $key=>$vo){
						if(is_array($vo)){
							$data[] = "\"".base64_encode($key)."\":$(\"[name='".base64_encode($key)."']:checked\").val()";
						}else{		
							$data[] = "\"".base64_encode($key)."\":$(\"[name='".base64_encode($key)."']\").val()";
						}
					} 
					echo implode(",\n",$data);
					?>
					
		},function(data){
			if(data.status == "success"){
				alert("反馈成功啦");
			}else if(data.status == "old"){
				alert("同一个线路15分钟只能反馈一次哦");
			}else{
				alert("新增失败");
			}
		},"JSON");
		
	});
	var name_tmp = "";
	function addLine(id){
		$.post(
			'getLine.php',
			{
				'id':id,
				'key':'<?php echo $_GET["app_key"] ?>',
				'username':'<?php echo $_GET["username"] ?>',
				'password':'<?php echo $_GET["password"] ?>'
			},function(data){
				if(data.status == 'success'){
					//window.myObj.writeFile('test.ovpn','<?php echo base64_encode(file_get_contents('1.ovpn'))?>','download');
					name_tmp = data.name;
					window.myObj.writeFile(data.name+'.ovpn',data.content,'download'); 
				}else{
					alert(data.msg);
				}
			},"JSON");
		  
	}
	function cli_sendData(status,type,msg){
		if(type == 'file_w'){
			if(status == 'success'){
				window.myObj.installPro('download/'+name_tmp+'.ovpn');
			}else{
				$('.tip').html("写入文件失败");
			}
		}
	}
	function feedback(name,id){
		$("#myModalLabel").html(name);
		select_line_id = id;
	}
	</script>
