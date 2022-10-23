<!doctype html>
<?php

	if(isset($_POST['dltbtn']))
	{
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$databaseName = "flagship_point";
		
		$uname = $_POST["uname"];
		$pword = $_POST["pword"];
		
		$connect6 = mysqli_connect($hostname, $username, $password, $databaseName);
		$connect7 = mysqli_connect($hostname, $username, $password, $databaseName);
		
		if ($connect6->connect_error) 
		{
    		die("Connection failed: " . $connect6->connect_error);
		}
		
		$query6 = "DELETE FROM `register_user` WHERE username='$uname' && password='$pword'";
		$query7 = "DELETE FROM `user_login` WHERE username='$uname' && password='$pword'";
				
		if ($connect6->query($query6) === TRUE) 
		{
    		echo '<script>alert("Your account successfully deleted... Thank you for joined with us...")</script>';
			echo '<script>window.location.href = "HomePage.php"</script>';
		} 
		else 
		{
			echo '<script>alert("Delete unsuccessful!!! Please check your Username and Password")</script>';
			echo '<script>window.location.href = "AccountSettingsPage.php"</script>';
    		die("Error: " . $query6 . "<br>" . $connect6->error);
		}
		
		
		$result6 = mysqli_query($connect6,$query6);
		$result7 = mysqli_query($connect7,$query7);

		
		mysqli_close($connect6);
		mysqli_close($connect7);
		
	}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="accountSettingsStyle.css?v=1"/>
<meta charset="utf-8">
<title>AccountSettingsPage</title>
	
<script language="javascript" type="text/javascript">
	
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
	
<div class="delete-form">
  <h2>Delete your Account</h2>
  <form action="accountSettingsPage.php" method="post">
    <input type="text" id="txtuname" name="uname" placeholder="Username" pattern="[A-Za-z0-9_]{1,15}" title="Insert only letters, numbers and the underscore, maximum 15 characters" required />
	  <br><br>
    <input type="password" id="txtpass" name="pword" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
	<center><input type="checkbox" class="showPwd" onclick="showPassword()"><b>Show Password</b></center>
	  <br><br>
    <button type="submit" name="dltbtn" class="deleteBtn">Delete my Account</button>
	  <br><br>
	<button type="reset" id="resetbtn" name="resetb" class="txtresetB">Reset</button>
  </form>
</div>

</body>
</html>