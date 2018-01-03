<?php
	require "include/db.php";
 ?>

	<!DOCTYPE html>
	<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
	<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!-->
	<html lang="en">
	<!--<![endif]-->

	<head>

		<!-- Basic Page Needs
  ================================================== -->
		<meta charset="utf-8">
		<title>zVintauge - Free Html5 Templates</title>
		<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">

		<!-- Mobile Specific Metas
	================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- CSS
	================================================== -->
		<link rel="stylesheet" href="css/zerogrid.css">
		<link rel="stylesheet" href="css/style.css">

		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


		<link rel="stylesheet" href="css/menu.css">
		<script src="js/jquery1111.min.js" type="text/javascript"></script>
		<script src="js/script.js"></script>

		<!-- Owl Carousel Assets -->
		<link href="owl-carousel/owl.carousel.css" rel="stylesheet">

		<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

	</head>

	<body class="home-page">
		<div class="wrap-body">
			<?php require "header.php" ?>
			<div id="owl-slide" class="owl-carousel">
				<div class="item">
					<img src="images/slide1.jpg" />
				</div>
				<div class="item">
					<img src="images/slide2.jpg" />
				</div>
				<div class="item">
					<img src="images/slide3.jpg" />

				</div>
			</div>
			<!--////////////////////////////////////Container-->
			<section id="container">
				<div class="wrap-container">
					<!-----------------content-box-1-------------------->
					<section class="content-box box-1">
						<div class="zerogrid">
							<div class="wrap-box">
								<!--Start Box-->
								<div class="box-header">
									<h2>Новые статьи</h2>
								</div>
								<div class="box-content">
									<p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla <br>fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Sit amet cursus nisl aliquam. <br>Aliquam et elit eu nunc rhoncus
										viverra quis at felis. Sed do</p>
								</div>
							</div>
						</div>
					</section>
					<!------------content-box-2-------------------->
					<section class="content-box box-style-1 box-2">
						<div class="zerogrid">
							<div class="wrap-box">
								<!--Start Box-->
								<div class="flex-row">
									<?php
									$articles = R::find('articles','ORDER BY id DESC LIMIT 6');
								 ?>

										<?php
								 foreach($articles as $article) {
										?>
										<div class="col-1-3">
												<div class="wrap-col">
													<a href='article.php?id=<?php echo $article['id']; ?>'>
														<div class="post-thumbnail-wrap">
															<div class="portfolio-box">
																<img class="articles-img" src="images/<?php echo $article['image']  ?>" alt="">
																<div class="portfolio-box-second">
																	<img class="articles-img" src="images/<?php echo $article['image2']  ?>" alt="">
																</div>
															</div>
														</div>
														<div class="entry-header ">
															<h3 class="entry-title"><?php  echo $article['title'] ?></h3>
															<div class="l-tags">
																<?php echo mb_substr(strip_tags($article['text']),0,70,'utf-8') . "..."?>
															</div>
														</div>
													</a>
												</div>
											</div>

							<?php
									}
								  ?>
								</div>
							</div>
						</div>
					</section>
					<!-----------------content-box-3-------------------->
					<section class="content-box box-3">
						<div class="zerogrid">
							<div class="wrap-box">
								<!--Start Box-->

								<div class="box-header">
									<h2>Новые комментарии</h2>
								</div>
								<div class="box-content">
									<div class="row">
										<?php
										$comments = R::find('comments','ORDER BY id DESC LIMIT 2');
									 ?>

											<?php
									 foreach ($comments as $comment) {
											?>


											<div class="col-1-2">
												<div class="wrap-col">
													<p><?php echo $comment['text']; ?></p>
														<hr class="hr">
														<div class="flex-row  сomment-info">
															<p class="author mr-15">
																	<i class="fa fa-user-circle fa-2x" aria-hidden="true" ></i> <span><?php echo $comment['author']; ?></span>
															</p>
															<p class="date mr-15">
																	 <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i> <span><?php echo $comment['date']; ?></span>
															</p>
															<p class="date mr-15">
																	 <a href="article.php?id=<?php echo $comment['article_id']; ?>"><i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i> <span>Перейти к статье</span>	</a>
															</p>
														</div>
												</div>
											</div>

												<?php
										}
									  ?>
									 </div>
									<div class="row">
										<blockquote>
											<p>Здесь будет комментарий недели или месяца что то в этом роде или что то другое .</p>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-----------------content-box-4-------------------->
					<section class="content-box box-style-1 box-4">
						<div class="zerogrid" style="width: 100%">
							<div class="wrap-box">

								<div class="box-header">
									<h2>Лучшие статьи</h2>
								</div>
								<!--Start Box-->
								<div class="row">
									<article>
										<div class="col-1-2">
											<img src="images/slide1.jpg" alt="">
										</div>
										<div class="col-1-2">
											<div class="entry-content t-center">
												<h3>The title on the article</h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.consectetur adipiscing elit. Aliquam viverra convallis
													auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia.</p>
												<a class="button" href="single.html">Read More</a>
											</div>
										</div>
									</article>
								</div>
								<div class="row">
									<article>
										<div class="col-1-2 f-right">
											<img src="images/slide2.jpg" alt="">
										</div>
										<div class="col-1-2">
											<div class="entry-content t-center">
												<h3>The title on the article</h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.consectetur adipiscing elit. Aliquam viverra convallis
													auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia.</p>
												<a class="button" href="single.html">Read More</a>
											</div>
										</div>
									</article>
								</div>
								<div class="row">
									<article>
										<div class="col-1-2">
											<img src="images/slide3.jpg" alt="">
										</div>
										<div class="col-1-2">
											<div class="entry-content t-center">
												<h3>The title on the article</h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.consectetur adipiscing elit. Aliquam viverra convallis
													auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia.</p>
												<a class="button" href="single.html">Read More</a>
											</div>
										</div>
									</article>
								</div>
							</div>
						</div>
					</section>
				</div>
			</section>
			<!--////////////////////////////////////Footer-->
			<footer>
				<div class="zerogrid wrap-footer">
					<div class="row">
						<div class="col-1-4 col-footer-1">
							<div class="wrap-col">
								<h3 class="widget-title">About Us</h3>
								<p>Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Metus elit vehicula dui. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum</p>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium</p>
							</div>
						</div>
						<div class="col-1-4 col-footer-2">
							<div class="wrap-col">
								<h3 class="widget-title">Recent Post</h3>
								<ul>
									<li><a href="#">MOST VISITED COUNTRIES</a></li>
									<li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
									<li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
									<li><a href="#">STARTUP COMPANY???S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
								</ul>
							</div>
						</div>
						<div class="col-1-4 col-footer-3">
							<div class="wrap-col">
								<h3 class="widget-title">Tag Cloud</h3>
								<a href="#">animals</a>
								<a href="#">cooking</a>
								<a href="#">countries</a>
								<a href="#">city</a>
								<a href="#">children</a>
								<a href="#">home</a>
								<a href="#">likes</a>
								<a href="#">photo</a>
								<a href="#">link</a>
								<a href="#">law</a>
								<a href="#">shopping</a>
								<a href="#">skate</a>
								<a href="#">scholl</a>
								<a href="#">video</a>
								<a href="#">travel</a>
								<a href="#">images</a>
								<a href="#">love</a>
								<a href="#">lists</a>
								<a href="#">makeup</a>
								<a href="#">media</a>
								<a href="#">password</a>
								<a href="#">pagination</a>
								<a href="#">wildlife</a>
							</div>
						</div>
						<div class="col-1-4 col-footer-4">
							<div class="wrap-col">
								<h3 class="widget-title">Gallery</h3>
								<div class="row">
									<div class="col-1-3">
										<div class="wrap-col">
											<a href="#"><img src="images/11.jpg"></a>
											<a href="#"><img src="images/1.jpg"></a>
											<a href="#"><img src="images/13.jpg"></a>
										</div>
									</div>
									<div class="col-1-3">
										<div class="wrap-col">
											<a href="#"><img src="images/10.jpg"></a>
											<a href="#"><img src="images/9.jpg"></a>
											<a href="#"><img src="images/4.jpg"></a>
										</div>
									</div>
									<div class="col-1-3">
										<div class="wrap-col">
											<a href="#"><img src="images/2.jpg"></a>
											<a href="#"><img src="images/6.jpg"></a>
											<a href="#"><img src="images/5.jpg"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="zerogrid bottom-footer">
					<div class="row">
						<div class="bottom-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-vimeo"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</div>
					</div>
					<div class="copyright">
						Copyright @ - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a>
					</div>
				</div>
			</footer>
			<!-- carousel -->
			<script src="owl-carousel/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-slide").owlCarousel({
						autoPlay: 3000,
						items: 1,
						itemsDesktop: [1199, 1],
						itemsDesktopSmall: [979, 1],
						itemsTablet: [768, 1],
						itemsMobile: [479, 1],
						navigation: true,
						navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
						pagination: false
					});
				});
			</script>
		</div>
	</body>

	</html>
