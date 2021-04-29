<html>
<head>

<title>SCIENTIST INFO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js">
</script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<script language="JavaScript">
    function showInput() {
		document.getElementById('nameheading').innerHTML = "NAME:";
        document.getElementById('namedisplay').innerHTML = 
                    document.getElementById("name").value;
					if($y==0)
					{
		document.getElementById('genderheading').innerHTML = "GENDER:";
        document.getElementById('genderdisplay').innerHTML = 
                    document.getElementById("male").value;
					}
					if($y==1)
					{
		document.getElementById('genderheading').innerHTML = "GENDER:";
        document.getElementById('genderdisplay').innerHTML = 
                    document.getElementById("female").value;
					}
					if($y==2)
					{
		document.getElementById('genderheading').innerHTML = "GENDER:";
        document.getElementById('genderdisplay').innerHTML = 
                    document.getElementById("others").value;
					}
		document.getElementById('dobheading').innerHTML = "DATE OF BIRTH";
		document.getElementById('dobdisplay').innerHTML = 
                    document.getElementById("dob").value;
		document.getElementById('ageheading').innerHTML = "AGE:";
		document.getElementById('agedisplay').innerHTML = 
                    document.getElementById("age").value;
		document.getElementById('eduheading').innerHTML = "EDUCATIONAL QUALIFICATION:";
		document.getElementById('edudisplay').innerHTML = 
                    document.getElementById("edu").value;
		document.getElementById('occupationheading').innerHTML = "OCCUPATION:";
		document.getElementById('occupationdisplay').innerHTML = 
                    document.getElementById("occupation").value;
		document.getElementById('speheading').innerHTML = "A. Specialization:";
		document.getElementById('spedisplay').innerHTML = 
                    document.getElementById("spe").value;
		document.getElementById('indheading').innerHTML = "B. Individuality:";
		document.getElementById('inddisplay').innerHTML = 
                    document.getElementById("ind").value;
		document.getElementById('conheading').innerHTML = "C. Contribution towards Society";
		document.getElementById('condisplay').innerHTML = 
                    document.getElementById("con").value;
					if($z==0)
					{
		document.getElementById('typeofheading').innerHTML = "TYPE OF ID:";
        document.getElementById('typeofdisplay').innerHTML = 
                    document.getElementById("employee").value;
					}
					if($z==1)
					{
		document.getElementById('typeofheading').innerHTML = "TYPE OF ID:";
        document.getElementById('typeofdisplay').innerHTML = 
                    document.getElementById("student").value;
					}
					if($z==2)
					{
		document.getElementById('typeofheading').innerHTML = "TYPE OF ID:";
        document.getElementById('typeofdisplay').innerHTML = 
                    document.getElementById("pensioner").value;
					}
					if($z==3)
					{
		document.getElementById('typeofheading').innerHTML = "TYPE OF ID:";
        document.getElementById('typeofdisplay').innerHTML = 
                    document.getElementById("aadhar").value;
					}
		document.getElementById('idnoheading').innerHTML = "ID Number:";
		document.getElementById('idnodisplay').innerHTML = 
                    document.getElementById("idnum").value;
		document.getElementById('phnoheading').innerHTML = "PHONE NUMBER";
		document.getElementById('phnodisplay').innerHTML = 
                    document.getElementById("phno").value;
		document.getElementById('mbnoheading').innerHTML = "MOBILE NUMBER";
		document.getElementById('mbnodisplay').innerHTML = 
                    document.getElementById("mbno").value;
		document.getElementById('faxnoheading').innerHTML = "FAX NUMBER";
		document.getElementById('faxnodisplay').innerHTML = 
                    document.getElementById("faxno").value;
		document.getElementById('emailheading').innerHTML = "EMAIL";
		document.getElementById('emaildisplay').innerHTML = 
                    document.getElementById("email").value;
		document.getElementById('contributionheading').innerHTML = "ON WHICH DISCIPLINE WOULD YOU LIKE TO CONTRIBUTE";
		document.getElementById('contributiondisplay').innerHTML = 
                    document.getElementById("contribution1").value;
		document.getElementById('subareaheading').innerHTML = "SUB AREA";
		document.getElementById('subareadisplay').innerHTML = 
                    document.getElementById("subarea").value;
					var checkBox = document.getElementById("interest");
document.getElementById('areaofinterestheading').innerHTML = "AREA OF INTEREST 1";
  if (checkBox.checked == true){
	  
		document.getElementById('areaofinterestdisplay').innerHTML = 
                    document.getElementById("interest").value;
  }
  else
  {document.getElementById('areaofinterestdisplay').innerHTML = "-";}
  var checkBox1 = document.getElementById("interest1");
 document.getElementById('areaofinterestheading1').innerHTML = "AREA OF INTEREST 2";
  if (checkBox1.checked == true){
	  
		document.getElementById('areaofinterestdisplay1').innerHTML = 
                    document.getElementById("interest1").value;
  }
  else
  {
	  document.getElementById('areaofinterestdisplay1').innerHTML = "-";
  }
  var checkBox2 = document.getElementById("interest2");
 document.getElementById('areaofinterestheading2').innerHTML = "AREA OF INTEREST 3";
  if (checkBox2.checked == true){
	  
		document.getElementById('areaofinterestdisplay2').innerHTML = 
                    document.getElementById("interest2").value;
  }
  else
  {
	  document.getElementById('areaofinterestdisplay2').innerHTML = "-";
  }
var checkBox3 = document.getElementById("interest3");
 document.getElementById('areaofinterestheading3').innerHTML = "AREA OF INTEREST 4";
  if (checkBox3.checked == true){
	  
		document.getElementById('areaofinterestdisplay3').innerHTML = 
                    document.getElementById("interest3").value;
  }
  else
  {
	  document.getElementById('areaofinterestdisplay3').innerHTML = "-";
  }
		if($x==0)
		{
		document.getElementById('institutionheading').innerHTML = "NAME OF THE INSTITUTION";
		document.getElementById('institutiondisplay').innerHTML = 
                    document.getElementById("nameofi1").value;
		document.getElementById('streetheading').innerHTML = "STREET";
		document.getElementById('streetdisplay').innerHTML = 
                    document.getElementById("street1").value;
		document.getElementById('areaheading').innerHTML = "AREA";
		document.getElementById('areadisplay').innerHTML = 
                    document.getElementById("area1").value;
		document.getElementById('districtheading').innerHTML = "DISTRICT";
		document.getElementById('districtdisplay').innerHTML = 
                    document.getElementById("select_opt1").value;
		document.getElementById('stateheading').innerHTML = "STATE";
		document.getElementById('statedisplay').innerHTML = 
                    document.getElementById("state1").value;
		document.getElementById('pincodeheading').innerHTML = "PINCODE";
		document.getElementById('pincodedisplay').innerHTML = 
                    document.getElementById("pincode1").value;
		}
		else
		{
			document.getElementById('institutionheading').innerHTML = "NAME OF THE INSTITUTION";
		document.getElementById('institutiondisplay').innerHTML = 
                    document.getElementById("nameofi2").value;
			document.getElementById('streetheading').innerHTML = "STREET";
		document.getElementById('streetdisplay').innerHTML = 
                    document.getElementById("street2").value;
		document.getElementById('areaheading').innerHTML = "AREA";
		document.getElementById('areadisplay').innerHTML = 
                    document.getElementById("area2").value;
		document.getElementById('districtheading').innerHTML = "DISTRICT";
		document.getElementById('districtdisplay').innerHTML = 
                    document.getElementById("select_opt2").value;
		document.getElementById('stateheading').innerHTML = "STATE";
		document.getElementById('statedisplay').innerHTML = 
                    document.getElementById("state2").value;
		document.getElementById('pincodeheading').innerHTML = "PINCODE";
		document.getElementById('pincodedisplay').innerHTML = 
                    document.getElementById("pincode2").value;
		}
		
		
    }
  </script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/mok-project@latest/dist/main.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/mok-project@latest/dist/styles.css">
    <script type="text/javascript">
       
    </script>
<script>

$( document ).ready(function() {
    $("#add1").hide();
   $("#add2").hide();
});
 

$( function()
{
	
$("#radio1").click( function() {
	$("#add2").hide();
	 $("#add1").show();
	$x=0;	
	
  	
});


$("#radio2").click( function() {
	$("#add1").hide();
	$("#add2").show();
	$x=1;
   
});
$("#male").click( function() {
	$y=0;
  	
});

$("#female").click( function() {
	$y=1;
  	
});

$("#others").click( function() {
	$y=2;
  	
});
$("#employee").click( function() {
	$z=0;
  	
});

$("#student").click( function() {
	$z=1;
  	
});

$("#pensioner").click( function() {
	$z=2;
  	
});
$("#aadhar").click( function() {
	$z=3;
  	
});
$("#tamil").click( function() {
	$(document).keyboard({
                language: 'tamil:',
                enterKey: function () {
                    alert('Hey there! This is a callback function example.');
                },
                keyboardPosition: 'bottom',	
                directEnter: false,
                showSelectedLanguage: true
            });	
	
   
});



});
function myFunction() {
  var checkBox = document.getElementById("tamil");

  if (checkBox.checked == true){

 $(document).keyboard({
                language: 'tamil:',
                enterKey: function () {
                    alert('Hey there! This is a callback function example.');
                },
                keyboardPosition: 'bottom',	
                directEnter: false,
                showSelectedLanguage: true
            });	
  } else {

    
  }
}

	</script>
<style type="text/css">
	.table1
	{ 
		font-size:17px;

	text-align: left;
		font-family: verdana;
	}
	.table1 tr:nth-child(odd) 
	{background-color: white;}
	.table1 tr:nth-child(even) 
	{background-color: lightblue;}
	.table1 b{
		color: red; font-family: verdana;
  font-size: 90%;
  font-weight: bold,italic;}
  .table1.link{
		color: blue; font-family: verdana;
  font-size: 90%;
  font-weight: bold,italic;}
  .table1 .back


  {

  	font-size:20px;
  }


  .table1 h2
  {
  	color:red;
  	text-align: center;
  }
	
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body><div class="w3-blue">
 
  <div class="w3-container  w3-blue ">
  	
   
  	<br>
      <img src="my_tn_logo.jpg" alt="Car" width="110" height="110" align="left"> 
       <center> <h1>  தமிழ்நாடு அறிவியல் அறிஞர்கள் கையேடு

    <img src="pic.jpg" alt="Car" width="110" height="110" align="right">
     <center><h1>TAMILNADU SCIENTISTS DIRECTORY
   </center></h1>
   <p align="right" class="back">  <a href="index.php" class="w3-button w3-green">Back</a>
</p>
     </div></div>
	 <center>
<h2 style="color:red" id="marquee1">
விண்ணப்பப் படிவம்
<br>
Registration Form
</h2>
</center>

<form method="post" action="insert_details.php" enctype="multipart/form-data">
<table  class="table1" align="center">

	<tr><td>1. Name / பெயர்<b>*</b></td><td><input type="text" name="nameEng"  class="f2" id="name">     <input type="radio" name="tamil"   id="tamil">
			<label for="tamil"> Tamil keyboard<br></td>

	</tr>
	<tr>
		<td>2. பாலினம் / gender	<b>*</b></td>
		<td><input type="radio" id="male" name="gender" value="male" class="f3">
			<label for="male" > MALE/ஆண்</label>
			<input type="radio" id="female" name="gender" value="female" class="f3">
			<label for="female" > FEMALE/பெண்</label>
			<input type="radio" id="others" name="gender" value="other" class="f3" >
			<label for="other" >OTHERS/மற்றவர்</label></td>
	</tr>
	
	<tr>
		<td>3. பிறந்த தேதி / DATE OF BIRTH		<b>*</b></td>
		
                <td><input type="date" name="dob" id="dob" ></td>
	</tr>
	<tr>
		<td>4. வயது /  AGE     <b>*</b></td>
		<td><input type="number" name="age" min="10" max="105" class="f2" id="age"> </td>
	</tr>
	<tr>
		<td>5. கல்வித்தகுதி / EDUCATIONAL QUALIFICATION    <b>*</b></td>
		<td><textarea name="qualification" rows="3" cols="20" class="f2" id="edu">

</textarea></td>
	</tr>
	<tr>
		<td>6. தொழில் / OCCUPATION   <b>*</b></td>
		<td><textarea name="occupation" rows="2" cols="50" class="f2" id="occupation"></textarea></td></tr>
	<tr>
		<td> <label>A. Specialization &nbsp; சிறப்புத்தகுதி  </label><br></td>
		<td><textarea name="Specialization" rows="2" cols="50" class="f2" id="spe"></textarea></td></tr>
	<tr>
		<td> <label>B. Individuality &nbsp; தனித்திறன்  </label><br></td>
		<td><textarea name="Individuality" rows="2" cols="50" class="f2" id="ind"></textarea></td>
	</tr>
	<tr>
		<td> <label>C. Contribution towards Society &nbsp; சமூகத்திற்கான பங்களிப்பு </label><br></td>
		<td><textarea name="Society" rows="2" cols="50" class="f2" id="con"></textarea></td>
	</tr>

   



			
		</td>
		
	</tr>
<tr>
	 <td>7. TYPE OF ID / அடையாள வகை	<b>*</b></td>
	
		<td><input type="radio" id="employee" name="typeofid" value="employee" >
			<label for="employee" > EMPLOYEE / ஊழியர்</label><br>
			<input type="radio" id="student" name="typeofid" value="student" >
			<label for="student" > STUDENT / மாணவர் </label><br>
			<input type="radio" id="pensioner" name="typeofid" value="pensioner"  >
			<label for="pensioner" >PENSIONER / ஓய்வு கால ஊதியம் பெறுபவர் </label><br>
			<input type="radio" id="aadhar" name="typeofid" value="aadhar" >
			<label for="aadhar" >AADHAR ID / ஆதார்</label><br>
			
			
			</td>
	</tr>
	<tr>
	 <td>ID Number / அடையாள  எண்<b>*</b></td>
	
		<td><input type="text" name="idnum" class="f2" id="idnum">
			</td>
	</tr>

	<tr>
		<td>8. நிறுவன முகவரி/INSTITUTION ADDRESS    <b>*</b></td>
		<td>
			 <input type="radio" id="radio1" name="radios" value="TN">
       <label for="radio1">Within TamilNadu</label>
			 <input type="radio" id="radio2" name="radios" value="NOT">
       <label for="radio2">Others</label>
		</td>
	</tr>
	<tr>
		<td>
		         நிறுவனத்தின் பெயர் / NAME OF THE INSTITUTION <br><br>
		          தெரு / STREET<br><br>
			பகுதி / AREA<br><br>
			மாவட்டம் / DISTRICT<br><br>
			மாநிலம் / STATE<br><br>
			அஞ்சல் குறியீடு / PINCODE
		</td>
		<td>
			<div id="add1">
			<input type="text" name="nameofi" class="f2" id="nameofi1"><br><br>
			<input type="text" name="street" class="f2" id="street1"><br><br>
			<input type="text" name="area" class="f2" id="area1"><br><br>
			<select name="district" id="select_opt1" class="form-control" onchange="showfield(this.options[this.selectedIndex].value)" > 
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
</select><br>
			<input type="text" value="TamilNadu" name="state" id="state1"class="f2"><br><br>
			<input type="text" name="pincode" class="f2" id="pincode1">
		</div>
		<div id="add2">
			<br>
			<input type="text" name="nameofi1" class="f2" id="nameofi2"><br><br>
			<input type="text" name="street1" class="f2" id="street2"><br><br>
			<input type="text" name="area1" class="f2" id="area2"><br><br>
			<input type="text" value="" name="district1" class="f2" id="select_opt2"><br><br>
			<br>
			<input type="text" value="" name="state1" class="f2" id="state2"><br><br>
			<input type="text" name="pincode1" class="f2" id="pincode2">
		</div>
		</td>
	</tr>
	
	
	<tr>
		<td>9. தொலைபேசி எண் / PHONE NUMBER</td>
		<td><input type="text" name="phoneno" class="f2"id="phno"> </td>
	</tr>
	<tr>
		<td>10. கைபேசி எண் / MOBILE NUMBER    <b>*</b></td>
		<td><input type="text" name="mobileno" class="f2"id="mbno"> </td>
	</tr>
	<tr>
		<td>11. தொலை நகல் எண் / FAX NUMBER</td>
		<td><input type="text" name="fax" class="f2" id="faxno"> </td>
	</tr>
	<tr>
		<td>12. மின்னஞ்சல் முகவரி / EMAIL ID    <b>*</b></td>
		<td><input type="email" name="email" class="f2" id="email"></td>
	</tr>
	<tr>
		<td>13. கீழ்க்கண்ட அறிவியல் துறைகளில் <br>
		தாங்கள் பங்களிப்பு 
		<br>செய்ய விரும்புகிற துறை </td></tr><tr><td> ON WHICH DISCIPLINE WOULD YOU <br>LIKE TO CONTRIBUTE<b>*</b></td>
		<td> <select name="contribution" class="f2" id="contribution1">
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
			</select> 
			<br><br>
		</td></TR><TR>
		<td>SUB AREA </td><td><input type="text" name="sub_area" class="f2" id="subarea"> </td>
	</tr>
	
	<tr>
		<td>14. எவ்வகையில் அறிவியல் பணி<br> செய்ய விரும்புகிறீர்கள் /AREA OF INTEREST<br> <b>*</b></td>
		<td> <input type="checkbox" name="option1" value="To guide the School students" class="f2" id="interest">
			<label for="option1"> To guide the School students<br>
			பள்ளி மாணவர்களுக்கு வழிகாட்ட</label><br><br>
			<input type="checkbox" name="option2" value="To guide the Research students" class="f2" id="interest1">
			<label for="option2"> To guide the Research students<br>
			ஆய்வு மாணவர்களுக்கு வழிகாட்ட
		</label><br><br>
			<input type="checkbox" name="option3" value="To Assist the district administration in disaster times" class="f2" id="interest2">
			<label for="option3">To Assist the district administration in disaster times<br>
			மாவட்ட நிர்வாகம் அரசுக்கு பேரிடர் காலங்களில் உதவிடல்</label><br> <br>
			<input type="checkbox" name="option4" value="Giving suggesstion to the Government"class="f2" id="interest3">
			<label for="option4">Giving suggesstion to the Government<br>
			 அரசுக்கு ஆலோசனை வழங்குதல்</label><br> 
		</td>
	</tr>
	<tr>
	<td>15. Select image to upload: <b>*</b>
</td>
	<td><input type="file" name="fileToUpload" id="fileToUpload" onchange="Filevalidation()"></td>
	
	<script> 
    Filevalidation = () => { 
        const fi = document.getElementById('fileToUpload'); 
        // Check if any file is selected. 
        if (fi.files.length > 0) { 
            for (const i = 0; i <= fi.files.length - 1; i++) { 
  
                const fsize = fi.files.item(i).size; 
                const file = Math.round((fsize / 1024)); 
                // The size of the file. 
                if (file >= 1024) { 
                    alert( 
                      "File too Big, please select a file less than 1mb"); 
                } else { 
                    document.getElementById('size').innerHTML = '<b>'
                    + fileToUpload+ '</b> KB'; 
                  alert( 
                      "Image Uploaded");
                } 
            } 
        } 
    } 
</script> 
	<tr>
	<td></td><td><b>File image of size less than 1MB </b>
	<a target = '_blank' href="https://www.imgonline.com.ua/eng/compress-image-size.php">click here to resize image</a>
	</td>
	</tr>
	<tr>
	<td>16. ATTACHMENTS / இணைப்பு</td	>
	</tr>
	<tr>
	<td>A) EDUCATIONAL QUALIFICATION / கல்வி தகுதி : <b>*</b>
</td>
<td><input type="file" name="fileToUpload2" id="fileToUpload2" ></td>
	
	
	</tr>
	<tr>
	<td>B) GOVERNMENT AWARDS / ஆளுமை விருதுகள் : <b>*</b>
</td>
<td><input type="file" name="fileToUpload3" id="fileToUpload3" ></td>
	
	
	</tr>
	

	</table><br><br>
	<center>
 <input type="button" value="check" class="w3-button w3-blue" onclick="showInput();"><br/>

  
  <center><table style="width:80%" visible="false">
   <colgroup>
    <col style="width: 40%" />
    <col style="width: 40%" />
  </colgroup>
  <tr>
  <td><h5><span id='nameheading'></span></td>
  <td><h5><span id='namedisplay'></span></h5></td>
  </tr>
   <tr>
  <td><h5><span id='genderheading'></span></td>
  <td><h5><span id='genderdisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='dobheading'></td>
  <td><h5><span id='dobdisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='ageheading'></td>
  <td><h5><span id='agedisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='eduheading'></td>
  <td><h5><span id='edudisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='occupationheading'></td>
  <td><h5><span id='occupationdisplay'></span></h5></td>
  </tr>
  
  <td><span id='speheading'></td>
  <td><h5><span id='spedisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='indheading'></td>
  <td><h5><span id='inddisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='conheading'></td>
  <td><h5><span id='condisplay'></span></h5></td>
  </tr>
   <tr>
   <tr>
  <tr>
  <td><h5><span id='typeofheading'></span></td>
  <td><h5><span id='typeofdisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='idnoheading'></td>
  <td><h5><span id='idnodisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='institutionheading'></td>
  <td><h5><span id='institutiondisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='streetheading'></td>
  <td><h5><span id='streetdisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='areaheading'></td>
  <td><h5><span id='areadisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='districtheading'></td>
  <td><h5><span id='districtdisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='stateheading'></td>
  <td><h5><span id='statedisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='pincodeheading'></td>
  <td><h5><span id='pincodedisplay'></span></h5></td>
  </tr>
  
  <tr>
  <td><span id='phnoheading'></td>
  <td><h5><span id='phnodisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='mbnoheading'></td>
  <td><h5><span id='mbnodisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='faxnoheading'></td>
  <td><h5><span id='faxnodisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='emailheading'></td>
  <td><h5><span id='emaildisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='contributionheading'></td>
  <td><h5><span id='contributiondisplay'></span></h5></td>
  </tr>
  
  <tr>
  <td><span id='subareaheading'></td>
  <td><h5><span id='subareadisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='areaofinterestheading'></td>
  <td><h5><span id='areaofinterestdisplay'></span></h5></td>
  </tr>
  <tr>
  <td><span id='areaofinterestheading1'></td>
  <td><h5><span id='areaofinterestdisplay1'></span></h5></td>
  </tr>
  <tr>
  <td><span id='areaofinterestheading2'></td>
  <td><h5><span id='areaofinterestdisplay2'></span></h5></td>
  </tr>
  <tr>
  <td><span id='areaofinterestheading3'></td>
  <td><h5><span id='areaofinterestdisplay3'></span></h5></td>
  </tr>
  
  
  
  </center>
  <table>
	<input  type="submit" class="w3-button w3-blue" value="submit" name="submit"> 
	</center>	

</form>

</body>

</html>