<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/protype.php";
require "models/manufacture.php";

$protype = new Protype;
$product = new Product;
$manufacture = new Manufacture;

$getAllProtype = $protype->getAllProtype();
$getNewProducts = $product->getNewProducts();
$getAllProducts = $product->getAllProducts();
$getManuName = $product->getManuName();
$getAllManufactures = $manufacture->getAllManufactures();
//var_dump($getAllProducts);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>HiếuPhấn Group</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/styles.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li>
						<a href="https://www.facebook.com/HPGroup-106667315171787"><i class="fa fa-facebook"></i>HPGroup</a>
					</li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> hpgroup@gmail.com</a></li>
					<li><a href="maps.html"><i class="fa fa-map-marker"></i>720A Điện Biên Phủ, Phường 22, Bình Thạnh, Thành phố Hồ Chí Minh</a></li>
				</ul>
				<ul class="header-links pull-right">
					<li><a href="#"><i class="fa fa-money"></i> VNĐ</a></li>
					<li><a href="login/index.php"><i class="fa fa-user-o"></i> My Account</a></li>
				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-4">
						<div class="header-logo">
							<a href="index.php" class="logo">
								<img src="./img/logoHP.png" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-5">
						<div class="header-search">
							<form method="get" action="result.php">
								<select type="id" name="id" class="input-select">
									<option value="0">All Categories</option>
									<?php
									$getAllProtype = $protype->getAllProtype();
									foreach ($getAllProtype as $value) { ?>
										<option value="<?php echo $value['type_id'] ?>"> <?php echo $value['type_name'] ?> </option>
									<?php } ?>
								</select>
								<input class="input" placeholder="Search here" name="keyword">
								<button type="submit" name="submit" class="search-btn">Search</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">

							<!-- Cart -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Your Cart</span>
									<div class="qty">3</div>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list">
										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>

										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product02.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>
									</div>
									<div class="cart-summary">
										<small>3 Item(s) selected</small>
										<h5>SUBTOTAL: $2940.00</h5>
									</div>
									<div class="cart-btns">
										<a href="cart.php">View Cart</a>
										<a href="checkout.php">Checkout <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /Cart -->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<?php foreach ($getAllProtype as $value) { ?>
						<li><a href="products.php?type_id=<?php echo $value['type_id']; ?>"><?php echo $value['type_name'] ?></a></li>
					<?php } ?>
				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->