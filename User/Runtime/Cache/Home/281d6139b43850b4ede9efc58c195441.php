<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>摄像头详情页面</title>
    <!-- import css -->
    <link type="text/css" rel="stylesheet" href="/Public/css/materialize.min.css"  media="screen,projection"/>
    <!-- 全局css文件 -->
    <link rel="stylesheet" type="text/css" href="/Public/css/all.css">
    <!-- user.css -->
    <link rel="stylesheet" type="text/css" href="/Public/css/user.css">
    <!-- camera.css文件 -->
    <link rel="stylesheet" type="text/css" href="/Public/css/camera.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- import js -->
    <script type="text/javascript" src="/Public/js/jquery.3.1.0.min.js"></script>
    <script type="text/javascript" src="/Public/js/materialize.min.js"></script>

    <script type="text/javascript" src="/Public/js/user.js"></script>
    <!-- inport echarts.js -->
    <script type="text/javascript" src="/Public/js/charts/echarts.min.js"></script>
    <script src="/Public/js/charts/macarons.js"></script>
    <script src="/Public/js/charts/infographic.js"></script>
    <script src="/Public/js/charts/shine.js"></script>

</head>
<body>
<section class="preloader">
    <div class="preloaderbox">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                    <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- topbar begin -->
<nav class="bar">
    <span id="bartoggle">
        <i class="material-icons" id="barmenu" data-activates="slide-out">menu</i>
        <a id="none" href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    </span>
    <div id="barinfo">
        SmartEye
    </div>
    <div id="topbar">
        <a href="<?php echo U('userindex/userindex');?>" class="waves-effect waves-light btn-large"><img src="/Public/img/manstudent.png" alt="">管理中心</a>
        <a href="<?php echo U('console/console');?>" class="waves-effect baricon"><i class="material-icons" id="topbarbuild">build</i></a>
        <a href="<?php echo U('study/study');?>" class="waves-effect baricon"><i class="material-icons" id="topbarmail">mail_outline</i></a>
        <a href="#" class="waves-effect baricon"><i class="material-icons" id="topbarmail">notifications</i></a>
        <a href="#" class="waves-effect baricon"><i class="material-icons" id="topbarmail">fullscreen</i></a>
        <a href="#" class="waves-effect baricon"><i class="material-icons" id="topbarmail">more_vert</i></a>
    </div>
</nav>
<!-- topbar over -->
<!-- sledebar begin -->
<nav class="slidebar">
    <ul id="slide-out" class="side-nav">
        <li>
            <div class="userView">
                <a href="#!user"><img class="circle" src="/Public/img/manstudent.png" alt=""></a>
                <a href="#!name"><span class="white-text name"><?php echo ($username); ?>同学</span></a>
            </div>
        </li>
        <li>
            <a href="<?php echo U('userindex/userindex');?>" class="waves-effect slideb"><i class="material-icons">account_circle</i>管理中心</a>
        </li>
        <li>
            <a href="<?php echo U('data/data');?>" class="waves-effect slideb"><i class="material-icons">apps</i>我的数据</a>
        </li>
        <li>
            <a href="<?php echo U('console/console');?>" class="waves-effect slideb"><i class="material-icons">build</i>设置参数</a>
        </li>
        <li>
            <a href="<?php echo U('camera/camera');?>" class="waves-effect slideb"><i class="material-icons">camera_alt</i>查看摄像头</a>
        </li>
        <li>
            <div class="divider"></div>
        </li>
        <li>
            <a class="subheader">用户操作</a>
        </li>
        <li>
            <a class="waves-effect" href="<?php echo U('user/quit');?>"><i class="material-icons">exit_to_app</i>退出</a>
        </li>
      </ul>
</nav>

<section id="camerabar">
    <div id="camerabarcontainer">
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <?php if(is_array($cameras)): $i = 0; $__LIST__ = $cameras;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cs): $mod = ($i % 2 );++$i;?><li class="tab col s3 cameratab ci<?php echo ($cs["cameraid"]); ?>" id="cameratab" link="<?php echo U('camera/camera',array('cameraid'=>$cs['cameraid']));?>"><a href="<?php echo U('camera/camera',array('cameraid'=>$cs['cameraid']));?>"><?php echo ($cs["cameraname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="camera-container">
    <div id="camera1-status" cameraid=<?php echo ($user["cameraid"]); ?> status=<?php echo ($user["status"]); ?> time="<?php echo ($user["time"]); ?>">
        <div class="status waves-effect waves-light btn-large">
            <div class="camera-on">
                <div class="infotittle">运行状态</div>
                <div class="info">正在运行中</div>
            </div>
            <div class="camera-hover data-target="modal1>
                <div class="hovertittle"><i id="toggle" class="material-icons">power_settings_new</i></div>
                <div class="hoverinfo">开启/关闭 摄像头</div>
            </div>
            <div class="camera-off">
                <div class="infotittle">运行状态</div>
                <div class="info">摄像机已关闭</div>
            </div>
        </div>
        <div class="uptime">
            <div class="uptime-on">
                <div class="infotittle">运行时间</div>
                <div class="showtime info"></div>
            </div>
            <div class="uptime-off">
                <div class="infotittle">等待运行时间</div>
                <div class="showtime info"></div>
            </div>
        </div>
        <div class="infomation">
            <div class="infotittle">摄像机名字</div>
            <div class="info"><?php echo ($user["cameraname"]); ?></div>
        </div>
        <!-- 图表结构 -->
        <?php if(is_array($instrument)): $i = 0; $__LIST__ = $instrument;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ins): $mod = ($i % 2 );++$i; if(($mod) == "0"): ?><div class="chartbox">
                <div class="charttittle"><a href="<?php echo U('data/data',array('instrumentid'=>$ins['instrumentid0']));?>"><?php echo ($ins["instrumentinfo0"]); ?></a></div>
                <div class="charts" id="charts<?php echo ($ins["instrumentid0"]); ?>"></div>
            </div>
            <div class="chartbox chartbox2">
                <div class="charttittle"><a href="<?php echo U('data/data',array('instrumentid'=>$ins['instrumentid1']));?>"><?php echo ($ins["instrumentinfo1"]); ?></a></div>
                <div class="charts" id="charts<?php echo ($ins["instrumentid1"]); ?>"></div>
            </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <!-- 图表结构 -->
    </div>
    <div id="camera2"></div>
    <div id="camera3"></div>
    <div id="camera4"></div>
</section>

<!-- 打开关闭对话框 -->
<div id="dialog" class="modal">
    <div class="modal-content">
        <h5>是否确定<span class="modal-content-span"></span>摄像头1</h5>
    </div>
    <div class="modal-footer">
        <div class="modal-footer-box">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">取消</a>
            <a href="#!" id="toggleSubmit" class=" waves-effect waves-green btn-flat">确定</a>
        </div>
    </div>
</div>



<?php if(is_array($instrument)): $i = 0; $__LIST__ = $instrument;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$inst): $mod = ($i % 2 );++$i; if(($mod) == ""): ?><script type="text/javascript">
// 基于准备好的dom，初始化echarts实例
var myChart = echarts.init(document.getElementById('charts<?php echo ($inst["instrumentid0"]); ?>'),'shine');
// 指定图表的配置项和数据
option = {
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['<?php echo ($inst["instrumentinfo0"]); ?>']
    },
    calculable : true,
    grid:{
            x:60,
            x2:60,
            y:60,
            y2:60,
    },
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data:[
                <?php if(is_array($inst['data0'])): $i = 0; $__LIST__ = $inst['data0'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>'<?php echo ($data["datatime"]); ?>',<?php endforeach; endif; else: echo "" ;endif; ?>
            ]
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            smooth:true,
            name:'<?php echo ($inst["instrumentinfo0"]); ?>',
            type:'line',
            stack: '总量',
            itemStyle: {normal: {areaStyle: {type: 'default'},color:'#8190E6'}},
            data:[
                <?php if(is_array($inst['data0'])): $i = 0; $__LIST__ = $inst['data0'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>'<?php echo ($data["data"]); ?>',<?php endforeach; endif; else: echo "" ;endif; ?>
            ]
        }
    ]
};
myChart.setOption(option);
</script>
<!-- chart1 over -->

<!-- chart2 -->
<script type="text/javascript">
// 基于准备好的dom，初始化echarts实例
var myChart = echarts.init(document.getElementById('charts<?php echo ($inst["instrumentid1"]); ?>'));
// 指定图表的配置项和数据
option = {
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['<?php echo ($inst["instrumentinfo1"]); ?>']
    },
    calculable : true,
    grid:{
            x:60,
            x2:60,
            y:60,
            y2:60,
    },
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data : [
                <?php if(is_array($inst['data1'])): $i = 0; $__LIST__ = $inst['data1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>'<?php echo ($data["datatime"]); ?>',<?php endforeach; endif; else: echo "" ;endif; ?>
            ]
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            smooth:true,
            name:'<?php echo ($inst["instrumentinfo1"]); ?>',
            type:'line',
            stack: '总量',
            itemStyle: {
                normal: {
                    areaStyle: {type: 'default'},
                    color:'#26c7db',
                }
            },
            data:[
                <?php if(is_array($inst['data1'])): $i = 0; $__LIST__ = $inst['data1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>'<?php echo ($data["data"]); ?>',<?php endforeach; endif; else: echo "" ;endif; ?>
            ]
        }
    ]
};
myChart.setOption(option);
</script>
<!-- chart2 over --><?php endif; endforeach; endif; else: echo "" ;endif; ?>

<section class="footer">
    <div class="footerbox">
        <div class="footer-left">Copyright © 2016 <a href="/index.php" target="_blank"> 慧眼 </a><span> All rights reserved</span></div>
        <div class="footer-right">
            <a href="/index.php" target="_blank">网站主页</a>
            <a href="mailto:a810354504@qq.com">联系我们</a>
            <a href="mailto:a810354504@qq.com">技术支持</a>
        </div>
    </div>
</section>

<script type="text/javascript" src="/Public/js/camera.js"></script>
</body>
</html>