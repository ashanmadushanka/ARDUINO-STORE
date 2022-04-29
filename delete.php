<?php include('conn/connection.php');?>
<?php
if(isset($_POST['delete']))
{
  $id=$_POST['id'];
  $query1="DELETE FROM orders WHERE id='$id'";
   $sql1=mysqli_query($conn,$query1);
   if ($sql1) 
   {
    header('location:CHECKOUT.php');
   }
   else
   {
     echo "<script type=\"text/javascript\"> alert(\"error please try again shortly!\")</script>";
   }
}?> 
<?php