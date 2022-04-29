<?php include('conn/connection.php'); ?>
<?php include_once('conn/pheader.php'); ?>
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
    <div class="login">
    <div class="row">
        <div class="col-md-6">
            <h2>Log In Here</h2>
            <form action="validation.php" method="POST">
                <div class="form-group">
                    <label> Username</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary" name="SignIn">Login</button>
                </div>
            </form>
    </div>
    </div>
</div>


<?php include_once('conn/pfooter.php'); ?>