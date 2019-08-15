<?php
require_once 'conn.php';
header("Content-type: text/html; charset=utf-8");
/*防止乱码*/
if (!isset($_POST['cid'])) {
	echo '缺少必要的参数';
	die;
}
$cid = (int)$_POST["cid"];
$result = db("line")->where(array("group"=>$cid))->select();
foreach($result as $row) {
	echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
}