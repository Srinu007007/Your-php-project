<?php 
session_start();
include("connection.php");
$userprofile= $_SESSION['user_name'];
$query="SELECT * FROM users WHERE email='$userprofile'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);





?>


<?php

if(isset($_POST['update'])){

require 'connection.php';

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$num=$_POST['num'];
	$time=$_POST['time'];
	$userprofile= $_SESSION['user_name'];
	


$query1="UPDATE users SET  fname='$fname',lname='$lname',mbl='$num',Register_time='$time' where email='$userprofile'";
$data1=mysqli_query($conn,$query1);
//$total1=mysqli_num_rows($data1);

//echo '<a href="select.php">click here</a>';	
//echo $total1."<br>";

if($data1==1){
	echo '<script> alert("Your Profile updated.. ")  </script>';
	header('location:userprofile.php');
}
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


<!-- upper nav bar -->
<div id="nav1" style="background-color:#ffcc33;" >

<ul class="nav justify-content-end"style="background-color:#ffcc33;">
  <li class="nav-item" >
    <a class="nav-link active" style="color:white;font-size:12px;"aria-current="page" href="donationhistory.php">Donation History</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" style="color:white;font-size:12px;"href="darshanhistory.php">Darshan History</a>
  </li>
<li class="nav-item">
    <a class="nav-link" style="color:white;font-size:12px;"href="userprofile.php">Profile</a>
  </li>
<li class="nav-item">
    <a class="nav-link" style="color:white;font-size:12px;" href="userchangepassword.php">Change Password</a>
  </li>
<li class="nav-item">
    <a class="nav-link" style="color:white;font-size:12px;" href="logout.php">Logout</a>
  </li>
 
  
</ul>
</div>







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
    <a class="nav-link active" style="color:white;"aria-current="page" href="userindex.php">Home</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" style="color:white;"href="userourfestivals.php">Our Festivals</a>
  </li>
<li class="nav-item">
    <a class="nav-link" style="color:white;"href="usertemple.php">Temple</a>
  </li>
     <li class="nav-item">
    <a class="nav-link" style="color:white;"href="usersevas.php">Sevas</a>
  </li>
<li class="nav-item">
    <a class="nav-link" style="color:white;" href="usercontact.php">Contact Us</a>
  </li>
 
  
</ul>
</div>



<hr>



<div class="container">
<pre style="font-size:30px;"></pre><pre style="font-size:30px; color:red;">Welcome : <?php echo $result['fname']; ?> <?php echo $result['lname']; ?></pre>
<pre style="font-size:30px;">UPDATE  PROFILE</pre>
<form action="#" method="post" >
	<div class="row">
		<div class="col-lg-8">
			<div class="row">

					<div class="col-lg-6">
						
						<div class="form-group">
						<b><label style="margin-bottom:10px;">FIRST NAME:</label></b><br>
						<input type="text" name="fname" id="fname" value="<?php echo $result['fname'];?>" class="form-control">
						</div>

						<div class="form-group">
						<b><label style="margin-bottom:10px;">MOBILE MEMBER:</label></b><br>
						<input type="text" name="num" id="num" value="<?php echo $result['mbl'];?>" class="form-control">
						</div>
					
						
						




								
					</div>
                       <div class="col-lg-6">
					    <div class="form-group">
						<b><label style="margin-bottom:10px;">LAST NAME:</label></b><br>
						<input type="text" name="lname" id="lname" value="<?php echo $result['lname'];?>" class="form-control">
						</div>

						<div class="form-group">
						<b><label style="margin-bottom:10px;">TIME</label></b><br>
						<input type="text" name="time" id="time" value="<?php echo $result['Register_time'];?>" class="form-control">
						</div>

						

					</div>

			</div>
		</div>

		<div class="col-lg-4">
		</div>

		
	</div>
	<BR>
		<!--<b><label style="margin-bottom:10px;">MESSAGE</label></b><br>
<textarea class="from-control" name="message" id="message" rows="10" cols="120"></textarea><br>-->
<input type="submit" name="update" id="update" value="UPDATE" class="btn btn-primary lg-5" STYLE="background-color:#008040;">
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