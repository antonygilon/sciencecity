<html>
<head>
  <style>
  .w3-container:after,.w3-container:before,.w3-panel:after,.w3-panel:before,.w3-row:after,.w3-row:before,.w3-row-padding:after,.w3-row-padding:before,
  .w3-container,.w3-panel{padding:0.01em 16px}.w3-panel{margin-top:16px;margin-bottom:16px}
  .w3-blue,.w3-hover-blue:hover{color:#fff!important;background-color:#2196F3!important}
  .w3-blue-grey,.w3-hover-blue-grey:hover,.w3-blue-gray,.w3-hover-blue-gray:hover{color:#fff!important;background-color:#607d8b!important}
  .w3-btn,.w3-button{border:none;display:inline-block;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}
  .w3-green,.w3-hover-green:hover{color:#fff!important;background-color:#4CAF50!important}
  .w3-btn,.w3-button{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
.w3-disabled,.w3-btn:disabled,.w3-button:disabled{cursor:not-allowed;opacity:0.3}.w3-disabled *,:disabled *{pointer-events:none}
.w3-dropdown-hover:hover > .w3-button:first-child,.w3-dropdown-click:hover > .w3-button:first-child{background-color:#ccc;color:#000}
.w3-bar-block .w3-dropdown-hover .w3-button,.w3-bar-block .w3-dropdown-click .w3-button{width:100%;text-align:left;padding:8px 16px}
.w3-bar .w3-button{white-space:normal}
.w3-dropdown-hover.w3-mobile,.w3-dropdown-hover.w3-mobile .w3-btn,.w3-dropdown-hover.w3-mobile .w3-button,.w3-dropdown-click.w3-mobile,.w3-dropdown-click.w3-mobile .w3-btn,.w3-dropdown-click.w3-mobile .w3-button{width:100%}}
.w3-button:hover{color:#000!important;background-color:#ccc!important}

  </style>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

  <div class="w3-container  w3-blue ">
   <br>
      <img src="my_tn_logo.jpg"  width="110" height="110" align="left"> 
       <center> <h1>  தமிழ்நாடு அறிவியல் அறிஞர்கள் கையேடு

    <img src="pic.jpg"  width="110" height="110" align="right">
     <center><h1>TAMILNADU SCIENTISTS DIRECTORY
   </center></h1>
    <p align="right" class="back"> 
             &nbsp;  <a href="select.php" class="w3-button w3-green">Back</a>

</p>
     </div>


<table>
<thead>
<th>S.No</th>
<th>NAME</th>
<th>AGE</th>
<th>EDUCATIONAL QUALIFICATION</th>
<th>DATE OF BIRTH</th>
<th>OCCUPATION</th>
<th>SPECIALIZATION</th>
<th>INDIVIDUALITY</th>
<th>CONTRIBUTION TOWARDS SOCIETY</th>
<th>TYPE OF ID</th>
<th>ID NUMBER</TH>
<th>ADDRESS</th>
<th>PHONE NUMBER</th>
<th>MOBILE NUMBER</th>
<th>EMAIL</th>
<th>DISCIPLINE</th>
<th>SUB AREA</th>
<th>OPTION1</th>
<th>OPTION2</th>
<th>OPTION3</th>
<th>OPTION4</th>

</thead>
   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scientist";
?>

<center><h1>LIST OF SCIENTIST
</h1>        
<center>
<?php 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset ("utf8");  

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<?php 
	$sql="select * from scientist_information where confirm=1 ";
	$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
	 $a=1; 
    while($row = $result->fetch_assoc()) {
		?>
		<tr class="w3-hover-green">  
		<form method="post" action="select_candidate.php">
		 
<td><label><?php echo $a++; ?></td>		
<td><label><?php echo $row["Name"]; ?></td>
 <td><label><?php echo $row["Age"]; ?></td>
 <td><label><?php echo $row["Educational_qualification"]; ?></td>
 <td><label><?php
$original_date = $row["Date_of_birth"];
$timestamp = strtotime($original_date);
$new_date = date("d-m-Y", $timestamp);
echo $new_date; 
?></td>
   <td><label><?php echo $row["Occupation"]; ?></td>
     <td><label><?php echo $row["occ_description"]; ?></td>
       <td><label><?php echo $row["occ_ind"]; ?></td>
         <td><label><?php echo $row["occ_soc"]; ?></td>
		  <td><label><?php echo $row["id_type"]; ?></td>
<td><label><?php echo $row["id_num"]; ?></td> 
 <td><label><?php echo $row["Address"]; ?></td>
  <td><label><?php echo $row["Phone_number"]; ?></td>
 <td><label><?php echo $row["Mobile_number"]; ?></td>
 <td><input type="text" name="mail" value=" <?php echo $row["Email"]; ?>"></td>
  <td><label><?php echo $row["Contribution_area"]; ?></td>
 <td><label><?php echo $row["other_contribution"]; ?></td>
  <td><label><?php echo $row["Work_option1"]; ?></td>
 <td><label><?php echo $row["Work_option2"]; ?></td>
 <td><label><?php echo $row["Work_option3"]; ?></td>
  <td><label><?php echo $row["Work_option4"]; ?></td>
  
<?php
   }
} 
else {
    echo "No records found";

}
?>
</table>
</div></body>
</html>