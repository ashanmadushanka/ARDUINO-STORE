<?php include('conn/connection.php'); ?>
<?php include('conn/pheader.php');  
?>



<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="INDEX.php">Home</a></li>
						<li  class="active"><a href="MBSTORE.php">Mother Boards</a></li>
						<li><a href="TOOLS.php">Tools</a></li>
						<li><a href="MCSTORE.php">Modules & Sensors</a></li>
						<li><a href="PA.php">Project Accessories</a></li>
						<li><a href="IOT.php">IOT</a></li>

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
							<h3 class="aside-title">Mother Boards</h3>
							<div class="checkbox-filter">

								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<span></span>
										Arduino nano
										<small>(25)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-2">
									<label for="category-2">
										<span></span>
										Arduino UNO
										<small>(105)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-3">
									<label for="category-3">
										<span></span>
										Arduino DUE
										<small>(26)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-4">
									<label for="category-4">
										<span></span>
										Arduino Leonardo
										<small>(73)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-5">
									<label for="category-5">
										<span></span>
										Raspberry Pi
										<small>(201)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-6">
									<label for="category-6">
										<span></span>
										Micro-bit
										<small>(30)</small>
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
									<a href="pro.php?id=1">
									<div class="product-img"  height="280" width="85">
										<img src="./Images/Home/img15.jpg">
										<div class="product-label">
											<!-- <span class="new">NEW</span> -->
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Mother Boards</p>
										<h3 class="product-name">Arduino nano V3.0 ATmega328P CH340 5V 16M</h3>
										<h4 class="product-price">LKR.850.00</h4>
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
									<div class="add-to-cart"><a href="CHECKOUT.php">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
										</a>
									</div>
								</div>
							</div>
							<!-- /product -->

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="pro.php?id=2">
									<div class="product-img">
										<img src="./Images/Home/img10.jpg"  height="280" width="85" >
										<!-- <div class="product-label">
											<span class="new">NEW</span>
										</div> -->
									</div>
									<div class="product-body">
										<p class="product-category">Mother Boards</p>
										<h3 class="product-name">Arduino Uno R3 Board</h3>
										<h4 class="product-price">LKR.850.00 <del class="product-old-price">LKR900.00</del></h4>
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
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="sign.php"> add to cart</a></button>
									</a>
									</div>	
								</div>
							</div>
		
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="pro.php?id=3">
									<div class="product-img">
										<img src="./Images/Home/img16.jpg"  height="280" width="85">
									</div>
									<div class="product-body">
										<p class="product-category">Mother Boards</p>
										<h3 class="product-name">Arduino Mega2560 R3</h3>
										<h4 class="product-price">LKR.940.00</h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart"><a href="sign.php">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
										</a>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-lg visible-md"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="pro.php?id=4">
									<div class="product-img">
										<img src="./Images/Home/IMG17.jpg" height="280" width="85">
									</div>
									<div class="product-body">
										<p class="product-category">Mother Boards</p>
										<h3 class="product-name">Arduino Compatible Mega 2560 ATmega2560 CH340 Development Board</h3>
										<h4 class="product-price">LKR.1790.00<del class="product-old-price">LKR.1950.00</del></h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart"><a href="sign.php">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
										</a>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="pro.php?id=5">
									<div class="product-img">
										<img src="./Images/Home/img18.jpg" height="280" width="85">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Mother Boards</p>
										<h3 class="product-name">BBC Micro:bit Board</h3>
										<h4 class="product-price">LKR.3790.00</h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart"><a href="sign.php">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
										</a>
									</div>
								</div>
							</div>
							<!-- /product -->

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="pro.php?id=6">
									<div class="product-img">
										<img src="./Images/Home/img19.jpg" height="280" width="85">
									</div>
									<div class="product-body">
										<p class="product-category">Mother Boards</p>
										<h3 class="product-name">Arduino Due</h3>
										<h4 class="product-price">LKR.2800.00<del class="product-old-price">LKR.2950</del></h4>
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
									<div class="add-to-cart"><a href="sign.php">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
										</a>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="pro.php?id=7">
									<div class="product-img">
										<img src="./Images/Home/img20.jpg" height="280" width="85">
									</div>
									<div class="product-body">
										<p class="product-category">Mother Boards</p>
										<h3 class="product-name">Arduino Leonardo</h3>
										<h4 class="product-price">LKR.1250.00<del class="product-old-price">LKR.1450.00</del></h4>
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
									<div class="add-to-cart"><a href="sign.php">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
										</a>
									</div>
								</div>
							</div>
							<!-- /product -->

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="pro.php?id=8">
									<div class="product-img">
										<img src="./Images/Home/rasp4.jpg" height="280" width="85">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Mother Boards</p>
										<h3 class="product-name">Raspberry Pi 4 Model B 1GB Original UK</h3>
										<h4 class="product-price">LKR.10500.00<del class="product-old-price">LKR.11900.00</del></h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart"><a href="sign.php">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
										</a>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="pro.php?id=9">
									<div class="product-img">
										<img src="./Images/Home/rasp1.jpg" height="280" width="85">
									</div>
									<div class="product-body">
										<p class="product-category">Mother Boards</p>
										<h3 class="product-name">raspberry pi zero 1.3</h3>
										<h4 class="product-price">LKR.2950.00</h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart"><a href="sign.php">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
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

<?php include_once('conn/pfooter.php'); ?>
