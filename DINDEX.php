<?php include('conn/connection.php'); ?>
<?php include('conn/Dpheader.php');?>


<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="DINDEX.php">Home</i></a></li>
						<li><a href="DMBSTORES.php">Mother Boards</a></li>
						<li><a href="DTOOLS.php">Tools</a></li>
						<li><a href="DMCSTORES.php">Modules & Sensors</a></li>
						<li><a href="DPA.php">Project Accessories</a></li>
						<li><a href="DIOT.php">IOT</a></li>
						<li><a href="hotdeals.php"style="color: red;">HOT DEALS  <i class="fa fa-gift"  style="font-size:20px;color:red"></i></a></li>
						<li><a href="CHECKOUT.php"style="color: red;">Cart  <i class="fa fa-cart-arrow-down" style="font-size:20px;color:red"></i></i></a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
		<div class="hotdeals">
<?php 
		echo "<h1> Hello ".$_SESSION['u_name']." Welcome to the Braveheartz Arduino Stores</h1>";
?>
</div>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					

					<div class="col-md-4 col-xs-6">
						<a href="MBSTORE.php" class="cta-btn">
							<div class="shop">
								<div class="shop-img">
								<img src="./Images/Home/img2.png">
								</div>
							<div class="shop-body">
								
								<h3>Mother<br>Boards</h3>
								SHOP NOW<i class="fa fa-arrow-circle-right"></i>
								</div>
						</div>
						</a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="PA.php" class="cta-btn">
						<div class="shop">
							<div class="shop-img">
								<img src="./Images/Home/img3.jpg" style="height:240px" "width:1080px">
							</div>
							<div class="shop-body">
								
								<h3>Project<br>Accessories</h3>
								SHOP NOW<i class="fa fa-arrow-circle-right"></i>
							
							</div>
						</div>
						</a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="IOT.php" class="cta-btn">
						<div class="shop">
							<div class="shop-img">
								<img src="./Images/Home/img4.jpg">
							</div>
							<div class="shop-body">
								
								<h3>IOT<br>Collection</h3>
								Shop now <i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
						</a>

					</div>
					<!-- /shop -->
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

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Featured Category</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="DIOT.php">IOT </a></li>
									<li><a data-toggle="tab" href="DTOOLS.php">Tools</a></li>
									<li><a data-toggle="tab" href="DMCSTORES.php">Modules & Sensors</a></li>
									<li><a data-toggle="tab" href="DPA.php">Project Accessories</a></li>
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
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->

										<div class="product">
											<a href="Dpro.php?id=28">
											<div class="product-img">
												<img src="./Images/Home/img5.jpg" width="85">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Learning kit</p>
												<h3 class="product-name">Super arduino learning kit</h3>
												<h4 class="product-price">LKR.3500.00<del class="product-old-price">LKR.3990.00</del></h4>
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
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=28"> add to cart
												</a>
											</button>
											</a>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<a href="Dpro.php?id=29">
											<div class="product-img">
												<img src="./Images/Home/img6.jpg" height="280" width="85">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Robotics</p>
												<h3 class="product-name">Arduino Robot Kit</a></h3>
												<h4 class="product-price">LKR.1980.00 <del class="product-old-price">LKR2560.00</del></h4>
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
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=29"> add to cart</button></a>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<a href="Dpro.php?id=30">
											<div class="product-img">
												<img src="./Images/Home/img7.jpg" height="280" width="85">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Modules</p>
												<h3 class="product-name">Sensor module collection</a></h3>
												<h4 class="product-price">LKR.3790.00 <del class="product-old-price">LKR.4900.00</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=30"> add to cart</a></button>
											</a>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<a href="Dpro.php?id=16">
											<div class="product-img">
												<img src="./Images/Home/img8.jpg" height="280" width="85">
											</div>
											<div class="product-body">
												<p class="product-category">Modules</p>
												<h3 class="product-name">L298N Motor Driver</a></h3>
												<h4 class="product-price">LKR..350.00<del class="product-old-price">LKR.400.00</del></h4>
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
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=16"> add to cart</a></button>
											</a>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<a href="Dpro.php?id=31">
											<div class="product-img">
												<img src="./Images/Home/img9.jpg" height="280" width="85">
											</div>
											<div class="product-body">
												<p class="product-category">CNC</p>
												<h3 class="product-name">CNC Full package No:01</a></h3>
												<h4 class="product-price">LKR.5500.00<del class="product-old-price">LKR.5900.00</del></h4>
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
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=31"> add to cart</a></button>
											</a>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<body>

												<p id="demo"></p>

												<script>

												var countDownDate = new Date("jan 25, 2021 15:37:25").getTime();

												// Update the count down every 1 second
												var x = setInterval(function() {

  													// Get today's date and time
  												var now = new Date().getTime();
    
  												// Find the distance between now and the count down date
  												var distance = countDownDate - now;
    
  												// Time calculations for days, hours, minutes and seconds
  												var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  												var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
 												var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  												var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
 												 // Output the result in an element with id="demo"
  												document.getElementById("demo").innerHTML = days + "d "+hours +"h "+ minutes + "m " +seconds + "s";
    
  												// If the count down is over, write some text 
  												if (distance < 0) {
    											clearInterval(x);
    											document.getElementById("demo").innerHTML = "EXPIRED";
  												}
												}, 1000);
												</script>

											</body>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="CHECKOUT.php">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">IOT </a></li>
									<li><a data-toggle="tab" href="#tab1">Top gadgets</a></li>
									<li><a data-toggle="tab" href="#tab1">Modules</a></li>
									<li><a data-toggle="tab" href="#tab1">Accessories</a></li>
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
										<!-- product -->
										<div class="product">
											<a href="Dpro.php?id=2">
											<div class="product-img">
												<img src="./Images/Home/img10.jpg" height="260" width="80">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Mother Boards</p>
												<h3 class="product-name">Arduino Uno R3 Board</a></h3>
												<h4 class="product-price">LKR850.00 <del class="product-old-price">LKR900.00</del></h4>
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
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=2"> add to cart</a></button>
											</a>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<a href="Dpro.php?id=32">
											<div class="product-img">
												<img src="./Images/Home/img11.jpg" height="260" width="80">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Tools</p>
												<h3 class="product-name">Crew drivers</a></h3>
												<h4 class="product-price">LKR500.00 <del class="product-old-price">LKR550.00</del></h4>
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
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=32"> add to cart</a></button>
											</a>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<a href="Dpro.php?id=33">
											<div class="product-img">
												<img src="./Images/Home/img12.jpg " height="260" width="80">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Other Accessories</p>
												<h3 class="product-name">3S 2800mah 30C LiPo Battery 11.1V Rechargeable 3s XT60</a></h3>
												<h4 class="product-price">LKR.3590.00 <del class="product-old-price">LKR.4300.00</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=33"> add to cart</a></button>
											</a>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<a href="Dpro.php?id=10">
											<div class="product-img">
												<img src="./Images/Home/img13.jpg" height="260" width="80">
											</div>
											<div class="product-body">
												<p class="product-category">Sensors</p>
												<h3 class="product-name">Infrared PIR Motion Sensor Module HC-SR501</a></h3>
												<h4 class="product-price">LKR.450.00 <del class="product-old-price">LKR.550.00</del></h4>
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
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=10"> add to cart</a></button>
											</a>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<a href="Dpro.php?id=34">
											<div class="product-img" >
												<img src="./Images/Home/img14.jpg" height="260" width="80">
											</div>
											<div class="product-body">
												<p class="product-category">IOT</p>
												<h3 class="product-name">ESP32 Development Board 2.4GHz WiFi+Bluetooth 38 Pins</a></h3>
												<h4 class="product-price">LKR.1690.00 <del class="product-old-price">LKR.1750.00</del></h4>
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
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="CHECKOUT.php?id=34"> add to cart</a></button>
											</a>
											</div>
										</div>
										<!-- /product -->
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
							<h4 class="title">Mother Boards</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=1">
									<div class="product-img">
										<img src="./Images/Home/img15.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Mother Boards</p>
										<h3 class="product-name">Arduino nano V3.0 ATmega328P CH340 5V 16M</a></h3>
										<h4 class="product-price">LKR.590.00</h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=3">
									<div class="product-img">
										<img src="./Images/Home/img16.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Mother Boards</p>
										<h3 class="product-name">Arduino Mega2560 R3</a></h3>
										<h4 class="product-price">LKR.940.00</h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=4">
									<div class="product-img">
										<img src="./Images/Home/IMG17.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Mother Boards</p>
										<h3 class="product-name">Arduino Compatible Mega 2560 ATmega2560 CH340 Development Board</a></h3>
										<h4 class="product-price">LKR.1790.00<del class="product-old-price">LKR.1950.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=5">
									<div class="product-img">
										<img src="./Images/Home/img18.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Mother Boards</p>
										<h3 class="product-name">BBC Micro:bit Board</a></h3>
										<h4 class="product-price">LKR.3790.00</h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=6">
									<div class="product-img">
										<img src="./Images/Home/img19.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Mother Boards</p>
										<h3 class="product-name">Arduino Due</a></h3>
										<h4 class="product-price">LKR.2800.00<del class="product-old-price">LKR.2950</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=7">
									<div class="product-img">
										<img src="./Images/Home/img20.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Mother Boards</p>
										<h3 class="product-name">Arduino Leonardo</a></h3>
										<h4 class="product-price">LKR.1250.00<del class="product-old-price">LKR.1450.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Modules</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=11">
									<div class="product-img">
										<img src="./Images/Home/img21.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Modules</p>
										<h3 class="product-name">L293D Motor Driver Shield</a></h3>
										<h4 class="product-price">LKR.425.00 </h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=12">
									<div class="product-img">
										<img src="./Images/Home/img22.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Modules</p>
										<h3 class="product-name">Bluetooth Module HC-06</a></h3>
										<h4 class="product-price">LKR.850.00<del class="product-old-price">LKR.925.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=13">
									<div class="product-img">
										<img src="./Images/Home/img23.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Modules</p>
										<h3 class="product-name">Ethernet Module ENC28J60</a></h3>
										<h4 class="product-price">LKR.700.00 </h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=14">
									<div class="product-img">
										<img src="./Images/Home/img24.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Modules</p>
										<h3 class="product-name">RFID Card Reader/Writer RC522</a></h3>
										<h4 class="product-price">$LKR.450.00<del class="product-old-price">LKR.525.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=15">
									<div class="product-img">
										<img src="./Images/Home/img25.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Modules</p>
										<h3 class="product-name">NE555 Pulse Frequency Duty Cycle Adjustable Module</a></h3>
										<h4 class="product-price">LKR.200.00</h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=41">
									<div class="product-img">
										<img src="./Images/Home/img26.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Modules</p>
										<h3 class="product-name">PAM8403 Mini Amplifier Module 2x3W</a></h3>
										<h4 class="product-price">LKR.700.00 </h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=35">
									<div class="product-img">
										<img src="./Images/Home/img30.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Project Accessories</p>
										<h3 class="product-name">GT2 6mm Width 2GT PU Transmission Timing Belt *1M</a></h3>
										<h4 class="product-price">LKR.490.00 </h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=36">
									<div class="product-img">
										<img src="./Images/Home/img27.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Project Accessories</p>
										<h3 class="product-name">Robot Plastic Tire Wheel</a></h3>
										<h4 class="product-price">LKR.130.00 </h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=37">
									<div class="product-img">
										<img src="./Images/Home/img28.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Project Accessories</p>
										<h3 class="product-name">Ultrasonic Sensor Bracket</a></h3>
										<h4 class="product-price">LKR.100.00 </h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=38">
									<div class="product-img">
										<img src="./Images/Home/img29.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Project Accessories</p>
										<h3 class="product-name">3D Printer Extruder Filament 1.75mm PLA Orange</a></h3>
										<h4 class="product-price">LKR.4290.00</h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=39">
									<div class="product-img">
										<img src="./Images/Home/img31.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Project Accessories</p>
										<h3 class="product-name">Motor Stepper Nema 23 1.8° 2A 90N.Cm Unipolar 127N.Cm Bipolar</a></h3>
										<h4 class="product-price">LKR.3980.00 </h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<a href="Dpro.php?id=40">
									<div class="product-img">
										<img src="./Images/Home/img32.jpg">
									</div>
									<div class="product-body">
										<p class="product-category">Project Accessories</p>
										<h3 class="product-name">18650 PCB Mount Though Hole Battery HoldeLKR single</a></h3>
										<h4 class="product-price">LKR.145.00 </h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

<?php include('conn/Dpfooter.php'); ?>