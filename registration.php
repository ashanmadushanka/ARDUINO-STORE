<?php include('conn/connection.php'); ?>
<?php 
if(isset($_POST['SignUp']))
{


$name = $_POST['user'];
$email = $_POST['email'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];
$query="SELECT * from users where u_name='$name'";
					$sql=mysqli_query($conn,$query);
					$num=mysqli_num_rows($sql);


		if($name=="" || $email=="" || $address=="" || $tel=="" || $pass=="" || $cpass=="")
		{
			echo "<script type=\"text/javascript\"> alert(\"Please fillup field corectly..!\")</script>";
			
		}
		else
		{
			

			if($pass==$cpass)
			{



				if($num == 1)
				{
					echo "<script type=\"text/javascript\"> alert(\"Username already exsisted..!\")</script>";
				}
				else
				{
					$reg="INSERT INTO users VALUES('$name','$email','$address','$tel','$pass','$cpass')";
					mysqli_query($conn,$reg);
					    echo "<script type=\"text/javascript\"> alert(\"Succesfully Registered..!\")</script>";
		                header('location:login.php');
				}
		    
		    }
			else
			{
		  	  echo "<center>passwords are not matched</center>";
			}
		}                  
}
?>
