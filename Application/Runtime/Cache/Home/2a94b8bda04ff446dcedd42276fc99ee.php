<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title>慧眼 | &nbsp;SmartEye </title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" href="/Public/css/animate.min.css">
	<link rel="stylesheet" href="/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/css/templatemo-style.css">
</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
	<div class="preloader">
		<div class="sk-spinner sk-spinner-rotating-plane"></div>
	</div>
	<nav class="navbar navbar-fixed-top custom-navbar" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">慧眼</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#home" class="smoothScroll">主页</a></li>
					<li><a href="#about" class="smoothScroll">系统介绍</a></li>
					<li><a href="#service" class="smoothScroll">服务项目</a></li>
					<li><a href="#portfolio" class="smoothScroll">应用情景</a></li>
					<li><a href="#contact" class="smoothScroll">联系我们</a></li>
					<li><a href="/user.php">注册</a></li>
					<li><a href="/user.php">登陆</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- start home -->
	<section id="home">
		<div class="overlay">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<img src="/Public/img/index/slider/1.jpg" alt="Slide 1">
						<div class="slider-caption">
							<div class="templatemo_homewrapper">
								<h1 class="wow bounce">慧眼   SmartEye</h1>
								<h3>&nbsp;</h3>
								<!-- <h2>
									<span class="wow fadeIn" data-wow-delay="0.3s">WEB,</span>
									<span class="wow fadeIn" data-wow-delay="0.6s">MOBILE,</span>
									<span class="wow fadeIn" data-wow-delay="0.9s">UX DESIGN</span>
								</h2> -->
								<h3 class="wow bounceIn">帮助您便捷的采集有效数据，实时传输分析数据，实现数字化的智能监控</h3>
								<h3>&nbsp;</h3>
								<a href="/user.php" class="templatemo-slider-btn btn btn-default">登陆系统</a>
							</div>
						</div>
					</li>
					<li>
						<img src="/Public/img/index/slider/2.jpg" alt="Slide 2">
						<div class="slider-caption">
							<div class="templatemo_homewrapper">
								<h1>多终端查看数据</h1>
								<h2>&nbsp;</h2>
                            	<!-- <h2>
									<span class="wow fadeIn" data-wow-delay="0.3s">响应式网页,</span>
									<span class="wow fadeIn" data-wow-delay="0.6s">安卓客户端,</span>
									<span class="wow fadeIn" data-wow-delay="0.9s">微信公众号</span>
								</h2> -->
								<h3>响应式网页，安卓客户端，微信公众号查看</h3>
								<h3>&nbsp;</h3>
								<a href="#about" class="smoothScroll templatemo-slider-btn btn btn-default">安卓客户端</a>
								<a href="#about" class="smoothScroll templatemo-slider-btn btn btn-default">微信公众号</a>	
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end home -->
	<!-- start about -->
	<!-- <section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wow bounceIn">
					<h2>系统介绍</h2>
					<hr>
					<h4>智能天眼系统介绍说明</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 wow fadeInLeft templatemo-about-left" data-wow-delay="0.3s">
					<h3 class="about-title">Studio History</h3>
					<p>Phasellus tempus malesuada congue. Sed id est tincidunt, iaculis nulla vel, sodales metus. Morbi interdum accumsan augue, in accumsan neque lacinia sed. Fusce cursus eu ligula ut gravida. Ut tristique hendrerit bibendum. Suspendisse euismod sit amet quam et luctus.</p>
                    <p>Nulla viverra diam sed justo vehicula, non venenatis massa gravida. Nunc efficitur et quam non tempor. Nullam nec nisl eget est ultrices elementum nec vel nisl. Cras vestibulum nisl vel justo tempor, ut lacinia est accumsan.</p>
				</div>
				<div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0.3s">
					<span class="text-uppercase">BOOTSTRAP 100%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
					</div>
					<span class="text-uppercase">HTML5 &AMP; CSS3 90%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
					</div>
					<span class="text-uppercase">Wordpress 65%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<div class="about-wrapper">
						<img src="/Public/img/index/team-img-1.png" class="img-responsive" alt="about img">
						<h3>Cindy Davis</h3>
						<h5>Founder &amp; Director</h5>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<div class="about-wrapper">
						<img src="/Public/img/index/team-img-2.png" class="img-responsive" alt="about img">
						<h3>Jenny Meno</h3>
						<h5>Creative Manager</h5>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<div class="about-wrapper">
						<img src="/Public/img/index/team-img-3.png" class="img-responsive" alt="about img">
						<h3>Catherine Barkley</h3>
						<h5>Co-Founder &amp; Designer</h5>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- end about -->
	<!-- start service -->
	<section id="service">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow bounceIn">
					<h2>服务项目</h2>
					<hr>
					<h4>专业的技术团队，为用户提供最优体验</h4>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="media">
						<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
							<i class="material-icons fa">settings</i>
						</div>
						<div class="media-body">
							<h3 class="media-heading">运营维护</h3>
							<p>建立数字图像处理和仪表数据的自动识别相结合，实现远程监控和实时读读数</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="media">
						<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
							<i class="material-icons fa">phonelink</i>
						</div>
						<div class="media-body">
							<h3 class="media-heading">移动终端</h3>
							<p>网页响应式设计加之安卓客户端和微信让用户随时随地查看仪表的实时数据</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="media">
						<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
							<i class="material-icons fa">camera_alt</i>
						</div>
						<div class="media-body">
							<h3 class="media-heading">图像采集</h3>
							<p>我们通过摄像头实现对仪表数据的捕捉避免人眼的视觉疲劳和误差提高整体的工作效率</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="media">
						<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
							<i class="material-icons fa">show_charts</i>
						</div>
						<div class="media-body">
							<h3 class="media-heading">数据分析</h3>
							<p>我们将采集到的数据进行专业分析以图表的方式向用户呈现最具效力的数据</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end service -->
	<!-- start portfolio -->
	<section id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow bounceIn">
						<h2 class="wow bounceIn">应用情景</h2>
						<hr>
						<h4>可以用在N种不同的场合让工作更有效率</h4>
					</div>
					<div class="iso-section wow fadeIn" data-wow-delay="0.6s">

						<ul class="filter-wrapper clearfix">
							<li><a href="#" data-filter="*" class="selected opc-main-bg">所有情景</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".graphic">野外数据采集</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".photoshop">野外环境监测</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".wallpaper">生产车间检测</a></li>
						</ul>

						<div class="iso-box-section">
							<div class="iso-box-wrapper col4-iso-box">

								<div class="iso-box graphic col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="/Public/img/index/snowdatacoll.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<h4>标题</h4>
												<p>啊实打实大法师法师法师法撒的发生的发顺丰阿斯顿发生啊沙发沙发</p>	
											</div>											
										</div>
									</div>
								</div>
								<div class="iso-box graphic wallpaper col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="/Public/img/index/outdoor1.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<h4>标题</h4>
												<p>啊实打实大法师法师法师法撒的发生的发顺丰阿斯顿发生啊沙发沙发</p>
											</div>
										</div>
									</div>
								</div>
								<div class="iso-box wallpaper col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="/Public/img/index/outdoor2.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<h4>标题</h4>
												<p>啊实打实大法师法师法师法撒的发生的发顺丰阿斯顿发生啊沙发沙发</p>
											</div>
										</div>
									</div>
								</div>
								<div class="iso-box graphic col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="/Public/img/index/fatory.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<h4>标题</h4>
												<p>啊实打实大法师法师法师法撒的发生的发顺丰阿斯顿发生啊沙发沙发</p>
											</div>
										</div>
									</div>
								</div>
								<div class="iso-box wallpaper col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="/Public/img/index/lab1.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<h4>标题</h4>
												<p>啊实打实大法师法师法师法撒的发生的发顺丰阿斯顿发生啊沙发沙发</p>
											</div>
										</div>
									</div>
								</div>
								<div class="iso-box graphic photoshop col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="/Public/img/index/fatory2.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<!-- <a href="#"><i class="material-icons fa">zoom_in</i></a>
												<a href="#"><i class="material-icons fa">link</i></a> -->
												<h4>标题</h4>
												<p>啊实打实大法师法师法师法撒的发生的发顺丰阿斯顿发生啊沙发沙发</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end portfolio -->
	<!-- start divider -->
	<!-- <div class="divider">
		<div class="overlay">
			<div class="container">
				<div class="row">
					<div class="divider-des">
						<h3 class="text-uppercase">The best minimal business one page ever</h3>
						<p>It is fully responsive, clean, modern, creative, and minimal.</p>
						<button class="btn btn-default text-uppercase">Download</button>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end divider -->
	<!-- start contact -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow bounceIn">
						<h2 class="wow bounceIn">联系我们</h2>
						<hr>
						<h4>快和我们谈谈吧</h4>
					</div>					
					<form action="#" method="post" role="form">
						<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
							<input type="text" placeholder="姓名" class="form-control">
						</div>
						<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
							<input type="email" placeholder="邮箱" class="form-control">
						</div>
						<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
							<input type="text" placeholder="电话" class="form-control">
						</div>
						<div class="col-md-12 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
							<textarea class="form-control" rows="5" placeholder="相对我们说的话..."></textarea>
						</div>
						<div class="col-md-offset-3 col-sm-offset-3 col-sm-6 col-md-6 wow fadeIn" data-wow-delay="0.3s">
							<input type="submit" value="发送" class="form-control">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- end contact -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="social-icon wow fadeIn" data-wow-delay="0.3s">
						<!-- <li><a href="#"><i class="material-icons fa">zoom_in</i></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-instagram"></a></li> -->
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- tongji.baidu.com -->
	<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?1378be71cc0a3031a17d616b3cc5e406";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>
	<!-- tongji.baidu.com -->
	<script src="/Public/js/indexjquery.js"></script>
	<script src="/Public/js/bootstrap.min.js"></script>
	<script src="/Public/js/jquery.flexslider.js"></script>
	<script src="/Public/js/isotope.js"></script>
	<script src="/Public/js/imagesloaded.min.js"></script>
	<script src="/Public/js/smoothscroll.js"></script>
	<script src="/Public/js/wow.min.js"></script>
	<script src="/Public/js/custom.js"></script>
</body>
</html>