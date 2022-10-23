<!doctype html>

<?php 
session_start();
if(!isset($_SESSION["uname"]))
{
		header('Location:ForgetPasswordPage.php');	
}
if(isset($_POST['chngbtn']))
{
   session_destroy();
}
?>

<?php

	if(isset($_POST['chngbtn']))
	{
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$databaseName = "flagship_point";
		
		$uname = $_SESSION["uname"];
		$pword = $_POST["pword"];
		
		$connect5 = mysqli_connect($hostname, $username, $password, $databaseName);
		
		if (!$connect5) 
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$query5 = "UPDATE user_login, register_user SET user_login.password = '$pword', register_user.password = '$pword' WHERE user_login.username = '$uname' && register_user.username = '$uname'";

		if (mysqli_query($connect5, $query5)) 
		{
    		echo '<script>alert("Password Change successfully!!!")</script>';
			echo '<script>window.location.href = "LoginPage.php"</script>';
		} 
		else 
		{
			echo '<script>alert("Check Your New Password")</script>';
    		echo "Error updating record: " . mysqli_error($connect5);
			echo '<script>window.location.href = "ResetPasswordPage.php"</script>';
		}

		mysqli_close($connect5);
		
	}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="resetPasswordStyle.css?v=1"/>
<meta charset="utf-8">
<title>ResetPasswordPage</title>

<script language="javascript" type="text/javascript">				// Show Password
	
function showPassword() 
{
	
  var x = document.getElementById("txtpass");
	
  if (x.type === "password") 
  {
    x.type = "text";
  } 
  else 
  {
    x.type = "password";
  }
}
	
</script>

</head>

<body>
	
<div class="reset-form">
  <h2>Change Your Password</h2>
  <form action="resetPasswordPage.php" method="post">
	<input type="password" id="txtpass" name="pword" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
	<center><input type="checkbox" class="shwPwd" onclick="showPassword()"><b>Show Password</b></center>
	  <br><br>
    <button type="submit" name="chngbtn" class="chgBtn">Change</button>
	  <br><br>
	<button type="reset" id="resetbtn" name="resetb" class="txtresetB">Reset</button>
  </form>
</div>
	
</body>
</html>