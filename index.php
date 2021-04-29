<!DOCTYPE html>
<html>
<title>SCIENTIST INFO</title>
<head>
<style type="text/css">
	p{
		color: black; 
		font-family: verdana;
  font-size: 30px;
  font-weight: bold;
  text-align: center;
}
.c{
color: red; 
		font-family: verdana;
  font-size: 30px;
  font-weight: bold;
 text-align: center;
 text-shadow: hsla();
}
.tamil
{
	color: red; 
	font-size:15px;
}
	
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="registration.php" class="w3-bar-item w3-button w3-blue">Registration Form <br> விண்ணப்பப் படிவம்</p>
</a>
  <a href="search.php" class="w3-bar-item w3-button w3-green">Scientist Information<br>விஞ்ஞானி தகவல்
</a>
  <a href="admin.php" class="w3-bar-item w3-button w3-red">Select Scientist<br>விஞ்ஞானியைத் தேர்ந்தெடுக்க </a>
</div>

<!-- Page Content -->
<div class="w3-blue">
 
  <div class="w3-container  w3-blue ">
  	<br>
      <img src="my_tn_logo.jpg" alt="Car" width="110" height="110" align="left"> 
       <center> <h1>  தமிழ்நாடு அறிவியல் அறிஞர்கள் கையேடு

    <img src="pic.jpg" alt="Car" width="110" height="110" align="right">
     <center><h1>TAMILNADU SCIENTISTS DIRECTORY
   </center></h1>
     </div>
    <button class="w3-button w3-blue w3-xlarge" onclick="w3_open()">☰</button>
   
  
</div>

<div class="w3-container">

</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html> 
