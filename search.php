
<!DOCTYPE html>
<html>
<title>SCIENTIST INFO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	body{
		color: black; font-family: verdana;
  font-size: 180%;
  font-weight: bold;

  }
	}
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js">
</script>
<script>

$( document ).ready(function() {
    $("#d").hide();
   
});
 

$( function()
{
$("#radio1").click( function() {
	
	 $("#d").show();
  	
});
$("#radio2").click( function() {
	
	 $("#d").hide();
  	
});

});
</script>
<body>
<div class="w3-blue">
 		<br>
      <img src="my_tn_logo.jpg" alt="Car" width="110" height="110" align="left"> 
       <center> <h1>  தமிழ்நாடு அறிவியல் அறிஞர்கள் கையேடு

    <img src="pic.jpg" alt="Car" width="110" height="110" align="right">
     <center><h1>TAMILNADU SCIENTISTS DIRECTORY
   </center></h1>
    <p align="right" class="back">  <a href="index.php" class="w3-button w3-green">Back</a>
</p>
     </div>
    
 <div class="w3-container">
	<center><table cellpadding="15">
<tr></tr>
<form method="post" action="searchList.php">
<tr><TD>		<label>Discipline </TD>
		<TD><select name="contribution">
			<option value="Physics">Physics</option>
			<option value="Chemistry">Chemistry</option>
			<option value="Mathematical Science">Mathematical Science</option>
			<option value="Biology">Biology</option>
			<option value="Agriculture">Agriculture</option>
			<option value="Indian Medical Science">Indian Medical Science</option>
			<option value="Allopathy">Allopathy</option>
			<option value="Archeology of Tamilnadu">Archeology of Tamilnadu</option>
			<option value="Ancient Tamil Science">Ancient Tamil Science</option>
			<option value="Environmental Science">Environmental Science</option>
			<option value="Anthropology">Anthropology</option>
			<option value="Home Science">Home Science</option>
			<option value="Engineering and Technology">Engineering and Technology</option>
			<option value="Fisheries Science">Fisheries Science</option>
			<option value="Veterinary Science">Veterinary Science</option>
			<option value="Others">Others</option>
		</select> </TD>
		</TR><tr></tr><TR><TD></label>
		

		<tr>
			<td>Choose Place: </td>
			<td> <input type="radio" id="radio1" name="radios" value="TN">
       <label for="radio1">Within TamilNadu</label>
			 <input type="radio" id="radio2" name="radios" value="NOT">
       <label for="radio2">Others</label>
			</td>
		</tr><tr>
			<td></td>

			<td><div id="d">
				<select id="district " name="district" id="select_opt"  onchange="showfield(this.options[this.selectedIndex].value)" > 
	<option value="">Please Select District</option>  
	<option value="Ariyalur">Ariyalur</option>
	<option value="Chengalpattu">Chengalpattu</option>
	<option value="Chennai">Chennai</option>
	<option value="Coimbatore">Coimbatore</option>
	<option value="Cuddalore">Cuddalore</option>
	<option value="Dharmapuri">Dharmapuri</option>
	<option value="Dindigul">Dindigul</option>
	<option value="Erode">Erode</option>
	<option value="Kallakurichi">Kallakurichi</option>
	<option value="Karur">Karur</option>
	<option value="Kanchipuram">Kanchipuram</option>
	<option value="Krishnagiri">Krishnagiri</option>
	<option value="Madurai">Madurai</option>
	<option value="	Mayiladuthurai">Mayiladuthurai</option>
	<option value="Nagapattinam">Nagapattinam</option>
	<option value="Namakkal">Namakkal</option>
	<option value="Nilgiris">Nilgiris</option>
	<option value="Perambalur">Perambalur</option>
	<option value="Pudukkottai">Pudukkottai</option>
	<option value="Ramanathapuram">Ramanathapuram</option>
	<option value="Ranipet">Ranipet</option>
	<option value="Salem">Salem</option>
	<option value="Sivagangai">Sivagangai</option>
	<option value="Tenkasi">Tenkasi</option>
	<option value="Thanjavur">Thanjavur</option>
	<option value="Theni">Theni</option>
	<option value="Thoothukudi">Thoothukudi</option>
	<option value="Tiruchirappalli">Tiruchirappalli</option>
<option value="Tirunelveli">Tirunelveli</option>
<option value="Tirupattur">Tirupattur</option>
<option value="Tiruppur">Tiruppur</option>
	<option value="Tiruvallur">Tiruvallur</option>
		<option value="Tiruvannamalai">Tiruvannamalai</option>
	<option value="Tiruvarur">Tiruvaru

	<option value="Villupuram">Villupuram</option>
	<option value="Vellore">Vellore</option>
	
	
	<option value="Virudhunagar">Virudhunagar</option>
</select>
</div>
	</td>
		</tr></table><br>
	<input type="submit" value="SUBMIT" class="w3-button w3-blue" >
</form>
</center>

</div>