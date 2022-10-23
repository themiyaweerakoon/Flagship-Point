<!doctype html>
<?php

	if(isset($_POST['regbtn']))
	{
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$databaseName = "flagship_point";
		
		$fname = $_POST["firstname"];
		$lname = $_POST["lastname"];
		$email = $_POST["email"];
		$contactno = $_POST["contactno"];
		$uname = $_POST["uname"];
		$pword = $_POST["pword"];
		
		$connect1 = mysqli_connect($hostname, $username, $password, $databaseName);
		$connect2 = mysqli_connect($hostname, $username, $password, $databaseName);
		
		if ($connect1->connect_error) 
		{
    		die("Connection failed: " . $connect1->connect_error);
		}
		
		$query1 = "INSERT INTO `register_user`(`fname`, `lname`, `contactno`, `email`, `username`, `password`) VALUES ('$fname','$lname','$contactno','$email','$uname','$pword')";
		
		$query2 = "INSERT INTO `user_login`(`username`, `password`) VALUES ('$uname','$pword')";
		
		
		if ($connect1->query($query1) === TRUE) 
		{
    		echo '<script>alert("Your account successfully created... Now you can log!!!")</script>';
			echo '<script>window.location.href = "LoginPage.php"</script>';
		} 
		else 
		{
    		die("Error: " . $query1 . "<br>" . $connect1->error);
		}
		
		
		$result1 = mysqli_query($connect1,$query1);
		$result2 = mysqli_query($connect2,$query2);
		
		mysqli_close($connect1);
		mysqli_close($connect2);
		
	}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="RegisterStyle.css?v=1"/>
<meta charset="utf-8">
<title>RegisterPage</title>
	
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
  25%  {background-color:greenyellow; left:0px; top:700px;}
  50%  {background-color:skyblue; left:0px; top:700px;}
  75%  {background-color:orange; left:0px; top:700px;}
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
	
	
<div class="register-form">
  <h3>Register</h3>
  <form action="RegisterPage.php" method="post">
    <input type="text" id="txtfname" name="firstname" placeholder="First Name" required />
	  <br><br>
    <input type="text" id="txtlname" name="lastname" placeholder="Last Name" required />
	  <br><br>
	<input type="email" id="txtemail" name="email" placeholder="Email" required />
	  <br><br>
	<input type="tel" id="txtcnum" name="contactno" placeholder="Contact Number" maxlength="10" pattern="[0-9]{10}" title="Enter the valid number" required />
	  <br><br>
	<input type="text" id="txtuname" name="uname" placeholder="Username" pattern="[A-Za-z0-9_]{1,15}" title="Insert only letters, numbers and the underscore, maximum 15 characters" required />
	  <br><br>
	<input type="password" id="txtpass" name="pword" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
	<center><input type="checkbox" class="shwPwd" onclick="showPassword()"><b>Show Password</b></center>
	  <br><br>
    <button type="submit" id="btnsubmit" name="regbtn" class="txtregisterBtn">Register</button>
	  <br><br>
    <button type="reset" id="btnreset" name="resetbtn" class="txtresetBtn">Reset</button>

  </form>
</div>

	
</body>
		
</html>
