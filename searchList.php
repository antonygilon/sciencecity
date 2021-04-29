<html>
<head>
<title>SCIENTIST INFO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

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
  padding: 12px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>



<body><div class="w3-blue">
 
  <div class="w3-container  w3-blue ">
   <br>
      <img src="my_tn_logo.jpg"  width="110" height="110" align="left"> 
       <center> <h1>  தமிழ்நாடு அறிவியல் அறிஞர்கள் கையேடு

    <img src="pic.jpg"  width="110" height="110" align="right">
     <center><h1>TAMILNADU SCIENTISTS DIRECTORY
   </center></h1>
    <p align="right" class="back">  <a href="index.php" class="w3-button w3-green">Back</a>
</p>
     </div>
    
   
</div>

<table >
<thead>
<th>S.No</th>
<th>NAME</th>
<th>AGE</th>
<th>EDUCATIONAL QUALIFICATION</th>
<th>DATE OF BIRTH</th>
<th>OCCUPATION</th>
<th>TYPE OF ID</th>
<th>ID NUMBER</th>
<th>ADDRESS</th>
<th>PHONE NUMBER</th>
<th>MOBILE NUMBER</th>
<th>EMAIL</th>

<th>SPECIALIZED AREA</th>
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
$contribution=$_POST["contribution"];

$add=null;
$answer1 = $_POST["radios"];  
if ($answer1 == "TN") {
  $add=$_POST["district"];
}
else if($answer1 == "NOT")
{
$add="Others";
} 
?>
<h1>
<center><p class="h">LIST OF SCIENTIST
</p></h1>
<?php 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->set_charset ("utf8");  

?>
<center><h2>
<p><b>DISCIPLINE : </b><i><?php echo $contribution; ?> &nbsp; </i> <b>PLACE : </b><i><?php echo $add; ?></i>
</p></h2></center>
<?php 

	if($add!="Others")
	{
		
$sql="select * from scientist_information where (Contribution_area = '$contribution' ) and (Address LIKE '%$add%') and confirm=1  ";
	}
	else
	{
	$sql="select * from scientist_information where (Contribution_area = '$contribution' ) and (Address NOT LIKE '%TamilNadu%')  and confirm=1 ";	
	}$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
	 $a=1;
    while($row = $result->fetch_assoc()) {
		?>
		<tr>  
		<td><label><?php echo $a++; ?></td>		
<td><?php echo $row["Name"]; ?></td>
 <td><?php echo $row["Age"]; ?></td>
 <td><?php echo $row["Educational_qualification"]; ?></td>
 <td><?php
$original_date = $row["Date_of_birth"];
$timestamp = strtotime($original_date);
$new_date = date("d-m-Y", $timestamp);
echo $new_date; 
?></td>
 <td><label><?php echo $row["Occupation"]; ?></td>
  <td><label><?php echo $row["id_type"]; ?></td>
<td><label><?php echo $row["id_num"]; ?></td> 
    
 <td><?php echo $row["Address"]; ?></td>
  <td><?php echo $row["Phone_number"]; ?></td>
 <td><?php echo $row["Mobile_number"]; ?></td>
  <td><?php echo $row["Email"]; ?></td>
 
   <td><label><?php echo $row["other_contribution"]; ?></td>
  <td><label><?php echo $row["Work_option1"]; ?></td>
 <td><label><?php echo $row["Work_option2"]; ?></td>
 <td><label><?php echo $row["Work_option3"]; ?></td>
  <td><label><?php echo $row["Work_option4"]; ?></td>
</tr>
<?php
   }
} 
else {
    echo "No results found";

}
?>
</table>
</div>
</div>
</div>
</center></center>
</body>
</html>