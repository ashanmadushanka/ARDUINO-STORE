<?php include('conn/connection.php'); 

session_start();
?>
<?php 


$name = $_POST['user'];
$pass = $_POST['password'];

$query="SELECT * from users where u_name='$name' && password='$pass'";
$sql=mysqli_query($conn,$query);
$num=mysqli_num_rows($sql);

if($num == 1)
{
	$_SESSION['u_name'] =$name;
	header('location:CHECKOUT.php');
}
else
{
	header('location:login.php');
}
?>