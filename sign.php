<?php include('conn/connection.php'); ?>
<?php include('conn/pheader.php'); ?>
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

<div class="container">
    <br>
    <h1 style="font-size: 15px; color:#6ea0b5;">FOR THE BEST SERVICE OF STORES PLEASE SIGN IN & IF YOU ALLREADY HAVE AN ACCOUNT LOGINING ON THAT.<br>THANK YOU!</h1>
    <div class="row">
        <div class="col-md-6">
            <h2>Sign Up Here</h2>
            <form action="registration.php" method="POST">
                <div class="form-group">
                    <label class="text-black" for="user"> Username</label><label id="vfname" style="visibility: hidden;color: red">Please FillUp</label> 
                    <input type="text" id="user" name="user" class="form-control" onblur="ffname()">
                </div>
                <div class="form-group">
                    <label class="text-black" for="email">Email</label> <label id="vemail" style="visibility: hidden;color: red">Invalid Email</label>
                    <input type="text" id="email" name="email" class="form-control" onblur="femail()">
                </div>
                <div class="form-group">
                    <label class="text-black" for="address">Address</label> <label id="vaddress" style="visibility: hidden;color: red">Please FillUp</label>
                    <textarea name="address" id="address" cols="30" rows="7" class="form-control" placeholder="Type your address here.." onblur="faddress()"></textarea>
                </div>
                <div class="form-group">
                    <label class="text-black" for="subject">Telephone Number</label> <label id="vphone" style="visibility: hidden;color: red">Invalid Phone No:</label> 
                    <input type="text" id="tel" name="tel" class="form-control" onblur="fphone()">
                </div>
                <div class="form-group">
                    <label class="text-black" for="password">Account Password</label> <label id="vapassword" style="visibility: hidden;color: red">Please use length above 8 char</label> 
                    <input type="password" id="password" name="password" class="form-control" onblur="fpassword()">
                </div>
                <div class="form-group">
                     <label class="text-black" for="cpassword">Confirm Password</label> <label id="vacpassword" style="visibility: hidden;color: red">Password not Matched</label> 
                     <input type="password" id="cpassword" name="cpassword" class="form-control" onblur="fcpassword()">
                </div>
                <button type="submit" name="SignUp" class="btn btn-primary">Sign Up</button>
                </div>

            </form>
    </div>
    <br>
    <div>
                <h5>Already have an account - <a href="login.php"> Login Here </a></h5>
    </div>
        </div>
    
</div>

<?php include_once('conn/pfooter.php'); ?>