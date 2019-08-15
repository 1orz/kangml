<?php
$i = $_GET['i'];
$rs=$DB->get_row("SELECT * FROM website WHERE `name` = $i");
$logo=$rs['logo'];
$webtitle=$rs['title'];
$qq=$rs['qq'];
$app1=$rs['app1'];
$app2=$rs['app2'];
$ipinfo=$rs['ipinfo'];
$appleid1=$rs['appleid1'];
$appleps1=$rs['appleps1'];
$appleid2=$rs['appleid2'];
$appleps2=$rs['appleps2'];
$appleid3=$rs['appleid3'];
$appleps3=$rs['appleps3'];
$and_img1=$rs['and_img1'];
$and_img2=$rs['and_img2'];
$and_img3=$rs['and_img3'];
$and_img4=$rs['and_img4'];
$jia1=$rs['jia1'];
$jia2=$rs['jia2'];
$jia3=$rs['jia3'];
$jia4=$rs['jia4'];

$bn=$DB->get_row("SELECT * FROM banner");
$img1=$bn['img1'];
$tit1=$bn['tit1'];
$info1=$bn['info1'];
$img2=$bn['img2'];
$tit2=$bn['tit2'];
$info2=$bn['info2'];
$img3=$bn['img3'];
$tit3=$bn['tit3'];
$info3=$bn['info3'];

    //赠送新注册用户流量
    $rs=$DB->get_row("SELECT * FROM auth_config");
    $reg_cash_con=round($rs['reg_cash']/1024/1024)."MB";
    $user_endtime_con =$rs['user_endtime'];

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $webtitle ?> - <?php echo $title ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="<?php echo $webtitle ?>,<?php echo $webtitle ?>广东流量,<?php echo $webtitle ?>全国流量特价,<?php echo $webtitle ?>流量包月,<?php echo $webtitle ?>4G流量" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Simple Line Icons -->
  <link rel="stylesheet" href="css/simple-line-icons.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <link rel="stylesheet" href="css/style_1.css">

  <!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
  <link rel="stylesheet" id="theme-switch" href="css/style_1.css">
  <!-- End demo purposes only -->

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
