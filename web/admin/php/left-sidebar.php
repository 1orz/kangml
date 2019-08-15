<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div><img src="../plugins/images/user.jpg" alt="user-img" class="img-circle"></div> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 管理员 <span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                    <li><a href="passwd.php"><i class="ti-settings"></i> 修改密码</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="login.php?logout"><i class="fa fa-power-off"></i> 注销</a></li>
                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">
            
            <li class="nav-small-cap m-t-10">--- 主菜单</li>
            <li> <a href="index.php" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="a"></i> <span class="hide-menu"> 仪表盘 <span class="fa arrow"></span></span></a>
            </li>
           <?php
            include("../api.inc.php");
            $hostnum=$DB->count("SELECT count(*) from `auth_fwq` WHERE 1");
            $qqnum=$DB->count("SELECT count(*) from `openvpn` WHERE 1");
            $dailinum=$DB->count("SELECT count(*) from `auth_daili` WHERE 1");
           ?>
            <li> <a href="forms.php" class="waves-effect"><i data-icon="E" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">主机<span class="fa arrow"></span> <span class="label label-rouded label-custom pull-right"><?php echo $hostnum; ?></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a class="" href="fwqlist.php">服务器列表</a></li>
                    <li><a class="" href="addfwq.php">添加服务器</a></li>
                    <li><a class="" href="online.php">在线人数</a></li>
                    <li><a href="float.php"> 限速管理</a></li>
                    <li><a href="log.php"> 系统日志</a></li>
                    <li><a href="read.php"> 登录日志</a></li>
                    <li><a href="sysinfo.php"> 监控日志</a></li>
                    
                </ul>
            </li>
            <li> <a href="#" class="waves-effect"><i data-icon="6" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">账号<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right"><?php echo $qqnum; ?></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a class="" href="qqlist.php">账号列表</a></li>
                    
                    <li><a href="javascript:void(0)" class="waves-effect">添加账号<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="" href="addzh.php">添加一个</a></li>
                            <li><a class="" href="padd.php">批量添加</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">代理<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right"><?php echo $dailinum; ?></span></span></a>
                <ul class="nav nav-second-level">
                        <li><a href="daili.php"> 代理列表</a></li>
                        <li><a href="weblist.php"> 分站列表</a></li>
                        <li><a href="dlkm.php"> 代理卡密</a></li>
                        <li><a href="dlconfig.php"> 代理设置</a></li>
                </ul>
            </li>
            <li> <a href="tables.php" class="waves-effect"><i data-icon="&#xe078;" class="linea-icon linea-aerrow fa-fw"></i> <span class="hide-menu">商品<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="kmlist.php"> 商品列表</a></li>
                    <li><a href="tclist.php"> 套餐列表</a></li>
                </ul>
            </li>
            <li> <a href="tables.php" class="waves-effect"><i data-icon="&#xe028;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">线路<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="addline.php"> 添加线路</a></li>
                    <li><a href="linelist.php"> 线路列表</a></li>
                    <li><a href="kangmlline.php"> 线路推送</a></li>
                    <li><a href="linefl.php"> 分类管理</a></li>
                    <li><a href="zsset.php"> 证书设置</a></li>
                    <li><a href="dns.php"> DNS拦截</a></li>
                </ul>
            </li>
            
            <li> <a href="../app_api/" class="waves-effect"><i data-icon="&#xe014;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">APP <span class="fa arrow"></span></span></a>
                 <ul class="nav nav-second-level">
                         <li><a href="feedback.php"> 线路反馈</a></li>
                         <li><a href="addgg.php"> 添加公告</a></li>
                         <li><a href="gglist.php">公告管理</a></li>
                         <!--<li><a href="makeapp.php"> 安卓生成</a></li>-->
                         <li><a href="appconfig.php">  安卓设置</a></li>
                          <li><a href="appupdate.php">  升级推送</a></li> 
                </ul> 
            </li>
            <li><a href="login.php?logout" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">注销</span></a></li>
            <li class="nav-small-cap">--- 服务</li>
<!--             <li><a href="http://www.kangml.com/kefu" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">P</span></a></li> -->
            <li><a href="../phpmyadmin" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">数据库</span></a></li><li>
            <li><a href="http://blog.kangml.com" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">博客</span></a></li>
        </ul>
    </div>
</div>
<!-- Left navbar-header end