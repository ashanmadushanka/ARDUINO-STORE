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
						<li><a href="DPA.php">Project Accessories</a></li>
						<li><a href="DIOT.php">IOT</a></li>
						<li><a href="hotdeals.php"style="color: red;">HOT DEALS  <i class="fa fa-gift"  style="font-size:20px;color:red"></i></a></li>
						<li class="active"><a href="CHECKOUT.php"style="color: red;">Cart  <i class="fa fa-cart-arrow-down" style="font-size:20px;color:red"></i></i></a></li>


					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->


<div class="checkout-panel">
  <div class="panel-body">
    <h2 class="title">Checkout here!</h2>
 
    <div class="progress-bar">
      <div class="step active"></div>
      <div class="step active"></div>
      <div class="step"></div>
      <div class="step"></div>
    </div>
 
    <div class="payment-method">
      <label for="card" class="method card">
        <div class="card-logos">
          <img src="https://designmodo.com/demo/checkout-panel/img/visa_logo.png"/>
          <img src="https://designmodo.com/demo/checkout-panel/img/mastercard_logo.png"/>
        </div>
 
        <div class="radio-input">
          <input id="card" type="radio" name="payment">
          Pay AU$20.99 with credit card
        </div>
      </label>
 
      <label for="paypal" class="method paypal">
        <img src="https://designmodo.com/demo/checkout-panel/img/paypal_logo.png"/>
        <div class="radio-input">
          <input id="paypal" type="radio" name="payment">
          Pay AU$20.99 with PayPal
        </div>
      </label>
    </div>
 
    <div class="input-fields">
      <div class="column-1">
        <label for="cardholder">Name</label>
        <input type="text" id="cardholder" />
 
        <div class="small-inputs">
          <div>
            <label for="date">Valid date</label>
            <input type="text" id="date"/>
          </div>
 
          <div>
            <label for="verification">CVV / CVC *</label>
            <input type="password" id="verification"/>
          </div>
        </div>
 
      </div>
      <div class="column-2">
        <label for="cardnumber">Card Number</label>
        <input type="password" id="cardnumber"/>
 
        <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
      </div>
    </div>
  </div>
 
  <div class="panel-footer">
    <button class="btn back-btn">Back</button>
    <button class="btn next-btn">Next Step</button>
  </div>
</div>





<?php include_once('conn/Dpfooter.php'); ?>