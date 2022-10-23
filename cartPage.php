<!doctype html>
<?php

session_start();

if(!isset($_SESSION["uname"]))
{
	header('Location:LoginPage.php');	
}

if(isset($_POST['mob1'])){
$_SESSION['mob1'] = $_POST['mob1'];
}

$mymob1 = isset($_SESSION['mob1']) ? $_SESSION['mob1'] : "";

if(isset($_POST['mob2'])){
$_SESSION['mob2'] = $_POST['mob2'];
}

$mymob2 = isset($_SESSION['mob2']) ? $_SESSION['mob2'] : "";

if(isset($_POST['mob3'])){
$_SESSION['mob3'] = $_POST['mob3'];
}

$mymob3 = isset($_SESSION['mob3']) ? $_SESSION['mob3'] : "";

if(isset($_POST['mob4'])){
$_SESSION['mob4'] = $_POST['mob4'];
}

$mymob4 = isset($_SESSION['mob4']) ? $_SESSION['mob4'] : "";

if(isset($_POST['mob5'])){
$_SESSION['mob5'] = $_POST['mob5'];
}

$mymob5 = isset($_SESSION['mob5']) ? $_SESSION['mob5'] : "";

if(isset($_POST['mob6'])){
$_SESSION['mob6'] = $_POST['mob6'];
}

$mymob6 = isset($_SESSION['mob6']) ? $_SESSION['mob6'] : "";

if(isset($_POST['mob7'])){
$_SESSION['mob7'] = $_POST['mob7'];
}

$mymob7 = isset($_SESSION['mob7']) ? $_SESSION['mob7'] : "";

if(isset($_POST['mob8'])){
$_SESSION['mob8'] = $_POST['mob8'];
}

$mymob8 = isset($_SESSION['mob8']) ? $_SESSION['mob8'] : "";

if(isset($_POST['mob9'])){
$_SESSION['mob9'] = $_POST['mob9'];
}

$mymob9 = isset($_SESSION['mob9']) ? $_SESSION['mob9'] : "";

if(isset($_POST['clearCartBtn']))
{
	unset($_SESSION['mob1'],$_SESSION['mob2'],$_SESSION['mob3'],$_SESSION['mob4'],$_SESSION['mob5'],$_SESSION['mob6'],$_SESSION['mob7'],$_SESSION['mob8'],$_SESSION['mob9']);
	header('Location:mobilesPage.php');
}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="cartStyle.css?v=1"/>
<meta charset="utf-8">
<title>CartPage</title>
</head>
	
<style>
	
h1
{
	border-radius: 10px;
	background-color:#FFF1A9;
	text-align: left;
	padding-left: 40px;
	padding-right: 40px;
	
}
		
</style>

<body>
	
 	 <?php echo '<h1>' .  $mymob1 . '</h1>'; ?> 
	
	 <?php echo '<h1>' .  $mymob2 . '</h1>'; ?>

 	 <?php echo '<h1>' .  $mymob3 . '</h1>'; ?>
	
	 <?php echo '<h1>' .  $mymob4 . '</h1>'; ?>

 	 <?php echo '<h1>' .  $mymob5 . '</h1>'; ?>
	
	 <?php echo '<h1>' .  $mymob6 . '</h1>'; ?>

 	 <?php echo '<h1>' .  $mymob7 . '</h1>'; ?>
	
	 <?php echo '<h1>' .  $mymob8 . '</h1>'; ?>

	 <?php echo '<h1>' .  $mymob9 . '</h1>'; ?>
	
	<form action="cartPage.php" method="post">
		<button type="submit" name="clearCartBtn" class="cBtn">Clear Cart</button>
	</form>
	
</body>
</html>