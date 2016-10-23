<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>console</title>
    <!-- import css -->
    <link type="text/css" rel="stylesheet" href="/Public/css/materialize.min.css"  media="screen,projection"/>
    <!-- 全局css文件 -->
    <link rel="stylesheet" type="text/css" href="/Public/css/all.css">
    <!-- index css文件 -->
    <link rel="stylesheet" type="text/css" href="/Public/css/console.css">
    <link href="http://materializecss.com/extras/noUiSlider/nouislider.css" rel="stylesheet">
    
    <!-- import js -->
    <script type="text/javascript" src="/Public/js/jquery.3.1.0.min.js"></script>
    <script type="text/javascript" src="/Public/js/materialize.min.js"></script>

    <script src="http://materializecss.com/extras/noUiSlider/nouislider.js"></script>

    <!-- import baidumap.js -->
    <!-- <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=4BGoLtyp0GjSeSLuCuMIHiLb8uusudm7"></script> -->

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
<section id="camerabar">
    <div id="camerabarcontainer">
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <?php if(is_array($cameras)): $i = 0; $__LIST__ = $cameras;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cs): $mod = ($i % 2 );++$i;?><li class="tab col s3 cameratab ci<?php echo ($cs["cameraid"]); ?>" id="cameratab" link="<?php echo U('console/console',array('cameraid'=>$cs['cameraid']));?>"><a href="<?php echo U('console/console',array('cameraid'=>$cs['cameraid']));?>"><?php echo ($cs["cameraname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="form1">
    <div class="content">
        <div class="tittle">设置参数</div>
        <div class="camera-tittle" cameraid=<?php echo ($camera["cameraid"]); ?>><?php echo ($camera["cameraname"]); ?></div>
        <div class="clear"></div>
        <form class="simpletext" action="<?php echo U('console/data');?>" method="post">
            <div class="row">
            <div class="formtittle">摄像机简单信息描述</div>
                <div class="inputbox">
                    <div class="input-field col">
                        <i class="material-icons prefix inputicon">person</i>
                        <input name="cameraname" id="cameraname" type="text" value="摄像机1" class="simpleinput validate active">
                        <label for="cameraname">摄像机名字</label>
                    </div>
                    <div class="clear"></div>
                    <div class="input-field col">
                        <i class="material-icons prefix inputicon">info</i>
                        <input name="camerainfo" id="camerainfo" class="simpleinput" type="text" class="validate active">
                        <label for="camerainfo">摄像头描述信息</label>
                    </div>
                    <div class="clear"></div>

                    <div class="input-field col">
                        <i class="material-icons prefix inputicon">alarm</i>
                        <input name="freq" id="freq" type="text" class="simpleinput freqinput" class="validate active">
                        <label for="freq">一次运行等待时长</label>
                        <div class="selectbox">
                            <select>
                                <option value="1">秒</option>
                                <option value="2">分钟</option>
                                <option value="3">小时</option>
                            </select>
                        </div>
                        <i class="tooltipped material-icons helpicon prefix" data-position="right" data-delay="50" data-tooltip="设置每隔多长时间取图像点">help</i>
                    </div>
                    <div class="clear"></div>
                    <div class="input-field col">
                        <i class="material-icons prefix inputicon">location_on</i>
                        <input value="请在右侧地图选择地点" disabled id="location" type="text" class="simpleinput" class="validate active">
                        <label for="icon_telephone">GPS位置</label>
                        <i class="tooltipped material-icons helpicon prefix" data-position="right" data-delay="50" data-tooltip="设置摄像机GPS位置">help</i>
                    </div>
                </div>
                <div id="baidumap"></div>
            </div>
            <div class="buttonbox">
                <button id="form1submit" class="btn waves-effect waves-light blue lighten-2 submit" type="submit" name="action">提交</button>
                <button id="form1reset" class="btn waves-effect waves-teal" type="reset" name="action">重置</button>
            </div>
        </form>
    </div>
</section>
<section class="showcamerabox">
    <div class="content2">
        <div class="showcamera">
            <div class="form2tittle">设置需要分析的数据</div>
            <div class="cameradata c1">
                <div class="cdtittle">甲醛含量</div>
                <div class="cdinfo">
                    位于厦门大学嘉庚学院北区测试甲醇的含量阿斯蒂芬
                </div>
                <div class="operate">
                    <div class="set"><i class="material-icons hovericon">settings</i></div>
                    <div class="delete"><i class="material-icons hovericon">delete</i></div>
                </div>
            </div>
            <div class="cameradata c2">
                <div class="cdtittle">二氧化氮含量</div>
                <div class="cdinfo">
                    位于厦门大学嘉庚学院北区测试甲醇的含量阿斯蒂芬
                </div>
                <div class="operate">
                    <div class="set"><i class="material-icons hovericon">settings</i></div>
                    <div class="delete"><i class="material-icons hovericon">delete</i></div>
                </div>
            </div>
            <div class="cameradata c3">
                <div class="cdtittle">二氧化碳含量</div>
                <div class="cdinfo">
                    位于厦门大学嘉庚学院北区测试甲醇的含量爱上
                </div>
                <div class="operate">
                    <div class="set"><i class="material-icons hovericon">settings</i></div>
                    <div class="delete"><i class="material-icons hovericon">delete</i></div>
                </div>
            </div>
            <div class="line"></div>
            <div class="cameradata c1">
                <div class="cdtittle">二氧化硫含量</div>
                <div class="cdinfo">
                    位于厦门大学嘉庚学院北区测试甲醇的含量算法
                </div>
                <div class="operate">
                    <div class="set"><i class="material-icons hovericon">settings</i></div>
                    <div class="delete"><i class="material-icons hovericon">delete</i></div>
                </div>
            </div>
            <div class="addcd c2">
                <i class="material-icons addicon" >add_circle_outline</i>
            </div>
        </div>
        <div class="line"></div>
    </div>
</section>






<!-- 数据删除对话框 -->
<div id="deletedialog" class="modal">
    <div class="modal-content">
        <h5>是否确定删除数据</h5>
    </div>
    <div class="modal-footer">
        <div class="modal-footer-box">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">取消</a>
            <a href="#!" id="deleteSubmit" class=" waves-effect waves-green btn-flat">确定</a>
        </div>
    </div>
</div>

<!-- 更改/添加数据对话框 -->
<div class="modal" id="set">
    <div class="modalbody">
        <div class="mdtitle">截图</div>
        <div class="imagebox">
            <img draggable="false" class="z-depth-1 realimg" src="/Public/img/pic3.bmp">
            <div class="cutborder"></div>
        </div>
        <div class="mdnav">
            <div class="step nowstep">截图</div>
            <div class="step">灰度</div>
            <div class="step">二值</div>
            <div class="step">数据名称</div>
            <div class="pre">
                <div class="preloader-wrapper small mysmall active">
                    <div class="spinner-layer spinner-green-only">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle">
                            </div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="realset">
            <div class="stepbox">
                <div class="step1">
                    <div class="cutbox z-depth-1 waves-effect waves-light">
                        <i class="material-icons">content_cut</i>
                    </div>
                    <div class="cutboxinfo bluez-depth-1">
                        <br><br>
                        点击上方截图按钮之后请在左侧截取需要解析的数字
                    </div>
                </div>
                <div class="step2">
                    <div class="step2box">
                        <p>
                            <input name="group1" type="radio" id="test1" />
                            <label for="test1">平均值</label>
                        </p>
                        <p>
                            <input name="group1" type="radio" id="test2" />
                            <label for="test2">国际标准</label>
                        </p>
                        <p>
                            <input name="group1" type="radio" id="test3" />
                            <label for="test3">自定义</label>
                        </p>
                        <!-- 滑块 -->
                        <p class="range-field" id="test5">
                            
                        </p>
                        <script>
                        var slider = document.getElementById('test5');
                          noUiSlider.create(slider, {
                           start: [20, 80],
                           connect: true,
                           step: 1,
                           range: {
                             'min': 0,
                             'max': 100
                           },
                           format: wNumb({
                             decimals: 0
                           })
                          });
                        </script>
                        <p class="range-field">
                            <input type="range" id="test6" min="0" max="100" />
                        </p>
                        <p class="range-field">
                            <input type="range" id="test7" min="0" max="100" />
                        </p>

                    </div>
                </div>
                <div class="step3"></div>
                <div class="step4"></div>
            </div>
        </div>

        <div class="stepcarousel">
            <a class="waves-effect waves-light btn grey lighten-3 cancel">取消</a>
            <a class="disabled waves-effect waves-light btn blue lighten-2" id="last">上一步</a>
            <a class="waves-effect waves-light btn blue darken-2" id="next">下一步</a>
        </div>
    </div>
</div>








<script type="text/javascript" src="/Public/js/console.js"></script>
</body>
</html>