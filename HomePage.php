<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="HomeStyle.css?v=1"/>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<title>HomePage</title>	
</head>

<body>
	<h1 align="center"> FLAGSHIP POINT </h1>
	
	<div class="mainNavigation">
  	<a href="HomePage.php">Home</a>
  	<a href="MobilesPage.php">Mobiles</a>
  	<a href="ContactPage.php">Contact</a>
  	<a href="AboutPage.php">About</a>
	<a class="rbtn" href="RegisterPage.php">Register</a>
	<a class="lbtn" href="LoginPage.php">Login</a>
	<a href="AccountSettingsPage.php">Account Settings</a>
	<a href="feedbackPage.php">Feedback</a>
			
</div>
	
	<br>
	
<h2 align="center">Welcome!!!</h2>
<h3 align="center">Find Your Dream Flagship From Here...</h3>
	<br>
	
<style>
	#adate
	{
		font-size: 30px;
		background-color: #000000;
		color: #FFFFFF;
		border-radius: 10px;
	}
</style>
	
<p id="adate" class="sdate" align="center"></p>
	<br><br><br>
	
	
<script>																			// Get Date and Time

	var d = new Date();
	document.getElementById("adate").innerHTML = d;
	
</script>
	
<div class="slideshow-container">

  <div class="slide fade">
    <img src="Slideshow/pic1.jpg" width="1000px" height="500px">
  </div>
	
  <div class="slide fade">
    <img src="Slideshow/pic2.jpg" width="1000px" height="500px">
  </div>
	
  <div class="slide fade">
    <img src="Slideshow/pic3.jpg" width="1000px" height="500px">
  </div>
	
  <div class="slide fade">
    <img src="Slideshow/pic4.jpg" width="1000px" height="500px">
  </div>
	
  <div class="slide fade">
    <img src="Slideshow/pic5.jpg" width="1000px" height="500px">
  </div>
	
</div>
	
	<br><br><br><br>
	
<script language="javascript" type="text/javascript">								// Slide Show Control
	
	var slideIndex = 0;
	showSlides();

	function showSlides() {
  		var i;
  		var slides = document.getElementsByClassName("slide");
  
		for (i = 0; i < slides.length; i++) {
    	slides[i].style.display = "none";
  		}
	
		slideIndex++;
	
  		if (slideIndex > slides.length) {slideIndex = 1}
	
  		slides[slideIndex-1].style.display = "block";
	
  		setTimeout(showSlides, 4000);
		}
	
</script>
	
	<form action="HomePage.php" method="post" align="center">
	<button type="submit" class="viewfeed" name="viewf">View Feedbacks</button>
	</form>
	
<?php

	if(isset($_POST['viewf']))
	{
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$databaseName = "flagship_point";

		$connect9 = mysqli_connect($hostname, $username, $password, $databaseName);
		
				
		$query9 = "SELECT `review`, `date`, `reviewid`, `cusname` FROM `review_log`";
		
		$result9 = mysqli_query($connect9, $query9);
		
		if (mysqli_num_rows($result9) > 0) {
		while($row = mysqli_fetch_assoc($result9)) {
			echo "<p style='color:black; font-size: 20px; background-color:white; border-radius: 20px; padding-left: 30px;'>"."Feedback ID: " . $row["reviewid"]. "<br>". "Date: " . $row["date"]. "<br>" ."Name: ". $row["cusname"]. "<br>" ."Feedback: ". $row["review"]. "<br>". "</p>";
		}}
		else
		{
			echo "No Feedbacks";
		}
		
		mysqli_close($connect9);
		
	}

?>
	
</body>
</html>
