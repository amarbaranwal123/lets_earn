<?php
//$con=mysqli_connect('localhost','root','','iet');
	include ('connection.php');
	$uname=$_POST['uname'];
	$pw=$_POST['pw'];

	$sql="SELECT * FROM `registerform` WHERE uname='$uname' AND pw='$pw'";

	$result=mysqli_query($db,$sql);

	if($result)
	{
		echo '<script type="text/javascript">alert("Login Successfully...!!!")</script>';
		session_start();
		$_SESSION['NAME'] = $uname;
		header("refresh: 2, url = ..\PHP\index.php");
	}
	else
	{
		echo '<script type="text/javascript">alert("Please enter valid Email id & Password!!")</script>';
	}

?>