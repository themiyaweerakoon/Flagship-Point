<!doctype html>
<?php 
session_start();
if(!isset($_SESSION["uname"]))
{
	header('Location:LoginPage.php');	
}
if(isset($_POST['loutBtn']))
{
   session_destroy();
   header('Location:HomePage.php');
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="mobilesStyle.css?v=1"/>
<meta charset="utf-8">
<title>MobilesPage</title>

<script>																		// Search Method
	
document.addEventListener( 'DOMContentLoaded',function(){
 var searchphone=document.getElementById("mlist").innerHTML;
 searchphone=searchphone.toString();
 document.getElementById("srchBtn").onclick =function ()
 {highlight_word(searchphone)};	
},false);

function highlight_word(searchphone)											// Search fuction and highlighting
{
 var text=document.getElementById("srchBar").value;
 if(text)
 {
  var pattern=new RegExp("("+text+")", "gi");
  var new_text=searchphone.replace(pattern, "<span class='highlight'>"+text+"</span>");
  document.getElementById("mlist").innerHTML=new_text;
 }
}
	
</script>

<style>
	
.highlight
{
 color:#FF0004;
 text-decoration:underline;
}
	
</style>
	
</head>

<body id="mlist">

<div class="topnav">
	<a>FLAGSHIP POINT</a>
  <div class="search-container">
    <form action="mobilesPage.php">
      <input type="text" placeholder="Search..." name="search" id="srchBar">
	  <button type="button" class="sBtn" id="srchBtn">Search</button>
    </form>
  </div>
</div><br>

<form action="cartPage.php">
	<button type="submit" name="cartBtn" class="crtbtn">View Cart</button>
</form><br><br><br>
	
<form action="mobilesPage.php" method="post">
	<button type="submit" name="loutBtn" class="logoutbtn">Logout</button>
</form>


<form action="cartPage.php" method="post"
<div class="card">
  <img src="Mobile Images/Samsung_S20_Ultra.jpg" style="width:80%">
  <h1 class="name" id="mname1">Samsung Galaxy S20 Utra 5G</h1>
  <p class="price">Rs.260,000</p>
  <p class="details"><b>NETWORK:</b> GSM / CDMA / HSPA / EVDO / LTE / 5G <br>
	  <b>LAUNCH:</b> 2020, February 11 <br>
	  <b>BODY:</b> Glass front (Gorilla Glass 6), glass back (Gorilla Glass 6), aluminum frame1 <br>
	  <b>DISPLAY:</b> Dynamic AMOLED 2X capacitive touchscreen, 16M colors <br>
	  <b>Resolution:</b> 1440 x 3200 pixels, 20:9 ratio (~511 ppi density) <br>
	  <b>OS:</b> Android 10.0; One UI 2 <br>
	  <b>CHIPSET:</b> Exynos 990 (7 nm+) - Global <br>
	  <b>CPU:</b> Octa-core (2x2.73 GHz Mongoose M5, 2x2.50 GHz Cortex-A76, 4x2.0 GHz Cortex-A55) - Global <br>
	  <b>GPU:</b> Mali-G77 MP11 - Global <br>
	  <b>MEMORY:</b> 128GB 12GB RAM, 256GB 12GB RAM, 512GB 16GB RAM <br>
	  <b>MAIN CAMERA:</b> 108 MP, f/1.8, 26mm (wide), 1/1.33", 0.8µm, PDAF, OIS <br>
	  <b>SELFIE CAMERA:</b> 40 MP, f/2.2, 26mm (wide), 0.7µm, PDAF <br>
	  <b>VIDEO:</b> 4320p@24fps, 2160p@30/60fps, HDR10+, dual-video rec., stereo sound rec., gyro-EIS and OIS <br>
	  <b>COMMS:</b> WLAN, Bluetooth, GPS, NFC, Radio, USB <br>
	  <b>SENSORS:</b> Fingerprint (under display, ultrasonic), accelerometer, gyro, proximity, compass, barometer <br>
	  <b>BATTERY:</b> Non-removable Li-Po 5000 mAh battery, Fast charging 45W </p>
  <p><button type="submit" name="mob1" value="Samsung Galaxy S20 Utra 5G">Add to Cart</button></p>
</div>
</form>
	
<form action="cartPage.php" method="post">
<div class="card">
  <img src="Mobile Images/Apple_iphone_Pro_10.jpg" style="width:80%">
  <h1 class="name" id="mname2">Apple iPhone 11 Pro Max</h1>
  <p class="price">Rs.278,000</p>
  <p class="details"><b>NETWORK:</b> GSM / CDMA / HSPA / EVDO / LTE <br>
	  <b>LAUNCH:</b> 2019, September <br>
	  <b>BODY:</b> Glass front (Gorilla Glass), glass back (Gorilla Glass), stainless steel frame <br>
	  <b>DISPLAY:</b> Super Retina XDR OLED capacitive touchscreen, 16M colors <br>
	  <b>Resolution:</b> 1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density) <br>
	  <b>OS:</b> iOS 13, upgradable to iOS 13.4 <br>
	  <b>CHIPSET:</b> Apple A13 Bionic (7 nm+) <br>
	  <b>CPU:</b> Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder) <br>
	  <b>GPU:</b> Apple GPU (4-core graphics) <br>
	  <b>MEMORY:</b> 64GB 4GB RAM, 256GB 4GB RAM, 512GB 4GB RAM <br>
	  <b>MAIN CAMERA:</b> 12 MP, f/1.8, 26mm (wide), 1/2.55", 1.4µm, dual pixel PDAF, OIS <br>
	  <b>SELFIE CAMERA:</b> 12 MP, f/2.2, 23mm (wide) <br>
	  <b>VIDEO:</b> 2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec. <br>
	  <b>COMMS:</b> WLAN, Bluetooth, GPS, NFC, USB <br>
	  <b>SENSORS:</b> Face ID, accelerometer, gyro, proximity, compass, barometer <br>
	  <b>BATTERY:</b> Non-removable Li-Ion 3969 mAh battery (15.04 Wh) </p>
  <p><button type="submit" name="mob2" value="Apple iPhone 11 Pro Max">Add to Cart</button></p>
</div>
</form>
	
<form action="cartPage.php" method="post">
<div class="card">
  <img src="Mobile Images/Huawei_P40_Pro+.jpg" style="width:80%">
  <h1 class="name" id="mname3">Huawei P40 Pro+</h1>
  <p class="price">Rs.198,000</p>
  <p class="details"><b>NETWORK:</b> GSM / HSPA / LTE / 5G <br>
	  <b>LAUNCH:</b> 2020, March 26 <br>
	  <b>BODY:</b> Glass front, cerramic back, cerramic frame <br>
	  <b>DISPLAY:</b> OLED capacitive touchscreen, 16M colors <br>
	  <b>Resolution:</b> 141200 x 2640 pixels (~441 ppi density) <br>
	  <b>OS:</b> Android 10.0 (AOSP + HMS); EMUI 10.1 <br>
	  <b>CHIPSET:</b> HiSilicon Kirin 990 5G (7 nm+) <br>
	  <b>CPU:</b> Octa-core (2x2.86 GHz Cortex-A76, 2x2.36 GHz Cortex-A76, 4x1.95 GHz Cortex-A55) <br>
	  <b>GPU:</b> Mali-G76 MP16 <br>
	  <b>MEMORY:</b> 256GB 8GB RAM, 512GB 8GB RAM <br>
	  <b>MAIN CAMERA:</b> 50 MP, f/1.9, 23mm (wide), 1/1.28", 2.44µm, omnidirectional PDAF, OIS <br>
	  <b>SELFIE CAMERA:</b> 32 MP, f/2.2, 26mm (wide), 1/2.8", 0.8µm, AF <br>
	  <b>VIDEO:</b> 2160p@30/60fps, 1080p@30/60fps, 720@7680fps, 1080p@960fps, HDR; gyro-EIS <br>
	  <b>COMMS:</b> WLAN, Bluetooth, GPS, NFC, Infrared port, USB <br>
	  <b>SENSORS:</b> Infrared face recognition, fingerprint (under display), accelerometer, gyro, proximity <br>
	  <b>BATTERY:</b> Non-removable Li-Po 4200 mAh battery </p>
  <p><button type="submit" name="mob3" value="Huawei P40 Pro+">Add to Cart</button></p>
</div>
</form>
	
<form action="cartPage.php" method="post">
<div class="card">
  <img src="Mobile Images/Xiaomi_Mi_10_Pro_5g.jpg" style="width:80%">
  <h1 class="name" id="mname4">Xiaomi Mi 10 Pro 5G</h1>
  <p class="price">Rs.130,000</p>
  <p class="details"><b>NETWORK:</b> GSM / HSPA / LTE / 5G <br>
	  <b>LAUNCH:</b> 2020, February 13 <br>
	  <b>BODY:</b> Glass front (Gorilla Glass 5), glass back, aluminum frame <br>
	  <b>DISPLAY:</b> Super AMOLED capacitive touchscreen, 16M colors <br>
	  <b>Resolution:</b> 1080 x 2340 pixels, 19.5:9 ratio (~386 ppi density) <br>
	  <b>OS:</b> Android 10.0; MIUI 11 <br>
	  <b>CHIPSET:</b> Qualcomm SM8250 Snapdragon 865 (7 nm+) <br>
	  <b>CPU:</b> Octa-core (1x2.84 GHz Kryo 585, 3x2.42 GHz Kryo 585, 4x1.80 GHz Kryo 585) <br>
	  <b>GPU:</b> Adreno 650 <br>
	  <b>MEMORY:</b> 256GB 8GB RAM, 256GB 12GB RAM, 512GB 12GB RAM <br>
	  <b>MAIN CAMERA:</b> 108 MP, f/1.7, (wide), 1/1.33", 0.8µm, PDAF, Laser AF, OIS <br>
	  <b>SELFIE CAMERA:</b> 20 MP, f/2.0, (wide), 1/3", 0.9µm <br>
	  <b>VIDEO:</b> 4320p@30fps, 2160p@30/60fps, 1080p@30/60/120/240/960fps; gyro-EIS <br>
	  <b>COMMS:</b> WLAN, Bluetooth, GPS, NFC, USB <br>
	  <b>SENSORS:</b> Fingerprint (under display, optical), accelerometer, gyro, proximity, compass, barometer <br>
	  <b>BATTERY:</b> Non-removable Li-Po 4500 mAh battery </p>
  <p><button type="submit" name="mob4" value="Xiaomi Mi 10 Pro 5G">Add to Cart</button></p>
</div>
</form>
	
<form action="cartPage.php" method="post">
<div class="card">
  <img src="Mobile Images/Oppo_Find_X2_Pro.jpg" style="width:80%">
  <h1 class="name" id="mname5">Oppo Find X2 Pro</h1>
  <p class="price">Rs.212,000</p>
  <p class="details"><b>NETWORK:</b> GSM / HSPA / LTE / 5G <br>
	  <b>LAUNCH:</b> 2020, March 6 <br>
	  <b>BODY:</b> Glass front (Gorilla Glass 6), cerramic back or leather back, aluminum frame <br>
	  <b>DISPLAY:</b> AMOLED capacitive touchscreen, 1.07B colors <br>
	  <b>Resolution:</b> 1440 x 3168 pixels (~513 ppi density) <br>
	  <b>OS:</b> Android 10.0; ColorOS 7.1 <br>
	  <b>CHIPSET:</b> Qualcomm SM8250 Snapdragon 865 (7 nm+) <br>
	  <b>CPU:</b> Octa-core (1x2.84 GHz Kryo 585, 3x2.42 GHz Kryo 585, 4x1.8 GHz Kryo 585) <br>
	  <b>GPU:</b> Adreno 650 <br>
	  <b>MEMORY:</b> 256GB 12GB RAM, 512GB 12GB RAM <br>
	  <b>MAIN CAMERA:</b> 48 MP, f/1.7, 25mm (wide), 1/1.43", 1.12µm, 5x optical zoom, PDAF, Laser AF, OIS <br>
	  <b>SELFIE CAMERA:</b> 32 MP, f/2.4, (wide), 1/2.8", 0.8µm <br>
	  <b>VIDEO:</b> 2160p@30/60fps, 1080p@30/60fps; gyro-EIS; HDR <br>
	  <b>COMMS:</b> WLAN, Bluetooth, GPS, NFC, USB <br>
	  <b>SENSORS:</b> Fingerprint (under display, optical), accelerometer, gyro, proximity, compass <br>
	  <b>BATTERY:</b> Non-removable Li-Po 4260 mAh battery </p>
  <p><button type="submit" name="mob5" value="Oppo Find X2 Pro">Add to Cart</button></p>
</div>
</form>
	
<form action="cartPage.php" method="post">
<div class="card">
  <img src="Mobile Images/Oneplus_8_Pro.jpg" style="width:80%">
  <h1 class="name" id="mname6">OnePlus 8 Pro</h1>
  <p class="price">Rs.180,000</p>
  <p class="details"><b>NETWORK:</b> GSM / HSPA / LTE / 5G <br>
	  <b>LAUNCH:</b> Exp. announcement 2020, April 14 <br>
	  <b>BODY:</b> Glass front (Gorilla Glass 6), glass back (Gorilla Glass 5), aluminum frame <br>
	  <b>DISPLAY:</b> Fluid AMOLED capacitive touchscreen, 16M colors <br>
	  <b>Resolution:</b> 1440 x 3120 pixels, 19.5:9 ratio (~507 ppi density) <br>
	  <b>OS:</b> Android 10.0; OxygenOS 10.0 <br>
	  <b>CHIPSET:</b> Qualcomm SM8250 Snapdragon 865 (7 nm+) <br>
	  <b>CPU:</b> Octa-core (1x2.84 GHz Kryo 585, 3x2.42 GHz Kryo 585, 4x1.8 GHz Kryo 585) <br>
	  <b>GPU:</b> Adreno 650 <br>
	  <b>MEMORY:</b> 128GB 8GB RAM, 256GB 12GB RAM <br>
	  <b>MAIN CAMERA:</b> 48 MP, f/1.8, 25mm (wide), 1/1.43", 1.12µm, omnidirectional PDAF, Laser AF, OIS <br>
	  <b>SELFIE CAMERA:</b> 16 MP, (wide) <br>
	  <b>VIDEO:</b> 2160p@30/60fps, 1080p@30/60/240fps, 720p@960fps, Auto HDR, gyro-EIS <br>
	  <b>COMMS:</b> WLAN, Bluetooth, GPS, NFC, USB <br>
	  <b>SENSORS:</b> Fingerprint (under display, optical), accelerometer, gyro, proximity, compass <br>
	  <b>BATTERY:</b> Non-removable Li-Po 4510 mAh battery </p>
  <p><button type="submit" name="mob6" value="OnePlus 8 Pro">Add to Cart</button></p>
</div>
</form>
	
<form action="cartPage.php" method="post">
<div class="card">
  <img src="Mobile Images/Nokia_9_Pureview.jpg" style="width:80%">
  <h1 class="name" id="mname7">Nokia 9 PureView</h1>
  <p class="price">Rs.114,000</p>
  <p class="details"><b>NETWORK:</b> GSM / HSPA / LTE <br>
	  <b>LAUNCH:</b> 2019, February <br>
	  <b>BODY:</b> Glass front (Gorilla Glass 5), glass back, aluminum frame <br>
	  <b>DISPLAY:</b> P-OLED capacitive touchscreen, 16M colors <br>
	  <b>Resolution:</b> 1440 x 2880 pixels, 18:9 ratio (~538 ppi density) <br>
	  <b>OS:</b> Android 9.0 (Pie), upgradable to Android 10.0; Android One <br>
	  <b>CHIPSET:</b> Qualcomm SDM845 Snapdragon 845 (10 nm) <br>
	  <b>CPU:</b> Octa-core (4x2.8 GHz Kryo 385 Gold, 4x1.7 GHz Kryo 385 Silver) <br>
	  <b>GPU:</b> Adreno 630 <br>
	  <b>MEMORY:</b> 	128GB 6GB RAM <br>
	  <b>MAIN CAMERA:</b> 5x 12 MP, f/1.8, 28mm (wide), 1/2.9", 1.25µm <br>
	  <b>SELFIE CAMERA:</b> 20 MP, f/2.0, (wide), 1/2.8", 1.0μmF <br>
	  <b>VIDEO:</b> 2160p@30fps, 1080p@30fps, HDR <br>
	  <b>COMMS:</b> WLAN, Bluetooth, GPS, NFC, USB <br>
	  <b>SENSORS:</b> Fingerprint (under display, optical), accelerometer, gyro, proximity, compass, barometer <br>
	  <b>BATTERY:</b> Non-removable Li-Po 3320 mAh battery </p>
  <p><button type="submit" name="mob7" value="Nokia 9 PureView">Add to Cart</button></p>
</div>
</form>
	
<form action="cartPage.php" method="post">
<div class="card">
  <img src="Mobile Images/Sony_Xperia_10_Plus.jpg" style="width:80%">
  <h1 class="name" id="mname8">Sony Xperia 10 Plus</h1>
  <p class="price">Rs.138,000</p>
  <p class="details"><b>NETWORK:</b> GSM / HSPA / LTE <br>
	  <b>LAUNCH:</b> 2019, February <br>
	  <b>BODY:</b> Glass front (Gorilla Glass 5), plastic back, plastic frame <br>
	  <b>DISPLAY:</b> IPS LCD capacitive touchscreen, 16M colors <br>
	  <b>Resolution:</b> 1080 x 2520 pixels, 21:9 ratio (~422 ppi density) <br>
	  <b>OS:</b> Android 9.0 (Pie) <br>
	  <b>CHIPSET:</b> Qualcomm SDM636 Snapdragon 636 (14 nm) <br>
	  <b>CPU:</b> Octa-core (4x1.8 GHz Kryo 260 Gold, 4x1.6 GHz Kryo 260 Silver) <br>
	  <b>GPU:</b> Adreno 509 <br>
	  <b>MEMORY:</b> 64GB 4GB RAM, 64GB 6GB RAM <br>
	  <b>MAIN CAMERA:</b> 12 MP, f/1.8, 27mm (wide), 1/2.8", 1.25µm, PDAF <br>
	  <b>SELFIE CAMERA:</b> 8 MP, f/2.0, 24mm (wide), 1/4", 1.12µm <br>
	  <b>VIDEO:</b> 2160p@30fps, 1080p@30fps <br>
	  <b>COMMS:</b> WLAN, Bluetooth, GPS, NFC, Radio, USB <br>
	  <b>SENSORS:</b> Fingerprint (side-mounted), accelerometer, proximity, compass <br>
	  <b>BATTERY:</b> Non-removable Li-Ion 3000 mAh battery </p>
  <p><button type="submit" name="mob8" value="Sony Xperia 10 Plus">Add to Cart</button></p>
</div>
</form>
	
<form action="cartPage.php" method="post">
<div class="card">
  <img src="Mobile Images/Google_Pixel_4-XL.jpg" style="width:80%">
  <h1 class="name" id="mname9">Google Pixel 4 XL</h1>
  <p class="price">Rs.188,000</p>
  <p class="details"><b>NETWORK:</b> GSM / CDMA / HSPA / EVDO / LTE <br>
	  <b>LAUNCH:</b> 2019, October <br>
	  <b>BODY:</b> Glass front (Gorilla Glass 5), glass back (Gorilla Glass 5), aluminum frame <br>
	  <b>DISPLAY:</b> P-OLED capacitive touchscreen, 16M colors <br>
	  <b>Resolution:</b> 1440 x 3040 pixels, 19:9 ratio (~537 ppi density) <br>
	  <b>OS:</b> Android 10.0 <br>
	  <b>CHIPSET:</b> Qualcomm SM8150 Snapdragon 855 (7 nm) <br>
	  <b>CPU:</b> Octa-core (1x2.84 GHz Kryo 485, 3x2.42 GHz Kryo 485, 4x1.78 GHz Kryo 485) <br>
	  <b>GPU:</b> Adreno 640 <br>
	  <b>MEMORY:</b> 64GB 6GB RAM, 128GB 6GB RAM <br>
	  <b>MAIN CAMERA:</b> 12.2 MP, f/1.7, 27mm (wide), 1/2.55", 1.4µm, dual pixel PDAF, OIS <br>
	  <b>SELFIE CAMERA:</b> 8 MP, f/2.0, 22mm (wide), 1.22µm, no AF <br>
	  <b>VIDEO:</b> 2160p@30fps, 1080p@30/60/120fps, 1080p@30fps (gyro-EIS) <br>
	  <b>COMMS:</b> WLAN, Bluetooth, GPS, NFC, USB <br>
	  <b>SENSORS:</b> Face ID, accelerometer, gyro, proximity, compass, barometer <br>
	  <b>BATTERY:</b> Non-removable Li-Po 3700 mAh battery </p>
  <p><button type="submit" name="mob9" value="Google Pixel 4 XL">Add to Cart</button></p>
</div>
</form>
		
</body>
</html>