<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<link rel="stylesheet" href="/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Services | Canvas</title>

</head>

<?php
 include 'php/nav_menu_items.php';
?>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">
			<div id="header-wrap" class="row">
				
				<div class="container col-8">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><?php echo file_get_contents("images/logos/logo_main.svg"); ?></a>
							<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<!-- <div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div>-->   <!-- #top-search end -->

							<!-- Top Cart
							============================================= -->
							<!-- <div id="top-cart" class="header-misc-icon d-none d-sm-block">
								<a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span class="top-cart-number">5</span></a>
								<div class="top-cart-content">
									<div class="top-cart-title">
										<h4>Shopping Cart</h4>
									</div>
									<div class="top-cart-items">
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#">Blue Round-Neck Tshirt with a Button</a>
													<span class="top-cart-item-price d-block">$19.99</span>
												</div>
												<div class="top-cart-item-quantity">x 2</div>
											</div>
										</div>
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#">Light Blue Denim Dress</a>
													<span class="top-cart-item-price d-block">$24.99</span>
												</div>
												<div class="top-cart-item-quantity">x 3</div>
											</div>
										</div>
									</div>
									<div class="top-cart-action">
										<span class="top-checkout-price">$114.95</span>
										<a href="#" class="button button-3d button-small m-0">View Cart</a>
									</div>
								</div>
							</div> -->
							<!-- #top-cart end -->

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item">
									<a class="menu-link" href="index.html">
										<div><?php echo $item_one; ?></div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="#">
										<div><?php echo $item_two; ?></div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="#">
										<div><?php echo $item_three; ?></div>
									</a>
								</li><li class="menu-item">
									<a class="menu-link" href="#">
										<div><?php echo $item_four; ?></div>
									</a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

						<!-- <form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form> -->

					</div>
				</div>
				
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<!-- <section id="page-title"> -->
		<section id="page-header-img">
			<div class="row">
				<div class="color-box col-3 container yellow"></div>
				<div class="color-box col-3 container green"></div>
				<div class="color-box col-3 container blue"></div>
				<div class="color-box col-3 container petrol"></div>
			</div>
			<div class=" clearfix col-12">
				<img src="images/header.png" alt="">
				
			</div>

		</section><!-- #page-title end -->

	
		<!-- Nav Boxes Startpage 
		============================================= -->

		<?php include 'custom_sections/nav_boxes_startpage.php'; ?>
		

		<!-- Include Welcome Section from custom_sections/welcome.php 
		============================================= -->
		<?php 
			include 'custom_sections/welcome.php';
		?>

		<!-- Include Terminvergabe from custom_sections/terminvergabe_startpage.php 
		============================================= -->
		<?php 
			include 'custom_sections/terminvergabe_startpage.php';
		?>

		<!-- Include Kompetenzen from custom_sections/kompetenzen_startpage.php 
		============================================= -->
		<?php 
			include 'custom_sections/kompetenzen_startpage.php';
		?>

		<!-- Include Kompetenzen from custom_sections/disziplinen_startpage.php 
		============================================= -->
		<?php 
			include 'custom_sections/disziplinen_startpage.php';
		?>

		<!-- Include aktuelles from custom_sections/aktuelles/aktuelles_startpage.php 
		============================================= -->
		<?php 
			include 'custom_sections/aktuelles_startpage.php';
		?>

		<!-- Include Team from custom_sections/team_startpage.php 
		============================================= -->
		<?php 
			include 'custom_sections/team_startpage.php';
		?>

		<!-- Include Team from custom_sections/impressionen_startpage.php 
		============================================= -->
		<?php 
			include 'custom_sections/impressionen_startpage.php';
		?>

		<!-- Include Map from custom_sections/map_startpage.php 
		============================================= -->
		<?php
			include 'custom_sections/map_startpage.php'
		?>
		<!-- Footer
		============================================= -->

		<?php include 'custom_sections/footer.php' ?>
		<!-- #footer end -->

	</div><!-- #wrapper end -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>
	<!-- Simple Parallax github
	============================================= -->
	<script src="parallax_js/parallax.js"></script>

	<script>
		$('.parallax-window').parallax({
			imageSrc: 'images/terminvergabe.png',
			naturalWidth: 1680,
    		naturalHeight: 350
		});

		console.log($('.parallax-window').data());

		$('#oc-slider').owlCarousel({
			loop:true,
			margin:10,
			items:2,
			
		});
		// $('.impressionen-img').each(function() {
		// 	$(this).width($(this)[0].naturalWidth));

		// })
		
		$('#oc-slider-2').owlCarousel({
			loop:true,
			margin:10,
			items:6,
			autoWidth: true,
		});


	
	</script>

</body>
</html>