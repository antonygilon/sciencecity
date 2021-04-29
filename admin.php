<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.back
{

    font-size:20px;
  }

   h2
  {
    color:red;
    font-size:34px;
    text-align: center;
  }
form {}

input[type=text], input[type=password] {
  width: 20%;
  padding: 12px 20px;
  margin: 7px 0;
  display: inline-block;
  
  
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}

button:hover {
  opacity: 0.8;
}



.container {
  padding: 16px;
}


  
}
</style>
<script type="text/javascript">
  function validate()
  {
    var uname=document.getElementById("uname").value;
    var psw=document.getElementById("psw").value;
 
    if(uname == "scientist@678" && psw=="TN@#!1234")
     { 
        if(confirm("LOGIN SUCCESSFUL")) {
         window.location.href = "http://localhost/scientist/select.php"}
      }
    else if(uname=="scientist@295" && psw=="TN@#!4080")
      {
       if(confirm("LOGIN SUCCESSFUL")) {
      window.location.href = "http://localhost/scientist/select.php"}
      }
    else
        alert("ERROR IN LOGIN");
        document.getElementById("uname").value="";
         document.getElementById("psw").value="";
      }
</script>
</head>
<body>
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
     <center>
<h2>LOGIN FORM</h2>

<forn>
 

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="uname" name="uname" required>
    <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="psw"name="psw" required>
    <br>
    <button type="submit" onclick="validate()">Login</button>
   
  </div>

  
  </div>
</form>

</body>
</html>
