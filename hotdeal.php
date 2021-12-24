<?php
include "header.php"
?>		
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Hot Deal</h3>
							<div class="section-nav">
							<ul class="section-tab-nav tab-nav">

							<?php foreach ($getAllProtype as $value) {?>
							<li><a href="products.php?type_id=<?php echo $value['type_id'];?>" ><?php echo $value['type_name']?></a></li>
							<?php } ?>

							</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
									<?php foreach($getAllProducts as $value):?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image']?>" alt="">
												<div class="product-label">
												<span class="sale">-50%</span>
											</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="detail.php?type_id=<?php echo $value['type_id']?>&id=<?php echo $value['id']?>"><?php echo $value['name']?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price']-($value['price']/100*50))?> VND <del 
												class="product-old-price"><br><?php echo number_format($value['price'])?> VND></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
											<button class="quick-view"><a href="detail.php?type_id=<?php echo $value['type_id']?>&id=<?php echo $value['id']?>" method="get"><i class="fa fa-eye"></i></a><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="cart.php?id=<?php echo $value['id'] ?>"> add to cart</a></button>
									</div>
										</div>
										<!-- /product -->
										<?php endforeach ?>
										<!-- product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Điện thoại</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
						<?php 
							$smartphones = $product->getSmartphones();
								foreach ($smartphones as $value):
						?>
						<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['image']?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value['name']?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'])?> VND</h4>
									</div>
								</div>
								<!-- /product widget -->
							</div>
							<?php endforeach ?>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Laptop</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
						<?php
							$laptops = $product->getLaptops();
							foreach ($laptops as $value):
						?>
						<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['image']?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value['name']?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'])?> VND</h4>
									</div>
								</div>
								<!-- /product widget -->
							</div>
							<?php endforeach ?>
						</div>
					</div>


					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Đồng hồ</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
						<?php
							$wacth = $product->getSmartwacth();
							foreach ($wacth as $value):
						?>
						<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['image']?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value['name']?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price'])?> VND</h4>
									</div>
								</div>
								<!-- /product widget -->
							</div>
							<?php endforeach ?>
						</div>
					</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<!-- NEWSLETTER -->
<?php
include "footer.php";
?>