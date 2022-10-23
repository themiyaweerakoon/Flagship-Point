<!doctype html>

<?php

	if(isset($_POST['fbbtn']))
	{
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$databaseName = "flagship_point";
		
		$cname = $_POST["customername"];
		$feeddate = $_POST["fdate"];
		$fback = $_POST["feedback"];
		
		$connect8 = mysqli_connect($hostname, $username, $password, $databaseName);
		
				
		if ($connect8->connect_error) 
		{
    		die("Connection failed: " . $connect8->connect_error);
		}
				
		$query8 = "INSERT INTO `review_log`(`review`, `date`, `cusname`) VALUES ('$fback','$feeddate','$cname')";
		
		if ($connect8->query($query8) === TRUE) 
		{
    		echo '<script>alert("Thank for your Feedback...")</script>';
			echo '<script>window.location.href = "HomePage.php"</script>';
		} 
		else 
		{
    		die("Error: " . $query8 . "<br>" . $connect8->error);
		}
		
		
		$result8 = mysqli_query($connect8,$query8);
		
		mysqli_close($connect8);
		
	}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="feedbackStyle.css?v=1"/>
<meta charset="utf-8">
<title>FeedbackPage</title>	
</head>

<body>
	
<div class="feedback-form">
  <h2>Tell us your Feedback</h2>
  <form action="feedbackPage.php" method="post">
    <input type="text" id="txtcname" name="customername" placeholder="Your Name..." title="Enter your Name..." required />
	  <br><br>
	<input type="date" name="fdate" required />
	  <br><br>
	<input type="text" id="txtfb" name="feedback" placeholder="Your Feedback..." title="Enter your Feedback..." required />
	  <br><br>
    <button type="submit" name="fbbtn" class="feedbkBtn">Submit</button>
	  <br><br>
	<button type="reset" id="resetbtn" name="resetb" class="txtresetB">Reset</button>
  </form>
</div>
	
</body>
</html>