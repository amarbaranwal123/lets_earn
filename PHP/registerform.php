<?php
//$con = mysqli_connect('localhost','root','','iet');
include ('../PHP/connection.php');
$name=$_POST['name'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$pw=$_POST['pw'];
$pw1=$_POST['pw1'];

$query="INSERT INTO `registerform`(`name`, `uname`, `email`, `pw`, `pw1`) VALUES ('$name','$uname','$email','$pw','$pw1')";

$result=mysqli_query($db,$query);

if($result)
{
	echo '<script type="text/javascript">alert("Registration Successfully..!!!")</script>';
	header("refresh: 2, url = Login Form.php");
}

else
{
	echo '<script type="text/javascript">alert("Not Registered!!!")</script>';
}

?>