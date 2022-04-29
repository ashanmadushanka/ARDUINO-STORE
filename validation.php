<?php 

include('conn/connection.php'); 
session_start();

if(isset($_POST['SignIn']))
{
	$name = $_POST['user'];
	$pass = $_POST['password'];

	$query="SELECT * from users where u_name='$name' && password='$pass'";
	$sql=mysqli_query($conn,$query);
	$num=mysqli_num_rows($sql);
	if($name=="admin"&&$pass=="1234") 
    {

       $_SESSION['admin']="admin";
       header('location:orders.php');
    }
    elseif($num == 1)
    {

		$_SESSION['u_name'] =$name;
		header('location:DINDEX.php');	
	}
    else
    {
        echo "<script type=\'text/javascript\'> alert(\'Username and Password are wrong\')</script>";
        header('location:sign.php');
    }
}
?>