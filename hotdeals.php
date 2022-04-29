<?php include('conn/connection.php');?>
<?php include('conn/Dpheader.php')?>



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
		echo "<h1> Hello ".$_SESSION['u_name']." Welcome to the HOT DEALS</h1>";
?>
</div>


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
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<div class="product">
											<a href="pro.php?id=2">
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
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="sign.php"> add to cart</a></button>
											</a>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<a href="pro.php?id=32">
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
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="sign.php"> add to cart</a></button>
											</a>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<a href="pro.php?id=33">
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
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="sign.php"> add to cart</a></button>
											</a>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<a href="pro.php?id=10">
											<div class="product-img">
												<img src="./Images/Home/img13.jpg" height="260" width="80">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
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
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="sign.php"> add to cart</a></button>
											</a>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<a href="pro.php?id=34">
											<div class="product-img" >
												<img src="./Images/Home/img14.jpg" height="260" width="80">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
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
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="sign.php"> add to cart</a></button>
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

<?php include_once('conn/Dpfooter.php'); ?>