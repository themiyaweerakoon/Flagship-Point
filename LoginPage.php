<!doctype html>
<?php 
session_start();
?>

<?php

	if(isset($_POST['logbtn']))
	{
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$databaseName = "flagship_point";
		
		$uname = $_POST["uname"];
		$pword = $_POST["pword"];
		
		$connect3 = mysqli_connect($hostname, $username, $password, $databaseName);
		
				
		$query3 = "SELECT `username`, `password` FROM `user_login` WHERE username = '$uname' and password = '$pword'";
		
		$result3 = mysqli_query($connect3, $query3);
		
		$rows = mysqli_num_rows($result3);
		
		if($rows>0)
		{
			$_SESSION['uname'] = $uname;
			echo '<script>alert("Login successful!!!")</script>';
			echo '<script>window.location.href = "MobilesPage.php"</script>';
			exit();
		}
		else
		{
			echo '<script>alert("Login unsuccessful!!! Please check your Username and Password")</script>';
			echo '<script>window.location.href = "LoginPage.php"</script>';
			exit();
		}

		
	}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="LoginStyle.css?v=1"/>
<meta charset="utf-8">
<title>LoginPage</title>

<style>
	
label {
  width: 100px;
  height: 100px;
  background-color: yellow;
  position: relative;
  animation-name: animation;
  animation-duration: 4s;
  animation-delay: 2s;
  animation-duration: 20s;
  animation-iteration-count: infinite;
}

@keyframes animation {
  0%   {background-color:yellow; left:0px; top:0px;}
  25%  {background-color:greenyellow; left:1245px; top:0px;}
  50%  {background-color:skyblue; left:1245px; top:700px;}
  75%  {background-color:orange; left:1245px; top:0px;}
  100% {background-color:yellow; left:0px; top:0px;}
}
</style>
	
<script language="javascript" type="text/javascript">					// Show Password
	
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
	
	<label for="flagship_point">FLAGSHIP POINT</label>
	
<div class="log-form">
  <h2>Login to your Account</h2>
  <form action="LoginPage.php" method="post">
    <input type="text" id="txtuname" name="uname" placeholder="Username" pattern="[A-Za-z0-9_]{1,15}" title="Insert only letters, numbers and the underscore, maximum 15 characters" required />
	  <br><br>
    <input type="password" id="txtpass" name="pword" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
	<center><input type="checkbox" class="showPwd" onclick="showPassword()"><b>Show Password</b></center>
	  <br><br>
    <button type="submit" name="logbtn" class="loginBtn">Login</button>
	  <br><br>
	<button type="reset" id="resetbtn" name="resetb" class="txtresetB">Reset</button>
	  <br><br>
    <a class="forgot" href="forgetPasswordPage.php">Forgot Password?</a>
	  <br><br>
	<a class="createaccount" href="RegisterPage.php">Don't you have an Account? Create an Account</a>
  </form>
</div>
	
</body>
</html>
