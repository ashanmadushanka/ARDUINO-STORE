<?php include('conn/connection.php'); 
include('conn/pheader.php');?>

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="INDEX.php">Home</a></li>
						<li><a href="MBSTORE.php">Mother Boards</a></li>
						<li><a href="TOOLS.php">Tools</a></li>
						<li  class="active"><a href="MCSTORE.php">Modules & Sensors</a></li>
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
							<h3 class="aside-title">Modules & Sensors</h3>
							<div class="checkbox-filter">

								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<span></span>
										Bluetooth Modules
										<small>(20)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-2">
									<label for="category-2">
										<span></span>
										Camera Modules
										<small>(5)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-3">
									<label for="category-3">
										<span></span>
										Charger/Power Bank Modules
										<small>(26)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-4">
									<label for="category-4">
										<span></span>
										Clock modules
										<small>(73)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-5">
									<label for="category-5">
										<span></span>
										Eeprom Modules
										<small>(3)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-6">
									<label for="category-6">
										<span></span>
										GSM/GPRS/GPS Modules
										<small>(30)</small>
									</label>
								</div>
						

							<div class="input-checkbox">
									<input type="checkbox" id="category-7">
									<label for="category-7">
										<span></span>
										Joystick Modules
										<small>(5)</small>
									</label>
								</div>
					

							 <div class="input-checkbox">
									<input type="checkbox" id="category-8">
									<label for="category-8">
										<span></span>
										Power Modules
										<small>(13)</small>
									</label>
								</div>
						

							<div class="input-checkbox">
									<input type="checkbox" id="category-9">
									<label for="category-9">
										<span></span>
										Relay Modules
										<small>(16)</small>
									</label>
								</div>
						

							<div class="input-checkbox">
									<input type="checkbox" id="category-10">
									<label for="category-10">
										<span></span>
										Remote Control Modules
										<small>(30)</small>
									</label>
								</div>
						

							<div class="input-checkbox">
									<input type="checkbox" id="category-11">
									<label for="category-11">
										<span></span>
										RFID Modules
										<small>(30)</small>
									</label>
								</div>

							<div class="input-checkbox">
									<input type="checkbox" id="category-11">
									<label for="category-11">
										<span></span>
										SD MSD Modules
										<small>(30)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-11">
									<label for="category-11">
										<span></span>
										PIR Sensors Module
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
									<a href="pro.php?id=19">
									<div class="product-img"  height="280" width="85">
										<img src="./Images/Products/MC/img11.jpg">
										<div class="product-label">
											<!-- <span class="new">NEW</span> -->
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Modules & Sensors</p>
										<h3 class="product-name">12V 4 Channel Relay Module</h3>
										<h4 class="product-price">RS.450.00</h4>
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
									<a href="pro.php?id=20">
									<div class="product-img">
										<img src="./Images/Products/MC/img10.jpg"  height="280" width="85" >
										<!-- <div class="product-label">
											<span class="new">NEW</span>
										</div> -->
									</div>
									<div class="product-body">
										<p class="product-category">Modules & Sensors</p>
										<h3 class="product-name">12V 16 Channel Relay Module </h3>
										<h4 class="product-price">Rs.2050.00<del class="product-old-price">Rs.2350.00</del></h4>
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

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<a href="pro.php?id=21">
									<div class="product-img">
										<img src="./Images/Products/MC/img12.jpg"  height="280" width="85">
									</div>
									<div class="product-body">
										<p class="product-category">Modules & Sensors</p>
										<h3 class="product-name">2000W PWM AC Motor Speed ​​Control Module Dimmer 50-220V Adjustable Voltage Controller</h3>
										<h4 class="product-price">Rs.380.00</h4>
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
									</a>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-lg visible-md"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="./Images/Products/MC/img13.jpg" height="280" width="85">
									</div>
									<div class="product-body">
										<p class="product-category">Modules & Sensors</p>
										<h3 class="product-name"><a href="pro.php?id=22">5V 3A USB Step Down Converter</h3>
										<h4 class="product-price">Rs.550.00 </h4>
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
									<div class="product-img">
										<img src="./Images/Products/MC/img14.jpg" height="280" width="85">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Modules & Sensors</p>
										<h3 class="product-name"><a href="pro.php?id=23">Temperature Control Module W1209</h3>
										<h4 class="product-price">$Rs.300.00<del class="product-old-price">Rs.600.00</del></h4>
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
									<div class="product-img">
										<img src="./Images/Products/MC/img15.jpg" height="280" width="85">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Modules & Sensors</p>
										<h3 class="product-name"><a href="pro.php?id=24">Heart Rate Monitor AD8232 ( EMG / ECG)</h3>
										<h4 class="product-price">$Rs.1750.00<del class="product-old-price">Rs.2000.00</del></h4>
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

							<div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="./Images/Products/MC/img16.jpg" height="280" width="85">
										
									</div>
									<div class="product-body">
										<p class="product-category">Modules & Sensors</p>
										<h3 class="product-name"><a href="pro.php?id=25">Ultrasonic Sensor HY-SRF05</h3>
										<h4 class="product-price">Rs.350.00</h4>
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
									<div class="product-img">
										<img src="./Images/Products/MC/img17.jpg" height="280" width="85">
										
									</div>
									<div class="product-body">
										<p class="product-category">Modules & Sensors</p>
										<h3 class="product-name"><a href="pro.php?id=26">Water Flow Sensor SEN-HZ43WA</h3>
										<h4 class="product-price">Rs.725.00</h4>
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
									<div class="product-img">
										<img src="./Images/Products/MC/img18.jpg" height="280" width="85">
										
									</div>
									<div class="product-body">
										<p class="product-category">Modules & Sensors</p>
										<h3 class="product-name"><a href="pro.php?id=27">Co2 Gas Sensor NDIR MH-Z14A</h3>
										<h4 class="product-price">Rs.4600.00</h4>
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
								<li><a href="MCSTORE.php">1</a></li>
								<li class="active"><a href="MCSTORE2.php">2</a></li>
								<!-- <li><a href="#">3</a></li>
								<li><a href="#">4</a></li> -->
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
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