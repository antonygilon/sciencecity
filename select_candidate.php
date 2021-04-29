<html>
<body>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scientist";
$mail="mythilimythu77@gmail.com";
$email=$_POST["mail"];
$em=trim($email);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['b2'])) {
	

	echo $mail;
	echo "<br>";
echo $email;
echo "<br>";
	$sql= "UPDATE scientist_information SET confirm=1 where Email =  '{$em}' ";
		 if (mysqli_query($conn,$sql)) 
		{
			?>
			<script>if(confirm("ADDED SUCCESSFULLY")) {window.location.href = "http://localhost/scientist/select.php"}</script>
		<?php }
		else {?>
		<script> if(confirm("ERROR IN ADDING")) {window.location.href = "http://localhost/scientist/select.php"}</script> 
		<?php 
		}
}
if (isset($_POST['b3'])) {
    $sql="delete from scientist_information where Email= '{$em}'";
	 if (mysqli_query($conn,$sql)) 
		{?>
			<script>
if(confirm("DELETED SUCCESSFULLY")) {
    window.location.href = "http://localhost/scientist/select.php"
}</script>
		<?php }else {?>
		<script>
if(confirm("ERROR IN DELETING")) {
    window.location.href = "http://localhost/scientist/select.php"
		}</script> <?php
mysqli_close($conn);}}?>
*/?>
</body>
</html>