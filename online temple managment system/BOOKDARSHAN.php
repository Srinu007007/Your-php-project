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
<style>

body{

background-image:url("img/back.jpg");

}
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

<hr>

<div class="container">
<pre style="font-size:30px;">BOOK DARSHAN</pre>
<form action="login.php" method="post">
	<div class="row">
		<div class="col-lg-8">
			<div class="row">

					<div class="col-lg-6">
						
						<div class="form-group">
						<b><label style="margin-bottom:10px;">DATE OF DARSHAN:</label></b><br>
						<input type="date" name="date" id="date" value="" class="form-control">
						</div>

						<div class="form-group">
						<b><label style="margin-bottom:10px;">TOTAL MEMBER:</label></b><br>
						<input type="NUMBER" name="num" id="num" value="" class="form-control">
						</div>
						<div class="form-group">
						<b><label style="margin-bottom:10px;">STATE:</label></b><br>
						<input type="text" name="state" id="state" value="" class="form-control">
						</div>
						
						<div class="form-group">
						<b><label style="margin-bottom:10px;">IDENTITY PROOF:</label></b><br>
						<select name="identityproof" placeholder="Choose Identity Proof" class="form-control" >
							<option value="Choose Identity Proof">Choose Identity Proof</option>
							<option value="Adhar card">Adhar card</option>
							<option value="Voter card">Voter card</option>
							<option value="Passport card">Passport card</option>
							<option value="Driving License">Driving License</option>
						</select>
						</div>




								
					</div>
                       <div class="col-lg-6">
					    <div class="form-group">
						<b><label style="margin-bottom:10px;">TIME OF DARSHAN:</label></b><br>
						<input type="time" name="time" id="time" value="" class="form-control">
						</div>

						<div class="form-group">
						<b><label style="margin-bottom:10px;">CITY:</label></b><br>
						<input type="text" name="city" id="city" value="" class="form-control">
						</div>

						<div class="form-group">
						<b><label style="margin-bottom:10px;">COUNTRY:</label></b><br>
						<input type="text" name="country" id="country" value="" class="form-control">
						</div>

						<div class="form-group">
						<b><label style="margin-bottom:10px;">IDENTITY PROOF NUMBER:</label></b><br>
						<input type="text" name="IDNO" id="IDNO" value="" class="form-control">
						</div>

					</div>

			</div>
		</div>

		<div class="col-lg-4">
		</div>

		<div class="form-group col-lg-4">
		<b><label style="margin-bottom:10px;">PHYSICALLY HANDICAPPER</label></b><br>
<select name="message"id="message" class="form-control">
	<option value="Choose One">Choose One
	<option value="YES">Yes
	<option value="NO">No
</select>
</div>

		
	</div>

	
<br>
<input type="submit" name="send" id="send" value="SEND" class="btn btn-primary lg-5" STYLE="background-color:#008040;">
</form>	
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