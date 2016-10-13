<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zFanVideo | Free Video Html5 Templates</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="{{asset('resources/views/home/css/zerogrid.css')}}">
	<link rel="stylesheet" href="{{asset('resources/views/home/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('resources/views/home/css/menu.css')}}">
	<!-- Owl Carousel Assets -->
	<link href="{{asset('resources/views/home/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/css/owl.theme.css')}}" rel="stylesheet">
	<!-- Custom Fonts -->
    <link href="{{asset('resources/views/home/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body id="wrapper" >
<div class="wrap-body">
	
	<!--////////////////////////////////////Header-->
	<header>
		<div class="wrap-header">
			<div class="zerogrid">
				<div class="row">
					<img src="{{asset('resources/views/home/images/logo1.png')}}" />
					<ul class="quick-link">
						<li><a href="#" title="Upload Video"><i class="fa fa-upload"></i></a></li>
						<li><a href="#" title="Log in"><i class="fa fa-user"></i></a></li>
						<li><a href="#" title="Warning"><i class="fa fa-bell"></i></a></li>
					</ul>
					<ul class="social">
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bottom">
			<div class="zerogrid">
				<div class="row">
					<span>合作平台：<a href="http://www.cssmoban1.com/" >斗鱼TV</a>　<a href="http://www.cssmoban2.com/" >熊猫TV</a>　<a href="http://www.cssmoban3.com/" >全民TV</a>　<a href="http://www.cssmoban4.com/" >熊猫TV</a>　<a href="http://www.cssmoban5.com/" >虎牙TV</a></span>
				</div>
			</div>
		</div>
    </header>
	<!--////////////////////////////////////Menu-->
	<a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
		<ul class="clearfix">
			<li class="colour-1"><a href="{{url('/cate/')}}" target="_blank">英雄联盟</a></li>
			<li class="colour-2"><a href="gallery.html">炉石传说</a></li>
			<li class="colour-3"><a href="gallery.html">主机游戏</a></li>
			<li class="colour-4"><a href="gallery.html">全明星秀</a></li>
			<li class="colour-5"><a href="gallery.html">魔兽世界</a></li>
			<li class="colour-6"><a href="gallery.html">守望先锋</a></li>
			<li class="colour-7"><a href="gallery.html">手游</a></li>
			<li class="colour-8"><a href="gallery.html">更多精彩</a></li>
		</ul>
    </nav>
	<!--////////////////////////////////////Container-->
	<section id="container" class="index-page">
		<div class="wrap-container zerogrid">
			<!------------------------------------->
			<div class="row">
				<div class="header">
					<h2>热门直播</h2>
				</div>
                {!! $users->and_room !!}
                <!----------直播内容------------>

                
            
			<div class="row">
				<div id="main-content" class="col-2-3">
					<div class="wrap-content">
						<section class="vid-tv">
							<div class="header">

								<h2>英雄联盟</h2>
							</div>
							<div class="row">
								<div id="owl-demo-1" class="owl-carousel">
								@foreach($data as $d)
									<div class="item wrap-vid">
										<div class="zoom-container">
											<a href="www.baidu.com" target="_blank">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
												<img src="{{$d->persons_thumb}}" />
											</a>
										</div>
										<h3 class="vid-name"><a href="#">{{$d->persons_title}}</a></h3>
										<div class="info">
											<h5>By <a href="#">{{$d->persons_name}}</a></h5>
											<span><i class="fa fa-calendar"></i>11/9/2016</span> 
											<span><i class="fa fa-heart"></i>{{$d->perspns_views}}</span>
										</div>
									</div>
								@endforeach	
								</div>
							</div>
						</section>
						
						<section class="vid-sport">
							<div class="header">
								<h2>炉石传说</h2>
							</div>
							
							<div class="row"><!--Start Box-->
								<div id="owl-demo-2" class="owl-carousel">
								@foreach($data as $d)
									<div class="item wrap-vid">
										<div class="zoom-container">
											<a href="www.baidu.com" target="_blank">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
												<img src="{{$d->persons_thumb}}" />
											</a>
										</div>
										<h3 class="vid-name"><a href="#">{{$d->persons_title}}</a></h3>
										<div class="info">
											<h5>By <a href="#">{{$d->persons_name}}</a></h5>
											<span><i class="fa fa-calendar"></i>11/9/2016</span> 
											<span><i class="fa fa-heart"></i>{{$d->perspns_views}}</span>
										</div>
									</div>
								@endforeach	
								</div>
							</div>
						</section>
						
						<section class="vid-music">
							<div class="header">
								<h2>主机游戏</h2>
							</div>
							<div class="row"><!--Start Box-->
								<div id="owl-demo-3" class="owl-carousel">
								@foreach($data as $d)
									<div class="item wrap-vid">
										<div class="zoom-container">
											<a href="www.baidu.com" target="_blank">
												<span class="zoom-caption">
													<i class="icon-play fa fa-play"></i>
												</span>
												<img src="{{$d->persons_thumb}}" />
											</a>
										</div>
										<h3 class="vid-name"><a href="#">{{$d->persons_title}}</a></h3>
										<div class="info">
											<h5>By <a href="#">{{$d->persons_name}}</a></h5>
											<span><i class="fa fa-calendar"></i>11/9/2016</span> 
											<span><i class="fa fa-heart"></i>{{$d->perspns_views}}</span>
										</div>
									</div>
								@endforeach	
								</div>
							</div>
						</section>
					</div>
				</div>
				<div id="sidebar" class="col-1-3">
					<form id="form-container" action="">
						<!--<input type="submit" id="searchsubmit" value="" />-->
						<a class="search-submit-button" href="javascript:void(0)">
							<i class="fa fa-search"></i>
						</a>
						<div id="searchtext">
							<input type="text" id="s" name="s" placeholder="搜索主播..">
						</div>
					</form>
					<!---- Start Widget ---->
					<div class="widget wid-post">
						<div class="wid-header">
							<h5>守望先锋</h5>
						</div>
						<div class="wid-content">
							<div class="post wrap-vid">
						@foreach($data2 as $d)
								<div class="zoom-container">
									<a href="single.html">
										<span class="zoom-caption">
											<i class="icon-play fa fa-play"></i>
										</span>
										<img src="{{$d->persons_thumb}}" />
									</a>
								</div>
								<div class="wrapper">
									<h5 class="vid-name"><a href="#">{{$d->persons_title}}</a></h5>
									<div class="info">
										<h6>By <a href="#">{{$d->persons_name}}</a></h6>
										<span><i class="fa fa-calendar"></i>11/9/2016</span> 
										<span><i class="fa fa-heart"></i>{{$d->persons_views}}</span>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
					<!---- Start Widget ---->
					<div class="widget wid-news">
						<div class="wid-header">
							<h5>Top News</h5>
						</div>
						<div class="wid-content">
						@foreach($data3 as $d)
							<div class="row">
								<div class="wrap-vid">
									<div class="zoom-container">
										<a href="single.html">
											<span class="zoom-caption">
												<i class="icon-play fa fa-play"></i>
											</span>
											<img src="{{$d->persons_thumb}}" />
										</a>
									</div>
									<h3 class="vid-name">{{$d->persons_title}}</h3>
									<div class="info">
										<h5>By <a href="#">{{$d->persons_name}}</a></h5>
										<span><i class="fa fa-calendar"></i>11/9/2016</span> 
										<span><i class="fa fa-heart"></i>{{$d->persons_views}}</span>
									</div>
								</div>
							</div>
						@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--////////////////////////////////////Footer-->
	<footer>
		<div class="zerogrid top-footer">
			<div class="row">
				<div class="col-1-5">
					<a href="#"><img src="{{asset('resources/views/home/images/15.jpg')}}" /></a>
				</div>
				<div class="col-1-5">
					<a href="#"><img src="{{asset('resources/views/home/images/16.jpg')}}" /></a>
				</div>
				<div class="col-1-5">
					<a href="#"><img src="{{asset('resources/views/home/images/17.jpg')}}" /></a>
				</div>
				<div class="col-1-5">
					<a href="#"><img src="{{asset('resources/views/home/images/18.jpg')}}" /></a>
				</div>
				<div class="col-1-5">
					<a href="#"><img src="{{asset('resources/views/home/images/19.jpg')}}" /></a>
				</div>
			</div>
		</div>
		<div class="zerogrid wrap-footer">
			<div class="row">
				<div class="col-1-4 col-footer-1">
					<div class="wrap-col">
						<a href="index.html" class="logo"><img src="{{asset('resources/views/home/images/logo.png')}}" /></a>
						<p>一片静谧，细品直播。</p>
					</div>
				</div>
				<div class="col-1-4 col-footer-2">
					<div class="wrap-col">
						<h3>分类</h3>
						<ul>
						  <li>投影<a href="#"></a></li>
							<li><a href="#">直播</a></li>
							<li><a href="#">视频</a></li>
							<li><a href="#">音乐</a></li>
						</ul>
					</div>
				</div>
				<div class="col-1-4 col-footer-3">
					<div class="wrap-col">
						<h3>最近上传视频</h3>
						<ul>
							<li><a href="#">网络游戏</a></li>
							<li><a href="#">单机游戏</a></li>
							<li><a href="#">手机游戏</a></li>
							<li><a href="#">网页游戏</a></li>
						</ul>
					</div>
				</div>
				<div class="col-1-4 col-footer-4">
					<div class="wrap-col">
						<h3>照片墙</h3>
						<div class="row">
							<div class="col-1-4">
								<div class="wrap-col">
									<a href="#"><img src="{{asset('resources/views/home/images/6.jpg')}}" /></a>
									<a href="#"><img src="{{asset('resources/views/home/images/10.jpg')}}" /></a>
									<a href="#"><img src="{{asset('resources/views/home/images/13.jpg')}}" /></a>
								</div>
							</div>
							<div class="col-1-4">
								<div class="wrap-col">
									<a href="#"><img src="{{asset('resources/views/home/images/7.jpg')}}" /></a>
									<a href="#"><img src="{{asset('resources/views/home/images/11.jpg')}}" /></a>
									<a href="#"><img src="{{asset('resources/views/home/images/6.jpg')}}" /></a>
								</div>
							</div>
							<div class="col-1-4">
								<div class="wrap-col">
									<a href="#"><img src="{{asset('resources/views/home/images/8.jpg')}}" /></a>
									<a href="#"><img src="{{asset('resources/views/home/images/12.jpg')}}" /></a>
									<a href="#"><img src="{{asset('resources/views/home/images/10.jpg')}}" /></a>
								</div>
							</div>
							<div class="col-1-4">
								<div class="wrap-col">
									<a href="#"><img src="{{asset('resources/views/home/images/9.jpg')}}" /></a>
									<a href="#"><img src="{{asset('resources/views/home/images/13.jpg')}}" /></a>
									<a href="#"><img src="{{asset('resources/views/home/images/8.jpg')}}" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="zerogrid copyright">
			<div class="wrapper">© 2012-2016 广ICP备840312201号－1
			  <ul class="quick-link f-right">
				<li><a href="#">Copyright © 捷龙网络科技有限公司</a></li>
					
				</ul>
			</div>
		</div>
	</footer>

	<!-- Slider -->
	<script src="{{asset('resources/views/home/js/jquery-2.1.1.js')}}"></script>
	<script src="{{asset('resources/views/home/js/demo.js')}}"></script>
	<script src="{{asset('resources/views/home/js/classie.js')}}"></script>
	<!-- Carousel -->
	<script src="{{asset('resources/views/home/js/owl.carousel.js')}}"></script>
    <script>
    $(document).ready(function() {

      $("#owl-demo-1").owlCarousel({
        items : 4,
        lazyLoad : true,
        navigation : true
      });
	  $("#owl-demo-2").owlCarousel({
        items : 4,
        lazyLoad : true,
        navigation : true
      });
	  $("#owl-demo-3").owlCarousel({
        items : 4,
        lazyLoad : true,
        navigation : true
      });
    });
    </script>
</div>
</body></html>