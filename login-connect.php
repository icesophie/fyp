<?php 

session_start();

include ('connect.php');

if(isset($_POST['stafflogin']));
{
	$user_unsafe=$_POST['staffID'];
	$pass_unsafe=$_POST['password'];

	$user = mysqli_real_escape_string($conn,$user_unsafe);
	$pass=mysqli_real_escape_string($conn,$pass_unsafe);

	$query=mysqli_query($conn,"select * from staff where staffID='$user' and password='$pass'")or die(mysqli_error($conn));

	$row=mysqli_fetch_array($query);

		// $staffid=$row['staffID'];
		$counter=mysqli_num_rows($query);
		// $id=$row['staffID'];
		// $position = $row['position'];

		if ($counter==0)
		{
			echo "<script type='text/javascript'>alert('Invalid ID or Password!');
			document.location='login.php'</script>";
		}
		else
		{
			$_SESSION['staffID']=$row['staffID'];
		    $_SESSION['position'] =$row['position'];


			

			// echo"<script type='text/javascript'>document.location='home.php'</script>";


			echo"<script type='text/javascript'>document.location='index.php'</script>";

		}


}