<!doctype html>
<?php 
session_start();
?>
<?php

	if(isset($_POST['vrfybtn']))
	{
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$databaseName = "flagship_point";
		
		$uname = $_POST["uname"];
		
		$connect4 = mysqli_connect($hostname, $username, $password, $databaseName);
		
				
		$query4 = "SELECT `username` FROM `user_login` WHERE username = '$uname'";
		
		$result4 = mysqli_query($connect4, $query4);
		
		$rows = mysqli_num_rows($result4);
		
		if($rows>0)
		{
			$_SESSION['uname'] = $uname;
			echo '<script>alert("Now insert your new password")</script>';
			echo '<script>window.location.href = "ResetPasswordPage.php"</script>';
			exit();
		}
		else
		{
			echo '<script>alert("Please check your Username")</script>';
			echo '<script>window.location.href = "ForgetPasswordPage.php"</script>';
			exit();
		}

		
	}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="forgetPasswordStyle.css?v=1"/>
<meta charset="utf-8">
<title>ForgetPasswordPage</title>
</head>

<body>
	
<div class="fogot-form">
  <h2>Forgot Your Password?</h2>
  <form action="forgetPasswordPage.php" method="post">
    <input type="text" id="txtuname" name="uname" placeholder="Enter your username" pattern="[A-Za-z0-9_]{1,15}" title="Insert only letters, numbers and the underscore, maximum 15 characters" required />
	  <br><br>
    <button type="submit" name="vrfybtn" class="vfyBtn">Verify</button>
	  <br><br>
	<button type="reset" id="resetbtn" name="resetb" class="txtresetB">Reset</button>
  </form>
</div>
	
	
</body>
</html>