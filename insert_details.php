<html>
<body>
 <?php 

$name=$_POST["nameEng"];
$idnum=$_POST["idnum"];
$age=$_POST["age"];
$dob=$_POST["dob"];
$qualification=$_POST["qualification"];
$occupation=$_POST["occupation"];
$occ_des=$_POST["Specialization"];
$occ_ind=$_POST["Individuality"];
$occ_soc=$_POST["Society"];
$add=NULL;
$number=$_POST["phoneno"];
$mobile=$_POST["mobileno"];
$fax=$_POST["fax"];
$email=$_POST["email"];
$contribution=$_POST["contribution"];
$others_contribution=$_POST["sub_area"];
$option1=NULL;
$option2=NULL;
$option3=NULL;
$option4=NULL;

$servername = "localhost"; 
 $username = "root";	
$password = "";	
$occ=NULL;
$dbname = "scientist";
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
$target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
$imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
//	echo "hwdi";
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
 
  $width= $check[0];
  $height= $check[1];
  //echo $height;
  if(1)
  {
      if (0) {
           // echo $_FILES["fileToUpload"]["size"];
          //    echo "Sorry, your file is too large.";
      	?>
      	<script>
if(confirm("INVALID FILE SIZE ..FILE IS LARGE THAN 2MB")) {
    window.location.href = "http://localhost/scientist/registration.php"
}</script>
        <?php $uploadOk = 0;
        }
        else
          $uploadOk=1;
  }
  else
  {
    $uploadOk=0;
  //  echo $width;
    //echo "\n";
    //echo $height;
    //echo "error in width and height "; ?>
    <script>
if(confirm("ERROR IN WIDTH AND HEIGHT")) {
    window.location.href = "http://localhost/scientist/registration.php"
}</script>
  <?php } 
 if($uploadOk==1)
  { 
//echo "ok";
//validation
if($name == null || $age == null || $dob == null || $qualification == null
|| $occupation == null || $mobile == null || $email == null || $contribution == null
)
{?>
	<script>
if(confirm("PLEASE ENTER ALL REQUIRED FIELDS")) {
    window.location.href = "http://localhost/scientist/registration.php"
}</script>
<?php }
else
{
	if (isset($_POST['option1'])) {
  $option1=$_POST["option1"];
}
if (isset($_POST['option2'])) {
    $option2=$_POST["option2"];
}
if (isset($_POST['option3'])) {
    $option3=$_POST["option3"];
}
if (isset($_POST['option4'])) {
    $option4=$_POST["option4"];
}
$answer1 = $_POST["radios"];  
if ($answer1 == "TN") { 
$add=$_POST["nameofi"];
$add.=",";
$add=$_POST["street"];
$add.=",";
	$add.=$_POST["area"];
	$add.=",";
	$add.=$_POST["district"];
	$add .= "\n";
	$add.=$_POST["state"];
	$add .= "\n";
	$add.=$_POST["pincode"];

   
}
else if ($answer1 == "NOT" )
{
	$add=$_POST["nameofi1"];
$add.=",";
   $add=$_POST["street1"];
   $add.=",";
	$add.=$_POST["area1"];
	$add.=",";
	$add.=$_POST["district1"];
	$add .= "\n";
	$add.=$_POST["state1"];
	$add .= "\n";
	$add.=$_POST["pincode1"];

}     

/*
if($other==NULL)
{
	
}
else
{
	$add = $street;
	$add .= "\n";
	$add .= $area;
	$add .="\n";
	$add .= $other;
	$add .= "\n";
	$add .= $pincode;

}*/
	$answer = $_POST["gender"];  
if ($answer == "male") {          
    $gender="male";
}
else if ($answer == "female"){
    $gender="female";
}     
else{
	$gender="others";
}
$answer1 = $_POST["typeofid"];  
if ($answer1 == "employee") {          
    $typeofid="employee";
}
else if ($answer1 == "student"){
    $typeofid="student";
} 
else if ($answer1 == "aadhar"){
    $typeofid="aadhar";
}       
else{
	$typeofid="others";
}
 $image = $_FILES["fileToUpload"]["name"];
 $target = "images/".basename($image);
 $image2 = $_FILES["fileToUpload2"]["name"];
 $image3 = $_FILES["fileToUpload3"]["name"];
 $target2 = "images/".basename($image2);
 $target3 = "images/".basename($image3);
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn->set_charset ("utf8");   
// Check connection
if (!$conn)    
    die("Connection failed: " . mysqli_connect_error());
else
//	echo $add;
           //echo " Connected sucessfully <br>" ;
   	  $sql = "INSERT INTO scientist_information VALUES ('$name','$gender',$age,'$dob','$qualification','$occupation','$occ_des','$occ_ind','$occ_soc','$add','$mobile',
	  '$number','$fax','$email','$option1','$option2','$option3','$option4','$contribution','$others_contribution',0,'$image','$image2','$image3','$typeofid','$idnum')";
	   if (mysqli_query($conn,$sql)) 
		{
			 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
     if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
  // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
   if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)) {
  // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
  ?>
<script>
if(confirm("INSERTED SUCCESSFULLY")) {
   //window.location.href = "http://localhost/scientist/registration.php"
}</script>
		<?php }
}}
else {echo "Error: " . $sql . "<br>" . mysqli_error($conn);
?>
		 <?php }
mysqli_close($conn);}?>
</body>
</html>