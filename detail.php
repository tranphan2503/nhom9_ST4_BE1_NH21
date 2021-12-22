<?php include "header.php"; ?>
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<?php
								foreach($getAllProtype as $value){
								if ($_GET['type_id'] == $value['type_id']) {								
							?>
								<li class="active"><?php echo $value['type_name'];?></li>
							<?php } ?>
							<?php } ?>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Related Products</h3>
							<?php
								if(isset($_GET['type_id'])){
									$getRelatedProducts = $product->getRelatedProducts($_GET['type_id']);
									foreach($getRelatedProducts as $value){
							?>
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/<?php echo $value['image'] ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"><?php echo $value['type_name'] ?></p>
									<h3 class="product-name"><a href="detail.php?type_id=<?php echo $value['type_id']?>&id=<?php echo $value['id']?>"><?php echo $value['name'] ?></a></h3>
									<h4 class="product-price"><?php echo number_format($value['price']) ?></del> VND</h4>
								</div>
							</div>
							<?php } ?>
							<?php } ?>
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">

						<!-- store products -->
						<div class="row">
							<?php
								if(isset($_GET['id'])){
									foreach($getAllProducts as $value){
										if ($value['id'] == $_GET['id']) {
							 ?>
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="./img/<?php echo $value['image'] ?>" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<h3 class="product-name"><a href=""><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
										</div>
									</div>
									
								</div>
								<div class="col-md-8 col-xs-6" style="font-size: large">
									<?php echo $value['description'] ?></a> 
								</div>							
							</div>		
							<div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="cart.php?id=<?php echo $value['id'] ?>"> add to cart</a></button>
									</div>				
							<!-- /product -->
							<?php } ?>
							<?php } ?>
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing detail products</span>
						</div>
						<!-- /store bottom filter -->
						
						<?php } ?>
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
<?php include "footer.php"; ?>