<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
 
table {
  font-size: 25px;
  font-family:  Arial;
  
}
  </style>
</head>
<body>
	<div>
   <br>
      <img src="my_tn_logo.jpg"  width="110" height="110" align="left"> 


   <img src="pic.jpg"  width="110" height="110" align="right">
          <center> <h1>  தமிழ்நாடு அறிவியல் அறிஞர்கள் கையேடு
     <center><h1>TAMILNADU SCIENTISTS DIRECTORY
   </center></h1>
</p>
     </div>
     <center>
<h2>APPLICATION DETAILS</h2>

	<table cellspacing="30">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$password = "";
$dbname = "scientist";
$images = null;;
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset ("utf8");   
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
$email=$_POST["mail_id"];
$sql = "SELECT Name,Email,Educational_qualification,
Occupation,occ_description,occ_ind,occ_soc,Address,Mobile_number,Phone_number,Age,Date_of_birth,
Contribution_area,other_contribution,
Work_option1,Work_option2,Work_option3,Work_option4,image,image2,image3
from  scientist_information where Email = '{$email}' ";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
	 	while($row = $result->fetch_assoc()) {?>
	 	
	 	
	 		   		 	<?php	    echo "<img src='uploads/".$row['image']."' width='200' heigtht='200'  >"; ?>
						<br><br>

						ID PROOF:
						<br>
						<?php	    echo "<img src='uploads/".$row['image2']."' width='200' heigtht='200'  >"; ?>
						<br><br>
						AWARDS:
						<br>
						<?php	    echo "<img src='uploads/".$row['image3']."' width='200' heigtht='200'  >"; ?>
						<br>
						
						

	 		<tr><td>Name</td> <td><label><?php echo $row["Name"]; ?></td></label></tr>
			<tr><td>Age</td><td><label><?php echo $row["Age"]; ?></td></tr>
		    <tr><td>Educational Qualification</td><td><label><?php echo $row["Educational_qualification"]; ?></td></tr> 
 			<tr><td>Date of Birth</td><td><label><?php
$original_date = $row["Date_of_birth"];
$timestamp = strtotime($original_date);
$new_date = date("d-m-Y", $timestamp);
echo $new_date; 
?></td></</tr>
   			<tr><td>Occupation</td><td><label><?php echo $row["Occupation"]; ?></td></tr>
    		<tr><td>Specialization</td> <td><label><?php echo $row["occ_description"]; ?></td></tr>
     	    <tr><td>Individuality</td><td><label><?php echo $row["occ_ind"]; ?></td></tr>
        	<tr><td>Contribution Towards Society</td><td><label><?php echo $row["occ_soc"]; ?></td>
			<tr><td>Type of ID</td><td><label><?php echo $row["id_type"]; ?></td></tr>
			<tr><td>ID Number</td><td><label><?php echo $row["id_num"]; ?></td></tr>
 			<tr><td>Address</td><td><label><?php echo $row["Address"]; ?></td></tr>
  			<tr><td>Phone Number</td><td><label><?php echo $row["Phone_number"]; ?></td></tr>
			<tr><td>Mobile Number</td> <td><label><?php echo $row["Mobile_number"]; ?></td></tr>
 			<tr><td>Email</td><td><label><?php echo $row["Email"]; ?></td></tr>
  			<tr><td>Discipline</td><td><label><?php echo $row["Contribution_area"]; ?></td></tr>
 			<tr><td>Sub Area</td><td><label><?php echo $row["other_contribution"]; ?></td></label></tr>
 <tr><td>Work Option1</td> <td><label><?php echo $row["Work_option1"]; ?></td></label></tr>
  <tr><td>Work Option2</td> <td><label><?php echo $row["Work_option2"]; ?></td>
  <tr><td>Work Option3</td> <td><label><?php echo $row["Work_option3"]; ?></td>
   <tr><td>Work Option4</td> <td><label><?php echo $row["Work_option4"]; ?></td>

			
<?php } }?>
</table>
</body>
</html>