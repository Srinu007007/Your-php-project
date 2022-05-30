<?php
session_start();
if(isset($_POST['submit']))
{
require 'connection.php';
 $useremail=$_SESSION['user_name'];
$nm=$_POST['nm'];
$mbl=$_POST['mbl'];
$sevaname=$_POST['sevaname'];
$date=$_POST['date'];
$sevatype=$_POST['sevatype'];


$query="INSERT INTO sevasbooking (name,sevaname,sevatype,mbl,useremail,bookingdate) VALUES ('$nm', '$sevaname', '$sevatype', '$mbl', '$useremail','$date')";
$data=mysqli_query($conn, $query);
echo $query;
if($data){
echo '<script> alert("Your Booking Successfully.. ")  </script>';

 

header("location:successsevas.php?data='$date'&sevaname='$sevaname'&mbl='$mbl'&nm='$nm'&sevatype='$sevatype'");

}

}
?>


<!DOCTYPE html>
<html>
<head>
<script>
function val(){
	
	var nm=document.getElementById("nm").value;
	var mbl=document.getElementById("mbl").value;
	var date=document.getElementById("date").value;

	if(nm==""){
		alert("Enter a Name");
		return false;

	}
if(mbl==""){
		alert("Enter a Mobile Number");
		return false;

	}
if(date==""){
		alert("Select The date");
		return false;

	}


}


</script>
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
								<!--<input type="submit" value="New Users" style="margin-left:70%;margin-top:10%;color:white;" class="btn btn-outline-danger"/>-->
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




<!-- Booking  body-->



<center><h3>BOOKING SEVAS </H3>
</center>
<div class="container">

<div class="col-lg-6" style="border:1px solid black;padding:10px;padding-top:30px;padding-bottom:30px;border-radius:10px;
margin-left:21%;margin-top:20px;">
<form action="" method="POST" onsubmit="return val()">
	

			<h3 style="background-color:gray;padding:5px;color:white;text-align:center;margin-bottom:20px;"> Booking form</h3>
			<div style="margin-left:7%;">
			
			<b><label>Name:</label></b>
			<div class="form-group col-lg-10">
				<input type="text" name="nm" id="nm" placeholder="Enter Name" class="form-control lg-10">
			</div>
			<b><label>Mobile Name:</label></b>
			<div class="form-group col-lg-10">
				<input type="text" name="mbl" id="mbl" placeholder="Enter Mobile Number" class="form-control lg-10">
			</div>

			<b><label>Seva Name:</label></b>
			<div class="form-group col-lg-10">
				<input type="text" name="sevaname1" id="sevaname1" placeholder="Enter Name"  value="<?php echo $_GET['sevaname'] ?>"class="form-control lg-10" disabled >
			</div>

			<div class="form-group col-lg-10">
				<input type="hidden" name="sevaname" id="sevaname"   value="<?php echo $_GET['sevaname'] ?>"class="form-control lg-10"  >
			</div>
            
			<b><label style="margin-top:10px;margin-bottom:10px;">Seva Type Choose One:</label></b>
			<div class="form-group ">
				<input type="radio" name="sevatype" checked value="day <?php echo $_GET['daycost'];?>"> <b>Day</b> Cost is : <?php echo $_GET['daycost'];?>
			</div>

			<div class="form-group ">
				<input type="radio" name="sevatype" value="annuel <?php echo $_GET['annualcost'];?>"> <b>Annuel</b> Cost is : <?php echo $_GET['annualcost'];?>
			</div>

			<b><label style="margin-top:10px;">Save Date and Time:</label></b>
			<div class="form-group col-lg-10">
				<input type="datetime-local" name="date" id="date" placeholder="Enter Name" class="form-control lg-10">
			</div>

    <b><label style="margin-top:10px;"></label></b>
			<div class="form-group">
				<input type="submit" name="submit" id="submit" value="Book"class="btn btn-danger col-lg-10">
			</div>
		</div>


</FORM>
	</div>






</div>

<!-- Booking end body -->
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