<?php include('conn/connection.php'); ?>
<?php include('conn/Dpheader.php');  
?>



<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="DINDEX.php">Home</i></a></li>
						<li><a href="DMBSTORES.php">Mother Boards</a></li>
						<li><a href="DTOOLS.php">Tools</a></li>
						<li><a href="DMCSTORES.php">Modules & Sensors</a></li>
						<li class="active"><a href="DPA.php">Project Accessories</a></li>
						<li><a href="DIOT.php">IOT</a></li>
						<li style="color: red;"><a href="hotdeals.php">HOT DEALS  <i class="fa fa-gift"  style="font-size:20px;color:red"></i></a></li>
						<li><a href="CHECKOUT.php"style="color: red;">Cart  <i class="fa fa-cart-arrow-down" style="font-size:20px;color:red"></i></i></a></li>

					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
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
							<h3 class="aside-title">Project Accessories</h3>
							<div class="checkbox-filter">

								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<span></span>
										Display
										<small>(25)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-2">
									<label for="category-2">
										<span></span>
										Nuts & Bolts
										<small>(105)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-3">
									<label for="category-3">
										<span></span>
										Ornamental Things
										<small>(26)</small>
									</label>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="Dpro.php?id=50">
									<div class="product-img"  height="280" width="85">
										<img src="./Images/Products/p50/p501.jpg">
										<div class="product-label">
											<!-- <span class="new">NEW</span> -->
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Project Accessories</p>
										<h3 class="product-name">Male Header Pin, Straight, 40Pin, 2.54mm 0.65mm</h3>
										<h4 class="product-price">LKR.20.00</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=50"> add to cart</a></button>
										</a>
									</div>
								</div>
							</div>
							<!-- /product -->

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="Dpro.php?id=51">
									<div class="product-img">
										<img src="./Images/Products/p51/p511.jpg"  height="280" width="85" >
										<!-- <div class="product-label">
											<span class="new">NEW</span>
										</div> -->
									</div>
									<div class="product-body">
										<p class="product-category">Project Accessories</p>
										<h3 class="product-name">4 x 4 Matrix Array 16 Key Membrane Switch Keypad</h3>
										<h4 class="product-price">LKR.160.00</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=51"> add to cart</a></button>
									</a>
									</div>	
								</div>
							</div>
		
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="Dpro.php?id=52">
									<div class="product-img">
										<img src="./Images/Products/p52/p521.jpg"  height="280" width="85">
									</div>
									<div class="product-body">
										<p class="product-category">Project Accessories</p>
										<h3 class="product-name">4-lead Nema 17 Stepper Motor</h3>
										<h4 class="product-price">LKR.1800.00</h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=52"> add to cart</a></button>
										</a>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-lg visible-md"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="Dpro.php?id=38">
									<div class="product-img">
										<img src="./Images/Home/img29.jpg" height="280" width="85">
									</div>
									<div class="product-body">
										<p class="product-category">Project Accessories</p>
										<h3 class="product-name">3D Printer Extruder Filament 1.75mm PLA Orange</a></h3>
										<h4 class="product-price">LKR.4290.00</h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=29"> add to cart</a></button>
										</a>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="Dpro.php?id=48">
									<div class="product-img">
										<img src="./Images/Products/p48/p481.jpg" height="280" width="85">
									</div>
									<div class="product-body">
										<p class="product-category">Project Accessories</p>
										<h3 class="product-name">Hot Melt Glue Stick – 11mm (Large size)</h3>
										<h4 class="product-price">LKR.40.00</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=48"> add to cart</a></button>
										</a>
									</div>
								</div>
							</div>
							<!-- /product -->

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="Dpro.php?id=36">
									<div class="product-img">
										<img src="./Images/Home/img27.jpg" height="280" width="85">
									</div>
									<div class="product-body">
										<p class="product-category">Project Accessories</p>
										<h3 class="product-name">Robot Plastic Tire Wheel</a></h3>
										<h4 class="product-price">LKR.130.00 </h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=36"> add to cart</a></button>
										</a>
									</div>
								</div>
							</div>
							<!-- /product -->


							<div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="Dpro.php?id=46">
									<div class="product-img">
										<img src="./Images/Products/p46/p461.jpg" height="280" width="85">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Project Accessories</p>
										<h3 class="product-name">Hot Melt Glue Gun – 20W (Mini Size)</h3>
										<h4 class="product-price">LKR.480.00</h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=46"> add to cart</a></button>
										</a>
									</div>
								</div>
							</div>
							<!-- /product -->


							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="Dpro.php?id=35">
									<div class="product-img">
										<img src="./Images/Home/img30.jpg" height="280" width="85">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Project Accessories</p>
										<h3 class="product-name">GT2 6mm Width 2GT PU Transmission Timing Belt *1M</h3>
										<h4 class="product-price">LKR.490.00 </h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=35"> add to cart</a></button>
										</a>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>
														<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="Dpro.php?id=47">
									<div class="product-img">
										<img src="./Images/Products/p47/p471.jpg" height="280" width="85">
									</div>
									<div class="product-body">
										<p class="product-category">Project Accessories</p>
										<h3 class="product-name">Hot Melt Glue Gun –60W (Large Size)</h3>
										<h4 class="product-price">LKR.650.00</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=47"> add to cart</a></button>
										</a>
									</div>
								</div>
							</div>
							<!-- /product -->


						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<li class="active">1</li>
								<!-- <li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li> -->
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

<?php include_once('conn/Dpfooter.php'); ?>
