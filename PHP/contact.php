<?php
//$con=mysqli_connect('localhost','root','','iet');
	include ('connection.php');
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$subject=$_POST['subject'];
	$msg=$_POST['msg'];

	$query = "INSERT INTO `contactus`(`name`, `email`, `mobile`, `subject`, `msg`) VALUES ('$name','$email','$mobile','$subject','$msg')";

	$result=mysqli_query($db, $query);

	if($result)
{
	echo '<script type="text/javascript">alert("Thanks for Contacting Us..!!!")</script>';
	header("refresh: 2, url = index.php");
}

else
{
	echo '<script type="text/javascript">alert("Enter Valid Details!!!")</script>';
}

?>