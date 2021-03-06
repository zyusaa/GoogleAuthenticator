<!DOCTYPE html>
<html class="noIE" lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<title>童年</title>
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
		
		<link rel="stylesheet" href="../../css/minified.css">
		<link rel="stylesheet" href="../../css/jquery.nouislider.css">
		<link rel="stylesheet" href="../../css/owl.carousel.css">
		<link rel="stylesheet" href="../../css/owl.theme.css">
		<link rel="stylesheet" href="../../css/innerpage.css">
		<link rel="stylesheet" href="../../css/responsive.css">
		<script type="text/javascript" src="../../js/jquery.min.js" ></script>
	</head>
	<body class="product-single">
		<!-- PAGE WRAPPER -->
		<div id="page-wrapper">
			<!-- SITE HEADER -->
			
			<header id="site-header" role="banner">
				<!-- HEADER TOP -->
				
				<div class="header-top">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-7">
								<!-- CONTACT INFO -->
								<div class="contact-info">
									<i class="fa fa-headphones round-icon"></i>
									<strong>亦书亦音</strong>
									<span>享受你的美好生活</span>
								</div>
								<!-- // CONTACT INFO -->
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5">
								<ul class="actions unstyled clearfix">
									
									<li data-toggle="sub-header"data-target="#sub-social">
										<!-- SOCIAL ICONS -->
										
										<i class="fa fa-user"style = "color:gray"></i>
										<span>您好,</span>
										<?php
										session_start();
										echo $_SESSION['M_id'];
										?>
										<a id="social-icons">
											<a  href = "../../login.html">
												<?php
												echo "/退出";
												?>
											</a>
										</a>
										<!-- // SOCIAL ICONS -->
									</li>
									<li data-toggle="sub-header"data-target="#sub-cart">
										<!-- SHOPPING CART -->
										<a href="../cart.php"id="total-cart">
											<i class="fa fa-heart round-icon"></i>
										</a>
										
										<!-- // CART -->
									</li>
								</ul>
							</div>
						</div>
					</div>
					
					
					<!-- ADD TO CART MESSAGE -->
					<div class="cart-notification">
					<ul class="unstyled"></ul>
				</div>
				<!-- // ADD TO CART MESSAGE -->
			</div>
			<!-- // HEADER TOP -->
			<!-- MAIN HEADER -->
			<div class="main-header-wrapper">
				<div class="container">
					<div class="main-header">
						<!-- CURRENCY / LANGUAGE / USER MENU -->
						<div class="actions">
							<div class="clearfix"></div>
							
							<!-- // USER RELATED MENU -->
						</div>
						<!-- // CURRENCY / LANGUAGE / USER MENU -->
						<!-- SITE LOGO -->
						<div class="logo-wrapper">
							
							<img src="../../img/logo.png" alt="GFashion - Responsive e-commerce HTML Template" />
							
						</div>
						<!-- // SITE LOGO -->
						<!-- SITE NAVIGATION MENU -->
						<nav id="site-menu" role="navigation">
							<ul class="main-menu">
								<li >
									<a href="../index.php">首页</a>
								</li>
								<li class="active">
									<a href="../products_book.php">书籍</a>
								</li>
								<li>
									<a href="../products_music.php">音乐</a>
								</li>
								
							</ul>
							
						</nav>
						<!-- // SITE NAVIGATION MENU -->
					</div>
				</div>
			</div>
			<!-- // MAIN HEADER -->
		</header>
		<!-- // SITE HEADER -->
		<!-- 单品详细 -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="#">首页</a></li>
						<li><a href="../products_book.php">书籍</a></li>
						<li class="active">详情</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
			<section class="section">
				<div class="container">
					<div class="row">
						<!-- PRODUCT PREVIEW -->
						<div class="col-xs-12 col-sm-4">
							
							<div class="product-preview">
								<div class="big-image">
									<a href="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529317548104&di=18ac3113a089637801acfa371271bffc&imgtype=0&src=http%3A%2F%2Fpic5.997788.com%2Fpic_search%2F00%2F12%2F45%2F54%2Fse12455491.jpg" data-toggle="lightbox">
										<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529317548104&di=18ac3113a089637801acfa371271bffc&imgtype=0&src=http%3A%2F%2Fpic5.997788.com%2Fpic_search%2F00%2F12%2F45%2F54%2Fse12455491.jpg" alt="" class="products_img1"/>
									</a>
								</div>
								<ul class="thumbs unstyled clearfix">
									<li><a href="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529317548104&di=18ac3113a089637801acfa371271bffc&imgtype=0&src=http%3A%2F%2Fpic5.997788.com%2Fpic_search%2F00%2F12%2F45%2F54%2Fse12455491.jpg" data-toggle="lightbox">
										<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1529317548104&di=18ac3113a089637801acfa371271bffc&imgtype=0&src=http%3A%2F%2Fpic5.997788.com%2Fpic_search%2F00%2F12%2F45%2F54%2Fse12455491.jpg" alt="" class="products_img1"/>
									</a></li>
									<li><a href="https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/s%3D220/sign=fcc68c8f8acb39dbc5c06054e01609a7/728da9773912b31b9153254c8d18367adab4e19c.jpg">
									<img src="https://gss1.bdstatic.com/9vo3dSag_xI4khGkpoWK1HF6hhy/baike/s%3D220/sign=fcc68c8f8acb39dbc5c06054e01609a7/728da9773912b31b9153254c8d18367adab4e19c.jpg" alt="" /></a></li>
								</ul>
							</div>
							
						</div>
						<!-- // PRODUCT PREVIEW -->
						<div class="space40 visible-xs"></div>
						<!-- PRODUCT DETAILS -->
						<div class="col-xs-12 col-sm-8">
							<section class="product-details add-cart">
								<header class="entry-header">
									<h2 class="entry-title uppercase">童年</h2>
								</header>
								<article class="entry-content">
									<figure>
										<span class="entry-price inline-middle">评分</span>
										<div class="rate-bar inline-middle">
											<input type="range" value="4.5" step="0.5" id="backing0" />
											<div class="rateit" data-rateit-backingfld="#backing0" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
										</div>
										
										
										<ul class="entry-meta unstyled">
											<li>
												<span class="key">作者:</span>
												<span class="value">【苏】高尔基 </span>
											</li>
											<li>
												<span class="key">出版社:</span>
												<span class="value">南海出版社</span>
											</li>
											<li>
												<span class="key">出版时间:</span>
												<span class="value">1913</span>
											</li>
										</ul>
										
										<div class="clearfix"></div>
										
										<figcaption class="m-b-sm">
										<h5 class="subheader uppercase">内容提要:</h5>
										<p>阿廖沙因为父亲去世，随母亲投奔到外祖父家，开始了黑暗又残酷的非人生活。这是一个充满仇恨，笼罩着浓厚小市民习气的家庭。外祖父贪婪、吝啬、暴戾，经常毒打外祖母和孩子们。有一次，阿廖沙因为染坏了一匹布，竟被他打得昏死过去，最后甚至把老伴与外孙赶出家门，让他们自谋生路。两个舅舅也是粗野、自私的市侩，整日为争夺家产争吵斗殴。.....</p>
										</figcaption>
										
										
										<ul class="inline-li li-m-r-l m-t-lg">
											<li>
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list">收藏</a>
											</li>
											<li>
												<div class="buttons"><a href="../../html/read-book.html" target="_blank">开启阅读时光</a></div>
												
											</li>
											
										</ul>
										
									</figure>
								</article>
							</section>
						</div>
						<!-- // PRODUCT DETAILS -->
					</div>
					<div class="m-t-lg">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#product-description" data-toggle="tab">作者简介</a></li>
							<li><a href="#product-reviews" data-toggle="tab">创作背景</a></li>
							<li><a href="#product-shipping" data-toggle="tab">推荐理由</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="product-description">
								<p>玛克西姆·高尔基（Maxim Gorky，1868年3月16日—1936年6月18日），原名阿列克赛·马克西姆维奇·别什可夫，前苏联作家、诗人、评论家、政论家、学者。</p>
								<ul>
									
									<li>1902年，写了剧本《在底层》，这是作者通过20年时间观察流浪汉生活的总结，是高尔基戏剧的代表作</li>
									<li>1905年，高尔基加入了俄国社会民主工党。1906年，高尔基受列宁的委托，由芬兰去美国进行革命活动，在美国出版长篇小说《母亲》。后定居意大利卡普里岛。</li>
									<li>1913年，高尔基从意大利回国，从事无产阶级文化组织工作，主持《真理报》的文艺专栏。</li>
									
									<li>1911—1913年间，完成故事集《意大利童话》。1911—1917年，完成《俄罗斯童话》。1912一1917年，完成《罗斯游记》。1913年，创作了自传体三部曲的第一部《童年》。</li>
								</ul>
							</div>
							<div class="tab-pane fade in" id="product-reviews">
								<div class="comments-list">
									<div id="disqus_thread"></div>
									<p>1911—1913年间，完成故事集《意大利童话》。1911—1917年，完成《俄罗斯童话》。1912一1917年，完成《罗斯游记》。1913年，创作了自传体三部曲的第一部《童年》.<p>
										
									</div>
								</div>
								<div class="tab-pane fade in" id="product-shipping">
									
									<h5 class="m-b-xs"><i class="fa fa-gift inline-middle m-r-sm"></i><span class="inline-middle"></span></h5>
									<p>《童年》《在人间》《我的大学》是高尔基著名的三部曲自传体小说。被誉为苏联**秀的自传体小说之一。本书讲述的是以作者为原型的阿廖沙从3岁到10岁这一时期的童年生活。小说主要从儿童的视角观察描写生活，又以成人的视角审视整个社会及人生。人物已不再是单纯的个人，家庭已不是一般的家庭，而是那个时代——那个由沉重的劳动、家长制手工业的生产关系和无聊生活造就的小市民社会的缩影。本书展现了当时整个社会由腐败、没落而趋向灭亡的过程。
										《童年》这本书写出了作者对苦难生活的认识，对社会人生的独特见解。对光明与真理的不懈追求。字里行间涌动出了股生生不息的热望与坚强。它内涵丰富，耐人寻味，为我们描绘了一个精彩纷呈的精神境界，是一部不可错过的成长必读书。
									</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- FEATURED PRODUCTS -->
				<section class="section featured visible-items-4">
					<div class="container">
						<div class="row">
							<header class="section-header clearfix col-sm-offset-3 col-sm-6">
								<h3 class="section-title">伴读音乐推荐</h3>
							</header>
							
							<div class="clearfix"></div>
							
							<!-- BEGIN CAROUSEL -->
							<div id="featured-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">
								
								<div class="owl-controls clickable top">
									<div class="owl-buttons">
										<div class="owl-prev"><i class="fa fa-angle-left"></i></div>
										<div class="owl-next"><i class="fa fa-angle-right"></i></div>
									</div>
								</div>
								
								<div class="owl-carousel owl-theme" data-visible-items="4" data-navigation="true" data-lazyload="true">
									
									<div class="product" data-product-id="3">
										<div class="entry-media">
											<img src="https://gss3.bdstatic.com/7Po3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike116%2C5%2C5%2C116%2C38/sign=9d43326cb5096b63951456026d5aec21/342ac65c103853436cf772629813b07eca8088bd.jpg" alt="" class="lazyLoad thumb products_img" />
											<div class="hover">
												<a href="../music/music5.php" class="entry-url"></a>
												<ul class="icons unstyled">
													<li>
														<a href="https://gss3.bdstatic.com/7Po3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike116%2C5%2C5%2C116%2C38/sign=9d43326cb5096b63951456026d5aec21/342ac65c103853436cf772629813b07eca8088bd.jpg" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
													</li>
													<li>
														<a href="#" class="circle heart"><i class="iconfont-heart"></i></a>
													</li>
												</ul>
												
											</div>
										</div>
										<div class="entry-main products_div">
											<h5 class="entry-title">
											<a href="../music/music5.php"><p class="accent-color price products_title">覆水</p></a>
											</h5>
											<div class="entry-description visible-list">
												<p>《覆水》是古装剧《将军在上》的插曲，由王楚然演唱，发行于2017年11月1日。无声陪伴你，永远说不出口
												；随年华细水长流，此生情不多，可是我从未保留，似覆水难收。</p>
											</div>
											<div class="entry-price">
												<strong>王楚然</strong>
												<a href="#" class="btn btn-round btn-default add-to-cart visible-list">我喜欢</a>
											</div>
											
										</div>
										
									</div>
									
									
								</div>
								<!-- // END CAROUSEL -->
								
							</div>
						</div>
					</section>
					<!-- // FEATURED PRODUCTS -->
					
					<!-- // FEATURED PRODUCTS -->
					
				</main>
				<!-- // SITE MAIN CONTENT -->
				
				<!-- SITE FOOTER -->
				<footer class="page-footer">
					
					<div class="footer-sub">
						<div class="container">
							<div class="row">
								<div class="space40 visible-xs"></div>
								<div class="col-xs-12 col-sm-6"><div class="space10"></div></div>
								<div class="col-xs-12 col-sm-6 center-xs">
									<div class="pull-right">
										<div class="vmid">
											<span class="uppercase">友情链接 ：</span>
											<a href="http://bang.dangdang.com/" target="_blank">当当书城、</a>
											<a href="https://www.zhihu.com" target="_blank">知乎、</a>
											<a href="https://www.taobao.com" target="_blank">淘宝、</a>
											<a href="https://www.baidu.com" target="_blank">百度</a>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</footer>
				<!-- // SITE FOOTER -->
				
				<!-- // PAGE WRAPPER -->
				<!-- Essential Javascripts -->
				<script src="../../js/minified.js"></script>
				<!-- // Essential Javascripts -->
				<!-- Particular Page Javascripts -->
				<script src="../../js/jquery.nouislider.js"></script><!--jQuery区域范围滑块插件noUiSlider-->
				<script src="../../js/owl.carousel.js"></script>
				<script src="../../js/products.js"></script>
				
			</body>
		</html>