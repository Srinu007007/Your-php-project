<?php
session_start();
if(isset($_POST['Register']))
{
require 'connection.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mbl=$_POST['mbl'];
$password=$_POST['password'];


$query="INSERT INTO users (fname,lname,email,mbl,password) VALUES ('$fname', '$lname', '$email', '$mbl', '$password')";
$data=mysqli_query($conn, $query);
if($data){
echo '<script> alert("Your Register Successfully.. ")  </script>';}
else {
echo '<script> alert("Alread Email id used... ")  </script>';

}
}

if(isset($_POST['login'])){
require 'connection.php';
$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM users WHERE email='$username' && password ='$password'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
//echo $total;
if($total==1)
	{
	   $_SESSION['user_name']=$username;
	   header('location:userindex.php');


     }
else
	echo '<script> alert("Your Username or password Invalid.. ")  </script>';



}
?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript">

 function  val1(){
	var fname=document.getElementById("fname").value;
	//var password=document.getElementById("password").value;
	var lname=document.getElementById("lname").value;
	var email=document.getElementById("email").value;
	var mbl=document.getElementById("mbl").value;
	var password=document.getElementById("password").value;
	var cpassword=document.getElementById("cpassword").value;
	if(fname=="")
	 {
		alert("Enter First Name");
		return false;
	 }
	 if(lname=="")
	 {
		alert("Enter Last Name");
		return false;
	 }
	  if(email=="")
	 {
		alert("Enter Email");
		return false;
	 }
	 if(mbl=="")
	 {
		alert("Enter Mobile Number");
		return false;
	 }
	 
	 if(password=="")
	 {
		alert("Enter Password ");
		return false;
	 }
	 if(cpassword=="")
	 {
		alert("Enter Confirm password ");
		return false;
	 }

	 if(cpassword!=password)
	 {
		alert(" Passwords did not match ");
		return false;
	 }
	 




 }


  </script>
<style>



.footer{
background-color:#fcb900;
width:100%;

}
.header{
background-color:#fcb900;
width:100%;

}
.copyrights{
width:100%;
color:black;

}
h3{
font-size:20px;
color:#dc3545;
}
#icon{
margin-left:24%;
margin-bottom:12px;
margin-top:10px;
}
li a{
text-transform:uppercase;
font-weight:bold;


}
ul{

background-color:#fcb900;
}

</style>

</head>
<body>


<div class="header">
			<div class="container">
					<div class="row">

						<div class="col-lg-6">
								<img src="img/icon.png" width="70" height="70" id="icon" class="rounded" border="0" alt="">
								<h3>Online Temple Management System</h3>
						</div>

						<div class="col-lg-6">
							<!--	<input type="submit" value="New Users" style="margin-left:70%;margin-top:10%;color:white;" class="btn btn-outline-danger"/>-->
						</div>

						</div>


					</div>
			</div>
</div>










<!-- nav bar -->

<div id="nav1" >

<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" style="color:white;"aria-current="page" href="index.php">Home</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" style="color:white;"href="ourfestivals.php">Our Festivals</a>
  </li>
<li class="nav-item">
    <a class="nav-link" style="color:white;"href="temple.php">Temple</a>
  </li>
<li class="nav-item">
    <a class="nav-link" style="color:white;" href="contact.php">Contact Us</a>
  </li>
 <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" style="color:white;"data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Login</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="login.php">User Login</a></li>
      
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="adminlogin.php">Admin login</a></li>
    </ul>
  </li>
  
</ul>
</div>


<!-- slide show -->


<div class="container">
	<hr>

<h3 style="text-align:center;margin-top:10px;">Register</h3>

<div class="row" style="margin-top:30px;">
	<div class="col-lg-6">
		<h4 style="margin-bottom:20px;">Personal Inforamation</h4>
		<form action="" method="post" onsubmit="return val1()">
			<div class="form-group col-lg-11">
			<b>First Name</b><br>
			<input type="text" class="form-control lg-11"name="fname"  id="fname" value="" placeholder="First Name"><br>
			</div>
			<div class="form-group col-lg-11">
			<b><label>Last Name</label></b><br>
			<input type="text" class="form-control lg-11"name="lname"  id="lname" value="" placeholder="Last Name"><br>
			</div>
			<div class="form-group col-lg-11">
			<b>Email Address</b><br>
			<input type="email" class="form-control lg-11"name="email"  id="email" value="" placeholder="Email Address"><br>
			</div>
			<div class="form-group col-lg-11">
			<b>Mobile Number</b><br>
			<input type="text" class="form-control lg-11"name="mbl"  id="mbl" value="" placeholder="Mobile Number"><br>
			</div>
			<div class="form-group col-lg-11">
			<b>Password</b><br>
			<input type="password" class="form-control lg-11"name="password"  id="password" value="" placeholder="Password"><br>
			</div>
			<div class="form-group col-lg-11">
			<b>Confirm password</b><br>
			<input type="password" class="form-control lg-11"name="cpassword"  id="cpassword" value="" placeholder="Confirm password"><br>
			</div>
			<input type="submit" value="Register" name="Register" class="btn btn-primary">
		</form>
	</div>
	<div class="col-lg-6">
		<h4 style="margin-bottom:20px;">Login Inforamation</h4>
			<form action="" method="post">
			<div class="form-group col-lg-11" onsubmit="return val()">
			<b>Username</b><br>
			<input type="text" class="form-control lg-11"name="username"  id="username" value="" placeholder="Registered Email or Contact Number"><br>
			</div>
			<div class="form-group col-lg-11">
			<b>Password</b><br>
			<input type="password" class="form-control lg-11"name="password"  id="password" value="" placeholder="Password"><br>
			</div>
			<input type="submit" name="login" value="LOGIN" class="btn btn-success">
			</form>
	</div>
</div>
</div>




<HR>




<div class="footer" style="margin-top:20px;">
		
<div class="container"style="margin-top:20px;">
		<div class="row"style="margin-top:20px;">

					
                 
<!-- first part-->
				<div class="col-lg-6"style="margin-top:25px;">

                 <h3>OUR LOCATION</H3>
			<P>
<PRE>
Address Tirumala Tirupati Devasthanams

TTD Administrative Building K.T. 

Road Tirupati 517 501. 

Andhra Pradesh India. 

Phone Numbers for call Centre (24/7)
</PRE>
			</P>

				</div>
 
<!-- second part-->
				<div class="col-lg-6">

<div class="row">


<div class="col-lg-6"style="margin-top:25px;">

<h3> OUR TEMPLE </H3>
<ul>
<li> HOME </li>
<li> OUR FESTIVALS </li>
<li> TEMPLE </li>
<li> CONTACT US  </li>
<li> LOGIN </li>


</ul>
</div>



<div class="col-lg-6"style="margin-top:25px;">

<h3> GET CONNECTE </H3>

<i class="fa fa-facebook-square fa-lg" style="margin-right:10px;"></i>Facebook <br>
<i class="fa fa-twitter fa-lg"style="margin-right:10px;"></i>Twitter<br>

<i class="fa fa-youtube fa-lg"style="margin-right:10px;"></i>YouTube<br>



<i class="fa fa-instagram fa-lg"style="margin-right:10px;"></i>Instagram


</ul>
</div>


</div>





				</div>
 



		</div>
</div>

</div>
<div class="copyrights" style="background-color:black;">

<p style="text-align:center;color:white;"> <i class="fa fa-copyright"></i> copy rights 2021-2022</p>
</div>
</div>






</body>
</html>