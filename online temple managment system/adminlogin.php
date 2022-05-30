<?php

if(isset($_POST['submit'])){
require 'connection.php';
$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM admin WHERE username='$username' && password ='$password'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
//echo $total;
if($total==1)
	{
	  echo '<script> alert("Your login Successfully... ")  </script>';

	   header('location:adminindex.php');


     }
else
	echo '<script> alert("Your Username or password Invalid.. ")  </script>';



}
?>


<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Admin Login</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
function val(){
	
var username=document.getElementById("username").value;
var password=document.getElementById("password").value;
if(username=="")
	{
		alert("Enter Username");
		return false;
	}
	if(password=="")
	{
		alert("Enter Password");
		return false;
	}


}


</script>

 </head>
 <body>

<div class="container" style="margin-top:10%">

<div class="row">

<div class="col-lg-5">

<b style="color:green;">***Online Temple Mangement System***</b><br><br>
<b>Weclome Back..!</b><br>
<b style="color:#c0c0c0;">Happy to see you again!</b>

<!-- form creation -->

<form action="" method="post" style="margin-top:30px;" onsubmit="return val()">

<div class="form-group col-lg-10">
<label >Username</label>
<input type="text" name="username" id="username" class="form-control "value="" placeholder="Username">
  </div>

<br>

<div class="form-group col-lg-10">
<label >Password</label>
<input type="password" name="password" id="password" class="form-control "value="" placeholder="Password">
  </div>
<br>

<input type="checkbox" id="check" name="check" >&nbsp;&nbsp;Keep me signed in
<br>
<br>
<div class="d-grid gap-2 col-10 mx-auto">
 <input type="submit" value="Login" name="submit" class="btn btn-info" style="color:white;">
  <a href="index.php"class="btn btn-primary">Home</a>
</div>
</form>









<!-- form close -->




</div>

<div class="col-lg-6">
<center>
<img src="img/admin.png" width="568" height="388" border="0" alt="">
</center>
</div>


</div>



</div>


  
 </body>
</html>
